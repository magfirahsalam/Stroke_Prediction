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
        /// echo "<pre>";
        $this->load->model('data_stroke_model');
        $data_stroke = $this->data_stroke_model->SemuaData();

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
        $dummy = [0, 57, 0, 1, 1, 0, 1, 2, 2, 1];
        // print_r($this->input->post(NULL));
        // print_r($dummy);
        // exit;

        $tempResult = [];
        foreach ($data_stroke as $value) {
            // $result = sqrt(pow(($value->jenis_kelamin - $jenis_kelamin_pengunjung), 2)
            //     + pow(($value->usia - $usia_pengunjung), 2)
            //     + pow(($value->hipertensi - $hipertensi_pengunjung), 2)
            //     + pow(($value->liver - $liver_pengunjung), 2)
            //     + pow(($value->status_pernikahan - $status_pernikahan_pengunjung), 2)
            //     + pow(($value->tipe_pekerjaan - $tipe_pekerjaan_pengunjung), 2)
            //     + pow(($value->tempat_tinggal - $tempat_tinggal_pengunjung), 2)
            //     + pow(($value->rata_kadar_glukosa - $rata_kadar_glukosa_pengunjung), 2)
            //     + pow(($value->index_berat_badan - $index_bb_pengunjung), 2)
            //     + pow(($value->status_perokok - $status_perokok_pengunjung), 2));
            $result = sqrt(pow(($value->jenis_kelamin - $dummy[0]), 2)
                + pow(($value->usia - $dummy[1]), 2)
                + pow(($value->hipertensi - $dummy[2]), 2)
                + pow(($value->liver - $dummy[3]), 2)
                + pow(($value->status_pernikahan - $dummy[4]), 2)
                + pow(($value->tipe_pekerjaan - $dummy[5]), 2)
                + pow(($value->tempat_tinggal - $dummy[6]), 2)
                + pow(($value->rata_kadar_glukosa - $dummy[7]), 2)
                + pow(($value->index_berat_badan - $dummy[8]), 2)
                + pow(($value->status_perokok - $dummy[9]), 2));
            // $a[0] = pow($value->jenis_kelamin - $dummy[0], 2);
            // $a[1] = pow($value->usia - $dummy[1], 2);
            // $a[2] = pow($value->hipertensi - $dummy[2], 2);
            // $a[3] = pow($value->liver - $dummy[3], 2);
            // $a[4] = pow($value->status_pernikahan - $dummy[4], 2);
            // $a[5] = pow($value->tipe_pekerjaan - $dummy[5], 2);
            // $a[6] = pow($value->tempat_tinggal - $dummy[6], 2);
            // $a[7] = pow($value->rata_kadar_glukosa - $dummy[7], 2);
            // $a[8] = pow($value->index_berat_badan - $dummy[8], 2);
            // $a[9] = pow($value->status_perokok - $dummy[9], 2);
            // $b = sqrt($a[0] + $a[1] + $a[2] + $a[3] + $a[4] + $a[5] + $a[6] + $a[7] + $a[8] + $a[9]);
            // print_r($a);
            // echo $b;
            // exit;
            array_push($tempResult, (object)["result" => $result, "keterangan" => $value->keterangan]);
        }
        // echo "BEFORE SHORT<br>";
        // print_r($tempResult);


        usort($tempResult, function ($a, $b) {
            return strnatcmp($a->result, $b->result);
        });


        // echo "AFTER SHORT<br>";
        // print_r($tempResult);

        $result = $this->result_knn(5, $tempResult);
        //print_r($result);
        $data["result"] = $result;
        $this->load->view('prediksi_masyarakat/hasil_predik_masyarakat', $data);
        // get 3 data teratas

        // $iteration = 1;
        // $maxIteration = 5;
        // $getAscData = [];
        // foreach ($tempResult as $item) {
        //     if ($iteration <= $maxIteration) {
        //         array_push($getAscData, $item);
        //     } else {
        //         break;
        //     }
        //     $iteration++;
        // }
        //redirect('prediksi_masyarakat/hasil_predik_masyarakat');
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
        // print_r($count);
        return $data[array_search(max($count), $count)];
        // for ($i = 0; $i < $k; $i++) {
        //     $count[$i] = 0;
        //     for ($j = 0; $j < $k; $j++) {
        //         if ($i != $j)
        //             if ($data[$i]->keterangan == $data[$j]->keterangan) {
        //                 $count[$i] = $count[$i] + 1;
        //             }
        //     }
        // }
        // $hits_data = array();
        // $hits = array();
        // for ($i = 0; $i < $k; $i++) {
        //     $count[$i] = 0;
        //     if (!in_array($data[$i]->keterangan, $hits_data)) {
        //         array_push($hits_data, $data[$i]->keterangan);
        //         $hits[$data[$i]->keterangan] = 
        //     }

        //     $hits[$i] = $data[$i]->keterangan;

        //     for ($j = 0; $j < $k; $j++) {
        //         if ($i != $j)
        //             if ($data[$i]->keterangan == $data[$j]->keterangan) {
        //                 $count[$i] = $count[$i] + 1;
        //             }
        //     }
        // }
        // print_r($count);
        // print_r($data[0]);
        // print_r($data[1]);
        // print_r($data[2]);
        // exit;
        // $indeks = 0;
        // $v = 0;
        // for ($i = 0; $i < $k; $i++) {
        //     if ($v < $count[$i]) {
        //         $v = $count[$i];
        //         $indeks = $i;
        //     }
        // }
        // return $v;
    }

    //  $getDataStroke = []; 
    // $iteration = 1;
    // $maxIteration = 5;
    //foreach ($getAscData as $value) 
    //{
    //  $iteration++;
    //  if(!in_array($value->keterangan_pengunjung, $getDataStroke) 
    //if ($iteration <= $maxIteration) 
    //{
    // array_push($getDataStroke, $value->keterangan_pengunjung);
    //}
}// 
    // $tempCounting = [];
    // foreach ($getDataStroke as $datastrokeitem) {
    //  $counting = 0;
    //foreach ($getAscData as $dataAscItem) {
    //  if($dataAscItem->keterangan_pengunjung == $datastrokeitem) {
    //  $counting++;
    //  }
    //  }
    //array_push($tempCounting, (object) ["keterangan pengunjung"=>$datastrokeitem, "counting" => $counting]);
    // } 
    //     $maxResult = new stdClass;
    // foreach ($tempCounting as $tempitem) {
    //       if(!property_exists($maxResult, "counting")) {
    //     $maxResult = $tempitem;
    // } else {
    //   if($tempitem->counting >$maxResult->counting) {
    //     $maxResult = $tempCounting;
    //}
    //   }
    // }
    // $data = array (

    //'jenis_kelamin_pengunjung' = $jenis_kelamin_pengunjung,
    //'usia_pengunjung' = $usia_pengunjung,
    // 'hipertensi_pengunjung' = $hipertensi_pengunjung,
    // 'liver_pengunjung' = $liver_pengunjung,
    // 'status_pernikahan_pengunjung' = $status_pernikahan_pengunjung,
    // 'tipe_pekerjaan_pengunjung' = $tipe_pekerjaan_pengunjung,
    // 'tempat_tinggal_pengunjung' = $tempat_tinggal_pengunjung,
    // 'rata_kadar_glukosa_pengunjung' = $rata_kadar_glukosa_pengunjung,
    // 'index_bb_pengunjung' = $index_bb_pengunjung,
    // 'status_perokok_pengunjung' = $status_perokok_pengunjung,
    // 'keterangan_pengunjung' = $maxResult->keterangan_pengunjung,
    //);

    //$this->prediksi_pengunjung_model->tambah_prediksi($data, '');
    // }
