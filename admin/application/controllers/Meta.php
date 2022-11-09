<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Meta extends MY_Auth_Controller {

    protected $ci_name;//declare ci_name varriabe current controler name as image folder name to upload image

    public function __construct() 
    {
        parent::__construct();
        $this->ci_name = strtolower($this->router->fetch_class());
        $this->load->model('Meta_model','model');
        if (!$this->is_logged_in()) //login only registered user from db
        { 
          redirect('Login');
        }
    }
  
    public function index() {

        $this->load->view('meta/list');

    }


    public function cat_list() {
        

        $list = $this->model->get_datatables();
      
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $career) {
            
        $no++;
        $row = array();
        $row[] = $no;
        $row[] = $career['page'];
        $row[] = $career['meta_title'];
        $row[] = $career['meta_key'];
        $row[] = $career['canonical_link'];
        $row[] = $career['meta_description'];
        $row[] = $career['seo_name'];

        //add html for action
        $row[] = '
        <a href="meta/edit/'.$career['id'].'" class="btn  btn-warning" href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
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
	    $this->load->view('meta/view',$data);
           
     }
     
     

    public function create() {

        $this->form_validation->set_rules('page', 'Page', 'trim|required|xss_clean');
        $this->form_validation->set_rules('meta_title', 'Meta Title', 'trim|required|xss_clean');
        $this->form_validation->set_rules('meta_key', 'Meta Key', 'trim|required|xss_clean');
        $this->form_validation->set_rules('canonical_link', 'Canonical Link', 'trim|required|xss_clean');
        $this->form_validation->set_rules('meta_description', 'Meta Description', 'trim|required|xss_clean');
        $this->form_validation->set_rules('seo_name', 'SEO Name', 'trim|required|xss_clean');

        if($this->form_validation->run() == FALSE) 
        {
      
            $this->load->view('meta/add');
        }
        else 
        {


            $page = $this->input->post('page');
            $meta_title = $this->input->post('meta_title');
            $meta_key = $this->input->post('meta_key');
            $canonical_link = $this->input->post('canonical_link');
            $meta_description = $this->input->post('meta_description');
            $seo_name = $this->input->post('seo_name');


            $value = array('page' => $page,'meta_title' => $meta_title,'meta_key' =>$meta_key,'canonical_link'=>$canonical_link,'meta_description'=>$meta_description,'seo_name'=>$seo_name);

            $data['result'] = $this->model->insertData($value);
            $this->session->set_flashdata('add', 'Added Successfully');

            redirect('Meta');
        }

    }

    public function edit() {

        $id = $this->uri->segment(3);
        $data['result'] = $this->model->getEdit($id);
        $this->load->view('meta/edit',$data);
    }

    public function update() {

        $this->form_validation->set_rules('page', 'Page', 'trim|required|xss_clean');
        $this->form_validation->set_rules('meta_title', 'Meta Title', 'trim|required|xss_clean');
        $this->form_validation->set_rules('meta_key', 'Meta Key', 'trim|required|xss_clean');
        $this->form_validation->set_rules('canonical_link', 'Canonical Link', 'trim|required|xss_clean');
        $this->form_validation->set_rules('meta_description', 'Meta Description', 'trim|required|xss_clean');
        $this->form_validation->set_rules('seo_name', 'SEO Name', 'trim|required|xss_clean');

        $id = $this->input->post('id');

        if($this->form_validation->run() == FALSE) 
        {
            $data['result'] = $this->model->getEdit($id);

            $this->load->view('meta/edit',$data);
        }
        else 
        {
            $page = $this->input->post('page');
            $meta_title = $this->input->post('meta_title');
            $meta_key = $this->input->post('meta_key');
            $canonical_link = $this->input->post('canonical_link');
            $meta_description = $this->input->post('meta_description');
            $seo_name = $this->input->post('seo_name');


                $value = array('page' => $page,'meta_title' => $meta_title,'meta_key' =>$meta_key,'canonical_link'=>$canonical_link,'meta_description'=>$meta_description,'seo_name'=>$seo_name);

            $this->model->updateData($id,$value);

            $this->session->set_flashdata('update', 'Added Successfully');
            redirect('Meta');
        } 

    }

    public function delete() {

        $this->load->view('meta/delete');
        if (isset($_POST['delete'])) 
        {
            $id=$_POST['id'];
            $this->model->deleteData($id);
            redirect('Meta');
        }
    }


}
