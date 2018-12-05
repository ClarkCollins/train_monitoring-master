<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/assets/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/assets/css/style.css">
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/assets/ico/favicon.png">
<style>body{
            background-image:url('<?php echo base_url()?>assets/images/background.jpg');
            background-repeat: no-repeat; 
            background-position: center;
            background-attachment: fixed;       
            webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height:100%;
            width:100%;
            
}
        </style>
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Register account</h3>
                            		<p>Enter your details below:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="<?php echo site_url()?>/register_" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input value="<?php if (isset($_POST['c_name'])) echo $_POST['c_name']; ?>" name="c_name" type="text" name="form-username" placeholder="Client Name..." class="form-username form-control" id="form-username">
                                                        <?php echo form_error('c_name'); ?>
			                        </div>
                                                <div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" name="email" type="text" name="form-username" placeholder="Email..." class="form-username form-control" id="form-username">
                                                        <?php echo form_error('email'); ?>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input name="password" type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                                                        <?php echo form_error('password'); ?>
			                        </div>
                                                <div class="form-group">
			                    		<label class="sr-only" for="form-password">Confirm Password</label>
			                        	<input name="confirm_password" type="password" name="form-password" placeholder="Confirm Password..." class="form-password form-control" id="form-username">
                                                        <?php echo form_error('confirm_password'); ?>
			                        </div>
			                        <button type="submit" class="btn">Sign in!</button>
                                                Have an account?&nbsp;<a href="<?php echo site_url()?>/login">Click here</a><br>
                                                <a href="<?php echo site_url()?>/"><i class="fa fa-home"></i>&nbsp;Home</a>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="<?php echo base_url()?>assets/assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url()?>assets/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/assets/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url()?>assets/assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>













































