<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_Model extends CI_Model {

	function __construct() {
        $this->load->database();
    }

    public function login($email, $password) {
        $query = $this->db->query("SELECT * FROM user WHERE email = '$email' AND password = '$password'");
        return $query->row();
    }

}
