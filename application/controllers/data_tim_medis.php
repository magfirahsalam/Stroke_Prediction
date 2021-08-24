<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_tim_medis extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Tim Medis';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['data_tim_medis'] = $this->data_tim_medis_model->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/data_tim_medis', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_data_tim_medis()
    {
        $data['title'] = 'Tambah Data Tim Medis';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['data_tim_medis'] = $this->data_tim_medis_model->SemuaData();
        $this->load->view('data/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data_tim_medis/tambah_data_tim_medis', $data);
        $this->load->view('data/footer');
    }
    public function proses_tambah_data_tim_medis()
    {
        $this->data_tim_medis_model->proses_tambah_data_tim_medis();
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data Tim Medis Berhasil Ditambahkan! </div>'
        );
        redirect('data_tim_medis/index');
    }
    public function hapus_data_tim_medis($id_tim_medis)
    {
        $this->data_tim_medis_model->hapus_data_tim_medis($id_tim_medis);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-primary" role="alert">
            Data Tim Medis Berhasil Dihapus! </div>'
        );
        redirect('data_tim_medis/index');
    }
    public function edit_data_tim_medis($id_tim_medis)
    {
        $data['title'] = 'Edit Data Tim Medis';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['data_tim_medis'] = $this->data_tim_medis_model->ambil_id_tim_medis($id_tim_medis);
        $this->load->view('data/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data_tim_medis/edit_data_tim_medis', $data);
        $this->load->view('data/footer');
    }
    public function proses_edit_data_tim_medis()
    {
        $this->data_tim_medis_model->proses_edit_data_tim_medis();
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-primary" role="alert">
            Data Tim Medis Berhasil Diedit! </div>'
        );
        redirect('data_tim_medis/index');
    }
}
