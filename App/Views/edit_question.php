<?php 
include("../CRUD/konek.db.php");
include('../CRUD/Question/functions.php');
include("../CRUD/session.php");

// tombol tambah
if( isset($_POST['update']) ){
    
    // validasi input
    if (update_question($_POST) > 0){
		echo "
			<script>
				alert ('data berhasil diubah');
				document.location.href = 'my_questions.php';
			</script>

		";
	}else{
		echo "
			<script>
				alert ('data gagal diubah');
				document.location.href = 'my_questions.php';
			</script>

		";
	}

}

// id pertanyaan
if( isset($_GET['id']) && !empty($_GET['id']) ){

    // ambil id pertanyaan
    $id = $_GET['id'];

    // ambil data pertanyaan
    $question = get_all_byId("questions", "id", $id)[0];
    if( !$question ){
        header("Location:my_questions.php");
        exit;
    }

    // ambil kategori
    $categories = get_all_byId("categories", "question_id", $question['id']);
    $categories = implode(', ', array_column($categories, 'name'));

}else{
    header("Location:my_questions.php");
    exit;
}


$judul = "Edit Question"
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
    <link rel="stylesheet" href="../../Public/assets/css/create_question.css">
    <title>Edit Question</title>
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
                        <li class="list-group-item abu">
                            <div class="quesion">
                                <form action="./edit_question.php" method="POST" enctype='multipart/form-data'>
                                    <input type="hidden" name="id" value="<?php echo $question['id'];?>">
                                    <input type="hidden" name="old_image" value="<?php echo $question["image"]; ?>">
                                    <div class="form-group">
                                        <label for="title">Question Title</label>
                                        <input type="text" class="form-control" name="title" id="title"  placeholder="Your Questions Title" value="<?php echo $question['title'];?>">
                                    </div><br>
                                    <div class="form-group">
                                        <label for="descrip">Question Description</label>
                                        <textarea class="form-control" id="descrip" name="descrip" rows="3" placeholder="Your Question Description"><?php echo $question['description'];?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <input type="text" class="form-control box" name="category" id="category" placeholder="Add Questions Category (coding, JavaScript)" value="<?php echo $categories;?>">
                                    </div>
                                    <p>Your Question Files</p>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label box" for="customFile">Choose file</label>
                                    </div>
                                    <br><br>
                                    <button type="submit" class="btn btn-outline-primary tombol" name="update"><img src="../../Public/assets/img/send-black-18dp.svg" alt="send"> Update</button> 
                                </form>
                                
                            </div>
                        </li>
                    </ul>
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