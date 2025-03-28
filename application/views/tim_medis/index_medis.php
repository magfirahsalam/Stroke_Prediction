<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-4">
            <div class="m-0 font-weight-bold text-secondary"><?= $title; ?>
            </div>
        </div>
        <!-- Content Row -->
        <div class="row">

            <div class="col-xl-8 col-lg-7">

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-secondary">Data Prediksi</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Donut Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-secondary">Jenis Stroke</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4">
                            <canvas id="myPieChart"></canvas>
                        </div>
                        <div class="mt-4 text-center small">
                            <span class="mr-2">
                                <i class="fas fa-circle text-secondary"></i>Stroke Haemoragic
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-success"></i>Stroke Non-Haemoragic
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-warning"></i>Stroke Iskemik
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-info"></i>Stroke Sequelae
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->