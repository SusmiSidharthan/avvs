<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Store extends MY_Auth_Controller {

    protected $ci_name;//declare ci_name varriabe current controler name as image folder name to upload image

    public function __construct() 
    {
        parent::__construct();
        $this->ci_name = strtolower($this->router->fetch_class());
        $this->load->model('Store_model','model');
        $this->load->library('Image');//custom image library to crop
        if (!$this->is_logged_in()) //login only registered user from db
        { 
          redirect('Login');
        }
    }
  
    public function index() {

        $this->load->view('store/list');

    }


    public function store_list() {

        $list = $this->model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $rows) {
        $no++;
        $row = array();
        $row[] = $no;
        $row[] = $rows['location'];
        $row[] = $rows['phone'];
        $row[] = '<img src="'.CUSTOM_BASE_URL.'uploads/store/crop/'.$rows['image'].'" class="img-responsive" height=50 width=50 /></a>';
          
        //add html for action
        $row[] = '<a href="store/edit/'.$rows['id'].'" class="btn  btn-warning" href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
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
        $this->form_validation->set_rules('address', 'Address', 'trim|required|xss_clean');
        $this->form_validation->set_rules('position', 'Position', 'trim|required|xss_clean');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|regex_match[/^[0-9]{11}$/]|xss_clean');
        $this->form_validation->set_rules('latitude', 'Latitude', 'trim|required|xss_clean');
        $this->form_validation->set_rules('longitude', 'Longitude', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('description', 'Description', 'trim|required|xss_clean');
        if (empty($_FILES['image_file']['name']))
        {
            $this->form_validation->set_rules('image_file', 'Image', 'required');
        }

        if($this->form_validation->run() == FALSE) 
        {
            $this->load->view('store/add');
        }
        else 
        {

            $this->image->imageCropAdd();//call custom image library

            $image= $this->image->crop_image_name;

            $og_image= $this->image->image_name;

            $location = $this->input->post('location');
            $description = $this->input->post('description');
            $address = $this->input->post('address');
            $position = $this->input->post('position');
            $phone = $this->input->post('phone');
            $latitude = $this->input->post('latitude');
            $longitude = $this->input->post('longitude');
            $email = $this->input->post('email');


            $value = array('location' => $location,'description' => $description,'address' => $address,'image' => $image,'og_image' => $og_image,'position' => $position,'position' => $position,'phone' =>$phone,'email' => $email,'latitude' => $latitude,'longitude' => $longitude);

            $data['result'] = $this->model->insertStoreData($value);
            $this->session->set_flashdata('add', 'Added Successfully');

            redirect('Store');
        }

    }

    public function edit() {

        $id = $this->uri->segment(3);
        $data['result'] = $this->model->getStoreEdit($id);
        $this->load->view('store/edit',$data);
    }

    public function update() {

        
       $this->form_validation->set_rules('location', 'Location', 'trim|required|xss_clean');
       $this->form_validation->set_rules('address', 'Address', 'trim|required|xss_clean');
       $this->form_validation->set_rules('position', 'Position', 'trim|required|xss_clean');
       $this->form_validation->set_rules('phone', 'Phone', 'trim|required|xss_clean');
       $this->form_validation->set_rules('latitude', 'Latitude', 'trim|required|xss_clean');
       $this->form_validation->set_rules('longitude', 'Longitude', 'trim|required|xss_clean');
       $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
       $this->form_validation->set_rules('description', 'Description', 'trim|required|xss_clean');

        if (isset($_POST['submit'])) 
        {
            $id = $this->input->post('id');

            if($this->form_validation->run() == FALSE) 
            {
                $data['result'] = $this->model->getCartParentEdit();
                 $this->load->view('store/edit',$data);
            }
            else 
            {
                $location = $this->input->post('location');
                $description = $this->input->post('description');
                $address = $this->input->post('address');
                $position = $this->input->post('position');
                $phone = $this->input->post('phone');
                $latitude = $this->input->post('latitude');
                $longitude = $this->input->post('longitude');
                $email = $this->input->post('email');

                $this->image->imageCropAdd();//call custom image library

                if($this->image->crop_image_name !="")//if there is image and pdf is null
                {
                    $image =  $this->image->crop_image_name;

                    $og_image =  $this->image->image_name;

                    $value = array('location' => $location,'description' => $description,'address' => $address,'image' => $image,'og_image' => $og_image,'position' => $position,'position' => $position,'phone' =>$phone,'email' => $email,'latitude' => $latitude,'longitude' => $longitude);

                } 
                else{

                    $value = array('location' => $location,'description' => $description,'address' => $address,'position' => $position,'position' => $position,'phone' =>$phone,'email' => $email,'latitude' => $latitude,'longitude' => $longitude);

                }
                
                $this->model->updateStoreData($id,$value);

                $this->session->set_flashdata('update', 'Added Successfully');
                redirect('Store');
            } 

        }
    }



    public function delete() {

        $this->load->view('store/delete');
        if (isset($_POST['delete'])) 
        {
            $id=$_POST['id'];
            $this->model->deleteStore($id);
            redirect('Store');
        }
    }


}
