<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Slot extends MY_Auth_Controller {

    protected $ci_name;//declare ci_name varriabe current controler name as image folder name to upload image

    public function __construct() 
    {
        parent::__construct();
        $this->ci_name = strtolower($this->router->fetch_class());
        $this->load->model('Slot_model','model');
        $this->load->library('Image');//custom image library to crop
        if (!$this->is_logged_in()) //login only registered user from db
        { 
          redirect('Login');
        }
    }
  
    public function index() {

        $this->load->view('slot/list');

    }


    public function cat_list() {
        

        $list = $this->model->get_datatables();
      
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $career) {
            
        $from = date('h:i a', strtotime($career['from_time'])); 
        $to = date('h:i a', strtotime($career['to_time']));    

        $no++;
        $row = array();
        $row[] = $no;
        $row[] = $from;
        $row[] = $to;

        if($career['status'] == 1){
        
        $row[] = '<input type="button" class="btn  btn-primary" id="'.$career['id'].'lifecheck"  onclick = "Deactive('.$career['id'].')" class="group1" value="ACTIVE" />';
        
        }
        
        else if($career['status'] == 0){
        
        $row[] = '<input type="button" class="btn  btn-danger" id="'.$career['id'].'lifecheck"  onclick = "Active('.$career['id'].')" class="group1" value="DEACTIVE" />'; 
            
        }        
          
        //add html for action
        $row[] = '
        
        <a data-toggle="modal" data-id='.$career['id'].' data-target="#del" class="btn  btn-danger" href="#"><i class="fa  fa-trash-o" aria-hidden="true"></i></a>
        ';
//<a href="slot/edit/'.$career['id'].'" class="btn  btn-warning" href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
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

        $this->form_validation->set_rules('from_time', 'From Time', 'trim|required|xss_clean');
        $this->form_validation->set_rules('to_time', 'To Time', 'trim|required|xss_clean');
 

        if($this->form_validation->run() == FALSE) 
        {
      
            $this->load->view('slot/add');
        }
        else 
        {


            $from_time = $this->input->post('from_time');
            $to_time = $this->input->post('to_time');

            $value = array('to_time' => $to_time,'from_time' => $from_time);

            $this->model->insertData($value);
            $this->session->set_flashdata('add', 'Added Successfully');

            redirect('Slot');
        }

    }

    public function edit() {

        $id = $this->uri->segment(3);
        $data['result'] = $this->model->getDataEdit($id);
        $this->load->view('slot/edit',$data);
    }

    public function update() {

        $this->form_validation->set_rules('from_time', 'From Time', 'trim|required|xss_clean');
        $this->form_validation->set_rules('to_time', 'To Time', 'trim|required|xss_clean');

        $id = $this->input->post('id');

        if($this->form_validation->run() == FALSE) 
        {
            $data['result'] = $this->model->getDataEdit($id);

            $this->load->view('slot/edit',$data);
        }
        else 
        {
            $from_time = $this->input->post('from_time');
            $to_time = $this->input->post('to_time');

            $value = array('to_time' => $to_time,'from_time' => $from_time);
            
            $this->model->updateData($id,$value);

            $this->session->set_flashdata('update', 'Added Successfully');
            redirect('Slot');
        } 

    }

    public function delete() {

        $this->load->view('slot/delete');
        if (isset($_POST['delete'])) 
        {
            $id=$_POST['id'];
            $this->model->deleteData($id);
            redirect('Slot');
        }
    }

    public function active() {

        $id = $this->input->post('id');

        $value = array('status'=>1);
        $this->model->updateData($id,$value);

    }


    public function deactive() {

        $id = $this->input->post('id');

        $value = array('status'=>0);
        $this->model->updateData($id,$value);
    }


    public function check_slot() {

        $from_time = $this->input->post('from_time');
        $to_time = $this->input->post('to_time');

        $status = $this->model->checkSlot($from_time,$to_time);

        echo $status;

    }


}
