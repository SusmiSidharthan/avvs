<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Auth_Controller {

	public function __construct() {

	    parent::__construct();

	    $this->load->model('Welcome_model','model');

	   // if (!$this->is_logged_in()) //login only registered user from db
	   // { 
	   //   redirect('Login');
	   // }
    }

	public function index() {
	    
		$data['products'] = $this->model->getProductCount();
		$data['orders'] = $this->model->getOrderCount();
		$data['users'] = $this->model->getUserCount();
		$data['category'] = $this->model->getLatestCategories();
		$data['user_list'] = $this->model->getLatestUser();
		$data['stock_list'] = $this->model->getRecentlyProducts();
		$data['order_list'] = $this->model->getRecentlyOrder();

		$this->load->view('index',$data);
	}
}
