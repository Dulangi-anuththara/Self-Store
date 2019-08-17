<?php 

class Reservation extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function index(){

        $this->load->view('header');

        $this->load->model('main_model');
        $date=date("Y-m-d");
        $data['payment'] = $this->main_model->select_where($date);
        $data['count'] = $this->main_model->count();
        $data['total'] = $this->main_model->total();
        $data['occupied'] = $this->main_model->occupied();
        $data['available']=$this->main_model->available();

        
        
        $this->load->view('analytics_dashboard');
        $this->load->view('dashboard',$data);
        $this->load->view('footer');
        
    }

    public function viewNotifications(){

        $this->load->view('header');

        $this->load->model('main_model');
        $data['count']=$this->main_model->count();
        
        $query=$this->main_model->select_notifications();
        $data['result']=$query->result();

        $this->load->view('viewNotifications',$data);
        $this->load->view('footer');

    }

    public function handleCustomerNotifications(){
        $user_id = $this->uri->segment(3);
        $this->load->model('Users_model');
        $this->load->model('main_model');

        $this->session->set_userdata('userId',$user_id);
        
        
        $data['reserve_data']=$this->main_model->select_single_data($user_id);
        $data['user_id'] = $user_id;
        

        if(isset($user_id)){
            $this->load->view('header');
            $this->load->view('insert_customer',$data);
            $this->load->view('footer');
        
        }
        else {
            $data = array(
                
                "name" => $this->input->post("name"),
                "email" => $this->input->post("email"),
                "contact_number" => $this->input->post("contact_number"),
                "address" => $this->input->post("address")
                
            );

            $user_id=$this->input->post("user_id");
            $custId = $this->Users_model->insertuser($data);
            redirect(base_url() . "index.php/reservation/handleNotifications/$custId/$user_id");        }


    }
    # Auto complete the form using customer reservation request

    public function handleNotifications($custId,$user_id){        
        

        $this->load->model('main_model');
        $this->load->library('form_validation');

        $data['reserve_data']=$this->main_model->select_single_data($user_id);
        $data['custId']=$custId;
        
        if(isset($user_id)){

                
                $this->load->view('header');
                $this->load->view('insert_reserve',$data);
                $this->load->view('footer');

                $this->main_model->delete_notification($user_id);
            
        }
        
        else{

            
            $data = array(
                "CustomerID" => $this->input->post("custId"),
                "StorageLine" => $this->input->post("line"),
                "StorageNumber" => $this->input->post("unit"),
                "DateOfOccupiedReserved" => $this->input->post("date"),
                "ItemDescription" => $this->input->post("item"),
                "Remarks" => $this->input->post("remarks")

            );
        $this->main_model->insert($data);
        $this->calculations($this->input->post("line"));
        
            

            
        redirect(base_url() . "index.php/reservation/viewNotifications");
         
        
            
        }
    }

    # User fill reservation form manually

    public function addReservation(){

        $this->load->model('main_model');
        $date=date("Y-m-d");
        $data['payment']=$this->main_model->select_where($date);
        $data['count']=$this->main_model->count();

        $this->load->view('header');

        $this->load->view('form_validation',$data);
        $this->load->view('form');

        $this->load->view('footer');

    }

    public function reserveValidation(){

        $this->load->library('form_validation');

        $this->load->model('main_model');

        $custID=$this->input->post("custId");
        
       
        if($this->main_model->reserveValidate($custID)){
            
            $data = array(
                "CustomerID" => $this->input->post("custId"),
                "StorageLine" => $this->input->post("line"),
                "StorageNumber" => $this->input->post("unit"),
                "DateOfOccupiedReserved" => $this->input->post("date"),
                "ItemDescription" => $this->input->post("item"),
                "Remarks" => $this->input->post("remarks")

            );
            
            
            
            $this->main_model->insert($data);
            $this->calculations($this->input->post("line"));

            $this->load->view('header');
            $this->load->view('success');
            $this->load->view('footer');

        }
        else{
           
            $data['error']="* Invalid Customer ID.Enter valid Customer ID";
            $this->load->view('header');

            $this->load->view('form_validation');
            $this->load->view('form',$data);

            $this->load->view('footer');
            
        }



    }
    
    
    public function viewReservation(){
        $this->load->view('header');
        
        $this->load->model('main_model');
        $query=$this->main_model->select_all();
        $data['result']=$query->result();
        $this->load->view('table',$data);
        

        $this->load->view('footer');


    }

    public function delete($id){


        $this->load->model('main_model');
        $this->main_model->delete($id);
        redirect(base_url() . "index.php/reservation/viewReservation");
    }

    public function update_reservation(){

        $user_id = $this->uri->segment(3);
        $this->load->model('main_model');

        $data['reserve_data']=$this->main_model->select_single_data2($user_id);
        
        if(isset($user_id)){
            $this->load->view('header');
            $this->load->view('update_view',$data);
            $this->load->view('footer');
            
        }
        
        else{

        $data = array(
            "CustomerID" => $this->input->post("custId"),
            "StorageLine" => $this->input->post("line"),
            "StorageNumber" => $this->input->post("unit"),
            "DateOfOccupiedReserved" => $this->input->post("date"),
            "ItemDescription" => $this->input->post("item"),
            "Remarks" => $this->input->post("remarks")

        );
            $this->main_model->update_data($data,$this->input->post("hidden_id"));
         redirect(base_url() . "index.php/reservation/viewReservation");
        

        }

    }

    public function calculations($unit){

        $this->load->model('storage_model');
        $this->storage_model->stat($unit);

       

    }




}
?>