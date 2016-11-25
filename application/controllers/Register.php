<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

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
			
	
	public function test()
	{
	
	$this->load->library ( 'form_validation' );
	$this->load->view('register_v');
	
		
	}
	
	public function insertdata()
	{	
		$rule = array ( 
			array (
				'field' => 'username',
				'label' => 'Username', 
				'rules' => 'required|min_length[8]|max_length[16]'
			),
			array(
				'filed' => 'password',
				'label' => 'Password',				
				'rules' => 'required|min_length[8]|max_length[16]'
			),
			array(
				'filed' => 'repassword',
				'label' => 'Repassword',				
				'rules' => 'required|match[password]'
			),
			array(
				'filed' => 'year',
				'label' => 'Year',
				'rules' => 'required|yyyy'
			),
			array(
				'filed' => 'month',
				'label' => 'Month',
				'rules' => 'required|mm'
			),
			array(
				'filed' => 'day',
				'label' => 'Day',			
				'rules' => 'required|dd'
			),
			array(
				'filed' => 'roc_id',
				'label' => 'Roc_id',			
				'rules' => 'trim|required|min_length[10]|max_length[10]'
			),			
			array(
				'filed' => 'phone',
				'label' => 'Phone',			
				'rules' => 'trim|required|min_length[11]|max_length[11]'
			),
			array(
				'filed' => 'bank_number1',
				'label' => 'Bank_number1',			
				'rules' => 'required|min_length[4]'
			),
			array(
				'filed' => 'bank_number2',
				'label' => 'Bank_number2',			
				'rules' => 'trim|required|min_length[20]|max_length[20]'
			),
			array(
				'filed' => 'email',
				'label' => 'Email',
				'rules' => 'required|valid_email'
			),
			array(
				'filed' => 'address',
				'label' => 'Address',
				'rules' => 'required|min_length[1]'			
			)
			       
		);
		$this->load->library ('form_validation');
		$this->form_validation->set_rules ($rule);
		if($this->form_validation->run()==false){			
			$this->load->view('register_v'); 
		}else{
			$this->load->model ('User_model'); 
			$this->User_model->adduser ();
			$this->load->view('login');
		}
					
	}
	
}
?>