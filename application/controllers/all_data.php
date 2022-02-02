<?php
defined('BASEPATH') or exit('No direct script access allowed');

class all_data extends CI_Controller
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
		// $data["total_today"] = $this->db_model->get("syarefa")->num_rows();
		$this->template->load('template', 'all_data_v');
	}	
	
	public function tampil()
	{
		$data_antrian = $this->db_model->all_data('gcu_syamrabu')->result();
		echo json_encode($data_antrian);
		// $data_antrian = $this->db_model->ambil_data('syarefa', ["status" => $nowDate])->result();
		// echo json_encode($data_antrian);
		// echo json_encode($this->db_model->get_where("syarefa", ["status" => $nowDate])->result());
	}

	public function dataById($id)
	{

		$query = "select * from gcu_syamrabu where id=".($id);	
		$data ['pasien'] = $this->db_model->get_query($query)->row_array();
		$this->load->view('form', $data);
	}
	function edit_id()
	{
		echo json_encode($this->db_model->get_where($this->input->post("target"), ["id" => $this->input->post('id', TRUE)])->row_array());
	}

	function open_form(){
		$this->load->view('form');
	}


	public function edit()
	{
		$data = [
			"pendengaran_pasien_gcu" => $this->input->post("pendengaran_pasien_gcu", TRUE),
			"tb_pasien_gcu" => $this->input->post("tb_pasien_gcu", TRUE),
			"bb_pasien_gcu" => $this->input->post("bb_pasien_gcu", TRUE),
			"keterangan_pasien_gcu" => $this->input->post("keterangan_pasien_gcu", TRUE),
			"nama_dokter_gcu" => $this->input->post("nama_dokter_gcu", TRUE),
			"nip_dokter_gcu" => $this->input->post("nip_dokter_gcu", TRUE),
			"warna_pasien_gcu" => $this->input->post("warna_pasien_gcu", TRUE)
		];
		$this->db_model->update('gcu_syamrabu', $data, ["id" => $this->input->post("id")]);
		echo json_encode("");
		
	}

	public function hapus()
	{
		echo json_encode($this->db_model->delete('gcu_syamrabu', array('id' => $this->input->post('id', TRUE))));
		
	}
}
