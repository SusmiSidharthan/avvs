<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Delivery_charge extends MY_Auth_Controller {

    protected $ci_name;//declare ci_name varriabe current controler name as image folder name to upload image

    public function __construct() 
    {
        parent::__construct();
        $this->ci_name = strtolower($this->router->fetch_class());
        $this->load->model('Delivery_charge_model','model');
        $this->load->library('Image');//custom image library to crop
        if (!$this->is_logged_in()) //login only registered user from db
        { 
          redirect('Login');
        }
    }
  
    public function index() {

        $this->load->view('delivery/list');

    }


    public function cat_list() {


        $list = $this->model->get_datatables();
      
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $career) {


            
        $no++;
        $row = array();
        $row[] = $no;
        $row[] = $career['from_pincode'];
        // $row[] = $career['to_pincode'];
        $row[] = $career['amount'];

          
        //add html for action
        $row[] = '
        <a href="delivery_charge/edit/'.$career['id'].'" class="btn  btn-warning" href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
        <a data-toggle="modal" data-id='.$career['id'].' data-target="#del" class="btn  btn-danger" href="#"><i class="fa  fa-trash-o" aria-hidden="true"></i></a>
        <a data-toggle="modal" data-id='.$career['id'].' data-target="#kg-modal" class="btn  bg-olive" href="#"><i class="fa  fa-clone" aria-hidden="true"></i> Add KG Amount</a>
        <a href="delivery_charge/kg_delivery_charge/'.$career['id'].'" class="btn  btn-info" href="#">KG List</i></a>' ; 

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

        $this->form_validation->set_rules('from', 'Pincode', 'trim|required|xss_clean');
        //$this->form_validation->set_rules('to', 'To', 'trim|required|xss_clean');
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|xss_clean');


        if($this->form_validation->run() == FALSE) 
        {
 
            $this->load->view('delivery/add');
        }
        else 
        {

            $from = $this->input->post('from');
            //$to = $this->input->post('to');
            $amount = $this->input->post('amount');

            $value = array('from_pincode' => $from,'amount' => $amount);

            $data['result'] = $this->model->insertPincodeData($value);




            
            $this->session->set_flashdata('add', 'Added Successfully');

            redirect('Delivery_charge');
        }

    }

    public function edit() {

        $id = $this->uri->segment(3);

        $data['result'] = $this->model->getPincodeDataEdit($id);
        $this->load->view('delivery/edit',$data);
    }

    public function update() {

        $this->form_validation->set_rules('from', 'Pincode', 'trim|required|xss_clean');
        //$this->form_validation->set_rules('to', 'To', 'trim|required|xss_clean');
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|xss_clean');


        $id = $this->input->post('id');

        if($this->form_validation->run() == FALSE) 
        {

        $data['result'] = $this->model->getPincodeDataEdit($id);

        $this->load->view('delivery/edit',$data);
        }
        else 
        {
            
            $from = $this->input->post('from');
            //$to = $this->input->post('to');
            $amount = $this->input->post('amount');

            $value = array('from_pincode' => $from,'amount' => $amount);
            
            $this->model->updatePincodeData($id,$value);



            $this->session->set_flashdata('update', 'Added Successfully');
            redirect('Delivery_charge');
        } 

    }

    public function delete() {

        $this->load->view('delivery/delete');
        if (isset($_POST['delete'])) 
        {
            $id=$_POST['id'];
            $this->model->deletePincodeData($id);


            redirect('Delivery_charge');
        }
    }

    public function kg_details() {

        $id=$this->input->post('rowid');
        
        $this->load->view('delivery/kg_amount');

    }

    public function kg_ins() {
           
            $from = $_POST['from'];
            $to = $_POST['to'];
            $amount = $_POST['amount'];
            $id=$_POST['id'];
             if($from>$to)
            {
                echo "<script>alert('From Value must be lessthan of To Value,.');window.location.href = 'https://avvvs.com/admin/Delivery_charge';</script>";exit;
               
            }
             else if($from<=0)
            {
                echo "<script>alert('From Value  Must be Greaterthan Zero.');window.location.href = 'https://avvvs.com/admin/Delivery_charge';</script>";exit;
                
            }
             else if($from==$to)
            {
                echo "<script>alert('To value and From Value Dont be Equal.');window.location.href = 'https://avvvs.com/admin/Delivery_charge';</script>";exit;
                
            }
            else
            {
                $value = array('pincode_id'=>$id,'from_kg'=>$from,'to_kg'=>$to,'amount'=>$amount); 
            
            $this->model->insertKgData($value,$id); 


            redirect('Delivery_charge');
                 //redirect('Delivery_charge');
            }

   
    }


    public function kg_delivery_charge() {

        $data['pincode_id'] = $this->uri->segment(3);
        $this->load->view('delivery/kg_list',$data);

    }


    public function kg_list() {

        $pincode_id = $this->input->post('pincode_id');

        $list = $this->model->get_datatables_kg($pincode_id);
      
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $career) {


            
        $no++;
        $row = array();
        $row[] = $no;
        $row[] = $career['from_kg'];
        $row[] = $career['to_kg'];
        $row[] = $career['amount'];

          
        //add html for action
        $row[] = '<a data-toggle="modal" data-id='.$career['id'].' data-pid='.$pincode_id.' data-target="#del" class="btn  btn-danger" href="#"><i class="fa  fa-trash-o" aria-hidden="true"></i></a>' ; 

        $data[] = $row;
        }
        $output = array(
        "draw" => $_POST['draw'],
        "recordsTotal" => $this->model->count_all_kg($pincode_id),
        "recordsFiltered" => $this->model->count_filtered_kg($pincode_id),
        "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }


    public function delete_kg() {

        $this->load->view('delivery/kg_delete');
        if (isset($_POST['delete'])) 
        {
            $id=$_POST['id'];
            $pincode_id=$_POST['pincode_id'];
            $this->model->deleteKgData($id);


            redirect("Delivery_charge/kg_delivery_charge/$pincode_id");
        }
    }


}