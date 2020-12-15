<?php 
include("../CRUD/konek.db.php");
include('../CRUD/Question/functions.php');
include("../CRUD/session.php");

$judul = "Admin Notifications"
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

    <title>Notification</title>
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
                            <h5 class="q-count">280,756 Notifications</h5>
                            <span class="filter-item">
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                                </form>
                                <span class="add shadow-sm"><i class="fas fa-plus-circle"></i></span>
                            </span>
                        </li>
                        <li class="list-group-item abu">
                            <div class="quesion">
                                <a href="" class="title"><h4>How to include API</h4></a>
                                <p class="description">i cannot include API on my JavaScript code please help me on fixing this...</p>
                                <div class="categories">
                                    <span class="profile">
                                        <img src="../../Public/assets/img/profil.jpg" alt="">
                                        <p class="ungu">Nathalie</p>
                                    </span>
                                </div>
                            </div>
                            <br>
                        </li>
                        <li class="list-group-item abu">
                            <div class="quesion">
                                <a href="" class="title"><h4>How to include API</h4></a>
                                <p class="description">i cannot include API on my JavaScript code please help me on fixing this...</p>
                                <div class="categories">
                                    <span class="profile">
                                        <img src="../../Public/assets/img/profil.jpg" alt="">
                                        <p class="ungu">Nathalie</p>
                                    </span>
                                </div>
                            </div>
                            <br>
                        </li>
                        <li class="list-group-item abu">
                            <div class="quesion">
                                <a href="" class="title"><h4>How to include API</h4></a>
                                <p class="description">i cannot include API on my JavaScript code please help me on fixing this...</p>
                                <div class="categories">
                                    <span class="profile">
                                        <img src="../../Public/assets/img/profil.jpg" alt="">
                                        <p class="ungu">Nathalie</p>
                                    </span>
                                </div>
                            </div>
                            <br>
                        </li>
                    </ul>
                    <div class="pageContainer">
                        <ul class="pagination shadow-sm">
                            <li class="page-item">
                                <a class="page-link abu" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link abu" href="#">1</a></li>
                            <li class="page-item"><a class="page-link abu" href="#">2</a></li>
                            <li class="page-item"><a class="page-link abu" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link abu" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </div>
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