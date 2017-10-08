<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fmodel extends CI_Model
{
	var $auto_add_visit = true;
	public function __construct()
	{
		parent::__construct();
      if( $this->auto_add_visit )
      {
        $this->add_visit();
      }
	}

	/**
	 * main function
	 */

	public function add_visit()
	{
    $page = $_SERVER["REQUEST_URI"];
    $ip = $this->input->ip_address();
    $addr = gethostbyaddr($ip);
    $agent = $this->input->user_agent(true);
    $date = time();

    $this->db->where('ip', $ip);
    $query = $this->db->get('visit1');

    if ($query->num_rows() == 0)
    {
     	$visits = 1;
     	$page = $_SERVER["REQUEST_URI"];
     	$this->db->set('page', $page);
     	$this->db->set('ip', $ip);
      $this->db->set('date', $date);
      $this->db->set('agent', $agent);
      $this->db->set('visits', $visits);
      $this->db->set('city', $this->city());
      $this->db->set('region', $this->region());
      $this->db->set('country', $this->country());
      $this->db->set('addr', $addr);
      $this->db->insert('visit1');

    }elseif($query->num_rows() >= 1)
     {
      $page = $_SERVER["REQUEST_URI"];
      $data = [
     		'date'      => $date,
        'agent'     => $agent,
        'page'      => $page,
        'addr'      => $addr
       ];
      $this->db->set('visits', 'visits+1', FALSE);
      $this->db->where('ip', $ip);
      $this->db->limit(1);
      $this->db->update('visit1', $data);
    }
	}

	public function city()
    {
      $ip = $this->input->ip_address();
      $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$ip"));
      $city = $geo["geoplugin_city"];
      return $city;
    }

  public function region()
  {
    $ip = $this->input->ip_address();
    $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$ip"));
    $region = $geo["geoplugin_regionName"];
    return $region;
  }
  public function country($country = null)
  {
    $ip = $this->input->ip_address();
    $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$ip"));
    $country = $geo["geoplugin_countryName"];
    return $country;
  }

}
/* End of file Fmodel.php */
/* Location: ./application/models/Fmodel.php */