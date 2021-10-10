<!DOCTYPE html>
<html lang="en">

<body class="g-sidenav-show  bg-gray-100">
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
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
                <!-- <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="btn-group mt-4">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url('user/profile'); ?>" type="button" class="form-control">Profil</a></li>
                                <li><a href="<?= site_url('auth/logout') ?>" class="form-control primary">Keluar</a>
                                <li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Saldo Perusahaan</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            <?php
                                            function nilai($angka)
                                            {
                                                $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
                                                return $hasil_rupiah;
                                            }
                                            $pendapatan =
                                                $pendapatan[0]->pendapatan_proyek +
                                                $pendapatan[0]->pendapatan_giro +
                                                $pendapatan[0]->bonus +
                                                $pendapatan[0]->pendapatan_lainlain +
                                                $pendapatan[0]->laba_selisih_kurs;
                                            $beban =
                                                $beban[0]->beban_proyek +
                                                $beban[0]->beban_gaji +
                                                $beban[0]->tunjangan_hari_raya +
                                                $beban[0]->beban_operasional +
                                                $beban[0]->beban_setoran_ui +
                                                $beban[0]->beban_penyusutan +
                                                $beban[0]->beban_bonus +
                                                $beban[0]->beban_perlengkapan_kantor +
                                                $beban[0]->beban_pengelolaan_rek +
                                                $beban[0]->beban_buku_cek +
                                                $beban[0]->beban_pajak +
                                                $beban[0]->beban_lainlain +
                                                $beban[0]->rugi_penjualan_aset +
                                                $beban[0]->rugi_selisih_kurs;
                                            $saldo =
                                                $pendapatan - $beban;
                                            ?>
                                            <?php echo nilai($saldo); ?>
                                            <!-- <span class="text-success text-sm font-weight-bolder">+55%</span> -->
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Piutang Perusahaan</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            <?php
                                            function harga($angka)
                                            {
                                                $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
                                                return $hasil_rupiah;
                                            }
                                            $piutang =
                                                $piutang[0]->PIUTANG_OPERASIONAL +
                                                $piutang[0]->PIUTANG_DAYA_MAKARA +
                                                $piutang[0]->PIUTANG_PROYEK +
                                                $piutang[0]->PIUTANG_SOLAR_CAR +
                                                $piutang[0]->PIUTANG_TVUI;
                                            ?>
                                            <?php echo harga($piutang); ?>
                                            <!-- <span class="text-success text-sm font-weight-bolder">+3%</span> -->
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Hutang Perusahaan</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            <?php
                                            function format($angka)
                                            {
                                                $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
                                                return $hasil_rupiah;
                                            }
                                            $hutang =
                                                $hutang[0]->HUTANG_OPERASIONAL +
                                                $hutang[0]->HUTANG_PADA_RTV +
                                                $hutang[0]->HUTANG_PROYEK +
                                                $hutang[0]->HUTANG_GAJI;
                                            ?>
                                            <?php echo format($hutang); ?>
                                            <!-- <span class="text-danger text-sm font-weight-bolder">-2%</span> -->
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">

                <div class="col-lg-12">
                    <div class="card z-index-2">
                        <div class="card-header pb-0">
                            <h6>Keuntungan PT. Tirta Kencana Mulia</h6>
                            <p class="text-sm">
                                <i class="fa fa-arrow-up text-success"></i>
                                <!-- <span class="font-weight-bold">Tahun ...</span> -->
                            </p>
                        </div>
                        <div class="card-body p-3">
                            <div class="chart">
                                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                            </div>
                        </div>
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
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">PT. Tirta Kencana Mulia</a>
                            for a better web.
                        </div>
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
        var ctx2 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

        // gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
        // gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        // gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

        var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

        // gradientStroke2.addColorStop(1, 'rgba(255, 0, 0, 0)');
        // gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        // gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

        var gradientStroke3 = ctx2.createLinearGradient(0, 230, 0, 50);

        // gradientStroke3.addColorStop(1, 'rgba(203,12,39,0.2)');
        // gradientStroke3.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        // gradientStroke3.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

        new Chart(ctx2, {
            type: "line",
            data: {
                labels: [
                    <?php
                    foreach ($pendapatan_by_month as $key) {
                        $data = explode("-", $key->TANGGAL_MASUK);
                        $tahun = $data[0];
                        $bulan = date('F', mktime(0, 0, 0, $data[1], 10));
                        $bulanTahun = $bulan . " " . $tahun;
                        echo '"' . $bulanTahun . '",';
                    }
                    ?>
                ],
                datasets: [{
                        label: "Pendapatan",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#17ad70",
                        borderWidth: 3,
                        backgroundColor: gradientStroke1,
                        fill: true,
                        data: [
                            <?php
                            foreach ($pendapatan_by_month as $key) {
                                $pendapatan =
                                    $key->pendapatan_proyek +
                                    $key->pendapatan_giro +
                                    $key->bonus +
                                    $key->pendapatan_lainlain +
                                    $key->laba_selisih_kurs;
                                echo '"' . $pendapatan . '",';
                            }
                            ?>
                        ],
                        maxBarThickness: 6
                    },
                    {
                        label: "Beban",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#f89369",
                        borderWidth: 3,
                        backgroundColor: gradientStroke2,
                        fill: true,
                        data: [
                            <?php
                            foreach ($beban_by_month as $key) {
                                $beban =
                                    $key->beban_proyek +
                                    $key->beban_gaji +
                                    $key->tunjangan_hari_raya +
                                    $key->beban_operasional +
                                    $key->beban_setoran_ui +
                                    $key->beban_penyusutan +
                                    $key->beban_bonus +
                                    $key->beban_perlengkapan_kantor +
                                    $key->beban_pengelolaan_rek +
                                    $key->beban_buku_cek +
                                    $key->beban_pajak +
                                    $key->beban_lainlain +
                                    $key->rugi_penjualan_aset +
                                    $key->rugi_selisih_kurs;
                                echo '"' . $beban . '",';
                            }
                            ?>
                        ],
                        maxBarThickness: 6
                    },
                    {
                        label: "Keuntungan",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#18bece",
                        borderWidth: 3,
                        backgroundColor: gradientStroke3,
                        fill: true,
                        data: [
                            <?php
                            foreach ($pendapatan_by_month as $keyP) {
                                foreach ($beban_by_month as $keyB) {
                                    $dataP = explode("-", $keyP->TANGGAL_MASUK);
                                    $dataB = explode("-", $keyB->TANGGAL_MASUK);
                                    $tanggalBulanP = $dataP[0] . "-" . $dataP[1];
                                    $tanggalBulanB = $dataB[0] . "-" . $dataB[1];
                                    if ($tanggalBulanP == $tanggalBulanB) {
                                        $pendapatan =
                                            $keyP->pendapatan_proyek +
                                            $keyP->pendapatan_giro +
                                            $keyP->bonus +
                                            $keyP->pendapatan_lainlain +
                                            $keyP->laba_selisih_kurs;

                                        $beban =
                                            $keyB->beban_proyek +
                                            $keyB->beban_gaji +
                                            $keyB->tunjangan_hari_raya +
                                            $keyB->beban_operasional +
                                            $keyB->beban_setoran_ui +
                                            $keyB->beban_penyusutan +
                                            $keyB->beban_bonus +
                                            $keyB->beban_perlengkapan_kantor +
                                            $keyB->beban_pengelolaan_rek +
                                            $keyB->beban_buku_cek +
                                            $keyB->beban_pajak +
                                            $keyB->beban_lainlain +
                                            $keyB->rugi_penjualan_aset +
                                            $keyB->rugi_selisih_kurs;

                                        $keuntungan = $pendapatan - $beban;

                                        echo '"' . $keuntungan . '",';
                                    }
                                }
                            }
                            ?>
                        ],
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

</html>