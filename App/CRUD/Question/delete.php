<?php 
include("../konek.db.php");
include('./functions.php');
include("../session.php");

if( $user['role'] == 'admin' ){
    $redirect = 'admin_manage_question.php';
}else{
    $redirect = 'my_questions.php';
}

if(isset($_POST['delete'])){

    // ambil id pertanyaan
    $id = $_POST['id'];
    $question = get_all_byId("questions", "id", $id)[0];
    $answers = get_all_byId("answers", "question_id", $question['id']);

    // hapus views
    delete_byId("views", "question_id", $question['id']);

    // hapus likes
    delete_byId("likes", "question_id", $question['id']);

    // hapus balasan dan gambar jawaban
    foreach($answers as $answer){
        delete_byId("replies", "answer_id", $answer['id']);
        if( $answer['image'] != "no image" ){
            delete_file("img/", $answer['image']);
        }
    }

    // hapus jawaban
    delete_byId("answers", "question_id", $question['id']);

    // hapus category
    delete_byId("categories", "question_id", $question['id']);

    // hapus
    if(delete_byId("questions", "id", $id) > 0){

        if( $question['image'] != "no image" ){
            delete_file("img/", $question['image']);
        }
        echo " 
                <script> 
                    alert('data berhasil dihapus'); 
                    document.location.href = '../../Views/$redirect';
                </script> 
        ";
    }else{
        echo " 
            <script> 
                alert('data gagal dihapus'); 
                document.location.href = '../../Views/$redirect';
            </script> 
        ";
    }

}
