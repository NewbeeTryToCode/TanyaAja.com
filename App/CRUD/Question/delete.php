<?php 
include("../konek.db.php");
include('./functions.php');
include("../session.php");

// ambil id pertanyaan
$id = $_GET['id'];

// hapus
if(delete_byId("questions", "id", $id) > 0){
    echo " 
        <script> 
            alert('data berhasil dihapus'); 
            document.location.href = '../../Views/my_questions.php';
        </script> 
    ";
}