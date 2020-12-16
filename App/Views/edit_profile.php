<?php 
include("../CRUD/konek.db.php");
include("../CRUD/session.php");
$judul = "Edit Profile"
?>

<?php
    if (isset($_GET['hal'])) {
        //Pengujian jika edit data
        if ($_GET['hal'] == "edit") {
            //tampilkan data yang di edit
            $tampil = mysqli_query($conn, "SELECT * FROM users WHERE id = '$_GET[id]'");
            $data = mysqli_fetch_array($tampil);
            if ($data) {
              //jika data ditemukan, maka data di tampung ke dalam variabel
              $vuser = $data['username'];
              $vnama = $data['fname'];
              $valamat = $data['address'];
              $vemail = $data['email'];
              $vphone = $data['phone'];
            }
        }
      }
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
    <link rel="stylesheet" href="../../Public/assets/css/edit profile.css">
    <link rel="stylesheet" href="../../Public/assets/css/publicq.css?v=<?php echo time();?>">
    <title>Edit Profile</title>
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
                    <form>
                        <?php
                            $tampil = mysqli_query($conn, "SELECT * FROM users");
                            $data = mysqli_fetch_array($tampil);
                        ?>
                        <div class="form-group">
                            <label class="fontform" for="username">Username</label>
                            <input type="text" class="form-control" id="username" value="<?=@$vuser?>">
                        </div>
                        <div class="form-group">
                            <label class="fontform" for="fname">Fullname</label>
                            <input type="text" class="form-control" id="fname" value="<?=@$vnama?>">
                        </div>
                        <div class="form-group">
                            <label class="fontform" for="email">Email</label>
                            <input type="email" class="form-control" id="email" value="<?=@$vemail?>">
                        </div>
                        <div class="form-group">
                            <label class="fontform" for="phone">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" value="<?=@$vphone?>">
                        </div>
                        <div class="form-group">
                            <label class="fontform" for="addres">Address</label>
                            <input type="text" class="form-control" id="addres" value="<?=@$valamat?>">
                        </div>
                        <p class="fontform">Profile Picture</p>
                        <div class="custom-file">
                            <label class="custom-file-label" for="profilepic">Choose file</label>
                            <input type="file" class="custom-file-input" id="profilepic">
                        </div><br>
                        <br><p class="fontform">Backround Picture</p>
                        <div class="custom-file">
                            <label class="custom-file-label" for="profilepic">Choose file</label>
                            <input type="file" class="custom-file-input" id="profilepic">
                        </div>
                        <br><br><button type="button" class="btn abu btn-primary tombol"><a href="profile.php"><i class="far fa-check-circle ijo"></i>  Save</a></button><br>
                      </form>
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