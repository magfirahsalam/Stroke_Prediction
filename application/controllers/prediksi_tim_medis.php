<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prediksi_tim_medis extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Data Prediksi Tim Medis';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['prediksi'] = $this->prediksi_tim_medis_model->index();
        $this->load->view('data/header', $data);
        $this->load->view('tim_medis/sidebar', $data);
        $this->load->view('tim_medis/topbar', $data);
        $this->load->view('tim_medis/prediksi_tim_medis', $data);
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
    // public function hasilprediksi()
    // {
    //     $this->load->view('tim_medis/prediksi_tim_medis');
    // }
    public function prediksi_untuk_tim_medis()
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
        $this->load->model('prediksi_tim_medis_model');
        $prediksi_tim_medis = array(
            'jenis_kelamin_pengunjung' => $jenis_kelamin_pengunjung,
            'usia_pengunjung' => $usia_pengunjung,
            'hipertensi_pengunjung' => $hipertensi_pengunjung,
            'liver_pengunjung' => $liver_pengunjung,
            'status_pernikahan_pengunjung' => $status_pernikahan_pengunjung,
            'tipe_pekerjaan_pengunjung' => $tipe_pekerjaan_pengunjung,
            'tempat_tinggal_pengunjung' => $tempat_tinggal_pengunjung,
            'rata_kadar_glukosa_pengunjung' => $rata_kadar_glukosa_pengunjung,
            'index_bb_pengunjung' => $index_bb_pengunjung,
            'status_perokok_pengunjung' => $status_perokok_pengunjung,
            'keterangan_pengunjung' => $result->keterangan
        );
        $this->prediksi_tim_medis_model->tambah_prediksi_pengunjung($prediksi_tim_medis);
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
