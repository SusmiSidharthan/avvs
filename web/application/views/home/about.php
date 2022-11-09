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

  <!-- About style -->
  <link href="<?php echo base_url();?>assets/home/css/about.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/home/css/carousel-about.css" rel="stylesheet">
  <!-- Mobile menu -->
  <link href="<?php echo base_url();?>assets/home/css/mobile-menu.css" rel="stylesheet">
  <!-- Mobile menu -->
  <link href="<?php echo base_url();?>assets/home/css/dropdown.css" rel="stylesheet">

</head>

<body>

<?php include("web/assets/include/home/header.php");?> 

<section class="abt-top-ban">
  <?php foreach($banner as $ad){ ?>
  <img src="<?= FILES_BASE_URL;?>uploads/cart_banner/<?php echo $ad['image']; ?>" alt="AVVVS">
  <?php  }  ?>
</section>


  <main class="clearfix">



    <section class="abt-ban88 padding-top-70 padding-left-40 padding-right-40">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-6">
            <div class="abt-ban89">
              <div class="abt-ic-c12">
                <img src="<?php echo base_url();?>assets/home/images/about/amalgam-icon.png">
              </div>
              <h2 class="font-crimsonpro font-size-42 color-black line-height-52">
                Amalgam of Tradition, Technology
              </h2>
              <h3 class="font-crimsonpro font-size-28 color-blue line-height-52 margin-bottom-15">
                100 Years Of Experience
              </h3>
              <p class="font-size-14 color-gray-p line-height-26">Arya Vaidya Vilasini Vaidya Sala is a well known entity in Kozhikode, 
                the hub of Malabar both as a multifaceted Ayurveda institution manufacturing, 
                supplying, exporting and retailing quality Ayurveda classical and patent medicines. 
                The clinical section of AVVVS grew and branched into AVVVS Speciality Clinics providing 
                specialised Ayurveda care under expert supervision. Adapting to the evolving technology without 
                compromising on the core tradition is the uniqueness of AVVVS a value that has sustained and nurtured 
                it through these 100 years.</p><br>
                <p class="font-size-14 color-gray-p line-height-26">Arya Vaidya Vilasini Vaidya Sala a landmark Ayurveda institution of Kozhikode dates the origin to 1921 
                  when Kaloor Neelakandan Vaidyar was personally blessed and advised by the visionary Sree Narayana Guru to 
                  employ his expertise to establish a patient care facility to benefit the ailing society. Willingly obeying 
                  the master’s orders Kaloor Neelakandan Vaidyar started the Arya Vaidya Vilasini Vaidya Sala-AVVVS to manufacture 
                  quality medicines and deliver compassionate healthcare to the society. </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-6">
            <div class="abt-ban90 text-end">
              <img src="<?php echo base_url();?>assets/home/images/about/amalgam.jpg" class="img-fluid">
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>


    <section class="pro-fn90 padding-top-70 padding-bottom-70 padding-left-40 padding-right-40">
        <div class="container-fluid">


          <div class="row d-flex justify-content-center">

            <div class="col-md-12 col-lg-6 col-xl-6">
            <div class="pro-fn93">
                <div class="pro-fn99" style="background-image:url(<?php echo base_url();?>assets/home/images/about/neelakandan-vaidyar.png);">
                </div>
                
                <div class="pro-fswr12">
                  <h2 class="pro-fn91 font-crimsonpro font-size-32 color-black line-height-35 margin-bottom-10">Sri. K. Neelakandan Vaidyar</h2>
                  <div class="pro-fn94 font-crimsonpro font-size-24 color-black line-height-26 margin-bottom-15">(Founder)</div>
                  <div class="pro-fn92">
                    <p class="font-size-14 color-gray-p line-height-26">
                    Arya Vaidya Vilasini Vaidya Sala was established in 1921 with the blessings of revered Sree Narayana Guru 
                    by Kaloor Neelakantan Vaidyar as a pharmacy preparing and dispensing Ayurveda medicines.
                  </p>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-12 col-lg-6 col-xl-6">
            <div class="pro-fn93">
                <div class="pro-fn99" style="background-image:url(<?php echo base_url();?>assets/home/images/about/ramdasvaidyar.png);">
                </div>
                <div class="pro-fswr12">
                  <h2 class="pro-fn91 font-crimsonpro font-size-32 color-black line-height-35 margin-bottom-10">Sri. K.N Ramadas Vaidyar</h2>
                  <div class="pro-fn92">
                    <p class="font-size-14 color-gray-p line-height-26">
                    Kaloor Neelakandan Vaidyar was succeeded by his son Ramdas Vaidyar who along with continuing
                    in his dedicated father‘s footsteps penetrated the socio-literary circles of Kozhikode with his satire
                    and positive sarcasm
                  </p>
                  </div>
                </div>
              </div>
            </div>



          </div>



        </div>
    </section>





  <section class="com-prov94 padding-top-70 padding-bottom-70 padding-left-40 padding-right-40">
    <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12">
        <div class="com-prov95 margin-bottom-35">
          <h3 class="com-prov96 font-crimsonpro font-size-36 color-black line-height-44 margin-bottom-24">Company profile and legacy</h3>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7 col-lg-7 col-xl-7">
        <div class="com-prov98 font-size-14 color-black2 line-height-26">
        Arya Vaidya Vilasini Vaidya Sala is based in Kozhikode (Calicut) a city known for the legacy of
compassion, hospitality and trust. The firm shortly addressed as AVVVS has to its credit much
effective special time tested formulations documented through the generations. Arya Vaidya Vilasini
Vaidya Sala has always tried to evolve with time incorporating the contemporary changes and trends
the industry. The present GMP-certified factory with state-of-the-art technology and modern
manufacturing equipment are proofs to its scientific approach. The factory located in the suburbs of
the city has modem machinery for capsulation, blister packing, ointment manufacturing and filling,
and cosmetic products manufacturing apart from the traditional mechanized manufacturing units
manned by trained and experienced personnel. The raw material sourcing, storing, manufacturing
packaging and logistics processes are all of the international standards. medicines manufactured at
AVVVS is marketed throughout India and also exported to countries like Russia, Austria, Slovenia,
Columbia, etc. The firm is all set to enter the new generation e-commerce segment with retail
marketing of Ayurveda products and specialised customer support and counselling services. Arya
Vaidya Vilasini Vaidya Sala is committed to develop, license manufacture and dispense safe,
effective, reliable and affordable Ayurveda products globally to our clientele.

        </div>
      </div>
      <div class="col-md-5 col-lg-5 col-xl-5 text-end">
        <div class="com-prov94-1">
        <div class="about-company owl-carousel owl-theme">


<div class="item">
        <div class="about-company2-1">
          <div class="about-company2-2">
             <img src="<?php echo base_url();?>assets/home/images/about/about-section1.jpg" alt="AVVVS">
          </div>
        </div>
</div>

<div class="item">
        <div class="about-company2-1">
          <div class="about-company2-2">
             <img src="<?php echo base_url();?>assets/home/images/about/about-section2.jpg" alt="AVVVS">
          </div>
        </div>
</div>

<div class="item">
        <div class="about-company2-1">
          <div class="about-company2-2">
             <img src="<?php echo base_url();?>assets/home/images/about/about-section3.jpg" alt="AVVVS">
          </div>
        </div>
</div>




      </div>


        </div>
      </div>
    </div>
  </div>
  </section>


  <section class="our-vidf99 padding-top-70 padding-bottom-70 padding-left-40 padding-right-40">
    <div class="contaner">
      <div class="row d-flex justify-content-center">

        <div class="col-md-6 col-lg-5 col-xl-5">
            <div class="our-vidf100 text-center">
              <div class="our-vidf103">
                <img src="<?php echo base_url();?>assets/home/images/about/vision.png" class="img-fluid">
              </div>
              <h4 class="our-vidf101 font-crimsonpro font-size-36 color-black line-height-44 margin-top-15 margin-bottom-15">Our vision</h4>
              <div class="our-vidf102 font-size-14 color-black2 line-height-26">
              To be a premium multi-faceted Ayurveda global ethical business
institution committed to quality and guided by tradition. Arya Vaidya Vilasini Vaidya Sala-AVVVS
manufactures quality medicines and delivers compassionate healthcare to society.
              </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-5 col-xl-5">
            <div class="our-vidf100 text-center">
              <div class="our-vidf103">
                <img src="<?php echo base_url();?>assets/home/images/about/mission.png" class="img-fluid">
              </div>
              <h4 class="our-vidf101 font-crimsonpro font-size-36 color-black line-height-44 margin-top-15 margin-bottom-15">Our mission</h4>
              <div class="our-vidf102 font-size-14 color-black2 line-height-26">
              To achieve the vision and promote holistic positive health through Ayurveda with respect for nature
and regard for life through committed teamwork and adherence to the laws of the land. AVVVS is
committed to developing, manufacturing, and exporting affordable Ayurveda products globally to our
clientele.
              </div>
            </div>
        </div>

      </div>
    </div>
  </section>


  <section class="valug-110 padding-top-70 padding-bottom-70 padding-left-40 padding-right-40">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-lg-5 col-xl-5">
          <div class="valug-110-1">
            <h5 class="valug-110-2 font-crimsonpro font-size-36 color-black line-height-44 margin-bottom-24">Values and service standards</h5>
            <div class="valug-110-3 font-size-14 color-black2 line-height-26">
            The best of both worlds can be achieved if we blend together technology and tradition. To give you
potent herbal medicines with 100% efficacy, that is what we have done. We have stringent quality
control measures in place so that we can use technology. AVVVS is a blessing to the fresh
graduates aspiring for a successful career. The uniformity of the brand facilitates interconnected
operations and is helpful for patients to seek AVVVS services wherever they go. . This AVVVS chain
of clinics are a giant leap by AVVVS towards women empowerment, employment generation,
Ayurveda promotion, improvement of public health and research.
            </div>
          </div>
        </div>
        <div class="col-md-7 col-lg-7 col-xl-7">
          <div class="valug-110-4">
            <div class="valug-110-5">
              <div class="valug-110-6 font-size-16 color-white font-weight-500 line-height-22" style="background-image: url(<?php echo base_url();?>assets/home/images/about/val-ser-bg.jpg);">
                Timely precise mutually respecting internal and external communication
              </div>
              <div class="valug-110-6 font-size-16 color-white font-weight-500 line-height-22" style="background-image: url(<?php echo base_url();?>assets/home/images/about/val-ser-bg.jpg);">
                Trust and transparency in all matters and at all levels
              </div>
              <div class="valug-110-6 font-size-16 color-white font-weight-500 line-height-22" style="background-image: url(<?php echo base_url();?>assets/home/images/about/val-ser-bg.jpg);">
                Empowering, involving motivating and challenging workplace
              </div>
              <div class="valug-110-6 font-size-16 color-white font-weight-500 line-height-22" style="background-image: url(<?php echo base_url();?>assets/home/images/about/val-ser-bg.jpg);">
                Ownership, responsibility commitment and going an extra mile with a smile
              </div>
              <div class="valug-110-6 font-size-16 color-white font-weight-500 line-height-22" style="background-image: url(<?php echo base_url();?>assets/home/images/about/val-ser-bg.jpg);">
                Adherence to quality standards and legislations
              </div>
              <div class="valug-110-6 font-size-16 color-white font-weight-500 line-height-22" style="background-image: url(<?php echo base_url();?>assets/home/images/about/val-ser-bg.jpg);">
                Concern and compassion to health care seekers and business partners
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


    <section class="out-f111 padding-top-70 padding-bottom-70 padding-left-40 padding-right-40" style="background-image: url(<?php echo base_url();?>assets/home/images/about/outreach-bg.jpg);">

      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12">
            <h2 class="out-f111-4 font-crimsonpro font-size-42 color-white line-height-44 margin-bottom-50 text-center">Outreach</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-6">
            <div class="out-f111-1">
              <div class="out-f111-2">
                <img src="<?php echo base_url();?>assets/home/images/about/csr-activity.jpeg" class="img-fluid">
              </div>
              <div class="out-f111-3 font-size-16 color-white font-weight-500 line-height-26 margin-top-25">
              The inception concept of AVVVS is social service which was observed to the core by the fore fathers
Kaloor Neelakandan Vaidyar and Ramdas Vaidyar The present management of AVVVS under the
leadership of Dr Manoj Kaloor and Reeja Manoj has up held and following the path of social service.
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 col-xl-6">
            <div class="out-f111-1">
              <div class="out-f111-2">
                <img src="<?php echo base_url();?>assets/home/images/about/csr-activity2.jpeg" class="img-fluid">
              </div>

              <div class="out-f111-3 font-size-16 color-white font-weight-500 line-height-26 margin-top-25">
              The founding idea of AVVVS is social service, which the forefathers Kaloor Neelakandan Vaidyar
and Ramdas Vaidyar adhered to to the letter. Under the direction of Dr. Manoj Kaloor and Reeja Manoj, the current management of AVVVS has upheld and is continuing down the route of social
service.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php include("web/assets/include/home/footer.php");?> 


  </main>

  <script src="<?php echo base_url();?>assets/home/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/home/js/jquery.min.js"></script>


  <!-- Fixed header -->
  <script src="<?php echo base_url();?>assets/home/js/fixed-header.js"></script>

  <script src="<?php echo base_url();?>assets/home/js/carousel-about.js"></script>

  <!-- Mobile menu -->
  <script src="<?php echo base_url();?>assets/home/js/mobile-menu.js"></script>
  <!-- Mobile menu -->
  <script src="<?php echo base_url();?>assets/home/js/dropdown.js"></script>


</body>

</html>
