<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Testing_Admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Testing';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['data_stroke'] = $this->data_stroke_model->SemuaData();
        $this->load->view('data/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/index_data', $data);
        $this->load->view('data/footer');
    }
    public function tambah_data_stroke()
    {
        $data['title'] = 'Tambah Data';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['data_stroke'] = $this->data_stroke_model->SemuaData();
        $this->load->view('data/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/tambah_data_stroke', $data);
        $this->load->view('data/footer');
    }
    public function proses_tambah_data_stroke()
    {
        $this->data_stroke_model->proses_tambah_data_stroke();
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data Stroke Berhasil Ditambahkan! </div>'
        );
        redirect('data/index');
    }
    public function hapus_data_stroke($id_data_stroke)
    {
        $this->data_stroke_model->hapus_data_stroke($id_data_stroke);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-primary" role="alert">
            Data Stroke Berhasil Dihapus! </div>'
        );
        redirect('data/index');
    }
    public function edit_data_stroke($id_data_stroke)
    {
        $data['title'] = 'Edit Data Stroke';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['data_stroke'] = $this->data_stroke_model->ambil_id_data_stroke($id_data_stroke);
        $this->load->view('data/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/edit_data_stroke', $data);
        $this->load->view('data/footer');
    }
    public function proses_edit_data_stroke()
    {
        $this->data_stroke_model->proses_edit_data_stroke();
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-primary" role="alert">
            Data Stroke Berhasil Diedit! </div>'
        );
        redirect('data/index');
    }
}
