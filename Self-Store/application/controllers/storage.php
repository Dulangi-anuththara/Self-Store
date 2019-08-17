<?php

class storage extends CI_Controller{


    public function index(){

    }

    public function select_basic(){
        
        $this->load->view('header');
        
        $this->load->model('storage_model');
        $query=$this->storage_model->select_basic();
        $data['result']=$query->result();
        $this->load->view('storage_details_view',$data);
        

        $this->load->view('footer');

    }
    public function select_unit(){
        
        $this->load->view('header');
        
        $this->load->model('storage_model');
        $query=$this->storage_model->select_unit();
        $data['result']=$query->result();
        $this->load->view('storage_unit_view',$data);
        

        $this->load->view('footer');

    }



    public function insert(){

    }

    public function delete(){

    }

    public function update(){

    }
    
}



?>