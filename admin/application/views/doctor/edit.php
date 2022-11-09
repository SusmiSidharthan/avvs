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
          <h1>Edit Doctor</h1>
        </section>
          
        <!-- Main content -->
<section class="content">
    <!--            <div class="row">-->
    <div class="box box-primary">


<form enctype="multipart/form-data" method="post" name="myform" action="<?= CUSTOM_BASE_URL . 'consulting/doctor_update' ?>" onSubmit="return checkForm()" >
<?php foreach ($result as $row) {?>
  <div class="container-fluid">
    <div class="row">
        
        
        
          <div class="col-md-12">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="<?= (set_value('name') != '') ? set_value('name') : $row['name']; ?>">
            <?php echo form_error('name', '<p class="help-block error-info">', '</p>'); ?>
            </div>  
          </div>

          <div class="col-md-12">
            <div class="form-group">
                <label>Specialization</label>
                <input type="text" class="form-control" name="specialization" value="<?= (set_value('specialization') != '') ? set_value('specialization') : $row['specialization']; ?>">
            <?php echo form_error('specialization', '<p class="help-block error-info">', '</p>'); ?>
            </div>  
          </div>

        <div class="col-md-12">
                <input type="submit" name="submit" class="btn btn-success" value="Update">
                 <input type="button" id="cancel" class="btn btn-danger" value="Cancel">
        </div>  

  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<?php } ?>
</form>
               </div>
    <!-- /.box -->

    <!-- /.row -->
</section>
<!-- /.content -->
      </div><!-- /.content-wrapper -->
        
       
     

      <!-- Control Sidebar -->
     
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->




    <!-- jQuery 2.1.4 -->
     <?php include('assets/include/footer.php'); ?>
    <script src="<?php echo base_url();?>assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/crop/jquery.Jcrop.min.js"></script>
  
</body>

</html>
<script>

$("#cancel").click(function () {//jquery cancel function when cancel button click
window.location = '<?= CUSTOM_BASE_URL . "Consulting/doctor_index" ?>';
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
