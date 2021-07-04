<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Importdata extends CI_Controller
{

    public function index()
    {
        $data['data_stroke'] = $this->db->get('data_stroke')->result();
        $this->load->view('data/index', $data);
    }

    public function upload()
    {
        if (isset($_FILES["file"]["name"])) {
            // upload
            $file_tmp = $_FILES['file']['tmp_name'];
            $file_name = $_FILES['file']['name'];
            $file_size = $_FILES['file']['size'];
            $file_type = $_FILES['file']['type'];
            // move_uploaded_file($file_tmp,"uploads/".$file_name); // simpan filenya di folder uploads

            $object = PHPExcel_IOFactory::load($file_tmp);

            foreach ($object->getWorksheetIterator() as $worksheet) {

                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();

                for ($row = 4; $row <= $highestRow; $row++) {

                    $id_pasien = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $jenis_kelamin = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $usia = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $hipertensi = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $liver = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $status_pernikahan = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $tipe_pekerjaan = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $tempat_tinggal = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $rata_kadar_glukosa = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                    $index_berat_badan = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
                    $status_perokok = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
                    $keterangan = $worksheet->getCellByColumnAndRow(11, $row)->getValue();

                    $data[] = array(
                        'id_pasien'          => $id_pasien,
                        'jenis_kelamin'          => $jenis_kelamin,
                        'usia'         => $usia,
                        'hipertensi'         => $hipertensi,
                        'liver'         => $liver,
                        'status_pernikahan'         => $status_pernikahan,
                        'tipe_pekerjaan'         => $tipe_pekerjaan,
                        'tempat_tinggal'         => $tempat_tinggal,
                        'rata_kadar_glukosa'         => $rata_kadar_glukosa,
                        'index_berat_badan'         => $index_berat_badan,
                        'status_perokok'         => $status_perokok,
                        'keterangan'         => $keterangan,
                    );
                }
            }

            $this->db->insert_batch('data_stroke', $data);

            $message = array(
                'message' => '<div class="alert alert-success">Import file excel berhasil</div>',
            );

            $this->session->set_flashdata($message);
            redirect('data/index');
        } else {
            $message = array(
                'message' => '<div class="alert alert-danger">Import file gagal, coba lagi</div>',
            );

            $this->session->set_flashdata($message);
            redirect('data/index');
        }
    }
}
