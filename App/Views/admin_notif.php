<?php 
include("../CRUD/konek.db.php");
include('../CRUD/Question/functions.php');
include("../CRUD/session.php");

// tombol search
if( isset($_GET['search']) && !empty($_GET['search']) ){
    $keyword = $_GET['search'];
    $notifications = get_search_notif($keyword);
    $add = "&search=$keyword";
}else{
    $notifications = get_all("notifications", "DESC");
    $add = "";
}

$pagination = get_pagination($notifications);
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
$judul = "Admin Notifications";
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
                            <?php if( count($notifications) > 0) : ?>
                                <h5 class="q-count"><?php echo count($notifications) ?> Notifications</h5>
                            <?php else : ?>
                                <h5 class="q-count">No Notifications</h5>
                            <?php endif; ?>
                            <span class="filter-item">
                                <!-- searching -->
                                <form class="form-inline" action="./admin_notif.php" method="GET">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" value="<?php if(isset($keyword)) echo $keyword;?>">
                                    <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                                </form>
                                <!-- searching -->
                            </span>
                        </li>
                        <?php if( count($notifications) > 0 ) : ?>
                            <?php $start = $pagination[$curPage]['start']; $end = $pagination[$curPage]['end']; ?>
                            <?php for( $pos = $start; $pos <= $end; $pos++ ) : ?>
                            <li class="list-group-item abu">
                                <div class="quesion">
                                    <a href="" class="title"><h4><?php echo $notifications[$pos]['name'] . " - " . $notifications[$pos]['email'];?></h4></a>
                                    <p class="description"><?php echo $notifications[$pos]['description']; ?></p>
                                </div>
                                <br>
                            </li>
                            <?php endfor; ?>
                        <?php endif; ?>
                    </ul>
                    <!-- Pagination -->
                    <div class="pageContainer">
                        <ul class="pagination shadow-sm">
                            <!-- prev -->
                            <?php if( $curPage > 0 ) : ?>
                                <li class="page-item">
                                    <a class="page-link abu" href="./admin_notif.php?page=<?php echo $curPage . $add ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <!-- prev -->

                            <?php foreach( $pagination as $pos => $page ) :  ?>
                                <li class="page-item"><a class="page-link abu" href="./admin_notif.php?page=<?php echo $pos + 1 . $add?>"><?php echo $pos + 1 ?></a></li>
                            <?php endforeach; ?>

                            <!-- next -->
                            <?php if( $curPage != count($pagination) - 1 && count($notifications) > 0) : ?>
                                <li class="page-item">
                                    <a class="page-link abu" href="./admin_notif.php?page=<?php echo $curPage + 2 . $add ?>" aria-label="Next">
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