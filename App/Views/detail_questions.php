<?php 
include("../CRUD/konek.db.php");
include('../CRUD/Question/functions.php');
include("../CRUD/session.php");

// tombol post
if( isset($_POST['post']) ){
    // masukan jawaban ke database
    insert_answer($_POST);
}

// tombol reply
if ( isset($_POST['reply']) ){
    // masukan balasan ke database
    insert_reply($_POST);
}

// id pertanyaan
if( isset($_GET['id']) && !empty($_GET['id']) ){

    // ambil id pertanyaan
    $id = $_GET['id'];

    // ambil data pertanyaan
    $question = get_all_byId("questions", "id", $id)[0];
    if( !$question ){
        header("Location:public_questions.php");
        exit;
    }
    // ambil data semua jawaban
    $answers = get_all_byId("answers", "question_id", $id);
}else{
    header("Location:public_questions.php");
    exit;
}

// views
$isUserviews = get_all_byThisAndThat("views", "user_id", "question_id", $user['id'], $id);
if( !count($isUserviews) > 0 ){
    insert_views($user['id'], $id);
}

// ambil jumlah views
$views = get_all_byId("views", "question_id", $id);
if( count($views) > 0 ){
    $viewCounts = count($views);
}else{
    $viewCounts = 0;
}

// ambil jumlah jawaban
$answers = get_all_byId("answers", "question_id", $id);
if( count($answers) > 0 ){
    $answerCounts = count($answers);
}else{
    $answerCounts = 0;
}


$judul = "Questions Detail"
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../Public/assets/css/bootstrap.css">

    <!-- font awesome icons -->
    <!-- <script src="https://kit.fontawesome.com/18740318f6.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="../../Public/assets/icons/css/all.css">

    <!-- My Styles -->
    <link rel="stylesheet" href="../../Public/assets/css/side_navbar.css">
    <link rel="stylesheet" href="../../Public/assets/css/publicq.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../../Public/assets/css/detail.css?v=<?php echo time();?>">

    <title>Questions Detail</title>
  </head>
  <body>

    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Side Bar -->
        <?php include_once('sidebar.php') ?>
        <!-- Side Bar -->

        <div id="content">
            <!-- Nav Bar -->
            <?php include_once('navbar.php') ?>
            <!-- Nav Bar -->

            <!-- main content -->
            <div class="container-fluid abu mt-3 p-3">
                <!-- question -->
                <div class="container shadow rounded-lg questions">
                    <div class="dateTime">
                        <?php $date = date_create($question['updated_at']);?>
                        <pre><?php echo date_format($date,"d M Y") ?></pre>
                    </div>
                    <a href="" class="title"><h4><?php echo $question['title']; ?></h4></a>
                    <p class="coklat"><?php echo $question['description']; ?></p>
                    <!-- image -->
                    <?php if( $question['image'] != "no image" && !empty($question['image'])) : ?>
                        <div class="imageContainer">
                            <img src="../CRUD/Question/img/<?php echo $question['image'];?>" alt="gambar">
                        </div>
                    <?php endif; ?>
                    <div class="categories">
                        <span class="profile">
                            <?php $profile = get_all_byId("users", "id", $question['user_id'])[0]; ?>
                            <img src="../CRUD/Profile/uploads/<?php echo $profile['prof']; ?>" alt="">
                            <p class="ungu"><?php echo $profile['username']; ?></p>
                        </span>
                        <span class="categoriesContainer">
                            <!-- categories -->
                            <?php $categories = get_all_byId("categories", "question_id", $question["id"]);?>
                            <?php foreach($categories as $category) : ?>
                                <span class="categories-item shadow-sm ungu"><?php echo $category['name']; ?></span>
                            <?php endforeach; ?>
                        </span>
                    </div>
                    <div class="icons">
                        <!-- views -->
                        <span class="shadow-sm">
                            <i class="far fa-eye"></i>
                            <p><?php echo $viewCounts; ?></p>
                        </span>
                        <!-- views -->

                        <!-- likes -->
                        <?php $isUserLike = get_all_byThisAndThat("likes", "user_id", "question_id", $user['id'], $question['id']); ?>
                        <span class="shadow-sm <?php if(count($isUserLike) > 0) echo "like"; ?>" id="like">
                            <i class="far fa-check-circle"></i>
                            <?php $likes = get_all_byId("likes", "question_id", $question["id"]); ?>
                            <?php 
                                if( count($likes) > 0 ){
                                    $likecounts = count($likes);
                                }else{
                                    $likecounts = 0;
                                }
                             ?>
                            <p class="green"><?php echo $likecounts; ?></p>
                        </span>
                        <!-- likes -->

                        <!-- answers -->
                        <span class="shadow-sm">
                            <i class="far fa-check-square"></i>
                            <p class="red"><?php echo $answerCounts; ?></p>
                        </span>
                        <!-- answers -->
                    </div>
                </div>
                <!-- question -->

                <div class="container answerTitle">
                    <h3>Answers</h3>
                </div>

                <!-- answer -->
                <?php if( count($answers) > 0 ) : ?>
                    <?php foreach( $answers as $answer ) : ?>
                        <div class="container shadow rounded-lg answers mt-5">
                            <div class="dateTime">
                                <?php $date = date_create($answer['updated_at']);?>
                                <pre><?php echo date_format($date,"d M Y") ?></pre>
                            </div>
                            <p class="coklat mt-2"><?php echo $answer['description']; ?></p>
                            <!-- image -->
                            <?php if( $answer['image'] != "no image" && !empty($answer['image'])) : ?>
                                <div class="imageContainer">
                                    <img src="../CRUD/Question/img/<?php echo $answer['image'];?>" alt="gambar">
                                </div>
                            <?php endif; ?>
                            <!-- image -->
                            <div class="profileContainer">
                                <span class="profile">
                                    <?php $profile = get_all_byId("users", "id", $answer['user_id'])[0]; ?>
                                    <img src="../CRUD/Profile/uploads/<?php echo $profile['prof']; ?>" alt="">
                                    <p class="ungu"><?php echo $profile['username']; ?></p>
                                </span>
                            </div>
                            <hr>

                            <!-- replies -->
                            <?php $replies = get_all_byId("replies", "answer_id", $answer['id']); ?>
                            <?php foreach( $replies as $reply ) : ?>
                            <div class="container">
                                <p class="coklat"><?php echo $reply['description']; ?></p>
                                <div class="profileContainer">
                                    <span class="profile">
                                        <?php $profile = get_all_byId("users", "id", $question['user_id'])[0]; ?>
                                        <img src="../CRUD/Profile/uploads/<?php echo $profile['prof']; ?>" alt="">
                                        <?php $date = date_create($reply['updated_at']);?>
                                        <span>
                                            <p class="ungu"><?php echo $profile['username']; ?></p>
                                            <pre class="dateTime replies"><?php echo " - " . date_format($date,"d M Y") ?></pre>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <!-- replies -->

                            <!-- reply input-->
                            <form action="./detail_questions.php?id=<?php echo $question['id'];?>" method="POST">
                                <input type="hidden" name="answer_id" value="<?php echo $answer['id'];?>">
                                <input type="text" class="abu" id="replyInput" placeholder="add reply" name="replyInput">
                                <button type="submit" name="reply" class="shadow-sm">reply</button>
                            </form>
                            <!-- reply input-->
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="container noAnswers">No Answer</div>
                <?php endif; ?>
                <!-- answer -->

                <div class="container answerTitle">
                    <h3>Your Answer</h3>
                </div>

                <!-- your answer -->
                <div class="container shadow rounded-lg yourAnswer mt-4" >
                    <form action="./detail_questions.php?id=<?php echo $question['id'];?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="question_id" value="<?php echo $question['id'];?>" id="input_quest_id">
                        <label for="foto">Add your image here</label><br>
                        <input type="file" id="foto" name="image">
                        <hr>
                        <textarea name="yAnswerDesc" id="" cols="30" rows="5" placeholder="Add your answer here" class="abu ansText">I think..</textarea>
                        <br><br>
                        <div class="btnPost">
                            <button name="post" class="shadow">post</button>
                        </div>
                    </form>
                </div>
                <!-- your answer -->



            </div>
            <!-- main content -->


        </div>

        
    </div>
    <!-- Wrapper -->

    






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    <script>

        const toggle = document.getElementById('sidebarCollapse');
        const sidebar = document.getElementById('sidebar');
        toggle.addEventListener('click', function(e){
            e.preventDefault();
            sidebar.classList.toggle('active');
        })

    </script>
    <script src="../../Public/assets/js/questions.js"></script>
  </body>
</html>