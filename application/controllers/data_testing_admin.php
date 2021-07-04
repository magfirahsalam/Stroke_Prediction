<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_testing_admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Testing';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['data_testing_stroke'] = $this->data_testing_stroke_model->SemuaData();
        $this->load->view('data/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/data_testing_admin', $data);
        $this->load->view('data/footer');
    }
    public function tambah_data_testing_stroke()
    {
        $data['title'] = 'Tambah Data Testing';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['data_testing_stroke'] = $this->data_testing_stroke_model->SemuaData();
        $this->load->view('data/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data_testing_admin/tambah_data_testing_stroke', $data);
        $this->load->view('data/footer');
    }
    public function proses_tambah_data_testing_stroke()
    {
        $this->data_testing_stroke_model->proses_tambah_data_testing_stroke();
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data Stroke Berhasil Ditambahkan! </div>'
        );
        redirect('data_testing_admin/index');
    }
    public function hapus_data_testing_stroke($id_data_testing_stroke)
    {
        $this->data_testing_stroke_model->hapus_data_testing_stroke($id_data_testing_stroke);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-primary" role="alert">
            Data Stroke Berhasil Dihapus! </div>'
        );
        redirect('data_testing_admin/index');
    }
    public function edit_data_testing_stroke($id_data_testing_stroke)
    {
        $data['title'] = 'Edit Data Testing Stroke';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['data_testing_stroke'] = $this->data_stroke_model->ambil_id_data_testing_stroke($id_data_testing_stroke);
        $this->load->view('data/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data_testing_admin/edit_data_testing_stroke', $data);
        $this->load->view('data/footer');
    }
    public function proses_edit_data_testing_stroke()
    {
        $this->data_testing_stroke_model->proses_edit_data_testing_stroke();
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-primary" role="alert">
            Data Stroke Berhasil Diedit! </div>'
        );
        redirect('data_testing_admin/index');
    }
}
