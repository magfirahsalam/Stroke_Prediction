<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prediksi_tim_medis extends CI_Controller
{
    public function tampildatatm()
    {
        $data['title'] = 'Data Prediksi Tim Medis';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['prediksi_tim_medis'] = $this->prediksi_tim_medis_model->indexdata();
        $this->load->view('data/header', $data);
        $this->load->view('tim_medis/sidebar', $data);
        $this->load->view('tim_medis/topbar', $data);
        $this->load->view('tim_medis/prediksi_tim_medis', $data);
        $this->load->view('data/footer');
    }
    public function prediksitm()
    {
        $data['title'] = 'Prediksi';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        // // $data['prediksi_tim_medis'] = $this->prediksi_pengunjung_model->tambah_prediksi_tm();
        $this->load->view('data/header', $data);
        $this->load->view('tim_medis/sidebar', $data);
        $this->load->view('tim_medis/topbar', $data);
        $this->load->view('tim_medis/mulai_prediksi', $data);
        $this->load->view('data/footer');
    }
    public function tambah_data_prediksitm()
    {
        $data['title'] = 'Tambah Data Tim Medis';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['data_tim_medis'] = $this->data_tim_medis_model->SemuaData();
        $this->load->view('data/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data_tim_medis/tampildatatm', $data);
        $this->load->view('data/footer');
    }
    public function proses_tambah_data_prediksitm()
    {
        $this->prediksi_tim_medis_model->proses_tambah_data_prediksitm();
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data Prediksi Masyarakat Berhasil Ditambahkan! </div>'
        );
        redirect('prediksi_tim_medis/tampildatatm');
    }
    public function hapus_data_prediksitm($id_prediksi_tim_medis)
    {
        $this->prediksi_tim_medis_model->hapus_data_prediksitm($id_prediksi_tim_medis);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-primary" role="alert">
            Data Prediksi Masyarakat Berhasil Dihapus! </div>'
        );
        redirect('prediksi_tim_medis/tampildatatm');
    }
    public function edit_data_prediksim($id_prediksi_tim_medis)
    {
        $data['title'] = 'Edit Data Stroke';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $data['prediksi_tim_medis'] = $this->prediksi_pengunjung_model->ambil_id_data_prediksitm($id_prediksi_tim_medis);
        $this->load->view('data/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('tim_medis/edit_data_stroke', $data);
        $this->load->view('data/footer');
    }
    public function proses_edit_data_prediksitm()
    {
        $this->prediksi_tim_medis_model->proses_edit_data_prediksitm();
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-primary" role="alert">
            Data Prediksi Masyarakat Berhasil Diedit! </div>'
        );
        redirect('prediksi_tim_medis/tampildatatm');
    }
    public function hasilprediksi()
    {
        $this->load->view('tim_medis/result');
    }
    public function prediksi_tm()
    {
        $this->load->model('data_stroke_model');
        $data_stroke = $this->data_stroke_model->SemuaData();

        date_default_timezone_set('Asia/Jakarta');
        $id_pasien_tm = $this->input->post('id_pasien_tm');
        $jenis_kelamin_tm = $this->input->post('jenis_kelamin_tm');
        $usia_tm = $this->input->post('usia_tm');
        $hipertensi_tm = $this->input->post('hipertensi_tm');
        $liver_tm = $this->input->post('liver_tm');
        $status_pernikahan_tm = $this->input->post('status_pernikahan_tm');
        $tipe_pekerjaan_tm = $this->input->post('tipe_pekerjaan_tm');
        $tempat_tinggal_tm = $this->input->post('tempat_tinggal_tm');
        $rata_kadar_glukosa_tm = $this->input->post('rata_kadar_glukosa_tm');
        $tinggi_badan_tm = $this->input->post('tinggi_badan_tm');
        $berat_badan_tm = $this->input->post('berat_badan_tm');
        $index_bb_tm = $this->input->post('index_bb_tm');
        $status_perokok_tm = $this->input->post('status_perokok_tm');


        $tempResult = [];
        foreach ($data_stroke as $value) {
            $result = sqrt(pow(($value->jenis_kelamin - $jenis_kelamin_tm), 2)
                + pow(($value->usia - $usia_tm), 2)
                + pow(($value->hipertensi - $hipertensi_tm), 2)
                + pow(($value->liver - $liver_tm), 2)
                + pow(($value->status_pernikahan - $status_pernikahan_tm), 2)
                + pow(($value->tipe_pekerjaan - $tipe_pekerjaan_tm), 2)
                + pow(($value->tempat_tinggal - $tempat_tinggal_tm), 2)
                + pow(($value->rata_kadar_glukosa - $rata_kadar_glukosa_tm), 2)
                + pow(($value->index_berat_badan - $index_bb_tm), 2)
                + pow(($value->status_perokok - $status_perokok_tm), 2));
            array_push($tempResult, (object)["result" => $result, "keterangan" => $value->keterangan]);
        }
        usort($tempResult, function ($a, $b) {
            return strnatcmp($a->result, $b->result);
        });
        $result = $this->result_knn(3, $tempResult);

        $data["result"] = $result;
        $this->load->model('prediksi_tim_medis_model');
        $prediksi = array(
            'id_pasien_tm' => $id_pasien_tm,
            'jenis_kelamin_tm' => $jenis_kelamin_tm,
            'usia_tm' => $usia_tm,
            'hipertensi_tm' => $hipertensi_tm,
            'liver_tm' => $liver_tm,
            'status_pernikahan_tm' => $status_pernikahan_tm,
            'tipe_pekerjaan_tm' => $tipe_pekerjaan_tm,
            'tempat_tinggal_tm' => $tempat_tinggal_tm,
            'rata_kadar_glukosa_tm' => $rata_kadar_glukosa_tm,
            "tinggi_badan_tm" => $tinggi_badan_tm,
            "berat_badan_tm" => $berat_badan_tm,
            'index_bb_tm' => $index_bb_tm,
            'status_perokok_tm' => $status_perokok_tm,
            'keterangan_tm' => $result->keterangan,
            'dibuat_pada' => date('Y-m-d')
        );
        $this->prediksi_tim_medis_model->tambah_prediksi_tm($prediksi);
        $data['title'] = 'Data Prediksi Tim Medis';
        $data['temp'] = $prediksi;
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        $this->load->view('data/header', $data);
        $this->load->view('tim_medis/sidebar', $data);
        $this->load->view('tim_medis/topbar', $data);
        $this->load->view('tim_medis/result', $data);
        $this->load->view('data/footer');
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
