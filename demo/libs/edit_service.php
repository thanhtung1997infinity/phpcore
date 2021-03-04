<?php
require_once('connect.php');
require_once('helper.php');
require_once('auth_service.php');


$method = $_SERVER['REQUEST_METHOD'];
$errors = [];
if ($method == 'POST') {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $confirm = $_POST["confirmPW"];
    $email = $_GET['email'];

    $file = $_FILES["fileToUpload"];
    $image_name = $file["name"];
    $descPath = './image/' . $file['name'];
    move_uploaded_file($file['tmp_name'], $descPath);
    // $path = $_SERVER['SERVER_NAME']. '/demo/image/' . $file['name'];
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
        $sql = "UPDATE USERS SET ten='$name', pass_word='$pwd', sdt='$phone', avatar='$path' WHERE email = '$email'";
        $result = $conn->query($sql);
        if(isset($result)){
            header('location: index.php');
        }
    }
}
