<?php 
include("../konek.db.php");
include('./functions.php');

// masukan notifikasi
if (insert_notif($_POST) > 0){
    echo "
        <script>
            alert ('pesan berhasil dikirim');
            document.location.href = '../../../Public/index.php';
        </script>

    ";
}else{
    echo "
        <script>
            alert ('pesan gagal dikirim');
            document.location.href = '../../../Public/index.php';
        </script>

    ";
}