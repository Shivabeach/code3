<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classname extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('database');
  }
  public function get_data($parent = null)
  {
    $parent = "VanHorn";
      $query = $this->db->select("id,title,content,date,parent")->from("posts")->where('parent', $parent)-get();
      if($query->num_rows() > 0) {
  			foreach ($query->result() as $row) {
  				$data[] = $row;
  			}
			return $data;
		}
  }
  function fill_form()
  {
		$id = $this->uri->segment(3);
		$this->db->where('id', $id);
		$query = $this->db->get('posts');
    if ( $query->num_rows() > 1)
    {
      return $query->result();
    }
	}
  // to post updates list
  function get_record()
  {
    $this->db->select('id, title, status');
    $this->db->order_by('id', 'DESC');
    $query = $this->db->get('posts');
    if ( $query->num_rows() > 1)
    {
      return $query->result();
    }
   }
}
