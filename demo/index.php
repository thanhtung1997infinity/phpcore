<?php
require_once('./libs/auth_service.php');
require_once('./libs/Pagination.php');
require_once('./libs/search_service.php');
checkLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    table {
      width: 100%;
      border: 1px solid black;
    }

    th {
      text-align: center;
      border: 1px solid black;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Portfolio</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php
          $user = getUser();
          if (empty($user)) { ?>
            <li action="login.php" method='GET'><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li action="register.php" method='GET'><a href="register.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
          <?php } else {  ?>
            <span style="color:red">
              <?php
          
              echo $user['email']
              ?>
            </span>
            <form method="POST" action="logout.php">
              <button type="submit">Logout</button>
            </form>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>

  <div class="jumbotron">
    <div class="container text-center">
      <h1>My Portfolio</h1>
      <p>Some text that represents "Me"...</p>
    </div>
  </div>
  <form method="GET" style="text-align: center; height: 100px;">
    <input type="text" name="search"><button><i class="fas fa-search"></i></button>
  </form>

  <center>
    <table>
      <tr>
        <th>Email</th>
        <th>SDT</th>
        <th>Avatar</th>
        <th>Edit</th>
      </tr>
      <?php
      while ($row = mysqli_fetch_array($r)) {
        echo '<tr> <th>' . $row['email']
          . '<th>' . $row['sdt']
          . '<th>' . ' ' . '<img alt="Null" style="height: 10rem; width: 20rem;" src="' . $row['avatar'] . '">'
          . '<th><a href=/demo/edit.php?email=' . $row["email"] . '>edit';
        // echo '<table style="border: 1px solid black;">'.'<tr>'. $row['email'] .' ' .$row['sdt'] .' ' .'<img alt="Null" style="height: 10rem; width: 20rem;" src="' .$row['avatar'].'">' .'</tr>';
      }
      ?>
      <div>
    </table>

    <?php

    echo $links;

    ?>
    </div>
  </center>





  <footer class="container-fluid text-center">
    <p>Footer Text</p>
  </footer>




</body>

</html>