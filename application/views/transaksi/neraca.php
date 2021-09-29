<body class="g-sidenav-show  bg-gray-100">
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="<?= 'neraca' ?>">Neraca</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Neraca</li>
                    </ol>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body">
                                <i class="fas fa-search" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Type here...">
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
                        <div class="col-md-12 mt-4">
                            <div class="card">
                                <div class="card-header pb-0 px-3 text-center">
                                    <h5 class="mb-2 text-center text-dark text-l font-weight-bolder opacity-8">AKTIVA</h5>
                                </div>
                                <div class="card-body pt-4 p-3">
                                    <ul class="list-group">
                                        <div class="card-body px-0 pt-0 pb-2">
                                            <div class="table-responsive p-0">
                                                <div class=" col-12 mb-3">
                                                    <a type="button" href="<?= base_url('transaksi/tambah_aktiva'); ?>" class="btn btn-primary btn-sm">
                                                        Tambah Aktiva
                                                    </a>
                                                </div>

                                                <table class="table table-bordered align-items-center mb-5">
                                                    <tr>
                                                        <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">No.</th>
                                                        <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Tanggal Masuk</th>
                                                        <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Kas Kecil</th>
                                                        <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Kas Pada Bank</th>
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
                                                        <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Aksi</th>
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
                                                            $totalakt = $id->kas_kecil + $id->kas_pada_bank + $id->piutang_operasional + $id->piutang_daya_makara + $id->piutang_proyek + $id->piutang_tvui +
                                                                $id->piutang_solar_car + ($id->komputer - $id->akum_peny_komputer) + ($id->fax - $id->akum_peny_fax) + ($id->ac - $id->akum_peny_ac) +
                                                                ($id->furniture - $id->akum_peny_furniture) + ($id->notebook - $id->akum_peny_notebook) + ($id->printer - $id->akum_peny_printer) +
                                                                ($id->kamera_digital - $id->akum_peny_kamera) + ($id->video_kamera - $id->akum_peny_video);
                                                        ?>
                                                            <tr>
                                                                <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo $no++ ?></td>
                                                                <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo $id->tanggal_masuk ?></td>
                                                                <td class=" text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->kas_kecil) ?></td>
                                                                <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo harga($id->kas_pada_bank) ?></td>
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
                                                                <td class=" text-center" width="160px">
                                                                    <form action="<?= site_url('transaksi/hapus_aktiva/') ?>" method="post">
                                                                        <a href="<?= site_url('transaksi/edit_aktiva/' . $id->id_aktiva) ?>" class="btn btn-primary btn-xs">
                                                                            <i class="fa fa-pencil"></i> Edit
                                                                        </a>
                                                                        <input type="hidden" name="id_aktiva" value="<?= $id->id_aktiva ?>">
                                                                        <button onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs">
                                                                            <i class="fa fa-trash"> Hapus</i>
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination mb-3 mt-3 justify-content-end">
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
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mt-4">
                            <div class="card">
                                <div class="card-header pb-0 px-3 text-center">
                                    <h5 class="mb-2 text-center text-dark text-l font-weight-bolder opacity-8">PASIVA</h5>
                                </div>
                                <div class="card-body pt-4 p-3">
                                    <ul class="list-group">
                                        <div class="card-body px-0 pt-0 pb-2">
                                            <div class="table-responsive p-0">
                                                <div class=" col-12 mb-3">
                                                    <a type="button" href="<?php echo base_url() ?>transaksi/tambah_pasiva" class="btn btn-primary btn-sm">
                                                        Tambah Pasiva
                                                    </a>
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
                                                        <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Aksi</th>
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
                                                                <<<<<<< Updated upstream <td class="text-center text-dark text-sm font-weight-bolder opacity-8"><?php echo hargapas($totalpas) ?></td>
                                                                    =======
                                                                    <td class="text-center text-dark text-sm font-weight-bolder opacity-8">Rp.</td>
                                                                    >>>>>>> Stashed changes
                                                                    <td class=" text-center" width="160px">
                                                                        <form action="<?= site_url('transaksi/hapus_pasiva') ?>" method="post">
                                                                            <a href="<?= site_url('transaksi/edit_pasiva/' . $id->id_pasiva) ?>" class="btn btn-primary btn-xs">
                                                                                <i class="fa fa-pencil"></i> Edit
                                                                            </a>
                                                                            <input type="hidden" name="id_pasiva" value="<?= $id->id_pasiva ?>">
                                                                            <button onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs">
                                                                                <i class="fa fa-trash"> Hapus</i>
                                                                            </button>
                                                                        </form>
                                                                    </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination mb-3 mt-3 justify-content-end">
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
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-md-6 mt-4">
            <div class="card">
                <div class="col-md-6 mt-4 pb-0 px-3">
                    <div class="form-group col-5">
                        <label for="example-date-input" class="form-control-label">Tanggal : </label>
                        <input class="form-control" type="date" value="2021-11-23" id="example-date-input">
                    </div>
                </div>
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-2">PASIVA</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <ul class="list-group">
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">ID.</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Nama Perkiraan</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Jumlah</th>
                                    </tr>
                                    <?php
                                    foreach ($id_pas as $id) { ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-0 py-1 mt-4">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-s bold">
                                                            Kewajiban
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-0 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">
                                                            Hutang Operasional
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <div class="form-group col-8" method="post">
                                                        <input type="number" name="nilai" class="form-control" value="<?= $id->hutang_operasional ?>" placeholder="Rp.">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                </a>
                                                <br>
                                                <a href="javascript:;" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-0 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">
                                                            Hutang Gaji
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <div class="form-group col-8" method="post">
                                                        <input type="number" name="nilai" class="form-control" value="<?= $id->hutang_gaji ?>" placeholder="Rp.">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                </a>
                                                <br>
                                                <a href="javascript:;" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-0 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">
                                                            Hutang Proyek
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <div class="form-group col-8" method="post">
                                                        <input type="number" name="nilai" class="form-control" value="<?= $id->hutang_proyek ?>" placeholder="Rp.">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                </a>
                                                <br>
                                                <a href="javascript:;" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-0 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">
                                                            Hutang Pada RTV
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <div class="form-group col-8" method="post">
                                                        <input type="number" name="nilai" class="form-control" value="<?= $id->hutang_pada_rtv ?>" placeholder="Rp.">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                </a>
                                                <br>
                                                <a href="javascript:;" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-0 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">
                                                            Total Kewajiban
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <div class="form-group col-8" method="post">
                                                        <input type="number" name="nilai" class="form-control" value="<?= $id->hutang_pada_rtv ?>" placeholder="Rp.">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-0 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">
                                                            Total Modal
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <div class="form-group col-8" method="post">
                                                        <input type="number" name="nilai" class="form-control" value="<?= $id->hutang_pada_rtv ?>" placeholder="Rp.">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-0 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-s">
                                                            TOTAL PASIVA
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <div class="form-group col-8" method="post">
                                                        <input type="number" name="nilai" class="form-control" value="<?= $id->hutang_pada_rtv ?>" placeholder="Rp.">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </table>
                                <div class="col-md-0 mt-4">
                                    <div class="col-md-4">
                                        <ul class="list-group">
                                            <div class="card-body px-1 pt-1 pb-0">
                                                <center>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group col-4">
                                                                <button type="submit" class="btn btn-success">Simpan</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group col-4">
                                                                <button type="reset" class="btn btn-danger">Batal</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </center>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div> -->


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