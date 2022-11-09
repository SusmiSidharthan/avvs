<div class="modal fade bd-example-modal-lg" id="my-account" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content my-act-modal">
    <button type="button" class="close my-cart-close" data-dismiss="modal" aria-label="Close">
     <span class="glyph-icon flaticon-cancel"></span>
    </button>
      <div class="modal-body-my-act">
        <div class="my-act-lft">
          <div class="my-act-lft-a">  
            <h3>Log in</h3>
            <h4>Log in to use your AVVVS Account</h4>
          </div>
        </div>
        <div class="my-act-rgt">
         <div class="my-act-rgt-a">
          <div class="my-act-rgt-a-r">
           
           <h4>Mobile Number and Password to Log In</h4>
          </div>   
          <div class="my-act-rgt-a-l">
           <div class="my-act-qr">
              <input  name="mobile_number" id="mobile_number" type="text" class="form-control log-fi12" placeholder="Mobile number"/>
           <p style="color:orange;" class="help-block error-info" id="mobile_number_Err"></p>
           <input  name="password" id="password" type="password" class="form-control log-fi12" placeholder="Password"/> 
        
           <p style="color:orange;" class="help-block error-info" id="password_Err"></p>
           <div style="color:orange;" id="pass_msg"></div>
           <div style="color:orange;" id="not_exist"></div>
          <button id="password-login" type="submit"  class="btn btn-primary btn-block log13">Login</button>
          
           <div class="my-act-rgt-check">
            <input type="checkbox" id="myCheck"> <span>Keep me logged in</span>
           </div>
           </div> 
           <!--- <div class="my-act-or">Forgot</div> --->
           <a data-toggle="modal" data-target="#my-register" class="my-act-log-otp" href="#" data-dismiss="modal">New User ? SignUp</a>
          </div>

         </div> 
        </div>
      </div>
    </div>
  </div>
</div>
<!-- My account model--> 

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
           <h4>Phone Number and Password to Signup</h4>
          </div>
          <div class="my-act-rgt-a-l">
           <div class="my-act-qr">
              <input name="new_mobile_number" id="new_mobile_number" type="text" class="form-control log-fi12" placeholder="New Mobile Number"/>
           <p style="color:orange;" class="help-block error-info" id="newmobileErr"></p>
           <input  name="new_password" id="new_password" type="password" class="form-control log-fi12" placeholder="Set Password"/> 
           <p style="color:orange;" class="help-block error-info" id="newpasswordErr"></p>


          <div style="color:green;" id="sign_msg"></div>
          <div style="color:orange;" id="sign_msg_wrong"></div>

          <button id="new-password-login" type="submit"  class="btn btn-primary btn-block log13">SignUp</button>
           </div> 
          </div>

         </div> 
        </div>
      </div>
    </div>
  </div>
</div>
<!-- My account model--> 
      
      


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
            <p>© <?php echo date('Y'); ?> Aryavaidyavilasini. All Rights Reserved | Design & Technology <a href="https://www.onlister.org/" target="_blank">Onlister</a></p>
        </div>
    </footer>
     <!-- Footer -->
     
     
     

    <link href="<?php echo base_url();?>assets/css/jquery-ui.css" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
     
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.slim.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
 
    <script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
    
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 





    
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
    

    
    <script src="<?php echo base_url();?>assets/js/holder.min.js"></script>
    
       
        

    

    
    <script src="<?php echo base_url();?>assets/js/drop.js"></script>

    <!--avvvs-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/slider/active.JS"></script>
    <!--avvvs--> 
       <!-- Mobile menu -->
  <script src="<?php echo base_url();?>assets/js/mobile-menu.js"></script>
  <!-- Mobile menu -->
  <script src="<?php echo base_url();?>assets/js/dropdown.js"></script>    
    


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





 <script>

  $(function () {

  $('#password-login').on('click', function (e) {

    var mobile_number = $('#mobile_number').val();

    var password = $('#password').val();

   if (mobile_number == ''  )
   {
      document.getElementById("mobile_number_Err").innerHTML = "The field is required"; 
      status=false; 
   }
   else {
      document.getElementById('mobile_number_Err').innerHTML = "";
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
      data: 'mobile_number=' + mobile_number + '&password=' + password,

      success: function (data) {

        if(data==1) {

          location.reload();                 
        }

        else if(data==2) {

          document.getElementById("not_exist").innerHTML = 'No user Exist..please Sign Up';
   
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

 $(function () {

  $('#new-password-login').on('click', function (ee) {

    var phone = $('#new_mobile_number').val();

    var pass = $('#new_password').val();


   if (phone == ''  )
   {
      document.getElementById("newmobileErr").innerHTML = "The field is required"; 
      status=false; 
   }
   else {
      document.getElementById('newmobileErr').innerHTML = "";
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
      data: 'phone=' + phone + '&pass=' + pass,

      success: function (data) {

        if(data==1) {

          document.getElementById("sign_msg").innerHTML = 'User Sucessfully Sign In';              
        }

        if(data==2) {

          document.getElementById("sign_msg_wrong").innerHTML = 'User Already Registered';              
        }

        else{

          document.getElementById("sign_msg_wrong").innerHTML = '';

        }          
      }

    });

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

     $('#otp_div').hide();
     $('#verify_otp').hide();
     $('#submit').hide();

    });
    </script> 

 <script  type="text/javascript">
    
        $(document).ready(function(){

            $('#doctor').change(function(){ 

                var doctor_id=$(this).val();
                var date=$("#date").val();
  
                if(doctor_id !='' && date !=''){
                $.ajax({
                    url: '<?= CUSTOM_BASE_URL;?>Main/getSlotDetails',
                    method : "POST",
                    data : {doctor_id: doctor_id,date:date},
                    async : true,
                    dataType : 'json',
                    success: function(data){  
                        var html = '';
                        var i;
                        var option_list = [["", ""]].concat(data);
                        $("#timeslot").empty();
                        for(i=1; i<option_list.length; i++){

                        $("#timeslot").append(
                            $("<option></option>").attr(
                                "value", option_list[i].id).text(option_list[i].from_time+"-"+option_list[i].to_time)
                        );                            
                            
                        }
                        $('#timeslot').selectpicker('refresh');
 
                    }
                });
                }
                else{
                    alert("Choose Doctor and Date")
                }
                return false;
            }); 

        $('#date').change(function(){ 

                var date=$(this).val();
                var doctor_id=$("#doctor").val();
  
                if(doctor_id !='' && date !=''){
                $.ajax({
                    url: '<?= CUSTOM_BASE_URL;?>Main/getSlotDetails',
                    method : "POST",
                    data : {doctor_id: doctor_id,date:date},
                    async : true,
                    dataType : 'json',
                    success: function(data){  
                        var html = '';
                        var i;
                        var option_list = [["", ""]].concat(data);
                        $("#timeslot").empty();
                        for(i=1; i<option_list.length; i++){

                        $("#timeslot").append(
                            $("<option></option>").attr(
                                "value", option_list[i].id).text(option_list[i].from_time+"-"+option_list[i].to_time)
                        );                            
                            
                        }
                        $('#timeslot').selectpicker('refresh');
 
                    }
                });
                }
                else{
                    alert("Choose Doctor and Date")
                }
                return false;
            });

        });
        
        
</script>      

    <script src="<?php echo base_url();?>assets/js/jquery-1.12.4.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script> 
    
  </body>
</html>