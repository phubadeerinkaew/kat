<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/logo/longan.png'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animate/animate.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animsition/css/animsition.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>">
  </head>
  <body>
    
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100 p-t-90 p-b-30">
          <form class="login100-form validate-form" id="formlogin" method="post" action="Login/checklogin">
            <span class="login100-form-title p-b-40">
              Login
            </span>

            <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
              <input class="input100" type="text" name="email" placeholder="Username">
              <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
              <span class="btn-show-pass">
                <i class="fa fa fa-eye"></i>
              </span>
              <input class="input100" type="password" name="password" placeholder="Password">
              <span class="focus-input100"></span>
            </div>

            <div class="container-login100-form-btn">
              <button class="login100-form-btn">
                Login
              </button>
            </div>
            <div class="container-login100-form-btn">
            <br/>
            <?php
            if($this->session->flashdata('message_login') != ''){
                 echo $this->session->flashdata('message_login');
            }else{
                 echo $this->session->flashdata('message_login');
            }
            ?>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/animsition/js/animsition.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/select2/select2.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/daterangepicker/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/countdowntime/countdowntime.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

  </body>
</html>