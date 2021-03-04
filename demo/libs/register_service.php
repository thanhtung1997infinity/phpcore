<?php
require_once('./libs/connect.php');
require_once('./libs/helper.php');
require_once('./libs/auth_service.php');

$method = $_SERVER['REQUEST_METHOD'];
$errors = [];

if ($method == 'POST') {
    $names = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $confirm = $_POST["confirmPW"];
    

    $file = $_FILES["fileToUpload"];
    $image_name = $file["name"];
    $descPath = './image/'.$file['name'];
    move_uploaded_file($file['tmp_name'], $descPath);
    $path = my_server_url().'/demo/image/'.$file['name'];

    if (!validateEmail($email)) {
        $email_error = 'Email không hợp lệ';
        $errors[] = $email_error;
    }
    if (!validateConfirmpw($password, $confirm)) {
        $confirm_error = 'Mật khẩu không khớp';
        $errors[] = $confirm_error;
    }
    $conn = connect();
    if (isset($conn) && empty($errors)) {
        $pwd = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO USERS(ten, email, pass_word, sdt, avatar) VALUES ('$names','$email','$pwd','$phone', '$path')";
        $result = $conn->query($sql);
        $sql = "SELECT ten,email,pass_word,avatar,sdt FROM USERS WHERE email = '$email'";
        $result = $conn->query($sql);
        $user = mysqli_fetch_array($result);
        handleLogin($user, 'profiles.php');
        echo $conn->error;
    }
    
}
