<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkmod extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function better_crypt($input, $rounds = 10)
  {
    $crypt_options = array(
      'cost' => $rounds
    );
    return password_hash($input, PASSWORD_BCRYPT, $crypt_options);
  }

}
