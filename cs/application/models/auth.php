<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Auth extends CI_Model
{

  function __construct()
  {
      parent:: __construct();
  }

  public function check_login()
  {
    $where = array('name' => $_POST['username'], 'password' => $_POST['password'] );
    $this->db->where($where);
    $num_rows =  $this->db->get('user_login');
    if ($num_rows->num_rows() > 0) {
      return TRUE;
    }
  }
}
