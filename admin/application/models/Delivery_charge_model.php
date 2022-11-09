<?php

Class Delivery_charge_model extends MY_Model {

  public function __construct() {

    parent::__construct();
    $this->load->database();

  }

    var $table = 'delivery_charge';

    var $column_order1 = array('id',null,null); //set column field database for datatable orderable

    var $column_search1 = array('from_pincode','to_pincode');




  private function get_datatables_query()
  {     

        $this->db->select('id,from_pincode,to_pincode,amount');
        $this->db->from($this->table);
        $i = 0;
        foreach ($this->column_search1 as $item) // loop column 
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

        if(count($this->column_search1) - 1 == $i) //last loop
        $this->db->group_end(); //close bracket
        }
        $i++;
        }

        if(isset($_POST['order'])) // here order processing
        {
        $this->db->order_by($this->column_order1[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order1))
        {
        $order = $this->order1;
        $this->db->order_by(key($order), $order[key($order)]);
        }


  }




    public function get_datatables() {

        $this->get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result_array();
    }



    public function count_filtered() {

        $this->get_datatables_query();
        //$this->db->where('parent_id',0);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all() {

        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function get_by_id($id) {

        $this->db->from($this->table);
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row();
    }

    
    public function get_details($id) {
    
    
        $this->db->from($this->table);
        $this->db->where('id',$id);
        $query = $this->db->get();
        
      return $query->row();
    
    }




    ///////////////////////////////////////////////////////

  public function insertPincodeData($value='') { 

    if ($this->db->insert($this->table, $value)) {

       $insert_id = $this->db->insert_id();
         
        return true;

        } else{

            return false;

    }

  }


  public function insertKgData($value='',$id='') { 


       $this->db->insert('delivery_charge_kg', $value); 
       $insert_id = $this->db->insert_id();
         
        return true;


  }


  public function getPincodeDataEdit($id='')
  { 
      $this->db->select('id,from_pincode as from,to_pincode as to,amount');
      $this->db->from($this->table);

      if ($id != '')
      $this->db->where('id', $id);
      $this->db->order_by('id','desc');
      $query  = $this->db->get();

      return $query->result_array();
  }


  public function getKgDataEdit($id='')
  {   
      $this->db->select('id,from_kg as from,to_kg as to,amount');
      $this->db->from('delivery_charge_kg');

      if ($id != '')
      $this->db->where('id', $id);
      $this->db->order_by('id','desc');
      $query  = $this->db->get();

      return $query->result_array();
  }

    public function updatePincodeData($id,$value)
    {
         
      $this->db->where('id',$id);
      $this->db->update($this->table,$value);

    }


    public function updateKgData($id,$value)
    {
         
      $this->db->where('id',$id);
      $this->db->update('delivery_charge_kg',$value);

    }


    public function deletePincodeData($id)
    {

       $this->db->where('id',$id);
       $this->db->delete($this->table);

       $this->db->where('pincode_id',$id);
       $this->db->delete('delivery_charge_kg');
    
    }

    public function deleteKgData($id)
    {

       $this->db->where('id',$id);
       $this->db->delete('delivery_charge_kg');
    
    }

  public function getKgData($id='')
  {   

      $this->db->from('delivery_charge_kg');
      if ($id != '')
      $this->db->where('id', $id);
      $query  = $this->db->get();

      return $query->row();
  }


  public function getKgDataDetails($pincode_id='')
  {   

      $this->db->from('delivery_charge_kg');
      $this->db->where('pincode_id', $pincode_id);
      $query  = $this->db->get();

      return $query->row();
  }




    var $column_order2 = array('id',null,null); //set column field database for datatable orderable

    var $column_search2 = array('from_kg','to_kg','amount');




  private function get_datatables_query_kg($pincode_id='')
  {     

        $this->db->select('delivery_charge_kg.*');
        $this->db->from('delivery_charge_kg');
        $this->db->where('pincode_id',$pincode_id);
        $i = 0;
        foreach ($this->column_search2 as $item) // loop column 
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

        if(count($this->column_search2) - 1 == $i) //last loop
        $this->db->group_end(); //close bracket
        }
        $i++;
        }

        if(isset($_POST['order'])) // here order processing
        {
        $this->db->order_by($this->column_order2[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order2))
        {
        $order = $this->order2;
        $this->db->order_by(key($order), $order[key($order)]);
        }


  }




    public function get_datatables_kg($pincode_id='') {

        $this->get_datatables_query_kg($pincode_id);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result_array();
    }



    public function count_filtered_kg($pincode_id='') {

        $this->get_datatables_query_kg($pincode_id);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_kg($pincode_id='') {

        $this->db->select('delivery_charge_kg.*');
        $this->db->from('delivery_charge_kg');
        $this->db->where('pincode_id',$pincode_id);
        return $this->db->count_all_results();
    }


}