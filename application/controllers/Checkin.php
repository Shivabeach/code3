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
      $data = $this->security->xss_clean($data);
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
    /**
     * deterines if you are logged in
     * @return boolean [description]
     */
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

    /**
     * logs you out and ends the session
     * @return [type] [description]
     */
    public function logout()
    {
        $this->session->unset_userdata('name');
        $this->session->sess_destroy();
        redirect('Pages');
    }
    /**
     * Log in script
     * @return [type] [description]
     */
    public function legal()
    {
      $data = [
        'name'  => trim(html_escape($this->input->post('name'))),
        'email' => trim(html_escape($this->input->post('email'))),
        'pass'  => trim(html_escape($this->input->post('pass')))
      ];
      $this->form_validation->set_rules('name', 'name', 'required|min_length[3]|max_length[5]',
      array(
        'required'   => 'just do it',
        'min_length' => 'more',
        'max_length' => 'bejesus already'
      ));
      $this->form_validation->set_rules('pass', 'password', 'required|min_length[24]|max_length[26]',
      array(
        'required'   => 'Think it over',
        'min_length' => 'Not yet',
        'max_length' => 'Whoa'
      ));
      $this->form_validation->set_rules('email', 'email', 'required|valid_email',
      array(
        'required'    => 'You need it',
        'valid_email' => 'This don look so good'
      ));
      if( $this->form_validation->run() == FALSE) {
        //do this if you are not using ajax
        $data['head']  = "Login to admin";
        $data['title'] = 'Login to Admin';
        $this->load->view('pages/header/head', $data);
        $this->load->view('pages/login/log', $data);
        $this->load->view('pages/footer/footer');
  		}else {
  		  $name  = html_escape($this->input->post('name'));
        $email = html_escape($this->input->post('email'));
        $pass1 = html_escape($this->input->post('pass'));
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
      //$this->db->select('email, name, pass')->where('email', $email);
      $limit  = 1;
      $offset = 0;
      $query = $this->db->get_where('check',
      array(
        'email' => $email,
        'name'  => $name
      ),$limit, $offset);
      //$query = $this->db->get('check');
      if ($query->num_rows() != 1){
        die('sorry');
      }else
      {
        $row    = $query->row();
        $stored = $row->pass;
        if (password_verify($pass1, $stored))
        {
          $data = array(
            'name'         => $row->name,
            'is_logged_in' => TRUE
          );
          $this->session->set_userdata($data);
          redirect("Pages/entry");
        }else {
          die();
        }
      }
    }
  }
} //end of controller
