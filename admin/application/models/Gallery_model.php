<?php

Class Gallery_model extends MY_model {

    

    public function __construct() {

        parent::__construct();
        $this->load->database();

    }

    var $table = 'gallery';

    var $column_order = array('id','title',null); //set column field database for datatable orderable

    var $column_search = array('gallery.title','album.title'); //set column field database for datatable searchable just firstname , lastname , address are searchable

    var $order = array('id' => 'desc');


  private function get_datatables_query()
  {
        $this->db->select('gallery.title,gallery.id,album.title as album_title');
        $this->db->from($this->table);
        $this->db->join('album','gallery.album_id = album.id');
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

    public function insertForGallery($value) { 

        if ($this->db->insert($this->table, $value)) {

            return $this->db->insert_id();

        } else{

            return false;

        }

    }

    public function getGallery($id='')
    {
        $this->db->from($this->table);
        if ($id != '')
        $this->db->where('id', $id);
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function updateForGallery($value,$id)
    {
        $this->db->where('id',$id);
        $this->db->update($this->table,$value);
        return $this->db->insert_id();

        //unlink("uploads/banner/" .$image);
    }


   

    public function deleteGallery($id)
    {
       $this->db->where('id',$id);
       $this->db->delete($this->table);  
       //unlink("uploads/banner/" . $name);
    }

    public function deleteGalleryImages($id)
    {
       $this->db->where('gallery_id',$id);
       $this->db->delete('gallery_images');  
       //unlink("uploads/banner/" . $name);
    }


    public function getAlbum()
    {
        $this->db->select('id,title');
        $this->db->from('album');
        $query = $this->db->get();
        return $query->result_array();
    }
 
    public function getImages($gallery_id='')
    {
        $this->db->select('image');
        $this->db->from('gallery_images');
        $this->db->where('gallery_id',$gallery_id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insertImage($data = array()) { 
        if(!empty($data)){ 
             
            // Insert gallery data 
            $insert = $this->db->insert_batch('gallery_images', $data); 
             
            // Return the status 
            return $insert?$this->db->insert_id():false; 
        } 
        return false; 
    } 
    
    public function updateImage($data = array(),$id) { 
        if(!empty($data)){ 

            $this->db->where('gallery_id',$id);
            $this->db->delete('gallery_images'); 
             
            // Insert gallery data 
            $insert = $this->db->insert_batch('gallery_images', $data); 
             
            // Return the status 
            return $insert?$this->db->insert_id():false; 
        } 
        return false; 
    }



}