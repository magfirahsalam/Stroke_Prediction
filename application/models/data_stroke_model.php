<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Data_stroke_model extends CI_Model
{
    public function indexdata()
    {
        return $this->db->get('data_stroke')->result_array();
    }
    public function SemuaData()
    {
        return $this->db->get('data_stroke')->result();
    }
    public function proses_tambah_data_stroke()
    {
        $data = [
            "id_pasien" => $this->input->post('id_pasien'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "usia" => $this->input->post('usia'),
            "hipertensi" => $this->input->post('hipertensi'),
            "liver" => $this->input->post('liver'),
            "status_pernikahan" => $this->input->post('status_pernikahan'),
            "tipe_pekerjaan" => $this->input->post('tipe_pekerjaan'),
            "tempat_tinggal" => $this->input->post('tempat_tinggal'),
            "rata_kadar_glukosa" => $this->input->post('rata_kadar_glukosa'),
            "index_berat_badan" => $this->input->post('index_berat_badan'),
            "status_perokok" => $this->input->post('status_perokok'),
            "keterangan" => $this->input->post('keterangan'),
        ];
        $this->db->insert('data_stroke', $data);
    }
    public function hapus_data_stroke($id_data_stroke)
    {
        $this->db->where('id_data_stroke', $id_data_stroke);
        $this->db->delete('data_stroke');
    }
    public function ambil_id_data_stroke($id_data_stroke)
    {
        return $this->db->get_where('data_stroke', ['id_data_stroke' => $id_data_stroke])->row_array();
    }
    public function proses_edit_data_stroke()
    {
        $data = [
            "id_pasien" => $this->input->post('id_pasien'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "usia" => $this->input->post('usia'),
            "hipertensi" => $this->input->post('hipertensi'),
            "liver" => $this->input->post('liver'),
            "status_pernikahan" => $this->input->post('status_pernikahan'),
            "tipe_pekerjaan" => $this->input->post('tipe_pekerjaan'),
            "tempat_tinggal" => $this->input->post('tempat_tinggal'),
            "rata_kadar_glukosa" => $this->input->post('rata_kadar_glukosa'),
            "index_berat_badan" => $this->input->post('index_berat_badan'),
            "status_perokok" => $this->input->post('status_perokok'),
            "keterangan" => $this->input->post('keterangan'),
        ];
        $this->db->where('id_data_stroke', $this->input->post('id_data_stroke'));
        $this->db->update('data_stroke', $data);
    }
}
