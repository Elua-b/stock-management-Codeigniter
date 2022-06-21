<?php
// defined('BASEPATH') or exit('No direct script access allowed');

// class Login extends CI_Controller
// {

//     public function index()
//     {
//     }
//     public function process()
//     {
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

//         if (isset($_POST['login'])) {
//             $email = $this->input->post('email');
//             $password = $this->input->post('password');
//             $validate = $this->db->get_where('users_table', array('email' => $email, 'password' => $password))->row();
//             // var_dump($validate);
//             if (!$validate) {
//                 echo "Account Invalid";
//             } else {
//                 $user = array('Email' => $email, 'username' => $validate->username);
//                 $this->session->set_userdata($user);
//                 // echo  $this->session->userdata('Email');
//                 redirect(base_url().'index.php/product/');
//             }
//         }
//         $this->load->view('login_view');
//     }
//     public function logout()
//     {
//         //removing session  
//         $this->session->unset_userdata('user');
//         redirect("Login");
//     }
// }
class Login_controller extends CI_Controller
{

	function login()
	{

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			// $this->load->view('login_view');
		} else {

			$email = $this->input->post('email');

			$password = md5( $this->input->post('password'));

			$user = $this->db->get_where('users_table', array('email' => $email, 'password' => $password))->row();
			if (!$user) {
				//  return var_dump($user);
				$this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
				echo "not logged";
				// redirect(base_url() . 'index.php/login_controller/login');
			}


			// else if(!($password == $user->password)) {
			// 	$this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
			// 	redirect(base_url().'index.php/login_controller/login');
			// }
			else {



				$data = array(
					'user_id' => $user->user_id,
					'username' => $user->username,

					'email' => $user->email,
				);


				$this->session->set_userdata($data);
				echo 'Login success!';
				redirect(base_url() . 'index.php/product/index');
				//redirect('/'); // redirect to home

			}
		}
		$this->load->view('login_view');
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('user/login');
	}
}
