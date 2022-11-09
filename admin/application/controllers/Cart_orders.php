<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cart_orders extends MY_Auth_Controller {

	protected $ci_name;//declare ci_name varriabe current controler name as image folder name to upload image

    public function __construct() 
    {
	    parent::__construct();
	    $this->ci_name = strtolower($this->router->fetch_class());
	    $this->load->model('Cart_orders_model','model');
        if (!$this->is_logged_in()) //login only registered user from db
        { 
          redirect('Login');
        }
    }
  
    public function index() {

    	$this->load->view('order/list');

    }

    public function product_list() {

        $list = $this->model->get_datatables();
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $order) {

        	if($order['status']=='1') {

        		$selected='<option value="1" selected>Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" >Failed</option>';
        	}
          
        	else if($order['status']=='2') {

        		$selected='<option value="1" >Delivered</option>
                           <option value="2" selected>Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" >Failed</option>';
        	}

        	else if($order['status']=='0') {

        		$selected='<option value="1" >Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" selected>Canceled</option>
                           <option value="55" >Failed</option>';
        	}

            else if($order['status']=='3') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" selected>Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" >Failed</option>';
            }

            else if($order['status']=='4') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" selected>Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" >Failed</option>';
            }

            else if($order['status']=='5') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" selected>Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" >Failed</option>';
            }

            else if($order['status']=='55') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" selected>Failed</option>';
            }

            else{

                $selected='';

            }
            
            if($order['payment_method'] == '1'){
                
                $payment = "Cash On Delivery";
                
            }
            else if($order['payment_method'] == '2'){
                
                $payment = "Online";
                
            }
            else{
                
                $payment='';
                
            }

	        $no++;
	        $row = array();
	        $row[] = $no;
	        $row[] = '#'.$order['id'];
	        $row[] = $payment;
	        $row[] = $order['user_name'];
	        $row[] = $order['total_amt'];
            $row[] = $order['delivery_charge'];
            $row[] = $order['total'];
	       // $row[] = '<img src="'.CUSTOM_BASE_URL.'uploads/userprofile/'.$order['prof_image'].'" class="img-responsive" height=60 width=80 /></a>';
            $row[] = '
                    <select  name='.$order['id'].' onchange="getval(this);" id="mySelect">
                        '.$selected.'
                    </select>';
                    
            // $row[] = $order['quantity'];
            // //add html for action
            
            if($order['payment_method'] == 2){
	        $row[] = '     
	            <a data-toggle="modal" data-id='.$order['id'].' data-target="#view-modal" class="btn  btn-info" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
	            
	            <a data-toggle="modal" data-id='.$order['id'].' data-target="#paymentview-modal" class="btn  btn-info" href="#">Payment Details</i></a>

	            <a data-toggle="modal" data-id='.$order['id'].' data-target="#delModal" class="btn  btn-danger" href="#"><i class="fa  fa-trash-o" aria-hidden="true"></i></a>';                
                
            }
            else{
	        $row[] = '
	        
	            <a data-toggle="modal" data-id='.$order['id'].' data-target="#view-modal" class="btn  btn-info" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>

	            <a data-toggle="modal" data-id='.$order['id'].' data-target="#delModal" class="btn  btn-danger" href="#"><i class="fa  fa-trash-o" aria-hidden="true"></i></a>';
            }
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
    
    public function cancel_order() {

        $this->load->view('order/cancel-list');

    }

    public function cancel_order_list() {

        $status='cancel';

        $list = $this->model->get_datatables($status);
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $order) {

            if($order['status']=='1') {

                $selected='<option value="1" selected>Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" >Failed</option>';
            }
          
            else if($order['status']=='2') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" selected>Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" >Failed</option>';
            }

            else if($order['status']=='0') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" selected>Canceled</option>
                           <option value="55" >Failed</option>';
            }

                        else if($order['status']=='3') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" selected>Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" >Failed</option>';
            }

            else if($order['status']=='4') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" selected>Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" >Failed</option>';
            }

            else if($order['status']=='5') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" selected>Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" >Failed</option>';
            }

            else if($order['status']=='55') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" selected>Failed</option>';
            }

            else{

                $selected='';

            }
            
            
            if($order['payment_method'] == '1'){
                
                $payment = "Cash On Delivery";
                
            }
            else if($order['payment_method'] == '2'){
                
                $payment = "Online";
                
            }
            else{
                
                $payment='';
                
            }

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = '#'.$order['id'];
            $row[] = $payment;
            $row[] = $order['user_name'];
            $row[] = $order['total_amt'];
            $row[] = $order['delivery_charge'];
            $row[] = $order['total'];
            // $row[] = '<img src="'.CUSTOM_BASE_URL.'uploads/userprofile/'.$order['prof_image'].'" class="img-responsive" height=60 width=80 /></a>';
            $row[] = '
                    <select  name='.$order['id'].' onchange="getval(this);" id="mySelect">
                        '.$selected.'
                    </select>';
            // //add html for action
            if($order['payment_method'] == 2){
	        $row[] = '     
	            <a data-toggle="modal" data-id='.$order['id'].' data-target="#view-modal" class="btn  btn-info" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
	            
	            <a data-toggle="modal" data-id='.$order['id'].' data-target="#paymentview-modal" class="btn  btn-info" href="#">Payment Details</i></a>

	            <a data-toggle="modal" data-id='.$order['id'].' data-target="#delModal" class="btn  btn-danger" href="#"><i class="fa  fa-trash-o" aria-hidden="true"></i></a>';                
                
            }
            else{
	        $row[] = '
	        
	            <a data-toggle="modal" data-id='.$order['id'].' data-target="#view-modal" class="btn  btn-info" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>

	            <a data-toggle="modal" data-id='.$order['id'].' data-target="#delModal" class="btn  btn-danger" href="#"><i class="fa  fa-trash-o" aria-hidden="true"></i></a>';
            }
           $data[] = $row;
        }

        $output = array(
        "draw" => $_POST['draw'],
        "recordsTotal" => $this->model->count_all($status),
        "recordsFiltered" => $this->model->count_filtered($status),
        "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function pending_orders() {

        $this->load->view('order/pending-list');

    }

    public function pending_orders_list() {

        $list = $this->model->get_datatables(2);
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $order) {

           if($order['status']=='1') {

                $selected='<option value="1" selected>Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" >Failed</option>';
            }
          
            else if($order['status']=='2') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" selected>Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" >Failed</option>';
            }

            else if($order['status']=='0') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" selected>Canceled</option>
                           <option value="55" >Failed</option>';
            }

                        else if($order['status']=='3') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" selected>Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" >Failed</option>';
            }

            else if($order['status']=='4') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" selected>Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" >Failed</option>';
            }

            else if($order['status']=='5') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" selected>Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" >Failed</option>';
            }

            else if($order['status']=='55') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" selected>Failed</option>';
            }

            else{

                $selected='';

            }
            
            if($order['payment_method'] == '1'){
                
                $payment = "Cash On Delivery";
                
            }
            else if($order['payment_method'] == '2'){
                
                $payment = "Online";
                
            }
            else{
                
                $payment='';
                
            }

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = '#'.$order['id'];
            $row[] = $payment;
            $row[] = $order['user_name'];
            $row[] = $order['total_amt'];
            $row[] = $order['delivery_charge'];
            $row[] = $order['total'];
            // $row[] = '<img src="'.CUSTOM_BASE_URL.'uploads/userprofile/'.$order['prof_image'].'" class="img-responsive" height=60 width=80 /></a>';
            $row[] = '
                    <select  name='.$order['id'].' onchange="getval(this);" id="mySelect">
                        '.$selected.'
                    </select>';
            // //add html for action
            if($order['payment_method'] == 2){
	        $row[] = '     
	            <a data-toggle="modal" data-id='.$order['id'].' data-target="#view-modal" class="btn  btn-info" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
	            
	            <a data-toggle="modal" data-id='.$order['id'].' data-target="#paymentview-modal" class="btn  btn-info" href="#">Payment Details</i></a>

	            <a data-toggle="modal" data-id='.$order['id'].' data-target="#delModal" class="btn  btn-danger" href="#"><i class="fa  fa-trash-o" aria-hidden="true"></i></a>';                
                
            }
            else{
	        $row[] = '
	        
	            <a data-toggle="modal" data-id='.$order['id'].' data-target="#view-modal" class="btn  btn-info" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>

	            <a data-toggle="modal" data-id='.$order['id'].' data-target="#delModal" class="btn  btn-danger" href="#"><i class="fa  fa-trash-o" aria-hidden="true"></i></a>';
            }
           $data[] = $row;
        }

        $output = array(
        "draw" => $_POST['draw'],
        "recordsTotal" => $this->model->count_all(2),
        "recordsFiltered" => $this->model->count_filtered(2),
        "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function deliverd_orders() {

        $this->load->view('order/deliverd-list');

    }

    public function deliverd_orders_list() {

        $list = $this->model->get_datatables(1);
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $order) {

            if($order['status']=='1') {

                $selected='<option value="1" selected>Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" >Failed</option>';
            }
          
            else if($order['status']=='2') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" selected>Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" >Failed</option>';
            }

            else if($order['status']=='0') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" selected>Canceled</option>
                           <option value="55" >Failed</option>';
            }

                        else if($order['status']=='3') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" selected>Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" >Failed</option>';
            }

            else if($order['status']=='4') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" selected>Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" >Failed</option>';
            }

            else if($order['status']=='5') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" selected>Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" >Failed</option>';
            }

            else if($order['status']=='55') {

                $selected='<option value="1" >Delivered</option>
                           <option value="2" >Received</option>
                           <option value="3" >Confirmed</option>
                           <option value="4" >Product Ready</option>
                           <option value="5" >Shipment Ready/Out of Delivery</option>
                           <option value="0" >Canceled</option>
                           <option value="55" selected>Failed</option>';
            }

            else{

                $selected='';

            }
            
            if($order['payment_method'] == '1'){
                
                $payment = "Cash On Delivery";
                
            }
            else if($order['payment_method'] == '2'){
                
                $payment = "Online";
                
            }
            else{
                
                $payment='';
                
            }

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = '#'.$order['id'];
            $row[] = $payment;
            $row[] = $order['user_name'];
            $row[] = $order['total_amt'];
            $row[] = $order['delivery_charge'];
            $row[] = $order['total'];
            // $row[] = '<img src="'.CUSTOM_BASE_URL.'uploads/userprofile/'.$order['prof_image'].'" class="img-responsive" height=60 width=80 /></a>';
            $row[] = '
                    <select  name='.$order['id'].' onchange="getval(this);" id="mySelect">
                        '.$selected.'
                    </select>';
            // //add html for action
            if($order['payment_method'] == 2){
	        $row[] = '     
	            <a data-toggle="modal" data-id='.$order['id'].' data-target="#view-modal" class="btn  btn-info" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
	            
	            <a data-toggle="modal" data-id='.$order['id'].' data-target="#paymentview-modal" class="btn  btn-info" href="#">Payment Details</i></a>

	            <a data-toggle="modal" data-id='.$order['id'].' data-target="#delModal" class="btn  btn-danger" href="#"><i class="fa  fa-trash-o" aria-hidden="true"></i></a>';                
                
            }
            else{
	        $row[] = '
	        
	            <a data-toggle="modal" data-id='.$order['id'].' data-target="#view-modal" class="btn  btn-info" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>

	            <a data-toggle="modal" data-id='.$order['id'].' data-target="#delModal" class="btn  btn-danger" href="#"><i class="fa  fa-trash-o" aria-hidden="true"></i></a>';
            }
           $data[] = $row;
        }

        $output = array(
        "draw" => $_POST['draw'],
        "recordsTotal" => $this->model->count_all(1),
        "recordsFiltered" => $this->model->count_filtered(1),
        "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function view() {

        $id = $this->input->post('rowid');
        $data['result'] = $this->model->viewOrderData($id);
        $data['deliverydata'] = $this->model->viewOrderDeliveryAddressData($id);
        $this->load->view('order/view', $data);
    }


    public function payment_view() {

        $id = $this->input->post('rowid');
        $data['result'] = $this->model->viewOrderData($id);

        $this->load->view('order/payment_view', $data);
    }
   

	public function delete(){

	    $this->load->view('order/delete');
	    if (isset($_POST['delete'])) 
	    {
		    $id=$_POST['rowid'];
			$this->model->delete($id);
	        redirect('Cart_orders');
	    }
	}

    public function setStatus() 
    {
        $status=$_POST['status'];

        $id=$_POST['rowid'];

        $result=$this->model->setOrderStatus($id,$status);

   }


}
