<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo $meta->meta_description; ?>">
  <meta name="author" content="<?php echo $meta->seo_name; ?>">
  <meta name="keywords" content="<?php echo $meta->meta_key; ?>">
  <title><?php echo $meta->meta_title; ?></title>

  <link rel="canonical" href="<?php echo $meta->canonical_link; ?>">

  <link rel="shortcut icon" href="<?php echo base_url();?>assets/home/images/fav.png">

  <link href="<?php echo base_url();?>assets/home/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/home/css/style.css" rel="stylesheet">
  <!-- Carousel Ayurvaram -->
  <link href="<?php echo base_url();?>assets/home/css/carousel-ayurvaram.css" rel="stylesheet">
  <!-- About style -->
  <link href="<?php echo base_url();?>assets/home/css/ayurvaram.css" rel="stylesheet">
  <!-- Mobile menu -->
  <link href="<?php echo base_url();?>assets/home/css/mobile-menu.css" rel="stylesheet">
  <!-- Mobile menu -->
  <link href="<?php echo base_url();?>assets/home/css/dropdown.css" rel="stylesheet">

</head>

<body>

  <div id="menuheader" class="mobile-nav ayur-secgf12">

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

  <header class="hmsli13 ayur-secgf13">
    <div class="navbar navbar-dark shadow-sm" id="fixedheader">
      <div class="container-fluid">
        <a href="<?= CUSTOM_BASE_URL;?>home" class="ayur-logo navbar-brand d-flex align-items-center">
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
            <?php  } else{ ?>
            <input id="search_value" value=""  type="hidden" name="search_value">  
            <?php  }  ?>
            
          </div>
          <div class="mn-tp31">
            <div class="mn-tp32">

            </div>
          </div>
        </div>
      </div>
  </header>


<!-- <section class="abt-ban85" style="background-image: url(<?php echo base_url();?>assets/home/images/ayurvaram/ayurvaram-ban.jpg);">
  <div class="abt-ban86">
    <h1 class="abt-ban87 font-crimsonpro font-size-42 color-white text-center line-height-52">Ayurvaram Ayurveda<br>
      Specialty Clinics</h1>
  </div>
</section> -->

<section class="ayur-ban85" >
<div class="ayurvaram-banner owl-carousel owl-theme">

<?php foreach($banner as $val){ ?>

  <div class="item">
    <div class="ayur-sec15-1">
      <a href="#" class="">
        <img src="<?= FILES_BASE_URL;?>uploads/cart_banner/<?php echo $val['image']; ?>" alt="AVVVS">
      </a>
    </div>
  </div>

<?php  }  ?>

</div>

</section>

  <main class="clearfix">


  <section class="ayur-sec112 padding-top-70 padding-left-40 padding-right-40">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-xl-8 ayur-secdk121">
              <div class="ayur-sec112-1">
                <h2 class="ayur-sec112-2 font-crimsonpro font-size-32 color-black line-height-35 margin-bottom-24">
                  Women Health Clinic
                </h2>
                <p class="ayur-sec112-3 font-size-16 color-black2 line-height-26">
                AVVVS Specialty Clinic is a blessing to fresh graduates aspiring for a 
                successful career. Young lady doctors are given special privileges as part 
                of the AVVVS policy of women empowerment. AVVVS Women Health Clinic Specialty 
                Clinic delivers Ayurveda care and method of living and has helped women successfully 
                manage health issues.
              </p>


            </div>
            </div>

            <div class="col-md-4 col-lg-4 col-xl-4">
              <div class="ayur-sec112-4" style="background-image:url(<?php echo base_url();?>assets/home/images/ayurvaram/women-health-clinic.jpg);">
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>


    <section class="ayur-sec112 padding-top-70 padding-left-40 padding-right-40">
      <div class="container-fluid">
        <div class="row">
          
            <div class="col-md-4 col-lg-4 col-xl-4">
              <div class="ayur-sec112-4" style="background-image:url(<?php echo base_url();?>assets/home/images/ayurvaram/skin-and-hair-care.jpg);">
              </div>
            </div>
            <div class="col-md-8 col-lg-8 col-xl-8 ayur-secdk121">
              <div class="ayur-sec112-1">
                <h2 class="ayur-sec112-2 font-crimsonpro font-size-32 color-black line-height-35 margin-bottom-24">
                  Skin and Hair Care Clinic
                </h2>
                <p class="ayur-sec112-3 font-size-16 color-black2 line-height-26">
                Ayurveda has given importance to the inner beauty that reflects out as a glow. 
                At AVVVS Ayurveda face and skin therapies and treatment for chronic skin conditions are 
                provided using herbal skin care products. AVVVS always ensures quality in the ingredients, 
                processing, and packaging of skin and hair care products. Skin and hair care is individualistic 
                and customized at AVVVS.

              </p>

            </div>
            </div>

          </div>

        </div>
      </div>
    </section>


    <section class="ayur-sec112 padding-top-70 padding-left-40 padding-right-40">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-xl-8 ayur-secdk121">
              <div class="ayur-sec112-1">
                <h2 class="ayur-sec112-2 font-crimsonpro font-size-32 color-black line-height-35 margin-bottom-24">
                  Head Ache Clinic
                </h2>
                <p class="ayur-sec112-3 font-size-16 color-black2 line-height-26">
                Headache is one of the most common health issues faced in day-to-day life by almost 
                everyone many times during their lives. Pain and tension on the head and face are the 
                presenting symptoms.  Cluster headaches, Tension headaches, Sinusitis, and Migraine are 
                common types of headaches. Most headaches are not dangerous and pass off. Persisting 
                headaches may be a sign of a serious underlying condition and has to be medically evaluated 
                and managed.

              </p>


            </div>
            </div>

            <div class="col-md-4 col-lg-4 col-xl-4">
              <div class="ayur-sec112-4" style="background-image:url(<?php echo base_url();?>assets/home/images/ayurvaram/head-ache.jpg);">
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>


    <section class="ayur-sec112 padding-top-70 padding-left-40 padding-right-40">
      <div class="container-fluid">
        <div class="row">
          
            <div class="col-md-4 col-lg-4 col-xl-4">
              <div class="ayur-sec112-4" style="background-image:url(<?php echo base_url();?>assets/home/images/ayurvaram/lifestyle-diseases.jpg);">
              </div>
            </div>
            <div class="col-md-8 col-lg-8 col-xl-8 ayur-secdk121">
              <div class="ayur-sec112-1">
                <h2 class="ayur-sec112-2 font-crimsonpro font-size-32 color-black line-height-35 margin-bottom-24">
                  Lifestyle Diseases Clinic
                </h2>
                <p class="ayur-sec112-3 font-size-16 color-black2 line-height-26">
                Life style diseases are defined as the health problems that arise from unhealthy changes 
                in lifestyle, habitat, and food. Increasing sedentary lifestyles, untimely job requirements, 
                unhealthy food habits, addictions, stress, and unnecessary medication are the main culprits 
                against a healthy life. AVVVS Lifestyle Clinic primarily aims to redefine lifestyles 
                individualistically and prescribe a healthy lifestyle formula suiting the person’s 
                life and work.
              </p>


            </div>
            </div>

          </div>

        </div>
      </div>
    </section>


    <section class="ayur-sec112 padding-top-70 padding-left-40 padding-right-40">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-xl-8 ayur-secdk121">
              <div class="ayur-sec112-1">
                <h2 class="ayur-sec112-2 font-crimsonpro font-size-32 color-black line-height-35 margin-bottom-24">
                   Pregnancy and Post Natal Care Clinic
                </h2>
                <p class="ayur-sec112-3 font-size-16 color-black2 line-height-26">
                Motherhood is the gift of nature for a woman. Mother’s health is very important and vital 
                for the health of the child and family. Ayurveda places a great emphasis on the value of 
                caring for the mother prior to, during and following pregnancy. Pregnancy month-wise care 
                and post-natal care include diet, medicines, therapies, education, and mental support for 
                the mother and family.

              </p>


            </div>
            </div>

            <div class="col-md-4 col-lg-4 col-xl-4">
              <div class="ayur-sec112-4" style="background-image:url(<?php echo base_url();?>assets/home/images/ayurvaram/pregnancy-and-post-natal-care.jpg);">
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>


    <section class="ayurad-ser12 margin-top-70">
      <?php foreach($ad_banner as $ad){ ?>
      <img src="<?= FILES_BASE_URL;?>uploads/cart_banner/<?php echo $ad['image']; ?>" alt="AVVVS">
      <?php  }  ?>
    </section>


    <section class="kesha-df113 padding-top-100 padding-left-40 padding-right-40">
      <div class="container-fluid">
        <div class="row">

        <div class="col-md-5 col-lg-5 col-xl-5">
            <div class="kesha-df113-4">

            <div class="herbal-ayurveda owl-carousel owl-theme">

              <div class="item">
                <div class="ayur-sec15-1">
                  <a href="#" class="">
                    <img src="<?php echo base_url();?>assets/home/images/ayurvaram/herbal-ayurveda-slide1.jpg" alt="AVVVS">
                  </a>
                </div>
              </div>

            </div>
            </div> 
          </div>

          <div class="col-md-7 col-lg-7 col-xl-7">
            <div class="kesha-df113-1">
              <h2 class="kesha-df113-2 font-crimsonpro font-size-42 color-black line-height-52 margin-bottom-24">
                Herbal Ayurveda Therapies
              </h2>
              <div class="kesha-df113-3 font-size-16 color-gray-p line-height-26">
              Arya Vaidya Vilasini Vaidya Sala is a well-known entity in Kozhikode, the hub of Malabar 
              both as a multifaceted Ayurveda institution manufacturing, supplying, exporting, and retailing 
              quality Ayurveda classical and patent medicines. The clinical section of AVVVS grew and branched 
              into AVVVS Specialty Clinic providing specialized Ayurveda care under expert supervision. 
              Adapting to the evolving technology without compromising on the core tradition is the 
              uniqueness of AVVVS a value that has been sustained and nurtured it through these 100 years.
Arya Vaidya Vilasini Vaidya Sala owns and operates a chain of outpatient clinics in various 
Ayurveda specialties and treatments under the brand name AVVVS Specialty Clinic. The specialties 
offered are Head Ache Clinic, ENT Clinic, Eye Care Clinic, Health and Beauty Clinic, Women Health Clinic, 
Pregnancy and Post Natal Care Clinic, Child Health Clinic, and Lifestyle Clinic. The clinics offer 
specialty outpatient wellness and curative health care services. A few more specialties are in the 
pipeline to be launched shortly. Premium category AVVVS Specialty Clinic Ayurveda Centres are operated 
in association with various stakeholders of the premium wellness, leisure and hospitality sectors. More 
associations of the kind are planned for the coming years.
              </div>
                <div>
                </div>
            </div>
          </div>

        </div>


      </div>
    </section>


    <section class="kesha-df113 padding-top-100 padding-left-40 padding-right-40">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 col-lg-8 col-xl-7">
            <div class="kesha-df113-1">
              <h2 class="kesha-df113-2 font-crimsonpro font-size-42 color-black line-height-52 margin-bottom-24">
                Vadana Kanthi
              </h2>
              <div class="kesha-df113-3 font-size-16 color-gray-p line-height-26">
              The therapy is for enhancing the beauty of the face and bestowing anti-aging glowing 
              properties to the facial and body skin. The therapy works effectively in preventing pimples, 
              and acne and effectual against clogged pores. Benefits: Face care treatment for glowing, 
              smooth lustrous wrinkle-free skin. The therapy reduces pigmentation, pimples, blackheads, 
              and dark circles.
              </div>
                <div>
                  <div class="kesha-df113-10 font-crimsonpro font-size-30 color-black line-height-52 margin-top-25 margin-bottom-24">Procedure</div>
                  <div class="kesha-df113-6">

                    <div class="kesha-df113-20">

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Cleansing with herbal natural cleansers.</div>
                    </div>

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Bleaching: with herbal Ayurveda powders.
</div>
                    </div>



                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Special Face Pack with customized herbal paste as decided by the cosmetology consultant.
it works effectively in preventing pimples, acne and effectual against the clogged pores.</div>
                    </div>



                    </div>

                    <div class="kesha-df113-20">

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Scrubbing with exfoliating customized powdered Ayurveda herbs.
</div>
                    </div>

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Special Face Care Massage with herbal paste, herbal poultice or fruit pulp depending on the
skin type.</div>
                    </div>


                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Steam with herbal Ayurveda decoction produced steam.</div>
                    </div>


                  </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 col-xl-5">
            <div class="kesha-df113-4 text-end">
              <img src="<?php echo base_url();?>assets/home/images/ayurvaram/ayurvaran-1.jpg" class="img-fluid">
              <h3 class="kesha-df113-5 font-size-24 color-white line-height-26 border-bt-lt-radius-50 text-center" style="background: #005f99;">Facial skin care therapy</h3>
            </div> 
          </div>
        </div>
      </div>
    </section>
    
    

    <section class="kesha-df113 kesha-df113b  padding-top-100 padding-left-40 padding-right-40">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-4 col-lg-4 col-xl-5">
            <div class="kesha-df113-4">
              <img src="<?php echo base_url();?>assets/home/images/ayurvaram/ayurvaran-2.jpg" class="img-fluid">
              <h3 class="kesha-df113-5 font-size-24 color-white line-height-26 border-bt-rt-radius-50 text-center" style="background: #005f99;">
                Hair and head care therapy</h3>
            </div> 
          </div>

          <div class="col-md-8 col-lg-8 col-xl-7">
            <div class="kesha-df113-1">
              <h2 class="kesha-df113-2 font-crimsonpro font-size-42 color-black line-height-52 margin-bottom-24">
                Kesha Kanthi</h2>
              <div class="kesha-df113-3 font-size-16 color-gray-p line-height-26">
              The therapy provides deep nourishment to the hair roots, scalp, hair strands and hair follicles. 
              Benefits: Prevents hair fall, manages dryness and dandruff, delays grey hair, and minimizes split
               ends. Keshakanti is also effective against stress, headache, and sleeplessness. Ensures silky 
               smooth thick healthy hair. Eliminates dandruff, delays premature graying and balding, 
               and reduces hair fall, brittle hair, and thinning of hair.
             </div>
                <div>
                  <div class="kesha-df113-10 font-crimsonpro font-size-30 color-black line-height-52 margin-top-25 margin-bottom-24">
                    Procedure</div>
                  <div class="kesha-df113-6">

                    <div class="kesha-df113-20">

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Head Massage with customized or tailor made herbal Ayurveda oil.
</div>
                    </div>

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Steaming with the steam prepared from Ayurveda herbal decoctions.</div>
                    </div>


                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Hair Pack with application of customized hair care Ayurveda herbal pack or fortified henna pack.</div>
                    </div>

                    </div>

                    <div class="kesha-df113-20">

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Hair Wash and rinse with medicated decoction.
</div>
                    </div>

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Decreases hair dryness and roughness &Strengthens hair roots.</div>
                    </div>

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Reduces hair fall, dandruff & Prevents split ends and greying.
</div>
                    </div>

                    </div>
                  </div>
                </div>
            </div>
          </div>

        </div>
      </div>
    </section> 



    <section class="kesha-df113 padding-top-100  padding-left-40 padding-right-40">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 col-lg-8 col-xl-7">
            <div class="kesha-df113-1">
              <h2 class="kesha-df113-2 font-crimsonpro font-size-42 color-black line-height-52 margin-bottom-24">Mrudu Sparsha</h2>
              <div class="kesha-df113-3 font-size-16 color-gray-p line-height-26">
              Caring for the feet is important as the feet are the part that carries a person and is the 
              terminal of the nervous system. Benefits: Total feet and hands care therapy with special 
              attention to stress and pain-relieving MARMA pressure points. Imparts sound sleep, and 
              relaxes the body and mind. Reduces joint stiffness, exfoliates moisturizes, and makes the 
              skin smooth and shiny. Cures and prevents fungal infections, athlete’s foot, and cracked foot.
             </div>
                <div>
                  <div class="kesha-df113-10 font-crimsonpro font-size-30 color-black line-height-52 margin-top-25 margin-bottom-24">Procedure</div>
                  <div class="kesha-df113-6">

                    <div class="kesha-df113-20">

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Soaking of the feet and hands in luke warm herbal decoctions prepared from select leaves and
flowers.</div>
                    </div>

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Special hands and feet Marma Massage by skilled therapist with customized oil combination or
herbal concoctions and controlled pressure on the MARMA points under the supervision and
guidance of an expert Ayurveda doctor.</div>
                    </div>

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Scrubbing with coarse herbal Ayurveda powders mixed with a liquid herbal.
</div>
                    </div>

                    </div>

                    <div class="kesha-df113-20">

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Nail and Cuticle Care with sterilized hygienic instruments followed by special nail massage.</div>
                    </div>

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Hands and Feet Pack with customized herbal packs.</div>
                    </div>

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Apply gentle pressure to each side of the heel below the ankle bone, then circle the joint with
both hands in a circular motion
After washing, rinse feet in lukewarm water and dry thoroughly, particularly between the toes.</div>
                    </div>

                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 col-xl-5">
            <div class="kesha-df113-4 text-end">
              <img src="<?php echo base_url();?>assets/home/images/ayurvaram/ayurvaran-3.jpg" class="img-fluid">
              <h3 class="kesha-df113-5 font-size-24 color-white line-height-26 border-bt-lt-radius-50 text-center" style="background: #005f99;">Hands and feet care therapy</h3>
            </div> 
          </div>
        </div>
      </div>
    </section>
    
    

    <section class="kesha-df113 kesha-df113b  padding-top-100 padding-bottom-100 padding-left-40 padding-right-40">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-4 col-lg-4 col-xl-5">
            <div class="kesha-df113-4">
              <img src="<?php echo base_url();?>assets/home/images/ayurvaram/ayurvaran-4.jpg" class="img-fluid">
              <h3 class="kesha-df113-5 font-size-24 color-white line-height-26 border-bt-rt-radius-50 text-center" style="background: #005f99;">Whole body massage scrub and polish</h3>
            </div> 
          </div>

          <div class="col-md-8 col-lg-8 col-xl-7">
            <div class="kesha-df113-1">
              <h2 class="kesha-df113-2 font-crimsonpro font-size-42 color-black line-height-52 margin-bottom-24">Sareera Kanthi</h2>
              <div class="kesha-df113-3 font-size-16 color-gray-p line-height-26">
              Ayurveda skin care is individualistic and customized to focus on inner health. Ayurveda 
              skin care treatments are based on skin type and body constitution. Benefits: Tones the body, 
              reduces tiredness and stress, stimulates circulation, and exfoliates the skin. The therapy has 
              health benefits by improving muscle tone, joint flexibility, bone strength, and memory. 
              The therapy is known for its anti-aging benefits It is recommended as a wedding package for 
              the couple.
              </div>
                <div>
                  <div class="kesha-df113-10 font-crimsonpro font-size-30 color-black line-height-52 margin-top-25 margin-bottom-24">Procedure</div>
                  <div class="kesha-df113-6">

                    <div class="kesha-df113-20">

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Abhyanga with an oil massage as per skin and health condition.
</div>
                    </div>

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Scrubbing with herbal powder, paste or poultice application.
</div>
                    </div>

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Polishing with herbal or cereal fine paste application and rubbing.
</div>
                    </div>

                    </div>

                    <div class="kesha-df113-20">

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Herbal Bath with medicated water.</div>
                    </div>

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Ayurvedic anti-aging products have specific ingredients to help nourish the skin and promote
youthfulness.</div>
                    </div>

                    <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Use a warm oil massage daily.
</div>
                    </div>


<!--                     <div class="kesha-df113-7">
                      <div class="kesha-df113-8">
                        <div class="kesha-df113-11 font-size-14 color-white">
                          <svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                            xml:space="preserve">
                            <style type="text/css">
                              .st0 {
                                fill: #FFFFFF;
                              }
                            </style>
                            <g id="Layer_1_1_">
                            </g>
                            <g id="icons">
                              <path id="check_x5F_mark_1_" class="st0"
                                d="M7,16.2l-5.5-5.5c-0.2-0.2-0.2-0.6,0-0.9l0.9-0.9c0.2-0.2,0.6-0.2,0.9,0l4.2,4.2
                            l9.2-9.2c0.2-0.2,0.6-0.2,0.9,0l0.9,0.9c0.2,0.2,0.2,0.6,0,0.9L7.9,16.2C7.6,16.4,7.2,16.4,7,16.2z" />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="kesha-df113-9 font-size-16 color-black line-height-22">Cleanse with a gentle exfoliant.
</div>
                    </div> -->


                  </div>
                  </div>
                </div>
            </div>
          </div>

        </div>
      </div>
    </section> 


<hr class="line-114">








    <footer class="foot-bt67 padding-left-40 padding-right-40">
      <div class="container-fluid">
        <div class="row">

          <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="foot-bt68">
              <div class="foot-bt69 font-crimsonpro font-size-26 color-black2 margin-bottom-35">Where to find us</div>
              <p class="foot-bt70 font-size-14 font-weight-600">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1956.5437734411796!2d75.790411!3d11.25497!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1e94e223625dbd11!2sAyurvaram%20Health%20and%20Skincare%20clinic%20-%20AVVVS!5e0!3m2!1sen!2sin!4v1651040499584!5m2!1sen!2sin"
                  width="80%" height="170" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>

              </p>
            </div>
          </div>

          <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 foods-bt80">
            <div class="foot-bt71">
              <div class="foot-bt72 font-crimsonpro font-size-26 color-black2 margin-bottom-35">Menu</div>
              <ul class="foot-bt73">
                <li class="foot-bt74">
                  <a class="foot-bt75 font-size-13 text-decoration-none" href="<?= CUSTOM_BASE_URL;?>home">HOME</a>
                </li>
                <li class="foot-bt74">
                  <a class="foot-bt75 font-size-13 text-decoration-none" href="<?= CUSTOM_BASE_URL;?>about">ABOUT</a>
                </li>
                <li class="foot-bt74">
                  <a class="foot-bt75 font-size-13 text-decoration-none" href="<?= CUSTOM_BASE_URL;?>avvvs-speciality-clinic"><img src="<?php echo base_url();?>assets/home/images/avvvs-text-black.png" style="width:40px;" alt="avvvs"> SPECIALTY CLINIC</a>
                </li>
                <li class="foot-bt74">
                  <a class="foot-bt75 font-size-13 text-decoration-none" href="<?= CUSTOM_BASE_URL;?>gallery">GALLERY</a>
                </li>
                <!--<li class="foot-bt74">-->
                <!--  <a class="foot-bt75 font-size-13 text-decoration-none" href="blog.html">BLOG</a>-->
                <!--</li>-->
                <li class="foot-bt74">
                  <a class="foot-bt75 font-size-13 text-decoration-none" href="<?= CUSTOM_BASE_URL;?>contact">CONTACT</a>
                </li>
              </ul>
            </div>
          </div>


          <!--<div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2 foods-bt81">-->
          <!--  <div class="foot-bt71">-->
          <!--    <div class="foot-bt72 font-crimsonpro font-size-26 color-black2 margin-bottom-35">Stores</div>-->
          <!--    <ul class="foot-bt73">-->
          <!--      <li class="foot-bt74">-->
          <!--        <a class="foot-bt75 font-size-13 text-decoration-none" href="<?= CUSTOM_BASE_URL;?>product-list/NjAxMDFCYWxnYWxvcmVCYXphcjEwMUNvRGVfT25MaXNUZXJfc0VDckVUX1RlQW1fckV0U0lMbm8=">PROPRIETARY</a>-->
          <!--      </li>-->
          <!--      <li class="foot-bt74">-->
          <!--        <a class="foot-bt75 font-size-13 text-decoration-none" href="<?= CUSTOM_BASE_URL;?>product-list/NjExMDFCYWxnYWxvcmVCYXphcjEwMUNvRGVfT25MaXNUZXJfc0VDckVUX1RlQW1fckV0U0lMbm8=">CLASSICAL</a>-->
          <!--      </li>-->
          <!--      <li class="foot-bt74">-->
                  <!--<a class="foot-bt75 font-size-13 text-decoration-none" href="cosmetic.html">COSMETIC</a>-->
          <!--      </li>-->
          <!--    </ul>-->
          <!--  </div>-->
          <!--</div>-->


          <div class="col-md-4 col-lg-4 col-xl-4 foods-bt82">
            <div class="foot-bt76">
              <div class="foot-bt77 font-crimsonpro font-size-26 color-black2 margin-bottom-35">Get In Touch</div>
              <div class="foot-bt78">
                <a class="foot-bt79 text-decoration-none" href="https://www.facebook.com/aryavaidyavilasini" target="_blank">
                  <img src="<?php echo base_url();?>assets/home/images/facebook.svg">
                </a>
                <a class="foot-bt79 text-decoration-none" href="https://www.instagram.com/avvvsglobal/?hl=en" target="_blank">
                  <img src="<?php echo base_url();?>assets/home/images/instagram.svg">
                </a>
                <a class="foot-bt79 text-decoration-none" href="https://www.twitter.com/avvvsglobal" target="_blank">
                  <img src="<?php echo base_url();?>assets/home/images/twitter.svg">
                </a>
                <a class="foot-bt79 text-decoration-none" href="https://www.youtube.com/channel/UCVAIUt6i46hT7eY1SZksJWQ" target="_blank">
                  <img src="<?php echo base_url();?>assets/home/images/youtube.svg">
                </a>
              </div>
            </div>
          </div>

        </div>


        <div class="row">
          <div class="col-xl-12">
            <div class="bot-ft83">
              <p class="font-size-13">© <script>
                  document.write(new Date().getFullYear())
                </script> Aryavaidyavilasini. All Rights Reserved</p>
              <p class="font-size-13">Design & Technology <a class="bot-ft84 text-decoration-none"
                  href="https://www.onlister.org/" target="_blank">Onlister</a></p>
            </div>
          </div>
        </div>

      </div>
    </footer>


  </main>


  <script src="<?php echo base_url();?>assets/home/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/home/js/jquery.min.js"></script>
  <!-- Carousel-slider -->
  <script src="<?php echo base_url();?>assets/home/js/carousel-ayurvaram.js"></script>

  <!-- Fixed header -->
  <script src="<?php echo base_url();?>assets/home/js/fixed-header.js"></script>
  <!-- Mobile menu -->
  <script src="<?php echo base_url();?>assets/home/js/mobile-menu.js"></script>
  <!-- Mobile menu -->
  <script src="<?php echo base_url();?>assets/home/js/dropdown.js"></script>

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


</body>

</html>
