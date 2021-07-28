<?php

function getjumlahprediksi($prediksi)
{
    $ci = &get_instance();
    $q = $ci->db->query("SELECT * FROM prediksi where prediksi='$prediksi'")->num_rows();
    return $q;
}
