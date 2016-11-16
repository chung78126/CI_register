<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
	
        parent::__construct();
		
		$this->load->model('Login_model');
		$this->load->helper('url');			//*redirect()
	}
	
	public function index() {
	
		$this->load->view('login');
	}
	
	public function admin() {
	
		$this->load->view('menu');
	}
	
	public function validate() {
		
		session_start();
		
		$username = trim($this->input->post("username"));
		$password = trim($this->input->post("password"));
		
		$user = $this->Login_model->get_user($username,$password);
		
		if($_SESSION['username'] = $user['username']){
		redirect(site_url("/login/admin")); //轉回首頁
		}else{
			echo "<script>alert('帳號密碼輸入錯誤')</script>";
			echo '<meta http-equiv=REFRESH CONTENT=0.1;url=/CI/index.php/login/index>';
			
		}
	}
	public function logout(){
		session_start();
		session_destroy();
		redirect(site_url("/login/index")); //
		
	}	
	
	

		
		
		
		
		
		
		
	
	
}
?>