<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Msg extends MY_Auth_Controller {

    protected $ci_name;//declare ci_name varriabe current controler name as image folder name to upload image

    public function __construct() 
    {
        parent::__construct();
        $this->ci_name = strtolower($this->router->fetch_class());
        $this->load->model('Msg_model','model');
       
        if(empty($this->session->userdata('userAdminDetails')) ) //check user as admin
		{
		    redirect('login');
		}

    }
  
    public function index() {

        $this->load->view('msg/list');

    }


    public function list() {
        
        $list = $this->model->get_datatables();
// var_dump( $list); die;

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $career) {

            // var_dump( $career); die;

        $no++;
        $row = array();
        $row[] = $no;
        $row[] = $career->name;

        $row[] = $career->email;
        $row[] = $career->subject ;   
        $row[] = $career->message ;

        $row[] =  date("d-m-Y", strtotime($career->created_at)) ;                     

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
   
 
}
