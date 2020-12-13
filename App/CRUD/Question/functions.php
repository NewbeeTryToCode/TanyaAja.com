<?php 

function delete_byId($table, $id){

	global $conn;
    $query = "DELETE FROM $table WHERE id=" . $id;
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
	$query = "INSERT INTO questions
				VALUES
				('', '$title', '$descrip', '$image', '$created_at', '$updated_at', $id)
			";

    mysqli_query($conn, $query);
    
    // insert category
    if( !empty($data["category"]) ){
        $categories = htmlspecialchars($data["category"]);
        $categories = explode(",", $categories);
        $question_id = get_max_id("questions");

        // masukan ke database
        foreach($categories as $category){
            $category = trim($category);
            $query = "INSERT INTO categories VALUES ('', '$category', $question_id);";
            mysqli_query($conn, $query);
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

// fungsi sql
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


?>