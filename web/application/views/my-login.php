<?php include("web/assets/include/login-header.php");?> 

<main role="main" class="log-main">
    <div class="container-fluid">    
      <div class="row justify-content-center">
 
            
        <div class="col-lg-5 col-xl-5">
            

    <div class="my-act-modal">




  <div class="container-fluid">
   <div class="log-out14">
    <div class="row">
        
      <div class="col-xl-12">   
      <div class="form-group">       
          <div class="log-a-hd15">
           <h3>Log in</h3>
           <h4>Log in to use your AVVVS Account</h4>
          </div>
          </div> 
          </div> 
        
        
    <div class="col-xl-12">   
      <div class="form-group">
      <input  name="email" id="email" type="email" class="form-control log-fi12" placeholder="E-mail ID"/>
      <p style="color:orange;" class="help-block error-info" id="email_Err"></p>
      </div>
    </div>
    
    <div class="col-xl-12">  
     <div class="form-group">
      <input  name="password" id="password" type="password" class="form-control log-fi12" placeholder="Password"/> 
      <p style="color:orange;" class="help-block error-info" id="password_Err"></p>
      <div style="color:orange;" id="pass_msg"></div>   
     </div>
    </div>
    
    <div style="color:orange;" id="pass_msg"></div>
    <div style="color:orange;" id="not_exist"></div>
     
    <div class="col-xl-12"> 
     <div class="form-group">      
      <button id="password-login" type="submit"  class="btn btn-primary btn-block log13">Login</button>
     </div>
    </div>

<!--     <div class="col-xl-12"> 
     <div class="form-group">    
      <div class="login-rgt-check16">
        <input type="checkbox" id="myCheck"> <span>Keep me logged in</span>
      </div>
     </div>
    </div> -->
    
    <div class="col-xl-12"> 
     <div class="form-group">  
    <!-- <a data-toggle="modal" data-target="#my-register" class="my-act-log-otp" href="#" data-dismiss="modal">New User ? SignUp</a></br> -->
    <a href="<?= CUSTOM_BASE_URL;?>sign-up" class="my-act-log-otp" href="#" data-dismiss="modal">New User ? SignUp</a></br>
    <a data-toggle="modal" data-target="#forgot" class="my-act-log-otp" href="#" data-dismiss="modal">Forgot Password</a>
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
