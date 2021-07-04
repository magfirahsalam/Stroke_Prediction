<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Data_training_model extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('data_stroke')->result_array();
    }
}
