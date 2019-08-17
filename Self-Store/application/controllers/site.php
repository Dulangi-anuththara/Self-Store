<?php 

class Site extends CI_controller{

public function index(){

    $this->load->view('website');
}

public function insertNotification(){
    $this->load->model('site_model');
                $data = array(
                    
                    "name" => $this->input->post("name"),
                    "address" => $this->input->post("address"),
                    "email" => $this->input->post("email"),
                    "phone_number" => $this->input->post("number"),
                    "unit" => $this->input->post("unit"),
                    "date" => $this->input->post("date")

                );
                
                
        $this->site_model->insert($data);
        redirect(base_url() . "index.php/site/success");

        
}

public function success(){

    $this->load->view('site_success');
}




}



?>