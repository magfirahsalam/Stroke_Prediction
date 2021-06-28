<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tempat_Berobat extends CI_Controller
{
    public function index()
    {
        $this->load->view('place/tempat_berobat');
    }
}
