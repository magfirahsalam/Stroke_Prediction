<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Data_testing_stroke_model extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('data_testing_stroke')->result_array();
    }
    public function proses_tambah_data_testing_stroke()
    {
        $data = [
            "id_pasien_testing" => $this->input->post('id_pasien_testing'),
            "jenis_kelamin_testing" => $this->input->post('jenis_kelamin_testing'),
            "usia_testing" => $this->input->post('usia_testing'),
            "hipertensi_testing" => $this->input->post('hipertensi_testing'),
            "liver_testing" => $this->input->post('liver_testing'),
            "status_pernikahan_testing" => $this->input->post('status_pernikahan_testing'),
            "tipe_pekerjaan_testing" => $this->input->post('tipe_pekerjaan_testing'),
            "tempat_tinggal_testing" => $this->input->post('tempat_tinggal_testing'),
            "rata_kadar_glukosa_testing" => $this->input->post('rata_kadar_glukosa_testing'),
            "index_berat_badan_testing" => $this->input->post('index_berat_badan_testing'),
            "status_perokok_testing" => $this->input->post('status_perokok_testing'),
            "keterangan_testing" => $this->input->post('keterangan_testing'),
        ];
        $this->db->insert('data_testing_stroke', $data);
    }
    public function hapus_data_testing_stroke($id_data_testing_stroke)
    {
        $this->db->where('id_data_testing_stroke', $id_data_testing_stroke);
        $this->db->delete('data_testing_stroke');
    }
    public function ambil_id_data_testing_stroke($id_data_testing_stroke)
    {
        return $this->db->get_where('data_testing_stroke', ['id_data_testing_stroke' => $id_data_testing_stroke])->row_array();
    }
    public function proses_edit_data_testing_stroke()
    {
        $data = [
            "id_pasien_testing" => $this->input->post('id_pasien_testing'),
            "jenis_kelamin_testing" => $this->input->post('jenis_kelamin_testing'),
            "usia_testing" => $this->input->post('usia_testing'),
            "hipertensi_testing" => $this->input->post('hipertensi_testing'),
            "liver_testing" => $this->input->post('liver_testing'),
            "status_pernikahan_testing" => $this->input->post('status_pernikahan_testing'),
            "tipe_pekerjaan_testing" => $this->input->post('tipe_pekerjaan_testing'),
            "tempat_tinggal_testing" => $this->input->post('tempat_tinggal_testing'),
            "rata_kadar_glukosa_testing" => $this->input->post('rata_kadar_glukosa_testing'),
            "index_berat_badan_testing" => $this->input->post('index_berat_badan_testing'),
            "status_perokok_testing" => $this->input->post('status_perokok_testing'),
            "keterangan_testing" => $this->input->post('keterangan_testing'),
        ];
        $this->db->where('id_data_testing_stroke', $this->input->post('id_data_testing_stroke'));
        $this->db->update('data_testing_stroke', $data);
    }
}
