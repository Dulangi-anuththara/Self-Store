<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Users extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Users_model');
	}
 
	public function index(){
		$data['users'] = $this->Users_model->getAllUsers();
		$this->load->view('header');
		$this->load->view('user_list.php', $data);
		$this->load->view('footer');
	}
 
	public function addnew(){
		$this->load->view('header');
		$this->load->view('addform.php');
		$this->load->view('footer');
	}
 
	public function insert(){
		$user['name'] = $this->input->post('name');
		$user['contact_number'] = $this->input->post('contact_number');
		$user['email'] = $this->input->post('email');
		$user['address'] = $this->input->post('address');
 
		$query = $this->Users_model->insertuser($user);
 
		if($query){
			header('location:'.base_url().'index.php/users'.$this->index());
		}
 
	}
 
	public function edit($id){
		$data['user'] = $this->Users_model->getUser($id);
		$this->load->view('header');
		$this->load->view('editform', $data);
		$this->load->view('footer');
	}
 
	public function update($id){
		$user['name'] = $this->input->post('name');
		$user['contact_number'] = $this->input->post('contact_number');
		$user['email'] = $this->input->post('email');
		$user['address'] = $this->input->post('address');
 
		$query = $this->Users_model->updateuser($user, $id);
 
		if($query){
			header('location:'.base_url().'index.php/users'.$this->index());
		}
	}
 
	public function delete($id){
		$query = $this->Users_model->deleteuser($id);
 
		if($query){
			header('location:'.base_url().'index.php/users'.$this->index());
		}
	}
}
 
 
?>