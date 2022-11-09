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
          <h1>Edit Blog</h1>
        </section>
          
        <!-- Main content -->
<section class="content">
    <!--            <div class="row">-->
    <div class="box box-primary">


<form enctype="multipart/form-data" method="post" name="myform" action="<?= CUSTOM_BASE_URL . 'blog/update' ?>" onSubmit="return checkForm()" >
<?php foreach ($result as $row) {?>
  <div class="container-fluid">
    <div class="row">
        
        

        <div class="col-md-12">
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" name="date" value="<?= (set_value('date') != '') ? set_value('date') : $row['date']; ?>">
            <?php echo form_error('date', '<p class="help-block error-info">', '</p>'); ?>
            </div>  
          </div>

        <div class="col-md-12">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="<?= (set_value('title') != '') ? set_value('title') : $row['title']; ?>">
            <?php echo form_error('title', '<p class="help-block error-info">', '</p>'); ?>
            </div>  
          </div>          
        
        <div class="col-md-12">
            <div class="form-group">
                <label>Written By</label>
                <input type="text" class="form-control" name="written_by" value="<?= (set_value('written_by') != '') ? set_value('written_by') : $row['written_by']; ?>">
            <?php echo form_error('written_by', '<p class="help-block error-info">', '</p>'); ?>
            </div>  
          </div>

         <div class="col-md-6">
         <a class="cropModal" data-toggle="modal" data-target="#cropModal">
            <img  class="img-responsive col-md-4" id="previewimages" src="<?php echo base_url();?>uploads/blog/crop/<?php echo $row['image']; ?>"></a>
            <div class="error"></div>
        </div>  


       

  <div class="modal fade" id="cropModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                          <h4 class="modal-title">Crop Image</h4>
                                        </div>
                            <div class="modal-body">
                                <div class="form-group">
                                        <label>image</label>
                                        <input type="hidden" id="x1" name="x1" />
                                        <input type="hidden" id="y1" name="y1" />
                                        <input type="hidden" id="x2" name="x2" />
                                        <input type="hidden" id="y2" name="y2" />

                                        <div  class="form-group">
                                        <input type="file"  name="image_file" id="image_file" onChange="fileSelectHandler()"  class="form-control" accept="image/x-png,image/jpeg" />
                                        <input type="hidden" id="admin_url" value=" <?= CUSTOM_BASE_URL.'assets/images/loading.gif';?> " />
                                        </div>
                                       
                                         <div id="gif"></div>
                                           <div class="error"></div>
                                         <img  id="preview">
                                        <div class="step2">
                                        <h5>Please select a crop region</h5>

                                        <div class="info">
                                        <input type="hidden" id="filesize" name="filesize" />
                                        <input type="hidden" id="filetype" name="filetype" />
                                        <input type="hidden" id="filedim" name="filedim" />
                                        <input type="hidden" id="w" name="w" />
                                        <input type="hidden" id="h" name="h" />
                                        <input type="hidden" id="cname" value="<?= strtolower($this->router->fetch_class());?>">
                                    </div>
                                </div>
                            </div>
                                        
                        <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
  
                

            <div class="col-md-12">
                <div class="form-group">
                    <label>Paragraph1</label>
                     <textarea name="paragraph1" id="paragraph1" class="form-control" rows="5"><?php echo $row['paragraph1']; ?></textarea>
                     <?php echo form_error('paragraph1', '<p class="invaild-9-field">', '</p>'); ?>
                </div>
            </div>


            <div class="col-md-12">
                <div class="form-group">
                    <label>Paragraph2</label>
                     <textarea name="paragraph2" id="paragraph2" class="form-control" rows="5"><?php echo $row['paragraph2']; ?></textarea>
                     <?php echo form_error('paragraph2', '<p class="invaild-9-field">', '</p>'); ?>
                </div>
            </div>


          <div class="col-md-12"><h3 class="new-ca-head">Meta Data</h3></div>
            <div class="col-md-6">
             <div class="form-group">   
                  <label class="form-control-label" for="inputBasicFirstName">Page Title</label>  
                  
                    <input type="text" class="form-control"   name="meta_title" value="<?= (set_value('meta_title') != '') ? set_value('meta_title') : $row['meta_title']; ?>">
                    
                  <?php echo form_error('meta_title', '<p class="invaild-9-field">', '</p>'); ?>
              </div>  
            </div> 
          
            
            <div class="col-md-6">
              <div class="form-group">
                  <label class="form-control-label" for="inputBasicFirstName">Meta Keywords</label> 
                  <input class="form-control" type="text" name="meta_key" value="<?php echo $row['meta_key']; ?>" data-role="tagsinput" >
                  <?php echo form_error('meta_key', '<p class="invaild-9-field">', '</p>'); ?>
              </div>
            </div>


        <div class="col-md-12">
                  <div class="form-group">
                      <label class="form-control-label" for="inputBasicFirstName">Canonical Link</label> 
                     <input type="text" class="form-control" name="canonical_link"   value="<?php echo $row['canonical_link']; ?>">
                      <?php echo form_error('meta_descrip', '<p class="invaild-9-field">', '</p>'); ?>
                  </div>
        </div>

        <div class="col-md-12">
                  <div class="form-group">
                      <label class="form-control-label" for="inputBasicFirstName">Meta Description</label> 
                     <input type="text" class="form-control" name="meta_description"   value="<?php echo $row['meta_description']; ?>">
                      <?php echo form_error('meta_description', '<p class="invaild-9-field">', '</p>'); ?>
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


function checkForm() {

    if (document.myform.title.value == "") {
        document.getElementById('title_Err').innerHTML = "Please enter a Title";
        return false;
    }
      var img = $('#image_file').val();

  if(img!="")
 {
if (parseInt($('#w').val())) return true;
$('.error').html('Please select a crop region and then press Save').show();
return false;
}
return true;
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
