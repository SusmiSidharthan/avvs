<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product extends MY_Auth_Controller {

	protected $ci_name;//declare ci_name varriabe current controler name as image folder name to upload image

    public function __construct() 
    {
	    parent::__construct();
	    $this->ci_name = strtolower($this->router->fetch_class());
	    $this->load->model('Product_model','model');
	    $this->load->library('Image');//custom image library to crop
	    
	    if (!$this->is_logged_in()) //login only registered user from db
	    { 
	      redirect('Login');
	    }
    }
  
    public function index() {

    	$this->load->view('products/list-product');

    }

    public function product_list() {

        $list = $this->model->get_datatables();
        $data = array();

        $no = $_POST['start'];

        foreach ($list as $product) {

	        if($product['status']==1) {

	        	$status='<option value="1" selected>Active</option>
                           <option value="0" >Deactive</option>';

	        }
	        else if($product['status']==0) {

	        	$status='<option value="0" selected >Deactive</option>
                         <option value="1">Active</option>';
	        }

	        else{

                $status='';

            }
            
            $itemnaam = base64_encode($product['product_name'] .SALT_KEY);
	    
	        $no++;
	        $row = array();
	        $row[] = $no;
	        $row[] = $product['product_name'];
	        $row[] = $product['cat_name'];
	        
	        $row[] = '<select  name='.$product['id'].' onchange="getval(this);" id="mySelect">
                        '.$status.'
                    </select>';

	        //add html for action
	         $row[] = '<a href="product/get_stock_data/'.$itemnaam.'/'.$product['id'].'/'.$product['cat_id'].'" class="btn  btn-info" href="#">Product variants</a>
	         <a href="product/edit_product/'.$product['id'].'" class="btn  btn-warning" href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>

	         <a data-toggle="modal" data-id='.$product['id'].' data-target="#delModal" class="btn  btn-danger" href="#"><i class="fa  fa-trash-o" aria-hidden="true"></i></a>
	         
	         <a data-toggle="modal" data-id='.$product['id'].' data-target="#view-modal" class="btn  btn-info" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
	         
	         ';
	         
	         

	        $data[] = $row;
        }

        $output = array(
        "draw" => $_POST['draw'],
        "recordsTotal" => $this->model->count_all(),
        "recordsFiltered" => $this->model->count_filtered(),
        "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
    
    
     public function View() {

      $id =  $_POST['rowid']  ; 
      
      $result = $this->model->get_details($id); 
        //  var_dump($this->model->get_details($id)); die;
		$data['result'] = $this->model->get_details($id);
	    $this->load->view('products/view',$data);
           
     }
     
     
     
   
    public function create() {

    	$this->form_validation->set_rules('product_name', 'Name', 'trim|required|xss_clean');
    	$this->form_validation->set_rules('category', 'category', 'trim|required|xss_clean');
    	//$this->form_validation->set_rules('highlights[]', 'Highlights', 'trim|required|xss_clean');

	    if($this->form_validation->run() == FALSE) 
	    {
		    $data['category'] = $this->model->getShopWiseCategory();
		    $this->load->view('products/add-product',$data);
	    }
	    else 
	    {

		    $product_name = $this->input->post('product_name');
		    
			$cat_id = $this->input->post('category');
			$description = $this->input->post('description');
			
			$meta_title = $this->input->post('meta_title');
            $meta_key = $this->input->post('meta_key');
            $canonical_link = $this->input->post('canonical_link');
            $meta_description = $this->input->post('meta_description');


			$highlights = $this->input->post('highlights');

			$feature = $this->input->post('features');

			if(!empty($feature)){

				$features=array_filter($feature);

		    }
		    else{

		    	$features="";

		    }
		   
	        $value = array('product_name' => $product_name,'cat_id' => $cat_id,'description' => $description,'creation_date' => date("Y-m-d H:i:s"),'meta_title' => $meta_title,'meta_key' =>$meta_key,'canonical_link'=>$canonical_link,'meta_description'=>$meta_description);

		    $result = $this->model->insertCartProduct($value,$highlights,$features);

		    $data['product_name'] = $product_name;

		    $data['cat_id'] = $cat_id;

		    $data['product_id'] = $result;

		    $data['option'] = $this->model->getOptionProduct($cat_id);

		    $this->load->view('products/add-product-next',$data);
	    }

    }

    public function edit_product() {

     	$id = $this->uri->segment(3);
     	
     	
     //	var_dump( $this->model->getProductData($id)); die;

     	$data['product'] = $this->model->getProductData($id);
     	$data['category'] = $this->model->getShopWiseCategory();
		$data['highlights'] = $this->model->getHighlights($id);
		//$data['features'] = $this->model->getFeatureProduct($cat_id);
	
     	$this->load->view('products/edit-product',$data);
	}


    public function update_product() {

    	$this->form_validation->set_rules('product_name', 'Name', 'trim|required|xss_clean');
    	$this->form_validation->set_rules('category', 'category', 'trim|required|xss_clean');

    	$id = $this->input->post('id');

	    if($this->form_validation->run() == FALSE) 
	    {	
	    	$data['product'] = $this->model->getProductData($id);
		    $data['category'] = $this->model->getShopWiseCategory();
		    $data['highlights'] = $this->model->getHighlights($id);
		    $this->load->view('products/edit-product',$data);
	    }
	    else 
	    {

		    $product_name = $this->input->post('product_name');
		    
			$cat_id = $this->input->post('category');

			$highlights = $this->input->post('highlights');

			$description = $this->input->post('description');
			
			$meta_title = $this->input->post('meta_title');
            $meta_key = $this->input->post('meta_key');
            $canonical_link = $this->input->post('canonical_link');
            $meta_description = $this->input->post('meta_description');

	        $value = array('product_name' => $product_name,'cat_id' => $cat_id,'description' => $description,'meta_title' => $meta_title,'meta_key' =>$meta_key,'canonical_link'=>$canonical_link,'meta_description'=>$meta_description);

		    $result = $this->model->updateCartProduct($id,$value,$highlights);

		    redirect('Product');

	    }


    }

    public function deleteHighlights() {

        $id = $_POST['rowid'];

        $this->model->deleteSpecificationsData($id);
        
    }

    public function delete() {

	    $this->load->view('products/delete');
	    
	    if (isset($_POST['delete'])) 
	    {
		    $id=$_POST['rowid'];
			$this->model->deleteProduct($id);
	        redirect('Product');
	    }
	}


    ////////////////////stock////////////////////////////////////

    public function create_stock() {

    	$this->form_validation->set_rules('price', 'Mrp', 'trim|required|xss_clean');
    	$this->form_validation->set_rules('list_price', 'Sale price', 'trim|required|xss_clean');
    	$this->form_validation->set_rules('stock', 'Stock', 'trim|required|xss_clean');
    	$this->form_validation->set_rules('stock_name', 'Stock name', 'trim|required|xss_clean');
    	$this->form_validation->set_rules('kg', 'KG', 'trim|required|xss_clean');
    	
    
      
        if($_FILES['upl_files']['name'][0]=="")
        {
            $this->form_validation->set_rules('upl_files[]', 'Image', 'required');
        }

    	$cat_id = $this->input->post('cat_id');
    	$product_id = $this->input->post('product_id');
	    $stock_name = $this->input->post('stock_name');
	    $kg = $this->input->post('kg');

	    $data['product_name'] = $stock_name;

		$data['cat_id'] = $cat_id;

		$data['product_id'] = $product_id;

	    if($this->form_validation->run() == FALSE) 
	    {

		    $data['option'] = $this->model->getOptionProduct($cat_id);

		    $this->load->view('products/add-product-next',$data);
	    }
	    else 
	    {


        // var_dump(count( $_FILES['upl_files']['name']) ) ;die;



	    	$cat_id = $this->input->post('cat_id');

	        if (!is_dir('uploads/product_multimage'))
		    {
			    mkdir('uploads/product_multimage/', 0755, TRUE);
		    }

	        if($_FILES['upl_files']['name'])
	        {

			    $number_of_files_uploaded = count($_FILES['upl_files']['name']);

	            for ($i = 0; $i < $number_of_files_uploaded; $i++) :

					$_FILES['userfile']['name']     = $_FILES['upl_files']['name'][$i];
				    $_FILES['userfile']['type']     = $_FILES['upl_files']['type'][$i];
				    $_FILES['userfile']['tmp_name'] = $_FILES['upl_files']['tmp_name'][$i];
				    $_FILES['userfile']['error']    = $_FILES['upl_files']['error'][$i];
				    $_FILES['userfile']['size']     = $_FILES['upl_files']['size'][$i];
				    
				    
				     $config = array(
				    'allowed_types' => '*',              //'jpg|jpeg|png|gif',
				    'max_size'      => 5000,
				    'overwrite' => TRUE,
				    'upload_path'   => 'uploads/product_multimage/',
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
			        
			        $this->load->library('image');
			        
			        $config['image_library'] = 'gd2';
			        $config['source_image'] = 'uploads/product_multimage/'.$file_name;
			        $config['create_thumb'] = FALSE;
			        $config['maintain_ratio'] = TRUE;
			        $config['width']     = 500;
			        $config['height']   = 500;
			        $config['new_image']        = 'uploads/product_multimage/' .$file_name;

			      //  $this->image->clear();
			       // $this->image->initialize($config);
			      //  $this->image->resize();

			        endif;
	            endfor;
	        }
	        else{

	        	$multi_images[] = "";

	        }
	        
	        
	       // var_dump($multi_images);die;

		    $price = $this->input->post('price');
		    $list_price = $this->input->post('list_price');
		    $stock = $this->input->post('stock');

		    if(($price <=0) || ($list_price <=0)){

                $status = 0;
            }

            else if(($stock <=0)){

                $status = 2;
            }

            else{

                $status = 1;
            }

		    if( ($price!=0) && ($list_price!=0) ){

            $disc = (($price - $list_price)*100) /$price;

            $discount=round($disc);
            }
            else{

            $discount=0;
            }

		    $data['product_name'] = $stock_name;

		    $data['cat_id'] = $cat_id;

		    $data['product_id'] = $product_id;


			$option = $this->input->post('option');

	        $value = array('product_id' => $product_id,'stock_name' => $stock_name,'price' => $price,'list_price' => $list_price,'stock' => $stock,'discount' => $discount,'status' => $status,'kg' => $kg);

	        if(!empty($option[0]) || !empty($filepath[0])){

	        	$value_product = array('status' => $status);

	        }
	        else{

	        	$value_product = array('status' => $status);

	        }
	         
	         $data['option'] = $this->model->getOptionProduct($cat_id);
	          

            if($multi_images != null){
                 $result = $this->model->insertCartStock($value,$multi_images,$option,$product_id,$value_product);
                 $this->session->set_flashdata('add', 'Added Successfully');
            }
		  
		    
		    $this->load->view('products/add-product-next',$data);

	    }
	    
    }
    
    
    
    
    

    public function get_stock_data() {

     	$id = $this->uri->segment(4);

     	$data['product_id'] = $id;

     	$encrypted_id = $this->uri->segment(3);

     	$decrypted_id = base64_decode($encrypted_id);

     	$data['product_name'] = preg_replace(sprintf('/%s/', SALT_KEY.CKRAT_KEY), '', $decrypted_id);

		$data['cat_id'] = $this->uri->segment(5);

     	$data['stock'] = $this->model->getStockData($id);

     	$this->load->view('products/list-stock',$data);
	}

	 public function stock_create() {
	    
	    $encrypted_id = $this->uri->segment(3);

     	$decrypted_id = base64_decode($encrypted_id);

	   // $data['product_name'] = preg_replace(sprintf('/%s/', SALT_KEY.CKRAT_KEY), '',$decrypted_id);
	   
	    $data['product_name'] = preg_replace(sprintf('/%s/', SALT_KEY.CKRAT_KEY), '',$decrypted_id);
	    
	    
	    $cat_id = $this->uri->segment(5);

	    $data['cat_id'] = $cat_id;

	    $data['product_id'] = $this->uri->segment(4);

	    $data['option'] = $this->model->getOptionProduct($cat_id);

	    $this->load->view('products/add-product-next',$data);

	 }

	  public function create_stock_data() {

    	$this->form_validation->set_rules('price', 'Price', 'trim|required|xss_clean');

    	$cat_id = $this->uri->segment(5);

	    if($this->form_validation->run() == FALSE) 
	    {
	    	
		    $data['option'] = $this->model->getOptionProduct($cat_id);

		    $this->load->view('products/add-product-next',$data);
	    }
	    else 
	    {

	        if (!is_dir('uploads/product_multimage'))
		    {
			    mkdir('uploads/product_multimage/', 0755, TRUE);
		    }

	        if($_FILES['upl_files']['name'])
	        {

			    $number_of_files_uploaded = count($_FILES['upl_files']['name']);

	            for ($i = 0; $i < $number_of_files_uploaded; $i++) :

					$_FILES['userfile']['name']     = $_FILES['upl_files']['name'][$i];
				    $_FILES['userfile']['type']     = $_FILES['upl_files']['type'][$i];
				    $_FILES['userfile']['tmp_name'] = $_FILES['upl_files']['tmp_name'][$i];
				    $_FILES['userfile']['error']    = $_FILES['upl_files']['error'][$i];
				    $_FILES['userfile']['size']     = $_FILES['upl_files']['size'][$i];
				    
				    
				    
				    
				    $config = array(
				    'allowed_types' => 'jpg|jpeg|png|gif|webp',
				    'max_size'      => 3000,
				    'overwrite'     => FALSE,
				    'upload_path'   => 'uploads/product_multimage/',
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
			        $config['source_image'] = 'uploads/product_multimage/'.$file_name;
			        $config['create_thumb'] = FALSE;
			        $config['maintain_ratio'] = TRUE;
			        $config['width']     = 400;
			        $config['height']   = 400;
			        $config['new_image']        = 'uploads/product_multimage/' .$file_name;
			       
			        $config['width']     = 800;
			        $config['height']   = 800;
			        $config['new_image']        = 'uploads/product_multimage/zoom/' .$file_name;

			        $this->image_lib->clear();
			        $this->image_lib->initialize($config);
			        $this->image_lib->resize();

			        endif;
	            endfor;

	        }
	        else{

	        	$multi_images[] = "";

	        }

	        $product_id = $this->input->post('product_id');

	        $stock_name = $this->input->post('product_name');

		    $price = $this->input->post('price');
		    $list_price = $this->input->post('list_price');
		    $stock = $this->input->post('stock');
		    $description = $_POST['description'];

		    if(($price <=0) || ($list_price <=0)){

                $status = 0;
            }

            else if(($stock <=0)){

                $status = 2;
            }

            else{

                $status = 1;
            }

		    if( ($price!=0) && ($list_price!=0) ){

            $disc = (($price - $list_price)*100) /$price;

            $discount=round($disc);
            }
            else{

            $discount=0;
            }

		    $data['product_name'] = $this->uri->segment(3);

		    $data['cat_id'] = $cat_id;

		    $data['product_id'] = $this->uri->segment(4);


			$option = $this->input->post('option');

	        $value = array('product_id' => $product_id,'stock_name' => $stock_name,'price' => $price,'list_price' => $list_price,'stock' => $stock,'discount' => $discount,'status' => $status);

	        if(!empty($option[0]) || !empty($filepath[0])){

	        	$value_product = array('status' => $status);

	        }
	        else{

	        	$value_product = array('status' => $status);

	        }

		    $result = $this->model->insertCartStock($value,$multi_images,$option,$product_id,$value_product);


		    $data['option'] = $this->model->getOptionProduct($cat_id);

		    $this->load->view('products/add-product-next',$data);

	    }

    }

	public function edit() {

     	$id = $this->uri->segment(3);

     	$cat_id = $this->uri->segment(5);

     	$data['cat_id']=$cat_id;

     	$data['product'] = $this->model->getEditStockData($id);

		$data['option'] = $this->model->getOptionProduct($cat_id);

     	$this->load->view('products/edit-stock',$data);
	}

	public function update() {
		
    	$this->form_validation->set_rules('price', 'Mrp', 'trim|required|xss_clean');
    	$this->form_validation->set_rules('list_price', 'Sale price', 'trim|required|xss_clean');
    	$this->form_validation->set_rules('stock', 'Stock', 'trim|required|xss_clean');
    	$this->form_validation->set_rules('kg', 'KG', 'trim|required|xss_clean');

    	$id = $this->input->post('id');
    	$cat_id = $this->input->post('cat_id');
    	$product_id = $this->input->post('product_id');
	    $stock_name = $this->input->post('stock_name');
	    $kg = $this->input->post('kg');

	    $data['product_name'] = $stock_name;

		$data['cat_id'] = $cat_id;

		$data['product_id'] = $product_id;

	    if($this->form_validation->run() == FALSE) 
	    {

		    $data['option'] = $this->model->getOptionProduct($cat_id);

		    $this->load->view('products/edit-stock',$data);
	    }
	    else 
	    {

	        if (!is_dir('uploads/product_multimage'))
		    {
			    mkdir('uploads/product_multimage/', 0755, TRUE);
		    }

	        if($_FILES['upl_files']['name'])
	        {

			    $number_of_files_uploaded = count($_FILES['upl_files']['name']);

	            for ($i = 0; $i < $number_of_files_uploaded; $i++) :

					$_FILES['userfile']['name']     = $_FILES['upl_files']['name'][$i];
				    $_FILES['userfile']['type']     = $_FILES['upl_files']['type'][$i];
				    $_FILES['userfile']['tmp_name'] = $_FILES['upl_files']['tmp_name'][$i];
				    $_FILES['userfile']['error']    = $_FILES['upl_files']['error'][$i];
				    $_FILES['userfile']['size']     = $_FILES['upl_files']['size'][$i];
				    $config = array(
				    'allowed_types' => 'jpg|jpeg|png|gif|webp',
				    'max_size'      => 30000,
				    'overwrite'     => FALSE,
				    'upload_path'   => 'uploads/product_multimage/',
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
			        $config['source_image'] = 'uploads/product_multimage/'.$file_name;
			        $config['create_thumb'] = FALSE;
			        $config['maintain_ratio'] = TRUE;
			        $config['width']     = 400;
			        $config['height']   = 400;
			        $config['new_image']        = 'uploads/product_multimage/' .$file_name;
			       
			        $config['width']     = 800;
			        $config['height']   = 800;
			        $config['new_image']        = 'uploads/product_multimage/zoom/' .$file_name;

			        $this->image_lib->clear();
			        $this->image_lib->initialize($config);
			        $this->image_lib->resize();

			        endif;
	            endfor;
	        }
	        else{

	        	$multi_images[] = "";

	        }

		    $price = $this->input->post('price');
		    $list_price = $this->input->post('list_price');
		    $stock = $this->input->post('stock');

		    if(($price <=0) || ($list_price <=0)){

                $status = 0;
            }

            else if(($stock <=0)){

                $status = 2;
            }

            else{

                $status = 1;
            }

		    if( ($price!=0) && ($list_price!=0) ){

            $disc = (($price - $list_price)*100) /$price;

            $discount=round($disc);
            }
            else{

            $discount=0;
            }

			$option = $this->input->post('option');

	        $value = array('product_id' => $product_id,'stock_name' => $stock_name,'price' => $price,'list_price' => $list_price,'stock' => $stock,'discount' => $discount,'status' => $status,'kg' => $kg);

			$this->model->updateStock($id,$product_id,$value,$multi_images,$option);

			$this->session->set_flashdata('update', 'Added Successfully');
			redirect('Product');
			 
		}
	}

	public function stock_delete(){

		$id=$_POST['rowid'];
		$this->model->deleteSelectedStock($id);
		echo "deleted sucessfully";
	
	}

	public function getProductFeature() {

		$cat_id=$_POST['id'];

		$features = $this->model->getFeatureProduct($cat_id);

		if($features)
		{

			echo '<label class="form-control-label" for="inputUserName"><b>Features</b></label><br>';

			foreach ($features as $key => $row) { 

				print_r($row->name);

				echo '<select name="features[]" class="form-control">
		          <option value="">Please Select</option>';

		        foreach ($row->sub as $rowsub) { 

		            echo '<option value="'.$rowsub->var_id.'">'.$rowsub->var_name.'</option>';
		        }   

	            echo '</select>';
            }
        }

	}

	public function deleteImage(){

		$id=$_POST['rowid'];
		$this->model->deleteImage($id);
	}
	
    public function setStatus() 
    {
        $status=$_POST['status'];

        $id=$_POST['rowid'];

        $result=$this->model->setProductStatus($id,$status);

   }

	public function image() {

     	$id = $this->uri->segment(3);

     	$data['stock_id'] = $id;

     	$this->load->view('products/image_list',$data);
	}


    public function image_list() {

    	$stock_id = $this->input->post('stock_id');

        $list = $this->model->get_datatables_image($stock_id);
        $data = array();

        $no = $_POST['start'];

        foreach ($list as $rows) {

	        $no++;
	        $row = array();
	        $row[] = $no;
	        $row[] = '<img alt="No image" src="'.CUSTOM_BASE_URL.'uploads/product_multimage/'.$rows['image'].'" class="img-responsive" height=50 width=50 />';
	        $row[] = '<input size="2"  id="'.$rows['id'].'stock" type="number" min="1" max="2"  onchange = "checkCount('.$rows['id'].')"  value="'.$rows['position'].'">';
	        $data[] = $row;
        }

        $output = array(
        "draw" => $_POST['draw'],
        "recordsTotal" => $this->model->count_all_image($stock_id),
        "recordsFiltered" => $this->model->count_filtered_image($stock_id),
        "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }


	public function setImageCount() {

     	$stock_id = $this->input->post('stock_id');
     	$value = $this->input->post('value');
     	$id = $this->input->post('rowid');

     	$status = $this->model->updateImageCount($stock_id,$value,$id);

     	echo $status;
	}
	 	
} 

?>