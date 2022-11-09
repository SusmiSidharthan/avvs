<!-- My Register model-->
<div class="modal fade bd-example-modal-lg" id="my-register" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content my-act-modal">
    <button type="button" class="close my-cart-close" data-dismiss="modal" aria-label="Close">
     <span class="glyph-icon flaticon-cancel"></span>
    </button>
      <div class="modal-body-my-act">
        <div class="my-act-lft my-act-lft2">
          <div class="my-act-lft-a">  
            <h3>Signup</h3>
            <h4>Signup to use your AVVVS account</h4>
          </div>
        </div>
        <div class="my-act-rgt">
         <div class="my-act-rgt-a">
          <div class="my-act-rgt-a-r">
           <h4>E-mail ID and Password to Signup</h4>
          </div>
          <div class="my-act-rgt-a-l">
           <div class="my-act-qr">
              <input name="new_email" id="new_email" type="email" class="form-control log-fi12" placeholder="New E-mail ID"/>
           <p style="color:orange;" class="help-block error-info" id="newemailErr"></p>

           <input  name="signup_otp" id="signup_otp" type="text" class="form-control log-fi12" placeholder="Enter OTP"/>

           <p id="loadingimg_signup"></p>
           
           <button id="signup_conitune" type="submit"  class="btn btn-primary btn-block log13">Continue</button>
           
           <button id="signup_verify" type="submit"  class="btn btn-primary btn-block log13">Verify</button>

           <input  name="new_password" id="new_password" type="password" class="form-control log-fi12" placeholder="Set Password"/> 
           <p style="color:orange;" class="help-block error-info" id="newpasswordErr"></p>


          <div style="color:green;" id="sign_msg"></div>
          <div style="color:orange;" id="sign_msg_wrong"></div>

          <button id="new-password-login" type="submit"  class="btn btn-primary btn-block log13">SignUp</button>

          <div style="color:green;" id="sign_msg_signup"></div>
          <div style="color:orange;" id="sign_msg_wrong_signup"></div>
          <div style="color:green;" id="otp_msg_signup"></div>

           </div> 
          </div>

         </div> 
        </div>
      </div>
    </div>
  </div>
</div>
<!-- My account model-->  
   


 <!-- Forgot model-->
<div class="modal fade bd-example-modal-lg" id="forgot" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content my-act-modal">
    <button type="button" class="close my-cart-close" data-dismiss="modal" aria-label="Close">
     <span class="glyph-icon flaticon-cancel"></span>
    </button>
      <div class="modal-body-my-act">
        <div class="my-act-lft my-act-lft2">
          <div class="my-act-lft-a">  
            <h3>Forgot</h3>
            <h4>Forgot your AVVVS Password</h4>
          </div>
        </div>
        <div class="my-act-rgt">
         <div class="my-act-rgt-a">
          <div class="my-act-rgt-a-r">
           <h4>Email</h4>
          </div>
          <div class="my-act-rgt-a-l">
           <div class="my-act-qr">
           <input name="forgot_email" id="forgot_email" type="email" class="form-control log-fi12" placeholder="Enter E-Mail"/>
           <p style="color:orange;" class="help-block error-info" id="forgotemailErr"></p>
           
           <input  name="forgot_otp" id="forgot_otp" type="text" class="form-control log-fi12" placeholder="Enter OTP"/> 
           
           <p id="loadingimg_forgot"></p>

           <button id="forgot_conitune" type="submit"  class="btn btn-primary btn-block log13">Continue</button>
           
           
           
           <button id="forgot_verify" type="submit"  class="btn btn-primary btn-block log13">Verify</button>
           
           <input  name="forgot_password" id="forgot_password" type="password" class="form-control log-fi12" placeholder="Set Password"/> 
           <p style="color:orange;" class="help-block error-info" id="forgotpasswordErr"></p>

          <button id="forgot-password-login" type="submit"  class="btn btn-primary btn-block log13">Update</button>
          
          <div style="color:green;" id="sign_msg_forgot"></div>
          <div style="color:orange;" id="sign_msg_wrong_forgot"></div>
          <div style="color:green;" id="otp_msg_forgot"></div>
          
           </div> 
          </div>

         </div> 
        </div>
      </div>
    </div>
  </div>
</div>  

 
   <!-- Footer End -->
   
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
            <p>© <?php echo date('Y'); ?> Aryavaidyavilasini. All Rights Reserved | Design & Technology <a href="https://www.onlister.org/" target="_blank">Onlister</a></p>
        </div>
    </footer>

 <!--- Footer end ---> 

 <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.slim.min.js"></script>
 <script src="<?php echo base_url();?>assets/js/jquery-1.12.4.js"></script> 

 <script>
   $('#forgot_conitune').on('click', function (ee) {

    var email = $('#forgot_email').val();


   if (email == ''  )
   {
      document.getElementById("forgotemailErr").innerHTML = "The field is required"; 
      status=false; 
   }
   else {
      document.getElementById('forgotemailErr').innerHTML = "";
   }

    ee.preventDefault();
    if(email !=''){
    $('#loadingimg_forgot').show();
    document.getElementById('loadingimg_forgot').innerHTML = '<img src="<?php echo base_url();?>assets/images/loadingpro.gif"/>';
    }

    $.ajax({
      type: 'post',
      url: '<?= CUSTOM_BASE_URL;?>User_login/forgot_verify',
      data: 'email=' + email,

      success: function (data) {

        if(data==1) {
          $('#loadingimg_forgot').fadeOut();
          $('#forgot_otp').show();
          $('#forgot_verify').show();
          $('#forgot_conitune').hide();
            
          document.getElementById("otp_msg_forgot").innerHTML = 'Check Your Email and Verify OTP';   
          
          setTimeout(function() {
             $('#otp_msg_forgot').fadeOut();
            }, 8000 );
        }

        if(data==2) {
          $('#loadingimg_forgot').fadeOut();
          document.getElementById("sign_msg_wrong_forgot").innerHTML = 'User Not Exist';        
          
          setTimeout(function() {
             $('#sign_msg_wrong_forgot').fadeOut();
            }, 8000 );
        }

        else{
          $('#loadingimg_forgot').fadeOut();
          document.getElementById("sign_msg_wrong_forgot").innerHTML = '';

        }          
      }

    });

  });


  $('#forgot_verify').on('click', function (ee) {

    var email = $('#forgot_email').val();
    var otp = $('#forgot_otp').val();


   if (email == ''  )
   {
      document.getElementById("forgotemailErr").innerHTML = "The field is required"; 
      status=false; 
   }
   else {
      document.getElementById('forgotemailErr').innerHTML = "";
   }

    ee.preventDefault();

    $.ajax({
      type: 'post',
      url: '<?= CUSTOM_BASE_URL;?>User_login/check_otp_email',
      data: 'email=' + email + '&otp=' + otp,

      success: function (data) {

        if(data==1) {
        
          $('#otp').hide();
          $('#new-verify').hide();
          $('#conitune').hide();
          $('#forgot_verify').hide();
          $('#forgot_otp').hide();
          $('#forgot-password-login').show(); 
          $('#forgot_password').show();

            
          document.getElementById("otp_msg_forgot").innerHTML = 'OTP Verified';
          
          setTimeout(function() {
             $('#otp_msg_forgot').fadeOut();
            }, 8000 );
          
        }

        else if(data==0) {

          document.getElementById("sign_msg_wrong_forgot").innerHTML = 'Incorrect OTP';
          
          setTimeout(function() {
             $('#sign_msg_wrong_forgot').fadeOut();
            }, 8000 );
        }
        
        else if(data==5) {

          document.getElementById("sign_msg_wrong_forgot").innerHTML = 'Time Expired... Please Try Again';
          
          setTimeout(function() {
             $('#sign_msg_wrong_forgot').fadeOut();
            }, 8000 );
        }

        else{

          document.getElementById("sign_msg_wrong_forgot").innerHTML = '';

        }          
      }

    });

  });

  $('#forgot-password-login').on('click', function (ee) {

    var email = $('#forgot_email').val();

    var pass = $('#forgot_password').val();


   if (email == ''  )
   {
      document.getElementById("forgotemailErr").innerHTML = "The field is required"; 
      status=false; 
   }
   else {
      document.getElementById('forgotemailErr').innerHTML = "";
   }

  if (pass == ''  )
   {
      document.getElementById("forgotpasswordErr").innerHTML = "The field is required"; 
      status=false; 
   }
   else {
      document.getElementById('forgotpasswordErr').innerHTML = "";
   }
    ee.preventDefault();

    $.ajax({
      type: 'post',
      url: '<?= CUSTOM_BASE_URL;?>User_login/updatePassword',
      data: 'email=' + email + '&pass=' + pass,

      success: function (data) {

        if(data==1) {

          document.getElementById("sign_msg_forgot").innerHTML = 'Password Sucessfully Updated...Please Sign In'; 
          
          
          
          setTimeout(function() {
             $('#sign_msg_forgot').fadeOut();
            }, 1000 );

          setTimeout(function() {
             $('#forgot').modal('hide');
            }, 1000 );

         $('#otp').hide();
         $('#new-verify').hide();

        
         $('#forgot_otp').hide();
         $('#forgot_verify').hide();
         $('#forgot_password').hide();
         $('#forgot-password-login').hide(); 
         $('#forgot_conitune').show();
         $('#forgot').find("input").val("");

          setTimeout(function() {
              $('#my-account').modal();
          }, 1000);

          // $("#my-account").modal('show');

        }

        else{

          document.getElementById("sign_msg_wron_forgot").innerHTML = '';

        }          
      }

    });

  });
  
  </script>   
  
  <script>
    $(document).ready(function(){
      $("#hide").click(function(){
        $("p").hide();
      });
      $("#show").click(function(){
        $("p").show();
      });

     // $('#new_password').hide();
     // $('#new-password-login').hide();
     
     $('#loadingimg_forgot').hide();
     $('#otp').hide();
     $('#new-verify').hide();

    
     $('#forgot_otp').hide();
     $('#forgot_verify').hide();
     $('#forgot_password').hide();
     $('#forgot-password-login').hide(); 

     $('#loadingimg_signup').hide();
     $('#signup_otp').hide();
     $('#signup_verify').hide();
     $('#new-password-login').hide(); 
     $('#new_password').hide(); 
     $('#new_name').hide();
     $('#new_number').hide();
      
    });
    </script> 

 <script>

  $(function () {

  $('#password-login').on('click', function (e) {

    var email = $('#email').val();

    var password = $('#password').val();

   if (email == ''  )
   {
      document.getElementById("email_Err").innerHTML = "The field is required"; 
      status=false; 
   }
   else {
      document.getElementById('email_Err').innerHTML = "";
   }

  if (password == ''  )
   {
      document.getElementById("password_Err").innerHTML = "The field is required"; 
      status=false; 
   }
   else {
      document.getElementById('password_Err').innerHTML = "";
   }
    e.preventDefault();

    $.ajax({
      type: 'post',
      url: '<?= CUSTOM_BASE_URL;?>User_login/login_password',
      data: 'email=' + email + '&password=' + password,

      success: function (data) {

        if(data==1) {


            
            if('<?php echo $_SESSION['url'];?>' != ''){
            window.location = '<?= CUSTOM_BASE_URL?><?php echo $_SESSION['url']?>';
            }
            else{
            window.location = '<?= CUSTOM_BASE_URL?>';
            }



          //location.reload();                 
        }

        else if(data==2) {

          document.getElementById("not_exist").innerHTML = 'No user Exist on This email.please Sign Up';
           window.setTimeout(function(){ window.location = "https://avvvs.com/sign-up"; },1000);
        
   
        }

         else if(data==3) {

          document.getElementById("pass_msg").innerHTML = 'user name or password are incorrect';

        }

        else{

          document.getElementById("pass_msg").innerHTML = '';

        }          
      }

    });

  });

 });

 </script>

 <script>

$('#signup_conitune').on('click', function (ee) {

    var email = $('#new_email').val();
    
    var status = true;


   if (email == ''  )
   {
      document.getElementById("newemailErr").innerHTML = "The field is required"; 
      status=false; 
   }
   else {
      document.getElementById('newemailErr').innerHTML = "";
   }
    
    if(status == true){
    
    ee.preventDefault();
    if(email !=''){
    $('#loadingimg_signup').show();
    document.getElementById('loadingimg_signup').innerHTML = '<img src="<?php echo base_url();?>assets/images/loadingpro.gif"/>';
    }

    $.ajax({
      type: 'post',
      url: '<?= CUSTOM_BASE_URL;?>User_login/signup_verify',
      data: 'email=' + email,

      success: function (data) {

        if(data==1) {
          $('#loadingimg_signup').fadeOut();
          $('#signup_otp').show();
          $('#signup_verify').show();
          $('#signup_conitune').hide();
            
          document.getElementById("otp_msg_signup").innerHTML = 'Check Your Email and Verify OTP';   
          
          setTimeout(function() {
             $('#otp_msg_signup').fadeOut();
            }, 8000 );
        }

        if(data==2) {
          $('#loadingimg_signup').fadeOut();
          document.getElementById("sign_msg_wrong_signup").innerHTML = 'User Already Exist';        
          
          setTimeout(function() {
             $('#sign_msg_wrong_signup').fadeOut();
            }, 8000 );
        }

        else{
          $('#loadingimg_signup').fadeOut();
          document.getElementById("sign_msg_wrong_signup").innerHTML = '';

        }          
      }

    });
    
    }

  });

  $('#signup_verify').on('click', function (ee) {

    var email = $('#new_email').val();
    var otp = $('#signup_otp').val();


   if (email == ''  )
   {
      document.getElementById("newemailErr").innerHTML = "The field is required"; 
      status=false; 
   }
   else {
      document.getElementById('newemailErr').innerHTML = "";
   }

    ee.preventDefault();

    $.ajax({
      type: 'post',
      url: '<?= CUSTOM_BASE_URL;?>User_login/check_otp_email',
      data: 'email=' + email + '&otp=' + otp,

      success: function (data) {

        if(data==1) {

          $('#new-verify').hide();
          $('#conitune').hide();
          $('#signup_verify').hide();
          $('#signup_otp').hide();
          $('#new-password-login').show(); 
          $('#new_password').show();
          $('#new_name').show();
          $('#new_number').show();

            
          document.getElementById("otp_msg_signup").innerHTML = 'OTP Verified';
          
          setTimeout(function() {
             $('#otp_msg_signup').fadeOut();
            }, 8000 );
          
        }

        else if(data==0) {

          document.getElementById("sign_msg_wrong_signup").innerHTML = 'Incorrect OTP';
          
          setTimeout(function() {
             $('#sign_msg_wrong_signup').fadeOut();
            }, 8000 );
        }
        
        else if(data==5) {

          document.getElementById("sign_msg_wrong_signup").innerHTML = 'Time Expired... Please Try Again';
          
          setTimeout(function() {
             $('#sign_msg_wrong_signup').fadeOut();
            }, 8000 );
        }

        else{

          document.getElementById("sign_msg_wrong_signup").innerHTML = '';

        }          
      }

    });

  });


 $(function () {

  $('#new-password-login').on('click', function (ee) {

    var email = $('#new_email').val();

    var pass = $('#new_password').val();

    var number = $('#new_number').val();

    var name = $('#new_name').val();


   if (email == ''  )
   {
      document.getElementById("newemailErr").innerHTML = "The field is required"; 
      status=false; 
   }
   else {
      document.getElementById('newemailErr').innerHTML = "";
   }

  if (pass == ''  )
   {
      document.getElementById("newpasswordErr").innerHTML = "The field is required"; 
      status=false; 
   }
   else {
      document.getElementById('newpasswordErr').innerHTML = "";
   }
    ee.preventDefault();

    $.ajax({
      type: 'post',
      url: '<?= CUSTOM_BASE_URL;?>User/index',
      data: 'email=' + email + '&pass=' + pass + '&number=' + number+ '&name=' + name,

      success: function (data) {

        if(data==1) {
          $('#new_email').val("");
          $('#new_password').val("");
          $('#new_name').val("");
          $('#new_number').val("");
          document.getElementById("sign_msg").innerHTML = 'User Sucessfully Registered. Please Login Using your credentials';  
          window.setTimeout(function(){ window.location = "https://avvvs.com/login"; },1000);
        }

        if(data==2) {

          document.getElementById("sign_msg_wrong").innerHTML = 'User Already Exist on this email.Please Login Using your credentials'; 
          window.setTimeout(function(){ window.location = "https://avvvs.com/login"; },1000);
        
        }

        else{

          document.getElementById("sign_msg_wrong").innerHTML = '';

        }          
      }

    });

  });

});

 </script>

<script type="text/javascript">

function fill(value) {

 $('#search').val(value);

 //Hiding "display" div in "search.php" file.

 $('#key_display').hide();

 if (value) {

  document.search.submit();

  }

}

 $(document).ready(function() {

     $("#search").keyup(function() {
    
         var name = $('#search').val();
  
         if (name == "") {
    
             $("#key_display").html("");
   
         }
    
         else {
    
             $.ajax({
    
                 type: "POST",
   
                 url: '<?= CUSTOM_BASE_URL;?>Main/list_item',
     
                 data: {
    
                     search: name
   
                 },
    
                 success: function(html) {
  
                     $("#key_display").html(html).show();
   
                 }
   
             });
   
         }
   
     });

 });

$(document).on('click', function (e) {
  
  if ($(e.target).closest("#key_display").length === 0) {
      $("#key_display").hide();
  }
  
});
</script>


    <script>
    $(document).ready(function(){
      $("#hide").click(function(){
        $("p").hide();
      });
      $("#show").click(function(){
        $("p").show();
      });
    });
    </script>

    <!-- Mobile menu -->
    <script src="<?php echo base_url();?>assets/js/mobile-menu.js"></script>
    <!-- Mobile menu -->
    <script src="<?php echo base_url();?>assets/js/dropdown.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
    <link href="<?php echo base_url();?>assets/css/jquery-ui.css" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
    <script src="<?php echo base_url();?>assets/js/holder.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/drop.js"></script>   


<script type="text/javascript">

$( ".outer" ).mouseover(function() {

  var rowid = $(this).attr('sectionId');

   $.ajax({
        type: 'post',
        url: '<?= CUSTOM_BASE_URL . 'Main/get_sub_category' ?>', //Here you will fetch records 
        data: 'rowid=' + rowid, //Pass $id
        success: function (data) {

           $("#output_"+rowid).html(data);

        }
  });

});

</script>
         

      
<script>

    jQuery(".dropdown-item").click(function(e){
    //do something
    var location = $(this).attr('sectionId');
    
       $.ajax({
          
           type: "POST",
    
           url: '<?= CUSTOM_BASE_URL;?>Main/change_location',
    
           data: {
    
               location: location
    
           },
    
           success: function(html) {
    
            if(html=='1')
            {
    
              window.location.reload(html);
    
            }                 
    
           }
    
       });
    
    });

</script>


<script>
$(function() {
    var header = $(".clearHeader");
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 80) {
            header.removeClass('clearHeader').addClass("darkHeader");
        } else {
            header.removeClass("darkHeader").addClass('clearHeader');
        }
    });
});  
</script>




 
  </body>
</html>