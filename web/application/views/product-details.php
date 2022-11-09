<!doctype html>
<html lang="en">
  <head>
           
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php if(count($meta> 0)) {?>
    
    	<title><?=$meta->meta_title?></title>
    	<meta name="description" content="<?=$meta->meta_description?>">
    	<link rel="canonical" href="<?=$meta->canonical_link?>">
        <meta name="keywords" content="<?=$meta->meta_key?>">
        
    <?php } ?>

    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/fav.png">
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    
    
    <!--- avv style --->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/avvvs.css">

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
        <?php $session_data=$this->session->userdata('userDetails');?>

      <div>
        <nav class="menu">

          <ul class="sign-fj85 font-crimsonpro">
            <?php if(empty($session_data->id)) { ?>
            <li><a class="font-size-18 font-weight-500 text-decoration-none" href="<?= CUSTOM_BASE_URL;?>login">Sign in</a></li>
            <li><a class="font-size-18 font-weight-500 text-decoration-none" href="<?= CUSTOM_BASE_URL;?>login">Register</a></li>
            <?php } else{ ?> 
            <li><a class="font-size-18 font-weight-500 text-decoration-none" href="<?= CUSTOM_BASE_URL;?>my-profile">My Profile</a></li>  
            <?php  }  ?> 
          </ul>

          <ul class="menu__list font-crimsonpro">
          <li><a href="<?= CUSTOM_BASE_URL;?>home" class="menu__item font-size-22">Home</a></li>
            <li><a class="menu__item font-size-22">Stores</a>
              <ul class="menu__sublist">
                <li><a href="<?= CUSTOM_BASE_URL;?>product-list/NjAxMDFCYWxnYWxvcmVCYXphcjEwMUNvRGVfT25MaXNUZXJfc0VDckVUX1RlQW1fckV0U0lMbm8=" class="menu__subitem font-size-18">Proprietary</a>
                <li><a href="<?= CUSTOM_BASE_URL;?>product-list/NjExMDFCYWxnYWxvcmVCYXphcjEwMUNvRGVfT25MaXNUZXJfc0VDckVUX1RlQW1fckV0U0lMbm8=" class="menu__subitem font-size-18">Classical</a></li>
                <!--<li><a href="cosmetic.html" class="menu__subitem font-size-18">Cosmetic</a></li>-->
              </ul>
            </li>
           <!-- <li><a class="menu__item font-size-22">Services</a>
              <ul class="menu__sublist">
                <li><a href="<?= CUSTOM_BASE_URL;?>spine-joint" class="menu__subitem font-size-18">Spine & Joint Disorders</a>
                <li><a href="<?= CUSTOM_BASE_URL;?>skin-disorders" class="menu__subitem font-size-18">Skin Disorders</a></li>
                <li><a href="<?= CUSTOM_BASE_URL;?>hair-scalp" class="menu__subitem font-size-18">Hair & Scalp Disorders</a></li>
              </ul>
            </li>-->
            <li><a href="<?= CUSTOM_BASE_URL;?>about" class="menu__item font-size-22">About</a></li>
            <li><a href="<?= CUSTOM_BASE_URL;?>avvvs-speciality-clinic" class="menu__item font-size-22"><img src="<?php echo base_url();?>assets/home/images/avvvs-text-black.png" style="width:54px;position: inherit;vertical-align: initial;" alt="avvvs"> Specialty Clinic</a></li>
            <li><a href="<?= CUSTOM_BASE_URL;?>consulting" class="menu__item font-size-22">Book Your Appoinment</a></li>
            <li><a href="<?= CUSTOM_BASE_URL;?>gallery" class="menu__item font-size-22">Gallery</a></li>
            <li><a href="<?= CUSTOM_BASE_URL;?>testimonials" class="menu__item font-size-22">Testimonials</a></li>
            <li><a href="<?= CUSTOM_BASE_URL;?>blog" class="menu__item font-size-22">Blog</a></li>
            <li><a href="<?= CUSTOM_BASE_URL;?>contact" class="menu__item font-size-22">Contact</a></li>
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

         <button type="button" class="hda-ma" data-toggle="modal" data-target="#my-account"><i class="glyph-icon">
             <img src="<?php echo base_url();?>assets/images/login.svg" alt="">  
         </i></button>
         <?php } else{ ?>  
             
          <button type="button" class="log-pro dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?= $session_data->email;?>
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
             <li><a href="<?= CUSTOM_BASE_URL;?>product-list">ONLINE STORE</a></li>
             <!--<li><a href="#">COSMETIC</a></li>-->
             <li><a class="avvs-speci-12" href="<?= CUSTOM_BASE_URL;?>avvvs-speciality-clinic"><img src="<?php echo base_url();?>assets/home/images/avvvs-text-black.png" alt="avvvs"> SPECIALTY CLINIC</a></li>
             <li><a href="<?= CUSTOM_BASE_URL;?>gallery">GALLERY</a></li>
             <li><a href="<?= CUSTOM_BASE_URL;?>blog">BLOG</a></li>
             <li><a href="<?= CUSTOM_BASE_URL;?>testimonials">TESTIMONIALS</a></li>
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




<?php 
//include("web/assets/include/header-c.php");?>




  <main role="main" class="pro-details-main">
      
    <div class="container-fluid">

      <div class="row">
         <?php foreach ($result as $key => $row) { ?>
       <!-- Left side -->
        <div class="col-lg-5 col-xl-5"> 
        

<!-- Sticky section gallery -->
 <div class="fixedsticky">
  <div>
      
      
   <div class="prd-left-main">
       
       <div class="row">
       <div class="col-lg-2 col-xl-2">
          
            <ul class="recent_list">
              <?php foreach ($row['image_name'] as $key => $images) { ?>
                <li class="photo_container">
                    <a href="<?= CUSTOM_BASE_URL . '/admin/uploads/product_multimage/'.$images['image']; ?>" rel="gallerySwitchOnMouseOver: true, popupWin:'<?= CUSTOM_BASE_URL . 'admin/uploads/product_multimage/'.$images['image']; ?>', useZoom: 'cloudZoom', smallImage: '<?= CUSTOM_BASE_URL . 'admin/uploads/product_multimage/'.$images['image']; ?>'" class="cloud-zoom-gallery">
                        <img itemprop="image" src="<?= CUSTOM_BASE_URL . '/admin/uploads/product_multimage/'.$images['image']; ?>" class="img-responsive">
                    </a>
                </li>
                <?php } ?>            
            </ul> 
      </div>
           
      <div class="col-lg-10 col-xl-10">     
             <div class="gallery-sample">
            <a href="<?= CUSTOM_BASE_URL . '/admin/uploads/product_multimage/'.$row['image_name'][0]['image']; ?>" class="cloud-zoom" id="cloudZoom">
                <img src="<?= CUSTOM_BASE_URL . '/admin/uploads/product_multimage/'.$row['image_name'][0]['image']; ?>" class="img-responsive">
            </a>
           </div>      
      </div>
      <div class="col-lg-12 col-xl-12">    
          <div class="prd-control-out">
            <button value="<?= $row['id']; ?>" id="addtocart" class="prd-control-add" type="button">Add to cart</button>
            <button value="<?=  base64_encode($row['id'] .SALT_KEY.CKRAT_KEY); ?>" id="buynow" class="prd-control-buy" type="button">buy now</button>
                      <?php
            //$this->session->set_userdata('userDetails', $res);
            $_SESSION['url'] = $_SERVER['REQUEST_URI']; ?>
         <input type="hidden" value="<?php echo $_SESSION['url']; ?>" >
          </div>
      </div>       
           
           
    </div>
   </div>
  </div>
</div>

        <!-- /Sticky section gallery -->
   
       </div>
      <!-- /Left side -->       
 
      <!-- right side -->
        <div class="col-lg-7 col-xl-7">
          <div class="prd-right-main clearfix">
            <div class="row">
             <div class="col-sm-9 col-md-9 col-sm-9 col-lg-9 col-xl-9">
               <h1 class="prd-rt-head"><?= $row['stock_name']; ?></h1>      
             </div>
             <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                 
          
                 
                 
               <div class="prd-li-co-out">
                <div class="prd-size-radio">   
                 <input <?php if($wish_list=="1") { echo "checked"; }  ?> type="checkbox" name="ss" id="<?= $row['id']; ?>" class="check common_selector pop" value="1">
                 <label for="<?= $row['id']; ?>"><i class="glyph-icon flaticon-heart-shape-silhouette"></i></label>
                </div>
              
               </div>
               <div id="sucess" class="alert-su"></div>
             </div>
            </div>
             <div class="row">
             <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 amt-deta12">
              <div class="prd-pri-out">
                  <div class="prd-p">₹  <span><?= $row['list_price']; ?></span></div>
              </div>
	      <?php if($row['list_price'] != $row['price']){ ?>
              <div class="prd-pri-out">
                <div class="prd-p-rgt">
                 <div class="prd-p-n">₹  <span><?= $row['price']; ?></span></div>
                 <div class="prd-p-off"><?= $row['discount']; ?>% OFF</div> 
                </div>
              </div>  
	      <?php  }  ?> 
             </div>

             </div>
            <div class="row prd-p-c-out">

              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <?php foreach ($row['option_name'] as $key => $options) { ?>
               <div class="prd-select">
                <h2><?= $options['name']; ?></h2>
                <?php foreach ($options['option_varriant'] as $key => $opt_varriants) { 

                  if($opt_varriants['status']==1)
                  {
                    $checked= "checked";
                  }
                  else{

                    $checked= "";

                  }

                  ?>
                <div class="prd-size-out">

              <?php if(!empty($opt_varriants['color_name'])){ ?>

                   <a href="<?= CUSTOM_BASE_URL . 'product-details/'.$opt_varriants['stock_id']; ?>">
                  <div class="prd-size-radio">
                    <input type="radio" name="test" id="<?= $opt_varriants['opt_var_id']; ?>" <?= $checked ?>>   
                    <label for="<?= $opt_varriants['opt_var_id']; ?>" style="background-color:<?= $opt_varriants['type_name']; ?>;"><?= $opt_varriants['color_name']; ?></label>
                  </div> </a>

              <?php } else{  ?>

                    <a href="<?= CUSTOM_BASE_URL . 'product-details/'.$opt_varriants['stock_id']; ?>">

                    <div class="prd-size-radio">
                    <input type="radio" name="test" id="<?= $opt_varriants['opt_var_id']; ?>" <?= $checked ?>>  
                    <label for="<?= $opt_varriants['opt_var_id']; ?>"><?= $opt_varriants['type_name']; ?></label>
                    </div> </a> 

              <?php } ?>

                </div>
                <?php } ?>
               </div> 
             <?php } ?>  
             </div>

            </div>
            <div class="row mar-top40">
            
             <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="prd-details-out">
                 <h3 class="font-w400">Highlights :</h3>
                   <div class="prd-de-co">
                    <ul>
                     <?php foreach ($row['highlights'] as $key => $highlight) { ?>

                     <li><?= $highlight['highlights']; ?></li>

                    <?php } ?>
                    </ul> 
                   </div>
                </div>
             </div>
           
            </div>
            <div class="row mar-top40">
             <div class="col-lg-12 col-xl-12">
                <div class="prd-details-out-b">
                 <h3 class="font-w400">Description :</h3>
                   <div class="prd-de-co-b">
                       <p><?= $row['description']; ?></p>
                    </div>
                </div>
             </div>
            </div>
             <div class="prd-tab-out clearfix">
               <!-- Nav tabs -->
<!--                 <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#specification" role="tab">Specification</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#product-description" role="tab">Product Description</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#more-details" role="tab">More Details</a>
                  </li>
                </ul> -->

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="specification" role="tabpanel">
                    <div class="prd-tab-content">
                        
                      <div class="prd-tab-con-in">
                         <?php foreach ($row['feature_name'] as $key => $features) { ?>
                        <h3 class="prd-tab-de-h font-w600"><?= $features['group_name'];?></h3>
                        <div class="prd-tab-con-a">
                          <h3><?= $features['name'];?></h3>
                           <?php foreach ($features['feature_varriant'] as $key => $varriants) { ?>
                          <h4><?= $varriants['variants_name'];?></h4>
                          <?php } ?>
                        </div>
                        <?php } ?>
                      </div>
                      
                        
                    </div>
                  </div>
                  <div class="tab-pane" id="product-description" role="tabpanel">
                    <div class="prd-tab-content">
                   <?= $row['description']; ?>
                    </div> 
                  </div>
                  <div class="tab-pane" id="more-details" role="tabpanel">
                     <div class="prd-tab-content">
                     <?= $row['description']; ?>
                    </div>                    
                    
                  </div>
                </div> 
            </div>
            
            <?php if(!empty($rating_avg)) { ?>
              
            <div class="prd-rating-out clearfix">
              <h2 class="prd-rating-txt font-w400">Ratings and Reviews</h2>
              
                <div class="prd-rating-in">
                <div class="prd-rating-in-a">
                  <div class="prd-rating-in-a-b">
                     <div class="prd-rating-in-a-c">
                       <a><?php if(isset($rating_avg)){
                        echo $rating_avg;
                       } ?><label for="radio5">&#9733;</label></a><br>
                     </div>
                   <?php if(isset($rating)){
                        echo $rating.' '.'Ratings';
                        echo ' & ';
                        echo $rating.' '.'Reviews';
                       } ?>
                 </div>
                </div>

                <div class="prd-rating-in-b">
                    <div class="prd-progrees-rate-out">
                     <div class="prd-progrees-rate"><i class="glyph-icon flaticon-star"></i> <span>5</span></div>
                     <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <div class="prd-at-rate"><?php if(isset($ratingeach1)){
                        echo $ratingeach5;
                       } ?></div>
                    </div>
                    <div class="prd-progrees-rate-out">
                     <div class="prd-progrees-rate"><i class="glyph-icon flaticon-star"></i> <span>4</span></div>
                     <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <div class="prd-at-rate"><?php if(isset($ratingeach1)){
                        echo $ratingeach4;
                       } ?></div>
                    </div>
                    <div class="prd-progrees-rate-out">
                     <div class="prd-progrees-rate"><i class="glyph-icon flaticon-star"></i> <span>3</span></div>
                     <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="30"></div>
                     </div>
                     <div class="prd-at-rate"><?php if(isset($ratingeach1)){
                        echo $ratingeach3;
                       } ?></div>
                    </div>
                    <div class="prd-progrees-rate-out">
                     <div class="prd-progrees-rate"><i class="glyph-icon flaticon-star"></i> <span>2</span></div>
                     <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <div class="prd-at-rate"><?php if(isset($ratingeach1)){
                        echo $ratingeach2;
                       } ?></div>
                    </div>
                    <div class="prd-progrees-rate-out" >
                     <div class="prd-progrees-rate"><i class="glyph-icon flaticon-star"></i> <span>1</span></div>
                     <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <div class="prd-at-rate"><?php if(isset($ratingeach1)){
                        echo $ratingeach1;
                       } ?></div>
                    </div>
                </div>
              </div>
            </div>
            <?php } ?>
             
        </div>
      </div>
     <!-- /right side -->          
    <?php } ?>    
        
    </div> 
      



<div class="container-fluid">
 <div class="row"> 
  <div class="col-lg-12 col-xl-12">
   <div class="pro-flt-main">        
    <div class="pro-spm-txt-m"> 
     <h1>Similar products</h1>
    </div>      
     <div class="h-spm-out-a">
       <div class="row">
        <div class="col-lg-12 col-xl-12">
          <div class="h-spm-slider">
           <div class="owl-carousel owl-carousel-flt-a owl-theme">
          <?php foreach ($similar_item as $key => $similar_rows) { 
          
          $mackratt = base64_encode($similar_rows['id'] .SALT_KEY.CKRAT_KEY);
          
          ?>
            <div class="item">
             <div class="on-out-pro">   
              <div class="on-out-pro-img snip1252"> 
                  <a href="<?= CUSTOM_BASE_URL . 'product-details/'.$mackratt; ?>" target="_blank">
                      <img src="<?= CUSTOM_BASE_URL . 'admin/uploads/product_multimage/'.$similar_rows['image_name']; ?>" alt="AVVVS"></a>
              </div>
              <a class="on-pro-ou-ab" href="#">
               <h1 class="on-pro-hd-a"><?= $similar_rows['stock_name']; ?></h1>
               <h2 class="on-pro-hd-b" style="display:none;"><?= $similar_rows['discount']; ?>% OFF</h2>
              </a>
               <div class="on-sh-out" style="display:none;"> 
                <div class="pro-price">
                 <span class="pro-rup">QR: </span><span class="pro-price-in"><?= $similar_rows['list_price']; ?></span> 
                </div>
               </div>   
             </div>
            </div>
             <?php } ?>
          </div>
          <!-- <a class="button secondary playb">Play</a> 
          <a class="button secondary stopb">Stop</a> --> 
          </div> 
        </div>   
       </div>  
     </div>   
     </div>
    <!-- /product slider 1 --> 
      </div>
        </div>

  </div>
   
 </main> 
 
   <script type="text/javascript">

  $(".check").change(function() {

      if($(this).prop('checked') === true){

          status=1;

      }else{

          status=0;
      }

          var rowid =$(this).attr('id');

          $.ajax({
                type: 'post',
                url: '<?= CUSTOM_BASE_URL . 'Account/addtowishlist' ?>', //Here you will fetch records 
                  data: 'rowid=' + rowid + '&status=' + status, //Pass $id
                success: function (data) {

                  if(data==1) {

                    $('#sucess').html("<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Moved to wishlist</div>");
                    $('#sucess').fadeOut(10*300);

                  }
                  else if(data==0) {

                    $('#sucess').html("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>remove from wishlist</div>");
                    $('#sucess').fadeOut(10*300);

                  }
                  else{

                     $('#sucess').html("<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>You need to login first</div>");

                  }
                  
                  var msgE = $("#sucess");

                        setTimeout(function() {
                            msgE.fadeOut("slow", function () {
                            msgE.empty().show();
                            });
                        }, 2500);



                }
          });

  });

</script>
 
 
 <?php // include("web/assets/include/footer.php");?>
 
 
 
<script type="text/javascript">
  $("#addtocart").click(function () {//jquery cancel function when cancel button click
  
  var id = $(this).val();
  
  window.location = '<?= CUSTOM_BASE_URL . "add-to-cart/" ?>'+id+'/1';

});
</script>

<script type="text/javascript">
  $("#buynow").click(function () {//jquery cancel function when cancel button click
  
  var id = $(this).val();

  window.location = '<?= CUSTOM_BASE_URL . "buy-now/" ?>'+id;

});
</script>

 <?php  //  include("web/assets/include/footer.php");?>
 
 
 <div class="modal fade bd-example-modal-lg" id="my-account" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content my-act-modal">
    <button type="button" class="close my-cart-close" data-dismiss="modal" aria-label="Close">
     <span class="glyph-icon flaticon-cancel"></span>
    </button>
      <div class="modal-body-my-act">
        <div class="my-act-lft">
          <div class="my-act-lft-a">  
            <h3>Log in</h3>
            <h4>Log in to use your AVVVS Account</h4>
          </div>
        </div>
        <div class="my-act-rgt">
         <div class="my-act-rgt-a">
          <div class="my-act-rgt-a-r">
           
           <h4>Mobile Number and Password to Log In</h4>
          </div>   
          <div class="my-act-rgt-a-l">
           <div class="my-act-qr">
              <input  name="email" id="email" type="text" class="form-control log-fi12" placeholder="Mobile number"/>
           <p style="color:orange;" class="help-block error-info" id="email_Err"></p>
           <input  name="password" id="password" type="password" class="form-control log-fi12" placeholder="Password"/> 
        
           <p style="color:orange;" class="help-block error-info" id="password_Err"></p>
           <div style="color:orange;" id="pass_msg"></div>
           <div style="color:orange;" id="not_exist"></div>
          <button id="password-login" type="submit"  class="btn btn-primary btn-block log13">Login</button>
          

           <div class="my-act-rgt-check">
            <input type="checkbox" id="myCheck"> <span>Keep me logged in</span>
           </div>
           </div> 
           <!--- <div class="my-act-or">Forgot</div> --->
           <a data-toggle="modal" data-target="#my-register" class="my-act-log-otp" href="#" data-dismiss="modal">New User ? SignUp</a>
           <br>
           <a data-toggle="modal" data-target="#forgot" class="my-act-log-otp" href="#" data-dismiss="modal">Forgot Password</a>
          </div>

         </div> 
        </div>
      </div>
    </div>
  </div>
</div>
<!-- My account model--> 

 <!-- My Register model-->
<div class="modal fade bd-example-modal-lg" id="my-register" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content my-act-modal">
    <button type="button" class="close my-cart-close" data-dismiss="modal" aria-label="Close">
     <span class="glyph-icon flaticon-cancel"></span>
    </button>
      <div class="modal-body-my-act">
        <div class="my-act-lft my-act-lft2">
          <div class="my-act-lft-a">  
            <h3>Signup</h3>
            <h4>Signup to use your AVVVS account</h4>
          </div>
        </div>
        <div class="my-act-rgt">
         <div class="my-act-rgt-a">
          <div class="my-act-rgt-a-r">
           <h4>E-mail ID and Password to Signup</h4>
          </div>
          <div class="my-act-rgt-a-l">
           <div class="my-act-qr">
              <input name="new_email" id="new_email" type="text" class="form-control log-fi12" placeholder="New E-mail ID"/>
           <p style="color:orange;" class="help-block error-info" id="newemailErr"></p>
           <input  name="new_password" id="new_password" type="password" class="form-control log-fi12" placeholder="Set Password"/> 
           <p style="color:orange;" class="help-block error-info" id="newpasswordErr"></p>


          <div style="color:green;" id="sign_msg"></div>
          <div style="color:orange;" id="sign_msg_wrong"></div>

          <button id="new-password-login" type="submit"  class="btn btn-primary btn-block log13">SignUp</button>
           </div> 
          </div>

         </div> 
        </div>
      </div>
    </div>
  </div>
</div>
<!-- My account model--> 
      
 <!-- Forgot model-->
<div class="modal fade bd-example-modal-lg" id="forgot" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content my-act-modal">
    <button type="button" class="close my-cart-close" data-dismiss="modal" aria-label="Close">
     <span class="glyph-icon flaticon-cancel"></span>
    </button>
      <div class="modal-body-my-act">
        <div class="my-act-lft my-act-lft2">
          <div class="my-act-lft-a">  
            <h3>Forgot</h3>
            <h4>Forgot your AVVVS Password</h4>
          </div>
        </div>
        <div class="my-act-rgt">
         <div class="my-act-rgt-a">
          <div class="my-act-rgt-a-r">
           <h4>Email</h4>
          </div>
          <div class="my-act-rgt-a-l">
           <div class="my-act-qr">
           <input name="forgot_email" id="forgot_email" type="email" class="form-control log-fi12" placeholder="Enter E-Mail"/>
           <p style="color:orange;" class="help-block error-info" id="forgotemailErr"></p>
           
           <input  name="forgot_otp" id="forgot_otp" type="text" class="form-control log-fi12" placeholder="Enter OTP"/> 
           <p id="loadingimg_forgot"></p>
           <button id="forgot_conitune" type="submit"  class="btn btn-primary btn-block log13">Continue</button>
           
           
           
           <button id="forgot_verify" type="submit"  class="btn btn-primary btn-block log13">Verify</button>
           
           <input  name="forgot_password" id="forgot_password" type="password" class="form-control log-fi12" placeholder="Set Password"/> 
           <p style="color:orange;" class="help-block error-info" id="forgotpasswordErr"></p>

          <button id="forgot-password-login" type="submit"  class="btn btn-primary btn-block log13">Update</button>
          
          <div style="color:green;" id="sign_msg_forgot"></div>
          <div style="color:orange;" id="sign_msg_wrong_forgot"></div>
          <div style="color:green;" id="otp_msg_forgot"></div>
          
           </div> 
          </div>

         </div> 
        </div>
      </div>
    </div>
  </div>
</div>       


   <!-- Footer -->
   <footer class="futer">
        <div class="container-fluid">
            <div class="col-md-12 col-lg-9 m-auto">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <div class="social-area">
                            <ul class="d-flex align-items-center">
                                <li><img src="<?php echo base_url();?>assets/images/footer-logo.png"></li>
                                <li>|</li>
                                <a href="https://www.facebook.com/aryavaidyavilasini"><li><i class="fa fa-facebook-square" aria-hidden="true"></i></li></a>
                                <a href="https://www.instagram.com/avvvsglobal/?hl=en"><li><i class="fa fa-instagram" aria-hidden="true"></i></li></a>
                                <a href="https://www.twitter.com/avvvsglobal"><li><i class="fa fa-twitter-square" aria-hidden="true"></i></li></a>
                                <a href="https://www.youtube.com/channel/UCVAIUt6i46hT7eY1SZksJWQ"><li><i class="fa fa-youtube-square" aria-hidden="true"></i></li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-7 align-items-center">
                        <div class="link-area">
                            <ul>
                                <li><a title="Contact" class="active-contact" href="<?= CUSTOM_BASE_URL;?>contact">Contact</a></li>
                              <!--  <li><a title="Shop" href="#">Shop</a></li>-->
                               <!-- <li><a title="News & Events"  class="active-news" href="newsandevents.php">News & Events</a></li>-->
                                <li><a title="Gallery" class="active-gallery" href="<?= CUSTOM_BASE_URL;?>gallery">Gallery</a></li>
                                <li><a title="Ayurvaram" class="active-ayurvaram" href="<?= CUSTOM_BASE_URL;?>avvvs-speciality-clinic"><img src="<?php echo base_url();?>assets/home/images/avvvs-text-black.png" style="width: 46px;vertical-align: inherit;" alt="avvvs"> Specialty Clinic</a></li>
                                <!--<li><a title="Products" class="active-product" href="<?= CUSTOM_BASE_URL;?>product-list">Stores</a></li>-->
                                <li><a title="About" class="active-about" href="<?= CUSTOM_BASE_URL;?>about">About</a></li>
                                <li><a title="Home" class="active-home" href="<?= CUSTOM_BASE_URL;?>home">Home</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-line"></div>
            <p>© <?php echo date('Y'); ?> Aryavaidyavilasini. All Rights Reserved | Design & Technology <a href="https://www.onlister.org/" target="_blank">Onlister</a></p>
        </div>
    </footer>
     <!-- Footer -->
     
     
        
  

    <link href="<?php echo base_url();?>assets/css/jquery-ui.css" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
     
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.slim.min.js"></script>

 <script src="<?php echo base_url();?>assets/js/custom.js"></script>
 
    <script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
         
    <script src="<?php echo base_url();?>assets/js/jquery-1.12.4.js"></script>
        
    <script type="text/javascript" src="https://myinstituter.in/av/web/assets/js/bootstrap.min.js"></script> 
    
  <script src="<?php echo base_url();?>assets/js/script.js"></script>
  <script src="<?php echo base_url();?>assets/js/holder.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/drop.js"></script>

  <!-- Mobile menu -->
  <script src="<?php echo base_url();?>assets/js/mobile-menu.js"></script>
  <!-- Mobile menu -->
  <script src="<?php echo base_url();?>assets/js/dropdown.js"></script>
     
    


<script>
$(function() {
    var header = $(".clearHeader");
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 80) {
            header.removeClass('clearHeader').addClass("darkHeader");
        } else {
            header.removeClass("darkHeader").addClass('clearHeader');
        }
    });
});  
</script>





 <script>

  $(function () {

  $('#password-login').on('click', function (e) {

    var email = $('#email').val();

    var password = $('#password').val();

   if (email == ''  )
   {
      document.getElementById("email_Err").innerHTML = "The field is required"; 
      status=false; 
   }
   else {
      document.getElementById('email_Err').innerHTML = "";
   }

  if (password == ''  )
   {
      document.getElementById("password_Err").innerHTML = "The field is required"; 
      status=false; 
   }
   else {
      document.getElementById('password_Err').innerHTML = "";
   }
    e.preventDefault();

    $.ajax({
      type: 'post',
      url: '<?= CUSTOM_BASE_URL;?>User_login/login_password',
      data: 'email=' + email + '&password=' + password,

      success: function (data) {

        if(data==1) {
            
          location.reload();                 
        }

        else if(data==2) {

          document.getElementById("not_exist").innerHTML = 'No user Exist..please Sign Up';
   
        }

         else if(data==3) {

          document.getElementById("pass_msg").innerHTML = 'user name or password are incorrect';

        }

        else{

          document.getElementById("pass_msg").innerHTML = '';

        }          
      }

    });

  });

 });

 </script>

 <script>

 $(function () {

  $('#new-password-login').on('click', function (ee) {

    var email = $('#new_email').val();

    var pass = $('#new_password').val();


   if (email == ''  )
   {
      document.getElementById("newemailErr").innerHTML = "The field is required"; 
      status=false; 
   }
   else {
      document.getElementById('newemailErr').innerHTML = "";
   }

  if (pass == ''  )
   {
      document.getElementById("newpasswordErr").innerHTML = "The field is required"; 
      status=false; 
   }
   else {
      document.getElementById('newpasswordErr').innerHTML = "";
   }
    ee.preventDefault();

    $.ajax({
      type: 'post',
      url: '<?= CUSTOM_BASE_URL;?>User/index',
      data: 'email=' + email + '&pass=' + pass,

      success: function (data) {

        if(data==1) {

          document.getElementById("sign_msg").innerHTML = 'User Sucessfully Sign In';              
        }

        if(data==2) {

          document.getElementById("sign_msg_wrong").innerHTML = 'User Already Registered';              
        }

        else{

          document.getElementById("sign_msg_wrong").innerHTML = '';

        }          
      }

    });

  });

});


   $('#forgot_conitune').on('click', function (ee) {

    var email = $('#forgot_email').val();


   if (email == ''  )
   {
      document.getElementById("forgotemailErr").innerHTML = "The field is required"; 
      status=false; 
   }
   else {
      document.getElementById('forgotemailErr').innerHTML = "";
   }

    ee.preventDefault();
    if(email !=''){
    $('#loadingimg_forgot').show();
    document.getElementById('loadingimg_forgot').innerHTML = '<img src="<?php echo base_url();?>assets/images/loadingpro.gif"/>';
    }

    $.ajax({
      type: 'post',
      url: '<?= CUSTOM_BASE_URL;?>User_login/forgot_verify',
      data: 'email=' + email,

      success: function (data) {

        if(data==1) {
          $('#loadingimg_forgot').fadeOut();
          $('#forgot_otp').show();
          $('#forgot_verify').show();
          $('#forgot_conitune').hide();
            
          document.getElementById("otp_msg_forgot").innerHTML = 'Check Your Email and Verify OTP';   
          
          setTimeout(function() {
             $('#otp_msg_forgot').fadeOut();
            }, 8000 );
        }

        if(data==2) {
          $('#loadingimg_forgot').fadeOut();
          document.getElementById("sign_msg_wrong_forgot").innerHTML = 'User Not Exist';        
          
          setTimeout(function() {
             $('#sign_msg_wrong_forgot').fadeOut();
            }, 8000 );
        }

        else{
          $('#loadingimg_forgot').fadeOut();
          document.getElementById("sign_msg_wrong_forgot").innerHTML = '';

        }          
      }

    });

  });


  $('#forgot_verify').on('click', function (ee) {

    var email = $('#forgot_email').val();
    var otp = $('#forgot_otp').val();


   if (email == ''  )
   {
      document.getElementById("forgotemailErr").innerHTML = "The field is required"; 
      status=false; 
   }
   else {
      document.getElementById('forgotemailErr').innerHTML = "";
   }

    ee.preventDefault();

    $.ajax({
      type: 'post',
      url: '<?= CUSTOM_BASE_URL;?>User_login/check_otp_email',
      data: 'email=' + email + '&otp=' + otp,

      success: function (data) {

        if(data==1) {
        
          $('#otp').hide();
          $('#new-verify').hide();
          $('#conitune').hide();
          $('#forgot_verify').hide();
          $('#forgot_otp').hide();
          $('#forgot-password-login').show(); 
          $('#forgot_password').show();

            
          document.getElementById("otp_msg_forgot").innerHTML = 'OTP Verified';
          
          setTimeout(function() {
             $('#otp_msg_forgot').fadeOut();
            }, 8000 );
          
        }

        else if(data==0) {

          document.getElementById("sign_msg_wrong_forgot").innerHTML = 'Incorrect OTP';
          
          setTimeout(function() {
             $('#sign_msg_wrong_forgot').fadeOut();
            }, 8000 );
        }
        
        else if(data==5) {

          document.getElementById("sign_msg_wrong_forgot").innerHTML = 'Time Expired... Please Try Again';
          
          setTimeout(function() {
             $('#sign_msg_wrong_forgot').fadeOut();
            }, 8000 );
        }

        else{

          document.getElementById("sign_msg_wrong_forgot").innerHTML = '';

        }          
      }

    });

  });

  $('#forgot-password-login').on('click', function (ee) {

    var email = $('#forgot_email').val();

    var pass = $('#forgot_password').val();


   if (email == ''  )
   {
      document.getElementById("forgotemailErr").innerHTML = "The field is required"; 
      status=false; 
   }
   else {
      document.getElementById('forgotemailErr').innerHTML = "";
   }

  if (pass == ''  )
   {
      document.getElementById("forgotpasswordErr").innerHTML = "The field is required"; 
      status=false; 
   }
   else {
      document.getElementById('forgotpasswordErr').innerHTML = "";
   }
    ee.preventDefault();

    $.ajax({
      type: 'post',
      url: '<?= CUSTOM_BASE_URL;?>User_login/updatePassword',
      data: 'email=' + email + '&pass=' + pass,

      success: function (data) {

        if(data==1) {

          document.getElementById("sign_msg_forgot").innerHTML = 'Password Sucessfully Updated...Please Sign In'; 
          
          
          
          setTimeout(function() {
             $('#sign_msg_forgot').fadeOut();
            }, 1000 );

          setTimeout(function() {
             $('#forgot').modal('hide');
            }, 1000 );

         $('#otp').hide();
         $('#new-verify').hide();

        
         $('#forgot_otp').hide();
         $('#forgot_verify').hide();
         $('#forgot_password').hide();
         $('#forgot-password-login').hide(); 
         $('#forgot_conitune').show();
         $('#forgot').find("input").val("");

          setTimeout(function() {
              $('#my-account').modal();
          }, 1000);

          // $("#my-account").modal('show');

        }

        else{

          document.getElementById("sign_msg_wron_forgot").innerHTML = '';

        }          
      }

    });

  });




 </script>



    <script>
    $(document).ready(function(){
      $("#hide").click(function(){
        $("p").hide();
      });
      $("#show").click(function(){
        $("p").show();
      });

     $('#loadingimg_forgot').hide();
     $('#otp').hide();
     $('#new-verify').hide();

    
     $('#forgot_otp').hide();
     $('#forgot_verify').hide();
     $('#forgot_password').hide();
     $('#forgot-password-login').hide(); 

    });
    </script> 
    

    <script src="<?php echo base_url();?>assets/js/jquery-1.12.4.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script> 


    
  </body>
</html>


 