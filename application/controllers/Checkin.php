<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("checkmod");
    $this->load->library('session');
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
        $options = [
           'cost' => 10
          ];
        $data1 = [
          'name'  => html_escape($this->input->post('name')),
          'pass'  => password_hash($this->input->post('pass'), PASSWORD_BCRYPT, $options),
          'email' => html_escape($this->input->post('email'))
        ];
  			$this->db->insert('check', $data1);
  			echo "grand shit";
  		}
    }
    public function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true)
        {
        echo 'You don\'t have permission to access this page.';
        die();
            //$this->load->view('login_form');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('name');
        $this->session->sess_destroy();
        redirect('Pages');
    }

      public function legal()
      {
          $name  = html_escape($this->input->post('name'));
          $email = html_escape($this->input->post('email'));
          $pass1  = html_escape($this->input->post('pass'));

        $this->db->select('email, name, pass')->where('email', $email);
        $query = $this->db->get('check');
        if ($query->num_rows() != 1){
          echo "email not found";
          die();
        }else
        {
          $row = $query->row();
          $stored = $row->pass;
        if (password_verify($pass1, $stored)){
            $data = array(
              'name'         => $row->name,
              'email'        => $row->email,
              'is_logged_in' => TRUE
            );
            $this->session->set_userdata($data);
            redirect("Pages/entry");
        }else {
          die();
        }
      }
    }
} //end of controller
