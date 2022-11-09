<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends MY_Auth_Controller {

    protected $ci_name;//declare ci_name varriabe current controler name as image folder name to upload image

    public function __construct() {

        parent::__construct();

        $this->ci_name = strtolower($this->router->fetch_class());

        $this->load->model('Clients_model','model');
        
        if (!$this->is_logged_in()) {

            redirect('Login');
        }
    }

    public function index() {

        $this->load->view('clients/list');
    }

    public function user_list() {

        $list = $this->model->get_datatables();
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $val) {

            if($val->status=='1') {

                $selected='<option value="1" selected>Active</option>
                           <option value="0" >Deactive</option>';

                $style = "background-color:none";
            }

            else if($val->status=='0') {

                $selected='<option value="0" selected>Deactive</option>
                           <option value="1" >Active</option>';

                $style = "background-color:yellow";
            }

            else{

                $selected='';

            }


            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $val->phone;
            $row[] = $val->user_name;
            $row[] = $val->email;

            $row[] = '<a href="Clients/address/'.$val->id.'" class="btn  btn-info" href="#">Address List</i></a>';

            // $row[] = '<img alt="no image" src="'.CUSTOM_BASE_URL.'uploads/profile/'.$val->prof_image.'" class="img-responsive" height=60 width=80 /></a>';

            //$row[] = '<select style='.$style.'  name='.$val->id.' onchange="getval(this);" id="mySelect">'.$selected.'</select>';
              
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
   
  
    public function setStatus() 
    {
        $status=$_POST['status'];

        $id=$_POST['rowid'];

        $result=$this->model->setOrderStatus($id,$status);

   }


    public function address() {

        $data['user_id'] = $this->uri->segment(3);

        $this->load->view('clients/address_list',$data);
    }

    public function address_list() {

        $user_id = $this->input->post('user_id');

        $list = $this->model->get_datatables_address($user_id);
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $val) {



            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $val->name;
            $row[] = $val->phone;
            $row[] = $val->pincode;
            $row[] = $val->address;


            $data[] = $row;
        }

        $output = array(
        "draw" => $_POST['draw'],
        "recordsTotal" => $this->model->count_all_address($user_id),
        "recordsFiltered" => $this->model->count_filtered_address($user_id),
        "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
   
}
