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
          <h1>Add Delivery Charge</h1>
        </section>
          
        <!-- Main content -->
<section class="content">
    <!--            <div class="row">-->
    <div class="box box-primary">
      <form id="upload_form" enctype="multipart/form-data" method="post" action="<?= CUSTOM_BASE_URL . 'delivery_charge/create' ?>">
          
        <div class="container-fluid">
          <div class="row">


              <div class="col-md-6">
                  <div class="form-group">
                      <label>Pincode</label>
                      <input type="text" name="from" class="form-control" value="<?php echo set_value('from'); ?>" onkeypress="return (event.charCode >= 48 &amp;&amp; event.charCode <= 57)">
                       <?php echo form_error('from', '<p class="help-block error-info">', '</p>'); ?>
                  </div>
              </div>

<!--               <div class="col-md-6">
                  <div class="form-group">
                      <label>To Pincode</label>
                      <input type="text" name="to" class="form-control" value="<?php echo set_value('to'); ?>" onkeypress="return (event.charCode >= 48 &amp;&amp; event.charCode <= 57)">
                       <?php echo form_error('to', '<p class="help-block error-info">', '</p>'); ?>
                  </div>
              </div> -->


              <div class="col-md-6">
                  <div class="form-group">
                      <label>Amount</label>
                      <input type="text" name="amount" class="form-control" value="<?php echo set_value('amount'); ?>" onkeypress="return (event.charCode >= 48 &amp;&amp; event.charCode <= 57)">
                       <?php echo form_error('amount', '<p class="help-block error-info">', '</p>'); ?>
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
window.location = '<?= CUSTOM_BASE_URL . "Delivery_charge" ?>';
});

</script>