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
          <h1>Add Career</h1>
        </section>
          
        <!-- Main content -->
<section class="content">
    <!--            <div class="row">-->
    <div class="box box-primary">
      <form id="upload_form" enctype="multipart/form-data" method="post" action="<?= CUSTOM_BASE_URL . 'career/create' ?>">
          
        <div class="container-fluid">
          <div class="row">



          <div class="col-md-6">
             <div class="form-group">   
                  <label class="form-control-label" for="inputBasicFirstName">Position</label>  
                  <input type="text" class="form-control" name="position" maxlength="70"  value="<?php echo set_value('position') ?>">
                  <?php echo form_error('position', '<p class="invaild-9-field">', '</p>'); ?>
              </div>  
            </div> 


          <div class="col-md-6">
             <div class="form-group">   
                  <label class="form-control-label" for="inputBasicFirstName">Location</label>  
                  <input type="text" class="form-control" name="location" maxlength="70"  value="<?php echo set_value('location') ?>">
                  <?php echo form_error('location', '<p class="invaild-9-field">', '</p>'); ?>
              </div>  
            </div> 

            <div class="col-md-6">
              <div class="form-group">
                  <label class="form-control-label" for="inputBasicFirstName">Qualification</label> 
                  <input class="form-control" type="text" name="qualification"  value="<?php echo set_value('qualification') ?>" data-role="tagsinput" >
                  <?php echo form_error('qualification', '<p class="invaild-9-field">', '</p>'); ?>
              </div>
            </div>

              <div class="col-md-3">
              <div class="form-group">
                  <label class="form-control-label" for="inputBasicFirstName">Experience</label> 
                  <input class="form-control" type="number" name="experience"  value="<?php echo set_value('experience') ?>" >
                  <?php echo form_error('experience', '<p class="invaild-9-field">', '</p>'); ?>
              </div>
            </div>



          <div class="col-md-3">
             <div class="form-group">   
                  <label class="form-control-label" for="inputBasicFirstName">No. of vaccancy</label>  
                  <input type="number" class="form-control" name="vaccancy" maxlength="10"  value="<?php echo set_value('vaccancy') ?>">
                  <?php echo form_error('vaccancy', '<p class="invaild-9-field">', '</p>'); ?>
              </div>  
            </div> 

            <div class="col-md-4">
              <div class="form-group">
                  <label class="form-control-label" for="inputBasicFirstName">Salary (QR)</label> 

                  <input placeholder="Min : 0.00" class="form-control" type="number" name="min"  value="<?php echo set_value('min') ?>" >
                  <input placeholder="Max : 0.00" class="form-control" type="number" name="max"  value="<?php echo set_value('max') ?>" >
                  <?php echo form_error('min', '<p class="invaild-9-field">', '</p>'); ?>
                  <?php echo form_error('max', '<p class="invaild-9-field">', '</p>'); ?>
              </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Description</label>
                     <textarea name="description" class="form-control" rows="3"><?php echo set_value('description') ?></textarea>
                     <?php echo form_error('description', '<p class="invaild-9-field">', '</p>'); ?>
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
        
       
    
        
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->




    <!-- jQuery 2.1.4 -->
     <?php include('assets/include/footer.php'); ?>

  
</body>

</html>
<script>

$("#cancel").click(function () {//jquery cancel function when cancel button click
window.location = '<?= CUSTOM_BASE_URL . "career" ?>';
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
