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

                                 <form id="form" role="form" action="<?= CUSTOM_BASE_URL . 'user/delivery' ?>" method="post" enctype="multipart/form-data">
                                     
                              <div class="container-fluid">       
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Delivery Charge</label>
                                            <input class="form-control" name="amount" value="<?php echo $amount->amount; ?>">
                                            <?php echo form_error('amount', '<p class="help-block error-info">', '</p>'); ?>
                                        </div>
                                    </div>

                                    
                                </div>
                                
                                <input type="submit" class="btn btn-success" value="Save">
                                <input type="button" id="cancel" class="btn btn-danger" value="Cancel">
                                     </div>  
                                </form>
                          </div>
    <!-- /.box -->

    <!-- /.row -->
</section>
<!-- /.content -->
      </div><!-- /.content-wrapper -->
        
     

      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->




    <!-- jQuery 2.1.4 -->
     <?php include('assets/include/footer.php'); ?>
<script>

$("#cancel").click(function () {//jquery cancel function when cancel button click
window.location = '<?= CUSTOM_BASE_URL . "welcome" ?>';
});

</script>
</body>

</html>
