<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Model {

  function __construct()
    {
        parent::__construct();
        $ip = $this->input->ip_address();
    }

    function index()
    {
      if(isset($this->input->ip_address)){
        $date     = date("Y-n-j");
        if ($this->agent->is_browser())
          {
                  $agent = $this->agent->browser().' '.$this->agent->version();
          }
          elseif ($this->agent->is_robot())
          {
                  $agent = $this->agent->robot();
          }
          elseif ($this->agent->is_mobile())
          {
                  $agent = $this->agent->mobile();
          }
          else
          {
                  $agent = 'Unidentified';
          }
        $ip = $this->input->ip_address();
        $platform = $this->agent->platform();
        $this->db->select('ip');
        $this->db->where('ip', $ip);
        $query = $this->db->get('visit');
        if ($query->num_rows() == 0)
        {
          $visits = 1;
          $this->db->set('ip', $ip);
          $this->db->set('platform', $platform);
          $this->db->set('date', $date);
          $this->db->set('agent', $agent);
          $this->db->set('visits', $visits);
          $this->db->insert('visit');
        }elseif($query->num_rows() >= 1)
        {
          $this->db->set('visits', $visits + 1);
          $this->db->set('date', $date);
          $this->db->where('ip', $ip);
          $this->db->limit(1);
          $this->db->update('visit');
        }
      }
    }//end of index

}
/* End of file ${TM_FILENAME:${1/(.+)/l.php/}} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)//:application/models/${1/(.+)/l.php/}} */
