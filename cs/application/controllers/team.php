<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

	public function index()
	{
		$this->load->view('team');	

	}
	public function member($id){
		$this->load->view('single_member', $data, FALSE);
	}

}

/* End of file team.php */
/* Location: ./application/controllers/team.php */