<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Model', 'admin');
        if ($this->session->has_userdata('logged_in') == TRUE) {
            if ($this->session->userdata('level_user') == 'User') {
                redirect('User/index');
            }
        } else {
            redirect('Login');
        }
    }

    private function load($title = '', $datapath = '')
	{
		$page = array(
			"head" => $this->load->view('admin/template/head', array("title" => $title), true),
			"header" => $this->load->view('admin/template/header', false, true),
			"sidebar" => $this->load->view('admin/template/sidebar', false, true),
			"main_js" => $this->load->view('admin/template/main_js', false, true),
			"footer" => $this->load->view('admin/template/footer', false, true)
		);
		return $page;
	}

	public function index()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Dashboard", $path) ,
            "content" => $this
            ->load
            ->view('admin/index', '', true)
           );

        $this
        ->load
        ->view('admin/template/admin_template', $data);
	}
}
