<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("id_user")) {
			redirect("login");
		}
		$this->load->model('db_model');
		$this->load->helper('url');
	}

	public function index()
	{
		// $this->load->view('dashboard_v');
		//$this->load->view('umum_v', $data);

		// $data["total_today"] = $this->db_model->get("v_today")->num_rows();
		// $this->template->load('template', 'operator_gcu_v', $data);
		$this->load->view('home_v');
	}	
	

	public function tambah_data()
	{
		$data = [
			"nama" => $this->input->post("nama", TRUE),
			"tempat_lahir" => $this->input->post("tempat_lahir", TRUE),
			"ttl_pasien_gcu" => $this->input->post("ttl_pasien_gcu", TRUE),
			"bb_pasien_gcu" => $this->input->post("bb_pasien_gcu", TRUE),
			"tb_pasien_gcu" => $this->input->post("tb_pasien_gcu", TRUE),
			"kecamatan_pasien_gcu" => $this->input->post("kecamatan_pasien_gcu", TRUE),
			"kabupaten_pasien_gcu" => $this->input->post("kabupaten_pasien_gcu", TRUE),
			"alamat_pasien_gcu"=>$this->input->post("alamat_pasien_gcu", TRUE)
		];
		$this->db_model->insert('gcu_syamrabu', $data);
		echo json_encode($data);
	}


}
