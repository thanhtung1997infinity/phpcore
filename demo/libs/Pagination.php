<?php

require_once('./libs/connect.php');

$conn = connect();
$limit = 3;
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$offset = $limit * ($page - 1);
$valuesearch = '';

$queryAll = "SELECT * 
 FROM USERS ";

$queryTotal =  "SELECT count(*) as total
FROM USERS ";

if (isset($_GET['search'])) {
  $valuesearch = $_GET['search'];
  $queryAll .= "WHERE CONCAT(`userId`, `ten`, `email`, `pass_word`, `sdt`, `avatar`)LIKE '%" . $valuesearch . "%'";
  $queryTotal .= "WHERE CONCAT(`userId`, `ten`, `email`, `pass_word`, `sdt`, `avatar`)LIKE '%" . $valuesearch . "%'";
}


$dt = $conn->query($queryTotal);
$r = mysqli_fetch_assoc($dt);
$totalpages = ceil($r['total'] / $limit);
$links = "";


for ($i = 1; $i <= $totalpages; $i++) {
  $links .= ($i != $page)
    ? "<a href='index.php?search=$valuesearch&page=$i'>Page $i</a> "
    : "$page ";
}


$queryAll .= " LIMIT $offset, $limit ";

$r = $conn->query($queryAll);
