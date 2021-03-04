<?php 
    require_once('./libs/connect.php');
    require_once('./libs/helper.php');
    require_once('./libs/auth_service.php');

    
    $method = $_SERVER['REQUEST_METHOD'];
    $errors = [];
    if ($method == 'POST') {
        $email = $_POST["email"];
        $password = $_POST["password"];
        if (!validateEmail($email)) {
            $email_error = 'Email không hợp lệ';
            $errors[] = $email_error;
        }
        $conn = connect();
        if (isset($conn) && empty($errors)){
            $sql = "SELECT ten,email,pass_word,avatar,sdt FROM USERS WHERE email = '$email'";
            $result = $conn->query($sql);
            $user = mysqli_fetch_array($result);
        
            if(!empty($user)){
                if(password_verify($password, $user["pass_word"])){
                    handleLogin($user);
                }
            }else{
                echo 'user khong ton tai';
            }
            
        }
    }
?>