<?php
class User_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
    function insertUser($formArray){
     
        $this->db->insert('users_table',$formArray);
    }
}

?>