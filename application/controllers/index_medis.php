<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index_medis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->database();
        $this->load->model('grafik_model_tm');
    }
    public function index()
    {
        $data['grafikdataprediksitm'] = $this->grafik_model_tm->grafikdataprediksitm();
        $data['title'] = 'Grafik Hasil Prediksi Tim Medis';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $this->load->view('tim_medis/header', $data);
        $this->load->view('tim_medis/sidebar', $data);
        $this->load->view('tim_medis/topbar', $data);
        $this->load->view('tim_medis/index_medis', $data);
        $this->load->view('tim_medis/footer');
    }
    // public function grafikdataprediksi()
    // {

    //     $data['title'] = 'Landing Page';
    //     $data['user'] = $this->db->get_where('user', ['email'
    //     => $this->session->userdata('email')])->row_array();

    //     $this->load->view('tim_medis/header', $data);
    //     $this->load->view('tim_medis/sidebar', $data);
    //     $this->load->view('tim_medis/topbar', $data);
    //     $this->load->view('tim_medis/index_medis', $data);
    //     $this->load->view('tim_medis/footer');
    // }
    public function myprofile()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $this->load->view('tim_medis/header', $data);
        $this->load->view('tim_medis/sidebar', $data);
        $this->load->view('tim_medis/topbar', $data);
        $this->load->view('tim_medis/profile_medis', $data);
        $this->load->view('tim_medis/footer');
    }
    public function editprofile()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('tim_medis/header', $data);
            $this->load->view('tim_medis/sidebar', $data);
            $this->load->view('tim_medis/topbar', $data);
            $this->load->view('tim_medis/edit_profile', $data);
            $this->load->view('tim_medis/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            //cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {

                // print_r($upload_image);
                // exit;
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './vendor/sbadmin2/img/profile';

                $this->upload->initialize($config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    unlink(FCPATH . 'vendor/sbadmin2/img/profile' . $old_image);

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                    exit;
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('index_medis/myprofile');
        }
    }
}
