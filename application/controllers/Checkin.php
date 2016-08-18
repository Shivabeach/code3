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
  public function process()
  {
    $data = array(
      'name'      => html_escape($this->input->post('name')),
      'password'  => html_escape($this->input->post('password')),
      'password2' => html_escape($this->input->post('password2')),
      'email'     => html_escape($this->input->post('email')),
      );
      $this->form_validation->set_rules('name', 'name', 'required');
      $this->form_validation->set_rules('password', 'password', 'required');
      $this->form_validation->set_rules('password2', 'password2', 'required|matches[password2]');
      $this->form_validation->set_rules('email', 'email', 'required|valid_email');

      if( $this->form_validation->run() == FALSE) {
  			echo validation_errors();
  		}else
  		{
  			$this->db->insert('check', $data);
  			echo "grand shit";
  		}

  } //end of process

} //end of controller
