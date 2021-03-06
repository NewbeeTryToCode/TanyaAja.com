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

    <title>Sidebar navbar</title>
  </head>
  <body>

    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Side Bar -->
        <nav id="sidebar" class="shadow-lg p-4">
            <div class="sidebar-header d-flex flex-column align-items-center">
                <img class="avatarImg" src="../../Public/assets/img/profil.jpg" alt="">
                <h5 class="mt-3 biru">Nathalie</h5>
                <p class="biru">nathalietheresia@gmail.com</p>
            </div>
            <div class="container shadow-sm">

                <ul class="list-group list-group-flush">
                    <li class="list-group-item abu">
                        <a href="">Profile</a>
                    </li>
                    <li class="list-group-item abu">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Questions</a>
                        <ul type="none" class="list-group list-group-flush" id="homeSubmenu">
                            <li class="abu">
                                <a href="">Public Questions</a>
                            </li>
                            <li class="abu">
                                <a href="">My Questions</a>
                            </li>
                        </ul>
                    </li>
                    

            </div>
            
            </ul>
        </nav>
        <!-- Side Bar -->

        <div id="content">
            <!-- Nav Bar -->
            <nav class="navbar navbar-expand-lg navbar-light abu">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn abu mr-4">
                        <i class="fas fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#"><h3 class="judul">Page Title</h3></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a href="#" class="btn abu shadow-sm rounded ml-2 "><i class="far fa-bell"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="btn abu shadow-sm rounded ml-2"><i class="far fa-envelope"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="btn abu shadow-sm rounded ml-2"><i class="fas fa-cog"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="btn abu shadow-sm rounded ml-2"><i class="fas fa-sign-out-alt"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
            <!-- Nav Bar -->



            <!-- main content -->
            <div class="container">
                <h1>Isi Konten Disini</h1>
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