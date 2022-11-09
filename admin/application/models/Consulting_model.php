<?php

Class Consulting_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        
    }


    var $table = 'consulting_details';
    var $column_order = array('patientname','place',null); //set column field database for datatable orderable
    var $column_search = array('place','patientname'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('consulting_id' => 'desc'); // default order 



    private function get_datatables_query()
    {   
        $this->db->select("consulting_details.*,DATE_FORMAT(slot.from_time,'%h:%i %p') AS from_time,DATE_FORMAT(slot.to_time,'%h:%i %p') AS to_time,doctors.name as doc_name");
        $this->db->from($this->table);
        $this->db->join('slot','slot.id = consulting_details.timeslot');
        $this->db->join('doctors','consulting_details.doctor_id = doctors.id');
        // $this->db->join('user_registration', 'consulting_details.user_id = user_registration.id');
      

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
        $this->db->join('slot','slot.id = consulting_details.timeslot');
        $this->db->join('doctors','consulting_details.doctor_id = doctors.id');
        return $this->db->count_all_results();
    }

    public function get_by_id($id) {

        $this->db->from($this->table);
        $this->db->where('consulting_id',$id);
        $query = $this->db->get();
        return $query->row();
    }
    //json load view end //




    
    public function get_details($id) {
        
          
        $this->db->select("consulting_details.*,DATE_FORMAT(slot.from_time,'%h:%i %p') AS from_time,DATE_FORMAT(slot.to_time,'%h:%i %p') AS to_time,doctors.name as doc_name");
        $this->db->from($this->table);
        $this->db->join('slot','slot.id = consulting_details.timeslot');
        $this->db->join('doctors','consulting_details.doctor_id = doctors.id');
        $this->db->where('consulting_details.consulting_id',$id);
        $query = $this->db->get();
        
      return $query->row();
    
    }


    public function setOrderStatus($id='',$status='') {

        $value = array('status' => $status);

        $this->db->where('consulting_id',$id);
        $this->db->update($this->table,$value);

    }
    
    
      public function delete($id)
        {
    
           $this->db->where('consulting_id',$id);
           $this->db->delete($this->table);
        
        }




    var $column_order2 = array('name',null,null); //set column field database for datatable orderable

    var $column_search2 = array('name'); //set column field database for datatable searchable just firstname , lastname , address are searchable

    var $order2 = array('id' => 'desc');


  private function get_datatables_query_doctor()
  {
        $this->db->from('doctors');
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




    public function get_datatables_doctor() {

        $this->get_datatables_query_doctor();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function count_filtered_doctor() {

        $this->get_datatables_query_doctor();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_doctor() {

        $this->db->from('doctors');
        return $this->db->count_all_results();
    }


    public function insertData($value='') { 

    if ($this->db->insert('doctors', $value)) {

       $insert_id = $this->db->insert_id();
         
        return true;

        } else{

            return false;

        }

    }



    public function getDataEdit($id='')
    {
      $this->db->from('doctors');

      if ($id != '')
      $this->db->where('id', $id);
      $query  = $this->db->get();

      return $query->result_array();
    }



    public function updateData($id,$value)
    {
         
      $this->db->where('id',$id);
      $this->db->update('doctors',$value);

    }


    public function deleteData($id)
    {

       $this->db->where('id',$id);
       $this->db->delete('doctors');
    
    }


    public function getSlots()
    {
      $this->db->from('slot');
      $this->db->where('slot.status',1);
      $query  = $this->db->get();

      return $query->result_array();
    }

     public function getDoctorsSlot($id='',$slot_id=''){
        
        $this->db->select('id');
        $this->db->from('doctors_slot');
        $this->db->where('doctor_id',$id);
        $this->db->where('slot_id',$slot_id);
        $query = $this->db->get();
        return $query->num_rows();
        
    }   

    public function deleteSlotData($id=''){
        
       $this->db->where('doctor_id',$id);
       $this->db->delete('doctors_slot'); 
        
    }


    public function doctorSlot($value)
    {
        
        $this->db->insert('doctors_slot', $value); 

       
    } 


    public function getDoctorSlot($id=''){
        
        $this->db->select('slot.*');
        $this->db->from('doctors_slot');
        $this->db->where('doctor_id',$id);
        $this->db->where('slot.status',1);
        $this->db->join('slot','slot.id = doctors_slot.slot_id');
        $this->db->group_by('slot.id');
        $query = $this->db->get();
        return $query->result_array();
        
    }  

}
     