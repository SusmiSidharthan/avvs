<div id="menuheader" class="mobile-nav">

    <div class="b-nav">
    <?php $session_data=$this->session->userdata('userDetails');?>
      <div>
        <nav class="menu">

          <ul class="sign-fj85 font-crimsonpro">
            <?php if(empty($session_data->id)) { ?>
            <li><a class="font-size-18 font-weight-500 text-decoration-none" href="<?= CUSTOM_BASE_URL;?>login">Sign in</a></li>
            <li><a class="font-size-18 font-weight-500 text-decoration-none" href="<?= CUSTOM_BASE_URL;?>sign-up">Register</a></li>
            <?php } else{ ?> 
            <li><a class="font-size-18 font-weight-500 text-decoration-none" href="<?= CUSTOM_BASE_URL;?>my-profile">My Profile</a></li>  
            <?php } ?> 
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
            <li><a href="<?= CUSTOM_BASE_URL;?>avvvs-speciality-clinic" class="menu__item font-size-22"><img src="<?php echo base_url();?>assets/home/images/avvvs-text-black.png" style="width:54px;" alt="avvvs"> Specialty Clinic</a></li>
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


  <header class="hmsli13">
    <div class="navbar navbar-dark shadow-sm" id="fixedheader">
      <div class="container-fluid">
        <a href="<?= CUSTOM_BASE_URL;?>home" class="navbar-brand d-flex align-items-center">
          <img src="<?php echo base_url();?>assets/home/images/logo.svg" alt="avvvs">
        </a>
        <div class="hd-rt15">
          <div class="hd-rt16">
            <div class="hd-rt17">
              <a class="hd-rt18 font-size-13 color-white font-weight-600" href="<?= CUSTOM_BASE_URL;?>avvvs-speciality-clinic">
              <span class="hd-rt18-black"><img src="<?php echo base_url();?>assets/home/images/avvvs-text-black.png" alt="avvvs"></span>
              <span class="hd-rt18-white"><img src="<?php echo base_url();?>assets/home/images/avvvs-text-white.png" alt="avvvs"></span>
              SPECIALTY CLINIC</a>
              <a class="hd-rt19 font-size-13 color-white font-weight-600" href="<?= CUSTOM_BASE_URL;?>consulting">BOOK YOUR APPOINMENT</a>
            </div>
          </div>
          <div class="online-std23">
          <div class="online-std24">
            <a href="<?= CUSTOM_BASE_URL;?>product-list" class="online-std25">
             <span class="online-std26">
              <img src="<?php echo base_url();?>assets/home/images/online-store.svg">
             </span>
               <div class="online-std27 color-white font-size-13 font-weight-500">ONLINE STORE</div>
          </a>
          </div>
          </div>
          <div class="seah27">
            <div class="seah28 btn-group">
                <a href="#" class="seah29 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <img class="seah30" src="<?php echo base_url();?>assets/home/images/search-white.svg">
                  <img class="seah31" src="<?php echo base_url();?>assets/home/images/search.svg">
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                   <li>
                       <form autocomplete="off" name="search" enctype="multipart/form-data" method="post" action="<?= CUSTOM_BASE_URL . 'product-list' ?>">
                         <input id="search" class="hd-sea" type="text" name="search" placeholder="Search for Products...">
                         <button class="hd-sub" type="submit">
                             <img class="seah31" src="<?php echo base_url();?>assets/home/images/search.svg">
                         </button> 
                       </form> 
                       <div id="key_display"></div>
                   </li>
                </ul>
            </div>
            
            <?php if($search != ''){ ?>
            <input id="search_value" value="<?php echo $search; ?>"  type="hidden" name="search_value">  
            <?php }else{ ?>
            <input id="search_value" value=""  type="hidden" name="search_value">  
            <?php } ?>
            
          </div>
          
          

          
 <!--       <div class="hda-search">
            
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
        <?php }else{ ?>
        <input id="search_value" value=""  type="hidden" name="search_value">  
        <?php } ?>
            
          
        </div>-->          
          
          <div class="mn-tp31">
            <div class="mn-tp32">

            </div>
          </div>
        </div>
      </div>
  </header>