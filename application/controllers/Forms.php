<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->library('form_validation');
  }
  public function is_logged_in()
  {
      $is_logged_in = $this->session->userdata('is_logged_in');
      if (!isset($is_logged_in) || $is_logged_in != true)
      {
        redirect("Checkin");
      }
  }

  function enterPosts()
  {
    $this->is_logged_in();
    $tags = '<strong><a><ul><li><span><blockquote><table><th><tr><td><p>';
    $data = [
      'title'   => html_escape(trim($this->input->post('title'))),
      'content' => htmlspecialchars($this->input->post('content')),
      'date'    => html_escape(trim($this->input->post('date'))),
      'parent'  => html_escape(trim($this->input->post('parent'))),
      'status'  => html_escape(trim($this->input->post('status'))),
    ];
    $data = $this->security->xss_clean($data);
    $this->form_validation->set_rules('title', 'Title', 'required|max_length[50]',
    array(
      'required' => 'necessary',
      'max_length' => 'Stop right there'
    ));
    $this->form_validation->set_rules('content', 'content', 'required|min_length[50]',
    array(
      'required' => 'Missing content',
      'min_length' => 'Add more characters'
    ));
    $this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_rules('parent', 'Parent', 'required');
    $this->form_validation->set_rules('status', 'Status', 'required');
    if( $this->form_validation->run() == FALSE) {
			echo validation_errors();
		}else
		{
			$this->db->insert('posts', $data);
			echo "grand shit";
		}
  } //end of enterposts

  function upPosts()//update posts
  {
    $this->is_logged_in();
    $tags = '<strong><a><ul><li><span><blockquote><table><th><tr><td><p>';
    $data = [
      'id'        => html_escape($this->input->post('id')),
      'title'     => html_escape(trim($this->input->post('title'))),
      'content'   => htmlspecialchars($this->input->post('content')),
      'status'    => html_escape(trim($this->input->post('status'))),
      'last_date' => html_escape(trim($this->input->post('last_date'))),
      'parent'    => html_escape(trim($this->input->post('parent')))
    ];
    $data = $this->security->xss_clean($data);
    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('content', 'content', 'required');
    $this->form_validation->set_rules('status', 'Status', 'required');
    $this->form_validation->set_rules('last_date', 'Last Date', 'required');
    $this->form_validation->set_rules('parent', 'Parent', 'required');

    if( $this->form_validation->run() == FALSE) {
			echo validation_errors();
		}else
		{
      $id = html_escape($this->input->post('id'));
      $this->db->where('id', $id);
			$this->db->update('posts', $data);
			echo "grand shit";
		}
  } //end of enterposts

public function maint()
{
    $this->is_logged_in();
    $data = array();
    if ($query = $this->Model_form->get_record())
    {
        $data['records'] = $query;
    }
    $tmpl = array ('table_open' =>
      '<table cellpadding="5" cellspacing="5" class="journ" width="95%">', 'row_alt_start' =>
      '<tr class="alt">', 'table_close' => '</table>'
    );
    $this->table->set_template($tmpl);
    $this->table->set_caption("<h3>Post Updates and Other Maintenance</h3>");
    $data['title'] = 'maintenance';
    $this->load->view('posts/post_maint', $data);
}
//fill the update form
public function fill_form()
{
  //$this->is_logged_in();
  $id = $this->uri->segment(3);
  $this->db->where('id', $id);
  $query = $this->db->get('posts');

  if ($query->result())
  {
      $data['records'] = $query->result();
  }
  $data["title"] = "Post update";
  $data['head']  = "Post update";
  $this->load->view('pages/header/head', $data);
  $this->load->view('admin/post_update', $data);
  $this->load->view('pages/footer/footer');
}//end of file

  public function cities()
  {
    $data = array(
    'borncity'  => htmlspecialchars(trim($this->input->post('borncity'))),
    'state'     => htmlspecialchars(trim($this->input->post('state'))),
    'country'   => htmlspecialchars(trim($this->input->post('country'))),
    'family'    => htmlspecialchars(trim($this->input->post('family'))),
    'year'      => htmlspecialchars(trim($this->input->post('year'))),
    'state1'    => htmlspecialchars(trim($this->input->post('state1'))),
    'deathcity' => htmlspecialchars(trim($this->input->post('deathcity')))
    );
    $data = $this->security->xss_clean($data);
    $this->form_validation->set_rules('borncity', 'city of birth', 'required|trim');
    $this->form_validation->set_rules('state', 'state', 'required|trim');
    $this->form_validation->set_rules('country', 'country', 'required|trim');
    $this->form_validation->set_rules('family', 'family', 'required|trim');
    $this->form_validation->set_rules('year', 'year', 'required|trim');
    $this->form_validation->set_rules('state1', 'Born State', 'required|trim');
    $this->form_validation->set_rules('deathcity', 'Death City', 'trim');

    if( $this->form_validation->run() == FALSE) {
      echo validation_errors();
    }else
    {
      $this->db->insert('cities', $data);
      echo "grand shit";
    }
  }
}//end of class
