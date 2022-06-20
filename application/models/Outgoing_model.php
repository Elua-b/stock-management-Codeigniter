<?php
class Outgoing_model extends CI_Model{
    public function __construct()
   {
      $this->primary_key = "outgoingId";
      $this->table_name = "outgoing";
   }

    function display2()
    {
        $data = array(
            "quantity"=> $this->input->post("quantity"),
            "productId" => $this->input->post("productId"),
            
           

        );
        $this->db->insert('outgoing', $data);
    }
    function all(){
        return $users=$this->db->get('outgoing')->result_array();
    }
    function getUser($userId)
    {
       $this->db->where('outgoingId',$userId);
       return $user = $this->db->get('outgoing')->row_array();
   }
   function updateUser($userId){
    $data = array(
        "quantity"=> $this->input->post("quantity"),
            "productId" => $this->input->post("productId"),
    );
    $this->db->where('outgoingId',$userId);
    $this->db->update('outgoing',$data);
   }
   function deleteUser($userId){
    // $data = array(
    //     "name"=> $this->input->post("name"),
    //     "email" => $this->input->post("email")
    // );
   
    $this->db->where('outgoingId',$userId);
    $this->db->delete('outgoing');
   }
  
}
?>