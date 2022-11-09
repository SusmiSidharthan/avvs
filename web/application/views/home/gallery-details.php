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

  <!-- Gallery style -->
  <link href="<?php echo base_url();?>assets/home/css/gallery.css" rel="stylesheet">

  <!-- Gallery lightbox -->
  <link rel='stylesheet' href='<?php echo base_url();?>assets/home/css/gallery/lightgallery.css'>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/gallery/lightstyle.css">

  <!-- Mobile menu -->
  <link href="<?php echo base_url();?>assets/home/css/mobile-menu.css" rel="stylesheet">
  <!-- Mobile menu -->
  <link href="<?php echo base_url();?>assets/home/css/dropdown.css" rel="stylesheet">

</head>

<body>

    <?php include("web/assets/include/home/header.php");?> 


  <section class="abt-ban85">
    <?php foreach($banner as $ad){ ?>
    <img src="<?= FILES_BASE_URL;?>uploads/cart_banner/<?php echo $ad['image']; ?>" alt="AVVVS">
    <?php  }  ?>
  </section>


  <main class="clearfix">


    <section class="gary-dets134 padding-top-100 padding-left-40 padding-right-40">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12">
            <h2 class="gary-dets134-1 font-crimsonpro font-size-30 color-black2 text-center margin-bottom-70">
               <?php echo $album; ?>
            </h2>
          </div>
        </div>
      </div>
    </section>


    <section class="gary-dets133 padding-left-40 padding-right-40">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12">
            
    <div class="demo-gallery">
      <ul id="lightgallery">

      <?php foreach ($gallery as $val){ ?>  

        <li data-responsive="<?= FILES_BASE_URL;?>uploads/gallery/<?php echo $val['image']; ?> 375, 
        <?= FILES_BASE_URL;?>uploads/gallery/<?php echo $val['image']; ?> 480, 
        <?= FILES_BASE_URL;?>uploads/gallery/<?php echo $val['image']; ?> 800" 
        data-src="<?= FILES_BASE_URL;?>uploads/gallery/<?php echo $val['image']; ?>"
        data-sub-html="<h4><?php echo $val['title']; ?></h4>">
          <a href="">
            <img class="img-responsive" src="<?= FILES_BASE_URL;?>uploads/gallery/<?php echo $val['image']; ?>">
            <div class="demo-gallery-poster">
              <img src="<?php echo base_url();?>assets/home/images/gallery/zoom.png">
            </div>
          </a>
        </li>

      <?php  }  ?>

<!--         <li data-responsive="<?php echo base_url();?>assets/home/images/gallery/navathi/large/4.jpg 375, 
        <?php echo base_url();?>assets/home/images/gallery/navathi/large/4.jpg 480, 
        <?php echo base_url();?>assets/home/images/gallery/navathi/large/4.jpg 800" 
        data-src="<?php echo base_url();?>assets/home/images/gallery/navathi/large/4.jpg"
        data-sub-html="<h4>Navathi Celebration</h4>">
          <a href="">
            <img class="img-responsive" src="<?php echo base_url();?>assets/home/images/gallery/navathi/small/4.jpg">
            <div class="demo-gallery-poster">
              <img src="<?php echo base_url();?>assets/home/images/gallery/zoom.png">
            </div>
          </a>
        </li>

        <li data-responsive="<?php echo base_url();?>assets/home/images/gallery/navathi/large/5.jpg 375, 
        <?php echo base_url();?>assets/home/images/gallery/navathi/large/5.jpg 480, 
        <?php echo base_url();?>assets/home/images/gallery/navathi/large/5.jpg 800" 
        data-src="<?php echo base_url();?>assets/home/images/gallery/navathi/large/5.jpg"
        data-sub-html="<h4>Navathi Celebration</h4>">
          <a href="">
            <img class="img-responsive" src="<?php echo base_url();?>assets/home/images/gallery/navathi/small/5.jpg">
            <div class="demo-gallery-poster">
              <img src="<?php echo base_url();?>assets/home/images/gallery/zoom.png">
            </div>
          </a>
        </li>

        <li data-responsive="<?php echo base_url();?>assets/home/images/gallery/navathi/large/7.jpg 375, 
        <?php echo base_url();?>assets/home/images/gallery/navathi/large/7.jpg 480, 
        <?php echo base_url();?>assets/home/images/gallery/navathi/large/7.jpg 800" 
        data-src="<?php echo base_url();?>assets/home/images/gallery/navathi/large/7.jpg"
        data-sub-html="<h4>Navathi Celebration</h4>">
          <a href="">
            <img class="img-responsive" src="<?php echo base_url();?>assets/home/images/gallery/navathi/small/7.jpg">
            <div class="demo-gallery-poster">
              <img src="<?php echo base_url();?>assets/home/images/gallery/zoom.png">
            </div>
          </a>
        </li>

        <li data-responsive="<?php echo base_url();?>assets/home/images/gallery/navathi/large/8.jpg 375, 
        <?php echo base_url();?>assets/home/images/gallery/navathi/large/8.jpg 480, 
        <?php echo base_url();?>assets/home/images/gallery/navathi/large/8.jpg 800" 
        data-src="<?php echo base_url();?>assets/home/images/gallery/navathi/large/8.jpg"
        data-sub-html="<h4>Navathi Celebration</h4>">
          <a href="">
            <img class="img-responsive" src="<?php echo base_url();?>assets/home/images/gallery/navathi/small/8.jpg">
            <div class="demo-gallery-poster">
              <img src="<?php echo base_url();?>assets/home/images/gallery/zoom.png">
            </div>
          </a>
        </li>

        <li data-responsive="<?php echo base_url();?>assets/home/images/gallery/navathi/large/9.jpg 375, 
        <?php echo base_url();?>assets/home/images/gallery/navathi/large/9.jpg 480, 
        <?php echo base_url();?>assets/home/images/gallery/navathi/large/9.jpg 800" 
        data-src="<?php echo base_url();?>assets/home/images/gallery/navathi/large/9.jpg"
        data-sub-html="<h4>Navathi Celebration</h4>">
          <a href="">
            <img class="img-responsive" src="<?php echo base_url();?>assets/home/images/gallery/navathi/small/9.jpg">
            <div class="demo-gallery-poster">
              <img src="<?php echo base_url();?>assets/home/images/gallery/zoom.png">
            </div>
          </a>
        </li> -->

      </ul>
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
  <!-- Mobile menu -->
  <script src="<?php echo base_url();?>assets/home/js/mobile-menu.js"></script>
  <!-- Mobile menu -->
  <script src="<?php echo base_url();?>assets/home/js/dropdown.js"></script>

  <!-- Gallery lightbox -->
  <script src='<?php echo base_url();?>assets/home/js/gallery/lightgallery.js'></script>
  <script src='<?php echo base_url();?>assets/home/js/gallery/lg-pager.js'></script>
  <script src='<?php echo base_url();?>assets/home/js/gallery/lg-autoplay.js'></script>
  <script src='<?php echo base_url();?>assets/home/js/gallery/lg-share.js'></script>
  <script src='<?php echo base_url();?>assets/home/js/gallery/lg-fullscreen.js'></script>
  <script src='<?php echo base_url();?>assets/home/js/gallery/lg-zoom.js'></script>
  <script src='<?php echo base_url();?>assets/home/js/gallery/lg-hash.js'></script>
  <script src='<?php echo base_url();?>assets/home/js/gallery/picturefill.min.js'></script>
  <script  src="<?php echo base_url();?>assets/home/js/gallery/script.js"></script>


</body>

</html>
