<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Data_stroke_tim_medis_model extends CI_Model
{
    public function indexdata()
    {
        return $this->db->get('data_stroke_tim_medis')->result_array();
    }
    public function SemuaData()
    {
        return $this->db->get('data_stroke_tim_medis')->result();
    }
    public function proses_tambah_data_stroke_tm()
    {
        $data = [
            "id_pasien" => $this->input->post('id_pasien'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "usia" => $this->input->post('usia'),
            "keadaan_umum" => $this->input->post('keadaan_umum'),
            "kesadaran" => $this->input->post('kesadaran'),
            "tensi_darah" => $this->input->post('tensi_darah'),
            "nadi_permenit" => $this->input->post('nadi_permenit'),
            "suara_napas" => $this->input->post('suara_napas'),
            "suhu_badan" => $this->input->post('suhu_badan'),
            "respirasi_permenit" => $this->input->post('respirasi_permenit'),
            "spo2" => $this->input->post('spo2'),
            "perubahan_sensorik" => $this->input->post('perubahan_sensorik'),
            "perubahan_motorik" => $this->input->post('perubahan_motorik'),
            "irama_napas" => $this->input->post('irama_napas'),
            "bunyi_napas" => $this->input->post('bunyi_napas'),
            "henti_jantung" => $this->input->post('henti_jantung'),
            "nadi_teraba" => $this->input->post('nadi_teraba'),
            "kulit" => $this->input->post('kulit'),
            "akral" => $this->input->post('akral'),
            "pendarahan" => $this->input->post('pendarahan'),
            "turgor" => $this->input->post('turgor'),
            "sianosis" => $this->input->post('sianosis'),
            "riwayat_alergi" => $this->input->post('riwayat_alergi'),
            "medikasi" => $this->input->post('medikasi'),
            "pernah_stroke" => $this->input->post('pernah_stroke'),
            "refleks_cahaya" => $this->input->post('refleks_cahaya'),
            "skala_nyeri" => $this->input->post('skala_nyeri'),
            "aktivitas_mobilisasi" => $this->input->post('aktivitas_mobilisasi'),
            "risiko_jatuh" => $this->input->post('risiko_jatuh'),
            "crt" => $this->input->post('crt'),
            "gcs" => $this->input->post('gcs'),
            "diagnosa" => $this->input->post('diagnosa'),
        ];
        $this->db->insert('data_stroke_tim_medis', $data);
    }
}
