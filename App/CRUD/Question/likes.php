<?php 
include("../konek.db.php");
include('./functions.php');
include("../session.php");

$question_id = $_GET['question_id'];
$action = $_GET['action'];

if( $action == 'add' ){
    insert_likes($user['id'], $question_id);
}

if( $action == 'delete' ){
    delete_byId('likes', 'user_id', $user['id']);
}