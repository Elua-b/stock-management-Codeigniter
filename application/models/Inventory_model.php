<?php
class Inventory_model extends CI_Model{
    public function __construct()
   {
      $this->primary_key = "inventoryId";
      $this->table_name = "stk_inventory";
   }

    function display()
    {
        $data = array(
            "quantity"=> $this->input->post("quantity"),
            "productId" => $this->input->post("productId"),
           

        );
        $this->db->insert('stk_inventory', $data);
    }
    function all(){
        return $users=$this->db->get('stk_inventory')->result_array();
    }
    function getUser($userId)
    {
       $this->db->where('inventory_id',$userId);
       return $user = $this->db->get('stk_inventory')->row_array();
   }
   function updateUser($userId){
    $data = array(
        "quantity"=> $this->input->post("Quantity"),
            "productId" => $this->input->post("productId"),
    );
    $this->db->where('inventory_id',$userId);
    $this->db->update('stk_inventory',$data);
   }
   function deleteUser($userId){
    // $data = array(
    //     "name"=> $this->input->post("name"),
    //     "email" => $this->input->post("email")
    // );
   
    $this->db->where('inventory_id',$userId);
    $this->db->delete('stk_inventory');
   }
  
}
?>