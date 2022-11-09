<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {

    protected $CI;

    public function __construct() {
        parent::__construct();

        $this->CI =& get_instance();
        $this->load->model('Main_Model', 'model');
        $this->load->model('Product_list_model','product_list_model');
        $this->load->helper(array('form', 'url')); 
        $this->load->library('upload');
        $this->load->library('session');
        $this->load->library('email');
    

        if(!empty($this->userDetails)){ 

            $this->user_id = $this->userDetails->id;
        }
        else{

            $this->user_id = "";
        }
    }
    
    
    public function product_list() {
        
        $data['list'] = $this->product_list_model->getOfferCategory();

        if(!empty($this->input->post('search'))) {

            $search = trim($this->input->post('search'));

            $data['search'] = $search;

            $search = strtolower($search);
            
            
        }
        else{

            $search = "";
        }

        if(!empty($this->uri->segment(2))) {

            $encrypted_id = $this->uri->segment(2);

            $decrypted_id = base64_decode($encrypted_id);

            $cat_id = preg_replace(sprintf('/%s/', SALT_KEY.CKRAT_KEY), '', $decrypted_id); 
           
            //$data['meta'] = $this->product_list_model->getcategoryinfo($cat_id);
        }
        else{

            $cat_id = "";
        }
        
      
        $data['main_category'] = $this->product_list_model->getMainCategorys();
   
        $data['cart_count'] = $this->product_list_model->getCartCount($this->user_id);

        $price_range = $this->product_list_model->getProductFilterPriceList($cat_id,$search);

        $min_price = 0;

        $max_price = 0;

        foreach ($price_range as $key => $rows) {

            $min_price = $rows->SmallestPrice;
            $max_price = $rows->LargestPrice;
        }

        $data['min_price'] = $min_price;

        $data['max_price'] = $max_price;

        $data['feature'] = $this->product_list_model->getProductFeatureList($cat_id,$search);

        $data['option'] = $this->product_list_model->getProductOptionList($cat_id,$search);

        $main_cat = $this->model->getParentCategory();

        $i = 0;
        foreach($main_cat as $cat){

        $main_cat[$i]['category'] = $this->product_list_model->getProductFilterCategoryList($cat_id,$search,$cat['cat_id']);

        $i++;
        }

        $data['main_cat'] = $main_cat;

        $data['category'] = $this->product_list_model->getProductFilterCategoryList($cat_id,$search);


        
      
        if(!empty($cat_id)) {

            $data['cat_name'] = $this->product_list_model->getCategoryName($cat_id);
            
            $data['cat_id'] = $cat_id;

        }
        else{

           $data['cat_name'] = "";
           
           $data['cat_id'] = 0;
        }
        
        
        $data['title'] = 'Shop '.$data['cat_name'].' online';

        $data['meta'] = $this->model->getMeta('Product-List');

        $this->load->view('product-list', $data);
    }
    
    
    
    
    
   
    // public function home() { 
      
    //     $data['stor_result'] = $this->model->getStoreResult();
        
    //     $data['main_category'] = $this->model->getMainCategorys();
        
    //     $data['cart_count'] = $this->model->getCartCount($this->user_id);

    //     $data['list'] = $this->model->getOfferCategory();
        
    //     $data['banner'] = $this->model->getBannerData();
        
    //     $data['category'] = $this->model->getBestCategoryData();
        
    //     $data['best_deal'] = $this->model->getBestDealDataList();
        
    //      // var_dump($this->model->getBestDealDataList() ); die;

    //     $res = $this->model->getCatProductListByArea();

    //      // var_dump($res);die;
    //     $data['best_deal_title'] = "Top Selling ".$set_cat_name;
        
       
    

    //     $data['top_selling'] = $this->model->getTopSellingData($set_cat_id);
        
        
    //     if(!empty($this->user_id)){ 

    //         $data['item'] = $this->model->getRecentlyVisitData($this->user_id);
    //     }
    //     else{

    //         $data['item'] = "";

    //     }

    //     $data['combo'] = $this->model->getBestComboList();
        
     
        
    //   $this->load->view('index',$data);
    // }

    public function home() { 
    
        $data['meta'] = $this->model->getMeta('Home');
        $data['result'] = $this->model->getTestimonials();
        $data['blog'] = $this->model->getBlog();
        $data['banner'] = $this->model->getBanner('home');
        $data['ad_banner'] = $this->model->getBanner('home_ad');

        $this->load->view('home2/index1',$data);
        
        
    }

    public function home_copy() { 
    
        $data['meta'] = $this->model->getMeta('Home');
        $data['result'] = $this->model->getTestimonials();
        $data['blog'] = $this->model->getBlog();
        $this->load->view('home/index1',$data);
        
    }

    public function home_test() { 
        
        $data['meta'] = $this->model->getMeta('Home');
        $data['result'] = $this->model->getTestimonials();
        $this->load->view('home/index1',$data);
        
    }

    public function about() 
    {
        
        $data['meta'] = $this->model->getMeta('About');
        $data['main_category'] = $this->model->getMainCategorys();
        $data['cart_count'] = $this->model->getCartCount($this->user_id);
        $data['list'] = $this->model->getOfferCategory();
        $data['banner'] = $this->model->getBanner('about');

	    $this->load->view('home/about',$data);
    }
    

    public function testimonials() 
    {
        
        $data['main_category'] = $this->model->getMainCategorys();
        $data['cart_count'] = $this->model->getCartCount($this->user_id);
        $data['list'] = $this->model->getOfferCategory();
        $data['result'] = $this->model->getTestimonials();
        $data['meta'] = $this->model->getMeta('Testimonials');
        $data['banner'] = $this->model->getBanner('testimonials');

	    $this->load->view('home/testimonials',$data);
    }
    

    
    public function blog()
	{
	 
        $data['main_category'] = $this->model->getMainCategorys();
        $data['cart_count'] = $this->model->getCartCount($this->user_id);
        $data['list'] = $this->model->getOfferCategory();
        $data['blog'] = $this->model->getBlog();
        $data['meta'] = $this->model->getMeta('Blog');
        $data['banner'] = $this->model->getBanner('blog');
        
		$this->load->view('home/blog',$data);
	}

    public function blog_details()
    {
        $encrypted_id = $this->uri->segment(2);
        $decrypted_id = base64_decode($encrypted_id);
        $id = preg_replace(sprintf('/%s/', SALT_KEY.CKRAT_KEY), '', $decrypted_id);

        $data['main_category'] = $this->model->getMainCategorys();
        $data['cart_count'] = $this->model->getCartCount($this->user_id);
        $data['list'] = $this->model->getOfferCategory();
        $data['result'] = $this->model->getBlog($id);
        $data['blog'] = $this->model->getBlog();
        
        $this->load->view('home/blog-details',$data);
    }
	

    public function contact() 
    {
     
        $data['main_category'] = $this->model->getMainCategorys();
        $data['cart_count'] = $this->model->getCartCount($this->user_id);
        $data['list'] = $this->model->getOfferCategory();
        $data['meta'] = $this->model->getMeta('Contact');
        $data['banner'] = $this->model->getBanner('contact-us');
        
        $this->load->view('home/contact',$data);
       
    }
    
    public function ayurvaram()
	{
	    $data['main_category'] = $this->model->getMainCategorys();
        $data['cart_count'] = $this->model->getCartCount($this->user_id);
        $data['list'] = $this->model->getOfferCategory();
        $data['meta'] = $this->model->getMeta('Ayurvaram');
        
		$this->load->view('home/ayurvaram',$data);
	}

    public function avvvs_speciality_clinic()
    {
        $data['main_category'] = $this->model->getMainCategorys();
        $data['cart_count'] = $this->model->getCartCount($this->user_id);
        $data['list'] = $this->model->getOfferCategory();
        $data['meta'] = $this->model->getMeta('Ayurvaram');
        $data['banner'] = $this->model->getBanner('speciality-clinic');
        $data['ad_banner'] = $this->model->getBanner('speciality-clinic-ad');
        
        $this->load->view('home2/avvvs-speciality-clinic',$data);
    }
	
	public function gallery()
	{
	    $data['main_category'] = $this->model->getMainCategorys();
        $data['cart_count'] = $this->model->getCartCount($this->user_id);
        $data['meta'] = $this->model->getMeta('Gallery');
        $data['album'] = $this->model->getAlbum();
        $data['banner'] = $this->model->getBanner('gallery');

        $this->load->view('home2/gallery',$data);
		
	}

    public function gallery_copy()
    {
        $data['main_category'] = $this->model->getMainCategorys();
        $data['cart_count'] = $this->model->getCartCount($this->user_id);
        $data['meta'] = $this->model->getMeta('Gallery');
        $data['album'] = $this->model->getAlbum();
        $this->load->view('home/gallery',$data);
    }
	
	
		public function gallery_inner()
	{
	    $data['main_category'] = $this->model->getMainCategorys();
        $data['cart_count'] = $this->model->getCartCount($this->user_id);
		$this->load->view('gallery-inner',$data);
	}
	
	
		public function gallery_inner_news()
	{
	    $data['main_category'] = $this->model->getMainCategorys();
        $data['cart_count'] = $this->model->getCartCount($this->user_id);
		$this->load->view('gallery-inner-news',$data);
	}
	
	
	
	public function gallery_inner_news_factory()
	{
	    $data['main_category'] = $this->model->getMainCategorys();
        $data['cart_count'] = $this->model->getCartCount($this->user_id);
		$this->load->view('gallery-inner-news-factory',$data);
	}
	




    //  public function product_list() {

    //     $min_price = "";
    //     $max_price = "";
    //     $search = "";
    //     $feature='';
    //     $option='';

    //     $cat_id = $this->uri->segment(2);

    //     $data['cart_count'] = $this->model->getCartCount($this->user_id);

    //     $data['list'] = $this->model->getOfferCategory();

    //     $data['cat_list'] = $this->model->getSubCategoryData();

    //     $data['result'] = $this->model->getAllProductCategoryWise($cat_id,$min_price,$max_price,$search,$feature,$option);

    //     $data['category'] = $this->model->getProductFilterCategoryList($cat_id,$min_price,$max_price,$search);

    //     $data['price_range'] = $this->model->getProductFilterPriceList($cat_id,$min_price,$max_price,$search);

    //     $data['feature'] = $this->model->getProductFeatureList($cat_id,$min_price,$max_price,$search);

    //     $data['option'] = $this->model->getProductOptionList($cat_id,$min_price,$max_price,$search);

    //     $this->load->view('product-list',$data);
    // }

    //   public function filter_list() {

    //     $min_price = "";
    //     $max_price = "";
    //     $search = "";

    //     if(!empty($_POST['feature'])) {

    //         $feature_chk = array();

    //         $feature_chk = $_POST['feature'];
            
    //     }

    //     else{

    //         $feature_chk = "";

    //     }

    //     if(!empty($_POST['chk_option'])) {

    //         $option_chk = array();

    //         $option_chk = $_POST['chk_option'];
            
    //     }

    //     else{

    //         $option_chk = "";

    //     }

    //     $data['feature_chks'] = $feature_chk;

    //     $data['option_chks'] = $option_chk;
         
    //     $cat_id = "";

    //     $data['cart_count'] = $this->model->getCartCount($this->user_id);

    //     $data['list'] = $this->model->getOfferCategory();

    //     $data['cat_list'] = $this->model->getSubCategoryData();

    //     $data['result'] = $this->model->getAllProductCategoryWise($cat_id,$min_price,$max_price,$search,$feature_chk,$option_chk);

    //     $data['category'] = $this->model->getProductFilterCategoryList($cat_id,$min_price,$max_price,$search);

    //     $data['price_range'] = $this->model->getProductFilterPriceList($cat_id,$min_price,$max_price,$search);

    //     $data['feature'] = $this->model->getProductFeatureList($cat_id,$min_price,$max_price,$search);

    //     $data['option'] = $this->model->getProductOptionList($cat_id,$min_price,$max_price,$search);

    //     $this->load->view('product-list',$data);
    // }

    public function search() {

        $search = trim($this->input->post('search'));

        $search = strtolower($search);

        $data['category_id'] = "";

        $min_price = "";
        $max_price = "";

        $cat_id = "";

        $parent_id = "";

        $data['cart_count'] = $this->model->getCartCount($this->user_id);

        $data['list'] = $this->model->getOfferCategory();

        //$data['cat_list'] = $this->model->getSubCategoryData();
        
        $data['main_category'] = $this->model->getMainCategorys();
        
        $data['result'] = $this->model->getAllProductCategoryWise($cat_id,$min_price,$max_price,$search);

        $data['category'] = $this->model->getProductFilterCategoryList($cat_id,$min_price,$max_price,$search);

        $data['price_range'] = $this->model->getProductFilterPriceList($cat_id,$min_price,$max_price,$search);

        $data['feature'] = $this->model->getProductFeatureList($cat_id,$min_price,$max_price,$search);

        $data['option'] = $this->model->getProductOptionList($cat_id,$min_price,$max_price,$search);

        $main_cat = $this->model->getParentCategory();

        $i = 0;
        foreach($main_cat as $cat){

        $main_cat[$i]['category'] = $this->model->getProductFilterCategoryList($cat_id,$min_price,$max_price,$search,$cat['cat_id']);

        $i++;
        }

        $data['main_cat'] = $main_cat;

        $this->load->view('product-list',$data);

    }

    public function list_item() {

        $search = trim($_POST['search']);

        $search = strtolower($search);

        $result = $this->model->getSearchKeyword($search);

        echo '<ul class="search-drop-ab">';

            foreach ($result as $rs) { ?>

                <li  onclick='fill("<?php echo $rs['product_name']; ?>")'><a><?php echo $rs['product_name']; ?>   -<?php echo $rs['price']; ?></a></li>
                
            <?php } 

            echo '</ul>';

    }

    public function product_details() {
        
         //$encrypted_id = $this->uri->segment(2);

        $slug = $this->uri->segment(2);

        $id = $this->model->getProductId($slug);

        //$decrypted_id = base64_decode($encrypted_id);

        //$id = preg_replace(sprintf('/%s/', SALT_KEY.CKRAT_KEY), '', $decrypted_id);

        $data['cart_count'] = $this->model->getCartCount($this->user_id);
        
        $data['wish_list'] = $this->model->getWishList($this->user_id,$id);

        $data['main_category'] = $this->model->getMainCategorys();

        $data['result'] = $this->model->getProductDetailsById($id);

        $data['rating'] = $this->model->getProductRating($id);

        $data['rating_avg'] = $this->model->getProductRatingRateAvg($id);
        
        $data['meta'] = $this->model->getproductinfo($id);

        if($data['result']) {

            $cat_id = $data['result'][0]['cat_id'];
        }
        else{

            $cat_id = '';
        }

        $data['similar_item'] = $this->model->getProductSimilar($cat_id);
        $data['ratingeach1'] = $this->model->getProductRatingEach($id,1);
        $data['ratingeach2'] = $this->model->getProductRatingEach($id,2);
        $data['ratingeach3'] = $this->model->getProductRatingEach($id,3);
        $data['ratingeach4'] = $this->model->getProductRatingEach($id,4);
        $data['ratingeach5'] = $this->model->getProductRatingEach($id,5);
        
        if(!empty($this->user_id)) { 

            $this->model->putProductRecentlyView($this->user_id,$id);

        }
        
       
        $this->load->view('product-details',$data);
    }
    
    public function subscribe_create() {

        if(!empty($_POST['email'])) { 

            $email = trim($_POST['email']);

            $result = $this->model->putSubscriber($email);

            echo '1';
        }
        else{

            echo '2';
        }
    }
    
    public function get_sub_category() { //Ajax calling

        $cat_id = $_POST['rowid'];

        $cat_list = $this->model->getAllCategorys($cat_id);
        

        foreach ($cat_list as $catLists) { 
                     
            $catmackratt = base64_encode($catLists['cat_id'] .SALT_KEY.CKRAT_KEY);

                 $res.= '
                 
                  
                     
                        <li><a href="'.CUSTOM_BASE_URL. 'product-list/'.$catmackratt.'">'.$catLists['cat_name'].'</a></li>
                   
                      
                  
               ';
        } 
        
        echo $res;

    }
    
    public function store_list() {

        $data['main_category'] = $this->model->getMainCategorys();
        $data['cart_count'] = $this->model->getCartCount($this->user_id);
        
        $data['list'] = $this->model->getOfferCategory();
        
        $data['store_list'] = $this->model->getStoreData();
        
        $data['title'] = 'Regency Hypermarket Abu Hamour,Umm salal,Ain Khalid,Wakrah';
        
        $this->load->view('store',$data);
        
    }
    
    public function store_details() {
        
        $encrypted_id = $this->uri->segment(2);

        $decrypted_id = base64_decode($encrypted_id);

        $id = preg_replace(sprintf('/%s/', SALT_KEY.CKRAT_KEY), '', $decrypted_id);
        
        $data['main_category'] = $this->model->getMainCategorys();
        $data['cart_count'] = $this->model->getCartCount($this->user_id);
        
        $data['list'] = $this->model->getOfferCategory();

        $data['store_data'] = $this->model->getStoreData();
        
        $data['store_list'] = $this->model->getStoreData($id);
        
        $data['title'] = 'Regency Hypermarket Abu Hamour,Umm salal,Ain Khalid,Wakrah';
        
        $this->load->view('store-details',$data);
        
    }
    
    public function email() 
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $place=$_POST['place'];
        $msg=$_POST['message'];
        $from = '<noreply@regencyqtr.com>';
        $to = 'it@regencyqtr.com';
        

        $config = Array(
        'protocol' => 'sendmail',
        'mailtype' => 'html',
        'charset' => 'iso-8859-1'
        );

        $this->load->library('email',$config);
        $this->email->from($from, $name);
        $this->email->to($to);
        $this->email->subject("Contact Enquiry from - " . $name);
        $this->email->set_mailtype("html");

        $email_body = "<table style='width:700px;border:0px #e5e5e5 solid;background:#eeeeee;color:#000000;padding:10px; font-family:Tahoma, Geneva, sans-serif;'><tbody><tr><td style='width:120px;padding-left:3px;border:1px #f4981e solid;background:#f4981e;color:#FFFFFF;'><strong>Name:</strong></td><td style='border:1px #FFFFFF solid; padding:5px;background:#FFFFFF;color:#000000;'>" . $name . "</td></tr><tr><td style='width:120px;padding-left:3px;border:1px #f4981e solid;background:#f4981e;color:#FFFFFF;'><strong>Email:</strong></td><td style='border:1px #FFFFFF solid; padding:5px;background:#FFFFFF;color:#000000;'>" . $email . "</td></tr><tr><td style='width:120px;padding-left:3px;border:1px #f4981e solid;background:#f4981e;color:#FFFFFF;'><strong>Mobile: </strong></td><td style='border:1px #FFFFFF solid; padding:5px;background:#FFFFFF;color:#000000;'>" . $phone . "</td></tr><tr><td style='width:120px;padding-left:3px;border:1px #f4981e solid;background:#f4981e;color:#FFFFFF;'><strong>Message:</strong></td><td style='border:1px #FFFFFF solid; padding:5px;background:#FFFFFF;color:#000000;'>" . $msg . "</td> </tr></tbody></table>";
        
        $body = str_replace("\n", "<br/>", $email_body);
        
        $this->email->message($body);

        if ($this->email->send()) 
        {
            echo 'Thank you';
        }   
        else 
        {
            echo 'Error in sending Email';
        }
    }
    
      public function change_location() {

        $location = $_POST['location'];

        $result = $this->model->getStoreLocation($location);

        $id=$result->id;
    
        $location=$result->location;

        if($id!="")
        {
            $this->session->set_userdata('storeLoc', $result);
    
            $this->session->userdata('storeLoc');

            echo "1";exit;

        }
        else {

            echo "2";exit;
    
        }


    }
   

    
    
    public function consulting() {
           
           $data['meta'] = $this->model->getMeta('Appoinment');
           $data['doctors'] = $this->model->getDoctors();

           $this->load->view('consulting',$data);

    }

    public function getSlotDetails(){

        $doctor_id = $this->input->post('doctor_id');
        $date = $this->input->post('date');

        $data = $this->model->getSlotDetails($doctor_id,$date);

        echo json_encode($data);
    }

    public function consulting_otp() {
           
            $phone = $this->input->post('phone');

            $rndno1=rand(10, 99);
            $rndno2=rand(88, 10);
            $key_word = urlencode($rndno1.$rndno2);
            $date = date_default_timezone_set('Asia/Kolkata');

            $create_at = date("Y-m-d H:i:s");

            $time = date("Y-m-d H:i:s",strtotime("+5 minute"));

            $vars = array('key_word'=>$key_word,'mobile'=> $phone,'create_at'=>$create_at,'date_exp'=>$time);
     
            $insert = $this->model->insertKeyEmail($vars,$phone,$key_word,$date_exp);

            $var = "don't";

            $msg='Hi, '.$key_word.' is the OTP for your number verification on Arya Vaidya Vilasini Vaidya Sala(AVVVS). Please '.$var.' share your OTP with anyone else.';

            $emsg=rawurlencode($msg);

            $curl = curl_init();

            curl_setopt_array($curl, array(
              
              CURLOPT_URL => 'https://2factor.in/API/V1/25f26261-09f6-11eb-9fa5-0200cd936042/SMS/'.$phone.'/'.$key_word.'/OTP for AVVVS',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_POSTFIELDS => "",
              CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded"
              ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);
    
            // $curl = curl_init();

            // curl_setopt_array($curl, array(
            //   CURLOPT_URL => 'https://2factor.in/API/R1/',
            //   CURLOPT_RETURNTRANSFER => true,
            //   CURLOPT_ENCODING => '',
            //   CURLOPT_MAXREDIRS => 10,
            //   CURLOPT_TIMEOUT => 0,
            //   CURLOPT_FOLLOWLOCATION => true,
            //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            //   CURLOPT_CUSTOMREQUEST => 'POST',
            //   CURLOPT_POSTFIELDS => 'module=TRANS_SMS&apikey=25f26261-09f6-11eb-9fa5-0200cd936042&to=91'.$phone.'&from=AVVVSC&msg='.$emsg,
            // ));

            // $response = curl_exec($curl);

            // curl_close($curl);
            echo 1;


    }

    public function consulting_otp_verify() {

        $phone = $_POST['phone'];

        $otp = $_POST['otp'];

        $date = date_default_timezone_set('Asia/Kolkata');

        $time = date("Y-m-d H:i:s");
         
        $expire = $this->model->checkOtpExp($otp,$phone,$time);
     
        if($expire == 1){
        
        $data = $this->model->checkOtpNumber($phone,$otp);
        
        }
        else{
            
        $data = 5;
            
        }

        echo $data;

    }

    
     public function addconsulting() {
         
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $gender=$_POST['gender'];
        $place=$_POST['place'];
        $date=$_POST['date'];
        $timeslot =$_POST['timeslot'];
        $phone=$_POST['phone'];
        $dob=$_POST['dob'];
        $doctor_id=$_POST['doctor'];

        // $user_id = $this->user_id ;
        
        $date_now = date("Y-m-d"); // this format is string comparable

        if( $date >= $date_now){
            
            if(!empty($this->user_id)){
                 $value  = array('user_id'=>$this->user_id,'patientname' => $firstname,'lastname' => $lastname,'gender' => $gender,'place' => $place ,'date'=>$date ,'timeslot'=>$timeslot,'phone'=>$phone,'dob'=>$dob,'doctor_id'=>$doctor_id );
           
                 $val  = array('user_id'=>$this->user_id,'mobile_number'=>$phone,'patient_name' => $firstname." ".$lastname,'apponment_date'=>$date ,'apponment_time'=>$timeslot,'doctor_id'=>$doctor_id );
           
            }else{
                $value  = array('patientname' => $firstname,'lastname' => $lastname,'gender' => $gender,'place' => $place ,'date'=>$date ,'timeslot'=>$timeslot,'phone'=>$phone,'dob'=>$dob,'doctor_id'=>$doctor_id );
            
                 $val  = array('mobile_number'=>$phone,'patient_name' => $firstname." ".$lastname,'apponment_date'=>$date ,'apponment_time'=>$timeslot,'doctor_id'=>$doctor_id );
           
            }
            
            $res =  $this->model->bookappoinment($value);
            
            $this->model->addSmsDetails($val);

            $doctor = $this->model->getDoctorData($doctor_id); 
            $slot = $this->model->getSlotData($timeslot); 

            $msg='Arya Vaidya Vilasini Vaidya Sala Online Consultation Department.
Thank you for choosing us.
Dear '.$firstname.',Your booking for consultation has been successful. Please note 
Date :  '.$date.'
Time :  '.$slot.'
Doctor : '.$doctor.'

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




$newDate = date("d-m-Y", strtotime($date));


        $msg2='Arya Vaidya Vilasini Vaidya Sala Online Consultation Department.

Name : '.$firstname.'
Date : '.$newDate.'
Time : '.$slot.'
Doctor : '.$doctor.'
Contact No: '.$phone.'';
        $emsg2=rawurlencode($msg2);
                   
        $curl2 = curl_init();
//8089202091
        curl_setopt_array($curl2, array(
          CURLOPT_URL => 'https://2factor.in/API/R1/',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => 'module=TRANS_SMS&apikey=25f26261-09f6-11eb-9fa5-0200cd936042&to=918089202091&from=AVVVSC&msg='.$emsg2,
        ));

        $response2 = curl_exec($curl2);

        curl_close($curl2);
        echo $response2;





        $this->load->config('email');
        $this->load->library('email');
        $from = $this->config->item('smtp_user');
        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to('avvvsappointmentsonline@gmail.com');
        $this->email->subject("AVVVS APPOINTMENT");
        $this->email->set_mailtype("html");

        

        $email_body='Arya Vaidya Vilasini Vaidya Sala Online Consultation Department.
            Name :  '.$firstname.'
            Date :  '.$date.'
            Time :  '.$slot.'
            Doctor : '.$doctor.'
            Contact Number : '.$phone.'';




        
        $body = str_replace("\n", "<br/>", $email_body);
        
        $this->email->message($body);

        if ($this->email->send()) 
        {
            echo '1';
        }   
        else 
        {
            show_error($this->email->print_debugger());
        }            
            
            
            // // start sms------------------------------
            
            //  $apiKey = '';
    
            // $sender = urlencode('');
           
            // $message = rawurlencode('Arya Vaidya Vilasini Vaidya Sala 
            // Your consultation scheduled at : time, date '.$timeslot.' ,'.$date);
            
            // $numbers = $mobile;
            // // Prepare data for POST request
            // $data = array('apikey' => $apiKey, 'numbers' => $phone, "sender" => $sender, "message" => $message);
       
            // // Send the POST request with cURL
            // $ch = curl_init('https://api.textlocal.in/send/');
            // curl_setopt($ch, CURLOPT_POST, true);
            // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // $response = curl_exec($ch);
            // curl_close($ch);
        
            // //end   sms ----------------------------------
            
            $this->session->set_flashdata('success', "Your appoinment added successfully !...");
            
            redirect(CUSTOM_BASE_URL.'consulting');
        }else{
             redirect(CUSTOM_BASE_URL.'consulting');
        }
        
    }
    
    
    

    public function contact_mail(){

        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $comment=$_POST['comment'];
        
        $subject = "Contact Enquiry from" . $name ;
        
           $value =  array('name' => $name ,
                        'email' => $email ,
                        'phone'=> $phone,
                        'subject' => $subject,
                        'message' => $comment ,
                        );
             
            $this->model->insertMsgDetails($value);
            
            
        
                $to = "mail@avvvs.com";
                $from = "$name<noreply@avvvs.com>";

              $config['protocol'] = 'sendmail';
              $config['mailpath'] = '/usr/sbin/sendmail';
              $config['charset'] = 'iso-8859-1';
              $config['wordwrap'] = TRUE;

              $config['mailtype'] = 'html';
      
              $this->email->initialize($config);
      
              $this->load->library('email');
      
         
              $this->email->from($from);
            
              $this->email->to($to);
              
              
              $this->email->subject( "Contact Enquiry from" . $name);
              
              
            $str="";

            $str.="<table style='width:700px;border:1px #e5e5e5 solid;background:#f5f5f5;color:#000000;padding:7px;'><tbody><tr><td style='width:120px;padding-left:3px;border:1px #FFFFFF solid;background:#9ac865;color:#252525;'><strong>Name:</strong></td><td style='border:1px #e5e5e5 solid; padding:5px;background:#FFFFFF;color:#000000;'>" . $name . "</td></tr><tr><td style='width:120px;padding-left:3px;border:1px #FFFFFF solid;background:#9ac865;color:#252525;'><strong>Mobile:</strong></td><td style='border:1px #e5e5e5 solid; padding:5px;background:#FFFFFF;color:#000000;'>" . $phone . "</td></tr><tr><td style='width:120px;padding-left:3px;border:1px #FFFFFF solid;background:#9ac865;color:#252525;'><strong>Email:</strong></td><td style='border:1px #e5e5e5 solid; padding:5px;background:#FFFFFF;color:#000000;'>" . $email . "</td></tr><tr><td style='width:120px;padding-left:3px;border:1px #FFFFFF solid;background:#9ac865;color:#252525;'><strong>Comments:</strong></td><td style='border:1px #e5e5e5 solid; padding:5px;background:#FFFFFF;color:#000000;'>" . $comment . "</td></tr></tbody></table>";

             $email_body=$str;

             $msgs = str_replace("\n", "<br/>", "$email_body");

             $this->email->message($msgs);
              
              
             if ($this->email->send()) {

              echo 'Thank you';

             }else {

                echo 'Error in sending Email';

             }
             

    }

    
    
    public function spine_joint() {
          
           $this->load->view('home/spine-joint-disorders');

    }    
    

    public function skin_disorders() {
          
           $this->load->view('home/skin-disorders');

    }    
    

    public function hair_scalp() {
          
           $this->load->view('home/hair-scalp-disorders');

    } 

    public function gallery_details() {

            $encrypted_id = $this->uri->segment(2);

            $decrypted_id = base64_decode($encrypted_id);

            $album_id = preg_replace(sprintf('/%s/', SALT_KEY.CKRAT_KEY), '', $decrypted_id); 
          
           $data['meta'] = $this->model->getMeta('Gallery');

           $data['album'] = $this->model->getAlbumName($album_id);

           $data['gallery'] = $this->model->getGalleryImages($album_id);

           $data['banner'] = $this->model->getBanner('gallery-details');

           $this->load->view('home/gallery-details',$data);

    } 

    public function get_in_touch() 
    {
        $name = $this->input->post('cf-name');
        $email = $this->input->post('cf-email');
        $phone = $this->input->post('cf-phone');
        $message = $this->input->post('cf-message');


                
                $value = array('name' => $name,'email' => $email,'number' => $phone,'message' => $message);
                
                $status = $this->model->insertGetInTouch($value);  
                
                if($status == 1){

                echo "Thank you. You will contact with you very soon";
 
                }
                else if($status == 0){
                    
                echo "Sorry.....";

                }
                
        
        
        
        
    }

}