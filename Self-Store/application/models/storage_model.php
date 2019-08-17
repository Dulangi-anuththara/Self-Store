<?php

class Storage_model extends CI_Model{

    public function select_basic(){

        $query=$this->db->get('storage_general');
        return $query;
    }
    public function select_unit(){

        $query=$this->db->get('storage_unit');
        return $query;
    }

    public function stat($unit){

        $this->db->set('occupied', 'occupied+1', FALSE);
        $this->db->set('available', 'available-1', FALSE);
        $this->db->where('type',$unit);
        $this->db->update('storage_unit');

    }
}

?>