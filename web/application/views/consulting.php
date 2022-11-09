<?php include("web/assets/include/header-c.php");?>




  <main role="main" class="consult-main">



<section class="gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <?php if($this->session->flashdata('success')){?>
              <div class="alert alert-success">      
                <?php echo $this->session->flashdata('success')?>
              </div>
            <?php } ?>
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Book your consultation</h3>
           <br>
           
           
        <form enctype="multipart/form-data" method="post" action="<?= CUSTOM_BASE_URL.'addconsulting' ?>">
          

              <div class="row">
                <div class="col-md-6 mb-4">
                    
                    
                  <div class="form-outline">
                    <span class="red-star">★</span> <label class="form-label" for="firstName">Patient First Name</label>
                    <input required type="text" name="firstname" class="form-control form-control-lg" onkeydown="return /[a-z]/i.test(event.key)"/>
                   
                  </div>


                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="lastName">Patient Last Name</label>
                    <input type="text" name="lastname" class="form-control form-control-lg" onkeydown="return /[a-z]/i.test(event.key)"/>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <span class="red-star">★</span><label class="form-label" for="phoneNumber">Date of Birth</label>
                    <input required type="date" name="dob" min="<?php echo date('1900-01-01'); ?>" max="<?php echo date('Y-m-d'); ?>" class="form-control form-control-lg date-wr-sl12" />
                  </div>

                </div>
                <div class="col-md-6 mb-4">
                 <div class="form-outline">
                 <h6 class="mb-2 pb-1"> <span class="red-star">★</span>Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="femaleGender"
                      value="female"
                      checked
                    />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="maleGender"
                      value="male"
                    />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="otherGender"
                      value="other"
                    />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>
                  
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <span class="red-star">★</span><label class="form-label" for="emailAddress">Place</label>  
                    <input required type="text"  name="place" class="form-control form-control-lg" />
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <span class="red-star">★</span><label class="form-label" for="phoneNumber">Date</label>
                    <input required type="date" name="date" id="date" min="<?php echo date('Y-m-d'); ?>" class="form-control form-control-lg date-wr-sl12" />
                  </div>

                </div>
              </div>


              <div class="row">

                <div class="col-md-6">
                   <div class="form-outline"> 
                   
                   <div>
                     <span class="red-star">★</span> <label class="form-label">Choose Doctor</label>
                   </div>
                   
                   <select name="doctor" id="doctor" class="select form-control-lg time-ag-sl12" required>
                    <option  disabled selected>Choose Doctor</option>
                    <?php foreach($doctors as $doc){ ?>

                    <option value="<?php echo $doc['id']; ?>"><?php echo $doc['name']; ?></option>

                    <?php  }  ?>
                  </select>
                  </div>
                  
                </div>

                <div class="col-md-6">
                   <div class="form-outline"> 
                   
                   <div>
                     <span class="red-star">★</span> <label class="form-label">Choose your Time slot</label>
                   </div>
                   
                   <select name="timeslot" id="timeslot" class="select form-control-lg time-ag-sl12" required>
                  </select>
                  </div>
                  
                </div>
              </div>

              <div class="row">

              <div class="col-md-6">

                  <div class="form-outline datepicker w-100">
                    <span class="red-star">★</span><label for="phone" class="form-label">Phone Number</label>  
                    <input required type="text" onkeypress="return (event.charCode >= 48 &amp;&amp; event.charCode <= 57)" minlength="10" maxlength="10" class="form-control form-control-lg" name="phone" id="phone"
                    />
                    <p style="color:orange;" class="help-block error-info" id="phoneErr"></p>
                  </div>
                 </div> 
                 </div> 

              <div class="row" id="otp_div">

                <div class="col-md-6">

                  <div class="form-outline datepicker w-100">
                    <span class="red-star">★</span><label for="otp" class="form-label">OTP</label>  
                    <input required type="text" onkeypress="return (event.charCode >= 48 &amp;&amp; event.charCode <= 57)" class="form-control form-control-lg" name="otp" id="otp"/>
                    <p style="color:orange;" class="help-block error-info" id="otpErr"></p>
                  </div>
                </div> 
              </div>   

              <p id="loadingimg"></p> 

              <div style="color:green;" id="otp_msg"></div>
                  
              <div class="mt-4 pt-2" id="verify_num">
                <input class="consul-dg-bt12" type="button" id="verifyNum" value="Verify Number" />
              </div>    

              <p style="color:orange;" class="help-block error-info" id="sign_msg_wrong_signup"></p>
              <p style="color:green;" class="help-block error-info" id="otp_msg_signup"></p>

              <div class="mt-4 pt-2" id="verify_otp">
                <input class="consul-dg-bt12" type="button" id="verifyOtp" value="Verify OTP" />
              </div> 

              <div class="mt-4 pt-2" id="submit">
                <input class="consul-dg-bt12" type="submit" value="Submit" />
              </div>

            </form>
            
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

 
 </main> 



 <?php include("web/assets/include/footer.php");?>

<script>
 
  $('#verifyNum').on('click', function (ee) {

    var status = 1;

    var phone = $('#phone').val();

   if (phone == ''  )
   {
      document.getElementById("phoneErr").innerHTML = "Number is required"; 
      status=0; 
   }
   
  
   else if(phone.length!=10){
      document.getElementById('phoneErr').innerHTML = "Invalid Number";
      status=0; 
   }
   else {
      document.getElementById('phoneErr').innerHTML = "";
   }

    ee.preventDefault();
    if(status =='1'){
    $('#loadingimg').show();
    document.getElementById('loadingimg').innerHTML = '<img src="<?php echo base_url();?>assets/images/loadingpro.gif"/>';


    $.ajax({
      type: 'post',
      url: '<?= CUSTOM_BASE_URL;?>Main/consulting_otp',
      data: 'phone=' + phone,

      success: function (data) {

        if(data==1) {
          $('#loadingimg').fadeOut();
          $('#otp_div').show();
          $('#verify_num').hide();
          $('#verify_otp').show();
            
          document.getElementById("otp_msg").innerHTML = 'Check Your Mobile and Verify OTP';   
          
          setTimeout(function() {
             $('#otp_msg').fadeOut();
            }, 8000 );
        }
          
      }

    });

  }

  });

   $('#verifyOtp').on('click', function (ee) {

    var status = 1;

    var otp = $('#otp').val();
    var phone = $('#phone').val();

   if (otp == ''  )
   {
      document.getElementById("otpErr").innerHTML = "OTP is required"; 
      status=0; 
   }
   else {
      document.getElementById('otpErr').innerHTML = "";
   }


   if (phone == ''  )
   {
      document.getElementById("phoneErr").innerHTML = "Number is required"; 
      status=0; 
   }
   else {
      document.getElementById('phoneErr').innerHTML = "";
   }

    ee.preventDefault();
    if(status =='1'){
    $('#loadingimg').show();
    document.getElementById('loadingimg').innerHTML = '<img src="<?php echo base_url();?>assets/images/loadingpro.gif"/>';


    $.ajax({
      type: 'post',
      url: '<?= CUSTOM_BASE_URL;?>Main/consulting_otp_verify',
      data: 'phone=' + phone + '&otp=' + otp,

      success: function (data) {

        if(data==1) {
          $("#phone").attr("readonly", "readonly");
          $('#loadingimg').fadeOut();
          $('#otp_div').hide();
          $('#verify_num').hide();
          $('#verify_otp').hide();
          $('#submit').show();

            
          document.getElementById("otp_msg_signup").innerHTML = 'OTP Verified';
          
          setTimeout(function() {
             $('#otp_msg_signup').fadeOut();
            }, 8000 );
          
        }

        else if(data==0) {

          document.getElementById("sign_msg_wrong_signup").innerHTML = 'Incorrect OTP';
          $('#loadingimg').fadeOut();
          setTimeout(function() {
             $('#sign_msg_wrong_signup').fadeOut();
            }, 8000 );
        }
        
        else if(data==5) {

          document.getElementById("sign_msg_wrong_signup").innerHTML = 'Time Expired... Please Try Again';
          $('#loadingimg').fadeOut();
          setTimeout(function() {
             $('#sign_msg_wrong_signup').fadeOut();
            }, 8000 );
        }

        else{

          document.getElementById("sign_msg_wrong_signup").innerHTML = '';

        } 
        }

    });

  }

  }); 


</script>
 