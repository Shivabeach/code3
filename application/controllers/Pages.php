<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['title'] = "Home Page";
    $this->db->select("title, content, date")->from("posts")->order_by("id", "desc");
    $query = $this->db->get();
    if($query->result()){
      $data["mainContent"] = $query->result();
    }
    $this->load->view("pages/header/head", $data);
    $this->load->view("Pages/prime", $data);
    $this->load->view("pages/footer/footer");;

  }

}
