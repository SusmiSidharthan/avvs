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

  <!-- Testimonials style -->
  <link href="<?php echo base_url();?>assets/home/css/testimonials.css" rel="stylesheet">
  <!-- Mobile menu -->
  <link href="<?php echo base_url();?>assets/home/css/mobile-menu.css" rel="stylesheet">
  <!-- Mobile menu -->
  <link href="<?php echo base_url();?>assets/home/css/dropdown.css" rel="stylesheet">
<style>
.readmore .moreText {
    display:none;
}
.readmore a.more {
    display: block;
    text-decoration: none;
    color: #212121;
    font-weight: 600;
    cursor: pointer;
}
.readmore a.more:hover{
  text-decoration:underline;
}
</style>
</head>

<body>

<?php include("web/assets/include/home/header.php");?> 

  <section class="abt-ban85">
    <?php foreach($banner as $ad){ ?>
    <img src="<?= FILES_BASE_URL;?>uploads/cart_banner/<?php echo $ad['image']; ?>" alt="AVVVS">
    <?php  }  ?>
  </section>


  <main class="clearfix">

    <section class="test-sec130 padding-top-100 padding-bottom-100 padding-left-40 padding-right-40">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-12">
            <div class="test-sec130-1 font-crimsonpro font-size-30 color-black2 text-center margin-bottom-70">What Our
              Clients Say</div>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-12">
            <div class="test-sec130-2">
            
            
            <?php foreach($result as $val){ ?>

               <?php

                $string = $val['message'];

                $string1 = substr($string, 0,150);
                $string2 = substr($string, 151);

                ?>  
            
              <div class="test-sec130-3">
                <div class="test-sec130-4" style="background-image:url(<?= FILES_BASE_URL;?>uploads/testimonials/crop/<?php echo $val['image']; ?>);">
                  <div class="test-sec130-5">
               
                  </div>
                </div>
                <div class="readmore">
                <div class="test-sec130-5">
                  <div class="test-sec130-7">
                    <div class="test-sec130-8 font-size-16 color-gray-p line-height-26 margin-bottom-24">
                      <span class="test-sec130-10">
                        <img src="<?php echo base_url();?>assets/home/images/testimonials/quote.svg">
                      </span> 
                      
                        <?php echo $string1; ?><span class="ellipsis">...</span> <span class="moreText"><?php echo $string2; ?></span> <a class="more">show more</a>
    
                    </div>
                    <div class="test-sec130-9 font-size-16 color-black2 font-weight-600 text-uppercase">
                     <?php echo $val['name']; ?>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
              
              <?php  }  ?>



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
<script>
  $(function(){
    $('.readmore a.more').on('click', function(){
        var $parent = $(this).parent();
        if($parent.data('visible')) {
            $parent.data('visible', false).find('.ellipsis').show()
            .end().find('.moreText').hide()
            .end().find('a.more').text('show more');
        } else {
            $parent.data('visible', true).find('.ellipsis').hide()
            .end().find('.moreText').show()
            .end().find('a.more').text('show less');
        }
    });
});
</script>

</body>

</html>
