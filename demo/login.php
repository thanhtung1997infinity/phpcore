<html>

<head>
    <link rel="stylesheet" href="./css/style.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<?php
require_once('./libs/login_service.php');
?>


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login via site</h3>
                </div>
                <div class="panel-body">
                    <form action='' method='POST' accept-charset="UTF-8" role="form">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="yourmail@example.com" name="email" type="text">
                                <span class='text-danger'>
                                    <?php
                                    if (isset($email_error)) echo $email_error; ?>
                                    </span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                </label>
                            </div>
                            <input name="log" class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                        </fieldset>
                    </form>
                    <hr />
                    <center>
                        <h4>OR</h4>
                    </center>
                    <a  class="btn btn-lg btn-facebook btn-block" href="register.php">Register</a>
                </div>
            </div>
        </div>
    </div>
</div>


</html>