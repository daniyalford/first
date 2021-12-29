<?php
defined('BASEPATH') or exit('No direct script access allowed');

//class User extends My_Controller
//{
//	public function login()
//	{
//
//		$this->form_validation->set_rules('email', 'Email', 'required');
//		$this->form_validation->set_rules('password', 'Password', 'required');
//
//		if ($this->form_validation->run() === FALSE) {
//			$this->load->view('user' . DS . 'login');
//		} else {
//
//			$email = $this->input->post('email');
//			$password = $this->input->post('password');
//
//			$user = $this->db->get_where('tbl_users', array('email' => $email))->row();
//
//			if (!$user) {
//				$this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
//				redirect(uri_string());
//			}
//
//
//			if (!password_verify($password, $user->password)) {
//				$this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
//				redirect(uri_string());
//			}
//
//			$data = array(
//				'user_id' => $user->user_id,
//				'first_name' => $user->first_name,
//				'last_name' => $user->last_name,
//				'email' => $user->email,
//				'rule' => $user->rule
//			);
//
//
//			$this->session->set_userdata($data);
//
//			//redirect('/'); // redirect to home
//			echo 'Login success!';
//			exit;
//
//		}
//	}
//
//	public function logout()
//	{
//		$this->session->sess_destroy();
//		redirect('user/login');
//	}
//}
?>
