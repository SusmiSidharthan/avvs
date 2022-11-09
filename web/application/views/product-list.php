

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
        <meta name="author" content="<?=$meta->	seo_name?>">
        
    <?php } ?>

   
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/fav.png">
    
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/avvvs.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/price-range.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/input-number.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/add-to-cart.css">
    
      <!-- Mobile menu -->
  <link href="<?php echo base_url();?>assets/css/mobile-menu.css" rel="stylesheet">
  <!-- Mobile menu -->
  <link href="<?php echo base_url();?>assets/css/dropdown.css" rel="stylesheet">
    
  </head>
  <body id="home-menu">
  <?php $session_data=$this->session->userdata('userDetails');?>      
  <div id="menuheader" class="mobile-nav">

    <div class="b-nav">

      <div>
        <nav class="menu">

          <ul class="sign-fj85 font-crimsonpro">
            <?php if(empty($session_data->id)) { ?>
            <li><a class="font-size-18 font-weight-500 text-decoration-none" href="<?= CUSTOM_BASE_URL;?>login">Sign in</a></li>
            <li><a class="font-size-18 font-weight-500 text-decoration-none" href="<?= CUSTOM_BASE_URL;?>sign-up">Register</a></li>
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

          

           <?php if(empty($session_data->id)) { ?>

         <!-- <button type="button" class="hda-ma" data-toggle="modal" data-target="#my-account"><i class="glyph-icon"> -->
         
          <a class="hda-ma" href="<?= CUSTOM_BASE_URL;?>login"><img src="<?php echo base_url();?>assets/images/login.svg" alt=""></a>
               
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
        
        
        <a class="hda-save" href="<?= CUSTOM_BASE_URL;?>wish-list">
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

 
  <main role="main" class="filter-main">
    <div class="container-fluid">    
      <div class="row">
       <!-- Left side -->
        <div class="col-lg-3 col-xl-3">

<div class="flt-left-main clearfix">
  <a href="#flt-toggle-menu" id="flt-toggle"><span></span><h1>Category Filters</h1></a>
    <div id="flt-toggle-menu">
   
          <div class="flt-out-m">  
          
           <h1 class="flt-cate-txt had-non-s"><b>REFINE SEARCH</b></h1>
              
      <ul id="accordion" class="flt-accordion">
		<li class="default open">
            <div class="link"><a>Category</a><i class="fa"></i></div>
			<ul class="submenu">

        <?php foreach ($main_cat as $cat) {

        $maincat = base64_encode($cat['cat_id'] .SALT_KEY.CKRAT_KEY); ?>

        <li><a href="<?= CUSTOM_BASE_URL. 'product-list/'.$maincat; ?>"><b><?= $cat['cat_name'];?></b></a></li>

			     <?php foreach ($cat['category'] as $key => $categorys) {  
				 
				     $catmackratt = base64_encode($categorys->cat_id .SALT_KEY.CKRAT_KEY);
        				 ?>
        				<li><a href="<?= CUSTOM_BASE_URL. 'product-list/'.$catmackratt; ?>">--<?= $categorys->cat_name;?></a></li>
                <?php } ?>
          <?php  }  ?>      
			</ul>
		</li>

  <li class="default open">
   	<div class="link"><a>Price</a><i class="glyph-icon"></i></div>   
    <ul class="submenu price-max14">
     <input type="hidden" id="hidden_minimum_price" value="<?= $min_price; ?>" />
     <input type="hidden" id="hidden_maximum_price" value="<?= $max_price; ?>" />
     <p id="price_show"><span class="price-s12">₹ <?= $min_price; ?> </span> - <span class="price-s13">₹ <?= $max_price; ?></span></p>
     <div id="price_range"></div>
    </ul>
  </li>
  
  
  	<li class="default open">
    	<div class="list-group">
        <?php foreach($feature as $features) { ?>
        <div class="link"><a><?= $features['name']; ?></a><i class="fa"></i></div>
			<ul class="submenu">
              <div class="">
                  <?php foreach($features['feature_var'] as $ftr_rows) { ?>
                  <div class="flt-check-out">
                      <label class="flt-con"> 
                        <input type="checkbox" class="common_selector feature" value="<?php echo $ftr_rows['f_var_id']; ?>" > 
                        <span class="checkmark"></span>
                      </label>
                      <span><?php echo $ftr_rows['variants_name']; ?></span>
                  </div>
                  <?php } ?>
                </div>
			</ul>
			</div>
			 <?php  } ?> 
		</li>
  
  
	<li class="default open">
        <?php foreach($option as $options) { ?>
        <div class="link"><a><?= $options['name']; ?></a><i class="fa"></i></div>
			<ul class="submenu">
              <div class="">
                  <?php foreach($options['option_var'] as $option_rows) { ?>
                  <div class="flt-check-out">
                      <label class="flt-con"> 
                        <input type="checkbox" class="common_selector option" value="<?php echo $option_rows['opt_var_id']; ?>" >
                        <span class="checkmark"></span>
                      </label>
                      <span><?php echo $option_rows['type_name']; ?></span>
                  </div>
                  <?php } ?>
                </div>
			</ul>
			 <?php  } ?> 
		</li>

	<li class="default open">
	    <div class="link"><a>Availability</a><i class="fa"></i></div>
			<ul class="submenu">
              <div class="">
                  
                  <div class="flt-check-out">
                      <label class="flt-con"> 
                        <input type="checkbox" class="common_selector availability" value="1" >
                        <span class="checkmark"></span>
                      </label>
                      <span>Include Out of Stock</span>
                  </div>
                </div>
			</ul>
		</li> 
		
	</ul>  
 </div>       
</div>
  </div>
    </div>
            
        <div class="col-lg-9 col-xl-9">
          <div class="flt-right-main clearfix">
           
           <div class="pro-vh12-1">  
               <div class="pro-vh12-2">   
                <h1 class="fil-head-txt"><?php if(isset($cat_name)) { echo $cat_name;  } ?></h1>
                <h3 class="pro-vh12-3" id="product_count"></h3>
               </div>
               
               <div class="pro-vh12-4">
                   <div class="pro-vh12-5">
                    <label class="pro-vh12-6" for="sorter">Sort By</label>
                    <select  data-role="sorter" class="pro-vh12-7" id="sort">
                        <option value="1" selected="selected">Popular</option>
                        <option value="4">Newest First</option>
                        <option value="5">Discount</option>
                        <option value="2">Price - Low To High</option>
                        <option value="3">Price - High To Low</option>
                    </select>
                   </div>
               </div>
           </div> 
           
            <!-- Nav tabs -->
          
            <div class="product-nav clearfix"> 
            
                <div class="filter-ty12">
<!--                    <div class="prd-size-radio">
                       <input type="radio" class="common_selector pop" id="toggle-11" value="1" name="group1" checked="checked" >  
                       <label for="toggle-11">Popularity</label> 
                    </div>-->
                    <!--<div class="prd-size-radio">
                       <input type="radio" class="common_selector high" id="toggle-12" value="2" name="group1" >   
                       <label for="toggle-12">Low to High</label> 
                    </div>-->
                    <!--<div class="prd-size-radio">
                       <input type="radio" class="common_selector low" id="toggle-13" value="3" name="group1" >
                       <label for="toggle-13">High to Low</label> 
                    </div>-->
<!--                    <div class="prd-size-radio">
                       <input type="radio" class="common_selector first" id="toggle-14" value="4" name="group1" >
                       <label for="toggle-14">Newest First</label>   
                    </div>-->
                </div> 
<!--            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <input type="radio" class="common_selector pop" value="1" name="group1" checked="checked" >Popularity
              </li>
              <li class="nav-item">
                <input type="radio" class="common_selector high" value="2" name="group1" >Low to High
              </li>
              <li class="nav-item">
                  <input type="radio" class="common_selector low" value="3" name="group1" >High to Low
              </li>
              <li class="nav-item">
                 <input type="radio" class="common_selector first" value="4" name="group1" >Newest First
              </li>
            </ul>-->
            <!-- /Nav tabs -->

        <!-- Tab panes -->
       
             <!--- box 1 --->
             
          
                <div class="filter_data">

                </div>
     
            
             
             <!--- /box 1 --->   
            
                  
      </div>  
    <!-- /Tab panes -->
  
     <div class="col-md-12">
      <div align="center" id="pagination_link" class="pro-pge16"></div>
     </div>
  
    
    
    </div> 
          
 </div>  
 
        </div>
       <!-- /Left side -->    
      </div>

 </main>    

<style>
#loading
{
 text-align:center; 
 background: url('<?php echo base_url(); ?>assets/loader.gif') no-repeat center;
 background-size:70px;
 height: 150px;
 padding-top:250px;
}
</style>







 <!-- My account model-->
<div class="modal fade bd-example-modal-lg" id="my-account" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content my-act-modal">
    <button type="button" class="close my-cart-close" data-dismiss="modal" aria-label="Close" >
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
           
           <h4>E-mail and Password to Log In</h4>
          </div>   
          <div class="my-act-rgt-a-l">
           <div class="my-act-qr">
              <input  name="email" id="email" type="email" class="form-control log-fi12" placeholder="E-mail ID"/>
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
    <button type="button" class="close my-cart-close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
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
            <p>© <?php echo date('Y');?> Aryavaidyavilasini. All Rights Reserved | Design & Technology <a target="_blank" href="http://www.onlister.org/">Onlister</a></p>
        </div>
    </footer>
    

    
    <script src="<?php echo base_url();?>assets/js/jquery-1.12.4.js"></script> 
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.slim.min.js"></script>
  

        <script src="<?php echo base_url();?>assets/js/custom.js"></script>
 
    
 <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>


    
        <script src="<?php echo base_url();?>assets/js/main.js"></script>
    
        <script src="<?php echo base_url();?>assets/js/script.js"></script>
    
        <script src="<?php echo base_url();?>assets/js/holder.min.js"></script>
    
        <script src="<?php echo base_url();?>assets/js/drop.js"></script>
        
        <script src="<?php echo base_url();?>assets/js/price-range.js"></script>
        <script src="<?php echo base_url();?>assets/js/input-number.js"></script>
    
    <script src="<?php echo base_url();?>assets/js/add-to-cart.js"></script>
    
      <!-- Mobile menu -->
  <script src="<?php echo base_url();?>assets/js/mobile-menu.js"></script>
  <!-- Mobile menu -->
  <script src="<?php echo base_url();?>assets/js/dropdown.js"></script>


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
 
 

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
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
    



    
<script>
$(document).ready(function(){

    filter_data(1);

    function filter_data(page)
    {
        $('html, body').animate({ scrollTop: 0 }, 0);
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var feature = get_filter('feature');
        var option = get_filter('option');
        var availability = get_filter('availability');
        var pop = get_filter('pop');
        var high = get_filter('high');
        var low = get_filter('low');
        var first = get_filter('first');
        var cat_id = <?php echo $cat_id ?>;
        var search = $('#search_value').val();
        
        var sort = $('#sort').val();
        
        if(sort == 1){
           
           var pop = 1;
            
        }
        else if(sort == 2){
            
            var low = 2;
        }
        else if(sort == 3){
            
            var high = 3;
        }
        else if(sort == 4){
            
            var first = 4;
        }
        else if(sort == 5){
            
            var discount = 5;
        }


        $.ajax({
            url: '<?= CUSTOM_BASE_URL;?>Product_list/fetch_data/'+page,
            method:"POST",
            dataType:"JSON",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, feature:feature, option:option,cat_id:cat_id,availability:availability, pop:pop, high:high, low:low, first:first,search:search,discount:discount},
            success:function(data)
            {

                $('.filter_data').html(data.product_list);
                $('#pagination_link').html(data.pagination_link);
                $('#product_count').html(data.product_count);
                
            }
        })
    }

    $("#sort").on("change",function(){   
    
       var page = $(this).data('ci-pagination-page');
       filter_data(page);        
        
    });


    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $(document).on('click', '.pagination li a', function(event){
        event.preventDefault();
        var page = $(this).data('ci-pagination-page');
        filter_data(page);
    });

    $('.common_selector').click(function(){
        filter_data(1);
    });
//price_range
    $('#price_range').slider({
        range:true,
        min:<?= $min_price; ?>,
        max:<?= $max_price; ?>,
        values:[<?= $min_price; ?>,<?= $max_price; ?>],
        step:1,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data(1);
        }

    });

});
</script>   


  
    
     <script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>

    <link href="<?php echo base_url();?>assets/css/jquery-ui.css" rel="stylesheet">   



<script>
 function addFunction(productId)
    {   
  
         var p_id = '#addd'+productId;
         var value_id = '#count'+productId;

         $(p_id).prev().val(+$(value_id).prev().val() + 1);
         
         var p_id_val = parseInt($(value_id).val());
         var p_id_val = p_id_val + 1;

         $(value_id).val(p_id_val);
         
         

    }
    
    function addcart(productId)
    {   
  
         var value_id = '#count'+productId;
         
         var p_id_val = parseInt($(value_id).val());
          window.location = '<?= CUSTOM_BASE_URL . "add-to-cart/" ?>'+productId+'/'+p_id_val;
         

    }

 function subFunction(productId)
    {   
  
         var p_id = '#subb'+productId;
         var value_id = '#count'+productId;

        if ($(p_id).next().val() > 1) { 

         $(p_id).next().val(+$(p_id).next().val() - 1);
         
         var p_id_val = parseInt($(value_id).val());


         $(value_id).val(p_id_val);
         
        }
         
         

    }

$('.addd').click(function () {
    alert("aa");
  $(this).prev().val(+$(this).prev().val() + 1);
});
$('.subb').click(function () {
  if ($(this).next().val() >= 1) $(this).next().val(+$(this).next().val() - 1);
});    
    
</script>


    
    



  
    

  </body>
</html>


 