<?php

Class Msg_model extends MY_Model {

  public function __construct() {

    parent::__construct();
    $this->load->database();

  }

//     var $table = 'fee';
//     var $column_order = array('fee.date',null,null); //set column field database for datatable orderable
//     var $column_search = array('fee.date','user.user_name'); //set column field database for datatable searchable just firstname , lastname , address are searchable
//     var $order = array('fee.fee_id' => 'desc');


var $table = 'msg_via_contact';

var $column_order = array('id'); //set column field database for datatable orderable

var $column_search = array('name'); //set column field database for datatable searchable just firstname , lastname , address are searchable

var $order = array('id' => 'desc');




private function get_datatables_query()
{

$this->db->select('*');
    $this->db->from($this->table);
   
    $i = 0;
    foreach ($this->column_search as $item) // loop column 
    {
    if($_POST['search']['value']) // if datatable send POST for search
    {
    if($i===0) // first loop
    {
    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
    $this->db->like($item, $_POST['search']['value']);
    }
    else
    {
    $this->db->or_like($item, $_POST['search']['value']);
    }

    if(count($this->column_search) - 1 == $i) //last loop
    $this->db->group_end(); //close bracket
    }
    $i++;
    }

    if(isset($_POST['order'])) // here order processing
    {
    $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    } 
    else if(isset($this->order))
    {
    $order = $this->order;
    $this->db->order_by(key($order), $order[key($order)]);
    }
}


public function get_datatables() {

    $this->get_datatables_query();
    if($_POST['length'] != -1)
    $this->db->limit($_POST['length'], $_POST['start']);
    $query = $this->db->get();
     return $query->result();

}


  public function count_filtered() {

      $this->get_datatables_query();
      $query = $this->db->get();
      return $query->num_rows();
    
  }


  public function count_all() {

    $this->db->from($this->table);
  
    return $this->db->count_all_results();
}



}