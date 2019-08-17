<?php

class Main_model extends CI_Model{

    public function insert($data){

        $this->db->insert('reservation',$data);
    }

    public function select_all(){

        $query=$this->db->get('reservation');
        return $query;
    }

    public function count(){
        $this->db->from('notifications');
        return $this->db->count_all_results();
    }

    public function select_notifications(){

        $query=$this->db->get('notifications');
        return $query;

    }
    public function select_single_data($id){
        $this->db->where("ID",$id);
        $query=$this->db->get('notifications');
        return $query;
    }

    public function select_single_data2($id){
        $this->db->where("ReservationID",$id);
        $query=$this->db->get('reservation');
        return $query;
    }
    public function select_where($date){
        $this->db->where("DateOfOccupiedReserved",$date);
        $this->db->from('reservation');        

        return $this->db->count_all_results();
    }

    public function delete_notification($id){
        
        $this->db->delete('notifications',array('ID'=> $id));
    }

    public function delete($id){
        

        $this->db->delete('reservation',array('ReservationID'=> $id));
    }

    public function update_data($data,$id){

        $this->db->set($data);
        $this->db->where('ReservationID',$id);
        $this->db->update('reservation');

        return 1;
    }

    public function reserveValidate($custID){

        $this->db->where('ID',$custID);
        $query=$this->db->get('customers');

        if($query->num_rows() > 0){

            return true;
        }
        else{
            
            return false;
        }

    }

    public function total(){
        $this->db->select_sum('total');
        $query = $this->db->get('storage_general')->row();
        
        return $query->total;
        
    }
    public function occupied(){
        
        $this->db->select_sum('occupied');
        $query = $this->db->get('storage_general')->row();
        

        return $query->occupied;
    }
    public function available(){
        
        $this->db->select_sum('available');
        $query = $this->db->get('storage_general')->row();

        return $query->available;
    }



}
?>