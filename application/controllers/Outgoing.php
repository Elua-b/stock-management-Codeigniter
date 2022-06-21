<?php
class Outgoing extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('Outgoing_model');
   }
   function index(){
      
      $users=$this->Outgoing_model->all();
      $data=array();
      $data['outgoings']=$users;
      $this->load->view('table2',$data);
     
   }

   function  display2()
   {
      $this->form_validation->set_rules('quantity', 'Quantity', 'trim|required');
      $this->form_validation->set_rules('productId', 'ProductId', 'trim|required');
     
      if ($this->form_validation->run()==false) {
         $this->load->view('display2');
      } else {
        
         $user = new Outgoing_model;
         $user->display2();
         
         redirect(base_url() . 'index.php/outgoing/index');
      }
   }
   function change2($userId){
    $user=$this->Outgoing_model->getUser($userId);
    $data=array();
    $data['user']=$user;
    $this->form_validation->set_rules('quantity', 'Quantity', 'trim|required');
      $this->form_validation->set_rules('productId', 'ProductId', 'trim|required');
    if($this->form_validation->run()==false){
       $this->load->view('change2',$data);
    }
    else{
       $user = new Outgoing_model;
       if(isset($_POST['update'])){
        $user->updateUser($userId);
        redirect(base_url().'index.php/outgoing/');

       }
      
       
    }
 }
 function delete($userId){
    $userInstance = new outgoing_model;
    $user = $userInstance->getUser($userId);
    if(empty($user)){
       $this->session->set_flashdata('failure');
      return;
    }
    $userInstance->deleteUser($userId);
    
    redirect(base_url().'index.php/outgoing/');;
 }
 
}
