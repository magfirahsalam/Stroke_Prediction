<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Artikel_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
    }

    public function SemuaData()
    {
        return $this->db->get('artikel')->result_array();
    }
    public function proses_tambah_artikel()
    {
        $data = [
            "Judul" => $this->input->post('Judul', true),
            "Isi" => $this->input->post('Isi', true),
            "penulis" => $this->input->post('penulis', true),
            "dibuat_pada" => time()
        ];
        $this->db->insert('artikel', $data);
    }
    public function hapus_artikel($id_artikel)
    {
        $this->db->where('id_artikel', $id_artikel);
        $this->db->delete('artikel');
    }
    public function ambil_id_artikel($id_artikel)
    {
        return $this->db->get_where('artikel', ['id_artikel' => $id_artikel])->row_array();
    }
    public function proses_edit_artikel()
    {
        $data = [
            "Judul" => $this->input->post('Judul'),
            "Isi" => $this->input->post('Isi'),
            "Penulis" => $this->input->post('Penulis'),
            "Gambar" => $this->input->post('Gambar')

        ];
        $this->db->where('id_artikel', $this->input->post('id_artikel'));
        $this->db->update('artikel', $data);
    }
    public function list_artikel()
    {
        $this->db->select('artikel.*, Judul.Isi.Penulis.Gambar');
        $this->db->from('artikel');
        $this->db->order_by('id_artikel', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function auth_artikel()
    {
        $this->db->select('artikel.*, Judul.Isi.Penulis.Gambar');
        $this->db->from('artikel');
        $this->db->order_by('id_artikel', 'DESC');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result();
    }
}
