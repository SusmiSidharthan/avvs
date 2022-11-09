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
    
          <!-- Mobile menu -->
  <link href="<?php echo base_url();?>assets/css/mobile-menu.css" rel="stylesheet">
  <!-- Mobile menu -->
  <link href="<?php echo base_url();?>assets/css/dropdown.css" rel="stylesheet">

  </head>
  <body id="home-menu">
      
  <div id="menuheader" class="mobile-nav">

    <div class="b-nav">

      <div>
        <nav class="menu">

          <ul class="sign-fj85 font-crimsonpro">
            <li><a class="font-size-18 font-weight-500 text-decoration-none" href="#">Sign in</a></li>
            <li><a class="font-size-18 font-weight-500 text-decoration-none" href="#">Register</a></li>
          </ul>

          <ul class="menu__list font-crimsonpro">
            <li><a href="index.html" class="menu__item font-size-22">Home</a></li>
            <li><a class="menu__item font-size-22">Stores</a>
              <ul class="menu__sublist">
                <li><a href="proprietary.html" class="menu__subitem font-size-18">Proprietary</a>
                <li><a href="classical.html" class="menu__subitem font-size-18">Classical</a></li>
                <li><a href="cosmetic.html" class="menu__subitem font-size-18">Cosmetic</a></li>
              </ul>
            </li>
            <li><a class="menu__item font-size-22">Services</a>
              <ul class="menu__sublist">
                <li><a href="spine-joint-disorders.html" class="menu__subitem font-size-18">Spine & Joint Disorders</a>
                <li><a href="skin-disorders.html" class="menu__subitem font-size-18">Skin Disorders</a></li>
                <li><a href="hair-scalp-disorders.html" class="menu__subitem font-size-18">Hair & Scalp Disorders</a></li>
              </ul>
            </li>
            <li><a href="about.html" class="menu__item font-size-22">About</a></li>
            <li><a href="<?= CUSTOM_BASE_URL;?>avvvs-speciality-clinic" class="menu__item font-size-22"><img src="<?php echo base_url();?>assets/home/images/avvvs-text-black.png" style="width:54px;position: inherit;vertical-align: initial;" alt="avvvs"> Specialty Clinic</a></li>
            <li><a href="gallery.html" class="menu__item font-size-22">Gallery</a></li>
            <li><a href="testimonials.html" class="menu__item font-size-22">Testimonials</a></li>
            <li><a href="blog.html" class="menu__item font-size-22">Blog</a></li>
            <li><a href="book-your-appoinment.html" class="menu__item font-size-22">Book Your Appoinment</a></li>
            <li><a href="contact.html" class="menu__item font-size-22">Contact</a></li>
          </ul>
        </nav>
      </div>

    </div>

    <div class="b-container">
      <div class="b-menu">
        <div class="b-bun b-bun--top"></div>
        <div class="b-bun b-bun--mid"></div>
        <div class="b-bun b-bun--bottom"></div>
      </div>
    </div>

    <a href="#" class="b-brand"></a>
  </div>
      
      

 <!--- Header start--->
 <header class="head-a clearHeader clearfix">
  
     
    <div class="tp-hdk12">
        <div class="ctp-hdk13">
            Amalgam of tradition, technology and expertise through 100 years
        </div>
    </div>     
     
     
     
  <div class="">
   <div class="container-fluid">
       
      
     <div>

         
      <div class="row">
          
<div class="col-md-12 col-lg-12 col-xl-12">
    
      <div class="menu-out12 bag-men-ab">

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
       <div class="hfh-sd13"></div>
       
          <a href="<?= CUSTOM_BASE_URL;?>" class="hda-s-logo">
           <img src="<?php echo base_url();?>assets/images/logo.png" alt="avvvs">  
         </a>
         

            <div class="he-le12">
           
        <div class="rt-hdolfv14">
           
        
        <div class="hda-search">
            
          <button type="button" class="sea-fh12 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="glyph-icon flaticon-magnifying-glass"></i>
          </button>
          <div class="dropdown-menu sea-drkj-12">
            <ul class="pro-tool-drop">  
             <li>
                 <form autocomplete="off" name="search" enctype="multipart/form-data" method="post" action="<?= CUSTOM_BASE_URL . 'product-list' ?>">
                   <input id="search" class="hd-sea" type="text" name="search" placeholder="Search for Products...">
                   <button class="hd-sub" type="submit"><i class="glyph-icon flaticon-magnifying-glass"></i></button> 
                 </form> 
                 <div id="key_display"></div>
             </li>

            </ul>    
          </div>  
            
        <?php if($search != ''){ ?>
        <input id="search_value" value="<?php echo $search; ?>"  type="hidden" name="search_value">  
        <?php  } else{ ?>
        <input id="search_value" value=""  type="hidden" name="search_value">  
        <?php  }  ?>
            
          
        </div>
        
        
     
        
         <div class="hda-r clearfix">
         <div class="btn-group">

          <?php $session_data=$this->session->userdata('userDetails');?>

           <?php if(empty($session_data->id)) { ?>

         <!-- <button type="button" class="hda-ma" data-toggle="modal" data-target="#my-account"><i class="glyph-icon">
             <img src="<?php echo base_url();?>assets/images/login.svg" alt="">  
         </i></button> -->

         <a class="hda-ma" href="<?= CUSTOM_BASE_URL;?>login"><img src="<?php echo base_url();?>assets/images/login.svg" alt=""></a>

         <?php } else{ ?>  
             
          <button type="button" class="log-pro dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?= $session_data->phone;?>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <ul class="pro-tool-drop">  
             <li><a href="<?= CUSTOM_BASE_URL;?>my-profile">My Profile</a></li>
             <li><a href="<?= CUSTOM_BASE_URL. 'my-order' ?>">Order</a></li>
             <li><a href="<?= CUSTOM_BASE_URL. 'wish-list' ?>">Wish list</a></li>
             <li><a href="<?= CUSTOM_BASE_URL. 'user_login/logout' ?>">Logout</a></li>
            </ul>    
          </div>
           <?php } ?> 
         </div>  
         </div>

       
       
        <a class="hda-cart" href="<?= CUSTOM_BASE_URL;?>view-cart">
            <div class="hda-cart-ab"><img src="<?php echo base_url();?>assets/images/cart.svg" alt="avvvs"></div>
            <span><?= $cart_count;?></span>
        </a>
        
        
        <a class="hda-save" href="<?= CUSTOM_BASE_URL. 'wish-list' ?>">
            <img src="<?php echo base_url();?>assets/images/save.svg" alt="avvvs">
        </a>
        
        </div>
       </div>
     
               
  
         
         
         
       </div>
       </div>  
       
       </div>
          
          

       
<div class="row">       
      <div class="col-md-12 col-lg-12 col-xl-12">
      <div class="hda-nav clearfix">
      <nav class="applePie nav clearfix">
       <div class="menubtn"><i class="glyph-icon flaticon-menu-button"></i></div>
        <ul id="nav" class="clearfix">
             <li><a href="<?= CUSTOM_BASE_URL;?>">HOME</a></li>
             <li><a href="<?= CUSTOM_BASE_URL;?>product-list/NjAxMDFCYWxnYWxvcmVCYXphcjEwMUNvRGVfT25MaXNUZXJfc0VDckVUX1RlQW1fckV0U0lMbm8=">PROPRIETARY</a></li>
             <li><a href="<?= CUSTOM_BASE_URL;?>product-list/NjExMDFCYWxnYWxvcmVCYXphcjEwMUNvRGVfT25MaXNUZXJfc0VDckVUX1RlQW1fckV0U0lMbm8=">CLASSICAL</a></li>
             <!--<li><a href="#">COSMETIC</a></li>-->
             <li>
              <a class="avvs-speci-12" href="<?= CUSTOM_BASE_URL;?>avvvs-speciality-clinic">
                <img src="<?php echo base_url();?>assets/home/images/avvvs-text-black.png" alt="avvvs">
                SPECIALTY CLINIC
              </a>
            </li>
             <li><a href="<?= CUSTOM_BASE_URL;?>gallery">GALLERY</a></li>
             <li><a href="<?= CUSTOM_BASE_URL;?>blog">BLOG</a></li>
             <li><a href="<?= CUSTOM_BASE_URL;?>consulting">BOOK YOUR APPOINMENT</a></li>
             <li><a href="<?= CUSTOM_BASE_URL;?>about">ABOUT</a></li>
             <li><a href="<?= CUSTOM_BASE_URL;?>contact">CONTACT</a></li>

        </ul>
       </nav>
     </div> 
       </div>


      </div>
     </div>
     
    </div>
   </div>
     



 </header>    
