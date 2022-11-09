<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contact_us extends MY_Auth_Controller {

    protected $ci_name;//declare ci_name varriabe current controler name as image folder name to upload image

    public function __construct() 
    {
        parent::__construct();
        $this->ci_name = strtolower($this->router->fetch_class());
        $this->load->model('Contact_us_model','model');
        $this->load->library('Image');//custom image library to crop
        if (!$this->is_logged_in()) //login only registered user from db
        { 
          redirect('Login');
        }
    }
  
    public function index() {

        $this->load->view('contact_us/list');
    }

    public function Subscriber_list() {

        $list = $this->model->get_datatables();
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $subscriber) {
        
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $subscriber->name;
            $row[] = $subscriber->email;
            $row[] = $subscriber->number;
            $row[] = $subscriber->created_at;
            $row[] = $subscriber->message;
            $row[] = '<a data-toggle="modal" data-id='.$subscriber->id.' data-target="#del" class="btn  btn-danger" href="#"><i class="fa  fa-trash-o" aria-hidden="true"></i></a>';
              
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
   
  
    public function delete(){

        $this->load->view('contact_us/delete');

        if (isset($_POST['delete'])) 
        {
            $id=$_POST['id'];
            $this->model->delete($id);
            redirect('Contact_us');
        }
    }

}
