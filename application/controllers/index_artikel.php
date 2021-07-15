<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index_artikel extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Artikel';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();
        $data['artikel'] = $this->artikel_model->SemuaData();

        $this->load->view('artikel/header', $data);
        $this->load->view('artikel/sidebar', $data);
        $this->load->view('artikel/topbar', $data);
        $this->load->view('artikel/index_artikel', $data);
        $this->load->view('artikel/footer');
    }
    public function tambah_artikel()
    {
        $data['title'] = 'Tambah Artikel';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['artikel'] = $this->artikel_model->SemuaData();
        $this->load->view('artikel/header', $data);
        $this->load->view('artikel/sidebar', $data);
        $this->load->view('artikel/topbar', $data);
        $this->load->view('artikel/tambah_artikel', $data);
        $this->load->view('artikel/footer');
    }
    public function proses_tambah_artikel()
    {

        $config['upload_path']          = './vendor/sbadmin2/img/artikel';
        $config['allowed_types']        = 'gif|jpg|png|PNG';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('Gambar')) {
            echo "Gagal Upload Gambar!";
        } else {
            $Gambar = $this->upload->data();
            $Gambar = $Gambar['file_name'];
            $Judul = $this->input->post('Judul', TRUE);
            $Isi = $this->input->post('Isi', TRUE);
            $Penulis = $this->input->post('Penulis', TRUE);

            $data = array(
                'Judul' => $Judul,
                'Isi' => $Isi,
                'Penulis' => $Penulis,
                'Gambar' => $Gambar,
                'dibuat_pada' => time()
            );
            $this->db->insert('artikel', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
                Artikel Baru Berhasil Ditambahkan! </div>'
            );
            redirect('Index_artikel/index');
        }
    }
    public function hapus_artikel($id_artikel)
    {
        $this->artikel_model->hapus_artikel($id_artikel);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-primary" role="alert">
            Artikel Berhasil Dihapus! </div>'
        );
        redirect('Index_artikel/index');
    }
    public function edit_artikel($id_artikel)
    {
        $data['title'] = 'Edit Artikel';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['artikel'] = $this->artikel_model->ambil_id_artikel($id_artikel);
        $this->load->view('artikel/header', $data);
        $this->load->view('artikel/sidebar', $data);
        $this->load->view('artikel/topbar', $data);
        $this->load->view('artikel/edit_artikel', $data);
        $this->load->view('artikel/footer');
    }
    public function detail_artikel($id_artikel)
    {
        $data['title'] = 'Detail Artikel';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['artikel'] = $this->artikel_model->ambil_id_artikel($id_artikel);
        $this->load->view('artikel/header', $data);
        $this->load->view('artikel/sidebar', $data);
        $this->load->view('artikel/topbar', $data);
        $this->load->view('artikel/edit_artikel', $data);
        $this->load->view('artikel/footer');
    }
    public function proses_edit_artikel()
    {
        $id_artikel = $this->input->post('id_artikel');

        $config['upload_path']          = './vendor/sbadmin2/img/artikel';
        $config['allowed_types']        = 'gif|jpg|png|PNG';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('Gambar')) {
            $Judul = $this->input->post('Judul', TRUE);
            $Isi = $this->input->post('Isi', TRUE);
            $Penulis = $this->input->post('Penulis', TRUE);
            $Gambar = $this->input->post('Gambar', TRUE);
            $dibuat_pada = $this->input->post('dibuat_pada', TRUE);
            $diedit_pada = $this->input->post('diedit_pada', TRUE);


            $data = array(
                'Judul' => $Judul,
                'Isi' => $Isi,
                'Penulis' => $Penulis,
                'Gambar' => $Gambar,
                'dibuat_pada' => $dibuat_pada,
                'diedit_pada' => $diedit_pada
            );
            $this->db->where('id_artikel', $id_artikel);
            $this->db->update('artikel', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
                Artikel Berhasil Diupdate! </div>'
            );
            redirect('Index_artikel/index');
        } else {
            $Gambar = $this->upload->data();
            $Gambar = $Gambar['file_name'];
            $Judul = $this->input->post('Judul', TRUE);
            $Isi = $this->input->post('Isi', TRUE);
            $Penulis = $this->input->post('Penulis', TRUE);
            $dibuat_pada = $this->input->post('dibuat_pada', TRUE);
            $diedit_pada = $this->input->post('diedit_pada', TRUE);

            $data = array(
                'Judul' => $Judul,
                'Isi' => $Isi,
                'Penulis' => $Penulis,
                'Gambar' => $Gambar,
                'dibuat_pada' => $dibuat_pada,
                'diedit_pada' => $diedit_pada
            );

            $this->db->where('id_artikel', $id_artikel);
            $this->db->update('artikel', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
                Artikel Berhasil Diupdate! </div>'
            );
            redirect('Index_artikel/index');
        }
    }
}
