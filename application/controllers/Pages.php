<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('encryption');
    $this->load->library('pagination');
    $this->load->library('session');
  }
/**
 * [index description]
 * @method index
 * @return return database query [description]
 */
  public function index()
  {
    $parent = "main";
    $this->db->select("title, content, date, last_date, slug")->where('parent', $parent)->where('status', 'publish')->order_by("id", "asc");
    $query = $this->db->get('posts');
    if($query->result()){
      $data["mainContent"] = $query->result();
    }
    $config['base_url']         = base_url() . '/Pages/';
    $config['total_rows']       = $this->db->count_all_results('posts');
    $config['per_page']         = 5;
    $config['num_links']        = 10;
    $config['uri_segment']      = 3;
    $config['use_page_numbers'] = TRUE;
    $config['full_tag_open']    = "<div class='pagination'>";
    $config['full_tag_close']   = "</div>";

    $this->pagination->initialize($config);
    $data['title'] = "Code 3";
    $data['main_content'] = 'Pages/prime';
    $this->load->view('pages/includes/template', $data);
  }

  public function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true)
        {
          redirect("Checkin");
            //$this->load->view('login_form');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('name');
        $this->session->sess_destroy();
        redirect('Pages', 'refresh');
    }
  public function van()
  {
    $data['title'] = "VanHorn Page";
    $data['head'] = "VanHorn's";
    $parent = "VanHorn";
    $this->db->select("title, content, date, last_date, slug")->from("posts")->where('parent', $parent)->where('status', 'publish')->order_by("id", "asc");
    $query = $this->db->get();
    if($query->result()){
      $data["mainContent"] = $query->result();
    }
    $config['base_url'] = base_url() . 'Pages/van';
    $config['total_rows'] = $this->db->count_all_results('posts');
    $config['per_page'] = 5;
    $config['num_links'] = 10;
    $config['uri_segment'] = 3;
    $config['full_tag_open']    = "<div class='pagination'>";
    $config['full_tag_close']   = "</div>";

    $this->pagination->initialize($config);
    $this->load->view("pages/header/head", $data);
    $this->load->view("Pages/van");
    $this->load->view("pages/footer/footer");
  }
  public function bos()
  {
    $data['title'] = "Bostick Page";
    $data['head'] = "Bosticks";
    $parent = "Bostick";
    $this->db->select("title, content, date, last_date, slug")->from("posts")->where('parent', $parent)->where('status', 'publish')->order_by("id", "asc");
    $query = $this->db->get();
    if($query->result()){
      $data["mainContent"] = $query->result();
    }else {
      echo "";
    }
    $config['base_url'] = base_url() . 'Pages/bos';
    $config['total_rows'] = $this->db->count_all_results('posts');
    $config['per_page'] = 5;
    $config['num_links'] = 10;
    $config['uri_segment'] = 3;
    $config['full_tag_open']    = "<div class='pagination'>";
    $config['full_tag_close']   = "</div>";

    $this->pagination->initialize($config);
    $this->load->view("pages/header/head", $data);
    $this->load->view("pages/bos");
    $this->load->view("pages/footer/footer");
  }
  function entry()
  {
    $this->is_logged_in();
    $this->db->select("id, title, date, status")->order_by("id", "acs");
    $query = $this->db->get("posts");
    if ($query->result())
    {
      $data['getlist'] = $query->result();
    }
    $tmpl = array (
      'table_open'     => '<table class="pure-table pure-table-horizontal" width="100%"',
      'cell_start'     => '<td class="small">',
      'cell_end'       => '</td>',
      'cell_alt_start' => '<td class="small">',
      'table_close'    => '</table>'
    );
    $this->table->set_template($tmpl);
    $this->table->set_heading('ID', 'Title', 'Status');
    $this->table->set_caption("Post Updates");
    $data['title'] = "Post Entry";
    $data['head'] = "Post Entry";
    $this->load->view("pages/header/head", $data);
    $this->load->view("admin/postEntry");
    $this->load->view("pages/footer/footer");
  }

  public function sources()
  {
    $data['title'] = "VanHorn Page";
    $data['head'] = "A VanHorn History";
    $parent = "VanHorn";
    $this->db->select("title, content, date")->from("posts")->where('parent', $parent)->where('status', 'publish')->order_by("id", "asc");
    $query = $this->db->get();
    if($query->result()){
      $data["mainContent"] = $query->result();
    }
    $this->load->view("pages/header/head", $data);
    $this->load->view("pages/van");
    $this->load->view("pages/footer/footer");
  }

  public function post_up()
  {
    $this->is_logged_in();
    $data["title"] = "Post update";
    $data['head'] = "Post update";
  $this->load->view('pages/header/head', $data);
  $this->load->view('admin/post_update', $data);
  $this->load->view('pages/footer/footer');
  }

  public function cities()
  {
      $this->is_logged_in();
      $data['head'] = "Cities entry";
      $data['title'] = 'Cities entry';
      $this->load->view('pages/header/head', $data);
      $this->load->view('admin/cities', $data);
      $this->load->view('pages/footer/footer');
  }

  public function vandna()
  {
      $data['head'] = "Our Male DNA";
      $data['title'] = 'VanHorn DNA';
      $this->load->view('pages/header/head', $data);
      $this->load->view('dna/vandna', $data);
      $this->load->view('pages/footer/footer');
  }

  public function bosdna()
  {
      $data['head'] = "Our Female DNA";
      $data['title'] = 'Bostick / Reed DNA';
      $this->load->view('pages/header/head', $data);
      $this->load->view('dna/bosdna', $data);
      $this->load->view('pages/footer/footer');
  }
} //end of file
