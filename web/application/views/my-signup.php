<?php include("web/assets/include/login-header.php");?> 

<main role="main" class="log-main">
    <div class="container-fluid">    
      <div class="row justify-content-center">
 
            
        <div class="col-lg-5 col-xl-5">
            

    <div class="my-act-modal">




  <div class="container-fluid">
   <div class="log-out14 sign-og12">
    <div class="row">
        
      <div class="col-xl-12">   
      <div class="form-group">       
          <div class="log-a-hd15">
           <h3>Sign-Up</h3>
       <!--     <h4>Log in to use your AVVVS Account</h4> -->
          </div>
          </div> 
          </div> 
        
        
    <div class="col-xl-12">   
      <div class="form-group">
      <input name="new_email" id="new_email" type="email" class="form-control log-fi12" placeholder="New E-mail ID"/>
      <p style="color:orange;margin-bottom:0;" class="help-block error-info" id="newemailErr"></p>
      </div>
    </div>


    <div class="col-xl-12"> 
     <div class="form-group">  
    <input  name="signup_otp" id="signup_otp" type="text" class="form-control log-fi12" placeholder="Enter OTP"/>
      </div>
    </div>

    <div class="col-xl-12"> 
     <div class="form-group"> 
    <p id="loadingimg_signup"></p>
     </div>
    </div>

    <div class="col-xl-12"> 
     <div class="form-group"> 
    <div style="color:green;" id="sign_msg_signup"></div>
     </div>
    </div>

    <div class="col-xl-12"> 
     <div class="form-group"> 
    <div style="color:orange;" id="sign_msg_wrong_signup"></div>
     </div>
    </div>

    <div class="col-xl-12"> 
     <div class="form-group"> 
    <div style="color:green;" id="otp_msg_signup"></div>
     </div>
    </div>

    <div class="col-xl-12"> 
     <div class="form-group">  
    <button id="signup_conitune" type="submit"  class="btn btn-primary btn-block log13">Continue</button>
     </div>
    </div>

    <div class="col-xl-12"> 
     <div class="form-group">         
    <button id="signup_verify" type="submit"  class="btn btn-primary btn-block log13">Verify</button>
     </div>
    </div>


    <div class="col-xl-12"> 
     <div class="form-group">  

    <input  name="new_name" id="new_name" type="text" class="form-control log-fi12" placeholder="Name"/> 
    <p style="color:orange;" class="help-block error-info" id="newnameErr"></p>

     </div>
    </div>

    <div class="col-xl-12"> 
     <div class="form-group">  

    <input  name="new_number" id="new_number" type="text" onkeypress="return (event.charCode >= 48 &amp;&amp; event.charCode <= 57)" minlength="10" maxlength="10" class="form-control log-fi12" placeholder="Number"/> 
    <p style="color:orange;" class="help-block error-info" id="newnumberErr"></p>

     </div>
    </div>

    <div class="col-xl-12"> 
     <div class="form-group">  

    <input  name="new_password" id="new_password" type="password" class="form-control log-fi12" placeholder="Set Password"/> 
    <p style="color:orange;" class="help-block error-info" id="newpasswordErr"></p>

     </div>
    </div>

    <div class="col-xl-12"> 
     <div class="form-group"> 
    <div style="color:green;" id="sign_msg"></div>
     </div>
    </div>

    <div class="col-xl-12"> 
     <div class="form-group"> 
    <div style="color:orange;" id="sign_msg_wrong"></div>
     </div>
    </div>

    <div class="col-xl-12"> 
     <div class="form-group">  
    <button id="new-password-login" type="submit"  class="btn btn-primary btn-block log13">SignUp</button>
     </div>
    </div>


     
    </div>
  </div>
 </div>
   
   

    
 

    </div>



   </div>
  </div>
 </div>
</main>

 <?php  include("web/assets/include/login-footer.php");?>
