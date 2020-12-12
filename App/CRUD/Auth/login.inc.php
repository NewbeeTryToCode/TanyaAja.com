<?php
    include "../konek.db.php";
    if (isset($_POST['username']) && isset($_POST['password'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $user = validate($_POST['username']);
        $pwd = validate($_POST['password']);

        if (empty($user) && empty($pwd)) {
            header("Location: ../../../Public/index.php?error=username & password required");
            exit();
        }else if(empty($user)){
            header("Location: ../../../Public/index.php?error=user name is required");
            exit();
        }elseif (empty($pwd)) {
            header("Location: ../../../Public/index.php?error=password is required");
            exit();
        }
        else{
            $sql = "SELECT * FROM users WHERE username='$user' AND password='$pwd'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result)) {
                $row = mysqli_fetch_assoc($result);
                if ($row['username'] === $user && $row['password'] === $pwd) {
                    if ($row['role'] === 'admin') {
                        session_start();
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['role'] = $row['role'];
                        $_SESSION['id'] = $row['id'];
                        header("Location: ../../Views/admin_manage_question.php");
                        exit(); 
                    }elseif($row['role'] === 'user'){
                        session_start();
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['role'] = $row['role'];
                        $_SESSION['id'] = $row['id'];
                        header("Location: ../../Views/public_questions.php");
                        exit();
                    }else{
                        header("Location: ../../../Public/index.php?error=wrong usertype");
                        exit();
                    }
                }
            }else{
                header("Location: ../../../Public/index.php?error=incorrect username and password");
                exit();
            }
        }
    }else{
        header("Location: ../../../Public/index.php?error=no user");
        exit();
    }
?>