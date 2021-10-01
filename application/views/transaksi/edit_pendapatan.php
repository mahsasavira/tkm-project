<body class="g-sidenav-show  bg-gray-100">
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <!-- <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark">Laba Rugi</a></li> -->
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Edit Pendapatan</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Edit Pendapatan</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <!-- <span class="input-group-text text-body">
                                <i class="fas fa-search" aria-hidden="true"></i>
                            </span> -->
                            <!-- <input type="text" class="form-control" placeholder="Type here..."> -->
                        </div>
                    </div>
                    <div class="navbar-nav  justify-content-end">
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="<?= site_url('auth/logout') ?>" class="nav-link text-body font-weight-bold px-0">
                                <i class="fas fa-sign-out-alt"></i>
                                <span class="d-sm-inline d-none">Keluar</span>
                            </a>
                        </li>

                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid">
            <div class="page-header min-height-250 border-radius-xl mt-4" style="background-image: url('../assets/img/background.png'); background-position-y: 50%;">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n10 overflow-hidden">
                <div class="row gx-4">
                    <div class="row">
                        <div class="col-md-5 mt-4">
                            <!-- PENDAPATAN -->
                            <div class="card justify-align-center">
                                <div class="card-header pb-0 px-3 text-center">
                                    <h5 class="mb-2 text-center text-uppercase text-dark text-l font-weight-bolder opacity-8">Edit Pendapatan</h5>
                                </div>
                                <form action="<?= base_url('transaksi/update_pen') ?>" method="POST">
                                    <input type="hidden" name="id_pendapatan" value="<?= $this->uri->segment(3) ?>">
                                    <div class="card-body pt-4 p-3">
                                        <ul class="list-group">
                                            <div class="card-body px-0 pt-0 pb-2">
                                                <div class="table-responsive p-0">
                                                    <div class="col-md-6 mt-4 pb-0 px-3">
                                                        <div class="form-group col-10">
                                                            <label for="example-date-input" class="form-control-label">Tanggal : </label>
                                                            <input class="form-control" type="date" min="2019-01-01" max="2021-12-31" name="tanggal_masuk" value="<?= $this->input->post('tanggal_masuk') ?? $querypen->TANGGAL_MASUK ?>" id="example-date-input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                    <div class="card-body p-3">
                                        <div class="table-responsive p-0">
                                            <div class="col-12 px-3">
                                                <div class="form-group col-5">
                                                    <label>Pendapatan Proyek</label>
                                                    <input type="number" name="pendapatan_proyek" value="<?= $this->input->post('pendapatan_proyek') ?? $querypen->PENDAPATAN_PROYEK ?>" class="form-control" required>
                                                </div>
                                                <div class="form-group col-5">
                                                    <label>Pendapatan Giro</label>
                                                    <input type="number" name="pendapatan_giro" value="<?= $this->input->post('pendapatan_giro') ?? $querypen->PENDAPATAN_GIRO ?>" class="form-control" required>
                                                </div>
                                                <div class="form-group col-5">
                                                    <label>Bonus</label>
                                                    <input type="number" name="bonus" value="<?= $this->input->post('bonus') ?? $querypen->BONUS ?>" class="form-control" required>
                                                </div>
                                                <div class="form-group col-5">
                                                    <label>Pendapatan Lain-Lain</label>
                                                    <input type="number" name="pendapatan_lainlain" value="<?= $this->input->post('pendapatan_lainlain') ?? $querypen->PENDAPATAN_LAINLAIN ?>" class="form-control" required>
                                                </div>
                                                <div class="form-group col-5">
                                                    <label>Laba Selisih Kurs</label>
                                                    <input type="number" name="laba_selisih_kurs" value="<?= $this->input->post('laba_selisih_kurs') ?? $querypen->LABA_SELISIH_KURS ?>" class="form-control" required>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group col-6">
                                                            <button type="submit" class="btn btn-success">Simpan</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group col-2">
                                                            <a type="button" href="<?= base_url('transaksi/labarugi'); ?>" class="btn btn-danger">Batal</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- BEBAN -->
                        <!-- <div class="col-md-7 mt-4">
                            <div class="card">
                                <div class="card-header pb-0 px-3 text-center">
                                    <h5 class="mb-2 text-center text-uppercase text-dark text-l font-weight-bolder opacity-8">Tambah Beban</h5>
                                </div>
                                <form action="" method="POST">
                                    <div class="card-body pt-4 p-3">
                                        <ul class="list-group">
                                            <div class="card-body px-0 pt-0 pb-2">
                                                <div class="table-responsive p-0">
                                                    <div class="col-md-6 mt-4 pb-0 px-3">
                                                        <div class="form-group col-10">
                                                            <label for="example-date-input" class="form-control-label">Tanggal : </label>
                                                            <input class="form-control" type="date" name="tanggal_masuk" value="<?= set_value('tanggal_masuk') ?>" id="example-date-input" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>

                                    <div class="card-body p-3">
                                        <div class="table-responsive p-0">
                                            <div class="col-12 px-3">
                                                <div class="row">
                                                    <div class="form-group col-5">
                                                        <label>Beban Proyek</label>
                                                        <input type="number" name="beban_proyek" value="" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-5">
                                                        <label>Beban Gaji</label>
                                                        <input type="number" name="beban_gaji" value="" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-5">
                                                        <label>Tunjangan Hari Raya</label>
                                                        <input type="number" name="tunjangan_hari_raya" value="" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-5">
                                                        <label>Beban Operasional</label>
                                                        <input type="number" name="beban_operasional" value="" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-5">
                                                        <label>Beban Setoran UI</label>
                                                        <input type="number" name="beban_setoran_ui" value="" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-5">
                                                        <label>Beban Penyusutan</label>
                                                        <input type="number" name="beban_penyusutan" value="" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-5">
                                                        <label>Beban Bonus</label>
                                                        <input type="number" name="beban_bonus" value="" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-5">
                                                        <label>Beban Perlengkapan Kantor</label>
                                                        <input type="number" name="beban_perlengkapan_kantor" value="" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-5">
                                                        <label>Beban Pengelolaan Rek.</label>
                                                        <input type="number" name="beban_pengelolaan_rek" value="" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-5">
                                                        <label>Laba Selisih Kurs</label>
                                                        <input type="number" name="laba_selisih_kurs" value="" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-5">
                                                        <label>Beban Buku Cek</label>
                                                        <input type="number" name="beban_buku_cek" value="" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-5">
                                                        <label>Beban Pajak</label>
                                                        <input type="number" name="beban_pajak" value="" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-5">
                                                        <label>Beban Lain-Lain</label>
                                                        <input type="number" name="beban_lainlain" value="" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-5">
                                                        <label>Rugi Penjualan Aset</label>
                                                        <input type="number" name="rugi_penjualan_aset" value="" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-5">
                                                        <label>Rugi Selisih Kurs</label>
                                                        <input type="number" name="rugi_selisih_kurs" value="" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="" method="post">
                                            <div class="col-md-0 mt-4">
                                                <div>
                                                    <ul class="list-group">
                                                        <div class="card-body px-3 pt-1 pb-0">
                                                            <center>
                                                                <div class="row">
                                                                    <div class="col-2">
                                                                        <div class="form-group col-2">
                                                                            <button type="submit" href="#" class="btn btn-success">Simpan</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <div class="form-group col-5">
                                                                            <button type="reset" class="btn btn-danger">Batal</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </center>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </main>


    <!--   Core JS Files   -->
    <script src="<?php echo base_url() ?>assets/js/core/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/core/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx = document.getElementById("chart-bars").getContext("2d");

        new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Sales",
                    tension: 0.4,
                    borderWidth: 0,
                    borderRadius: 4,
                    borderSkipped: false,
                    backgroundColor: "#fff",
                    data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
                    maxBarThickness: 6
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 500,
                            beginAtZero: true,
                            padding: 15,
                            font: {
                                size: 14,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                            color: "#fff"
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false
                        },
                        ticks: {
                            display: false
                        },
                    },
                },
            },
        });


        var ctx2 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

        var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

        gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
        gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

        new Chart(ctx2, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                        label: "Mobile apps",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#cb0c9f",
                        borderWidth: 3,
                        backgroundColor: gradientStroke1,
                        fill: true,
                        data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                        maxBarThickness: 6

                    },
                    {
                        label: "Websites",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#3A416F",
                        borderWidth: 3,
                        backgroundColor: gradientStroke2,
                        fill: true,
                        data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                        maxBarThickness: 6
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#b2b9bf',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#b2b9bf',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="<?php echo base_url() ?>https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo base_url() ?>assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>