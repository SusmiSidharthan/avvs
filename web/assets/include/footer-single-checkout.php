<!-- Footer -->
  
    <footer class="futer">
        <div class="container-fluid">
            <div class="col-md-12 col-lg-9 m-auto">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <div class="social-area">
                            <ul class="d-flex align-items-center">
                                <li><img src="<?php echo base_url();?>assets/images/footer-logo.png"></li>
                                <li>|</li>
                                <a href="https://www.facebook.com/aryavaidyavilasini"><li><i class="fa fa-facebook-square" aria-hidden="true"></i></li></a>
                                <a href="https://www.instagram.com/avvvsglobal/?hl=en"><li><i class="fa fa-instagram" aria-hidden="true"></i></li></a>
                                <a href="https://www.twitter.com/avvvsglobal"><li><i class="fa fa-twitter-square" aria-hidden="true"></i></li></a>
                                <a href="https://www.youtube.com/channel/UCVAIUt6i46hT7eY1SZksJWQ"><li><i class="fa fa-youtube-square" aria-hidden="true"></i></li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-7 align-items-center">
                        <div class="link-area">
                            <ul>
                                <li><a title="Contact" class="active-contact" href="<?= CUSTOM_BASE_URL;?>contact">Contact</a></li>
                              <!--  <li><a title="Shop" href="#">Shop</a></li>-->
                               <!-- <li><a title="News & Events"  class="active-news" href="newsandevents.php">News & Events</a></li>-->
                                <li><a title="Gallery" class="active-gallery" href="<?= CUSTOM_BASE_URL;?>gallery">Gallery</a></li>
                                <li><a title="Ayurvaram" class="active-ayurvaram" href="<?= CUSTOM_BASE_URL;?>avvvs-speciality-clinic"><img src="<?php echo base_url();?>assets/home/images/avvvs-text-black.png" style="width: 46px;vertical-align: inherit;" alt="avvvs"> Specialty Clinic</a></li>
                                <!--<li><a title="Products" class="active-product" href="<?= CUSTOM_BASE_URL;?>product-list">Stores</a></li>-->
                                <li><a title="About" class="active-about" href="<?= CUSTOM_BASE_URL;?>about">About</a></li>
                                <li><a title="Home" class="active-home" href="<?= CUSTOM_BASE_URL;?>home">Home</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-line"></div>
            <p>© 2022 Aryavaidyavilasini. All Rights Reserved | Design & Technology <a href="https://www.onlister.org/" target="_blank">Onlister</a></p>
        </div>
    </footer>



    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.slim.min.js"></script>
  <!--  <script>window.jQuery || document.write('<script src="../../js/jquery-1.12.4.js"><\/script>')</script>-->


    <script src="<?php echo base_url();?>assets/js/jquery-1.12.4.js"></script> 
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/holder.min.js"></script>

    <!--  checkout -->
    <script src='<?php echo base_url();?>assets/css/checkout/foundation.min.js'></script>
    <script src="<?php echo base_url();?>assets/css/checkout/checkout.js"></script>
    <!--  /checkout -->

    <script>
    $(document).ready(function() {
    var address_id = $('#option').val();

    var total_amount = $('#key_display').val();

    var product_id = $('#product_id').val();

    if(address_id != '' && address_id != 'undefined'){


                $.ajax({
                    url: "<?= CUSTOM_BASE_URL . 'account/getDeliveryChargeSingle' ?>",
                    type: "post",
                    data: 'address_id=' + address_id + '&product_id=' + product_id,
                    success: function (data) {

                        $('#shipping_charge').html(data);

                        $('#del').val(data);

                        var total = parseInt(total_amount) + parseInt(data);

                        $("#total_value").html("");

                        $('#total_value').html(total);

                        $('#key_display').val(total);

                    }
                });

    }

    });
    </script>


    <script src="<?php echo base_url();?>assets/js/main.js"></script>




  </body>
</html>