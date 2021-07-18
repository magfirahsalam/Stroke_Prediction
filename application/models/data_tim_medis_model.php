<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Data_tim_medis_model extends CI_Model
{
    public function indexdata()
    {
        return $this->db->get('data_tim_medis')->result_array();
    }
    public function SemuaData()
    {
        return $this->db->get('data_tim_medis')->result();
    }
    public function proses_tambah_data_tim_medis()
    {
        $data = [
            "nama_tim_medis" => $this->input->post('nama_tim_medis'),
            "email" => $this->input->post('email'),
        ];
        $this->db->insert('data_tim_medis', $data);
    }
    public function hapus_data_tim_medis($id_tim_medis)
    {
        $this->db->where('id_data_tim_medis', $id_tim_medis);
        $this->db->delete('data_tim_medis');
    }
    public function ambil_id_tim_medis($id_tim_medis)
    {
        return $this->db->get_where('data_tim_medis', ['id_tim_medis' => $id_tim_medis])->row_array();
    }
    public function proses_edit_data_tim_medis()
    {
        $data = [
            "nama_tim_medis" => $this->input->post('nama_tim_medis'),
            "email" => $this->input->post('email'),
        ];
        $this->db->where('id_tim_medis', $this->input->post('id_tim_medis'));
        $this->db->update('data_tim_medis', $data);
    }
}
