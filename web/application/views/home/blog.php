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

  <!-- Blog style -->
  <link href="<?php echo base_url();?>assets/home/css/blog.css" rel="stylesheet">
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

    <section class="bl-sec115 padding-top-100 padding-bottom-100 padding-left-40 padding-right-40" style="background-image: url(<?php echo base_url();?>assets/home/images/leaf-1.png);">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-8 col-xl-8">
            <div class="bl-sec115-1">
              <div class="bl-sec115-2 font-crimsonpro font-size-42 color-black line-height-52 margin-bottom-24 text-center">Blog</div>
              <div class="bl-sec115-3 font-size-16 color-gray-p line-height-33 text-center">Pioneers of Arya Vaidya Vilasini Vaidya Sala through the experience and 
                research of a century have developed effective formulations which have with stood the test of time. 
                These licensed proprietary medicines are manufactured and packed according to GMP quality 
                standards to assure safe side effect free Ayurveda medicinal products to the global society.</div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="bl-sec116 padding-top-100 padding-bottom-100 padding-left-40 padding-right-40">
      <div class="container-fluid">
        <div class="row">

          <div class="col-xl-12">


            <div class="bl-sec124">

        <?php foreach($blog as $val){ ?>

        <?php $originalDate = $val['date']; 
        $newDate = date("d M Y", strtotime($originalDate));
        $id = base64_encode($val['id'] .SALT_KEY.CKRAT_KEY); ?>

            <div class="bl-sec117">
              <a class="bl-sec123  text-decoration-none" href="<?= CUSTOM_BASE_URL .'blog-details/'.$id; ?>">
                <div class="bl-sec118 font-size-14 color-gray-p line-height-22 margin-bottom-15" ><?php echo $newDate; ?></div>
                <div class="bl-sec119 font-size-24 color-black font-weight-600 line-height-35 margin-bottom-24"><?php echo $val['title']; ?></div>
                <div class="bl-sec122 font-size-14 color-black font-weight-600 line-height-22">Read More</div>
              </a>
              <div class="bl-sec121">
                <img src="<?= CUSTOM_BASE_URL . 'admin/uploads/blog/crop/'.$val['image']; ?>" class="img-fluid">
              </div>
            </div>
        <?php  }  ?>



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


</body>

</html>
