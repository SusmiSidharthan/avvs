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
          <h1>Career Edit</h1>
        </section>
          
        <!-- Main content -->
<section class="content">
    <!--            <div class="row">-->
    <div class="box box-primary">


<form enctype="multipart/form-data" method="post" name="myform" action="<?= CUSTOM_BASE_URL . 'career/update' ?>">
<?php foreach ($result as $row) {?>
  <div class="container-fluid">
    <div class="row">

       <div class="col-md-6">
            <div class="form-group">
                <label>Position</label>
                <input type="text" class="form-control" name="position" value="<?= (set_value('position') != '') ? set_value('position') : $row['position']; ?>">
                <p class="help-block error-info" id="title_Err"></p>
            </div>  
          </div>


          <div class="col-md-6">
            <div class="form-group">
                <label>Location</label>
                <input type="text" class="form-control" name="location" value="<?= (set_value('location') != '') ? set_value('location') : $row['location']; ?>">
                  <?php echo form_error('location', '<p class="invaild-9-field">', '</p>'); ?>

            </div>  
          </div>

           <div class="col-md-6">
              <div class="form-group">
                  <label class="form-control-label" for="inputBasicFirstName">Qualification</label> 
                  <input class="form-control" type="text" name="qualification"  value="<?= (set_value('qualification') != '') ? set_value('qualification') : $row['qualification']; ?>">
                  <?php echo form_error('qualification', '<p class="invaild-9-field">', '</p>'); ?>
              </div>
            </div>


            
         <div class="col-md-3">
              <div class="form-group">
                  <label class="form-control-label" for="inputBasicFirstName">Experience</label> 
                  <input class="form-control" type="number" name="experience" value="<?= (set_value('experience') != '') ? set_value('experience') : $row['experience']; ?>" >
                  <?php echo form_error('experience', '<p class="invaild-9-field">', '</p>'); ?>
              </div>
            </div>



          <div class="col-md-3">
             <div class="form-group">   
                  <label class="form-control-label" for="inputBasicFirstName">No. of vaccancy</label>  
                  <input type="number" class="form-control" name="vaccancy" maxlength="10"  value="<?= (set_value('vaccancy') != '') ? set_value('vaccancy') : $row['vaccancy']; ?>">
                  <?php echo form_error('vaccancy', '<p class="invaild-9-field">', '</p>'); ?>
              </div>  
            </div> 


                <div class="col-md-4">
              <div class="form-group">
                  <label class="form-control-label" for="inputBasicFirstName">Salary (QR)</label> 

                  <input placeholder="Min : 0.00" class="form-control" type="number" name="min"  value="<?= (set_value('min') != '') ? set_value('min') : $row['min']; ?>" >

                  <input placeholder="Max : 0.00" class="form-control" type="number" name="max"  value="<?= (set_value('max') != '') ? set_value('max') : $row['max']; ?>" >

                  <?php echo form_error('min', '<p class="invaild-9-field">', '</p>'); ?>
                  <?php echo form_error('max', '<p class="invaild-9-field">', '</p>'); ?>
              </div>
            </div>

  

           <div class="col-md-12">
                <div class="form-group">
                    <label>Description</label>
                     <textarea name="description" class="form-control" rows="3"><?= (set_value('description') != '') ? set_value('description') : $row['description']; ?></textarea>
                     <?php echo form_error('description', '<p class="invaild-9-field">', '</p>'); ?>
                </div>
            </div>

     
            <div class="col-md-12">
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

</body>

</html>
<script>

$("#cancel").click(function () {//jquery cancel function when cancel button click
window.location = '<?= CUSTOM_BASE_URL . "career" ?>';
});

  $(function() {
    $("myform").submit(function() {
      $(this).find("input[type='submit']").prop('disabled', true).val("Please wait...");
        setTimeout(function() {
        $("input[type='submit']").removeAttr("disabled").val("save");;      
        }, 500);
    });
  });



</script>
