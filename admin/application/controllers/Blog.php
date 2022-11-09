<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MY_Auth_Controller {

    protected $ci_name;//declare ci_name varriabe current controler name as image folder name to upload image

    public function __construct() 
    {
        parent::__construct();
        $this->ci_name = strtolower($this->router->fetch_class());
        $this->load->model('Blog_model','model');
        $this->load->library('Image');//custom image library to crop
        if (!$this->is_logged_in()) //login only registered user from db
        { 
          redirect('Login');
        }
    }
  
    public function index() {

        $this->load->view('blog/list');

    }


    public function blog_list() {
        

        $list = $this->model->get_datatables();
      
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $career) {
            
        $no++;
        $row = array();
        $row[] = $no;
        $row[] = $career['title'];
        $row[] = $career['date'];
        $row[] = $career['written_by'];
        $row[] = '<img src="'.CUSTOM_BASE_URL.'uploads/blog/crop/'.$career['image'].'" class="img-responsive" height=60 width=80 /></a>';
          
        //add html for action
        $row[] = '
        <a href="blog/edit/'.$career['id'].'" class="btn  btn-warning" href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
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
   
     public function View() {

        $id =  $_POST['rowid']  ; 
      
        $result = $this->model->get_details($id); 
    
		$data['result'] = $this->model->get_details($id);
	    $this->load->view('blog/view',$data);
           
     }
     
     

    public function create() {

        $this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean');
        $this->form_validation->set_rules('date', 'Date', 'trim|required|xss_clean');
        $this->form_validation->set_rules('written_by', 'Written By', 'trim|required|xss_clean');
        $this->form_validation->set_rules('paragraph1', 'Paragraph1', 'trim|required|xss_clean');
        if (empty($_FILES['image_file']['name']))
        {
            $this->form_validation->set_rules('image_file', 'Image', 'required');
        }


        if($this->form_validation->run() == FALSE) 
        {
      
            $this->load->view('blog/add');
        }
        else 
        {

             $this->image->imageCropAdd();//call custom image library

            $image= $this->image->crop_image_name;

           

            $date = $this->input->post('date');
            $written_by = $this->input->post('written_by');
            $title = $this->input->post('title');
            $paragraph1 = $this->input->post('paragraph1');
            $paragraph2 = $this->input->post('paragraph2');
            $meta_title = $this->input->post('meta_title');
            $meta_key = $this->input->post('meta_key');
            $canonical_link = $this->input->post('canonical_link');
            $meta_description = $this->input->post('meta_description');


            $value = array('date' => $date,'written_by' => $written_by,'title' => $title,'paragraph1' => $paragraph1,'paragraph2' => $paragraph2,'image' => $image,'meta_title' => $meta_title,'meta_key' =>$meta_key,'canonical_link'=>$canonical_link,'meta_description'=>$meta_description);

            $data['result'] = $this->model->insertData($value);
            $this->session->set_flashdata('add', 'Added Successfully');

            redirect('Blog');
        }

    }

    public function edit() {

        $id = $this->uri->segment(3);
        $data['result'] = $this->model->getEdit($id);
        $this->load->view('blog/edit',$data);
    }

    public function update() {

        $this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean');
        $this->form_validation->set_rules('date', 'Date', 'trim|required|xss_clean');
        $this->form_validation->set_rules('written_by', 'Written By', 'trim|required|xss_clean');
        $this->form_validation->set_rules('paragraph1', 'Paragraph1', 'trim|required|xss_clean');

        $id = $this->input->post('id');

        if($this->form_validation->run() == FALSE) 
        {
            $data['result'] = $this->model->getEdit($id);

            $this->load->view('blog/edit',$data);
        }
        else 
        {
            $date = $this->input->post('date');
            $written_by = $this->input->post('written_by');
            $title = $this->input->post('title');
            $paragraph1 = $this->input->post('paragraph1');
            $paragraph2 = $this->input->post('paragraph2');
            $meta_title = $this->input->post('meta_title');
            $meta_key = $this->input->post('meta_key');
            $canonical_link = $this->input->post('canonical_link');
            $meta_description = $this->input->post('meta_description');

            $this->image->imageCropAdd();//call custom image library

            if($this->image->crop_image_name !="")//if there is image and pdf is null
            {
                $image =  $this->image->crop_image_name;

                $value = array('date' => $date,'written_by' => $written_by,'title' => $title,'paragraph1' => $paragraph1,'paragraph2' => $paragraph2,'image' => $image,'meta_title' => $meta_title,'meta_key' =>$meta_key,'canonical_link'=>$canonical_link,'meta_description'=>$meta_description);

            } 
            else{

                $value = array('date' => $date,'written_by' => $written_by,'title' => $title,'paragraph1' => $paragraph1,'paragraph2' => $paragraph2,'meta_title' => $meta_title,'meta_key' =>$meta_key,'canonical_link'=>$canonical_link,'meta_description'=>$meta_description);

            }
            
            $this->model->updateData($id,$value);

            $this->session->set_flashdata('update', 'Added Successfully');
            redirect('Blog');
        } 

    }

    public function delete() {

        $this->load->view('blog/delete');
        if (isset($_POST['delete'])) 
        {
            $id=$_POST['id'];
            $this->model->deleteData($id);
            redirect('Blog');
        }
    }


}
