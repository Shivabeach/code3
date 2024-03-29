<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forms extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }
  public function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = html_escape($data);
    return $data;
  }

  public function enterPosts()
  {
    $data = [
      'title'   => trim($this->input->post('title')),
      'content' => trim($this->input->post('content')),
      'date'    => trim($this->input->post('date')),
      'parent'  => trim($this->input->post('parent')),
      'status'  => trim($this->input->post('status')),
      'slug'    => trim($this->input->post('slug'))
    ];

    $this->form_validation->set_rules('title', 'Title', 'required|max_length[50]');
    $this->form_validation->set_rules('content', 'content', 'required|min_length[50]');
    $this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_rules('parent', 'Parent', 'required');
    $this->form_validation->set_rules('status', 'Status', 'required');
    $this->form_validation->set_rules('slug', 'Slug', 'required|trim|min_length[30]');
    if( $this->form_validation->run() === FALSE) {
			echo validation_errors();
		}else
		{
			$this->db->insert('posts', $data);
			echo "grand shit";
		}
  } //end of enterposts

  public function up_posts()//update posts
  {
    $data = [
      'id'        => $this->input->post('id'),
      'title'     => trim($this->input->post('title')),
      'content'   => trim($this->input->post('content')),
      'status'    => trim($this->input->post('status')),
      'last_date' => trim($this->input->post('last_date')),
      'parent'    => trim($this->input->post('parent')),
      'slug'      => trim($this->input->post('slug'))
    ];

    $this->form_validation->set_rules('title', 'Title', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('content', 'content', 'required|trim|min_length[25]');
    $this->form_validation->set_rules('status', 'Status', 'required|alpha|max_length[10]');
    $this->form_validation->set_rules('last_date', 'Last Date', 'required');
    $this->form_validation->set_rules('parent', 'Parent', 'required|alpha|max_length[8]');
    $this->form_validation->set_rules('slug', 'Slug', 'required|trim|min_length[25]');

    if( $this->form_validation->run() === FALSE) {
			echo validation_errors();
      echo "sorrow";
		}else
		{
      $id = $this->input->post('id');
      $this->db->where('id', $id);
			$this->db->update('posts', $data);
			echo "grand shit";
		}
  } //end of enterposts

public function maint()
{
    $data = [];
    $this->db->select('id, title, status');
    $this->db->order_by('id', 'DESC');
    $query = $this->db->get('posts');
    if ($query->result())
    {
        $data['records'] = $query;
    }
    $tmpl = array ('table_open' =>
      '<table cellpadding="5" cellspacing="5" class="journ" width="95%">', 'row_alt_start' =>
      '<tr class="alt">', 'table_close' => '</table>'
    );
    $this->table->set_template($tmpl);
    $this->table->set_caption("<h3>Post Updates and Other Maintenance</h3>");
    $data['head'] = "Maintenance";
    $data['title'] = 'maintenance';
    $this->load->view('admin/post_update', $data);
}
//fill the update form
public function fill_form()
{
  $id = $this->uri->segment(3);
  $this->db->where('id', $id);
  $query = $this->db->get('posts');

  if ($query->result())
  {
      $data1['records'] = $query->result();
  }
  $data["title"] = "Post update";
  $data['head']  = "Post update";
  $this->load->view('pages/header/head', $data);
  $this->load->view('admin/post_update', $data1);
  $this->load->view('pages/footer/footer');
}
/**
 * Adding cities to the database to show where we are from
 * @method cities
 * @return [insert] [description]
 */
public function cities()
{
  $data = array(
  'borncity'  => html_escape($this->input->post('borncity')),
  'state'     => html_escape($this->input->post('state')),
  'country'   => html_escape($this->input->post('country')),
  'family'    => html_escape($this->input->post('family')),
  'year'      => html_escape($this->input->post('year')),
  'state1'    => html_escape($this->input->post('state1')),
  'deathcity' => html_escape($this->input->post('deathcity'))
  );

  $this->form_validation->set_rules('borncity', 'city of birth', 'required');
  $this->form_validation->set_rules('state', 'state', 'requireded');
  $this->form_validation->set_rules('country', 'country', 'required');
  $this->form_validation->set_rules('family', 'family', 'required');
  $this->form_validation->set_rules('year', 'year', 'required|numeric');
  $this->form_validation->set_rules('state1', 'Born State', 'required');
  $this->form_validation->set_rules('deathcity', 'Death City');

  if( $this->form_validation->run() == FALSE) {
    echo validation_errors();
  }else
  {
    $this->db->insert('cities', $data);
    echo "grand shit";
  }
} //end of cities

  public function abuseip()
  {
    $ip = html_escape($this->input->post('ip'));
    $key = "gARQewrh1S8OwT227PNask5UpTMpoQSn9Ete4Ge3";
    $days = 30;
    $query = "https://www.abuseipdb.com/check/$ip/json?key=$key&days=$days";
    if ( $query){
      return $query;
    }
  }
  // updated below to add female and male names
  public function family()
  {
    $data = [
      'male'         => html_escape(trim($this->input->post('male'))),
      'male_name'    => html_escape(trim($this->input->post('male_name'))),
      'female'       => html_escape(trim($this->input->post('female'))),
      'female_name'  => html_escape(trim($this->input->post('female_name'))),
      'family'       => html_escape(trim($this->input->post('family'))),
      'relationship' => html_escape(trim($this->input->post('relationship'))),
      'relative'     => html_escape(trim($this->input->post('relative'))),
      'level'        => html_escape(trim($this->input->post('level'))),
      'year'         => html_escape(trim($this->input->post('year'))),
      'death'        => html_escape(trim($this->input->post('death'))),
      'branch2'      => html_escape(trim($this->input->post('branch2'))),
      'country'      => html_escape(trim($this->input->post('country'))),
      'comment'      => html_escape(trim($this->input->post('comment')))
    ];
    $this->form_validation->set_rules('male', 'Male', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('female', 'female', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('male_name', 'Male Name', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('female_name', 'female Name', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('family', 'family', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('relationship', 'Relationship', 'required');
    $this->form_validation->set_rules('relative', 'Relative', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('level', 'level', 'required|numeric');
    $this->form_validation->set_rules('year', 'year', 'required|numeric|max_length[4]');
    $this->form_validation->set_rules('death', 'death', 'required|numeric|max_length[4]');
    $this->form_validation->set_rules('branch2', 'branch2', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('country', 'country', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('comment', 'comment', 'min_length[8]');

    if( $this->form_validation->run() == FALSE) {
      echo validation_errors();
    }else
    {
      $this->db->insert('primary', $data);
      echo "grand shit";
    }
  }// end of family
} //end of class
