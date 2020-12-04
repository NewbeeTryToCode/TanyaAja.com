<?php 
$judul = "Profile"
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
    <link rel="stylesheet" href="../../Public/assets/css/profile special.css">
    <title>Profile</title>
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
                        <div class="parrent">
                            <img src="../../Public/assets/img/Kander.svg" class="img-fluid background" alt="Kander">
                            <div>
                                <img class="align-self-center mr-3 position-absolute rounded-circle img-fluid avatar" src="../../Public/assets/img/profil.jpg" alt="Generic placeholder image">
                            </div>
                        </div>
                        <li class="list-group-item abu">
                            <div class="container bawahback">
                                <div class="row justify-content-center">
                                    <div class="col-4">
                                        <p>Pertanyaan Dijawab</p>
                                        <i class="far fa-check-circle col-md-auto"></i>
                                        <p>50</p>
                                    </div>
                                    <div class="col-4">
                                      <p>Pertanyaan Diajukan</p>
                                      <i class="far fa-question-circle"></i>
                                      <p>50</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item abu">
                            <div class="quesion">
                                <h4 class="fonttitle">Username</h4>
                                <p class="fontbio">Nathalie</p>
                            </div>
                        </li>
                        <li class="list-group-item abu">
                            <div class="quesion">
                                <h4 class="fonttitle">Full Name</h4>
                                <p class="fontbio">Nathalie Theresia Girsang</p>
                            </div>
                        </li>
                        <li class="list-group-item abu">
                            <div class="quesion">
                                <h4 class="fonttitle">Email</h4>
                                <p class="fontbio">nathanalietheresia@gmail.com</p>
                            </div>
                        </li>
                        <li class="list-group-item abu">
                            <div class="quesion">
                                <h4 class="fonttitle">Phone Number</h4>
                                <p class="fontbio">089324812952</p>
                            </div>
                        </li>
                        <li class="list-group-item abu">
                            <div class="quesion">
                                <h4 class="fonttitle">Address</h4>
                                <p class="fontbio">Jalanin aja dulu gang suwir batubulan</p>
                            </div>
                        </li>
                        <a class="btn btn-outline-primary" href="edit_profile.php" role="button">Edit Profile</a>
                    </ul>
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
