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
        $this->load->view('tim_medis/header', $data);
        $this->load->view('tim_medis/sidebar', $data);
        $this->load->view('tim_medis/topbar', $data);
        $this->load->view('tim_medis/prediksi_tim_medis', $data);
        $this->load->view('templates/footer');
    }
    public function prediksitm()
    {
        $data['title'] = 'Prediksi Tim Medis';
        $data['user'] = $this->db->get_where('user', ['email'
        => $this->session->userdata('email')])->row_array();

        // // $data['prediksi_tim_medis'] = $this->prediksi_pengunjung_model->tambah_prediksi_tm();
        $this->load->view('tim_medis/header', $data);
        $this->load->view('tim_medis/sidebar', $data);
        $this->load->view('tim_medis/topbar', $data);
        $this->load->view('tim_medis/mulai_prediksi', $data);
        $this->load->view('tim_medis/footer');
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
        $this->load->model('data_stroke_tim_medis_model');
        $data_stroke_tim_medis = $this->data_stroke_tim_medis_model->SemuaData();

        date_default_timezone_set('Asia/Jakarta');

        $id_pasien_tm = $this->input->post('id_pasien');
        $jenis_kelamin_tm = $this->input->post('jenis_kelamin');
        $usia_tm = $this->input->post('usia');
        $keadaan_umum_tm = $this->input->post('keadaan_umum');
        $kesadaran_tm = $this->input->post('kesadaran');
        $tensi_darah_tm = $this->input->post('tensi_darah');
        $nadi_permenit_tm = $this->input->post('nadi_permenit');
        $suara_napas_tm = $this->input->post('suara_napas');
        $suhu_badan_tm = $this->input->post('suhu_badan');
        $respirasi_permenit_tm = $this->input->post('respirasi_permenit');
        $spo2_tm = $this->input->post('spo2');
        $perubahan_sensorik_tm = $this->input->post('perubahan_sensorik');
        $perubahan_motorik_tm = $this->input->post('perubahan_motorik');
        $irama_napas_tm = $this->input->post('irama_napas');
        $bunyi_napas_tm = $this->input->post('bunyi_napas');
        $henti_jantung_tm = $this->input->post('henti_jantung');
        $nadi_teraba_tm = $this->input->post('nadi_teraba');
        $kulit_tm = $this->input->post('kulit');
        $akral_tm = $this->input->post('akral');
        $pendarahan_tm = $this->input->post('pendarahan');
        $turgor_tm = $this->input->post('turgor');
        $sianosis_tm = $this->input->post('sianosis');
        $riwayat_alergi_tm = $this->input->post('riwayat_alergi');
        $medikasi_tm = $this->input->post('medikasi');
        $pernah_stroke_tm = $this->input->post('pernah_stroke');
        $refleks_cahaya_tm = $this->input->post('refleks_cahaya');
        $skala_nyeri_tm = $this->input->post('skala_nyeri');
        $aktivitas_mobilisasi_tm = $this->input->post('aktivitas_mobilisasi');
        $risiko_jatuh_tm = $this->input->post('risiko_jatuh');
        $crt_tm = $this->input->post('crt');
        $gcs_tm = $this->input->post('gcs');


        $tempResult = [];
        foreach ($data_stroke_tim_medis as $value) {
            $result = sqrt(
                pow(($value->jenis_kelamin - $jenis_kelamin_tm), 2)
                    + pow(($value->usia - $usia_tm), 2)
                    + pow(($value->keadaan_umum - $keadaan_umum_tm), 2)
                    + pow(($value->kesadaran - $kesadaran_tm), 2)
                    + pow(($value->tensi_darah - $tensi_darah_tm), 2)
                    + pow(($value->nadi_permenit - $nadi_permenit_tm), 2)
                    + pow(($value->suara_napas - $suara_napas_tm), 2)
                    + pow(($value->suhu_badan - $suhu_badan_tm), 2)
                    + pow(($value->respirasi_permenit - $respirasi_permenit_tm), 2)
                    + pow(($value->spo2 - $spo2_tm), 2)
                    + pow(($value->perubahan_sensorik - $perubahan_sensorik_tm), 2)
                    + pow(($value->perubahan_motorik - $perubahan_motorik_tm), 2)
                    + pow(($value->irama_napas - $irama_napas_tm), 2)
                    + pow(($value->bunyi_napas - $bunyi_napas_tm), 2)
                    + pow(($value->henti_jantung - $henti_jantung_tm), 2)
                    + pow(($value->nadi_teraba - $nadi_teraba_tm), 2)
                    + pow(($value->kulit - $kulit_tm), 2)
                    + pow(($value->akral - $akral_tm), 2)
                    + pow(($value->pendarahan - $pendarahan_tm), 2)
                    + pow(($value->turgor - $turgor_tm), 2)
                    + pow(($value->sianosis - $sianosis_tm), 2)
                    + pow(($value->riwayat_alergi - $riwayat_alergi_tm), 2)
                    + pow(($value->medikasi - $medikasi_tm), 2)
                    + pow(($value->pernah_stroke - $pernah_stroke_tm), 2)
                    + pow(($value->refleks_cahaya - $refleks_cahaya_tm), 2)
                    + pow(($value->skala_nyeri - $skala_nyeri_tm), 2)
                    + pow(($value->aktivitas_mobilisasi - $aktivitas_mobilisasi_tm), 2)
                    + pow(($value->risiko_jatuh - $risiko_jatuh_tm), 2)
                    + pow(($value->crt - $crt_tm), 2)
                    + pow(($value->gcs - $gcs_tm), 2)
            );
            array_push($tempResult, (object)["result" => $result, "diagnosa" => $value->diagnosa]);
        }
        usort($tempResult, function ($a, $b) {
            return strnatcmp($a->result, $b->result);
        });
        $result = $this->result_knn(3, $tempResult);

        $data["result"] = $result;
        $this->load->model('prediksi_tim_medis_model');
        $prediksi_tim_medis = array(
            'id_pasien_tm' => $id_pasien_tm,
            'jenis_kelamin_tm' => $jenis_kelamin_tm,
            'usia_tm' => $usia_tm,
            'keadaan_umum_tm' => $keadaan_umum_tm,
            'kesadaran_tm' => $kesadaran_tm,
            'tensi_darah_tm' => $tensi_darah_tm,
            'nadi_permenit_tm' => $nadi_permenit_tm,
            'suara_napas_tm' => $suara_napas_tm,
            'suhu_badan_tm' => $suhu_badan_tm,
            'respirasi_permenit_tm' => $respirasi_permenit_tm,
            'spo2_tm' => $spo2_tm,
            'perubahan_sensorik_tm' => $perubahan_sensorik_tm,
            'perubahan_motorik_tm' => $perubahan_motorik_tm,
            'irama_napas_tm' => $irama_napas_tm,
            'bunyi_napas_tm' => $bunyi_napas_tm,
            'henti_jantung_tm' => $henti_jantung_tm,
            'nadi_teraba_tm' => $nadi_teraba_tm,
            'kulit_tm' => $kulit_tm,
            'akral_tm' => $akral_tm,
            'pendarahan_tm' => $pendarahan_tm,
            'turgor_tm' => $turgor_tm,
            'sianosis_tm' => $sianosis_tm,
            'riwayat_alergi_tm' => $riwayat_alergi_tm,
            'medikasi_tm' => $medikasi_tm,
            'pernah_stroke_tm' => $pernah_stroke_tm,
            'refleks_cahaya_tm' => $refleks_cahaya_tm,
            'skala_nyeri_tm' => $skala_nyeri_tm,
            'aktivitas_mobilisasi_tm' => $aktivitas_mobilisasi_tm,
            'risiko_jatuh_tm' => $risiko_jatuh_tm,
            'crt_tm' => $crt_tm,
            'gcs_tm' => $gcs_tm,
            'diagnosa_tm' => $result->diagnosa,
            'dibuat_pada' => date('Y-m-d')
        );
        $this->prediksi_tim_medis_model->tambah_prediksi_tm($prediksi_tim_medis);
        $data['title'] = 'Data Prediksi Tim Medis';
        $data['temp'] = $prediksi_tim_medis;
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
            if (isset($visited[$data[$i]->diagnosa]))
                if ($visited[$data[$i]->diagnosa])
                    $visit = false;

            if ($visit) {
                $visited[$data[$i]->diagnosa] = true;
                $count[$i] = 1;
                for ($j = 0; $j < $k; $j++) {
                    if ($i != $j) {
                        if ($data[$i]->diagnosa == $data[$j]->diagnosa) {
                            $count[$i] += 1;
                        }
                    }
                }
            }
        }
        return $data[array_search(max($count), $count)];
    }
}
