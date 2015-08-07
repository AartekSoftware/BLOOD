<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('public_html/admin/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    
    <link href="<?php echo base_url('public_html/admin/css/metro-bootstrap.min.css'); ?>" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="<?php echo base_url('public_html/admin/css/blood-admin.css'); ?>" rel="stylesheet" />

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('public_html/admin/font-awesome-4.1.0/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    <style>
        p{ color: red;}
    </style>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">                
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo validation_errors(); ?>
                        <?php if(!empty($error)){ echo $error; } ?>
                        <?php echo form_open('admin/login', array('role' => 'form')) ?>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Login id" name="loginid" type="text" autofocus />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" />
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="submit" value="Login" class="btn btn-lg btn-success btn-block" />
                            </fieldset>
                        <?php echo form_close(); ?>
                        <p style="margin-top:10px;"><a href="<?php echo base_url(); ?>">&lArr; Return to site Home Page</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url('public_html/admin/js/jquery-1.11.0.js'); ?>"></script>
    <!-- Core JavaScript -->
    <script src="<?php echo base_url('public_html/admin/js/bootstrap.min.js'); ?>"></script>    

</body>

</html>
