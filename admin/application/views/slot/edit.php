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
          <h1>Edit Slot</h1>
        </section>
          
        <!-- Main content -->
<section class="content">
    <!--            <div class="row">-->
    <div class="box box-primary">


<form enctype="multipart/form-data" method="post" name="myform" action="<?= CUSTOM_BASE_URL . 'slot/update' ?>" onSubmit="return checkForm()" >
<?php foreach ($result as $row) {?>
  <div class="container-fluid">
    <div class="row">
        
        
        
        <div class="col-md-6">
            <div class="form-group">
                <label>From Time</label>
                <input type="time" class="form-control" name="from_time" value="<?= (set_value('from_time') != '') ? set_value('from_time') : $row['from_time']; ?>">
            <?php echo form_error('from_time', '<p class="help-block error-info">', '</p>'); ?>
            </div>  
          </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>To Time</label>
                <input type="time" class="form-control" name="to_time" value="<?= (set_value('to_time') != '') ? set_value('to_time') : $row['to_time']; ?>">
            <?php echo form_error('to_time', '<p class="help-block error-info">', '</p>'); ?>
            </div>  
          </div>



            <div class="col-md-12">
             <div class="form-group">    
              <input type="hidden" class="form-control" name="id" value="<?php echo $row['cat_id']; ?>">
              <input type="submit" name="submit" class="btn btn-success" id="button" value="Update">
             <input type="button" id="cancel" class="btn btn-danger" value="Cancel">
            </div>
           </div>

    </div>
    </div>
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
  
</body>

</html>
<script>

$("#cancel").click(function () {//jquery cancel function when cancel button click
window.location = '<?= CUSTOM_BASE_URL . "slot" ?>';
});

</script>
