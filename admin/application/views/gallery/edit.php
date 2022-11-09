<!DOCTYPE html>
<html>
  <head>
    <?php include('assets/include/header.php'); ?>
  </head>
    <style>
          input[type=file]{
      display: inline;
    }
    #image_preview{
      border: 1px solid black;
      padding: 10px;
    }
    #image_preview img{
      width: 200px;
       height: 200px;
      padding: 5px;
    }

  </style>
  <body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

     
 <?php include('assets/include/navigation.php'); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Edit Gallery </h1>
        </section>

          
        <!-- Main content -->
<section class="content">
    <!--            <div class="row">-->
    <div class="box box-primary">
        <!-- /.box-header -->
         <?php foreach ($result as $row) { 
              $ci_name=strtolower($this->router->fetch_class());?>
     <form class=" add-ca-in" method="post" enctype="multipart/form-data" action="<?php echo base_url()?>Gallery/update">
    <div class="container-fluid">
        
             <div class="row">
      <div class="col-md-4">
       <div class="form-group">
         <label class="form-control-label" for="inputBasicFirstName">Album</label> 
       </div>
      </div>
                     <div class="col-md-5">
                      <div class="form-group">
                         <select data-live-search="true" class="form-control selectpicker" id="company" name="album" >
                          <option value="<?php echo set_value('album'); ?>"><?php echo set_value('album'); ?></option>
                              <?php foreach ($album as $rows) { ?>
                          
                                  <option value="<?= $rows['id']?>"
                                  <?php if ($row['album_id'] == $rows['id']) : ?> selected<?php endif; ?> >
                                  <?= $rows['title'];?>
                                  </option>
                          
                          
                             <?php } ?>                     
                
  
                        </select> 
                         <?php echo form_error('album', '<p class="invaild-9-field">', '</p>'); ?>
                      </div>    
                    </div>
    </div>  
        
        
    <div class="row">
      <div class="col-md-4">
       <div class="form-group">
         <label class="form-control-label" for="inputBasicFirstName">Title</label> 
       </div>
      </div>
      <div class="col-md-6">
       <div class="form-group">  
         <input type="text" class="form-control" name="title" value="<?= set_value('title', isset($row['title']) ? $row['title'] : '') ?>">
         <?php echo form_error('title', '<p class="invaild-9-field">', '</p>'); ?>
       </div>
      </div>
    </div>

    <div class="row">
    <div class="col-md-4">
        <div class="form-group">
         <label class="form-control-label" for="inputBasicFirstName">Description</label> 
       </div>
       </div>
            <div class="col-md-6">
            <div class="form-group">
                    
                     <textarea name="description" class="form-control" rows="3"><?php echo $row['description']; ?></textarea>
                     <?php echo form_error('description', '<p class="invaild-9-field">', '</p>'); ?>
                </div>
    </div>
    </div>


    <div class="row">
      <div class="col-md-4">
       <div class="form-group">
         <label class="form-control-label" for="inputBasicFirstName">Images</label> 
       </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <input multiple accept="image/x-png,image/jpeg" type="file" id="uploadFile"  name="image_file[]"  class="form-control"/> 
          <?php echo form_error('image_file', '<p class="help-block error-info">', '</p>'); ?>

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
     <div id="image_preview">
       
       <?php foreach($images as $img){?>

        <img src="<?= CUSTOM_BASE_URL;?>uploads/gallery/<?php echo $img['image']; ?>">

       <?php  }  ?>

     </div>
         <?php } ?>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- /.row -->
</section>
<!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer clearfix">
        <div class="pull-right">
         <strong>Copyright &copy; 2022 <a target="_blank" href="#">AVVVS</a></strong>.  All Rights Reserved.
        </div>
      </footer>
      <!-- Control Sidebar -->
     
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  </div><!-- ./wrapper -->

<!--  <script type="text/javascript" src="<?= CUSTOM_BASE_URL .'assets/plugins/crop/script_banner.js'?>"></script>-->

<!--<script type="text/javascript" src="<?= CUSTOM_BASE_URL .'assets/plugins/crop/script_banner.js'?>"></script>-->

    <!-- jQuery 2.1.4 -->
  <?php include('assets/include/footer.php'); ?>
    <!--<script type="text/javascript" src="<?= CUSTOM_BASE_URL .'assets/plugins/crop/script_banner.js'?>"></script>-->
  <script>

    $("#cancel").click(function () {//jquery cancel function when cancel button click
      window.location = '<?= CUSTOM_BASE_URL . "Institutes/gallery" ?>';
    });//jquery cancel function end




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

<script>
    

  $("#uploadFile").change(function(){
     $('#image_preview').html("");
     var total_file=document.getElementById("uploadFile").files.length;


     for(var i=0;i<total_file;i++)
     {
      $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
     }


  });


  $('form').ajaxForm(function() 
   {
    alert("Uploaded SuccessFully");
   }); 

</script>
