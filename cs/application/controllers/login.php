<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $user = $_POST['username'];
		// $pass = $_POST['password'];
		// if ($user == "syed" && $pass = "123" ) {
		// 	echo "Logged In";
		// }else{
		// 	echo "credential error";
		// }
	}

	public function check(){
		$this->load->model('auth');
		$check = $this->auth->check_login();
		if ($check) {
		echo "Logged In";
	}else{
		echo "Error";
	}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
