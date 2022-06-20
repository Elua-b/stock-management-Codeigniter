<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller{
   public function __construct()
   {
        parent::__construct();
       $this->load->model('User_model');
   }
public function index(){
    $this->load->view('signup');
}
function dashView(){
    $this->load->view('create');
}
function registerNow(){
    // if($_SERVER['REQUEST_METHOD']=='POST'){
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('username','Username','trim|required|max_length[10]');
        $this->form_validation->set_rules('password','Password','trim|required|max_length[6]');
        if($this->form_validation->run()==false){
            $this->load->view('signup');
        }
        else{

            $formArray=array();
            $formArray['email']=$this->input->post('email');
            $formArray['username']=$this->input->post('username');
             $formArray['password']=$this->input->post('password');
              $this->load->model('User_model');
              $this->User_model->insertUser($formArray);
        
        
        redirect(base_url().'index.php/signup/dashView');
    }
        
        
}
}
?>