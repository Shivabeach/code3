<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('encryption');
    $this->load->library('pagination');
    $this->load->library('parser');

    //Codeigniter : Write Less Do More
  }

  public function index()
  {
    $data['title'] = "Code 3";
    $parent = "main";

    $this->db->select("title, content, date")->where('parent', $parent)->where('status', 'publish')->order_by("id", "asc");
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
    $this->load->view("pages/header/head", $data);
    $this->load->view("Pages/prime", $data);
    $this->load->view("pages/footer/footer");
  }
  public function van()
  {
    $data['title'] = "VanHorn Page";
    $data['head'] = "A VanHorn History";
    $parent = "VanHorn";
    $this->db->select("title, content, date")->from("posts")->where('parent', $parent)->where('status', 'publish')->order_by("id", "asc");
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
    $this->db->select("title, content, date")->from("posts")->where('parent', $parent)->where('status', 'publish')->order_by("id", "asc");
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
    $this->load->view("Pages/bos");
    $this->load->view("pages/footer/footer");
  }
  function entry()
  {
    $this->db->select("id, title, date, status")->order_by("id", "acs");
    $query = $this->db->get("posts");
    if ($query->result())
    {
      $data['getlist'] = $query->result();
    }
    $tmpl = array (
      'table_open'     => '<table class="pure-table pure-table-horizontal" width="100%"',
      'cell_start' => '<td class="small">',
      'cell_end'   => '</td>',
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

    $data["title"] = "Post update";
    $data['head'] = "Post update";
  $this->load->view('pages/header/head', $data);
  $this->load->view('admin/post_update', $data);
  $this->load->view('pages/footer/footer');
  }
}
