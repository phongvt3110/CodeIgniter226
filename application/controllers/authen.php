<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authen extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
	}
	// public function Register(){ //Ham tao nay khong co tac dung khi co __construct(),no bi hide nen chi duoc coi nhu mot ham thong thuong
	// 	echo "<h1>Hello Phong</h1>";
	// }
	public function index()
	{
		//$this->load->view('welcome_message');
		echo "<h1>Hello World</h1>";
	}
	public function isLogin(){
		$this->load->view("welcome_message");
	}
	public function isLogout(){
		$this->load->view("logout");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */