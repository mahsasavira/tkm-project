<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Components Documentation - Soft UI Dashboard by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="offline-doc">
    <div class="page-header clear-filter">
        <div class="text-center w-100">
            <div class="col-md-12 mx-auto my-6">
                <div class="brand">
                    <h4 class="title">
                        LAPORAN NERACA SALDO
                    </h4>
                    <h5>PT. TIRTA KENCANA MULIA</h5>
                    <h6>Periode ....</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="px-6">
        <table class="table table-bordered text-dark">
            <tbody>
                <tr>
                    <th scope="col" class="text">AKTIVA</th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th colspan="1">Kas Kecil </th>
                    <td colspan="1">...</td>
                    <td colspan="1"><?php echo $id_akt[0]->kas_kecil ?></td>
                </tr>
                <tr>
                    <th colspan="1"> Kas Pada Bank</th>
                    <td colspan="1">...</td>
                    <td colspan="1"><?php echo $id_akt[0]->kas_pada_bank ?></td>
                </tr>
                <tr>
                    <th colspan="1">Piutang Operasional</th>
                    <td colspan="1">...</td>
                    <td colspan="1"><?php echo $id_akt[0]->piutang_operasional ?></td>
                </tr>
                <tr>
                    <th colspan="1">Piutang Daya Makara</th>
                    <td colspan="1">...</td>
                    <td colspan="1">(nilai Piutang Daya Makara)</td>
                </tr>
                <tr>
                    <th colspan="1">Piutang Proyek</th>
                    <td colspan="1">...</td>
                    <td colspan="1">(nilai Piutang Proyek)</td>
                </tr>
                <tr>
                    <th colspan="1">Piutang TVUI</th>
                    <td colspan="1">...</td>
                    <td colspan="1">(nilai Piutang TVUI)</td>
                </tr>
                <tr>
                    <th colspan="1"> Piutang Solar Car</th>
                    <td colspan="1">...</td>
                    <td colspan="1">(nilai Piutang Solar Car)</td>
                </tr>
                <tr>
                    <th colspan="6" class="text-white">abaikan</th>
                </tr>
                <tr>
                    <th colspan="6" class="text-uppercase">Perlengkapan Kantor</th>
                </tr>
                <tr>
                    <th colspan="1">Komputer</th>
                    <td colspan="1">...</td>
                    <td colspan="1">(nilai komputer)</td>
                </tr>
                <tr>
                    <th colspan="1">Akum.Peny.-Komputer</th>
                    <td colspan="1">...</td>
                    <td colspan="1">(nilai Akum.Peny.-Komputer)</td>
                </tr>
                <tr>
                    <th colspan="1">FAX</th>
                    <td colspan="1">...</td>
                    <td colspan="1">(nilai fax)</td>
                </tr>
                <tr>
                    <th colspan="1">Akum.Peny.-FAX</th>
                    <td colspan="1">...</td>
                    <td colspan="1">(nilai Akum.Peny.-Fax)</td>
                </tr>
                <tr>
                    <th colspan="1">AC</th>
                    <td colspan="1">...</td>
                    <td colspan="1">(nilai AC)</td>
                </tr>
                <tr>
                    <th colspan="1">Akum.Peny.-AC</th>
                    <td colspan="1">...</td>
                    <td colspan="1">(nilai Akum.Peny.-AC)</td>
                </tr>
                <tr>
                    <th colspan="1">Furniture</th>
                    <td colspan="1">...</td>
                    <td colspan="1">(nilai Akum.Peny.-Furniture)</td>
                </tr>
                <tr>
                    <th colspan="1">Notebook</th>
                    <td colspan="1">...</td>
                    <td colspan="1">(nilai Akum.Peny.-Notebook)</td>
                </tr>
                <tr>
                    <th colspan="1">Kamera Digital</th>
                    <td colspan="1">...</td>
                    <td colspan="1">(nilai Akum.Peny.-Kamera Digital)</td>
                </tr>
                <tr>
                    <th colspan="1">Printer</th>
                    <td colspan="1">...</td>
                    <td colspan="1">(nilai Akum.Peny.-Printer)</td>
                </tr>
                <tr>
                    <th colspan="1">Kamera Video</th>
                    <td colspan="1">...</td>
                    <td colspan="1">(nilai kamera Video)</td>
                </tr>
                <tr>
                    <th colspan="1">Akum.Peny.-Kamera Video</th>
                    <td colspan="1">...</td>
                    <td colspan="1">(nilai Akum.Peny.-Kamera Video)</td>
                </tr>
                <tr>
                    <th colspan="1">TOTAL AKTIVA</th>
                    <td colspan="1"></td>
                    <td colspan="1">(nilai TOTAL)</td>
                </tr>
                <tr>
                    <th colspan="6" class="text-white">abaikan</th>
                </tr>
                <tr>
                    <th colspan="1">PASIVA</th>
                </tr>
                <tr>
                    <th colspan="1">Kewajiban</th>
                </tr>
                <tr>
                    <th colspan="1">Hutang Operasional</th>
                    <td colspan="1">(nilai Hutang operasional)</td>
                    <td colspan="1">...</td>

                </tr>
                <tr>
                    <th colspan="1">Hutang Gaji</th>
                    <td colspan="1">(nilai Hutang Gaji)</td>
                    <td colspan="1">...</td>
                </tr>
                <tr>
                    <th colspan="1">Hutang Proyek </th>
                    <td colspan="1">(nilai Hutang Proyek)</td>
                    <td colspan="1">...</td>
                </tr>
                <tr>
                    <th colspan="1">Hutang pada rtv</th>
                    <td colspan="1">(nilai Hutang pada rtv)</td>
                    <td colspan="1">...</td>
                </tr>
                <tr>
                    <th colspan="1">Total Kewajiban </th>
                    <td colspan="1">...</td>
                    <td colspan="1">(nilai total Kewajiban )</td>
                </tr>
                <tr>
                    <th colspan="1">TOTAL MODAL</th>
                    <td colspan="1">...</td>
                    <td colspan="1">(nilai total modal)</td>
                </tr>
                <tr>
                    <th colspan="1">TOTAL PASIVA</th>
                    <td colspan="1">...</td>
                    <td colspan="1">(nilai TOTAL PASIVA)</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="px-6 py-6">
        <div class="position-relative mt-12">
            <div class="position-absolute right-7 bottom-0 end-0 mb-9">Tanggal cetak</div>
            <div class="position-absolute bottom-0 end-0 mb-8">Staff Administrasi</div>
            <div class="position-absolute bottom-0 end-0 mb-3">(nama staff))</div>
            <br>
            <br>
        </div>

    </div>


    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>