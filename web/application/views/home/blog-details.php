<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo $result->meta_description; ?>">
  <meta name="author" content="">
  <meta name="keywords" content="<?php echo $result->meta_key; ?>">


  <title><?php echo $result->meta_title; ?></title>

  <link rel="canonical" href="<?php echo $result->canonical_link; ?>">

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

<?php $originalDate = $result->date; 
$newDate = date("d M Y", strtotime($originalDate)); ?>

<section class="blg-de-fj125 padding-left-40 padding-right-40" style="background-image: url(<?php echo base_url();?>assets/home/images/blog/blogdetails-ban.jpg);">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-lg-4 col-xl-4">
        <div class="blg-de-fj125-1">
          <div class="blg-de-fj125-2">
            <div class="blg-de-fj125-3 font-size-14 color-white-light line-height-26 margin-bottom-15">Written By</div>
            <div class="blg-de-fj125-4 font-size-18 color-white font-weight-600 line-height-26"><?php echo $result->written_by; ?></div>
          </div>
          <div class="blg-de-fj125-8">
            <div class="blg-de-fj125-5 font-size-16 color-white-light line-height-26">
              <?php echo $newDate; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-lg-8 col-xl-8">
        <div class="blg-de-fj125-6 padding-left-20">
          <div class="blg-de-fj125-7 font-crimsonpro font-size-42 color-white line-height-52"> 
            <?php echo $result->title; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <main class="clearfix">

    <section class="blg-degh126 padding-top-100 padding-bottom-100 padding-left-40 padding-right-40">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 col-lg-4 col-xl-4">
            <div class="blg-degh126-1">
              <div class="blg-degh126-2 font-crimsonpro font-size-28 color-black2 margin-bottom-35">Recent Posts</div>
              <div class="blg-degh126-3">

                <?php foreach ($blog as $value) { ?>

                <?php $originalDate = $value['date']; 
                $newDate = date("d M Y", strtotime($originalDate)); 
                $id = base64_encode($value['id'] .SALT_KEY.CKRAT_KEY); ?>

                <div class="blg-degh126-4 margin-bottom-24">
                  <div class="blg-degh126-5" style="background-image: url(<?php echo CUSTOM_BASE_URL . 'admin/uploads/blog/crop/'.$value['image']; ?>);">
                  </div>
                  <a href="<?= CUSTOM_BASE_URL .'blog-details/'.$id; ?>" class="blg-degh126-6 text-decoration-none">
                    <div class="blg-degh126-7 font-size-18 color-black2 font-weight-600 line-height-26 margin-bottom-15">
                     <?php echo $value['title']; ?></div>
                    <div class="blg-degh126-8 font-size-14 color-gray-p"><?php echo $newDate; ?></div>
                    </a>
                </div>
              <?php  }  ?>


              </div>
            </div>
          </div>
          <div class="col-md-8 col-lg-8 col-xl-8">
            <div class="blg-degh126-9 padding-left-20">
              <p class="font-size-14 color-gray-p line-height-26"><?php echo $result->paragraph1; ?></p>

                <div class="blg-degh126-10 margin-top-35 margin-bottom-35">
                   <img src="<?php echo CUSTOM_BASE_URL . 'admin/uploads/blog/crop/'.$result->image; ?>" class="img-fluid">
                </div>

                <p class="font-size-14 color-gray-p line-height-26">
                  <?php echo $result->paragraph2; ?>
                </p>
            </div>
          </div>
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
