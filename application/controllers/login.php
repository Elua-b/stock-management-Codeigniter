<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
    }
    public function process()
    {
        // if ($email== && $password==)   
        // {  
        //     //declaring session  
        //     $this->session->set_userdata(array('users_table'=>$user));  
        //     $this->load->view('create');  
        // }  
        // else{  
        //     $data['error'] = 'Your Account is Invalid';  
        //     $this->load->view('login_view', $data);  
        // }  

        if (isset($_POST['login'])) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $validate = $this->db->get_where('users_table', array('email' => $email, 'password' => $password))->row();
            // var_dump($validate);
            if (!$validate) {
                echo "Account Invalid";
            } else {
                $user = array('Email' => $email, 'username' => $validate->username);
                $this->session->set_userdata($user);
                // echo  $this->session->userdata('Email');
                redirect(base_url().'index.php/product/');
            }
        }
        $this->load->view('login_view');
    }
    public function logout()
    {
        //removing session  
        $this->session->unset_userdata('user');
        redirect("Login");
    }
}
