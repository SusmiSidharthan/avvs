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
          <h1>Add Blog</h1>
        </section>
          
        <!-- Main content -->
<section class="content">
    <!--            <div class="row">-->
    <div class="box box-primary">
      <form id="upload_form" enctype="multipart/form-data" method="post" action="<?= CUSTOM_BASE_URL . 'blog/create' ?>" onSubmit="return checkForm()">
          
        <div class="container-fluid">
          <div class="row">

               <div class="col-md-6">

                <div class="form-group">
                    <label>Image</label>
                     <a class="btn btn-block btn-default cropModal" data-toggle="modal" data-target="#cropModall"><i class="fa fa-picture-o" aria-hidden="true"></i> crop Image</a>
                    <?php echo form_error('image_file', '<p class="help-block error-info">', '</p>'); ?>
                    <div class="error"></div>
                    <div class="sucess" style="color:green;font-weight:bold;"></div>
                    <p id="error_img" class="help-block error-info"></p>
               <img height="100" width="100" id="previews" alt="" class="img-responsive">

                </div>
            </div>

              <div class="col-md-6">
                  <div class="form-group">
                      <label>Date</label>
                      <input type="date" name="date" class="form-control" value="<?php echo set_value('date'); ?>">
                       <?php echo form_error('date', '<p class="help-block error-info">', '</p>'); ?>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group">
                      <label>Title</label>
                      <input type="text" name="title" class="form-control" value="<?php echo set_value('title'); ?>">
                       <?php echo form_error('title', '<p class="help-block error-info">', '</p>'); ?>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group">
                      <label>Written By</label>
                      <input type="text" name="written_by" class="form-control" value="<?php echo set_value('written_by'); ?>">
                       <?php echo form_error('written_by', '<p class="help-block error-info">', '</p>'); ?>
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

            
            <div class="col-md-12">
                <div class="form-group">
                    <label>Paragraph 1</label>
                     <textarea name="paragraph1" id="paragraph1" class="form-control" rows="5"><?php echo set_value('paragraph1') ?></textarea>
                     <?php echo form_error('paragraph1', '<p class="invaild-9-field">', '</p>'); ?>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Paragraph 2</label>
                     <textarea name="paragraph2" id="paragraph2" class="form-control" rows="5"><?php echo set_value('paragraph2') ?></textarea>
                     <?php echo form_error('paragraph2', '<p class="invaild-9-field">', '</p>'); ?>
                </div>
            </div>

          <div class="col-md-12"><h3 class="new-ca-head">Meta Data</h3></div>
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
<script src="https://cdn.tiny.cloud/1/3s5vcu83bew5wsahcgvcrcuj0631irxj7vv81pbs5bfb9gem/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  
</body>

</html>
<script>

$("#cancel").click(function () {//jquery cancel function when cancel button click
window.location = '<?= CUSTOM_BASE_URL . "blog" ?>';
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

<script>
tinymce.init({
    selector: '#paragraph1,#paragraph2',
   height: 250,
   plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
  imagetools_cors_hosts: ['picsum.photos'],
  menubar: 'file edit view insert format tools table help',
  toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
  toolbar_sticky: true,
  quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
  noneditable_noneditable_class: 'mceNonEditable',
  toolbar_mode: 'sliding',
  contextmenu: 'link image imagetools table',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
  relative_urls : false,
remove_script_host : false,
convert_urls : true
});    
</script>