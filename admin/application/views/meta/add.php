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
          <h1>Add Meta</h1>
        </section>
          
        <!-- Main content -->
<section class="content">
    <!--            <div class="row">-->
    <div class="box box-primary">
      <form id="upload_form" enctype="multipart/form-data" method="post" action="<?= CUSTOM_BASE_URL . 'meta/create' ?>" onSubmit="return checkForm()">
          
        <div class="container-fluid">
          <div class="row">



          <div class="col-md-12"><h3 class="new-ca-head">Meta Data</h3></div>

             <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="inputUserName">Page</label>
                 <select data-live-search="true" class="form-control selectpicker" id="page" name="page" required>
                  <option value="">Select Page</option>
                  <option value="Home">Home</option>
                  <option value="About">About</option>
                  <option value="Ayurvaram">Ayurvaram</option>
                  <option value="Product-List">Product-List</option>
                  <option value="Gallery">Gallery</option>
                  <option value="Contact">Contact</option>
                  <option value="Appoinment">Appoinment</option>
                  <option value="Testimonials">Testimonials</option>
                  <option value="Blog">Blog</option>
                </select> 
                 <?php echo form_error('page', '<p class="invaild-9-field">', '</p>'); ?>
              </div>    
            </div>

            <div class="col-md-6">
             <div class="form-group">   
                  <label class="form-control-label" for="inputBasicFirstName">Page Title(Max:70)</label>  
                  <input type="text" class="form-control" name="meta_title" maxlength="70"  value="<?php echo set_value('meta_title') ?>">
                  <?php echo form_error('meta_title', '<p class="invaild-9-field">', '</p>'); ?>
              </div>  
            </div> 
          
            
            <div class="col-md-6">
              <div class="form-group">
                  <label class="form-control-label" for="inputBasicFirstName">Meta Keywords</label> 
                  <input class="form-control" type="text" name="meta_key"  value="<?php echo set_value('meta_key') ?>" data-role="tagsinput" >
                  <?php echo form_error('meta_key', '<p class="invaild-9-field">', '</p>'); ?>
              </div>
            </div>


        <div class="col-md-12">
                  <div class="form-group">
                      <label class="form-control-label" for="inputBasicFirstName">Canonical Link</label> 
                     <input type="text" class="form-control" name="canonical_link"   value="<?php echo set_value('canonical_link') ?>">
                      <?php echo form_error('canonical_link', '<p class="invaild-9-field">', '</p>'); ?>
                  </div>
        </div>

        <div class="col-md-12">
                  <div class="form-group">
                      <label class="form-control-label" for="inputBasicFirstName">Meta Description</label> 
                     <input type="text" class="form-control" name="meta_description"   value="<?php echo set_value('meta_description') ?>">
                      <?php echo form_error('meta_description', '<p class="invaild-9-field">', '</p>'); ?>
                  </div>
        </div>

        <div class="col-md-6">
              <div class="form-group">
                  <label class="form-control-label" for="inputBasicFirstName">SEO Name</label> 
                  <input class="form-control" type="text" name="seo_name"  value="<?php echo set_value('seo_name') ?>" data-role="tagsinput" >
                  <?php echo form_error('seo_name', '<p class="invaild-9-field">', '</p>'); ?>
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
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/crop/script_blog.js"></script>
  
</body>

</html>
<script>

$("#cancel").click(function () {//jquery cancel function when cancel button click
window.location = '<?= CUSTOM_BASE_URL . "meta" ?>';
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
<script type="text/javascript">
     function maxLength(el) {    

    if (!('maxLength' in el)) {

        var max = el.attributes.maxLength.value;

        el.onkeypress = function () {

            if (this.value.length >= max) return false;

        };

        }

    }

    maxLength(document.getElementById("metaDesc"));



    var maxAmount = 160;

        function textCounter(textField, showCountField) {

        if (textField.value.length > maxAmount) {

            textField.value = textField.value.substring(0, maxAmount);

        } else {

            showCountField.value = maxAmount - textField.value.length;

        }

    }

</script>