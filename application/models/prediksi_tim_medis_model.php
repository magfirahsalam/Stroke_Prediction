<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Prediksi_tim_medis_model extends CI_Model
{
    public function index()
    {
        return $this->db->get('prediksi')->result_array();
    }
}
