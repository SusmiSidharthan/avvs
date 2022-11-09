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
          <h1>Add Store</h1>
        </section>
          
        <!-- Main content -->
<section class="content">
    <!--            <div class="row">-->
    <div class="box box-primary">
      <form id="upload_form" enctype="multipart/form-data" method="post" action="<?= CUSTOM_BASE_URL . 'store/create' ?>" onSubmit="return checkForm()">
          
        <div class="container-fluid">
          <div class="row">

               <div class="col-md-6">

                <div class="form-group">
                    <label>Thumbnail image</label>
                     <a class="btn btn-block btn-default cropModal" data-toggle="modal" data-target="#cropModall"><i class="fa fa-picture-o" aria-hidden="true"></i> crop Image</a>
                    <?php echo form_error('image_file', '<p class="help-block error-info">', '</p>'); ?>
                    <div class="error"></div>
                    <div class="sucess" style="color:green;font-weight:bold;"></div>
                    <p id="error_img" class="help-block error-info"></p>
               <img height="100" width="100" id="previews" alt="" class="img-responsive">

                </div>
            </div>

          

                    <div class="modal fade" id="cropModall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Image Croping</h4>
                            
                             </div>
                        <div class="modal-body">
                                    <div class="form-group">
                                        <label>image</label>
                                        <input type="hidden" id="x1" name="x1" />
                                        <input type="hidden" id="y1" name="y1" />
                                        <input type="hidden" id="x2" name="x2" />
                                        <input type="hidden" id="y2" name="y2" />
                                        <input type="hidden" id="admin_url" name="admin_url" value=" <?= CUSTOM_BASE_URL.'assets/images/loading.gif';?> " />
                                        
                                        <div  class="form-group">
                                        <input accept="image/x-png,image/jpeg" type="file"  name="image_file" id="image_file" onChange="fileSelectHandler()"  class="form-control"/>
                                        </div>
                                                <div id="loading"></div>
                                                <div class="error"></div>
                                                <img id="preview" />  
                                        <div class="step2">
                                        <h5>Please select a crop region</h5>

                                        <div class="info">
                                         <!-- <h4><a class="btn btn-primary" data-dismiss="modal">Add Image</a></h4>   -->
                                        <input type="hidden" id="filesize" name="filesize" />
                                        <input type="hidden" id="filetype" name="filetype" />
                                        <input type="hidden" id="filedim" name="filedim" />
                                        <input type="hidden" id="w" name="w" />
                                        <input type="hidden" id="h" name="h" />
                                        <input type="hidden" id="admin_url" value="<?= CUSTOM_BASE_URL.'assets/images/loading.gif';?>">
                                    </div>
                                    <a class="btn btn-primary" data-dismiss="modal">Add Image</a>
                                </div>
                            </div>
                             </div>
                        </div>
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
                  <label class="form-control-label" for="inputBasicFirstName">Address</label>  
                  <input type="text" class="form-control" name="address" value="<?php echo set_value('address') ?>">
                  <?php echo form_error('address', '<p class="invaild-9-field">', '</p>'); ?>
              </div>
            </div>


              <div class="col-md-6">
              <div class="form-group">
                  <label class="form-control-label" for="inputBasicFirstName">Position</label> 
                  <input class="form-control" type="text" name="position"  value="<?php echo set_value('position') ?>" data-role="tagsinput" >
                  <?php echo form_error('position', '<p class="invaild-9-field">', '</p>'); ?>
              </div>
            </div>

              <div class="col-md-6">
              <div class="form-group">
                  <label class="form-control-label" for="inputBasicFirstName">Phone</label> 
                  <input class="form-control" type="number" name="phone"  value="<?php echo set_value('phone') ?>" >
                  <?php echo form_error('phone', '<p class="invaild-9-field">', '</p>'); ?>
              </div>
            </div>

            <div class="col-md-4">
             <div class="form-group">   
                  <label class="form-control-label" for="inputBasicFirstName">Lattitude</label>  
                  <input type="number" class="form-control" name="latitude" maxlength="70"  value="<?php echo set_value('latitude') ?>">
                  <?php echo form_error('latitude', '<p class="invaild-9-field">', '</p>'); ?>
              </div>  
            </div> 
            <div class="col-md-4">
             <div class="form-group">   
                  <label class="form-control-label" for="inputBasicFirstName">Longitude</label>  
                  <input type="number" class="form-control" name="longitude" maxlength="70"  value="<?php echo set_value('longitude') ?>">
                  <?php echo form_error('longitude', '<p class="invaild-9-field">', '</p>'); ?>
              </div>  
            </div> 

            <div class="col-md-4">
              <div class="form-group">
                  <label class="form-control-label" for="inputBasicFirstName">Email</label> 
                  <input class="form-control" type="email" name="email"  value="<?php echo set_value('email') ?>" >
                  <?php echo form_error('email', '<p class="invaild-9-field">', '</p>'); ?>
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
 <script src="<?php echo base_url();?>assets/vendor/jquery-ui/jquery-ui.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url() ?>assets/crop/jquery.Jcrop.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/crop/script_products.js"></script>
  
</body>

</html>
<script>

$("#cancel").click(function () {//jquery cancel function when cancel button click
window.location = '<?= CUSTOM_BASE_URL . "store" ?>';
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
