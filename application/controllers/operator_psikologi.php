<?php
defined('BASEPATH') or exit('No direct script access allowed');

class operator_psikologi extends CI_Controller
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
		$this->template->load('template', 'operator_psikologi_v');
	}	
	
	public function tampil()
	{
		echo json_encode($this->db_model->ambil_data("gcu_syamrabu")->result());
		// $data_antrian = $this->db_model->ambil_data('gcu_syamrabu')->result();
		// echo json_encode($data_antrian);

		// $data_antrian = $this->db_model->ambil_data('syarefa', ["status" => $nowDate])->result();
		// echo json_encode($data_antrian);
		// echo json_encode($this->db_model->get_where("syarefa", ["status" => $nowDate])->result());
	}

	public function cetak()
	{
		// $id_pasien = $this->db_model->get_all("gcu_syamrabu")->result();
		// echo json_encode($this->db_model->get_all("gcu_syamrabu")->result());
	}

	// public function tambah_data()
	// {
	// 	$data = [
	// 		"no_antrian" => $this->input->post("no_antrian", TRUE),
	// 		"no_rm" => $this->input->post("no_rm", TRUE),
	// 		"nama" => $this->input->post("nama", TRUE),
	// 		"poli" => $this->input->post("poli", TRUE),
	// 		"jenis_pasien" => $this->input->post("jenis_pasien", TRUE),
	// 		"status"=>$this->input->post("status", TRUE)
	// 	];
	// 	$this->db_model->insert('syarefa', $data);
	// 	echo json_encode($data);
	// }

	public function dataById($id)
	{

		$query = "select * from gcu_syamrabu where id=".($id);		// $id_pasien = $this->db_model->get_where("gcu_syamrabu", ["id" => (int) $id] );
		
		$data ['pasien'] = $this->db_model->get_query($query)->row_array();
		// $pasien = $this->db_model->get_query($query)->row_array();
		// var_dump($pasien ['nama']) ;


		// $data["nama"] = $id_pasien['nama'];
		// $data["tempat_lahir"] = $id_pasien['tempat_lahir'];
		// $data["ttl_pasien_gcu"] = $id_pasien['ttl_pasien_gcu'];
		// $data["bb_pasien_gcu"] = $id_pasien['bb_pasien_gcu'];
		// $data["tb_pasien_gcu"] = $id_pasien['tb_pasien_gcu'];
		// $data["kecamatan_pasien_gcu"] = $id_pasien['kecamatan_pasien_gcu'];
		// $data["kabupaten_pasien_gcu"] = $id_pasien['kabupaten_pasien_gcu'];
		// $data["alamat_pasien_gcu"] = $id_pasien['alamat_pasien_gcu'];
		$this->load->view('form', $data);
		// echo json_encode($this->db_model->get_where($this->input->post("target"), ["id" => $this->input->post('id', TRUE)])->row_array());
	}
	function edit_id()
	{
		echo json_encode($this->db_model->get_where($this->input->post("target"), ["id" => $this->input->post('id', TRUE)])->row_array());
	}

	function open_form(){
		// $data["nama"] = $this->db_model->get_all("gcu_syamrabu")->result();
		// $data["nama"] = $this->db_model->get_where("gcu_syamrabu", ["rule" => 2])->row_array()["nama"];
		// $data["admin"] = $this->db_model->get_where("tbl_user", ["rule" => 2])->row_array()["nama"];
		// $data ["nama"]= $this->session->userdata("nama");
		//$data_antrian = $this->db_model->ambil_data('gcu_syamrabu')->result();
		$this->load->view('form');
	}


	public function edit()
	{
		$data = [
			"keperluan_pasien_gcu" => $this->input->post("keperluan_pasien_gcu", TRUE),
			"pendengaran_pasien_gcu" => $this->input->post("pendengaran_pasien_gcu", TRUE),
			"warna_pasien_gcu" => $this->input->post("warna_pasien_gcu", TRUE)
		];
		$this->db_model->update('gcu_syamrabu', $data, ["id" => $this->input->post("id")]);
		echo json_encode("");
		
	}

	public function hapus()
	{
		// $data = [
		// 	"status" => 1
		// ];
		echo json_encode($this->db_model->delete('gcu_syamrabu', array('id' => $this->input->post('id', TRUE))));
		// echo json_encode($this->db_model->update('tbl_user', $data, array('id_user' => $this->input->post('id', TRUE))));
	}



}
