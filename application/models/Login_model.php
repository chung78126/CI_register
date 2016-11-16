<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	/**
     * construct
     */
	public function __construct() {
        parent::__construct();
		
		$this->db = $this->load->database("",TRUE);
    }
	
	public function get_user($username, $password) {
	
		$sql = "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."'";
		$query = $this->db->query($sql);
		
		if ($query->num_rows() > 0){ //如果數量大於0
            return $query->row();  //回傳第一筆
        }else{
            return null;
        
	

	/**
	 * @param array order_data	
	 * 
	 * @return int order_id
	 */
	}
}	