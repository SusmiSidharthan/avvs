<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Consulting extends MY_Auth_Controller {

    protected $ci_name;//declare ci_name varriabe current controler name as image folder name to upload image

    public function __construct() {

        parent::__construct();

        $this->ci_name = strtolower($this->router->fetch_class());

        $this->load->model('Consulting_model','model');
        
        if (!$this->is_logged_in()) {

            redirect('Login');
        }
    }

    public function index() {

        $this->load->view('consulting/list');
    }

    public function consulting_list() {

        $list = $this->model->get_datatables();
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $product) {

            $time = "$product->from_time - $product->to_time";

            if($product->status=='1') {

                $selected='<option value="1" selected>Active</option>
                           <option value="0" >Deactive</option>';

                $style = "background-color:none";
            }

            else if($product->status=='0') {

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
            $row[] = $product->place;
            $row[] = $product->patientname.''.$product->lastname;
            $row[] = $product->phone;
            $row[] = $product->dob;
            $row[] = $product->doc_name;
            $row[] = date("d-m-Y", strtotime($product->date)); 
            $row[] = $time;
            
            $row[] = '<a data-toggle="modal" data-id='.$product->consulting_id.' data-target="#view-modal" class="btn  btn-info" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a data-toggle="modal" data-id='.$product->consulting_id.' data-target="#del" class="btn  btn-danger" href="#"><i class="fa  fa-trash-o" aria-hidden="true"></i></a> ';
            
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
 
		$data['result'] = $this->model->get_details($id);
	    $this->load->view('consulting/view',$data);
           
     }
 
 
 
  
    public function setStatus() 
    {
        $status=$_POST['status'];

        $id=$_POST['rowid'];

        $result=$this->model->setOrderStatus($id,$status);

   }
   
   
    public function delete() {

        $this->load->view('consulting/delete');
        if (isset($_POST['delete'])) 
        {
            $id=$_POST['id'];
            $this->model->delete($id);
            redirect('Consulting');
        }
    }
 




    public function doctor_create() {

        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('specialization', 'Specialization', 'trim|required|xss_clean');


        if($this->form_validation->run() == FALSE) 
        {
            $this->load->view('doctor/add');
        }
        else 
        {


            $name = $this->input->post('name');
            $specialization = $this->input->post('specialization');

            $value = array('name' => $name,'specialization' => $specialization);

            $data['result'] = $this->model->insertData($value);
            $this->session->set_flashdata('add', 'Added Successfully');

            redirect('Consulting/doctor_index');
        }

    }


    public function doctor_edit() {

        $id = $this->uri->segment(3);
        $data['result'] = $this->model->getDataEdit($id);
        $this->load->view('doctor/edit',$data);
    }

    public function doctor_update() {

        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('specialization', 'Specialization', 'trim|required|xss_clean');

        $id = $this->input->post('id');

        if($this->form_validation->run() == FALSE) 
        {
            $data['result'] = $this->model->getDataEdit($id);

            $this->load->view('doctor/edit',$data);
        }
        else 
        {
            $name = $this->input->post('name');
            $specialization = $this->input->post('specialization');

            $value = array('name' => $name,'specialization' => $specialization);
            $this->model->updateData($id,$value);

            $this->session->set_flashdata('update', 'Added Successfully');
            redirect('Consulting/doctor_index');
        } 

    }

    public function doctor_delete() {

        $this->load->view('doctor/delete');
        if (isset($_POST['delete'])) 
        {
            $id=$_POST['id'];
            $this->model->deleteData($id);
            redirect('Consulting/doctor_index');
        }
    }

 
    public function doctor_index() {

        $this->load->view('doctor/list');

    }


    public function doctor_list() {
        

        $list = $this->model->get_datatables_doctor();
      
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $career) {

        $slot = $this->model->getDoctorSlot($career['id']); 

        $newArray = [];
        $i=0;
        foreach($slot as $key => $value) {

          $from_time = date('h:i a', strtotime($value['from_time']));   

          $to_time = date('h:i a', strtotime($value['to_time']));    

          $newArray[$i]['slot']= $from_time." - ".$to_time;      
          $i++;    
        }

        $sl = array_column($newArray, 'slot');

        $b1=implode(",",$sl);       

        $no++;
        $row = array();
        $row[] = $no;
        $row[] = $career['name'];
        $row[] = $career['specialization'];
        $row[] = $b1;
          
        //add html for action
        $row[] = '<a href="'.CUSTOM_BASE_URL.'consulting/doctor_edit/'.$career['id'].'" class="btn  btn-warning" href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
        <a data-toggle="modal" data-id='.$career['id'].' data-target="#del" class="btn  btn-danger" href="#"><i class="fa  fa-trash-o" aria-hidden="true"></i></a>
        <a data-toggle="modal" data-id='.$career['id'].' data-target="#slot-modal" class="btn  bg-olive" href="#"><i class="fa  fa-time" aria-hidden="true"></i> Add Slot</a>
        ';

        $data[] = $row;
        }
        $output = array(
        "draw" => $_POST['draw'],
        "recordsTotal" => $this->model->count_all_doctor(),
        "recordsFiltered" => $this->model->count_filtered_doctor(),
        "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }


    public function slot() {

        $id=$this->input->post('rowid');

        $slot = $this->model->getSlots();
        $status='';
        $i=0;
        foreach($slot as $obj){
            
            $count = $this->model->getDoctorsSlot($id,$obj['id']);
            if($count > 0){
                
                $status = 1;
                

                
            }
            else{
                
                $status = 0;
                
                
            }
           $slot[$i]['status'] = $status; 
           $i++;
        }

        $data['slot'] = $slot;

        $this->load->view('doctor/slot',$data);
        
         
               
   
   
    }

    public function slot_ins() {

            $slot = $_POST['slot'];
            $id=$_POST['id'];
            
            $this->model->deleteSlotData($id);

            foreach($slot as $value){

              $value = array('slot_id'=>$value,'doctor_id'=>$id);    
              $this->model->doctorSlot($value,$id); 

            }
            
            redirect('Consulting/doctor_index');
           }



}
