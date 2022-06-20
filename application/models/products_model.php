<?php
class Products_model extends CI_Model{
    public function __construct()
   {
      $this->primary_key = "productId";
      $this->table_name = "products";
   }

    function create()
    {
        $data = array(
            "product_Name"=> $this->input->post("product_Name"),
            "brand" => $this->input->post("brand"),
            "supplier_phone" => $this->input->post("supplier_phone"),
            "supplier" => $this->input->post("supplier"),

        );
        $this->db->insert('products', $data);
    }
    function all(){
        return $users=$this->db->get('products')->result_array();
    }
    function getUser($userId)
    {
       $this->db->where('productId',$userId);
       return $user = $this->db->get('products')->row_array();
   }
   function updateUser($userId){
    $data = array(
        "product_Name"=> $this->input->post("product_Name"),
        "brand" => $this->input->post("brand"),
        "supplier_phone" => $this->input->post("supplier_phone"),
        "supplier" => $this->input->post("supplier"),
    );
    $this->db->where('productId',$userId);
    $this->db->update('products',$data);
   }
   function deleteUser($userId){
    // $data = array(
    //     "name"=> $this->input->post("name"),
    //     "email" => $this->input->post("email")
    // );
    
    $this->db->where('productId',$userId);
    $this->db->delete('products');
   }
  
}
?>