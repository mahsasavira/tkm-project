<!DOCTYPE html>
<html lang="en">

<body class="g-sidenav-show  bg-gray-100">
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Laporan</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Laporan Neraca</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Laporan Neraca</h6>
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
                            <!-- <a href="<?= site_url('auth/logout') ?>"><i class="glyphicon glyphicon-log-out"></i> <span>Keluar</span></a> -->
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
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <form action="<?php echo base_url("Laporan/laporan_laba_rugi") ?>" method="POST">
                                            <div class="form-group col-2">
                                                <label for="example-date-input" class="form-control-label">Periode Awal : </label>
                                                <input placeholder="Bulan Awal" class="btn btn-outline-primary" min="2019-01-01" max="2021-12-31" name="tgl_awal" value="" id="tgl_awal">
                                            </div>
                                            <div class="form-group col-2">
                                                <label for="example-date-input" class="form-control-label">Periode Akhir : </label>
                                                <input placeholder="Bulan Akhir" class="btn btn-outline-primary" min="2019-01-01" max="2021-12-31" name="tgl_akhir" value="" id="tgl_akhir">
                                            </div>
                                            <button type="submit" class="btn btn-outline-primary btn-icon-text">Tampilkan</button>
                                            <!-- <a href="#" onclick=""><button type="button" class="btn btn-outline-primary btn-icon-text"> Tampilkan <i class="mdi mdi-eye btn-icon-append"></i></button></a> -->
                                        </form>
                                        <form action="<?php echo base_url("laporan/laporan_labarugi_pdf") ?>" method="POST">
                                            <div align="right">
                                                <input name="tgl_awal_cetak" value="<?php if ($tgl_awal_cetak != null) {
                                                                                        echo $tgl_awal_cetak;
                                                                                    }; ?>" hidden>
                                                <input name="tgl_akhir_cetak" value="<?php if ($tgl_akhir_cetak != null) {
                                                                                            echo $tgl_akhir_cetak;
                                                                                        } ?>" hidden>
                                                <button type="submit" class="btn btn-outline-primary btn-icon-text">Cetak</button>
                                                <!-- <a href="<?= site_url('laporan/laporan_labarugi_pdf') ?>" id="url_cetak_laporan"><button type="button" class="btn btn-outline-primary btn-icon-text"> Cetak <i class="mdi mdi-printer btn-icon-append"></i></button></a> -->
                                            </div>
                                        </form>
                                    </div>

                                    <div class="table-responsive p-0 border border-dark">
                                        <center>
                                            <h4 class="card-title mt-4"><b>LAPORAN NERACA</b></h4>
                                            <p class="card-description"><b> Periode <?= ($tgl_awal_cetak != '' ? ($tgl_awal_cetak) . ' ' : '') . 's/d ' . ($tgl_akhir_cetak) ?></b></p><br><br>
                                        </center>
                                        <div class="card-header pb-0 px-3 text-center">
                                            <h5 class="mb-2 text-center text-dark text-l font-weight-bolder opacity-8">AKTIVA</h5>
                                        </div>
                                        <table class="table table-bordered align-items-center mb-5">
                                            <tr>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">No.</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Tanggal Masuk</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Kas Kecil</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Kas Pada Bank</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Jaminan Bank</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Piutang Operasional</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Piutang Daya Makara</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Piutang Proyek</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Piutang TVUI</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Piutang Solar Car</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Komputer</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Akum.Peny. Komputer</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Fax</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Akum.Peny.Fax</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">AC</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Akum.Peny.AC</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Furniture</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Akum.Peny.Furniture</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Notebook</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Akum.Peny.Notebook</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Kamera Digital</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Akum.Peny.Digital</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Printer</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Akum.Peny.Printer</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Kamera Video</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Akum.Peny.Kamera Video</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Total Aktiva</th>
                                            </tr>
                                            <tbody>
                                                <?php
                                                function harga($angka)
                                                {
                                                    $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
                                                    return $hasil_rupiah;
                                                }
                                                $no = 1;
                                                foreach ($id_akt as $id) {
                                                    $totalakt = $id->kas_kecil + $id->kas_pada_bank + $id->jaminan_bank + $id->piutang_operasional + $id->piutang_daya_makara + $id->piutang_proyek + $id->piutang_tvui +
                                                        $id->piutang_solar_car + ($id->komputer - $id->akum_peny_komputer) + ($id->fax - $id->akum_peny_fax) + ($id->ac - $id->akum_peny_ac) +
                                                        ($id->furniture - $id->akum_peny_furniture) + ($id->notebook - $id->akum_peny_notebook) + ($id->printer - $id->akum_peny_printer) +
                                                        ($id->kamera_digital - $id->akum_peny_kamera) + ($id->video_kamera - $id->akum_peny_video);
                                                ?>
                                                    <tr>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo $no++ ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo $id->tanggal_masuk ?></td>
                                                        <td class=" text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->kas_kecil) ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->kas_pada_bank) ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->jaminan_bank) ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->piutang_operasional) ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->piutang_daya_makara) ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->piutang_proyek)  ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->piutang_tvui) ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->piutang_solar_car)  ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->komputer)  ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->akum_peny_komputer) ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->fax) ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->akum_peny_fax)  ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->ac) ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->akum_peny_ac)  ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->furniture)  ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->akum_peny_furniture) ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->notebook)  ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->akum_peny_notebook) ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->printer)  ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->akum_peny_printer) ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->kamera_digital) ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->akum_peny_kamera)  ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->video_kamera) ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->akum_peny_video) ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($totalakt) ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <div class="card-header pb-0 px-3 text-center">
                                            <h5 class="mb-2 text-center text-dark text-l font-weight-bolder opacity-8">PASIVA</h5>
                                        </div>
                                        <div class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                            Kewajiban
                                        </div>

                                        <table class="table table-bordered align-items-center mb-5">
                                            <tr>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">No.</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Tanggal Masuk</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Hutang Operasional</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Hutang Gaji</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Hutang Proyek</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Hutang Pada RTV</th>
                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Total Kewajiban</th>
                                            </tr>
                                            <tbody>
                                                <?php
                                                function hargapas($angka)
                                                {
                                                    $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
                                                    return $hasil_rupiah;
                                                }
                                                $no = 1;
                                                foreach ($id_pas as $id) {
                                                    $totalpas = $id->hutang_operasional + $id->hutang_gaji + $id->hutang_proyek + $id->hutang_pada_rtv;                                                        ?>
                                                    <tr>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo $no++ ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo $id->tanggal_masuk ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargapas($id->hutang_operasional) ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargapas($id->hutang_gaji) ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargapas($id->hutang_proyek) ?></td>
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargapas($id->hutang_pada_rtv) ?></td>
                                                        <!-- total kewajiban-->
                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargapas($totalpas) ?></td>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
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
    <script>
        var dp = $("#tgl_awal").datepicker({
            format: "mm - yyyy",
            startView: "months",
            minViewMode: "months"
        });
        var dp = $("#tgl_akhir").datepicker({
            format: "mm - yyyy",
            startView: "months",
            minViewMode: "months"
        });
    </script>
    <!-- Github buttons -->
    <script async defer src="<?php echo base_url() ?>https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo base_url() ?>assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>