<?php 
include("../CRUD/konek.db.php");
include("../CRUD/session.php");
$judul = "Edit Profile";
?>

<?php
    if (isset($_POST['uploadprof'])) {
        if ($_GET['hal'] == "edit") {
            $nama_prof = $_FILES['profilepic']['name'];
            $source = $_FILES['profilepic']['tmp_name'];
            $folder = '../CRUD/Profile/uploads/';
            $profil = mysqli_query($conn, "UPDATE users SET prof='$nama_prof' WHERE id ='$_GET[id]'");
            move_uploaded_file($source, $folder.$nama_prof);
            if ($profil) {//Jika Edit sukses
                echo "<script>
                        alert('Edit data sukses!'); 
                        document.location='profile.php';
                    </script>";
            }else{//Jika Edit Gagal
                echo "<script>
                        alert('Edit data GAGAL!! ^_^'); 
                        document.location='profile.php';
                    </script>";
            }
        }
    }elseif (isset($_POST['uploadback'])) {
        $nama_back = $_FILES['background']['name'];
        $source = $_FILES['background']['tmp_name'];
        $folder = '../CRUD/Profile/uploads/background/';
        $background = mysqli_query($conn, "UPDATE users SET back = '$nama_back' WHERE id ='$_GET[id]'");
        move_uploaded_file($source, $folder.$nama_back);
        if ($background) {//Jika Edit sukses
            echo "<script>
                    alert('Edit data sukses!'); 
                    document.location='profile.php';
                </script>";
        }else{//Jika Edit Gagal
            echo "<script>
                    alert('Edit data GAGAL!! ^_^'); 
                    document.location='profile.php';
                </script>";
        }
    }
    
    
?>

<?php
    if (isset($_POST['simpan'])) {
        if ($_GET['hal'] == "edit") {
            //data akan di edit
          $edit = mysqli_query($conn, "UPDATE `users` SET username ='$_POST[tusername]', fname='$_POST[tfname]', email='$_POST[temail]', phone = '$_POST[tphone]', alamat ='$_POST[talamat]' WHERE id ='$_GET[id]'");
          if ($edit) {//Jika Edit sukses
            echo "<script>
                      alert('Edit data sukses!'); 
                      document.location='profile.php';
                  </script>";
          }else{//Jika Edit Gagal
            echo "<script>
                      alert('Edit data GAGAL!! ^_^'); 
                      document.location='profile.php';
                  </script>";
          }
        }
    }
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
              $valamat = $data['alamat'];
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
                    <form action="" method="POST" enctype="multipart/form-data">
                        <?php
                            $tampil = mysqli_query($conn, "SELECT * FROM users");
                            $data = mysqli_fetch_array($tampil);
                        ?>
                        <div class="form-group">
                            <label class="fontform" for="username">Username</label>
                            <input type="text" class="form-control" name="tusername" value="<?=@$vuser?>">
                        </div>
                        <div class="form-group">
                            <label class="fontform" for="fname">Fullname</label>
                            <input type="text" class="form-control" name="tfname" value="<?=@$vnama?>">
                        </div>
                        <div class="form-group">
                            <label class="fontform" for="email">Email</label>
                            <input type="email" class="form-control" name="temail" value="<?=@$vemail?>">
                        </div>
                        <div class="form-group">
                            <label class="fontform" for="phone">Phone Number</label>
                            <input type="tel" class="form-control" onkeypress="return onlyNumberKey(event)" name="tphone" value="<?=@$vphone?>">
                        </div>
                        <div class="form-group">
                            <label class="fontform" for="addres">Address</label>
                            <input type="text" class="form-control" name="talamat" value="<?=@$valamat?>">
                        </div>
                        <p class="fontform">Profile Picture</p>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="profilepic">
                                    <label class="custom-file-label" for="profilepic" aria-describedby="inputGroupFileAddon02">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <button type="submit" class="input-group-text" name="uploadprof">Upload</button>
                                </div>
                            </div>    
                            <p class="fontform">Backround Picture</p>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="background">
                                    <label class="custom-file-label" for="background" aria-describedby="inputGroupFileAddon02">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <button type="submit" class="input-group-text" name="uploadback">Upload</button>
                                </div>
                            </div>
                        <br><br><button type="submit" name="simpan" class="btn abu btn-primary tombol"><i class="far fa-check-circle ijo"></i>  Save</button><br>
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
    <script> 
              function onlyNumberKey(evt) { 
                  // Only ASCII charactar in that range allowed 
                  var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
                  if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
                  return false; 
                  return true; 
              } 
        </script>
  </body>
</html>