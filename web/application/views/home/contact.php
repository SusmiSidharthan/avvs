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

  <!-- Contact style -->
  <link href="<?php echo base_url();?>assets/home/css/contact.css" rel="stylesheet">
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

    <section class="cone-sec127 padding-top-100 padding-bottom-100 padding-left-40 padding-right-40">
      <div class="container-fluid">


        <div class="row">
          <div class="col-lg-8 col-xl-8">

          <div class="cone-sec128 padding-bottom-100 padding-left-40 padding-right-40">
          <h2 class="cone-sec127-1 font-crimsonpro font-size-30 color-black2 font-weight-600 margin-bottom-24">Get in
              touch with us!</h2>

            <h3 class="cone-sec128-1 font-size-16 color-gray-p line-height-26 margin-bottom-50">
              You are most welcome to call mail or text <br>AVVVS for more information
            </h3>

        <div>
        
  
              <div class="cone-sec128-2">
                <form class="cone-sec128-3" id="contact_us" name="contact_us">

                  <div class="form-group cone-sec128-4 margin-bottom-24">
                    <input type="text" class="form-control font-size-15" placeholder="Name" id="cf-name" name="cf-name" required>
                  </div>

                  <div class="form-group cone-sec128-4 margin-bottom-24">
                    <input type="email" id="cf-email" name="cf-email" class="form-control font-size-15" placeholder="Email" required>
                  </div>

                  <div class="form-group cone-sec128-4 margin-bottom-15">
                    <input type="text" id="cf-phone" name="cf-phone" class="form-control font-size-15" placeholder="Phone" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"  minlength="10" maxlength="10" required>
                  </div>

                  <div class="form-group cone-sec128-5 margin-bottom-24">
                    <textarea class="form-control font-size-15" placeholder="Message" id="cf-message" name="cf-message" required></textarea>
                  </div>

                  <div class="form-group cone-sec128-6 margin-top-35">
                    <button type="submit">SEND MESSAGE</button>
                    <div id="sucsMsg"></div>
                    <div class="clearfix"></div>
                    <div id="formERR"></div>
                    <p id="loading_img"></p>
                  </div>

                </form>

              </div>
    

            

       
        </div>
     
</div>

          </div>

          <div class="col-lg-4 col-xl-4">

         
            <div class="cone-sec127-2">
              <div class="cone-sec127-4">
                <div class="cone-sec127-5 font-crimsonpro font-size-28 color-black2 font-weight-600 margin-bottom-24">
                  Address
                </div>
                <div class="cone-sec127-6 font-size-16 color-gray-p line-height-26">Arya Vaidya Vilasini Vaidya Sala,
                  Taluk Road, Puthiyara (PO),
                  Pin: 673004, KOzhikode, Kerala</div>
              </div>
            </div>
     

        
            <div class="cone-sec127-10">
              <div class="cone-sec127-2">
                <div class="cone-sec127-3">
                  <img src="<?php echo base_url();?>assets/home/images/contact/mail.svg">
                </div>
                <div class="cone-sec127-4">
                  <div class="cone-sec127-6">
                    <a class="cone-sec127-7 font-size-16 color-gray-p text-decoration-none"
                      href="mailto:mail@avvvs.com">mail@avvvs.com</a>
                  </div>
                </div>
              </div>
            </div>
      


            <div class="cone-sec127-2">
              <div class="cone-sec127-3">
                <img src="<?php echo base_url();?>assets/home/images/contact/phone.svg">
              </div>
              <div class="cone-sec127-4">
                <div class="cone-sec127-6">
                  <div class="cone-sec127-10">
                    <a class="cone-sec127-8 font-size-16 color-gray-p text-decoration-none" href="tel:+91 495 2720409">
                      +91 495 2720409
                    </a>
                  </div>
                  <div class="cone-sec127-10">
                    <a class="cone-sec127-9 font-size-16 color-gray-p text-decoration-none"
                      href="tel:+91 8089202091">+91 8089202091</a>
                  </div>
                </div>
              </div>
            </div>


    <div class="cone-sec129">

            <div class="cone-sec129ad font-crimsonpro font-size-28 color-black2 font-weight-600 margin-bottom-24">Map</div>
     
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1956.5437734411796!2d75.790411!3d11.25497!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1e94e223625dbd11!2sAyurvaram%20Health%20and%20Skincare%20clinic%20-%20AVVVS!5e0!3m2!1sen!2sin!4v1651723618122!5m2!1sen!2sin"
              width="100%" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    </div>
     

          </div>

        </div>


      </div>
      </div>
    </section>



    <?php include("web/assets/include/home/footer.php");?> 


  </main>

<script>
    
    $("#contact_us").on('submit', function(e){
        e.preventDefault();

        $.ajax({

                    type: "POST",
                    url: '<?= CUSTOM_BASE_URL . 'Main/get_in_touch' ?>', //Here you will fetch records 
                    data:new FormData(this),  
                    contentType: false,  
                    cache: false,  
                    processData:false,
                    success: function(data)
                    {
                        document.getElementById('loading_img').innerHTML = '<img src="web/assets/images/loadingpro.gif" />';

                        $('#loading_img').fadeOut(10*200);
                        document.getElementById("sucsMsg").innerHTML = data;

                            var msgE = $("#sucsMsg");
                            var img = $("#loading_img");

                        setTimeout(function() {
                            msgE.fadeOut("slow", function () {
                            msgE.empty().show();
                            });
                        }, 2500);

                        setTimeout(function() {
                            img.fadeOut("slow", function () {
                            img.empty().show();
                            });
                        }, 3000);

                        contact_us.reset();
                    }
                });
 
    });     
    
    
</script>


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
