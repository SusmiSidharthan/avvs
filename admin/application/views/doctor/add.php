<!DOCTYPE html>
<html>
  <head>
    <?php include('assets/include/header.php'); ?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

     
 <?php include('assets/include/navigation.php'); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Add Doctor</h1>
        </section>
          
        <!-- Main content -->
<section class="content">
    <!--            <div class="row">-->
    <div class="box box-primary">
      <form id="upload_form" enctype="multipart/form-data" method="post" action="<?= CUSTOM_BASE_URL . 'consulting/doctor_create' ?>" onSubmit="return checkForm()">
          
        <div class="container-fluid">
          <div class="row">



              <div class="col-md-6">
                  <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>">
                       <?php echo form_error('name', '<p class="help-block error-info">', '</p>'); ?>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group">
                      <label>Specialization</label>
                      <input type="text" name="specialization" class="form-control" value="<?php echo set_value('specialization'); ?>">
                       <?php echo form_error('specialization', '<p class="help-block error-info">', '</p>'); ?>
                  </div>
              </div>
            

            <div class="col-md-12">
                <input type="submit" name="submit" class="btn btn-success" value="Save">
                 <input type="button" id="cancel" class="btn btn-danger" value="Cancel">
            </div>
            </div>
          
          </div>
            </form>
          </div>
    <!-- /.box -->

    <!-- /.row -->
</section>
<!-- /.content -->
      </div><!-- /.content-wrapper -->
        
       
        




    <!-- jQuery 2.1.4 -->
     <?php include('assets/include/footer.php'); ?>
    <script src="<?php echo base_url();?>assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/crop/jquery.Jcrop.min.js"></script>
  
</body>

</html>
<script>

$("#cancel").click(function () {//jquery cancel function when cancel button click
window.location = '<?= CUSTOM_BASE_URL . "consulting/doctor_index" ?>';
});



  $(function() {
    $("form").submit(function() {
      $(this).find("input[type='submit']").prop('disabled', true).val("Please wait...");
        setTimeout(function() {
        $("input[type='submit']").removeAttr("disabled").val("save");;      
        }, 500);
    });
  });
 </script>
