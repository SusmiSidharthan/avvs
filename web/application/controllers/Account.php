<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    require_once(APPPATH.'libraries/razorpay-php/Razorpay.php');

    use Razorpay\Api\Api;
    use Razorpay\Api\Errors\SignatureVerificationError;

class Account extends MY_Controller {

	protected $ci_name;//declare ci_name varriabe current controler name as image folder name to upload image

    public function __construct() 
    {
	    parent::__construct();
	    $this->ci_name = strtolower($this->router->fetch_class());
	    $this->load->model('Account_model','model');
	    
	   // $this->load->library('Image');
	    
        if (!$this->is_logged_in()) //login only registered user from db
        { 
            redirect(CUSTOM_BASE_URL.'login');
        }
        

	   
    }
  
    public function index() {
        
        $data['main_category'] = $this->model->getMainCategorys();

        //$data['cat_list'] = $this->model->getSubCategoryData();

        $data['cart_count'] = $this->model->getCartCount($this->userDetails->id);

        $data['result'] = $this->model->getProfileData($this->userDetails->id);

        $data['list'] = $this->model->getOfferCategory();

        $this->load->view('my-profile',$data);

    }

 
    public function profileimage() {
        
        $data['main_category'] = $this->model->getMainCategorys();

        //$data['cat_list'] = $this->model->getSubCategoryData();

        $data['cart_count'] = $this->model->getCartCount($this->userDetails->id);

        $data['result'] = $this->model->getProfileData($this->userDetails->id);

        $data['list'] = $this->model->getOfferCategory();

        $this->load->view('profileimage',$data);

    }
    
    
     public function saveprofileimage() {
         
         
         if(isset($_FILES['image'])){
					$errors= array();
					$file_name = $_FILES['image']['name'];
					$file_size = $_FILES['image']['size'];
					$file_tmp = $_FILES['image']['tmp_name'];
					$file_type = $_FILES['image']['type'];
					$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
					
					$extensions= array("jpeg","jpg","png");
					
					if(in_array($file_ext,$extensions)=== false){
					   $errors[]="extension not allowed, please choose a JPEG or PNG file.";
					}
					
					if($file_size > 2097152) {
					   $errors[]='File size must be excately 2 MB';
					}
					
					if(empty($errors)==true) {
						$image = $file_name. date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';
						
				// 		move_uploaded_file($file_tmp, "admin/uploads/userprofile/".$image);
						
							move_uploaded_file($file_tmp, "./uploads/".$image);
							
				// 		move_uploaded_file($file_tmp, "https://avvvs.com/admin/uploads/userprofile/".$image);
					}
				}     

                 $id = $this->userDetails->id ;

                $this->model->userImageUpdate($image,$id);
          redirect(CUSTOM_BASE_URL.'my-profile');

        
    

        //     if($_FILES["profile_image"]['name']=='')            
        //     {
        //       $data['message'] = "please choose an image"; 
        //       redirect(CUSTOM_BASE_URL.'profileimage',$data);
        //     }
        //   else
        //   {
        
        //   $image_file=$_FILES['profile_image']['name']; 
        //   $expImage=explode('.',$image_file);
        //   $Imageexptype=$expImage[1];
        //   date_default_timezone_set('Australia/Melbourne');
        //   $date = date('m/d/Yh:i:sa', time());
        //   $rand=rand(10000,99999);
        //   $encname=$date.$rand;
        //   $ImageName=md5($encname).'.'.$Imageexptype;
          
        //   $Imagepath="admin/uploads/userprofile/".$ImageName;
        //   move_uploaded_file($_FILES["profile_image"]["tmp_name"],$Imagepath);
        
        //   $this->model->userImageUpdate($ImageName,$this->userDetails->id);
        //   redirect(CUSTOM_BASE_URL.'my-profile');
        
        //   }

    }
    
    
    


     public function profile_update() {

        $username   =$_POST['user_name'];

        $email   =$_POST['email'];

        $mobile   =$_POST['mobile'];

        $value = array('user_name' => $username , 'email' => $email , 'phone' => $mobile );

        $res = $this->model->updateProfile($this->userDetails->id,$value);

        redirect(CUSTOM_BASE_URL.'account');
        
    }


    public function order() {

        //$data['cat_list'] = $this->model->getSubCategoryData();
        
        $data['main_category'] = $this->model->getMainCategorys();

        $data['cart_count'] = $this->model->getCartCount($this->userDetails->id);

        $data['list'] = $this->model->getOfferCategory();

        $data['result'] = $this->model->getMyorderData($this->userDetails->id);
        
       // $data['profile'] = $this->model->getSelfProfileData($this->userDetails->id);
        $data['profile'] =  $this->model->getProfileData($this->userDetails->id);

        $this->load->view('my-order',$data);
    }
    
    
    public function my_appoinment() {

        //$data['cat_list'] = $this->model->getSubCategoryData();
        
        $data['main_category'] = $this->model->getMainCategorys();

        $data['cart_count'] = $this->model->getCartCount($this->userDetails->id);

        $data['list'] = $this->model->getOfferCategory();

        $data['result'] = $this->model->getMyAppoinmentData($this->userDetails->id);
        
       // $data['profile'] = $this->model->getSelfProfileData($this->userDetails->id);
        $data['profile'] =  $this->model->getProfileData($this->userDetails->id);

        $this->load->view('my-appoinment',$data);
    }





    public function product_rating() {

        $rate   =$_POST['rate'];

        $message   =$_POST['message'];

        $stock_id   =$_POST['stock_id'];

        $value = array('rating_score' => $rate , 'review' => $message,'stock_id' => $stock_id,'user_id' => $this->userDetails->id );

        $res = $this->model->insertRatingData($this->userDetails->id,$value);

        redirect(CUSTOM_BASE_URL.'my-order');
        
    }


    public function product_cancel() {


        $message   =$_POST['message'];

        $order_id   =$_POST['order_id'];

        $value = array('order_id'=>$order_id,'message'=>$message);
        
        $this->model->insertCancel($value,$order_id);

        redirect(CUSTOM_BASE_URL.'my-order');
        
    }

    public function wish_list() {
        
        //$data['cat_list'] = $this->model->getSubCategoryData();
        
        $data['main_category'] = $this->model->getMainCategorys();

        $data['cart_count'] = $this->model->getCartCount($this->userDetails->id);

        $data['list'] = $this->model->getOfferCategory();

        $data['result'] = $this->model->getWishListData($this->userDetails->id);
        
        $data['profile'] = $this->model->getProfileData($this->userDetails->id);

        $this->load->view('my-wishlist',$data);

        
    }


   
    

    public function view_cart() {
        
        $data['cat_list'] = $this->model->getSubCategoryData();
        
        $data['main_category'] = $this->model->getMainCategorys();
        
        $data['list'] = $this->model->getOfferCategory();

        $data['cart_count'] = $this->model->getCartCount($this->userDetails->id);

        //$data['result'] = $this->model->getCartProductUserWise($this->userDetails->id);
        
        $data['result'] = $this->model->getAllCartDataByUser($this->userDetails->id);

        //$data['pincode'] = $this->model->getUserPincode($this->userDetails->id);
        
        //$delivery = $this->model->getDeliveryCharge();
        //$data['del'] = $delivery;  
        //print_r($data['result']);exit;
       //if($data['result'][0]['total'] < 500 ){
           
        $data['charge'] = 0;   
           
       // }
       // else{
           
       //     $data['charge'] = 0;
       // }
        

        $data['del'] = 0;  

        $this->load->view('cart',$data);
    }


    public function add_to_cart() {

        //$data['cat_list'] = $this->model->getSubCategoryData();
        
        $data['main_category'] = $this->model->getMainCategorys();

        $id = $this->uri->segment(2);
        
       // $qty = 1;
       $qty = $this->uri->segment(3);

        $this->model->insertAddToCart($this->userDetails->id,$id,$qty);

        redirect(CUSTOM_BASE_URL.'view-cart');
        
    }
    
   public function remove_cart_list() {

        $id = $_POST['id'];

        $this->model->removeCartList($id,$this->userDetails->id);

        $res = $this->model->getCartCount($this->userDetails->id);

        echo $res;

    }
    
    public function offer_order_placed() {

        $cartOrder  = array();
        
        $cartOrder['user_id']     = $this->userDetails->id;
        $cartOrder['total_amt']   = $this->input->post('gross_total');
        $cartOrder['address_id']  = $this->input->post('address_id');
        $cartOrder['deal_id']    = $this->input->post('offer_id');
        $cartOrder['type']    = 1;

        $qty = $this->input->post('stock_qty');
        $stock_id = $this->input->post('stock_id');
        $sub_total = $this->input->post('sub_total');
        
        $res = $this->model->insertCartOfferOrder($cartOrder,$qty,$stock_id,$sub_total);
        
        $orckratt = base64_encode($res .SALT_KEY.CKRAT_KEY);

        $kekrat = base64_encode(ORDER_KEY);

        redirect(CUSTOM_BASE_URL.'order_sucess/'.$orckratt.'/'.$kekrat);

    }
    
    
    
    

    public function order_placed() {
        
      $addressdata = $this->model->getDeliveryAddressId($this->userDetails->id);
      
      if(!empty($addressdata)) {

        $cartOrder  = array();
        
        $cartOrder['user_id']  = $this->userDetails->id;
        $cartOrder['total_amt']  = $this->input->post('gross_total');
         
        $cartOrder['address_id']  = $this->model->getDeliveryAddressId($this->userDetails->id);

        $cartOrder['status']  = 55;
        
        $qty = $this->input->post('stock_qty');
        $stock_id = $this->input->post('stock_id');
        $sub_total = $this->input->post('sub_total');
        $payment_metod = $this->input->post('payment_metod');
        $delivery_charge = $this->input->post('del');

        $total_amt = $this->input->post('gross_total');


        $total = $total_amt - $delivery_charge;

        $cartOrder['total'] = $total; 

        $cartOrder['delivery_charge'] = $delivery_charge;   
        
        $res = $this->model->insertCartOrder($cartOrder,$qty,$stock_id,$sub_total);
        
        if($payment_metod == 2){
            

        $keyId = 'rzp_live_2ef3XsXgniMpag';
        $keySecret = 'aXhxDHzLY07NSjP7KHrWIHoL';

        $tot = $total_amt;

        $api = new Api($keyId, $keySecret);

            $_SESSION['payable_amount'] = $tot;

            
            $razorpayOrder = $api->order->create(array(
              'receipt'         => rand(),
              'amount'          => $_SESSION['payable_amount'] * 100, // 2000 rupees in paise
              'currency'        => 'INR',
              'payment_capture' => 1 // auto capture
            ));
            
           
            $amount = $razorpayOrder['amount'];
            $razorpayOrderId = $razorpayOrder['id'];
            $_SESSION['razorpay_order_id'] = $razorpayOrderId;
            
            $orckratt = base64_encode($res .SALT_KEY.CKRAT_KEY);
            
            $data['details'] = $this->prepareData($amount,$razorpayOrderId);
            
            $data['payment'] = array('insert_id'=>$orckratt,'payment_method'=>$payment_metod);

            $this->load->view('rezorpay',$data);          
            
            
        }
        else{
        
        $this->model->updateCartOrderSub($res);
        
        $orckratt = base64_encode($res .SALT_KEY.CKRAT_KEY);

        $kekrat = base64_encode(ORDER_KEY);

        redirect(CUSTOM_BASE_URL.'order_sucess/'.$orckratt.'/'.$kekrat);
        }
        
      }
      else{


        $product_id  =$_POST['product_id'];
        
        $cript =  base64_encode($product_id.SALT_KEY.CKRAT_KEY); 
        
        $this->session->set_flashdata('address_msg', "Please add or select your Delivery address !...");
			
        redirect(CUSTOM_BASE_URL.'buy-now/'.$cript);
        
      }

    }
    
    
    public function prepareData($amount,$razorpayOrderId)
      {
        
        $keyId = 'rzp_live_2ef3XsXgniMpag';  
          
        $data = array(
          "key" => $keyId,
          "amount" => $amount,
          "name" => "AVVVS",
          "description" => "AVVVS",
          "image" => "https://avvvs.com/web/assets/images/logo.png",
          "prefill" => array(
            "name"  => $this->input->post('name'),
            "email"  => $this->input->post('email'),
            "contact" => $this->input->post('contact'),
          ),
          "notes"  => array(
            "address"  => "AVVVS",
            "merchant_order_id" => rand(),
          ),
          "theme"  => array(
            "color"  => "#F37254"
          ),
          "order_id" => $razorpayOrderId,
        );
        return $data;
      }
   
    public function verify()
      {
        

        
        $keyId = 'rzp_live_2ef3XsXgniMpag';
        $keySecret = 'aXhxDHzLY07NSjP7KHrWIHoL';
          
        $success = true;
        $error = "payment_failed";
        if (empty($_POST['razorpay_payment_id']) === false) {
          $api = new Api($keyId, $keySecret);
        try {
            $attributes = array(
              'razorpay_order_id' => $_SESSION['razorpay_order_id'],
              'razorpay_payment_id' => $_POST['razorpay_payment_id'],
              'razorpay_signature' => $_POST['razorpay_signature']
            );
            $api->utility->verifyPaymentSignature($attributes);
          } catch(SignatureVerificationError $e) {
            $success = false;
            $error = 'Razorpay_Error : ' . $e->getMessage();
          }
        }
        if ($success === true) {
          /**
           * Call this function from where ever you want
           * to save save data before of after the payment
           */
          
           $this->model->removeProductCart($this->userDetails->id);
           $payment_method = $this->input->post('payment_method');
           $insert_id = $this->input->post('insert_id');
           
           
            $decrypted_id = base64_decode($insert_id);

            $id = preg_replace(sprintf('/%s/', SALT_KEY.CKRAT_KEY), '', $decrypted_id);
            
            $dat = array('order_id'=>$_SESSION['razorpay_order_id'],'payment_id'=>$_POST['razorpay_payment_id'],'payment_method'=>$payment_method);
            
            $this->model->updateCartOrder($id,$dat);

            $this->model->updateCartOrderSub($id);
           
          

           $kekrat = base64_encode(ORDER_KEY);

        redirect(CUSTOM_BASE_URL.'order_sucess/'.$insert_id.'/'.$kekrat);

          
          //redirect(CUSTOM_BASE_URL.'success');
          
        }
        else {

       
          redirect(CUSTOM_BASE_URL.'order-failed');
          
        }
      }
    
    
    

    public function cart_order_placed() {
        
    $addressdata = $this->model->getDeliveryAddressId($this->userDetails->id);
      
      if(!empty($addressdata)) {
    
        $cartOrder  = array();

        $stock_id = $this->input->post('stock_id');

        $cartOrder['user_id']  = $this->userDetails->id;
        $cartOrder['total_amt']  = $this->input->post('gross_total');
        $cartOrder['address_id']  = $this->model->getDeliveryAddressId($this->userDetails->id);
        $delivery_charge = $this->input->post('del');

        $total_amt = $this->input->post('gross_total');

        $total = $total_amt - $delivery_charge;

        $cartOrder['total'] = $total; 

        $cartOrder['delivery_charge'] = $delivery_charge;       

        $cartOrder['status'] = 55;    

        
        $qty = $this->input->post('stock_qty');
        $stock_id = $this->input->post('stock_id');
        $sub_total = $this->input->post('sub_total');
        $payment_metod = $this->input->post('payment_metod');

        $res = $this->model->insertAddCartOrder($cartOrder,$qty,$stock_id,$sub_total);

        $data['cart_list'] = $this->model->getCartOrderData($res);

        //$this->model->removeProductCart($this->userDetails->id);
        
        
        
        if($payment_metod == 2){
            
        // $i = 0;    
        // foreach($sub_total as $val){
            
        //     $tot += $val;
            
        //     $i++;
        // } 


         

        $tot = $total_amt;
           

        $keyId = 'rzp_live_2ef3XsXgniMpag';
        $keySecret = 'aXhxDHzLY07NSjP7KHrWIHoL';


        $api = new Api($keyId, $keySecret);

            $_SESSION['payable_amount'] = $tot;

            
            $razorpayOrder = $api->order->create(array(
              'receipt'         => rand(),
              'amount'          => $_SESSION['payable_amount'] * 100, // 2000 rupees in paise
              'currency'        => 'INR',
              'payment_capture' => 1 // auto capture
            ));
            
           
            $amount = $razorpayOrder['amount'];
            $razorpayOrderId = $razorpayOrder['id'];
            $_SESSION['razorpay_order_id'] = $razorpayOrderId;
            
            $orckratt = base64_encode($res .SALT_KEY.CKRAT_KEY);
            
            $data['details'] = $this->prepareData($amount,$razorpayOrderId);
            
            $data['payment'] = array('insert_id'=>$orckratt,'payment_method'=>$payment_metod);

            $this->load->view('rezorpay',$data);          
            
            
        }
        else{
        
        $this->model->removeProductCart($this->userDetails->id);

        $this->model->updateCartOrderSub($res);

        $orckratt = base64_encode($res .SALT_KEY.CKRAT_KEY);

        $kekrat = base64_encode(ORDER_KEY);

        redirect(CUSTOM_BASE_URL.'order_sucess/'.$orckratt.'/'.$kekrat);
        }
        
      }
      else{
          
           $this->session->set_flashdata('address_msg', "Please add or select your Delivery address !...");
           redirect(CUSTOM_BASE_URL.'checkout');
      }

    }
    
    public function order_sucess($encrypted_id='',$string='') {
        
        $decrypted_id = base64_decode($encrypted_id);

        $id = preg_replace(sprintf('/%s/', SALT_KEY.CKRAT_KEY), '', $decrypted_id);

        $data['main_category'] = $this->model->getMainCategorys();

        $data['cart_count'] = $this->model->getCartCount($this->userDetails->id);

        $data['list'] = $this->model->getOfferCategory();

        $data['cart_list'] = $this->model->getCartOrderData($id);


        $phone = $data['cart_list'][0]['address'][0]['phone'];

        $firstname = $data['cart_list'][0]['address'][0]['name'];

        $email = $this->model->getUserEmail($this->userDetails->id);

        $date = date('d-m-Y');

        $orderno = $id;



        $msg='Arya Vaidya Vilasini Vaidya Sala Online Medicine Orders Department.
            Thank you for choosing us.
            Hello  '.$firstname.', Your booking for medicine has been successful on '.$date.'. Please note 
            Order No : '.$orderno.'
            Please Contact for any assistance : 8089202091';
            $emsg=rawurlencode($msg);
                        
            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://2factor.in/API/R1/',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS => 'module=TRANS_SMS&apikey=25f26261-09f6-11eb-9fa5-0200cd936042&to=91'.$phone.'&from=AVVVSC&msg='.$emsg,
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            echo $response;



        $msg='Arya Vaidya Vilasini Vaidya Sala Online Medicine Orders Department.
A booking for medicine has been successful on #VAR1#. Please note
Order No : '.$orderno.'
User Name : '.$firstname.'
Email : '.$email.'
Mobile : '.$phone.'';
            $emsg=rawurlencode($msg);
                        
            $curl = curl_init();
//8089202091
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://2factor.in/API/R1/',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS => 'module=TRANS_SMS&apikey=25f26261-09f6-11eb-9fa5-0200cd936042&to=918089202091&from=AVVVSC&msg='.$emsg,
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            //echo $response;

        $this->load->view('order-placed',$data);
    }

    public function order_failed() {
        
        // $decrypted_id = base64_decode($encrypted_id);

        // $id = preg_replace(sprintf('/%s/', SALT_KEY.CKRAT_KEY), '', $decrypted_id);

        $data['main_category'] = $this->model->getMainCategorys();

        $data['cart_count'] = $this->model->getCartCount($this->userDetails->id);

        $data['list'] = $this->model->getOfferCategory();

        $data['cart_list'] = $this->model->getCartOrderData(47);

        $this->load->view('order_failed',$data);
    }

    public function buy_now() {

        $encrypted_id = $this->uri->segment(2);
        
        $decrypted_id = base64_decode($encrypted_id);

        $id = preg_replace(sprintf('/%s/', SALT_KEY.CKRAT_KEY), '', $decrypted_id);
        
        $data['product_id'] = $id ;

        $data['address'] = $this->model->getUserAddress($this->userDetails->id);

        $data['product'] = $this->model->getProductData($id);

        $this->load->view('single-checkout',$data);
    }
    
    public function offer_buy_now() {

        $id = $this->uri->segment(2);

        $data['address'] = $this->model->getUserAddress($this->userDetails->id);

        $data['offer'] = $this->model->getOfferDetailsData($id);
        
        $this->load->view('offer-checkout',$data);
    }

    public function checkout() {

        $data['address'] = $this->model->getUserAddress($this->userDetails->id);
        
        $data['product'] = $this->model->getAllCartDataByUser($this->userDetails->id);

        //$delivery = $this->model->getDeliveryCharge();

        $delivery = 0;

        $data['del'] = $delivery;  

        //if($data['product'][0]['sub_total'] < 500 ){
           
        $data['charge'] = $delivery;   
           
       // }
       // else{
           
       //     $data['charge'] = 0;
       // }

        $this->load->view('checkout',$data);
    }
    
    public function addtowishlist() {

        $WishListData  = array();

        $WishListData['user_id']  = $this->userDetails->id;
        $WishListData['stock_id']  = $_POST['rowid'];
        $WishListData['status']  = $_POST['status'];

        $res = $this->model->insertMoveToWishList($WishListData);

        if($res)
        {
            echo "1";

        }
        else{
            echo "0";
        }
        
    }
    
    public function remove_wish_list() {

        $id = $_POST['id'];

        $res = $this->model->removeWishList($id,$this->userDetails->id);

    }
    
    public function profile_upload_process()
    {

        if($_FILES['images']['name']) {

            if (!is_dir('admin/uploads/profile'))
            {
                mkdir('admin/uploads/profile/', 0755, TRUE);
            }

            $number_of_files_uploaded = count($_FILES['images']['name']);

            for ($i = 0; $i < $number_of_files_uploaded; $i++) :

                $_FILES['userfile']['name']     = $_FILES['images']['name'][$i];
                $_FILES['userfile']['type']     = $_FILES['images']['type'][$i];
                $_FILES['userfile']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                $_FILES['userfile']['error']    = $_FILES['images']['error'][$i];
                $_FILES['userfile']['size']     = $_FILES['images']['size'][$i];
                $config = array(
                'allowed_types' => 'jpg|jpeg|png|gif',
                'max_size'      => 300000,
                'overwrite'     => FALSE,
                'upload_path'   => 'admin/uploads/profile/',
                'encrypt_name'  => TRUE,
                'remove_spaces' =>  TRUE,
                );
                $this->upload->initialize($config);
                if ( ! $this->upload->do_upload()) :
                $error = array('error' => $this->upload->display_errors());
                else :
                $data = $this->upload->data();
                // Continue processing the uploaded data
                $multi_images[] = $data['file_name'];

                $this->load->library('upload', $config);

                $file_name = $data['file_name'];  
                $params['gambar'] = $file_name;
                $this->load->library('image_lib');
                $config['image_library'] = 'gd2';
                $config['source_image'] = 'admin/uploads/profile/'.$file_name;
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['width']     = 400;
                $config['height']   = 400;
                $config['new_image']        = 'admin/uploads/profile/' .$file_name;

                $this->image_lib->clear();
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                    endif;

                endfor;
            }
            else{

                $multi_images[] = "";

            }

        $result = $this->model->updateImageUserprofile($this->userDetails->id,$multi_images);

    }
    
    public function add_cart_order() {

        $quantity = $_POST['quantity'];
        $stock_id = $_POST['stock_id'];
        $data['profile'] = $this->model->getSelfProfileData($this->userDetails->id);

        $this->model->insertAddToCart($this->userDetails->id,$stock_id,$quantity);
    }


 public function manage_address() {

        //$data['cat_list'] = $this->model->getSubCategoryData();
        
        $data['main_category'] = $this->model->getMainCategorys();

        $data['cart_count'] = $this->model->getCartCount($this->userDetails->id);

        $data['list'] = $this->model->getOfferCategory();

        $data['result'] = $this->model->getDeliveryAddressData($this->userDetails->id);
        
        $data['profile'] = $this->model->getProfileData($this->userDetails->id);

        $this->load->view('manage-address',$data);
    }
    
    



    public function delivery_address_add() {

        $addressdata = $this->model->getUserAddress($this->userDetails->id);
        
        $name   =$_POST['name'];
        $mobile   =$_POST['mobile'];
        $alter_phone   =$_POST['alter_phone'];
        $address   =$_POST['address'];
        $land_mark   =$_POST['land_mark'];
        $pincode   =$_POST['pincode'];

        if(count($addressdata) == 0){
        $value = array('name' => $name , 'pincode' => $pincode, 'address' => $address, 'land_mark' => $land_mark, 'phone' => $mobile, 'alter_phone' => $alter_phone, 'user_id' => $this->userDetails->id,'status'=>1 );
        }else{
        $value = array('name' => $name , 'pincode' => $pincode, 'address' => $address, 'land_mark' => $land_mark, 'phone' => $mobile, 'alter_phone' => $alter_phone, 'user_id' => $this->userDetails->id );
        }

        $res = $this->model->insertDeliveryAddress($value);

        redirect(CUSTOM_BASE_URL.'manage-address');
    }
    
    
    public function delivery_address_edit() {
        
        $id = $this->uri->segment(3);
        $res = $this->model->getDeliveryAddress($id,$this->userDetails->id);
        $data['editaddress'] =$res ;
         
        
        $data['main_category'] = $this->model->getMainCategorys();

        $data['cart_count'] = $this->model->getCartCount($this->userDetails->id);

        $data['list'] = $this->model->getOfferCategory();

        $data['result'] = $this->model->getDeliveryAddressData($this->userDetails->id);
        
        $data['profile'] = $this->model->getProfileData($this->userDetails->id);

        $this->load->view('edit_delivery_address',$data);
        
      
    }
    
    public function delivery_address_update() {
    
        $id  =$_POST['id'];
        $name   =$_POST['name'];
        $mobile   =$_POST['mobile'];
        $alter_phone   =$_POST['alter_phone'];
        $address   =$_POST['address'];
        $land_mark   =$_POST['land_mark'];
        $pincode   =$_POST['pincode'];


        $value = array('name' => $name , 'pincode' => $pincode, 'address' => $address, 'land_mark' => $land_mark, 'phone' => $mobile, 'alter_phone' => $alter_phone, 'user_id' => $this->userDetails->id );

        $res = $this->model->updatetDeliveryAddress($id,$value,$this->userDetails->id);

        redirect(CUSTOM_BASE_URL.'manage-address');
    }
    
    
    public function changeDeliveryAddressStatus(){
        
        $id=$_POST['id'];

          $allAddress = $this->model->getDeliveryAddressData($this->userDetails->id);
          foreach ($allAddress as $row) {
              


              if( $row['id'] == $id ){

                   $pin_status = $this->model->checkPincode($row['id']); 

                   if($pin_status == 1){

                    $value = array('status' => 1 );
                    $res = $this->model->updatetDeliveryAddress($row['id'],$value,$this->userDetails->id);

                    $stat = 1;

                    }
                    else {

                    $value = array('status' => 0 );
                    $res = $this->model->updatetDeliveryAddress($row['id'],$value,$this->userDetails->id);

                    $stat = 0;

                    }
              }else{
                    $value = array('status' => 0 );
                   $res = $this->model->updatetDeliveryAddress($row['id'],$value,$this->userDetails->id);

                   $stat = 0;
              }
          }
          
          echo $stat;
         
    }
    

    public function deleteAddress() {
        
            $id=$_POST['rowid'];
		  
			$this->model->delete_address($id,$this->userDetails->id);
          
	         redirect(CUSTOM_BASE_URL.'manage-address');

    }
    
    
    public function deleteCheckoutAddress() {
        
            $id=$_POST['rowid'];
		  
			$this->model->delete_address($id,$this->userDetails->id);
          
	         redirect(CUSTOM_BASE_URL.'checkout');

    }
    
    
     
    
     public function checkout_delivery_address_edit() {
        
        $id = $this->uri->segment(3);
        $res = $this->model->getDeliveryAddress($id,$this->userDetails->id);
        $data['editaddress'] =$res ;
        
        
        $data['address'] = $this->model->getUserAddress($this->userDetails->id);
        $data['product'] = $this->model->getAllCartDataByUser($this->userDetails->id);
        $this->load->view('edit_checkout_delivery_address',$data);
         
    }
    
     
    
    public function checkout_delivery_address_update() {
    
        $id  =$_POST['id'];
        $name   =$_POST['name'];
        $mobile   =$_POST['mobile'];
        $alter_phone   =$_POST['alter_phone'];
        $address   =$_POST['address'];
        $land_mark   =$_POST['land_mark'];
        $pincode   =$_POST['pincode'];

        $value = array('name' => $name , 'pincode' => $pincode, 'address' => $address, 'land_mark' => $land_mark, 'phone' => $mobile, 'alter_phone' => $alter_phone, 'user_id' => $this->userDetails->id );

        $res = $this->model->updatetDeliveryAddress($id,$value,$this->userDetails->id);
        
       redirect(CUSTOM_BASE_URL.'account/checkout');
       
    }
    
    
      public function checkout_delivery_address_add() {

        $data['address'] = $this->model->getUserAddress($this->userDetails->id);
        
        $data['product'] = $this->model->getAllCartDataByUser($this->userDetails->id);

        $this->load->view('add_checkout_delivery_address',$data);
    }
    
    
     public function add_checkout_address(){
        
        $addressdata = $this->model->getUserAddress($this->userDetails->id);
        
        $name   =$_POST['name'];
        $mobile   =$_POST['mobile'];
        $alter_phone   =$_POST['alter_phone'];
        $address   =$_POST['address'];
        $land_mark   =$_POST['land_mark'];
        $pincode   =$_POST['pincode'];

        if(count($addressdata) == 0){
        $value = array('name' => $name , 'pincode' => $pincode, 'address' => $address, 'land_mark' => $land_mark, 'phone' => $mobile, 'alter_phone' => $alter_phone, 'user_id' => $this->userDetails->id,'status'=>1 );
        }else{
        $value = array('name' => $name , 'pincode' => $pincode, 'address' => $address, 'land_mark' => $land_mark, 'phone' => $mobile, 'alter_phone' => $alter_phone, 'user_id' => $this->userDetails->id );
        }

        $res = $this->model->insertDeliveryAddress($value);

        redirect(CUSTOM_BASE_URL.'account/checkout');
    }
    
    
     
      public function create_single_checkout_delivery_address() {
        
        $id = $this->uri->segment(3);
        
        $data['product_id'] = $id ;

        $data['address'] = $this->model->getUserAddress($this->userDetails->id);

        $data['product'] = $this->model->getProductData($id);

        $this->load->view('add_single_checkout_delivery_address',$data);
       
         
    }
    
     public function add_single_checkout_address(){
        
        $addressdata = $this->model->getUserAddress($this->userDetails->id);
        
        $name   =$_POST['name'];
        $mobile   =$_POST['mobile'];
        $alter_phone   =$_POST['alter_phone'];
        $address   =$_POST['address'];
        $land_mark   =$_POST['land_mark'];
        $pincode   =$_POST['pincode'];

        if(count($addressdata) == 0){
        $value = array('name' => $name , 'pincode' => $pincode, 'address' => $address, 'land_mark' => $land_mark, 'phone' => $mobile, 'alter_phone' => $alter_phone, 'user_id' => $this->userDetails->id,'status'=>1 );
        }else{
        $value = array('name' => $name , 'pincode' => $pincode, 'address' => $address, 'land_mark' => $land_mark, 'phone' => $mobile, 'alter_phone' => $alter_phone, 'user_id' => $this->userDetails->id );
        }

        $res = $this->model->insertDeliveryAddress($value);

        $product_id  =$_POST['product_id'];
        
        $cript =  base64_encode($product_id.SALT_KEY.CKRAT_KEY); 
			
        redirect(CUSTOM_BASE_URL.'buy-now/'.$cript);
    }
    
    
    
      public function single_checkout_delivery_address_edit() {
        
        $id = $this->uri->segment(3);
        $product_id = $this->uri->segment(4);
        
        
        // $encrypted_id = $this->uri->segment(2);
        
        // $decrypted_id = base64_decode($encrypted_id);

        // $id = preg_replace(sprintf('/%s/', SALT_KEY.CKRAT_KEY), '', $decrypted_id);
        
         
        $res = $this->model->getDeliveryAddress($id,$this->userDetails->id);
        $data['editaddress'] =$res ;
        $data['product_id'] =  $product_id; 
        
        //  var_dump( $this->model->getProductData($product_id) ); die;
        
        $data['address'] = $this->model->getUserAddress($this->userDetails->id);
        $data['product'] = $this->model->getProductData($product_id);
        $this->load->view('edit_single_checkout_delivery_address',$data);
         
    }
    
     
    
    public function single_checkout_delivery_address_update() {
    
        $id  =$_POST['id'];
        $name   =$_POST['name'];
        $mobile   =$_POST['mobile'];
        $alter_phone   =$_POST['alter_phone'];
        $address   =$_POST['address'];
        $land_mark   =$_POST['land_mark'];
        $pincode   =$_POST['pincode'];

        $value = array('name' => $name , 'pincode' => $pincode, 'address' => $address, 'land_mark' => $land_mark, 'phone' => $mobile, 'alter_phone' => $alter_phone, 'user_id' => $this->userDetails->id );

        $res = $this->model->updatetDeliveryAddress($id,$value,$this->userDetails->id);
        
        $product_id  =$_POST['product_id'];
        
        $cript =  base64_encode($product_id.SALT_KEY.CKRAT_KEY); 
			
        redirect(CUSTOM_BASE_URL.'buy-now/'.$cript);
       
    }
    
    
    public function single_deleteCheckoutAddress() {
        
            $address_id= $this->uri->segment(3);
            
            $product_id = $this->uri->segment(4);
             
			$this->model->delete_address($address_id,$this->userDetails->id);
			
			$cript =  base64_encode($product_id.SALT_KEY.CKRAT_KEY); 
			
        redirect(CUSTOM_BASE_URL.'buy-now/'.$cript);

    }
    

   public function getDeliveryCharge() {

        $address_id = $_POST['address_id'];

        $amount = $this->model->getDeliveryAmount($address_id,$this->userDetails->id);

        echo $amount;

    }   
 

   public function getDeliveryChargeSingle() {

        $address_id = $_POST['address_id'];

        $product_id = $_POST['product_id'];

        $amount = $this->model->getDeliveryAmountSingle($address_id,$this->userDetails->id,$product_id);

        echo $amount;

    }   

   public function getKgAmount() {

        $total_kg = $_POST['total_kg'];

        $amount = $this->model->getKgAmount($total_kg);

        echo $amount;

    }   

    
/*    $msg='Arya Vaidya Vilasini Vaidya Sala Online Medicine Orders Department.
Thank you for choosing us.
Hello  '.$firstname.', Your booking for medicine has been successful on '.$date.'. Please note 
Order No : '.$orderno.'
Please Contact for any assistance : 8089202091';
$emsg=rawurlencode($msg);
            
            $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://2factor.in/API/R1/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'module=TRANS_SMS&apikey=25f26261-09f6-11eb-9fa5-0200cd936042&to=91'.$phone.'%2C918089202091&from=AVVVSC&msg='.$emsg,
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;*/
    

}

?>