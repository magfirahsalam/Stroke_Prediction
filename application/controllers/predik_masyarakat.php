<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Predik_Masyarakat extends CI_Controller
{
    public function tampildata()
    {
        $data['title'] = 'Data Prediksi Masyarakat';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['prediksi'] = $this->prediksi_pengunjung_model->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/hasil_prediksi_masyarakat', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_data_prediksim()
    {
        $data['title'] = 'Tambah Data Prediksi Masyarakat';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['prediksi'] = $this->prediksi_pengunjung_model->tambah_prediksi_pengunjung();
        $this->load->view('data/header', $data);
        $this->load->view('tim_medis/sidebar', $data);
        $this->load->view('tim_medis/topbar', $data);
        $this->load->view('tim_medis/tambah_data_prediksi', $data);
        $this->load->view('data/footer');
    }
    public function proses_tambah_data_prediksim()
    {
        $this->prediksi_pengunjung_model->proses_tambah_data_prediksim();
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data Prediksi Masyarakat Berhasil Ditambahkan! </div>'
        );
        redirect('predik_masyarakat/tampildata');
    }
    public function hapus_data_prediksim($id_prediksi)
    {
        $this->prediksi_pengunjung_model->hapus_data_prediksim($id_prediksi);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-primary" role="alert">
            Data Prediksi Masyarakat Berhasil Dihapus! </div>'
        );
        redirect('predik_masyarakat/tampildata');
    }
    public function edit_data_prediksim($id_prediksi)
    {
        $data['title'] = 'Edit Data Stroke';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['prediksi'] = $this->prediksi_pengunjung_model->ambil_id_data_prediksim($id_prediksi);
        $this->load->view('data/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('tim_medis/edit_data_stroke', $data);
        $this->load->view('data/footer');
    }
    public function proses_edit_data_prediksim()
    {
        $this->prediksi_pengunjung_model->proses_edit_data_prediksim();
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-primary" role="alert">
            Data Prediksi Masyarakat Berhasil Diedit! </div>'
        );
        redirect('predik_masyarakat/tampildata');
    }
    public function index()
    {
        $this->load->view('prediksi_masyarakat/predik_masyarakat');
    }
    public function hasilprediksi()
    {
        $this->load->view('prediksi_masyarakat/hasil_predik_masyarakat');
    }
    public function prediksi_pengunjung()
    {
        $this->load->model('data_stroke_model');
        $data_stroke = $this->data_stroke_model->SemuaData();

        date_default_timezone_set('Asia/Jakarta');

        $jenis_kelamin_pengunjung = $this->input->post('jenis_kelamin');
        $usia_pengunjung = $this->input->post('usia');
        $hipertensi_pengunjung = $this->input->post('hipertensi');
        $liver_pengunjung = $this->input->post('liver');
        $status_pernikahan_pengunjung = $this->input->post('status_pernikahan');
        $tipe_pekerjaan_pengunjung = $this->input->post('tipe_pekerjaan');
        $tempat_tinggal_pengunjung = $this->input->post('tempat_tinggal');
        $rata_kadar_glukosa_pengunjung = $this->input->post('rata_kadar_glukosa');
        $tinggi_badan = $this->input->post('tinggi_badan');
        $berat_badan = $this->input->post('berat_badan');
        $index_bb_pengunjung = $this->input->post('index_berat_badan');
        $status_perokok_pengunjung = $this->input->post('status_perokok');


        $tempResult = [];
        foreach ($data_stroke as $value) {
            $result = sqrt(pow(($value->jenis_kelamin - $jenis_kelamin_pengunjung), 2)
                + pow(($value->usia - $usia_pengunjung), 2)
                + pow(($value->hipertensi - $hipertensi_pengunjung), 2)
                + pow(($value->liver - $liver_pengunjung), 2)
                + pow(($value->status_pernikahan - $status_pernikahan_pengunjung), 2)
                + pow(($value->tipe_pekerjaan - $tipe_pekerjaan_pengunjung), 2)
                + pow(($value->tempat_tinggal - $tempat_tinggal_pengunjung), 2)
                + pow(($value->rata_kadar_glukosa - $rata_kadar_glukosa_pengunjung), 2)
                + pow(($value->index_berat_badan - $index_bb_pengunjung), 2)
                + pow(($value->status_perokok - $status_perokok_pengunjung), 2));
            array_push($tempResult, (object)["result" => $result, "keterangan" => $value->keterangan]);
        }
        usort($tempResult, function ($a, $b) {
            return strnatcmp($a->result, $b->result);
        });
        $result = $this->result_knn(3, $tempResult);

        $data["result"] = $result;
        $this->load->model('prediksi_pengunjung_model');
        $prediksi = array(
            'jenis_kelamin_pengunjung' => $jenis_kelamin_pengunjung,
            'usia_pengunjung' => $usia_pengunjung,
            'hipertensi_pengunjung' => $hipertensi_pengunjung,
            'liver_pengunjung' => $liver_pengunjung,
            'status_pernikahan_pengunjung' => $status_pernikahan_pengunjung,
            'tipe_pekerjaan_pengunjung' => $tipe_pekerjaan_pengunjung,
            'tempat_tinggal_pengunjung' => $tempat_tinggal_pengunjung,
            'rata_kadar_glukosa_pengunjung' => $rata_kadar_glukosa_pengunjung,
            "tinggi_badan" => $tinggi_badan,
            "berat_badan" => $berat_badan,
            'index_bb_pengunjung' => $index_bb_pengunjung,
            'status_perokok_pengunjung' => $status_perokok_pengunjung,
            'keterangan_pengunjung' => $result->keterangan,
            'dibuat_pada' => date('Y-m-d')
        );
        $this->prediksi_pengunjung_model->tambah_prediksi_pengunjung($prediksi);
        $this->load->view('prediksi_masyarakat/hasil_predik_masyarakat', $data);
    }
    public function result_knn($k, $data)
    {
        $visited = array();
        for ($i = 0; $i < $k; $i++) {
            $visit = true;
            if (isset($visited[$data[$i]->keterangan]))
                if ($visited[$data[$i]->keterangan])
                    $visit = false;

            if ($visit) {
                $visited[$data[$i]->keterangan] = true;
                $count[$i] = 1;
                for ($j = 0; $j < $k; $j++) {
                    if ($i != $j) {
                        if ($data[$i]->keterangan == $data[$j]->keterangan) {
                            $count[$i] += 1;
                        }
                    }
                }
            }
        }
        return $data[array_search(max($count), $count)];
    }
}
