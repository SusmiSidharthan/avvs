<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Career extends MY_Auth_Controller {

    protected $ci_name;//declare ci_name varriabe current controler name as image folder name to upload image

    public function __construct() 
    {
        parent::__construct();
        $this->ci_name = strtolower($this->router->fetch_class());
        $this->load->model('Career_model','model');

        if (!$this->is_logged_in()) //login only registered user from db
        { 
          redirect('Login');
        }
    }
  
    public function index() {

        $this->load->view('career/list');

    }

    public function career_list() {

        $list = $this->model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $rows) {
        $no++;
        $row = array();
        $row[] = $no;
        $row[] = $rows['position'];
        $row[] = $rows['location'];
        $row[] = $rows['qualification'];
        $row[] = $rows['min'];
        $row[] = $rows['max'];
        $row[] = $rows['vaccancy'];
          
        //add html for action
        $row[] = '<a href="career/edit/'.$rows['id'].'" class="btn  btn-warning" href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
        <a data-toggle="modal" data-id='.$rows['id'].' data-target="#del-modal" class="btn  btn-danger" href="#"><i class="fa  fa-trash-o" aria-hidden="true"></i></a>';

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

        $this->form_validation->set_rules('location', 'Location', 'trim|required|xss_clean');
        $this->form_validation->set_rules('position', 'Position', 'trim|required|xss_clean');
        $this->form_validation->set_rules('min', 'Salary min', 'trim|required|xss_clean');
        $this->form_validation->set_rules('max', 'Salary max', 'trim|required|xss_clean');
        $this->form_validation->set_rules('qualification', 'Qualification', 'trim|required|xss_clean');
        $this->form_validation->set_rules('experience', 'Experience', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vaccancy', 'Vaccancy', 'trim|required|xss_clean');
      
        if($this->form_validation->run() == FALSE) 
        {
            $this->load->view('career/add');
        }
        else {

            $location = $this->input->post('location');
            $position = $this->input->post('position');
            $min = $this->input->post('min');
            $max = $this->input->post('max');
            $qualification = $this->input->post('qualification');
            $experience = $this->input->post('experience');
            $vaccancy = $this->input->post('vaccancy');
            $description = $this->input->post('description');


            $value = array('location' => $location,'description' => $description,'min' => $min,'max' => $max,'qualification' => $qualification,'position' => $position,'experience' =>$experience,'vaccancy' => $vaccancy);

            $data['result'] = $this->model->insertData($value);
            $this->session->set_flashdata('add', 'Added Successfully');

            redirect('career');
        }

    }

    public function edit() {

        $id = $this->uri->segment(3);
        $data['result'] = $this->model->getCareerEdit($id);
        $this->load->view('career/edit',$data);
    }

    public function update() {

        $qualification = $this->input->post('qualification');

        $this->form_validation->set_rules('location', 'Location', 'trim|required|xss_clean');
        $this->form_validation->set_rules('position', 'Position', 'trim|required|xss_clean');
        $this->form_validation->set_rules('min', 'Salary min', 'trim|required|xss_clean');
        $this->form_validation->set_rules('max', 'Salary max', 'trim|required|xss_clean');
        $this->form_validation->set_rules('qualification', 'Qualification', 'trim|required|xss_clean');
        $this->form_validation->set_rules('experience', 'Experience', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vaccancy', 'Vaccancy', 'trim|required|xss_clean');

        if (isset($_POST['submit'])) 
        {
            $id = $this->input->post('id');

            if($this->form_validation->run() == FALSE) 
            {
                $data['result'] = $this->model->getCareerEdit();
                 $this->load->view('career/edit',$data);
            }
            else 
            {
                $location = $this->input->post('location');
                $position = $this->input->post('position');
                $min = $this->input->post('min');
                $max = $this->input->post('max');
                $qualification = $this->input->post('qualification');
                $experience = $this->input->post('experience');
                $vaccancy = $this->input->post('vaccancy');
                $description = $this->input->post('description');

                $value = array('location' => $location,'description' => $description,'min' => $min,'max' => $max,'qualification' => $qualification,'position' => $position,'experience' =>$experience,'vaccancy' => $vaccancy);

                $this->model->updateData($id,$value);

                $this->session->set_flashdata('update', 'Added Successfully');
                redirect('career');
            } 

        }
    }



    public function delete() {

        $this->load->view('career/delete');
        if (isset($_POST['delete'])) 
        {
            $id=$_POST['id'];
            $this->model->delete($id);
            redirect('career');
        }
    }


}
