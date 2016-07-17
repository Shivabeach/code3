<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('encryption');
    //Codeigniter : Write Less Do More
  }

  public function index()
  {
    $data['title'] = "Home Page";
    $parent = "main";
    $this->db->select("title, content, date")->from("posts")->where('parent', $parent)->order_by("id", "desc");
    $query = $this->db->get();
    if($query->result()){
      $data["mainContent"] = $query->result();
    }
    $this->load->view("pages/header/head", $data);
    $this->load->view("Pages/prime", $data);
    $this->load->view("pages/footer/footer");
  }
  public function van()
  {
    $data['title'] = "VanHorn Page";
    $data['head'] = "VanHorns";
    //$data['navy'] = $this->load->view("nav/vanhorn_nav");
    $this->load->view("pages/header/head", $data);
    $this->load->view("Pages/van");
    $this->load->view("pages/footer/footer");
  }
  public function bos()
  {
    $data['title'] = "Bostick Page";
    $data['head'] = "Bosticks";
    $this->load->view("pages/header/head", $data);
    $this->load->view("Pages/bos");
    $this->load->view("pages/footer/footer");
  }

}
