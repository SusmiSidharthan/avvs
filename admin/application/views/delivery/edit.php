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
          <h1>Edit Delivery Charge</h1>
        </section>
          
        <!-- Main content -->
<section class="content">
    <!--            <div class="row">-->
    <div class="box box-primary">


<form enctype="multipart/form-data" method="post" name="myform" action="<?= CUSTOM_BASE_URL . 'delivery_charge/update' ?>" onSubmit="return checkForm()" >
<?php foreach ($result as $row) {?>
  <div class="container-fluid">
    <div class="row">
           
        
        <div class="col-md-6">
            <div class="form-group">
                <label>Pincode</label>
                <input type="text" class="form-control" name="from" value="<?= (set_value('from') != '') ? set_value('from') : $row['from']; ?>">
            <?php echo form_error('from', '<p class="help-block error-info">', '</p>'); ?>
            </div>  
          </div>


<!--         <div class="col-md-6">
            <div class="form-group">
                <label>To Pincode</label>
                <input type="text" class="form-control" name="to" value="<?= (set_value('to') != '') ? set_value('to') : $row['to']; ?>">
            <?php echo form_error('to', '<p class="help-block error-info">', '</p>'); ?>
            </div>  
          </div> -->

        <div class="col-md-6">
            <div class="form-group">
                <label>Amount</label>
                <input type="text" class="form-control" name="amount" value="<?= (set_value('amount') != '') ? set_value('amount') : $row['amount']; ?>">
            <?php echo form_error('amount', '<p class="help-block error-info">', '</p>'); ?>
            </div>  
          </div>


            <div class="col-md-6">
             <div class="form-group">    
              <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
              <input type="submit" name="submit" class="btn btn-success" id="button" value="Change">
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
     <script type="text/javascript" src="<?php echo base_url() ?>assets/crop/jquery.Jcrop.min.js"></script>
  
</body>

</html>
<script>

$("#cancel").click(function () {//jquery cancel function when cancel button click
window.location = '<?= CUSTOM_BASE_URL . "delivery_charge" ?>';
});

</script>
