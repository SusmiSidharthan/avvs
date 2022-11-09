<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin-AVVVS | Log in</title>
  
    <?php include('assets/include/header.php'); ?>
  </head>
 
    <!-- Site wrapper -->
      
        
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        
         <a  href=""><img style="display:block;margin:10px auto;" src="<?= CUSTOM_BASE_URL.'assets/images/logo.png'?>" class="log-log13" alt=""></a>
       
          <p class="login-box-msg">  <?php 
                            echo $this->session->flashdata('msg');
                            echo form_error('email', '<p class="help-block error-info">', '</p>');
                            echo form_error('password', '<p class="help-block error-info">', '</p>');
                        ?></p>
        <form action="<?php CUSTOM_BASE_URL.'login/do_login' ?>" method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Register Email ID" name="email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
            
            
          <div class="row">
            <!--<div class="col-xs-8">
              <div class="log-remin14 checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div>--><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
            
            
        </form>

       <!-- <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a>
-->
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->




    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

    <script src="<?php echo base_url();?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>

    <script src="<?php echo base_url();?>assets/plugins/jQueryUI/jquery-ui.min.js"></script>

    <!-- Bootstrap 3.3.5 -->

    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- SlimScroll -->

    <script src="<?php echo base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>

    <!-- FastClick -->

    <script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.min.js"></script>

    <!-- AdminLTE App -->

    <script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>

    <!-- AdminLTE for demo purposes -->

    <script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>

  

   <script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>

   <script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script> 

   <script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

   <script src="<?php echo base_url();?>assets/plugins/select2/select2.full.min.js"></script>

   <script src="<?php echo base_url();?>assets/plugins/daterangepicker/daterangepicker.js"></script>

   <script src="<?php echo base_url();?>assets/plugins/input-mask/jquery.inputmask.js"></script>

   <script src="<?php echo base_url();?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>

   <script src="<?php echo base_url();?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>

   <script src="<?php echo base_url();?>assets/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

   <script src="<?php echo base_url();?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>


   <!--crop jss -->

   <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/crop/jquery.Jcrop.min.js"></script>



    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap-select.min.js"></script>


    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });

  $(document).ready(function () {
      //Disable cut copy paste
      $('body').bind('cut copy paste', function (e) {
          e.preventDefault();
      });
     
      //Disable mouse right click
      $("body").on("contextmenu",function(e){
          return false;
      });
  });
  </script>
  </body>
</html>