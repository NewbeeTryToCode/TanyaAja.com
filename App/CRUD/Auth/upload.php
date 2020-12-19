<?php
session_start();
include_once '../konek.db.php';
$id = $_SESSION['id'];
if (isset($_POST['submit'])) {
    $file = $_FILES['profilepic'];
    
    $fileName = $_FILES['profilepic']['name'];
    $fileTmpName = $_FILES['profilepic']['tmp_name'];
    $fileSize = $_FILES['profilepic']['size'];
    $fileError = $_FILES['profilepic']['error'];
    $fileType = $_FILES['profilepic']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0 ) {
            if ($fileSize < 500000) {
                $fileNameNew = "profile".$id.".".$fileActualExt;

                $fileDestination = '../Profile/uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $sql = "UPDATE users SET prof = 0 WHERE id='$id';";
                $result = mysqli_query($conn, $sql);
                header("Location: ../Views/edit_profile.php?uploadsuccess");
            }else {
                echo "<script>
                      alert('File terlalu besar!'); 
                      document.location='../Views/edit_profile.php';
                  </script>";
            }
        }else {
            echo "<script>
                      alert('Ada error pada upload file mu!'); 
                      document.location='../Views/edit_profile.php';
                  </script>";
        }
    }else{
        echo "<script>
                      alert('Kamu tidak dapat upload file dengan type ini'); 
                      document.location='../Views/edit_profile.php';
                  </script>";
    }
}