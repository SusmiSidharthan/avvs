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
          <h1>Banner Edit</h1>
        </section>

          
        <!-- Main content -->
<section class="content">
    <!--            <div class="row">-->
    <div class="box box-primary">
        <!-- /.box-header -->
         <?php foreach ($result as $row) { 
              $ci_name=strtolower($this->router->fetch_class());?>
     <form class=" add-ca-in" method="post" enctype="multipart/form-data" action="<?php echo base_url()?>cart_banner/update">
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
       <div class="form-group">
         <label class="form-control-label" for="inputBasicFirstName">Banner Name</label> 
       </div>
      </div>
      <div class="col-md-6">
       <div class="form-group">  
         <input type="text" class="form-control" name="banner_name" value="<?= set_value('banner_name', isset($row['banner_name']) ? $row['banner_name'] : '') ?>">
         <?php echo form_error('banner_name', '<p class="invaild-9-field">', '</p>'); ?>
       </div>
      </div>
    </div>

  
    <div class="row">
      <div class="col-md-4">
       <div class="form-group">
         <label class="form-control-label" for="inputBasicFirstName">Banner Type</label> 
       </div>
      </div>
      <div class="col-md-6">
       <div class="form-group">  
         <select title="None" class="form-control selectpicker" name="banner_type" onChange="showSub(this);">
                

  <option value="home" <?= (set_value('home') != '') ? set_select('home', 'home') : ($row['banner_type'] == 'home') ? "selected='selected'" : '' ?> >Home Banner</option>

  <option value="home_ad" <?= (set_value('home_ad') != '') ? set_select('home_ad', 'home_ad') : ($row['banner_type'] == 'home_ad') ? "selected='selected'" : '' ?> >Home AD Banner</option>

<!--   <option value="gallery" <?= (set_value('gallery') != '') ? set_select('gallery', 'gallery') : ($row['banner_type'] == 'gallery') ? "selected='selected'" : '' ?> >Gallery</option>

  <option value="gallery-details" <?= (set_value('gallery-details') != '') ? set_select('gallery-details', 'gallery-details') : ($row['banner_type'] == 'gallery-details') ? "selected='selected'" : '' ?> >Gallery Details</option>

  <option value="testimonials" <?= (set_value('testimonials') != '') ? set_select('testimonials', 'testimonials') : ($row['banner_type'] == 'testimonials') ? "selected='selected'" : '' ?> >Testimonials</option>

  <option value="blog" <?= (set_value('blog') != '') ? set_select('blog', 'blog') : ($row['banner_type'] == 'blog') ? "selected='selected'" : '' ?> >Blog</option> -->

  <option value="about" <?= (set_value('about') != '') ? set_select('about', 'about') : ($row['banner_type'] == 'about') ? "selected='selected'" : '' ?> >About</option>

  <option value="speciality-clinic" <?= (set_value('speciality-clinic') != '') ? set_select('speciality-clinic', 'speciality-clinic') : ($row['banner_type'] == 'speciality-clinic') ? "selected='selected'" : '' ?> >Speciality Clinic</option>

  <option value="speciality-clinic-ad" <?= (set_value('speciality-clinic-ad') != '') ? set_select('speciality-clinic-ad', 'speciality-clinic-ad') : ($row['banner_type'] == 'speciality-clinic-ad') ? "selected='selected'" : '' ?> >Speciality Clinic Ad</option>

<!--   <option value="contact-us" <?= (set_value('contact-us') != '') ? set_select('contact-us', 'contact-us') : ($row['banner_type'] == 'contact-us') ? "selected='selected'" : '' ?> >Contact Us</option> -->

            </select>
      </div>
     </div>
    </div>



    <div class="row">
       <div class="col-md-4">
        <div class="form-group">
         <label class="form-control-label" for="inputBasicFirstName">Banner Pic</label> 
        </div>
       </div>
       <div class="col-md-6">
        <div class="form-group">
           <a data-toggle="modal" data-target="#cropModal"><img height="100" width="100" src="<?= CUSTOM_BASE_URL . 'uploads/cart_banner/'.$row['image']; ?>" class="img-responsive"></a>
          <?php echo form_error('image_file', '<p class="help-block error-info">', '</p>'); ?>
          <div class="error"></div>
          <div class="sucess" style="color:green;font-weight:bold;"></div>
          <p id="error_img" class="help-block error-info"></p>
        </div>
      </div>
    </div>

        <!--  Profile  picture  -->
       <!--  Profile  picture  -->
                    <div class="modal fade" id="cropModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
        <!-- Cover image     -->

          <div class="modal fade" id="coverModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Cover Croping</h4>
                   </div>
              <div class="modal-body">
                          <div class="form-group">
                              <input accept="image/x-png,image/jpeg" type="file"  name="image_file_cover" id="image_file_cover"  class="form-control"/>
                          </div>
                          <a class="btn btn-primary" data-dismiss="modal">Add Image</a>
                   </div>
              </div>
          </div>
          </div>
        </div>
  <div class="container-fluid"> 
    <div class="row regi-10-out"> 
      <div class="col-md-12">
       <div class="form-group">
        <input name="submit" class="btn btn-success" type="submit" value="Update">
       </div>
      </div>
    </div>
  </div>

     <input type="hidden" name="id" value="<?= $row['id']; ?>">

    </form>
         <?php } ?>
        <!-- /.box-body -->
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
    <script type="text/javascript" src="<?= CUSTOM_BASE_URL .'assets/plugins/crop/banner_script_new.js'?>"></script>
  <script>

    $("#cancel").click(function () {//jquery cancel function when cancel button click
      window.location = '<?= CUSTOM_BASE_URL . "Cart_banner" ?>';
    });//jquery cancel function end

    function validation() //java script checkForm function when click submit for validation
    {
      var img = $('#image_file').val();
      var status=true;  

      if(img!="")
      {
          if (!parseInt($('#w').val()))
      {
           $('.error').html('Please select a crop region and then press Save').show();
          return false;
      }

      }
      return status; 
    }


  $(function () 
  {
      $(".select2").select2();
      //Datemask dd/mm/yyyy
      $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
      //Datemask2 mm/dd/yyyy
      $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
      //Money Euro
      $("[data-mask]").inputmask();
        //Colorpicker
      $(".my-colorpicker1").colorpicker();
      //color picker with addon
      $(".my-colorpicker2").colorpicker();
        
        $('#datepic').datepicker({
          format: "dd - M - yy",
      });

    var currentDate = new Date();  
      $('#cropModal').on('shown.bs.modal', function () {
          $(this).find('.modal-dialog').css({
              width:'auto',
              height:'auto', 
              'max-height':'80%'
          });
      });
  });


  $(".close").click(function()
  {
    $('#filediv').load(document.URL +  ' #filediv');
  });

</script>
</body>
</html>
<script type="text/javascript">

function showSub(sel) {

  var id = sel.options[sel.selectedIndex].value;  

  $("#output1").html( "" );
  if (id.length > 0 ) { 
 
   $.ajax({
      type: "POST",
      url: "<?= CUSTOM_BASE_URL . 'Cart_banner/setBannerType' ?>",
      data: "id="+id,
      cache: false,
      beforeSend: function () { 
        $('#output1').html('<img src="loader.gif" alt="" width="24" height="24">');
      },
      success: function(html) { 

        if(html) {

          $("#output1").html(html);
          
        }
      }
    });
  } 
}

</script>
