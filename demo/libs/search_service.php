<?php

require_once('./libs/connect.php');
$conn = connect();
if (isset($_POST['btn-search'])){
    $valuesearch = $_POST['search'];
    $query = "SELECT * FROM `USERS` WHERE CONCAT(`userId`, `ten`, `email`, `pass_word`, `sdt`, `avatar`)LIKE '%".$valuesearch."%'";
    $result = $conn -> query($query);
}

?>