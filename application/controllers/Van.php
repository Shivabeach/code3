<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Van extends CI_Controller {

	public function index()
	{

	}

	public function van_names()
	{
		$data['head'] = "VanHorn / Hunt Names";
		$data["main_content"] = "pages/van_names";
		$data["title"] = "VanHorn Names";
		$data['menu'] = "VanHorn Pages";
		$data["maname"] = "Male Names";

		$this->db->select("male_name AS guys");
		$this->db->select('COUNT(male_name) AS total');
		$this->db->where('family', 'VanHorn');
		$this->db->group_by('male_name');
		$query = $this->db->get("primary");

		if($query->result()) {
			$data['male'] = $query->result();

		}

		$this->db->select('female_name AS girls');
		$this->db->select('COUNT(female_name) AS total');
		$this->db->where('family', 'VanHorn');
		$this->db->group_by('female_name');
		$query = $this->db->get('primary');
		if($query->result()) {
			$data['female'] = $query->result();
		}
		$data['fename'] = "Womens Names";
		$this->load->view('pages/includes/template', $data);

	}

	public function bos_names()
	{
		$data['head'] = "Bostick / Reed Names";
		$data["main_content"] = "pages/bos_names";
		$data["title"] = "Bostick Names";
		$data['menu'] = "Bostick Pages";
		$data["maname"] = "Male Names";

		$this->db->select("male_name AS guys");
		$this->db->select('COUNT(male_name) AS total');
		$this->db->where('family', 'Bostick');
		$this->db->group_by('male_name');
		//$this->db->count_all_results() ;
		$query = $this->db->get("primary");
		if($query->result()) {
			$data['male'] = $query->result();

		}


		$this->db->distinct();
		$this->db->select("female_name AS girls");
		$this->db->select('COUNT(female_name) AS total');
		$this->db->where('family', 'Bostick');
		$this->db->group_by('female_name');
		$query = $this->db->get("primary");
		if($query->result()) {
			$data['female'] = $query->result();
		}
		$data['fename'] = "Womens Names";
		$this->load->view('pages/includes/template', $data);

	}

}

/* End of file Van.php */
/* Location: ./application/controllers/Van.php */
