<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<?php
require_once('./libs/edit_service.php');

?>



<div class="container">


    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">

            <form method="POST" enctype="multipart/form-data">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="name" class="form-control" placeholder="Full name" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="email" class="form-control" value="<?php
                                                                                echo $_GET['email'];
                                                                            ?>">


                </div>
                <span class='text-danger'>
                    <?php
                    if (isset($email_error)) echo $email_error; ?>
                </span> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <select class="custom-select" style="max-width: 120px;">
                        <option selected="">+84</option>
                        <option value="1">+972</option>
                        <option value="2">+198</option>
                        <option value="3">+701</option>
                    </select>
                    <input name="phone" class="form-control" placeholder="Phone number" type="text">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="password" class="form-control" placeholder="Create password" type="password">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="confirmPW" class="form-control" placeholder="Repeat password" type="password">


                    <input type="file" name="fileToUpload">

                </div>
                <span class='text-danger'>
                    <?php
                    if (isset($confirm_error)) echo $confirm_error; ?>
                </span> <!-- form-group// -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Update </button>
                </div> <!-- form-group// -->
            </form>
        </article>
    </div> <!-- card.// -->

</div>
<!--container end.//-->