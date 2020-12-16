<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_Model', 'auth');
	}

	public function index()
	{
		if ($this->session->has_userdata('logged_in') == TRUE) {
			if ($this->session->userdata('level_user') == 'Administrator') {
				redirect('Admin/index');
			}
			else if ($this->session->userdata('level_user') == 'User') {
				redirect('User/index');
			}
		} else {
			$this->load->view('login');
		}
	}

	public function sign_up()
	{
		if ($this->session->has_userdata('logged_in') == TRUE) {
			if ($this->session->userdata('level_user') == 'Administrator') {
				redirect('Admin/index');
			}
			else if ($this->session->userdata('level_user') == 'User') {
				redirect('User/index');
			}
		} else {
			$this->load->view('sign-up');
		}
	}

	public function auth_login()
	{
		try {

			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$data = $this->auth->login($email, $password);

			if($data){

				$newdata = array(
					'email'  => $data->email,
					'level_user' => $data->level,
					'logged_in' => TRUE,
					'id'  => $data->id_user,
				);
				if ($data->level == 'Administrator') {
					$this->session->set_userdata($newdata);
					$this->session->set_flashdata('notif','<div class="alert border-0 alert-success bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">Selamat Datang '.$data->email.' !<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="ti ti-close"></i></button></div>');
					redirect("Admin/index");
				} else {
					$this->session->set_userdata($newdata);
					$this->session->set_flashdata('notif','<div class="alert border-0 alert-success bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">Selamat Datang '.$data->email.' !<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="ti ti-close"></i></button></div>');
					redirect("User/index");
				}
				

			}
			else{
				$this->session->set_flashdata("notif", '<div class="alert border-0 alert-danger bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">Masukkan Username & Password Dengan Benar!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="ti ti-close"></i></button></div>');
				redirect('Login/index');
			}
		} catch(Exception $e) {
			redirect('Login/index');
		}
	}

	public function sign_up_action()
	{
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$array = array(
			'email' 	=> $email,
			'password' 	=> $password,
			'level' 	=> 'User'
		);

		$insert = $this->db->insert('user', $array);
		if ($insert) {
			$this->session->set_flashdata("notif", '<div class="alert border-0 alert-success bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">Pendaftaran Berhasil!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="ti ti-close"></i></button></div>');
			redirect('Login/index');
		} else {
			$this->session->set_flashdata("notif", '<div class="alert border-0 alert-danger bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">Pendaftaran Gagal!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="ti ti-close"></i></button></div>');
			redirect('Login/index');
		}
		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
}
