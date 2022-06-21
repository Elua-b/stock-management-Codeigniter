<?php
class Product extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('Products_model');
   }
   function index(){
      
      $users=$this->Products_model->all();
      $data=array();
      $data['products']=$users;
      $this->load->view('list',$data);
     
   }

   function  create()
   {
      $this->form_validation->set_rules('product_Name', 'trim|Product_Name', 'required');
      $this->form_validation->set_rules('brand', 'Brand', 'trim|required');
      $this->form_validation->set_rules('supplier_phone', 'trim|Supplier_Name', 'required');
      if ($this->form_validation->run()==false) {
         $this->load->view('create');
      } else {
        
         $user = new products_model;
         $user->create();
         
         redirect(base_url() . 'index.php/product/index');
      }
   }
   function edit($userId){
    $user=$this->Products_model->getUser($userId);
    $data=array();
    $data['user']=$user;
    $this->form_validation->set_rules('product_Name', 'trim|Product_Name', 'required');
      $this->form_validation->set_rules('brand', 'Brand', 'trim|required');
      $this->form_validation->set_rules('supplier_phone', 'trim|Supplier_Name', 'required');
    if($this->form_validation->run()==false){
       $this->load->view('edit',$data);
    }
    else{
       $user = new products_model;
       $user->updateUser($userId);
       redirect(base_url().'index.php/product/');
       
    }
 }
 function delete($userId){
    $userInstance = new products_model;
    $user = $userInstance->getUser($userId);
    if(empty($user)){
       $this->session->set_flashdata('failure');
      return;
    }
    $userInstance->deleteUser($userId);
    
    redirect(base_url().'index.php/product/');
 }
 
}
   ?>