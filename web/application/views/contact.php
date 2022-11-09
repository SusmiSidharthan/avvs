<!--<!doctype html>-->
<!--<html class="no-js" lang="en">-->

<!--<head>-->
<!--    <title>AVVVS - Contact Us</title>-->
<!--    <meta charset="utf-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge" />-->
<!--    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />-->
<!--    <meta name="author" content="">-->
<!--    <meta name="description" content="">-->

<!--    <meta name="keywords" content="">-->

<!--    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png">-->

<!--    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900&display=swap" rel="stylesheet">-->
<!--    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Roboto&display=swap" rel="stylesheet">-->
<!--    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">-->
<!--    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">-->
<!--    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/avvvs.css">-->


<!--    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slider/plugins.css">-->
<!--    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slider/style.css">-->
<!--    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slider/vendor.css">-->
<!--    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">-->




<!--</head>-->

<?php include("web/assets/include/header-c.php");?> 





    <section class="banner-inner">
        <img class="img-fluid about-banner-left-img" src="<?php echo base_url();?>assets/images/about-banner-left.png">
        <div class="container">
            <h1>AVVVS at <br>your fingertips

            </h1>
        </div>
        <img class="img-fluid banner-right-img" src="<?php echo base_url();?>assets/images/banner-right-img.png">
        <img class="img-fluid tulasi-banner" src="<?php echo base_url();?>assets/images/tulasi.png">
    </section>

    <section class="contact-intro">
        <img class="img-fluid form-bg" src="<?php echo base_url();?>assets/images/contact-rght-bg.png">
        <div class="container">
            <h4>Contact Us</h4>
            <p>You are most welcome to call mail or text AVVVS for more information</p>

            <div class="col-lg-8 m-auto">

                <div class="form-area">

                  <!--  <form method="post"   name="contactForm" id="contactForm">-->
                        
                    <!--<form enctype="multipart/form-data" method="post" action="<?= CUSTOM_BASE_URL.'contact_mail' ?>">-->
    


                   <!--  <input class="contact-input" name="name" Placeholder="Name"> -->
                  <!--  <input class="contact-input" type="text" placeholder="Name"id='name' name='name' onBlur="validate('name', this.value)">-->
                  <!--       <span class="val-msg" id="name_errors"></span>-->
                    

                  <!--   <input class="contact-input" name="name" Placeholder="Phone"> -->
                  <!--   <input class="contact-input" type="number"  min="10" step="0" placeholder="Phone" id='phone' name="phone" onBlur="validate('phone', this.value)">-->
                  <!--       <span class="val-msg" id="mobile_errors"></span>-->


                    <!-- <input class="contact-input" name="name" Placeholder="Email"> -->
                  <!--  <input class="contact-input" type="text" placeholder="Email" id='email' name="email" onBlur="validate('email', this.value)">-->
                  <!--        <span class="val-msg" id="email_errors"></span>-->



                    <!-- <textarea class="message-field" placeholder="Message"></textarea> -->
                  <!--   <textarea class="message-field" name="comment" id="comment" placeholder="Mesage" >-->
                  <!--           </textarea>-->


                    <!--<input class="mail-send"  type="submit" value="Submit" />-->

                  <!--  <button  onClick="return CheckForm()" type="button" name="submit" id="submit" class="mail-send" >Send</button>-->
                  <!--  <span class="val-msg error_contact" id="error_contact"></span>-->
                            <!--<p id="loadingimg_contact"></p>-->
                  <!--          <div id="sucsMsg_contact"></div>-->
                  <!--  </form>-->
                  
                  
                  
                  
                  
                    <form method="post"    name="contactForm" id="contactForm">

                    <input required class="contact-input" type="text" placeholder="Name"id='name' name='name' onBlur="validate('name', this.value)">
                         <span class="val-msg" id="name_errors"></span>
                    

                
                     <input required class="contact-input" onkeypress="return (event.charCode >= 48 &amp;&amp; event.charCode <= 57)" minlength="10" maxlength="10" type="text" placeholder="Phone" id='phone' name="phone" onBlur="validate('phone', this.value)">
                         <span class="val-msg" id="mobile_errors"></span>


                    <input required class="contact-input" type="text" placeholder="Email" id='email' name="email" onBlur="validate('email', this.value)">
                          <span class="val-msg" id="email_errors"></span>


                     <textarea required class="message-field" name="comment" id="comment" placeholder="Mesage" >
                             </textarea>

                    <button  onClick="return CheckForm()" type="button" name="submit" class="mail-send" >Send</button>
                    
                        
                    <span class="val-msg error_contact" id="error_contact"></span>
                            <p id="loadingimg_contact"></p>
                    <div id="sucsMsg_contact"></div>
                
                   
                  
                  
                    </form>
                    
                    
                    
                </div>

            </div>



        </div>


    </section>

    <section class="address-area">
        <img class="img-fluid value-img" src="<?php echo base_url();?>assets/images/value-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 v-aligns-contents adress-margin">
                    <div class="adress-icon"><img src="<?php echo base_url();?>assets/images/location-map.png"></div>
                    <div class="adress-text">
                        <h5>Location<br>
                            <span>Arya Vaidya Vilasini Vaidya Sala, Taluk Road, Puthiyara (PO),
                            Pin: 673004, KOzhikode, Kerala</span></h5>
                    </div>

                </div>
                <div class="col-lg-4 v-aligns-contents adress-margin">
                    <div class="adress-icon"><img src="<?php echo base_url();?>assets/images/envleop.png"></div>
                    <div class="adress-text">
                        <h5>Email<br>
                            <span>mail@avvvs.com</span></h5>
                    </div>

                </div>
                <div class="col-lg-4 v-aligns-contents adress-margin">
                    <div class="adress-icon"><img src="<?php echo base_url();?>assets/images/phone.png"></div>
                    <div class="adress-text">
                        <h5>Phone<br>
                            <span>0495 3590865, +91 8089202091</span></h5>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="g-map">
        
        <img class="img-fluid right-bg" src="<?php echo base_url();?>assets/images/classical-products-right.png">
        <div class="container">
            <h4>Where to find us</h4>
            
            <div class="map-area map-responsive">
                <div class="left-green-box"></div>
                
  
                          <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d978.2718822531408!2d75.78986372922924!3d11.254971314813046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba659443a50e52f%3A0x1e94e223625dbd11!2sArya%20Vaidya%20Vilasini%20VAIDYA%20SALA!5e0!3m2!1sen!2sin!4v1574064340762!5m2!1sen!2sin" width="1000" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                
                <div class="right-green-box"></div>
                
      
            
            </div>
        </div>
    </section>




 <?php include("web/assets/include/footernew.php");?>

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/slider/active.JS"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/slider/smoothscrolling.js"></script>
    
    <script type="text/javascript">

        function CheckForm() {
           

        var name  = document.getElementById("name").value;
        var phone = document.getElementById("phone").value;
        var email = document.getElementById("email").value;
        var comment = document.getElementById("comment").value;
        
        if (name == ''  ||  phone == ''||  email == '' )
            {
                document.getElementById("error_contact").innerHTML = "Fill All Fileds"; 
            }   
        else 
            {
                document.getElementById("error_contact").innerHTML = ""; 
                var email_Err = document.getElementById("email_errors");
                var mobile_Err = document.getElementById("mobile_errors");
                
                if (email_Err.innerText == 'Invalid email' || mobile_Err.innerText == 'Invalid Phone number') 
                {
                    document.getElementById("error_contact").innerHTML = "Fill Valid Information"; 
                } 
                else 
                {  

                    $(".submit").prop('disabled', true).val("Please wait...");
                        setTimeout(function() {
                        $(".submit").removeAttr("disabled").val("Sent");;      
                    }, 500);
                        
                 document.getElementById('loadingimg_contact').innerHTML = '<img src="<?php echo base_url();?>assets/images/loadingpro.gif" />';
                    $('#loadingimg_contact').fadeOut(10*400);
                    var jax;
                    if (window.XMLHttpRequest) { 
                    jax=new XMLHttpRequest(); 
                    }
                    else { 
                    jax=new ActiveXObject("Microsoft.XMLHTTP"); 
                    }
                    jax.onreadystatechange=function()
                    {
                        if (jax.readyState==4 && jax.status==200)
                        {
                            document.getElementById("sucsMsg_contact").innerHTML = jax.responseText;
                            var msgEl = $("#sucsMsg_contact");
                            setTimeout(function() {
                                msgEl.fadeOut("slow", function () {
                                    msgEl.empty().show();
                                });
                            }, 4500);
                            contactForm.reset();

                        }
                    }
                    // alert(comment);
                    
                      
                        jax.open("POST","<?= CUSTOM_BASE_URL.'contact_mail' ?>",true); 
                        jax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        jax.send("name="+name+"&phone="+phone+"&email="+email+"&comment="+comment);  
                 }  
            }
      }
        
    
    function validate(field, query) 
    {
        if(field== "name")
        {
            if (query == "") {
            document.getElementById("name_errors").innerHTML = "Required field";
            }
            else{
                document.getElementById("name_errors").innerHTML = "";
            }
                
        }
        
        
        else if(field== "phone")
        {
            if (query == "") {
            document.getElementById("mobile_errors").innerHTML = "Required field";
            } 
            else if (/\D/.test(query))
            {
                document.getElementById("mobile_errors").innerHTML = "Invalid Phone number";
            }
            else{
                document.getElementById("mobile_errors").innerHTML = "";
            }

        }
        else if(field== "email")
        {   
    
    
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (query == "") {
            document.getElementById("email_errors").innerHTML = "Required field";
            }       
             else if (!query.match(mailformat))
            {
            document.getElementById("email_errors").innerHTML = "Invalid email";
            
            }
            else{
                document.getElementById("email_errors").innerHTML = "";
            }
    
        }
        
        
    }

</script>


    
</body>
</html>