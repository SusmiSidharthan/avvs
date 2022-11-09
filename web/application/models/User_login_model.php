<?php

Class User_login_model extends MY_Model {

    public function __construct() {

        parent::__construct();
        $this->load->database();
    }

    var $table = 'user_registration';
  
    public function checkUserExist($phone='')
    {
        $this->db->select("user_registration.id");
        $this->db->from('user_registration');
        $this->db->where('user_registration.phone',$phone);
        $query = $this->db->get();

        if($query->num_rows() >= 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function checkOtpNumber($number,$key)
    {

        $this->db->where('mobile',$number);
        $this->db->where('key_word',$key);
        $query = $this->db->get('otp_table');

        if ($query->num_rows() > 0){

            return true;        
        }
        else{

           return false;
        }
    }
    public function insertKey($value,$mobile,$key_word,$time) { 

        $this->db->where('mobile',$mobile);
        $query = $this->db->get('otp_table');

        $update_val=array('key_word'=> $key_word,'date_exp'=>$time,'create_at'=>date("Y-m-d H:i:s"));

        if($query->num_rows()  > 0 )
        {
            $this->db->where('mobile',$mobile);
            $this->db->update('otp_table',$update_val);
            return true;
        }

       else{

         $this->db->insert('otp_table', $value);
          return true;
       }

    }

    public function insertKeyEmail($value,$email,$key_word,$time) { 

        $this->db->where('email',$email);
        $query = $this->db->get('otp_table');

        $update_val=array('key_word'=> $key_word,'date_exp'=>$time,'create_at'=>date("Y-m-d H:i:s"));

        if($query->num_rows()  > 0 )
        {
            $this->db->where('email',$email);
            $this->db->update('otp_table',$update_val);
            return 1;
        }

       else{

         $this->db->insert('otp_table', $value);
          return 1;
       }

    }


    public function checkEmailrExp($key,$email,$time)
    {

        $this->db->where('email',$email);
        $this->db->where('date_exp <=',$time);
        $query = $this->db->get('otp_table');

        if ($query->num_rows() > 0){
            return 0; 
        }
        else{
            return 1; 
        }
    }


    public function checkOtpNumberEmail($email,$key)
    {

        $this->db->where('email',$email);
        $this->db->where('key_word',$key);
        $query = $this->db->get('otp_table');

        if ($query->num_rows() > 0){

            return 1;        
        }
        else{

           return 0;
        }
    }


    public function updatePassword($value,$email)
    {

        $this->db->where('email',$email);
        $this->db->update('user_registration',$value);

        return 1; 

    }


    public function loginWithCredentials($email) //check email id and password are equal with DB email id and password.
    {

        $this->db->select('id,user_name,phone,email,location,prof_image,auth_key,status');
        $this->db->from($this->table);
        $this->db->where('email', $email);
        $this->db->where('status',1);

        $query = $this->db->get();

        return $query->row();

    }

    public function checkUserExistEmail($email='')
    {
        $this->db->select("user_registration.id");
        $this->db->from('user_registration');
        $this->db->where('user_registration.email',$email);
        $query = $this->db->get();

        if($query->num_rows() >= 1)
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }

    public function checkUserExistEmailForgot($email='')
    {
        $this->db->select("user_registration.id");
        $this->db->from('user_registration');
        $this->db->where('user_registration.email',$email);
        $query = $this->db->get();

        if($query->num_rows() >= 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }


}
