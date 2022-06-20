<?php
class Inventory extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('Inventory_model');
   }
   function index(){
      
      $users=$this->Inventory_model->all();
      $data=array();
      $data['inventories']=$users;
      $this->load->view('table',$data);
     
   }

   function  display()
   {
      $this->form_validation->set_rules('quantity', 'Quantity', 'required');
      $this->form_validation->set_rules('productId', 'ProductId', 'required');
     
      if ($this->form_validation->run()==false) {
         $this->load->view('display');
      } else {
        
         $user = new inventory_model;
         $user->display();
         
         redirect(base_url() . 'index.php/inventory/index');
      }
   }
   function change($userId){
    $user=$this->Inventory_model->getUser($userId);
    $data=array();
    $data['user']=$user;
    $this->form_validation->set_rules('quantity', 'Quantity', 'required');
      $this->form_validation->set_rules('productId', 'ProductId', 'required');
    if($this->form_validation->run()==false){
       $this->load->view('change',$data);
    }
    else{
       $user = new inventory_model;
       $user->updateUser($userId);
       redirect(base_url().'index.php/inventory/');
       
    }
 }
 function delete($userId){
    $userInstance = new inventory_model;
    $user = $userInstance->getUser($userId);
    if(empty($user)){
       $this->session->set_flashdata('failure');
      return;
    }
    $userInstance->deleteUser($userId);
    
    redirect(base_url().'index.php/inventory/');;
 }
 
}
   ?>