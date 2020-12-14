<?php 
include("../konek.db.php");
include('./functions.php');
include("../session.php");

// ambil id pertanyaan

if(isset($_POST['delete'])){

    $id = $_POST['id'];
    $question = get_all_byId("questions", "id", $id)[0];
    $answers = get_all_byId("answers", "question_id", $question['id']);

    // hapus balasan dan gambar jawaban
    foreach($answers as $answer){
        delete_byId("replies", "answer_id", $answer['id']);
        delete_file("img/", $answer['image']);
    }

    // hapus jawaban
    delete_byId("answers", "question_id", $question['id']);

    // hapus category
    delete_byId("categories", "question_id", $question['id']);

    // hapus
    if(delete_byId("questions", "id", $id) > 0){

        delete_file("img/", $question['image']);
        echo " 
                <script> 
                    alert('data berhasil dihapus'); 
                    document.location.href = '../../Views/my_questions.php';
                </script> 
        ";
    }else{
        echo " 
            <script> 
                alert('data gagal dihapus'); 
                document.location.href = '../../Views/my_questions.php';
            </script> 
        ";
    }

}
