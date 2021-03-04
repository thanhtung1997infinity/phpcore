<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
    require_once './libs/auth_service.php';
    $profile = getMe();
   
?>
<div class="container">
    <div class="row">

        <div class="col-md-7 ">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>User Profile</h4>
                </div>
                <div class="panel-body">

                    <div class="box box-info">

                        <div class="box-body">
                            <div class="col-sm-6">
                                <div style="align:center;"> <img alt="User Pic" src="<?php echo $profile["avatar"] ?>" id="profile-image1" class="img-circle img-responsive">

                                    <input id="profile-image-upload" class="hidden" type="file">
                                    <div style="color:#999;">click here to change profile image</div>
                                    <!--Upload Image Js And Css-->


                                </div>

                                <br>

                                <!-- /input-group -->
                            </div>
                            <div class="col-sm-6">
                                <h4 style="color:#00b1b1;"> <?php echo $profile["ten"] ?> </h4></span>
                                <span>
                                    <p>Aspirant</p>
                                </span>
                            </div>
                            <div class="clearfix"></div>
                            <hr style="margin:5px 0 5px 0;">


                            <div class="col-sm-5 col-xs-6 tital ">First Name:</div>
                            <div class="col-sm-7 col-xs-6 "><?php echo $profile["ten"] ?> </div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital ">email:</div>
                            <div class="col-sm-7"> <?php echo $profile["email"] ?> </div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital ">phone:</div>
                            <div class="col-sm-7"> <?php echo $profile["sdt"] ?> </div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital ">Date Of Joining:</div>
                            <div class="col-sm-7">15 Jun 2016</div>

                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital ">Date Of Birth:</div>
                            <div class="col-sm-7">11 Jun 1998</div>

                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital ">Place Of Birth:</div>
                            <div class="col-sm-7">Shirdi</div>

                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital ">Nationality:</div>
                            <div class="col-sm-7">Indian</div>

                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital ">Relition:</div>
                            <div class="col-sm-7">Hindu</div>


                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->

                    </div>


                </div>
            </div>
            <a href="index.php">Trở về trang chủ</a>
        </div>
        
        <script>
            $(function() {
                $('#profile-image1').on('click', function() {
                    $('#profile-image-upload').click();
                });
            });
        </script>









    </div>
</div>