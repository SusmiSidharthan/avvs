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
          <h1>Edit Meta</h1>
        </section>
          
        <!-- Main content -->
<section class="content">
    <!--            <div class="row">-->
    <div class="box box-primary">


<form enctype="multipart/form-data" method="post" name="myform" action="<?= CUSTOM_BASE_URL . 'meta/update' ?>" >
<?php foreach ($result as $row) {?>
  <div class="container-fluid">
    <div class="row">
        


          <div class="col-md-12"><h3 class="new-ca-head">Meta Data</h3></div>


             <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="inputUserName">Page</label>
                 <select data-live-search="true" class="form-control selectpicker" id="page" name="page" required>
                   <option value="Home" <?= (set_value('Home') != '') ? set_select('Home', 'Home') : ($row['page'] == 'Home') ? "selected='selected'" : '' ?> >Home</option>
                   <option value="About" <?= (set_value('About') != '') ? set_select('About', 'About') : ($row['page'] == 'About') ? "selected='selected'" : '' ?> >About</option>
                   <option value="Ayurvaram" <?= (set_value('Ayurvaram') != '') ? set_select('Ayurvaram', 'Ayurvaram') : ($row['page'] == 'Ayurvaram') ? "selected='selected'" : '' ?> >Ayurvaram</option>
                   <option value="Product-List" <?= (set_value('Product-List') != '') ? set_select('Product-List', 'Product-List') : ($row['page'] == 'Product-List') ? "selected='selected'" : '' ?> >Product-List</option>
                   <option value="Gallery" <?= (set_value('Gallery') != '') ? set_select('Gallery', 'Gallery') : ($row['page'] == 'Gallery') ? "selected='selected'" : '' ?> >Gallery</option>
                   <option value="Contact" <?= (set_value('Contact') != '') ? set_select('Contact', 'Contact') : ($row['page'] == 'Contact') ? "selected='selected'" : '' ?> >Contact</option>
                   <option value="Appoinment" <?= (set_value('Appoinment') != '') ? set_select('Appoinment', 'Appoinment') : ($row['page'] == 'Appoinment') ? "selected='selected'" : '' ?> >Appoinment</option>
                   <option value="Testimonials" <?= (set_value('Testimonials') != '') ? set_select('Testimonials', 'Testimonials') : ($row['page'] == 'Testimonials') ? "selected='selected'" : '' ?> >Testimonials</option>
                   <option value="Blog" <?= (set_value('Blog') != '') ? set_select('Blog', 'Blog') : ($row['page'] == 'Blog') ? "selected='selected'" : '' ?> >Blog</option>

                </select> 
                 <?php echo form_error('page', '<p class="invaild-9-field">', '</p>'); ?>
              </div>    
            </div>


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
                      <?php echo form_error('canonical_link', '<p class="invaild-9-field">', '</p>'); ?>
                  </div>
        </div>

        <div class="col-md-12">
                  <div class="form-group">
                      <label class="form-control-label" for="inputBasicFirstName">Meta Description</label> 
                     <input type="text" class="form-control" name="meta_description"   value="<?php echo $row['meta_description']; ?>">
                      <?php echo form_error('meta_description', '<p class="invaild-9-field">', '</p>'); ?>
                  </div>
        </div>

        <div class="col-md-6">
              <div class="form-group">
                  <label class="form-control-label" for="inputBasicFirstName">SEO Name</label> 
                  <input class="form-control" type="text" name="seo_name" value="<?php echo $row['seo_name']; ?>" data-role="tagsinput" >
                  <?php echo form_error('seo_name', '<p class="invaild-9-field">', '</p>'); ?>
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
  
</body>

</html>
<script>

$("#cancel").click(function () {//jquery cancel function when cancel button click
window.location = '<?= CUSTOM_BASE_URL . "meta" ?>';
});
</script>
