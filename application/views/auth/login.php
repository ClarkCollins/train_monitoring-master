<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Client Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/assets/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
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
                        			<h3>Login to Client Asset Management</h3>
                            		<p>Enter your email and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
                                <?php if ($this->session->flashdata('flashDanger')): ?>
    <p style="text-align: center; color: red"><?php echo $this->session->flashdata('flashDanger') ?></p>
<?php endif ?>
			                    <form role="form" action="<?php echo site_url()?>/login_" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="email" placeholder="Email..." class="form-username form-control" id="form-username">
                                                        <?php echo form_error('email'); ?>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                                                        <?php echo form_error('password'); ?>
			                        </div>
			                        <button type="submit" class="btn">Sign in!</button>
                                                Forgot password?&nbsp;<a href="">Reset here</a><br>
                                                New client?&nbsp;<a href="<?php echo site_url()?>/register">Register here</a><br>
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





























