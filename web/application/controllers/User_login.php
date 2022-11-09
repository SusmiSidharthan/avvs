<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_login extends MY_Controller {

  protected $ci_name;//declare ci_name varriabe current controler name as image folder name to upload image

  public function __construct() 
  {
    parent::__construct();
    $this->ci_name = strtolower($this->router->fetch_class());
    $this->load->library('bcrypt');
    $this->load->helper('url');
    $this->load->model('User_login_model','model');
	   
  }
  
  public function index() {

    $mobile=$_POST['mobile'];

    $result = $this->model->checkUserExist($mobile);

    if(!empty($result)) {

      $rndno1=rand(10, 99);
      $rndno2=rand(88, 10);
      $key_word = urlencode($rndno1.$rndno2);
      $date = date_default_timezone_set('Asia/Kolkata');

      $create_at = date("Y-m-d H:i:s");

      $time = date("Y-m-d H:i:s",strtotime("+3 minute"));

      $value=array('key_word'=>$key_word,'mobile'=> $mobile,'create_at'=>$create_at,'date_exp'=>$time);

      $insert = $this->model->insertKey($value,$mobile,$key_word,$time);

      echo "1";

    }
    else{
       echo "0";
    }

  }

  public function check_otp() {

    $mobile=$_POST['mobile'];

    $otp=$_POST['otp'];

    $result = $this->model->checkOtpNumber($mobile,$otp);

    if(!empty($result)) {

      $res = $this->model->loginWithCredentials($mobile);

      $this->session->set_userdata('userRegister', $res);

      echo "1";

    }
    else{
       echo "0";
    }

  }

    public function login_password() {

        $email   = $_POST['email'];
    
        $password = $_POST['password'];

        if(!empty($email) && !empty($password) ) { 
    
          $hash = $this->bcrypt->hash_password($password);
    
          $res = $this->model->loginWithCredentials($email);
    
          if(!empty($res)) { 
    
            $db_password=$res->auth_key;
    
            //$db_phone=$res->phone;

            $db_email=$res->email;
    
            if (($this->bcrypt->check_password($password, $db_password)) && ($email==$db_email)) {
    
              $this->session->set_userdata('userDetails', $res);
    
              $session_data=$this->session->userdata('userDetails');
    
              echo "1";exit;
    
            }
    
            else
            {
             echo "3";exit;
    
            }
    
          }
          else{
    
            echo "2";exit;
    
          }
        }
        else{
    
          return false;
    
        }

  }

  public function logout()  //logout
  { 
    $this->session->sess_destroy();

    redirect(CUSTOM_BASE_URL);

  }
   


  public function forgot_verify() {

    $email = $_POST['email'];

    $data = $this->model->checkUserExistEmailForgot($email);

    if($data == 1) {

      $rndno1=rand(10, 99);
      $rndno2=rand(88, 10);
      $key_word = urlencode($rndno1.$rndno2);
      $date = date_default_timezone_set('Asia/Kolkata');

      $create_at = date("Y-m-d H:i:s");

      $time = date("Y-m-d H:i:s",strtotime("+5 minute"));

      

        $vars = array('key_word'=>$key_word,'email'=> $email,'create_at'=>$create_at,'date_exp'=>$time);
     
        $insert = $this->model->insertKeyEmail($vars,$email,$key_word,$date_exp);

        $this->load->config('email');
        $this->load->library('email');

        $from = $this->config->item('smtp_user');
        //$to = 'jinujose005@gmail.com';

        // $config = Array(
        // 'protocol' => 'sendmail',
        // 'mailtype' => 'html',
        // 'charset' => 'iso-8859-1'
        // );

        
        $this->email->set_newline("\r\n");
        $this->email->from($from,'Forgot Password-AVVVS');
        $this->email->to($email);
        $this->email->subject("AVVVS OTP");
        $this->email->set_mailtype("html");

        $email_body = '<!DOCTYPE html>
<html>

<head>

</head>

<body>

  <table width="100%" cellspacing="0" cellpadding="0" border="0"
    style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:auto!important;margin:0;padding:0"
    bgcolor="#f4f4f4">

    <tbody>
      <tr>


        <td style="outline:none;width:100%;margin:0;padding:0" align="left" valign="top">


          <center>


            <table width="600" align="center" cellspacing="0" cellpadding="0" border="0"
              style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:600px;min-width:600px;margin:0 auto;padding:0">

              <tbody>
                <tr>

                  <td width="600" style="outline:none;width:600px;min-width:600px;margin:0;padding:0" align="left"
                    valign="top">





                    <table cellspacing="0" cellpadding="0" border="0"
                      style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">

                      <tbody>
                        <tr>

                          <td style="outline:none;width:100%;margin:0;padding:55px 0 0" align="left" valign="top">

                            <table cellspacing="0" cellpadding="0" border="0"
                              style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">

                              <tbody>
                                <tr>


                                  <td
                                    style="outline:none;width:100%;font-size:10px;background:no-repeat center top/cover;margin:0;padding:0"
                                    align="left" bgcolor="#5268ff" valign="top">


                                    <center>

                                      <table align="center" cellspacing="0" cellpadding="0" border="0"
                                        style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:auto;margin:0 auto;padding:0">


                                        <tbody>
                                          <tr>

                                            <td height="16px"
                                              style="height:16px;outline:none;width:100%;margin:0;padding:0"
                                              align="left" valign="top"></td>

                                          </tr>


                                          <tr>

                                            <td style="outline:none;width:100%;margin:0;padding:0" align="left"
                                              valign="top">

                                              <a>

                                                <img
                                                  src="https://avvvs.com/web/assets/images/logo.png"
                                                   align="center" border="0"
                                                  width="150"
                                                  style="outline:none;display:block;height:auto;line-height:100%;text-decoration:none;width:150px;margin:0 0 20px 0;padding:0;border:none"
                                                  class="CToWUd" data-bit="iit">

                                              </a>

                                            </td>

                                          </tr>


                                          <tr>

                                            <td height="11px"
                                              style="height:11px;outline:none;width:100%;margin:0;padding:0"
                                              align="left" valign="top"></td>

                                          </tr>


                                        </tbody>
                                      </table>

                                    </center>



                                  </td>

                                </tr>

                              </tbody>
                            </table>

                          </td>

                        </tr>

                      </tbody>
                    </table>



                    <table cellspacing="0" cellpadding="0" border="0"
                      style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0"
                      bgcolor="#ffffff">

                      <tbody>
                        <tr>

                          <td style="outline:none;width:100%;margin:0;padding:0" align="left" valign="top">

                            <table cellspacing="0" cellpadding="0" border="0"
                              style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">

                              <tbody>
                                <tr>

                                  <td style="outline:none;width:100%;margin:0;padding:0" align="left" valign="top">

                                    <table cellspacing="0" cellpadding="0" border="0"
                                      style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">

                                      <tbody>
                                        <tr>

                                          <td
                                            style="outline:none;width:100%;color:#17181a;font-family:Arial,sans-serif;font-size:26px;font-style:normal;font-weight:normal;line-height:30px;word-spacing:0;margin:0;padding:60px 120px 0"
                                            align="center" valign="top">

                                            <span style="display:inline-flex">

                                              Looks like you forgot your password.Please enter this OTP for resetting your password. This OTP will expire in 3 minutes.  

                                            </span>

                                          </td>

                                        </tr>

                                        <tr>

                                          <td style="outline:none;width:100%;color:#797c7f;font-family:Arial,sans-serif;font-size:18px;font-style:normal;font-weight:normal;line-height:24px;word-spacing:0;margin:0;padding:50px 80px 0" align="left" valign="top">
                                          
                                          <p style="outline:none;margin:0;padding:0;text-align: center;"><em style="font-style:inherit;color:#17181a">Below is your one time passcode:</p>              
                                          
                                          </td>
                                          
                                          </tr>


                                        <tr>

                                          <td style="outline:none;width:100%;margin:0;padding:40px 160px 0px"
                                            align="left" valign="top">

                                            <table cellspacing="0" cellpadding="0" border="0"
                                              style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">

                                              <tbody>
                                                <tr>

                                                  <td style="outline:none;width:100%;margin:0;padding:0" align="left"
                                                    valign="top">

                                                    <a
                                                      style="background-color:#5268ff;color:#ffffff;display:block;font-family:Arial,sans-serif;font-size:24px;font-style:normal;text-align:center;text-decoration:none;word-spacing:0;border-radius:5px;padding:15px 20px"
                                                      target="_blank">



                                                      <span style="color:#ffffff">

                                                        '.$key_word.'

                                                      </span>

                                                    </a>

                                                  </td>

                                                </tr>

                                              </tbody>
                                            </table>

                                          </td>

                                        </tr>


                                        <tr>

                                          <td style="outline:none;width:100%;margin:0;padding:20px 80px 0" align="left"
                                            valign="top">

                                            <table cellspacing="0" cellpadding="0" border="0"
                                              style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">

                                              <tbody>
                                                <tr>

                                                  <td
                                                    style="outline:none;width:100%;border-bottom-width:2px;border-bottom-color:#f4f4f4;border-bottom-style:solid;font-size:1px;line-height:0;margin:0;padding:0"
                                                    align="left" valign="top">&nbsp;</td>

                                                </tr>

                                              </tbody>
                                            </table>

                                          </td>

                                        </tr>


                                      </tbody>
                                    </table>

                                  </td>

                                </tr>

                              </tbody>
                            </table>

                          </td>

                        </tr>

                      </tbody>
                    </table>



                    <table cellspacing="0" cellpadding="0" border="0"
                      style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">

                      <tbody>
                        <tr>

                          <td style="outline:none;width:100%;margin:0;padding:2px 0 75px;" align="left" valign="top">



                            <table cellspacing="0" cellpadding="0" border="0"
                              style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0"
                              bgcolor="#ffffff">

                              <tbody>
                                <tr>

                                  <td style="outline:none;width:100%;margin:0;padding:0 20px" align="left" valign="top">



                                    <table cellspacing="0" cellpadding="0" border="0"
                                      style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0 0 20px 0">

                                      <tbody>
                                        <tr>

                                          <td
                                            style="outline:none;width:100%;color:#797c7f;font-family:Arial,sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;word-spacing:0;margin:0;padding:13px 0 60px"
                                            align="center" valign="top">

                                            <p style="outline:none;margin:0;padding:0">
                                              Arya Vaidya Vilasini Vaidya Sala, Taluk Road, Puthiyara (PO), Pin: 673004, Kozhikode, Kerala
                                              </p>



                                          </td>

                                        </tr>

                                      </tbody>
                                    </table>



                                  </td>

                                </tr>

                              </tbody>
                            </table>



                          </td>

                        </tr>

                      </tbody>
                    </table>









                  </td>

                </tr>

              </tbody>
            </table>



          </center>

        </td>

      </tr>

    </tbody>
  </table>

</body>

</html>';


        
        //$body = str_replace("\n", "<br/>", $email_body);
        
        $this->email->message($email_body);

        if ($this->email->send()) 
        {
            echo '1';
        }   
        else 
        {
            show_error($this->email->print_debugger());
        }

    }
    else{
       echo "2";
    }

  }


  public function signup_verify() {

    $email = $_POST['email'];

    $data = $this->model->checkUserExistEmail($email);

    if($data == 1) {

      $rndno1=rand(10, 99);
      $rndno2=rand(88, 10);
      $key_word = urlencode($rndno1.$rndno2);
      $date = date_default_timezone_set('Asia/Kolkata');

      $create_at = date("Y-m-d H:i:s");

      $time = date("Y-m-d H:i:s",strtotime("+5 minute"));

      

        $vars = array('key_word'=>$key_word,'email'=> $email,'create_at'=>$create_at,'date_exp'=>$time);
     
        $insert = $this->model->insertKeyEmail($vars,$email,$key_word,$date_exp);

         $this->load->config('email');
        $this->load->library('email');

        $from = $this->config->item('smtp_user');

        $this->email->set_newline("\r\n");
        $this->email->from($from,'Verify Your Email-AVVVS');
        $this->email->to($email);
        $this->email->subject("Verify Your Email Address");
        $this->email->set_mailtype("html");

        $email_body = '<!DOCTYPE html>
<html>

<head>

</head>

<body>

  <table width="100%" cellspacing="0" cellpadding="0" border="0"
    style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:auto!important;margin:0;padding:0"
    bgcolor="#f4f4f4">

    <tbody>
      <tr>


        <td style="outline:none;width:100%;margin:0;padding:0" align="left" valign="top">


          <center>


            <table width="600" align="center" cellspacing="0" cellpadding="0" border="0"
              style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:600px;min-width:600px;margin:0 auto;padding:0">

              <tbody>
                <tr>

                  <td width="600" style="outline:none;width:600px;min-width:600px;margin:0;padding:0" align="left"
                    valign="top">





                    <table cellspacing="0" cellpadding="0" border="0"
                      style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">

                      <tbody>
                        <tr>

                          <td style="outline:none;width:100%;margin:0;padding:55px 0 0" align="left" valign="top">

                            <table cellspacing="0" cellpadding="0" border="0"
                              style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">

                              <tbody>
                                <tr>


                                  <td
                                    style="outline:none;width:100%;font-size:10px;background:no-repeat center top/cover;margin:0;padding:0"
                                    align="left" bgcolor="#5268ff" valign="top">


                                    <center>

                                      <table align="center" cellspacing="0" cellpadding="0" border="0"
                                        style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:auto;margin:0 auto;padding:0">


                                        <tbody>
                                          <tr>

                                            <td height="16px"
                                              style="height:16px;outline:none;width:100%;margin:0;padding:0"
                                              align="left" valign="top"></td>

                                          </tr>


                                          <tr>

                                            <td style="outline:none;width:100%;margin:0;padding:0" align="left"
                                              valign="top">

                                              <a>

                                                <img
                                                  src="https://avvvs.com/web/assets/images/logo.png"
                                                   align="center" border="0"
                                                  width="150"
                                                  style="outline:none;display:block;height:auto;line-height:100%;text-decoration:none;width:150px;margin:0 0 20px 0;padding:0;border:none"
                                                  class="CToWUd" data-bit="iit">

                                              </a>

                                            </td>

                                          </tr>


                                          <tr>

                                            <td height="11px"
                                              style="height:11px;outline:none;width:100%;margin:0;padding:0"
                                              align="left" valign="top"></td>

                                          </tr>


                                        </tbody>
                                      </table>

                                    </center>



                                  </td>

                                </tr>

                              </tbody>
                            </table>

                          </td>

                        </tr>

                      </tbody>
                    </table>



                    <table cellspacing="0" cellpadding="0" border="0"
                      style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0"
                      bgcolor="#ffffff">

                      <tbody>
                        <tr>

                          <td style="outline:none;width:100%;margin:0;padding:0" align="left" valign="top">

                            <table cellspacing="0" cellpadding="0" border="0"
                              style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">

                              <tbody>
                                <tr>

                                  <td style="outline:none;width:100%;margin:0;padding:0" align="left" valign="top">

                                    <table cellspacing="0" cellpadding="0" border="0"
                                      style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">

                                      <tbody>
                                        <tr>

                                          <td
                                            style="outline:none;width:100%;color:#17181a;font-family:Arial,sans-serif;font-size:26px;font-style:normal;font-weight:normal;line-height:30px;word-spacing:0;margin:0;padding:60px 120px 0"
                                            align="center" valign="top">

                                            <span style="display:inline-flex">

                                              Please Verify Your Account using this one time password. Please Note, this OTP will expire in 3 minutes. 

                                            </span>

                                          </td>

                                        </tr>

                                        <tr>

                                          <td style="outline:none;width:100%;color:#797c7f;font-family:Arial,sans-serif;font-size:18px;font-style:normal;font-weight:normal;line-height:24px;word-spacing:0;margin:0;padding:50px 80px 0" align="left" valign="top">
                                          
                                          <p style="outline:none;margin:0;padding:0;text-align: center;"><em style="font-style:inherit;color:#17181a">Below is your one time passcode:</p>              
                                          
                                          </td>
                                          
                                          </tr>


                                        <tr>

                                          <td style="outline:none;width:100%;margin:0;padding:40px 160px 0px"
                                            align="left" valign="top">

                                            <table cellspacing="0" cellpadding="0" border="0"
                                              style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">

                                              <tbody>
                                                <tr>

                                                  <td style="outline:none;width:100%;margin:0;padding:0" align="left"
                                                    valign="top">

                                                    <a
                                                      style="background-color:#5268ff;color:#ffffff;display:block;font-family:Arial,sans-serif;font-size:24px;font-style:normal;text-align:center;text-decoration:none;word-spacing:0;border-radius:5px;padding:15px 20px"
                                                      target="_blank">



                                                      <span style="color:#ffffff">

                                                        '.$key_word.'

                                                      </span>

                                                    </a>

                                                  </td>

                                                </tr>

                                              </tbody>
                                            </table>

                                          </td>

                                        </tr>


                                        <tr>

                                          <td style="outline:none;width:100%;margin:0;padding:20px 80px 0" align="left"
                                            valign="top">

                                            <table cellspacing="0" cellpadding="0" border="0"
                                              style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">

                                              <tbody>
                                                <tr>

                                                  <td
                                                    style="outline:none;width:100%;border-bottom-width:2px;border-bottom-color:#f4f4f4;border-bottom-style:solid;font-size:1px;line-height:0;margin:0;padding:0"
                                                    align="left" valign="top">&nbsp;</td>

                                                </tr>

                                              </tbody>
                                            </table>

                                          </td>

                                        </tr>


                                      </tbody>
                                    </table>

                                  </td>

                                </tr>

                              </tbody>
                            </table>

                          </td>

                        </tr>

                      </tbody>
                    </table>



                    <table cellspacing="0" cellpadding="0" border="0"
                      style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">

                      <tbody>
                        <tr>

                          <td style="outline:none;width:100%;margin:0;padding:2px 0 75px;" align="left" valign="top">



                            <table cellspacing="0" cellpadding="0" border="0"
                              style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0"
                              bgcolor="#ffffff">

                              <tbody>
                                <tr>

                                  <td style="outline:none;width:100%;margin:0;padding:0 20px" align="left" valign="top">



                                    <table cellspacing="0" cellpadding="0" border="0"
                                      style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0 0 20px 0">

                                      <tbody>
                                        <tr>

                                          <td
                                            style="outline:none;width:100%;color:#797c7f;font-family:Arial,sans-serif;font-size:12px;font-style:normal;font-weight:normal;line-height:24px;word-spacing:0;margin:0;padding:13px 0 60px"
                                            align="center" valign="top">

                                            <p style="outline:none;margin:0;padding:0">
                                              Arya Vaidya Vilasini Vaidya Sala, Taluk Road, Puthiyara (PO), Pin: 673004, Kozhikode, Kerala
                                              </p>



                                          </td>

                                        </tr>

                                      </tbody>
                                    </table>



                                  </td>

                                </tr>

                              </tbody>
                            </table>



                          </td>

                        </tr>

                      </tbody>
                    </table>









                  </td>

                </tr>

              </tbody>
            </table>



          </center>

        </td>

      </tr>

    </tbody>
  </table>

</body>

</html>';
        
        //$body = str_replace("\n", "<br/>", $email_body);
        
        $this->email->message($email_body);

        if ($this->email->send()) 
        {
            echo '1';
        }   
        else 
        {
            show_error($this->email->print_debugger());
        }

    }
    else{
       echo "2";
    }

  }


  public function check_otp_email() {

    $email = $_POST['email'];

    $otp = $_POST['otp'];

    $vars = array('email'=>$email,'otp'=>$otp);

    $date = date_default_timezone_set('Asia/Kolkata');

    $time = date("Y-m-d H:i:s");
     
    $expire = $this->model->checkEmailrExp($otp,$email,$time);
    
    if($expire == 1){
    
    $data = $this->model->checkOtpNumberEmail($email,$otp);
    
    }
    else{
        
    $data = 5;
        
    }

    echo $data;

  }


public function updatePassword() {

    $email = $this->input->post('email');
    $password = $this->input->post('pass');

    if(!empty($email) && !empty($password)) { 

      $hash = $this->bcrypt->hash_password($password);

      $value = array('auth_key' => $hash);

      $data = $this->model->updatePassword($value,$email);



      if($data)
      {

      echo '1';exit;

      }
      else{

      echo '2';exit;
      }

    }
    else{

      return false;
    }
      
  }


}

?>