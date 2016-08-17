<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("checkmod");
  }

  function index()
  {
    $data['head'] = "Login to admin";
    $data['title'] = 'Login to Admin';
    $this->load->view('pages/header/head', $data);
    $this->load->view('pages/login/log', $data);
    $this->load->view('pages/footer/footer');
  }

}
