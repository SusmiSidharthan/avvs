<?php

Class Welcome_model extends MY_Model {

  public function __construct() {

    parent::__construct();
    $this->load->database();

  }

  var $table = 'user_registration';

  public function getProductCount() {

    $this->db->from('cart_stock');

    return $this->db->count_all_results();
  }

  public function getOrderCount() {

    $this->db->from('cart_order');
    
    return $this->db->count_all_results();
  }

  public function getUserCount() {

    $this->db->from($this->table);
    
    return $this->db->count_all_results();
  }

  public function getLatestCategories($id='') {

    $this->db->select('cat_name,image');
    $this->db->from('cart_category');
    $this->db->order_by('cat_id','DESC');
    $this->db->limit(12);
    $query = $this->db->get();
    return $query->result_array();
  }

  public function getLatestUser($id='') {

    $this->db->select('user_name,prof_image,joining_date');
    $this->db->from('user_registration');
    $this->db->order_by('id','DESC');
    $this->db->limit(8);
    $query = $this->db->get();
    return $query->result_array();
  }

  public function getRecentlyProducts($id='') {

    $this->db->select('cart_stock.id,cart_stock.stock_name,cart_stock.stock,cart_stock.list_price,cart_product_image.image');
    $this->db->from('cart_stock');
    $this->db->join('cart_product_image', 'cart_stock.id = cart_product_image.stock_id');
    $this->db->group_by('cart_stock.id');
    $this->db->order_by('cart_stock.id','DESC');
    $this->db->limit(4);
    $query = $this->db->get();
    return $query->result_array();
  }
  public function getRecentlyOrder($id='') {

    $this->db->select('cart_order.id,cart_stock.stock_name,cart_order.total_amt,cart_order_sub.status,cart_order.date');
    $this->db->from('cart_order');
    $this->db->join('cart_order_sub', 'cart_order.id = cart_order_sub.order_id');
    $this->db->join('cart_stock', 'cart_order_sub.stock_id = cart_stock.id');
    $this->db->order_by('cart_order.id','DESC');
    $this->db->limit(7);
    $query = $this->db->get();
    return $query->result_array();
  }


}