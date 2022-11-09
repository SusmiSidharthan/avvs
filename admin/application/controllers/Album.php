<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Album extends MY_Auth_Controller {

    protected $ci_name;//declare ci_name varriabe current controler name as image folder name to upload image

    public function __construct() 
    {
        parent::__construct();
        $this->ci_name = strtolower($this->router->fetch_class());
        $this->load->model('Album_model','model');
        $this->load->library('Image');//custom image library to crop

        
        if (!$this->is_logged_in()) //login only registered user from db
        { 
          redirect('Login');
        }
    }
  
    public function index() {

        $this->load->view('album/list');
    }

    public function albumlist() {

        $list = $this->model->get_datatables();
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $banner) {



            $no++;

            $row = array();

            $row[] = $no;
            $row[] = $banner['title'];
            $row[] = '<img src="'.CUSTOM_BASE_URL.'uploads/album/crop/'.$banner['image'].'" class="img-responsive" height=60 width=80 /></a>';
              
            //add html for action
            $row[] = '<a href=" '.CUSTOM_BASE_URL .'album/edit/'.$banner['id'].'" class="btn  btn-warning" href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
            <a data-toggle="modal" data-id='.$banner['id'].' data-target="#delModal" class="btn  btn-danger" href="#"><i class="fa  fa-trash-o" aria-hidden="true"></i></a>';

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

        $this->form_validation->set_rules('album_name', 'Album Name', 'trim|required|xss_clean');



        if(empty($_FILES['image_file']['name']))
        {
            $this->form_validation->set_rules('image_file', 'image','trim|required|xss_clean');
        }

        if($this->form_validation->run() == FALSE) 
        {   
           
            $this->load->view('album/add');
        }
        else 
        {


            $album_name = $this->input->post('album_name');


                
            $this->image->imageCropAdd();//call custom image library
            $image_name= $this->image->crop_image_name;        



            $value = array('title' => $album_name,'image' => $image_name);
           

            $data['result'] = $this->model->insertForAlbum($value);
            $this->session->set_flashdata('add', 'Added Successfully');
            redirect('Album');

        }
    }

    public function edit() {

        $id = $this->uri->segment(3);


        if(empty($id))
           {
               echo 'Requested Album Not Exist.';exit;
           }
        else{       

        $data['result'] = $this->model->getAlbum($id);
        $this->load->view('album/edit',$data);

        }
    }

    public function update() {

        $this->form_validation->set_rules('album_name', 'Album Name', 'trim|required|xss_clean');


        $id = $this->input->post('id');
            

        if (isset($_POST['submit'])) 
        {

            if($this->form_validation->run() == FALSE) 
            {
                $data['result'] = $this->model->getAlbum($id);
                $this->load->view('album/edit',$data);
            }
            else 
            {
                $album_name = $this->input->post('album_name');



                $this->image->imageCropAdd();//call custom image library
        

                if(isset($this->image->crop_image_name)) {

                                
                    $image_name= $this->image->crop_image_name;

                }

                if($image_name !="")
                {

                    $value = array('title' => $album_name,'image' => $image_name);
                }

                else
                {
                     $value = array('title' => $album_name);
                }


                $data['result'] = $this->model->updateAlbum($id,$value);

                $this->session->set_flashdata('update', 'Added Successfully');
                redirect('Album');
            } 

        }
    }

    public function delete(){

        $this->load->view('album/delete');
        if (isset($_POST['delete'])) 
        {
            $id=$_POST['rowid'];


        if(empty($id))
           {
               echo 'Requested Album Not Exist.';exit;
           }
        else{       
        
  
            $this->model->deleteAlbum($id);
            redirect('Album');

        }
        }
    }




}