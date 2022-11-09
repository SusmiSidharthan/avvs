<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends MY_Auth_Controller {

	protected $ci_name;//declare ci_name varriabe current controler name as image folder name to upload image

    public function __construct() 
    {
	    parent::__construct();
	    $this->ci_name = strtolower($this->router->fetch_class());
	    $this->load->model('Gallery_model','model');
	    $this->load->library('upload');
	    $this->load->library('Image');//custom image library to crop
	     
	    if (!$this->is_logged_in()) //login only registered user from db
	    { 
	      redirect('Login');
	    }
    }
  
    public function index() {

    	$this->load->view('gallery/list');
    }

    public function gallerylist() {

        $list = $this->model->get_datatables();
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $banner) {


	        $no++;

	        $row = array();

	        $row[] = $no;
	        $row[] = $banner['album_title'];
	        $row[] = $banner['title'];
	        
	          
	        //add html for action
	        $row[] = '<a href=" '.CUSTOM_BASE_URL .'gallery/edit/'.$banner['id'].'" class="btn  btn-warning" href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
	        <a data-toggle="modal" data-id='.$banner['id'].' data-target="#delModal" class="btn  btn-danger" href="#"><i class="fa  fa-trash-o" aria-hidden="true"></i></a>';

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

    public function create() {

	    $this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean');




	    if($this->form_validation->run() == FALSE) 
	    {   
	       
	        $data['album'] = $this->model->getAlbum();
	        
		    $this->load->view('gallery/add',$data);
	    }
	    else 
	    {
	        
	        $img_count = count(array_filter($_FILES['image_file']['name']));
	        $title = $this->input->post('title');
	        $description = $this->input->post('description');
	        $album = $this->input->post('album');
	        
	     	$value = array('album_id' => $album,'title' => $title,'description' => $description);
		   

 			$gallery_id = $this->model->insertForGallery($value);
	        
	        
	         for($i = 0; $i < $img_count; $i++){ 
	        

                            $_FILES['file']['name']     = $_FILES['image_file']['name'][$i]; 
                            $_FILES['file']['type']     = $_FILES['image_file']['type'][$i]; 
                            $_FILES['file']['tmp_name'] = $_FILES['image_file']['tmp_name'][$i]; 
                            $_FILES['file']['error']    = $_FILES['image_file']['error'][$i]; 
                            $_FILES['file']['size']     = $_FILES['image_file']['size'][$i]; 
                            
                            
                            if (!is_dir('uploads/gallery/'))
                             {
                                mkdir('uploads/gallery/', 0755, TRUE);
                             }
                              
                            $uploadPath = 'uploads/gallery/'; 
                            $config['upload_path'] = $uploadPath; 
                            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                            $config['encrypt_name'] = TRUE;
                             
                            // Load and initialize upload library 
                            $this->load->library('upload', $config); 
                            $this->upload->initialize($config); 
                             
                            // Upload file to server 
                            if($this->upload->do_upload('file')){ 
                                // Uploaded file data 
                                $fileData = $this->upload->data(); 
                                $uploadData[$i]['gallery_id'] = $gallery_id; 
                                $uploadData[$i]['image'] = $fileData['file_name']; 
                                $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s"); 
                            }
		  

            }

                          
                        if(!empty($uploadData)){ 
                            // Insert files info into the database 
                            $insert = $this->model->insertImage($uploadData); 
                        } 
        redirect('Gallery');
        }

    }

	       


	public function edit() {

	 	$id = $this->uri->segment(3);


        if(empty($id))
           {
               echo 'Requested Gallery Not Exist.';exit;
           }
        else{ 	 	

	 	
	 	$data['result'] = $this->model->getGallery($id);
	 	$data['album'] = $this->model->getAlbum();
	 	$data['images'] = $this->model->getImages($id);
    	$this->load->view('gallery/edit',$data);

}
}
    public function update() {

		$this->form_validation->set_rules('title', 'title', 'trim|required|xss_clean');


	    $id = $this->input->post('id');
	    
        $status = $this->model->checkInst_id($id);   
        
        if($status == 0){
            
         echo 'Requested Gallery Not Exist.';exit;   
            
        }
	 	else{	    

		if (isset($_POST['submit'])) 
		{

			if($this->form_validation->run() == FALSE) 
		    {
			    $data['result'] = $this->model->getGallery($id);
			 	$data['album'] = $this->model->getAlbum();
			 	$data['images'] = $this->model->getImages($id);
			    $this->load->view('gallery/edit',$data);
		    }
			else 
			{
			
			$img_count = count(array_filter($_FILES['image_file']['name']));
			
			$title = $this->input->post('title');
	        $description = $this->input->post('description');
	        $album = $this->input->post('album');
	        
	        $value = array('album_id' => $album,'title' => $title,'description' => $description);


 			$gallery_id = $this->model->updateForGallery($value,$id);


	         for($i = 0; $i < $img_count; $i++){ 
	        

                            $_FILES['file']['name']     = $_FILES['image_file']['name'][$i]; 
                            $_FILES['file']['type']     = $_FILES['image_file']['type'][$i]; 
                            $_FILES['file']['tmp_name'] = $_FILES['image_file']['tmp_name'][$i]; 
                            $_FILES['file']['error']    = $_FILES['image_file']['error'][$i]; 
                            $_FILES['file']['size']     = $_FILES['image_file']['size'][$i]; 
                            
                            
                            if (!is_dir('uploads/gallery/'))
                             {
                                mkdir('uploads/gallery/', 0755, TRUE);
                             }
                              
                            $uploadPath = 'uploads/gallery/'; 
                            $config['upload_path'] = $uploadPath; 
                            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                            $config['encrypt_name'] = TRUE;
                             
                            // Load and initialize upload library 
                            $this->load->library('upload', $config); 
                            $this->upload->initialize($config); 
                             
                            // Upload file to server 
                            if($this->upload->do_upload('file')){ 
                                // Uploaded file data 
                                $fileData = $this->upload->data(); 
                                $uploadData[$i]['gallery_id'] = $id; 
                                $uploadData[$i]['image'] = $fileData['file_name']; 
                                $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s"); 
                            }
		  

            }

                          
                        if(!empty($uploadData[0]['image'])){ 
                            // Insert files info into the database 
                            $insert = $this->model->updateImage($uploadData,$id); 
                        }

				$this->session->set_flashdata('update', 'Added Successfully');
				redirect('Gallery');
			} 

		}
	 	}
	}

	public function delete(){

	    $this->load->view('gallery/delete');
	    if (isset($_POST['delete'])) 
	    {
		    $id=$_POST['rowid'];


        if(empty($id))
           {
               echo 'Requested Gallery Not Exist.';exit;
           }
        else{ 	 	
            

		    
		    //$name=$_POST['name'];
			$this->model->deleteGallery($id);
			$this->model->deleteGalleryImages($id);
	        redirect('Gallery');

	}

}
}


}