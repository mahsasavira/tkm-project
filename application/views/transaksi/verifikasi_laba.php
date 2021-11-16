<body class="g-sidenav-show  bg-gray-100">
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark">Laba Rugi</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Verifikasi Laba Rugi</li>
                    </ol>
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
        <!-- <div class="container-fluid">
            <div class="page-header min-height-250 border-radius-xl mt-4" style="background-image: url('../assets/img/background.png'); background-position-y: 50%;">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
        </div> -->
        <div class="container-fluid">
            <!-- <div class="page-header min-height-250 border-radius-xl mt-4" style="background-image: url('../assets/img/background.png'); background-position-y: 50%;">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div> -->
            <!-- <div class="row"> -->
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <div class="card-header pb-0 px-3 text-center">
                            <h5 class="mb-2 text-center text-dark text-l font-weight-bolder opacity-8">PENDAPATAN</h5>
                        </div>
                        <div class="table-responsive p-0">
                            <div class=" col-12 mb-5 mt-3">
                                <!-- <a type="button" href="<?php echo base_url() ?>transaksi/tambah_pendapatan" class="btn btn-primary btn-sm">
                                    Tambah Pendapatan
                                </a> -->
                            </div>
                            <!-- PENDAPATAN -->
                            <div>
                                <h6 class="mr-5 text-dark text-l font-weight-bolder opacity-8">PENDAPATAN</h6>
                            </div>
                            <table class="table table-bordered align-items-center mb-5">
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">No.</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Tanggal Masuk</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Pendapatan Proyek</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Pendapatan Giro</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Bonus</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Pendapatan Lain-Lain</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Laba Selisih Kurs</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Total Pendapatan</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Aksi</th>
                                </tr>
                                <tbody>
                                    <?php
                                    function hargapen($angka)
                                    {
                                        $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
                                        return $hasil_rupiah;
                                    }
                                    $no = 1;
                                    foreach ($id_pend as $id) {
                                        $totalpen = $id->pendapatan_proyek + $id->pendapatan_giro + $id->bonus + $id->pendapatan_lainlain + $id->laba_selisih_kurs;
                                    ?>
                                        <tr>
                                            <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo $no++ ?></td>
                                            <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo $id->tanggal_masuk ?></td>
                                            <td class=" text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargapen($id->pendapatan_proyek) ?></td>
                                            <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargapen($id->pendapatan_giro) ?></td>
                                            <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargapen($id->bonus) ?></td>
                                            <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargapen($id->pendapatan_lainlain) ?></td>
                                            <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargapen($id->laba_selisih_kurs) ?></td>
                                            <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargapen($totalpen) ?></td>
                                            <td class=" text-center" width="160px">
                                                <a onclick="return confirm('apakah Anda yakin?')" href="<?= site_url('verifikasi/verifikasi_pendapatan/' . $id->id_pendapatan) ?>" class="btn btn-primary btn-xs">
                                                    <i class="fa fa-check"></i> Verifikasi
                                                </a>
                                                <a onclick="return confirm('apakah Anda yakin?')" href="<?= site_url('verifikasi/tolak_pendapatan/' . $id->id_pendapatan) ?>" class="btn btn-danger btn-xs">
                                                    <i class="fa fa-check"></i> Tolak
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination mb-4 mt-2 justify-content-end">
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:;" aria-label="Previous">
                                            <i class="fa fa-angle-left"></i>
                                            <span aria-hidden="True"> &laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:;" aria-label="Next">
                                            <i class="fa fa-angle-right"></i>
                                            <span aria-hidden="True"> &raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <div class="card-header pb-0 px-3 text-center">
                            <h5 class="mb-2 text-center text-dark text-l font-weight-bolder opacity-8">BEBAN</h5>
                        </div>
                        <div class="table-responsive p-0">
                            <div class=" col-12 mb-5 mt-3">
                                <!-- <a type="button" href="<?php echo base_url() ?>transaksi/tambah_beban" class="btn btn-primary btn-sm">
                                    Tambah Beban
                                </a> -->
                            </div>
                            <!-- BEBAN -->
                            <div>
                                <h6 class="mr-5 text-dark text-l font-weight-bolder opacity-8">BEBAN</h6>
                            </div>
                            <table class="table table-bordered align-items-center mb-5">
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">No.</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Tanggal Masuk</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Beban Proyek</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Beban Gaji</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Tunjangan Hari Raya</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Beban Operasional</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Beban Setoran UI</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Beban Penyusutan</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Beban Bonus</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Beban Perlengkapan Kantor</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Beban Pengelolaan Rek.</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Beban Buku Cek</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Beban Pajak</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Beban Lain-Lain</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Rugi Penjualan Aset</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Rugi Selisih Kurs</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Total Beban</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Aksi</th>
                                    <tbody>
                                        <?php
                                        function hargabeban($angka)
                                        {
                                            $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
                                            return $hasil_rupiah;
                                        }
                                        $no = 1;
                                        foreach ($id_beban as $id) {
                                            $totalbeban = $id->beban_proyek + $id->beban_gaji + $id->tunjangan_hari_raya + $id->beban_operasional + $id->beban_setoran_ui +
                                                $id->beban_penyusutan + $id->beban_bonus + $id->beban_perlengkapan_kantor + $id->beban_pengelolaan_rek + $id->beban_buku_cek +
                                                $id->beban_pajak + $id->beban_lainlain + $id->rugi_penjualan_aset + $id->rugi_selisih_kurs;
                                            $lababersih = $totalbeban + $totalpen;
                                        ?>
                                            <tr>
                                                <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo $no++ ?></td>
                                                <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo $id->tanggal_masuk ?></td>
                                                <td class=" text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargabeban($id->beban_proyek) ?></td>
                                                <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargabeban($id->beban_gaji) ?></td>
                                                <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargabeban($id->tunjangan_hari_raya)  ?></td>
                                                <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargabeban($id->beban_operasional)  ?></td>
                                                <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargabeban($id->beban_setoran_ui)  ?></td>
                                                <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargabeban($id->beban_penyusutan)  ?></td>
                                                <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargabeban($id->beban_bonus) ?></td>
                                                <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargabeban($id->beban_perlengkapan_kantor) ?></td>
                                                <td class=" text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargabeban($id->beban_pengelolaan_rek)  ?></td>
                                                <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargabeban($id->beban_buku_cek)  ?></td>
                                                <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargabeban($id->beban_pajak) ?></td>
                                                <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargabeban($id->beban_lainlain) ?></td>
                                                <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargabeban($id->rugi_penjualan_aset) ?></td>
                                                <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargabeban($id->rugi_selisih_kurs)  ?></td>
                                                <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargabeban($totalbeban) ?></td>
                                                <td class=" text-center" width="160px">
                                                    <a onclick="return confirm('apakah Anda yakin?')" href="<?= site_url('verifikasi/verifikasi_beban/' . $id->id_beban) ?>" class="btn btn-primary btn-xs">
                                                        <i class="fa fa-check"></i> Verifikasi
                                                    </a>
                                                    <a onclick="return confirm('apakah Anda yakin?')" href="<?= site_url('verifikasi/tolak_beban/' . $id->id_beban) ?>" class="btn btn-danger btn-xs">
                                                        <i class="fa fa-check"></i> Tolak
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                            </table>

                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination mb-4 mt-4 justify-content-end">
                                <li class="page-item">
                                    <a class="page-link" href="javascript:;" aria-label="Previous">
                                        <i class="fa fa-angle-left"></i>
                                        <span aria-hidden="True"> &laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:;" aria-label="Next">
                                        <i class="fa fa-angle-right"></i>
                                        <span aria-hidden="True"> &raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
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
        </div>
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