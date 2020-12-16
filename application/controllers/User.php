<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_Model', 'user');

        if ($this->session->has_userdata('logged_in') == TRUE) {
            if ($this->session->userdata('level_user') == 'Administrator') {
                redirect('Admin/index');
            }
        } else {
            redirect('Login');
        }
    }

    private function load($title = '', $datapath = '')
	{
		$page = array(
			"head" => $this->load->view('user/template/head', array("title" => $title), true),
			"header" => $this->load->view('user/template/header', false, true),
			"sidebar" => $this->load->view('user/template/sidebar', false, true),
			"main_js" => $this->load->view('user/template/main_js', false, true),
			"footer" => $this->load->view('user/template/footer', false, true)
		);
		return $page;
	}

	public function index()
	{
        $id_user = $this->session->userdata('id');
		$path = "";
        $get = array(
            'get_user' => $this->user->get_user($id_user),
            'get_pendidikan' => $this->user->get_pendidikan($id_user),
            'get_pelatihan' => $this->user->get_pelatihan($id_user),
            'get_pekerjaan' => $this->user->get_pekerjaan($id_user),
        );
        $data = array(
            "page" => $this->load("Dashboard", $path) ,
            "content" => $this
            ->load
            ->view('user/index', $get, true)
           );

        $this
        ->load
        ->view('user/template/user_template', $data);
	}

    public function tambah()
    {
        $path = "";
        $data = array(
            "page" => $this->load("Dashboard", $path) ,
            "content" => $this
            ->load
            ->view('user/tambah', '', true)
           );

        $this
        ->load
        ->view('user/template/user_template', $data);
    }

    public function simpan_biodata()
    {
        $id_user = $this->session->userdata('id');

        $posisi = $this->input->post('posisi');
        $nama = $this->input->post('nama');
        $no_ktp = $this->input->post('no_ktp');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $kelamin = $this->input->post('kelamin');
        $agama = $this->input->post('agama');
        $gol_darah = $this->input->post('gol_darah');
        $status = $this->input->post('status');
        $alamat_ktp = $this->input->post('alamat_ktp');
        $alamat_tinggal = $this->input->post('alamat_tinggal');
        $email = $this->input->post('email');
        $no_telp = $this->input->post('no_telp');
        $kerabat = $this->input->post('kerabat');
        $telp_kerabat = $this->input->post('telp_kerabat');
        $bersedia = $this->input->post('bersedia');
        $penghasilan = $this->input->post('penghasilan');
        $skill = $this->input->post('skill');

        $data1 = array('email' => $email);
        $data2 = array(
            'nama' => $nama,
            'posisi_dilamar' => $posisi,
            'no_ktp' => $no_ktp,
            'tempat_lahir' => $tempat_lahir,
            'dob' => $tanggal_lahir,
            'jenis_kelamin' => $kelamin,
            'agama' => $agama,
            'gol_darah' => $gol_darah,
            'status' => $status,
            'alamat_ktp' => $alamat_ktp,
            'alamat_tinggal' => $alamat_tinggal,
            'no_telp' => $no_telp,
            'kerabat' => $kerabat,
            'no_telp_kerabat' => $telp_kerabat,
            'kesediaan' => $bersedia,
            'penghasilan' => $penghasilan,
            'skill' => $skill,
            'id_user' => $id_user,
        );

        $this->db->where('id_user', $id_user);
        $this->db->update('user', $data1);

        $insert = $this->db->insert('biodata', $data2);
        if ($insert) {
            $this->session->set_flashdata("notif", '<div class="alert border-0 alert-success bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">Pendaftaran Berhasil!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="ti ti-close"></i></button></div>');
            redirect('User/index');
        } else {
            $this->session->set_flashdata("notif", '<div class="alert border-0 alert-danger bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">Pendaftaran Gagal!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="ti ti-close"></i></button></div>');
            redirect('User/tambah');
        }
    }

    public function tambah_pendidikan()
    {
        $path = "";
        $data = array(
            "page" => $this->load("Dashboard", $path) ,
            "content" => $this
            ->load
            ->view('user/tambah-pendidikan', '', true)
           );

        $this
        ->load
        ->view('user/template/user_template', $data);
    }

    public function tambah_pelatihan()
    {
        $path = "";
        $data = array(
            "page" => $this->load("Dashboard", $path) ,
            "content" => $this
            ->load
            ->view('user/tambah-pelatihan', '', true)
           );

        $this
        ->load
        ->view('user/template/user_template', $data);
    }

    public function tambah_pekerjaan()
    {
        $path = "";
        $data = array(
            "page" => $this->load("Dashboard", $path) ,
            "content" => $this
            ->load
            ->view('user/tambah-pekerjaan', '', true)
           );

        $this
        ->load
        ->view('user/template/user_template', $data);
    }

    public function simpan_pendidikan()
    {
        $id_user = $this->session->userdata('id');

        $jenjang = $this->input->post('jenjang');
        $nama_institusi = $this->input->post('nama');
        $jurusan = $this->input->post('jurusan');
        $tahun_lulus = $this->input->post('tahun_lulus');
        $ipk = $this->input->post('ipk');

        $data2 = array(
            'jenjang' => $jenjang,
            'nama_institusi' => $nama_institusi,
            'jurusan' => $jurusan,
            'tahun_lulus' => $tahun_lulus,
            'ipk' => $ipk,
            'id_user' => $id_user,
        );

        // $this->db->where('id_user', $id_user);
        // $this->db->update('user', $data1);

        $insert = $this->db->insert('pendidikan', $data2);
        if ($insert) {
            $this->session->set_flashdata("notif", '<div class="alert border-0 alert-success bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert"> Berhasil!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="ti ti-close"></i></button></div>');
            redirect('User/index');
        } else {
            $this->session->set_flashdata("notif", '<div class="alert border-0 alert-danger bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert"> Gagal!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="ti ti-close"></i></button></div>');
            redirect('User/tambah');
        }
    }

    public function simpan_pelatihan()
    {
        $id_user = $this->session->userdata('id');

        $kursus = $this->input->post('kursus');
        $sertifikat = $this->input->post('sertifikat');
        $tahun = $this->input->post('tahun');

        $data2 = array(
            'nama_kursus' => $kursus,
            'sertifikat' => $sertifikat,
            'tahun' => $tahun,
            'id_user' => $id_user,
        );

        // $this->db->where('id_user', $id_user);
        // $this->db->update('user', $data1);

        $insert = $this->db->insert('pelatihan', $data2);
        if ($insert) {
            $this->session->set_flashdata("notif", '<div class="alert border-0 alert-success bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert"> Berhasil!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="ti ti-close"></i></button></div>');
            redirect('User/index');
        } else {
            $this->session->set_flashdata("notif", '<div class="alert border-0 alert-danger bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert"> Gagal!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="ti ti-close"></i></button></div>');
            redirect('User/tambah');
        }
    }

    public function simpan_pekerjaan()
    {
        $id_user = $this->session->userdata('id');

        $nama = $this->input->post('nama');
        $posisi = $this->input->post('posisi');
        $tahun = $this->input->post('tahun');
        $pendapatan = $this->input->post('pendapatan');

        $data2 = array(
            'nama_perusahaan' => $nama,
            'posisi' => $posisi,
            'tahun' => $tahun,
            'pendapatan' => $pendapatan,
            'id_user' => $id_user,
        );

        // $this->db->where('id_user', $id_user);
        // $this->db->update('user', $data1);

        $insert = $this->db->insert('pekerjaan', $data2);
        if ($insert) {
            $this->session->set_flashdata("notif", '<div class="alert border-0 alert-success bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert"> Berhasil!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="ti ti-close"></i></button></div>');
            redirect('User/index');
        } else {
            $this->session->set_flashdata("notif", '<div class="alert border-0 alert-danger bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert"> Gagal!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="ti ti-close"></i></button></div>');
            redirect('User/tambah');
        }
    }
}
