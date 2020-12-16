<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Model extends CI_Model {

	function __construct() {
		$this->load->database();
	}

	public function get_user($id_user)
	{
		$query = $this->db->query("SELECT
			a.posisi_dilamar AS posisi_dilamar,
			a.nama AS nama,
			a.no_ktp AS no_ktp,
			a.tempat_lahir AS tempat_lahir,
			a.dob AS dob,
			CASE a.jenis_kelamin
			WHEN 'L' THEN
			'Laki-Laki'
			WHEN 'P' THEN
			'Perempuan'
			END AS jenis_kelamin,
			a.agama AS agama,
			a.gol_darah AS gol_darah,
			a.`status` AS `status`,
			a.alamat_ktp AS alamat_ktp,
			a.alamat_tinggal AS alamat_tinggal,
			b.email AS email,
			a.no_telp AS no_telp,
			a.kerabat AS kerabat,
			a.no_telp_kerabat AS no_telp_kerabat,
			a.kesediaan AS kesediaan,
			a.penghasilan AS penghasilan,
			a.skill AS skill
			FROM
			biodata AS a
			JOIN USER AS b ON a.id_user = b.id_user
			WHERE a.id_user = '$id_user'");
		return $query->row();
	}
	public function get_pendidikan($id_user)
	{
		$query = $this->db->query("SELECT * FROM pendidikan WHERE id_user = '$id_user'");
		return $query->result();
	}
	public function get_pelatihan($id_user)
	{
		$query = $this->db->query("SELECT * FROM pelatihan WHERE id_user = '$id_user'");
		return $query->result();
	}
	public function get_pekerjaan($id_user)
	{
		$query = $this->db->query("SELECT * FROM pekerjaan WHERE id_user = '$id_user'");
		return $query->result();
	}
	public function get_skill($id_user)
	{
		$query = $this->db->query("SELECT * FROM skill WHERE id_user = '$id_user'");
		return $query->result();
	}

}
