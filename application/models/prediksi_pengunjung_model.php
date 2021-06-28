<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Prediksi_pengunjung_model extends CI_Model
{

    public function get_entries() {
        $query = $this->db->get('prediksi_pengunjung_umum');
if(count($query->result() ) > 0 ) {
    return $query->result();
}
    }
    public function hitungjumlahprediksipengunjung() {
        $query = $this->db->get('prediksi_pengunjung_umum');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else {
            return 0;
        }
    }
    public function tambah_prediksi_pengunjung($prediksi_pengunjung_umum, $table)
    {
      return $this->db->insert('prediksi_pengunjung_umum', $prediksi_pengunjung_umum);  
    }

    }