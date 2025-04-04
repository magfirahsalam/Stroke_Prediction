<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grafik_model_admin extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function grafikdataprediksi()
    {
        $data = array();
        foreach ($this->db->query("SELECT dibuat_pada from prediksi GROUP BY dibuat_pada")->result() as $date) {
            $data["label"][] = $date->dibuat_pada;
            $data["data"][] = $this->db->query("SELECT id_prediksi FROM prediksi WHERE dibuat_pada='" . $date->dibuat_pada . "'")->num_rows();
        }
        return $data;
    }
}
