<?php

class site_model extends CI_Model{

    public function insert($data){

        $this->db->insert('notifications',$data);
    }
}
?>