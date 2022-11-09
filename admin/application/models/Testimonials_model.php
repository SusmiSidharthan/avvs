<?php

Class Testimonials_model extends MY_Model {

  public function __construct() {

    parent::__construct();
    $this->load->database();

  }

    var $table = 'testimonials';

    var $column_order = array('name',null,null); //set column field database for datatable orderable

    var $column_search = array('name'); //set column field database for datatable searchable just firstname , lastname , address are searchable

    var $order = array('id' => 'desc');


  private function get_datatables_query()
  {
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




  public function get_datatables($parent = 0, $spacing = '', $category_tree_array = '')
  {

     $this->get_datatables_query();

     if($_POST['length'] != -1)

    if (!is_array($category_tree_array))
        $category_tree_array = array();

      $this->db->limit($_POST['length'], $_POST['start']);
      $query = $this->db->get();
      $category_tree_array = $query->result_array();

      return $category_tree_array;
  }

    public function count_filtered() {

        $this->get_datatables_query();
        //$this->db->where('parent_id',0);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all() {

        $this->db->from($this->table);
        //$this->db->where('parent_id',0);
        return $this->db->count_all_results();
    }

    public function get_by_id($id) {

        $this->db->from($this->table);
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row();
    }
    //json load view end //






    
    public function get_details($id) {

    
        $this->db->from($this->table);
        $this->db->where('id',$id);
        $query = $this->db->get();
        
      return $query->row();
    
    }




  public function getEdit($id='')
  {
      $this->db->from($this->table);

      if ($id != '')
      $this->db->where('id', $id);
      $this->db->order_by('id','desc');
      $query  = $this->db->get();

      return $query->result_array();
  }












    ///////////////////////////////////////////////////////

  public function insertData($value='') { 

    if ($this->db->insert($this->table, $value)) {

       $insert_id = $this->db->insert_id();
         
        return true;

        } else{

            return false;

    }

  }


    public function updateData($id,$value)
    {
         
      $this->db->where('id',$id);
      $this->db->update($this->table,$value);

    }


    public function deleteData($id)
    {

        $this->db->from($this->table);
        $this->db->where('id',$id);
        $query = $this->db->get();

        foreach ($query->result() as  $row) {
           $name= $row->image;
          unlink("uploads/testimonials/crop/" . $name);           
        }

       $this->db->where('id',$id);
       $this->db->delete($this->table);
    
    }

}