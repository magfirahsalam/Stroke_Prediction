<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Data_training_tim_medis_model extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('data_stroke_tim_medis')->result_array();
    }
}
