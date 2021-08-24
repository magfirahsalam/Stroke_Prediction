<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_training_tim_medis extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Training';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['data_stroke_tim_medis'] = $this->data_stroke_tim_medis_model->indexdata();
        $this->load->view('tim_medis/header', $data);
        $this->load->view('tim_medis/sidebar', $data);
        $this->load->view('tim_medis/topbar', $data);
        $this->load->view('tim_medis/data_training_tim_medis', $data);
        $this->load->view('tim_medis/footer');
    }
    public function tambah_data_stroke_tim_medis()
    {
        $data['title'] = 'Tambah Data';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['data_stroke_tim_medis'] = $this->data_stroke_tim_medis_model->SemuaData();
        $this->load->view('tim_medis/header', $data);
        $this->load->view('tim_medis/sidebar', $data);
        $this->load->view('tim_medis/topbar', $data);
        $this->load->view('tim_medis/data_training_tim_medis', $data);
        $this->load->view('tim_medis/footer');
    }
    public function proses_tambah_data_stroke_tim_medis()
    {
        $this->data_stroke_tim_medis_model->proses_tambah_data_stroke_tm();
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data Stroke Berhasil Ditambahkan! </div>'
        );
        redirect('data_training_tim_medis/index');
    }
    public function hapus_data_stroke_tim_medis($id_data_stroke_tim_medis)
    {
        $this->data_stroke_tim_medis_model->hapus_data_stroke_tim_medis($id_data_stroke_tim_medis);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-primary" role="alert">
            Data Stroke Berhasil Dihapus! </div>'
        );
        redirect('data_training_tim_medis/index');
    }
    public function edit_data_stroke_tim_medis($id_data_stroke_tim_medis)
    {
        $data['title'] = 'Edit Data Stroke';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['data_stroke_tim_medis'] = $this->data_stroke_tim_medis_model->ambil_id_data_stroke($id_data_stroke_tim_medis);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/edit_data_stroke', $data);
        $this->load->view('templates/footer');
    }
    public function proses_edit_data_stroke_tim_medis()
    {
        $this->data_stroke_tim_medis_model->proses_edit_data_stroke_tim_medis();
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-primary" role="alert">
            Data Stroke Berhasil Diedit! </div>'
        );
        redirect('data_training_tim_medis/index');
    }
}
