<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Tekan tombol "Keluar" di bawah ini apabila Anda ingin Keluar.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-secondary" href="<?= base_url('login/logout'); ?>">Keluar</a>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url(); ?>vendor/sbadmin2/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>vendor/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>vendor/sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url(); ?>vendor/sbadmin2/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url(); ?>vendor/sbadmin2/vendor/chart.js/Chart.min.js"></script>

<script src="<?= base_url(); ?>vendor/sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>vendor/sbadmin2/js/demo/datatables-demo.js"></script>
<script src="<?= base_url(); ?>vendor/sbadmin2/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>vendor/sbadmin2/vendor/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url(); ?>vendor/sbadmin2/vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url(); ?>vendor/sbadmin2/js/demo/chart-area-demo.js"></script>
<script src="<?= base_url(); ?>vendor/sbadmin2/js/demo/chart-pie-demo.js"></script>
<script src="<?= base_url(); ?>vendor/sbadmin2/js/demo/chart-bar-demo.js"></script>
<?php $dibuat_pada = $this->db->get('prediksi')->result(); ?>
<script type="text/javascript">
    // </?php

    // $label = "";
    // $data = "";
    // foreach ($labelnya as $key => $value) {
    //     $label .= '"' . $value['dibuat_pada'] . '",';
    //     $data .= "" . $value['keterangan_pengunjung'] . ",";
    // }
    // $label = rtrim($label, ",");
    // $data = rtrim($data, ",");
    // echo "var label = [$label];\n ";
    // echo "var data = [$data];\n ";
    // ?/>
    <?php
    $label = "";
    foreach ($grafikdataprediksi["label"] as $l) {
        $label .= "'" . $l . "',";
    }
    $data = "";
    foreach ($grafikdataprediksi["data"] as $d) {
        $data .= $d . ",";
    }

    ?>
    var ctx = document.getElementById("myAreaChart");
    var myAreaChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [<?= $label ?>],
            datasets: [{
                label: "Prediksi",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [<?= $data ?>],
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{

                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 15
                    }
                }],
                yAxes: [{
                    ticks: {
                        maxTicksLimit: 5,
                        padding: 10,
                        // // Include a dollar sign in the ticks
                        // callback: function(value, index, values) {
                        //     return '$' + number_format(value);
                        // }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                // callbacks: {
                //     label: function(tooltipItem, chart) {
                //         var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                //         return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                //     }
                // }
            }
        }
    });
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Stroke", "Tidak Stroke"],
            datasets: [{
                data: [<?php echo $this->db->query("select keterangan_pengunjung from prediksi where keterangan_pengunjung='1'")->num_rows(); ?>, <?php echo $this->db->query("select keterangan_pengunjung from prediksi where keterangan_pengunjung='0'")->num_rows(); ?>],
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });
</script>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>
</body>

</html>