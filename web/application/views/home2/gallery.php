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
  <link href="<?php echo base_url();?>assets/home/css/gallery-duplicate.css" rel="stylesheet">
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


    <section class="galry-sec132 padding-top-100 padding-left-40 padding-right-40">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12">
            <h2 class="galry-sec132-1 font-crimsonpro font-size-30 color-black2 text-center margin-bottom-70">
              AVVVS Gallery Category
            </h2>
          </div>
        </div>
      </div>
    </section>

     <!-- <?php foreach($album as $val){ ?>

    <?php $id = base64_encode($val['id'] .SALT_KEY.CKRAT_KEY); ?>

    <section class="galry-sec131" style="background-color: #d7dbdd;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-6">
            <a href="<?= CUSTOM_BASE_URL.'gallery-details/'.$id; ?>" class="galry-sec131-1 text-decoration-none padding-left-40">
              <div class="galry-sec131-5">
              <h3 class="galry-sec131-3 font-crimsonpro font-size-42 color-black line-height-52 margin-bottom-35">
                <?php echo $val['title']; ?>
              </h3>
              <div class="galry-sec131-4 font-size-18 color-black2">See All</div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-6 galry-sec131-2 padding-right-0"
          style="background-image: url(<?= FILES_BASE_URL;?>uploads/album/crop/<?php echo $val['image']; ?>);">

        </div>
      </div>
      </div>
    </section>

  <?php  }  ?> -->



    <section class="galry-sec131 padding-left-40 padding-right-40">
      <div class="container-fluid">
        <div class="row">

     <?php foreach($album as $val){ ?>

      <?php $id = base64_encode($val['id'] .SALT_KEY.CKRAT_KEY); ?>

          <div class="col-md-4 col-lg-4 col-xl-4">
            <a href="<?= CUSTOM_BASE_URL.'gallery-details/'.$id; ?>" class="galry-sec131-2">
              <img src="<?= FILES_BASE_URL;?>uploads/album/crop/<?php echo $val['image']; ?>">
            </a>
            <a href="<?= CUSTOM_BASE_URL.'gallery-details/'.$id; ?>" class="galry-sec131-1 text-decoration-none">
              <div class="galry-sec131-5">
              <h3 class="galry-sec131-3 font-crimsonpro font-size-30 color-black line-height-33">
              <?php echo $val['title']; ?>
              </h3>
              <div class="galry-sec131-4 font-size-18 color-white">See All</div>
            </div>
          </a>
        </div>

      <?php  }  ?>


      </div>
      </div>
    </section>

    <hr class="line-114">

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


</body>

</html>
