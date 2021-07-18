<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_stroke_tim_medis extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Stroke Tim Medis';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['data_stroke_tim_medis'] = $this->data_stroke_tim_medis_model->index();
        $this->load->view('data/header', $data);
        $this->load->view('tim_medis/sidebar', $data);
        $this->load->view('tim_medis/topbar', $data);
        $this->load->view('tim_medis/data_stroke_tim_medis', $data);
        $this->load->view('data/footer');
    }
}
