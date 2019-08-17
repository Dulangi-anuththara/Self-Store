2<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Payment extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('payment_model');
	}
 
	public function index(){
		$data['users'] = $this->payment_model->getAllUsers();
		$this->load->view('header');
		$this->load->view('payment_list.php', $data);
		$this->load->view('footer');
	}
 
	public function addnew(){
		$this->load->view('header');
		$this->load->view('AddPaymentform');
		$this->load->view('footer');
	}
 
	public function insert(){
		$user['Customer_ID'] = $this->input->post('Customer_ID');
		$user['Storage_ID'] = $this->input->post('Storage_ID');
		$user['Payment_Type'] = $this->input->post('Payment_Type');
		$user['Unit_Price'] = $this->input->post('Unit_Price');
		$user['Date'] = $this->input->post('Date');

 
		$query = $this->payment_model->insertuser($user);
 
		if($query){
			header('location:'.base_url().'index.php/payment'.$this->index());
		}
	}
 
	public function edit($Receipts_ID){
		$data['user'] = $this->payment_model->getUser($Receipts_ID);
		$this->load->view('header');
		$this->load->view('EditPaymentform', $data);
		$this->load->view('footer');
	}
 
	public function update($Receipts_ID){
		$user['Customer_ID'] = $this->input->post('Customer_ID');
		$user['Storage_ID'] = $this->input->post('Storage_ID');
		$user['Payment_Type'] = $this->input->post('Payment_Type');
		$user['Unit_Price'] = $this->input->post('Unit_Price');
		$user['Date'] = $this->input->post('Date');
 
		$query = $this->payment_model->updateuser($user, $Receipts_ID);
 
		if($query){
			header('location:'.base_url().'index.php/payment'.$this->index());
		}
	}

	public function delete($Receipts_ID){
		$query = $this->payment_model->deleteuser($Receipts_ID);
 
		if($query){
			header('location:'.base_url().'index.php/payment'.$this->index());
		}
	}
}
?>