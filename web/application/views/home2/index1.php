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

  <!-- Home-Carousel -->
  <link href="<?php echo base_url();?>assets/home/css/carousel.css" rel="stylesheet">
  <!-- Mobile menu -->
  <link href="<?php echo base_url();?>assets/home/css/mobile-menu.css" rel="stylesheet">
  <!-- Mobile menu -->
  <link href="<?php echo base_url();?>assets/home/css/dropdown.css" rel="stylesheet">

</head>

<body>

<?php include("web/assets/include/home/header.php");?> 


<section class="ban-sec14">

<div class="hm-banner owl-carousel owl-theme">

<?php foreach($banner as $val){ ?>

  <div class="item">
    <div class="ban-sec14-1">
      <a href="#" class="">
        <img src="<?= FILES_BASE_URL;?>uploads/cart_banner/<?php echo $val['image']; ?>" alt="AVVVS">
      </a>
    </div>
  </div>

<?php } ?>




</div>

</section>


  <main class="clearfix">
      
    <section class="abt-dh37  padding-left-40 padding-right-40" style="background-image: url(<?php echo base_url();?>assets/home/images/hm-bg.png);">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 col-lg-4 col-xl-4">
            <div class="abt-dh39">
              <div class="abt-dh40">
                <div class="abt-dh41">
                  <div class="abt-dh43"></div>
                </div>
                <div class="abt-dh42 font-size-14 color-black font-weight-600">ABOUT</div>
              </div>
              <h1 class="abt-dh44 font-crimsonpro color-black">Arya Vaidya Vilasini Vaidya Sala</h1>
              <p class="abtgfk-txt12 font-size-15 line-height-26 color-gray-p">Arya Vaidya Vilasini Vaidya Sala was 
                established in 1921
with the blessings of revered Sree Narayana Guru by Kaloor
Neelakantan Vaidyar as a pharmacy preparing and
dispensing Ayurveda medicines.</p>
              <a class="abt-dh45 font-size-16 color-blue font-weight-600 text-decoration-none" href="testimonials">500k+ <span class="color-black">Happy Customers</span> </a>
              <a href="<?= CUSTOM_BASE_URL;?>about" class="abt-dh46 color-blue font-size-16 font-weight-600">MORE ABOUT</a>
            </div>
          </div>
          <div class="col-md-7 col-lg-8 col-xl-8">
            <div class="abt-dh38 text-end">

            <div class="abt-rotate">
               <img src="https://avvvs.com/web/assets/home/images/about-rotating.png" alt="AVVVS">
            </div>

            <div class="hm-about owl-carousel owl-theme">

<div class="item">
        <div class="hm-about2-1">
          <div class="hm-about2-2">
             <img src="https://avvvs.com/web/assets/home/images/about-section2.jpg" alt="AVVVS">
          </div>
        </div>
</div>

<div class="item">
        <div class="hm-about2-1">
          <div class="hm-about2-2">
             <img src="https://avvvs.com/web/assets/home/images/about-section4.jpg" alt="AVVVS">
          </div>
        </div>
</div>

<div class="item">
        <div class="hm-about2-1">
          <div class="hm-about2-2">
             <img src="https://avvvs.com/web/assets/home/images/about-section5.jpg" alt="AVVVS">
          </div>
        </div>
</div>


      </div>
            </div>
          </div>
        </div>
      </div>
    </section>  
    
    
    <section class="ayurve-fk66 padding-left-40 padding-right-40" style="background-image: url(<?php echo base_url();?>assets/home/images/hm-bg3.png);">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-7 col-lg-7 col-xl-5">
            <div class="ayurve-fk61">
              <div class="abt-dh40">
                <div class="abt-dh41">
                  <div class="abt-dh43"></div>
                </div>
                <div class="abt-dh42 color-blue font-size-14 font-weight-600">AYURVEDA</div>
              </div>
              <h2 class="abt-dh44 font-crimsonpro color-black">Proprietary & Classical<br> Formulations</h2>
              <p class="abt-dh45 font-size-15 line-height-26 color-gray-p">
                Arya Vaidya Vilasini Vaidya Sala has always produced
quality medicines using the best natural ingredients
AVVVS manufactures more than 300 Ayurveda
formulations both in the classical and proprietary category.
We are proud manufacturers of an array of time tested
special products which includes many effective in-house
formulae like Mezhu Thailam. The AVVVS range of
products also includes an array of patented medicines
which are highly recommended by clinicians worldwide for
their efficacy. Rujanth, Slepan, Redirons and Lakshol are a
few examples. AVVVS has also pioneered green
revolution by developing herbal gardens in and around the
manufacturing units with a dual purpose of raw material cultivation and conservation of biodiversity.
</p>
            </div>
          </div>
          <div class="col-md-5 col-lg-5 col-xl-7">
            <div class="ayurve-fk62">
              <div class="ayurve-fk63">

                  <img src="<?php echo base_url();?>assets/home/images/hm-proprietary-img.png" alt="avvvs">

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>    
      

    <section class="heal47 padding-right-40" style="background-image: url(<?php echo base_url();?>assets/home/images/hm-bg2.png);" >
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-6">
            <div class="heal48">
            <div class="hm-ayurvaram owl-carousel owl-theme">

                <div class="item">
                  <div class="ban-sec14-1">
                    <a href="#" class="">
                      <img src="<?php echo base_url();?>assets/home/images/specialty-clinics-slide1.jpg" alt="AVVVS">
                    </a>
                  </div>
                </div>

                <div class="item">
                  <div class="ban-sec14-1">
                    <a href="#" class="">
                      <img src="<?php echo base_url();?>assets/home/images/specialty-clinics-slide2.jpg" alt="AVVVS">
                    </a>
                  </div>
                </div>

                <div class="item">
                  <div class="ban-sec14-1">
                    <a href="#" class="">
                      <img src="<?php echo base_url();?>assets/home/images/specialty-clinics-slide3.jpg" alt="AVVVS">
                    </a>
                  </div>
                </div>

                <div class="item">
                  <div class="ban-sec14-1">
                    <a href="#" class="">
                      <img src="<?php echo base_url();?>assets/home/images/specialty-clinics-slide4.jpg" alt="AVVVS">
                    </a>
                  </div>
                </div>  
                
                <div class="item">
                  <div class="ban-sec14-1">
                    <a href="#" class="">
                      <img src="<?php echo base_url();?>assets/home/images/specialty-clinics-slide5.jpg" alt="AVVVS">
                    </a>
                  </div>
                </div> 


              </div>             
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-6">
            <div class="heal49">
              <div class="abt-dh40">
                <div class="abt-dh41">
                  <div class="abt-dh43"></div>
                </div>
                <div class="abt-dh42 font-size-14 color-gray font-weight-600">HEALTHCARE</div>
              </div>
              <h2 class="abt-dh44 font-crimsonpro color-black">
                <span><img src="<?php echo base_url();?>assets/home/images/avvvs-text-black.png" alt="AVVVS"></span> 
                Ayurveda
              Specialty Clinics</h2>

              <p class="abt-dh45 font-size-15 line-height-26 color-gray-p">
              The best of both worlds can be achieved if we blend
together technology and tradition. To give you potent
herbal medicines with 100% efficacy, that is what we have
done. We have stringent quality control measures in place to ensure perfection in the products. 
AVVVS is a blessing to the
fresh graduates aspiring for a successful career. The
uniformity of the brand facilitates interconnected
operations and is helpful for patients to seek
AVVVS services wherever they go. . Thus
AVVVS chain of clinics are a giant leap by AVVVS
towards women empowerment, employment generation,
Ayurveda promotion, improvement of public health and
research.
              </p>
              <div class="ayufl12">
                 <a href="<?= CUSTOM_BASE_URL;?>avvvs-speciality-clinic" class="abt-hel46 color-white font-size-16 font-weight-600">READ MORE</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="testi86 padding-left-40 padding-right-40">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-6">
            <div class="testi86-1">
               <h2 class="testi86-2 font-crimsonpro color-black">Our customers<br>
               love what we do</h2>
               <p class="testi86-3 font-size-15 line-height-26 color-gray-p">
                We are very happy because we have happy customers.
By being Committed and dedicated to promoting positive
health through Ayurveda, Vital Customer feedback is vital in
helping us to get it right and it serves as a guiding
resource for the growth of our institution. Respect for
Nature, Regard for Life and a Wholesome Approach
towards the society are the guiding principles for AVVVS
since the inception.</p>
               <a href="<?= CUSTOM_BASE_URL;?>testimonials" class="testi86-4 color-white font-size-16 font-weight-600">VIEW ALL</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-6">
          <div class="testi86-5">

          <div class="hm-testimonial owl-carousel owl-theme">





          <?php foreach($result as $val){ ?>

              <?php

                $string = $val['message'];

                $string1 = substr($string, 0,110);
                //$string2 = substr($string, 151);

                ?>

               <div class="item">
                <div class="testi86-6">
                  <div class="testi86-7"></div>
                  <div class="testi86-8">
                    <div class="testi86-9" style="background-image:url(<?= FILES_BASE_URL;?>uploads/testimonials/crop/<?php echo $val['image']; ?>);">
                    </div>
                    <div class="testi86-10 font-size-16 color-black font-weight-600"> <?php echo $val['name']; ?></div>
                    <p class="testi86-11 font-size-15 color-gray-p">
                    
                    <?php echo $string1; ?>...</p>
                    <div class="testi86-12">
                      <img src="<?php echo base_url();?>assets/home/images/quote.png">
                    </div>
                  </div>
                </div>
              </div>
        <?php } ?>

             


          </div>

          </div>
          </div>
        </div>
      </div>
    </section>


    <section class="hmad-ser80">
          <?php foreach($ad_banner as $ad){ ?>
            <img src="<?= FILES_BASE_URL;?>uploads/cart_banner/<?php echo $ad['image']; ?>" alt="avvvs">
          <?php } ?>
          }
    </section>


    <section class="hm-blogi87 padding-left-40 padding-right-40">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12">
            <h2 class="hm-blogi87-1 font-crimsonpro color-black">Blog</h2>

            <div class="hm-blog owl-carousel owl-theme">


             


       <!-- <?php foreach($blog as $val){ ?>

        <?php $originalDate = $val['date']; 
        $newDate = date("d M Y", strtotime($originalDate));
        $id = base64_encode($val['id'] .SALT_KEY.CKRAT_KEY); ?>

<div class="item">
               <div class="hm-blogi87-2">
                 <div class="hm-blogi87-3">
                  <a class="hm-blogi87-4" href="<?= CUSTOM_BASE_URL .'blog-details/'.$id; ?>">
                    <img src="<?= FILES_BASE_URL;?>uploads/blog/crop/<?php echo $val['image']; ?>" alt="AVVVS">
                  </a>
                 </div>

                 <div class="hm-blogi87-5">
                  <div class="hm-blogi87-6">
                    <div class="hm-blogi87-7 font-size-18 color-black font-weight-600"><?php echo $newDate; ?></div>
                    <a href="<?= CUSTOM_BASE_URL .'blog-details/'.$id; ?>" class="hm-blogi87-8">
                      <img src="<?php echo base_url();?>assets/home/images/arrow-black.svg" alt="AVVVS">
                    </a>
                  </div>
                  <a href="<?= CUSTOM_BASE_URL .'blog-details/'.$id; ?>" class="hm-blogi87-9 font-size-16 color-gray-p">
                      <?php echo $val['title']; ?>
                  </a>
                 </div>
               </div>
             </div>


        <?php } ?> -->

        <?php foreach($blog as $val){ ?>

        <?php $originalDate = $val['date']; 
        $newDate = date("d M Y", strtotime($originalDate));
        $id = base64_encode($val['id'] .SALT_KEY.CKRAT_KEY); ?>

             <div class="item">
               <div class="hm-blogi87-2">
                 <div class="hm-blogi87-3">
                  <a class="hm-blogi87-4" href="<?= CUSTOM_BASE_URL .'blog-details/'.$id; ?>">
                    <img src="<?= FILES_BASE_URL;?>uploads/blog/crop/<?php echo $val['image']; ?>" alt="AVVVS">
                  </a>
                 </div>
                 <div class="hm-blogi87-5">
                  <div class="hm-blogi87-6">
                    <div class="hm-blogi87-7 font-size-16 color-gray-p"><?php echo $newDate; ?></div>
                    <a href="<?= CUSTOM_BASE_URL .'blog-details/'.$id; ?>" class="hm-blogi87-8">
                      <img src="<?php echo base_url();?>assets/home/images/arrow-black.svg" alt="AVVVS">
                    </a>
                  </div>
                  <a href="<?= CUSTOM_BASE_URL .'blog-details/'.$id; ?>" class="hm-blogi87-9 font-size-18 color-black font-weight-600">
                  <?php echo $val['title']; ?>
                  </a>
                 </div>
               </div>
             </div>
        <?php } ?>

            


         </div>
          </div>
        </div>
        </div>
    </section>





    <section class="pro-ser50 padding-left-40" style="background-image: url(<?php echo base_url();?>assets/home/images/home-bottom-design.jpg);">

      <!-- <div class="pro-ser56 color-white">

     <a href="<?= CUSTOM_BASE_URL;?>product-list/NjAxMDFCYWxnYWxvcmVCYXphcjEwMUNvRGVfT25MaXNUZXJfc0VDckVUX1RlQW1fckV0U0lMbm8=" class="pro-ser58 text-decoration-none">
      <div class="pro-ser58-2 font-size-19 font-weight-600">Proprietary</div>
      <div class="pro-ser58-3"></div>
      </a>
     <a href="<?= CUSTOM_BASE_URL;?>product-list/NjExMDFCYWxnYWxvcmVCYXphcjEwMUNvRGVfT25MaXNUZXJfc0VDckVUX1RlQW1fckV0U0lMbm8=" class="pro-ser59 text-decoration-none">
      <div class="pro-ser59-2 font-size-19 font-weight-600">Classical</div>
     <div class="pro-ser59-3"></div>
     </a> -->
      <!--  <a href="<?= CUSTOM_BASE_URL;?>product-list" class="pro-ser60 text-decoration-none">-->
      <!--    <div class="pro-ser60-2 font-size-19 font-weight-600">Cosmetic</div>-->
      <!--    <div class="pro-ser60-3"></div>-->
      <!--  </a>-->
      <!-- </div> -->

    </section>


    <?php include("web/assets/include/home/footer.php");?> 


  </main>


  <script src="<?php echo base_url();?>assets/home/js/bootstrap.bundle.min.js"></script>
  
  <!-- Carousel-slider -->
  <script src="<?php echo base_url();?>assets/home/js/carousel-duplicate2.js"></script>
  <!-- Fixed header -->
  <script src="<?php echo base_url();?>assets/home/js/fixed-header.js"></script>
  <!-- Banner scroll top -->
  <script src="<?php echo base_url();?>assets/home/js/banner-scroll-top.js"></script>
  <!-- Mobile menu -->
  <script src="<?php echo base_url();?>assets/home/js/mobile-menu.js"></script>
  <!-- Mobile menu -->
  <script src="<?php echo base_url();?>assets/home/js/dropdown.js"></script>


</body>

</html>