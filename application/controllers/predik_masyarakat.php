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
        $keterangan_pengunjung = $this->input->post('keterangan');

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
        $this->load->view('prediksi_masyarakat/hasil_predik_masyarakat', $data);
    }
    function result_knn($k, $data)
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
