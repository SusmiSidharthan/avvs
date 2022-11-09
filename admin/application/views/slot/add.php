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
          <h1>Add Slot</h1>
        </section>
          
        <!-- Main content -->
<section class="content">
    <!--            <div class="row">-->
    <div class="box box-primary">
      <form id="upload_form" enctype="multipart/form-data" method="post" action="<?= CUSTOM_BASE_URL . 'slot/create' ?>" onSubmit="return checkForm()">
          
        <div class="container-fluid">
          <div class="row">



              <div class="col-md-6" id="from_div">
                  <div class="form-group">
                      <label>From Time</label>
                      <input type="time" name="from_time" id="from_time" class="form-control"  required>
                       <?php echo form_error('from_time', '<p class="help-block error-info">', '</p>'); ?>
                  </div>
              </div>


              <div class="col-md-6" id="to_div">
                  <div class="form-group">
                      <label>To Time</label>
                      <input type="time" name="to_time" id="to_time" class="form-control" required>
                       <?php echo form_error('to_time', '<p class="help-block error-info">', '</p>'); ?>
                  </div>
              </div>
             

            

            <div class="col-md-12">
                <input type="submit" name="submit" id="submit" class="btn btn-success" value="Save">
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
  
</body>

</html>
<script>

$("#cancel").click(function () {//jquery cancel function when cancel button click
window.location = '<?= CUSTOM_BASE_URL . "slot" ?>';
});



$(function() {
  $("form").submit(function() {
    $(this).find("input[type='submit']").prop('disabled', true).val("Please wait...");
      setTimeout(function() {
      $("input[type='submit']").removeAttr("disabled").val("save");;      
      }, 500);
  });
});



$(document).ready(function() {
   
  $("#to_div").hide();
  $("#submit").hide();

  $('#from_time').change(function(){ 

      $('#to_div').show();

  });

  $('#to_time').change(function(){ 
      
      var to_time = $(this).val();
      var from_time = $('#from_time').val();
  
      $.ajax({
          url : "<?php echo site_url('Slot/check_slot'); ?>",
          method : "POST",
          data : {from_time: from_time,to_time:to_time},
          async : true,
          dataType : 'json',
          success: function(data){  
              

              if(data == 0){

                if(from_time >= to_time){

                  $("#submit").hide();
                  document.getElementById("to_time").value = "";
                  alert("Choose correct slot");

                }
                else{

                  $("#submit").show();
                }


              }
              else{
                
                $("#submit").hide();
                document.getElementById("to_time").value = "";
                alert("Already Exist");

              }

          }
      });
      return false;
  }); 

});


 </script>
