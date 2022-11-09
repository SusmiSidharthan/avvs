<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Testimonials extends MY_Auth_Controller {

    protected $ci_name;//declare ci_name varriabe current controler name as image folder name to upload image

    public function __construct() 
    {
        parent::__construct();
        $this->ci_name = strtolower($this->router->fetch_class());
        $this->load->model('Testimonials_model','model');
        $this->load->library('Image');//custom image library to crop
        if (!$this->is_logged_in()) //login only registered user from db
        { 
          redirect('Login');
        }
    }
  
    public function index() {

        $this->load->view('testimonials/list');

    }


    public function cat_list() {
        

        $list = $this->model->get_datatables();
      
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $career) {
            
        $no++;
        $row = array();
        $row[] = $no;
        $row[] = $career['name'];
        $row[] = $career['message'];
        $row[] = '<img src="'.CUSTOM_BASE_URL.'uploads/testimonials/crop/'.$career['image'].'" class="img-responsive" height=60 width=80 /></a>';
          
        //add html for action
        $row[] = '
        <a href="testimonials/edit/'.$career['id'].'" class="btn  btn-warning" href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
        <a data-toggle="modal" data-id='.$career['id'].' data-target="#del" class="btn  btn-danger" href="#"><i class="fa  fa-trash-o" aria-hidden="true"></i></a>
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
   
    public function view() {

        $id =  $_POST['rowid']  ; 
      
        $result = $this->model->get_details($id); 
    
		$data['result'] = $this->model->get_details($id);
	    $this->load->view('testimonials/view',$data);
           
    }
     
     

    public function create() {

        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');

        if (empty($_FILES['image_file']['name']))
        {
            $this->form_validation->set_rules('image_file', 'Image', 'required');
        }


        if($this->form_validation->run() == FALSE) 
        {
      
            $this->load->view('testimonials/add');
        }
        else 
        {

            $this->image->imageCropAdd();//call custom image library

            $image = $this->image->crop_image_name;

           

            $name = $this->input->post('name');
            $message = $this->input->post('message');


            $value = array('name' => $name,'message' => $message,'image' => $image);

            $data['result'] = $this->model->insertData($value);
            $this->session->set_flashdata('add', 'Added Successfully');

            redirect('Testimonials');
        }

    }

    public function edit() {

        $id = $this->uri->segment(3);
        $data['result'] = $this->model->getEdit($id);
        $this->load->view('testimonials/edit',$data);
    }

    public function update() {

        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');

        $id = $this->input->post('id');

        if($this->form_validation->run() == FALSE) 
        {
            $data['result'] = $this->model->getEdit($id);

            $this->load->view('testimonials/edit',$data);
        }
        else 
        {
            $name = $this->input->post('name');
            $message = $this->input->post('message');

            $this->image->imageCropAdd();//call custom image library

            if($this->image->crop_image_name !="")//if there is image and pdf is null
            {
                $image =  $this->image->crop_image_name;

                $value = array('name' => $name,'message' => $message,'image' => $image);

            } 
            else{

                $value = array('name' => $name,'message' => $message);

            }
            
            $this->model->updateData($id,$value);

            $this->session->set_flashdata('update', 'Added Successfully');
            redirect('Testimonials');
        } 

    }

    public function delete() {

        $this->load->view('testimonials/delete');
        if (isset($_POST['delete'])) 
        {
            $id=$_POST['id'];
            $this->model->deleteData($id);
            redirect('Testimonials');
        }
    }


} ?>
