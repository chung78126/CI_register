<?php
class User_model extends CI_Model {
    function __construct() { 
        parent::__construct (); 
        {
            $this->load->database (); 
        }
    }
	public function adduser($array) { 
        $data = array(
			'id' => null,
			'username' => $this->input->post("username"),
			'password' => $this->input->post("password"),						
			'year' => $this->input->post("year"),
			'month' => $this->input->post("month"),
			'day' => $this->input->post("day"),
			'roc_id' => $this->input->post("roc_id"),
			'phone' => $this->input->post("phone"),
			'bank_number1' => $this->input->post("bank_number1"),
			'bank_number2' => $this->input->post("bank_number2"),
			'email' => $this->input->post("email"),
			'address' => $this->input->post("address"),
			'register_date' => time()
						
		);
		$this->db->insert("user",$data);
		
    }
}
