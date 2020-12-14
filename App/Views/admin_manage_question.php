<?php 
include("../CRUD/konek.db.php");
include('../CRUD/Question/functions.php');
include("../CRUD/session.php");

// tombol search
if( isset($_GET['search']) && !empty($_GET['search']) ){
    $keyword = $_GET['search'];
    $questions = get_search_data($keyword);
}else{
    $questions = get_all("questions");
}


// pagination
$pagination = get_pagination($questions);
if( isset($_GET['page']) ){
    // cek apakah angka
    if( is_numeric($_GET['page']) && intval($_GET['page']) > 0){
        $curPage=$_GET['page'] - 1;
    }else{
        $curPage = 0;
    }
}else{
    $curPage = 0;
}

$judul = "Admin Questions Manager";
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
    <link rel="stylesheet" href="../../Public/assets/css/myQuestions.css">

    <title>Admin Questions Manager</title>
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
            <div class="container-fluid shadow-lg">
                <div class="container-fluid mt-3 p-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item abu" id="filterNav">
                            <?php if(count($questions) > 0) : ?>
                                <h5 class="q-count"><?php echo count($questions); ?> Questions</h5>
                            <?php else: ?>
                                <h5 class="q-count">No Questions</h5>
                            <?php endif; ?>
                            <span class="filter-item">
                               <!-- searching -->
                               <form class="form-inline" action="./admin_manage_question.php" method="GET">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" value="<?php if(isset($keyword)) echo $keyword;?>">
                                    <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                                </form>
                                <!-- searching -->
                                <span class="filter-category shadow-sm biru"><a href="">Newest</a></span>
                                <span class="filter-category shadow-sm biru"><a href="">Hot</a></span>
                                <span class="filter-category shadow-sm biru"><a href="">Unanswered</a></span>
                                <span class="add shadow-sm"><a href="create_question.php"><i class="fas fa-plus-circle"></i></a></span>
                            </span>
                        </li>
                        <!-- questions -->
                        <?php if(count($questions) > 0) :  ?>
                            <?php $start = $pagination[$curPage]['start']; $end = $pagination[$curPage]['end']; ?>
                            <?php for( $pos = $start; $pos <= $end; $pos++ ) : ?>
                                <li class="list-group-item abu">
                                    <div class="questionsContainer">
                                        <div class="dateTime">
                                            <?php $date = date_create($questions[$pos]['updated_at']);?>
                                            <pre><?php echo date_format($date,"d M Y") ?></pre>
                                        </div>
                                        <a href="./detail_questions.php?id=<?php echo $questions[$pos]['id'];?>" class="title"><h4><?php echo $questions[$pos]['title'] ?></h4></a>
                                        <p class="description">
                                            <?php $paragraf = limit_text($questions[$pos]['description'], 25); echo $paragraf ?>
                                        </p>
                                        <div class="categories">
                                            <span class="profile">
                                                <img src="../../Public/assets/img/profil.jpg" alt="">
                                                <p class="ungu">Nathalie</p>
                                            </span>
                                            <!-- categories -->
                                            <?php $categories = get_all_byId("categories", "question_id", $questions[$pos]["id"]);?>
                                            <?php foreach($categories as $category) : ?>
                                                <span class="categories-item shadow-sm ungu"><?php echo $category['name']; ?></span>
                                            <?php endforeach; ?>
                                            <!-- categories -->
                                        </div>
                                        <div class="icons">
                                            <div class="nocrudicon">
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
                                            <div class="crudicon">
                                                <span class="shadow-sm">
                                                    <a href="./edit_question.php?id=<?php echo $questions[$pos]['id'];?>"><i class="fas fa-pen biru"></i></a>
                                                </span>
                                                <span class="shadow-sm">
                                                    <form action="../CRUD/Question/delete.php" method="POST">
                                                        <input type="hidden" name="id" value="<?php echo $questions[$pos]['id'];?>">
                                                        <button name="delete" type="submit" style="border:none;"><a href=""><i class="far fa-trash-alt red"></a></i></button>
                                                    </form>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </li>
                            <?php endfor; ?>
                        <?php endif; ?>
                        <!-- questions -->
                    </ul>

                    <!-- Pagination -->
                    <div class="pageContainer">
                        <ul class="pagination shadow-sm">
                            <!-- prev -->
                            <?php if( $curPage > 0 ) : ?>
                                <li class="page-item">
                                    <a class="page-link abu" href="./my_questions.php?page=<?php echo $curPage ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <!-- prev -->

                            <?php foreach( $pagination as $pos => $page ) :  ?>
                                <li class="page-item"><a class="page-link abu <?php if($pos == $curPage) echo "bold"; ?>" href="./my_questions.php?page=<?php echo $pos + 1 ?>"><?php echo $pos + 1 ?></a></li>
                            <?php endforeach; ?>

                            <!-- next -->
                            <?php if( $curPage != count($pagination) - 1 && count($questions) > 0 ) : ?>
                                <li class="page-item">
                                    <a class="page-link abu" href="./my_questions.php?page=<?php echo $curPage + 2 ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <!-- next -->

                           
                        </ul>
                    </div>
                    <!-- Pagination -->
                </div>
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