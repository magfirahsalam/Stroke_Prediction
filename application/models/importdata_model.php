<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Importdata_model extends CI_Model
{
    public function import_data($data_stroke)
    {
        $id_pasien = count($data_stroke);
        if ($id_pasien > 0) {
            $this->db->replace();
        }
    }
    public function SemuaData()
    {
        return $this->db->get('data_stroke')->result_array();
    }
}
