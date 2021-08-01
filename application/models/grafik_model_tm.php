<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grafik_model_tm extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function grafikdataprediksitm()
    {
        $data = array();
        foreach ($this->db->query("SELECT dibuat_pada from prediksi_tim_medis GROUP BY dibuat_pada")->result() as $date) {
            $data["label"][] = $date->dibuat_pada;
            $data["data"][] = $this->db->query("SELECT id_prediksi_tim_medis FROM prediksi_tim_medis WHERE dibuat_pada='" . $date->dibuat_pada . "'")->num_rows();
        }
        return $data;
    }
}
