<?php
	class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
 
		public function getAllUsers(){
			$query = $this->db->get('customers');
			return $query->result(); 
		}
 
		public function insertuser($user){

			$this->db->insert('customers', $user);
			$custId=$this->db->insert_id();

			return $custId;

		}
 
		public function getUser($id){
			$query = $this->db->get_where('customers',array('id'=>$id));
			return $query->row_array();
		}
 
		public function updateuser($user, $id){
			$this->db->where('customers.id', $id);
			return $this->db->update('customers', $user);
		}
 
		public function deleteuser($id){
			$this->db->where('customers.id', $id);
			return $this->db->delete('customers');
		}
 
	}
?>
