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
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Laporan Arus Kas</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Laporan Arus Kas</h6>
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
                                        <form action="<?php echo base_url("Laporan/laporan_arus_kas") ?>" method="POST">
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
                                        <form action="<?php echo base_url("laporan/laporan_aruskas_pdf") ?>" method="POST">
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
                                            <h4 class="card-title mt-4"><b>LAPORAN ARUS KAS</b></h4>
                                            <!-- <p class="card-description"><b> Periode s.d.</b></p><br><br> -->
                                        </center>
                                        <br>
                                        <br>
                                        <table class="table table-bordered align-items-center mb-5">
                                            <tbody>
                                                <?php function format($angka)
                                                {
                                                    $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
                                                    return $hasil_rupiah;
                                                } ?>

                                                <tr>
                                                    <th style="font-size:12pt;" scope="col-1" class="text" align="left">Aktivitas Operasional</th>
                                                </tr>
                                                <tr>
                                                    <th style="font-size:11pt;" colspan="1" align="left">Laba Bersih Bulan ...</th>
                                                    <?php
                                                    $totalpendapatan = $id_pend[0]->pendapatan_proyek + $id_pend[0]->pendapatan_giro + $id_pend[0]->bonus + $id_pend[0]->pendapatan_lainlain + $id_pend[0]->laba_selisih_kurs;
                                                    ?>
                                                    <?php
                                                    $totalbeban = $id_beban[0]->beban_proyek +
                                                        $id_beban[0]->beban_gaji +
                                                        $id_beban[0]->tunjangan_hari_raya +
                                                        $id_beban[0]->beban_operasional +
                                                        $id_beban[0]->beban_setoran_ui +
                                                        $id_beban[0]->beban_penyusutan +
                                                        $id_beban[0]->beban_bonus +
                                                        $id_beban[0]->beban_perlengkapan_kantor +
                                                        $id_beban[0]->beban_pengelolaan_rek +
                                                        $id_beban[0]->beban_buku_cek +
                                                        $id_beban[0]->beban_pajak +
                                                        $id_beban[0]->beban_lainlain +
                                                        $id_beban[0]->rugi_penjualan_aset +
                                                        $id_beban[0]->rugi_selisih_kurs;
                                                    ?>
                                                    <?php
                                                    $lababersih = $totalpendapatan - $totalbeban;
                                                    ?>
                                                    <td style="font-size:11pt;" colspan="12" align="right"><?php echo format($lababersih); ?></td>
                                                </tr>
                                                <tr>
                                                    <th style="font-size:11pt;" colspan="1" align="left">Penurunan Piutang</th>
                                                    <?php
                                                    $penurunanpiutang = $id_akt[0]->jaminan_bank +
                                                        $id_akt[0]->piutang_daya_makara +
                                                        $id_akt[0]->piutang_proyek +
                                                        $id_akt[0]->piutang_tvui +
                                                        $id_akt[0]->piutang_solar_car +
                                                        $id_akt[0]->piutang_operasional;
                                                    ?>
                                                    <td style="font-size:11pt;" colspan="12" align="right"><?php echo format($penurunanpiutang); ?></td>
                                                </tr>
                                                <tr>
                                                    <th style="font-size:11pt;" colspan="1" align="left">Kenaikan Hutang Dagang</th>
                                                    <?php
                                                    $kenaikanHutang = $id_pas[0]->hutang_operasional +
                                                        $id_pas[0]->hutang_gaji +
                                                        $id_pas[0]->hutang_proyek +
                                                        $id_pas[0]->hutang_pada_rtv;
                                                    ?>
                                                    <td style="font-size:11pt;" colspan="12" align="right"><?php echo format($kenaikanHutang); ?></td>
                                                </tr>
                                                <tr>
                                                    <th style="font-size:11pt;" colspan="1" align="left">Arus Kas Aktivitas Operasional</th>
                                                    <?php
                                                    $totalOperasional = $lababersih + $penurunanpiutang + $kenaikanHutang;
                                                    ?>
                                                    <td style="font-size:11pt;" colspan="12" align="right"><?php echo format($totalOperasional); ?></td>
                                                </tr>
                                                <tr>
                                                    <th style="font-size:12pt;" scope="col-1" class="text" align="left">Aktivitas Investasi</th>
                                                </tr>
                                                <tr>
                                                    <th style="font-size:11pt;" colspan="1" align="left">Akum.Peny. Peralatan Kantor</th>
                                                    <?php
                                                    $akumpenyusutan = ($id_akt[0]->komputer - $id_akt[0]->akum_peny_komputer) +
                                                        ($id_akt[0]->fax - $id_akt[0]->akum_peny_fax) +
                                                        ($id_akt[0]->ac - $id_akt[0]->akum_peny_ac) +
                                                        ($id_akt[0]->furniture - $id_akt[0]->akum_peny_furniture) +
                                                        ($id_akt[0]->notebook - $id_akt[0]->akum_peny_notebook) +
                                                        ($id_akt[0]->printer - $id_akt[0]->akum_peny_printer) +
                                                        ($id_akt[0]->kamera_digital - $id_akt[0]->akum_peny_kamera) +
                                                        ($id_akt[0]->video_kamera - $id_akt[0]->akum_peny_video);
                                                    ?>
                                                    <td style="font-size:11pt;" colspan="12" align="right"><?php echo format($akumpenyusutan); ?></td>
                                                </tr>
                                                <tr>
                                                    <th style="font-size:11pt;" colspan="1" align="left">Arus Kas Aktivitas Investasi</th>
                                                    <?php
                                                    $totalInvestasi = $akumpenyusutan;
                                                    ?>
                                                    <td style="font-size:11pt;" colspan="12" align="right"><?php echo format($totalInvestasi); ?></td>
                                                </tr>
                                                <tr>
                                                    <th style="font-size:12pt;" scope="col-1" class="text" align="left">Aktivitas Pendanaan</th>
                                                </tr>
                                                <tr>
                                                    <th style="font-size:11pt;" colspan="1" align="left">Kas Kecil</th>

                                                    <td style="font-size:11pt;" colspan="12" align="right"><?php echo format($id_akt[0]->kas_kecil); ?></td>
                                                </tr>
                                                <tr>
                                                    <th style="font-size:11pt;" colspan="1" align="left">Kas Kecil</th>

                                                    <td style="font-size:11pt;" colspan="12" align="right"><?php echo format($id_akt[0]->kas_pada_bank); ?></td>
                                                </tr>
                                                <tr>
                                                    <th style="font-size:11pt;" colspan="1" align="left">Arus Kas Pendanaan</th>
                                                    <?php
                                                    $totalPendanaan = $id_akt[0]->kas_kecil + $id_akt[0]->kas_pada_bank;
                                                    ?>
                                                    <td style="font-size:11pt;" colspan="12" align="right"><?php echo format($totalPendanaan); ?></td>
                                                </tr>
                                                <tr>
                                                    <th style="font-size:11pt;" colspan="1" align="left">Penambahan Kas</th>
                                                    <?php
                                                    $penambahan_kas = $totalOperasional + $totalInvestasi + $totalPendanaan;
                                                    ?>
                                                    <td style="font-size:11pt;" colspan="12" align="right"><?php echo format($penambahan_kas); ?></td>
                                                </tr>
                                                <tr>
                                                    <th style="font-size:11pt;" colspan="1" align="left">Saldo Akhir (bulan/tahun)</th>
                                                    <td style="font-size:11pt;" colspan="12" align="right"><?php echo format(699305923); ?></td>
                                                </tr>
                                                <tr>
                                                    <th style="font-size:11pt;" colspan="1" align="left">Saldo Awal Bulan/tahun</th>
                                                    <td style="font-size:11pt;" colspan="12" align="right"><?php echo format($penambahan_kas + 699305923); ?></td>
                                                </tr>
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

</html>