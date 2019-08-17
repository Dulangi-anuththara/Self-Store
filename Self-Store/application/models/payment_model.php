<?php
	class Payment_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
 
		public function getAllUsers(){
			$query = $this->db->get('payments');
			return $query->result(); 
		}
 
		public function insertuser($user){
			return $this->db->insert('payments', $user);
		}
 
		public function getUser($Receipt_ID){
			$query = $this->db->get_where('payments',array('Receipt_ID'=>$Receipt_ID));
			return $query->row_array();
		}
 
		public function updateuser($user, $Receipt_ID){
			$this->db->where('payments.Receipt_ID', $Receipt_ID);
			return $this->db->update('payments', $user);
		}
 
		public function deleteuser($Receipt_ID){
			$this->db->where('payments.Receipt_ID', $Receipt_ID);
			return $this->db->delete('payments');
		}
 
	}
?>
