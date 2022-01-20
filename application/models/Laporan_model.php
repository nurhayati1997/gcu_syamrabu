<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_model extends CI_Model {

    // public function get_all()
    // {
    //     $query = $this->db->get('atletprofile');
    //     return $query->result_array();
    // }

    public function get_all()
    {
        $query = $this->db->get('atletprofile');
        return $query->result_array();
    }
}
?>