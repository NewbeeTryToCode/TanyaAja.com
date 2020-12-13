<?php 
include("../CRUD/konek.db.php");
include('../CRUD/Question/functions.php');
include("../CRUD/session.php");

// id pertanyaan
if( isset($_GET['id']) ){

    // ambil id pertanyaan
    $id = $_GET['id'];

    // ambil data pertanyaan
    $question = get_all_byId("questions", "id", $id)[0];
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
    <link rel="stylesheet" href="../../Public/assets/css/publicq.css">
    <link rel="stylesheet" href="../../Public/assets/css/detail.css">

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
            <div class="container-fluid abu mt-3 p-4">
                <!-- question -->
                <div class="container shadow rounded-lg questions">
                    <a href="" class="title"><h4><?php echo $question['title']; ?></h4></a>
                        <p class="coklat"><?php echo $question['description']; ?></p>
                        <!-- image -->
                        <?php if( $question['image'] != "no image" && !empty($question['image'])) : ?>
                            <div class="imageContainer" style="width: 100%; height:400px; background-color:  rgb(230, 230, 230); padding:20px; border-radius:16px; margin-bottom:15px">
                                <img src="../CRUD/Question/img/<?php echo $question['image'];?>" alt="" style="width: 100%; height: 100%; object-fit: contain;">
                            </div>
                        <?php endif; ?>
                        <div class="categories">
                            <span class="profile">
                                <img src="../../Public/assets/img/profil.jpg" alt="">
                                <p class="ungu">Nathalie</p>
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
                            <span class="shadow-sm">
                                <i class="far fa-eye"></i>
                                <p>7</p>
                            </span>
                            <span class="shadow-sm">
                                <i class="far fa-check-circle"></i>
                                <p class="green">7</p>
                            </span>
                            <span class="shadow-sm">
                                <i class="far fa-check-square"></i>
                                <p class="red">7</p>
                            </span>
                        </div>
                </div>
                <!-- question -->

                <div class="container answerTitle">
                    <h3>Answer</h3>
                </div>

                <!-- answer -->
                <div class="container shadow rounded-lg answers">
                    <p class="coklat">I dont know how to fix it but fighting!!! </p>
                    <div class="categories">
                        <span class="profile">
                            <img src="../../Public/assets/img/profil.jpg" alt="">
                            <p class="ungu">Nathalie</p>
                        </span>
                    </div>
                    <hr>
                    <div class="container">
                        <p class="coklat">I love you gek iluh!!</p>
                        <div class="categories">
                            <span class="profile">
                                <img src="../../Public/assets/img/profil.jpg" alt="">
                                <p class="ungu">Nathalie</p>
                            </span>
                        </div>
                    </div>
                    <form action="#">
                        <input type="text" class="abu" id="replyInput" placeholder="add reply">
                        <button name="reply" class="shadow-sm">reply</button>
                    </form>
                    
                </div>
                <!-- answer -->

                <div class="container answerTitle">
                    <h3>Your Answer</h3>
                </div>

                <!-- your answer -->
                <div class="container shadow rounded-lg yourAnswer">
                    <form action="">
                        <label for="foto">Add your image here</label><br>
                        <input type="file" id="foto">
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
  </body>
</html>