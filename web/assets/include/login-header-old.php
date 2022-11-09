<!doctype html>
<html lang="en">
  <head>
     <title>AVVVS</title>
<!--     <title><?= $title;?></title>-->
     
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="AVVVS">
    <meta property="og:type" content="article"/>
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/fav.png">
    <meta name="robots" content="index,follow">
    
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    
    <!--- avv style --->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/avvvs.css">



    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slider/plugins.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slider/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slider/vendor.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
    <!--- avv style end --->

  </head>
  <body id="home-menu">
      

      
      

 <!--- Header start--->
 <header class="head-a clearHeader clearfix">
     
        <nav id="global-nav" class="nav">


     <div class="pull-right d-flex align-items-center">
         <a href="#" id="overlay">

             <div class="humburger">
                 <!--<div class="burger"></div>-->
                 <div class="menu-icon btn1" data-menu="1">
                     <div class="icon-left"></div>
                     <div class="icon-right"></div>
                 </div>
             </div>

         </a>


         <div class="menu" style="display:none;">
             <img class="img-fluid" src="<?php echo base_url();?>assets/images/menu-bg.png">
             <ul>
                 <li>
                     <a class="active-home" href="<?= CUSTOM_BASE_URL;?>home">Home</a>
                     <a class="active-about" href="<?= CUSTOM_BASE_URL;?>about">About</a>

                    <!--<a class="active-product show-hidden-menus" id="">Stores<i class="fa fa-caret-down" aria-hidden="true"></i></a>-->

                    <!-- <div class="hidden-menus" style="display:none;">-->
                    <!--     <ul>-->
                    <!--         foreach ($main_category as $cat) { -->
                             
                    <!--         $catmackratt = base64_encode($cat['cat_id'] .SALT_KEY.CKRAT_KEY);-->
                    <!--         ?>-->
                    <!--         <li><a href="<?= CUSTOM_BASE_URL.'product-list/'.$catmackratt;?>"><?=$cat['cat_name'] ;?></a></li>-->
                             <!--<li><a href="<?= CUSTOM_BASE_URL;?>classical-products">Classical</a></li>-->
                    <!--          } ?>-->
                    <!--     </ul>-->
                    <!-- </div>-->


                     <a class="active-ayurvaram" href="<?= CUSTOM_BASE_URL;?>ayurvaram">Ayurvaram</a>
                     <a class="active-gallery" href="<?= CUSTOM_BASE_URL;?>gallery">Gallery</a>
                      <a class="active-blog" href="<?= CUSTOM_BASE_URL;?>blog">Blog</a>
                     <!-- <a class="active-news" href="newsandevents.php">News & Events</a>-->
                     <a class="active-contact" href="<?= CUSTOM_BASE_URL;?>contact">Contact</a>
                     <a class="active-contact" href="<?= CUSTOM_BASE_URL;?>consulting">Book Your Appoinment</a>
                 </li>
             </ul>


         </div>
     </div>
 </nav>   
     
     
     
     
     
  <div class="">
   <div class="container-fluid">
       
     <div class="head-a-in clearfix">
         
      


     </div>
       
     
   
       
     <div class="">
      <div class="row">
          
<div class="col-md-5 col-lg-5 col-xl-5">
      <div class="menu-out12 bag-men-ab">
      <div class="hda-nav clearfix">
<!--      <nav class="applePie nav clearfix">
       <div class="menubtn"><i class="glyph-icon flaticon-menu-button"></i></div>
        <ul id="nav" class="clearfix">
          <?php foreach ($main_category as $key => $main_cat_row) { 
                
                $mainmackratt = base64_encode($main_cat_row['cat_id'] .SALT_KEY.CKRAT_KEY);
            ?>
           <li><a class ="outer" sectionId="<?= $main_cat_row['cat_id'] ?>" href="<?= CUSTOM_BASE_URL .'product-list/'.$mainmackratt; ?>"><?= $main_cat_row['cat_name']; ?></a>
              <ul id="<?= "output_".$main_cat_row['cat_id'] ?>">

              </ul>            
            </li>
             <?php } ?>
             
           
              <ul>
                <?php foreach ($list as $key => $cat_row) { 
                    
                    $offermackratt = base64_encode($cat_row->cat_id .SALT_KEY.CKRAT_KEY);
                
                ?>
                  <li><a href="<?= CUSTOM_BASE_URL . 'offers-category/'.$offermackratt; ?>"><?= $cat_row->cat_name; ?></a></li> 
                <?php  } ?>
               
              </ul>
            </li>



        </ul>
       </nav>-->
       
          <a href="<?= CUSTOM_BASE_URL;?>" class="hda-s-logo">
           <img src="<?php echo base_url();?>assets/images/logo.png" alt="avvvs">  
         </a>
     </div> 
     
     

         
         
         
       </div>
       </div>          
          
          

       
       
      <div class="col-md-7 col-lg-7 col-xl-7">
       <div class="he-le12">
           
        <div>
           
        <a href="<?= CUSTOM_BASE_URL;?>consulting" class="hda-s-appt">Book Your Appoinment</a>    
          
        <div class="hda-search">
          <form autocomplete="off" name="search" enctype="multipart/form-data" method="post" action="<?= CUSTOM_BASE_URL . 'product-list' ?>">
           <input id="search" class="hd-sea" type="text" name="search" placeholder="Search for Products...">
           <button class="hd-sub" type="submit"><i class="glyph-icon flaticon-magnifying-glass"></i></button> 
          </form> 
          <div id="key_display"></div>
        </div>
        
        
         <div class="hda-r clearfix">
         <div class="btn-group">

          <?php $session_data=$this->session->userdata('userDetails');?>

      
         </div>  
<!--          <button type="button" class="hda-ma" data-toggle="modal" data-target="#my-account"><i class="glyph-icon flaticon-user"></i>My Account</button>-->
         </div>

       
       
        <a class="hda-cart" href="<?= CUSTOM_BASE_URL;?>view-cart">
            <div class="hda-cart-ab"><img src="<?php echo base_url();?>assets/images/cart.svg" alt="avvvs"></div>
            <span><?= $cart_count;?></span>
        </a>
        
        
        <a class="hda-save" href="#">
            <img src="<?php echo base_url();?>assets/images/save.svg" alt="avvvs">
        </a>
        
        </div>
        
       </div>
       </div>


      </div>
     </div>
     
     
    </div>
   </div>
     



 </header>   
 <!--- Header end---> 

<script src="<?php echo base_url();?>assets/js/jquery-1.12.4.js"></script> 

<script type="text/javascript">

$( ".outer" ).mouseover(function() {

  var rowid = $(this).attr('sectionId');

   $.ajax({
        type: 'post',
        url: '<?= CUSTOM_BASE_URL . 'Main/get_sub_category' ?>', //Here you will fetch records 
        data: 'rowid=' + rowid, //Pass $id
        success: function (data) {

           $("#output_"+rowid).html(data);

        }
  });

});

</script>
         
 <script type="text/javascript">

  function fill(value) {

   $('#search').val(value);

   //Hiding "display" div in "search.php" file.
 
   $('#key_display').hide();

   if (value) {

    document.search.submit();

    }
 
}

   $(document).ready(function() {
  
       $("#search").keyup(function() {
      
           var name = $('#search').val();
    
           if (name == "") {
      
               $("#key_display").html("");
     
           }
      
           else {
      
               $.ajax({
      
                   type: "POST",
     
                   url: '<?= CUSTOM_BASE_URL;?>Main/list_item',
       
                   data: {
      
                       search: name
     
                   },
      
                   success: function(html) {
    
                       $("#key_display").html(html).show();
     
                   }
     
               });
     
           }
     
       });

   });

$(document).on('click', function (e) {
    
    if ($(e.target).closest("#key_display").length === 0) {
        $("#key_display").hide();
    }
    
});
</script>
      
<script>

    jQuery(".dropdown-item").click(function(e){
    //do something
    var location = $(this).attr('sectionId');
    
       $.ajax({
          
           type: "POST",
    
           url: '<?= CUSTOM_BASE_URL;?>Main/change_location',
    
           data: {
    
               location: location
    
           },
    
           success: function(html) {
    
            if(html=='1')
            {
    
              window.location.reload(html);
    
            }                 
    
           }
    
       });
    
    });

</script>