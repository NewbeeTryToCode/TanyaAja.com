<?php 

function delete_byId($table, $column, $id){

	global $conn;
    $query = "DELETE FROM $table WHERE $column =" . $id;
    $result = mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function insert_qustion($data){

    global $conn;
    $id = $_SESSION['id'];

	// ambil data dari tiap elemen dalam form
	// htmlspecialchars() digunakan untuk membedakan script html, agar user tidak bisa menulis script html pada pengisian data
	$title = htmlspecialchars($data["title"]);
	$descrip = htmlspecialchars($data["descrip"]);
    $created_at = $updated_at = date('Y-m-d H:i:s');
    
    
	// uplod gambar
	$image = upload(); //nilai yang ingin dibalikan nantinya berupa nama file gambar, agar nama file bisa dimasukan ke database
	if ( !$image ){
		return false;
	}

	// query insert data
	$query = "INSERT INTO questions VALUES ('', \"$title\", \"$descrip\", \"$image\", '$created_at', '$updated_at', $id);";

	$result = mysqli_query($conn, $query);
	if($result){

		// insert category
		$question_id = get_max_id("questions");
		if( !empty($data["category"]) ){
			$categories = htmlspecialchars($data["category"]);
			$categories = explode(",", $categories);
	
			// masukan ke database
			foreach($categories as $category){
				$category = trim($category);
				$query = "INSERT INTO categories VALUES ('', '$category', $question_id);";
				mysqli_query($conn, $query);
			}
			
		}

	}
    
	return mysqli_affected_rows($conn); // mysqli_affected_rows () = -1 jika error
}

function update_question($data){
	global $conn;

	// ambil data dari tiap elemen dalam form
	// htmlspecialchars() digunakan untuk membedakan script html, agar user tidak bisa menulis script html pada pengisian data
	$question_id = $data["id"];
	$title = htmlspecialchars($data["title"]);
	$descrip = htmlspecialchars($data["descrip"]);
	$old_image = htmlspecialchars($data["old_image"]);
    $created_at = $updated_at = date('Y-m-d H:i:s');

	// cek apakah user pilih gambar baru atau tidak
	if ( $_FILES['image']['error'] === 4 ){
		$image = $old_image;
	}else{
		$image= upload();
	}
	

	// query insert data
	$query = "UPDATE questions SET
				title = \"$title\",
				description = \"$descrip\",
				updated_at = '$updated_at',
				image = '$image'
			WHERE id = $question_id
			";

	$result = mysqli_query($conn, $query);
	if($result){

		// insert category
		delete_byId("categories", "question_id", $question_id);
		if( !empty($data["category"]) ){
			$categories = htmlspecialchars($data["category"]);
			$categories = explode(",", $categories);
	
			// masukan ke database
			foreach($categories as $category){
				$category = trim($category);
				$query = "INSERT INTO categories VALUES ('', '$category', $question_id);";
				mysqli_query($conn, $query);
			}
			
		}

	}

	return mysqli_affected_rows($conn); // mysqli_affected_rows () = -1 jika error
}

function upload (){
	// membentuk array multidimensi, sudah pasti ada indeks array name, size, error, tmp_name
	$namafile = $_FILES['image']['name'];
	$ukuranfile = $_FILES['image']['size'];
	$error = $_FILES['image']['error'];
	$tmpname = $_FILES['image']['tmp_name']; // tmp_name = letak file sementara

	// cek apakah tdk ada yg diupload
	// 4 = pesan error yang berarti tdk ada gambar yang diupload
	if ($error === 4){
		return "no image";
	}

	// cek apakah yg di upload adalah gambar
	$ekstensivalid = ['jpg', 'jpeg', 'png'];
	$ekstensigambar = explode('.', $namafile);
	// explode(delimiter, string) = berfungsi untuk memecah string, delimiter adalah pembatasnya
	// ['image1.jpg'] menjadi ['image', 'jpg'];
	$ekstensigambar = strtolower(end($ekstensigambar)); 
	// strtolower, mengubah string kapital ke string huruf kecil, .JPG => .jpg
	//end = berfungsi untuk mengambil indeks array terakhir

	if ( !in_array($ekstensigambar, $ekstensivalid) ){
		// in_array(needle, haystack), berfungsi untuk mencari string dalam array

		echo "<script>
				alert ('yang anda upload bukan gambar !');
				</script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if ($ukuranfile > 1000000){
		echo "<script>
				alert ('ukuran gambar terlalu besar !');
				</script>";
		return false;

	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namafilebaru = uniqid(); //uniqid (), membuat str random
	// var_dump($namafilebaru); die;
	$namafilebaru .= '.'; 
	$namafilebaru .= $ekstensigambar;
	// var_dump($namafilebaru); die;

	move_uploaded_file($tmpname, '../CRUD/Question/img/'. $namafilebaru);
		// move_uploaded_file(filename, destination), memindahkan file yang diupload ke direktori yang diinginkan
	return $namafilebaru;
}

function get_data($result){
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function insert_answer($data){

    global $conn;
    $user_id = $_SESSION['id'];

	// ambil data dari tiap elemen dalam form
	// htmlspecialchars() digunakan untuk membedakan script html, agar user tidak bisa menulis script html pada pengisian data
	$descrip = htmlspecialchars($data["yAnswerDesc"]);
	$question_id = $data["question_id"];
    $created_at = $updated_at = date('Y-m-d H:i:s');
    
    
	// uplod gambar
	$image = upload(); //nilai yang ingin dibalikan nantinya berupa nama file gambar, agar nama file bisa dimasukan ke database
	if ( !$image ){
		return false;
	}

	// query insert data
	$query = "INSERT INTO answers VALUES ('', \"$descrip\", \"$image\", '$created_at', '$updated_at', $user_id, $question_id);";

	$result = mysqli_query($conn, $query);
	return mysqli_affected_rows($conn); // mysqli_affected_rows () = -1 jika error
}

function insert_reply($data){

    global $conn;
    $user_id = $_SESSION['id'];

	// ambil data dari tiap elemen dalam form
	// htmlspecialchars() digunakan untuk membedakan script html, agar user tidak bisa menulis script html pada pengisian data
	$descrip = htmlspecialchars($data["replyInput"]);
	$answer_id = $data["answer_id"];
    $created_at = $updated_at = date('Y-m-d H:i:s');

	// query insert data
	$query = "INSERT INTO replies VALUES ('', \"$descrip\", '$created_at', '$updated_at', $user_id, $answer_id);";

	$result = mysqli_query($conn, $query);
	return mysqli_affected_rows($conn); // mysqli_affected_rows () = -1 jika error
}

// fungsi sql
function get_all_byId_withJoin($table1, $table2, $onkey1, $onkey2, $id){

	global $conn;
    $query = "SELECT * FROM $table1 as t1 INNER JOIN $table2 as t2 ON t1.$onkey1 = t2.$onkey2 WHERE id = $id ORDER BY id DESC";
    $result = mysqli_query($conn, $query);

    return get_data($result);

}

function get_max_id($table){
    global $conn;
    $query = "SELECT MAX(id)  FROM $table";
    $result = mysqli_query($conn, $query);

    return get_data($result)[0]["MAX(id)"];
}

function get_all($table){
    global $conn;
    $query = "SELECT * FROM $table ORDER BY id DESC";
    $result = mysqli_query($conn, $query);

    return get_data($result);
}

function get_all_byId($table, $column, $id){
    global $conn;
    $query = "SELECT * FROM $table WHERE $column = $id ORDER BY id DESC";
    $result = mysqli_query($conn, $query);

    return get_data($result);
}


// snipet
function limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos   = array_keys($words);
        $text  = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}

// pagination
function get_pagination($data){
	$start_page = 0;
	$data_len = count($data);
	$data_per_page = 5;
	$page_len = ceil($data_len/$data_per_page);
	$pagination = [];

	$remain_data = $data_len;
	for($i = 0; $i < $page_len; $i++){

		if( $remain_data < $data_per_page ){
			$data_per_page = $remain_data;
		}
		$pagination[] = [
			"start" => $start_page,
			"end" => ($start_page + $data_per_page)-1
		];

		$start_page += $data_per_page;
		$remain_data -= $data_per_page;
	}

	return $pagination;
}


?>