<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Predik_Masyarakat extends CI_Controller
{
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
        $this->load->model('prediksi_pengunjung_model');
        $predik_pengunjung_m = $this->prediksi_pengunjung_model->get_entries();

        date_default_timezone_set('Asia/Jakarta');
        $jenis_kelamin_pengunjung = $this->input->post('jenis_kelamin_pengunjung');
        $usia_pengunjung = $this->input->post('usia_pengunjung');
        $hipertensi_pengunjung = $this->input->post('hipertensi_pengunjung');
        $liver_pengunjung = $this->input->post('liver_pengunjung');
        $status_pernikahan_pengunjung = $this->input->post('status_pernikahan_pengunjung');
        $tipe_pekerjaan_pengunjung = $this->input->post('tipe_pekerjaan_pengunjung');
        $tempat_tinggal_pengunjung = $this->input->post('tempat_tinggal_pengunjung');
        $rata_kadar_glukosa_pengunjung = $this->input->post('rata_kadar_glukosa_pengunjung');
        $index_bb_pengunjung = $this->input->post('index_bb_pengunjung');
        $status_perokok_pengunjung = $this->input->post('status_perokok_pengunjung');
        $keterangan_pengunjung = $this->input->post('keterangan_pengunjung');

        $tempResult = [];
        foreach ($predik_pengunjung_m as $value) {
            $result = sqrt(pow(($value->usia_pengunjung - $usia_pengunjung), 2) + pow(($value->hipertensi_pengunjung - $hipertensi_pengunjung), 2)
                + pow(($value->liver_pengunjung - $liver_pengunjung), 2)
                + pow(($value->status_pernikahan_pengunjung - $status_pernikahan_pengunjung), 2)
                + pow(($value->tipe_pekerjaan_pengunjung - $tipe_pekerjaan_pengunjung), 2)
                + pow(($value->tempat_tinggal_pengunjung - $tempat_tinggal_pengunjung), 2)
                + pow(($value->rata_kadar_glukosa_pengunjung - $rata_kadar_glukosa_pengunjung), 2)
                + pow(($value->index_bb_pengunjung - $index_bb_pengunjung), 2)
                + pow(($value->status_perokok_pengunjung - $status_perokok_pengunjung), 2));

            array_push($tempResult, (object)["result" => $result, "keterangan" => $value->keterangan_pengunjung]);
        }
        usort($tempResult, function ($a, $b) {
            return strnatcmp($a->result, $b->result);
        });

        // get 3 data teratas

        $iteration = 1;
        $maxIteration = 5;
        $getAscData = [];
        foreach ($tempResult as $item) {
            if ($iteration <= $maxIteration) {
                array_push($getAscData, $item);
            } else {
                break;
            }
            $iteration++;
        }
        redirect('prediksi_masyarakat/hasil_predik_masyarakat');
    }
}
