<?php if ($this->session->userdata('level') == 2) { ?><?php } ?>

<body class="g-sidenav-show  bg-gray-100">
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Neraca</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Neraca</h6>
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
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
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
                        <div class="col-md-6 mt-4">
                            <div class="card">
                                <div class="col-md-6 mt-4 pb-0 px-3">
                                    <div class="form-group col-5">
                                        <label for="example-date-input" class="form-control-label">Tanggal : </label>
                                        <input class="form-control" type="date" value="2021-11-23" id="example-date-input">
                                    </div>
                                </div>
                                <div class="card-header pb-0 px-3">
                                    <h6 class="mb-2">AKTIVA</h6>
                                </div>
                                <div class="card-body pt-4 p-3">
                                    <ul class="list-group">
                                        <div class="card-body px-0 pt-0 pb-2">
                                            <div class="table-responsive p-0">
                                                <table class="table align-items-center mb-0">
                                                    <form action="" method="post">
                                                        <tr>
                                                            <!-- <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">ID.</th> -->
                                                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Nama Perkiraan</th>
                                                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Jumlah</th>

                                                        </tr>
                                                        <?php
                                                        foreach ($id_akt as $id) { ?>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex px-0 py-1">
                                                                        <div class="d-flex flex-column justify-content-center">
                                                                            <h6 class="mb-0 text-sm">
                                                                                Kas Kecil
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="kas_kecil" class="form-control" value="<?= $id->kas_kecil ?>" placeholder="Rp.">
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
                                                                                Kas Pada Bank
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="kas_pada_bank" class="form-control" value="<?= $id->kas_pada_bank ?>" placeholder="Rp.">
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
                                                                                Piutang Operasional
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="piutang_operasional" class="form-control" value="<?= $id->piutang_operasional ?>" placeholder="Rp.">
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
                                                                                Piutang Daya Makara
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="piutang_daya_makara" class="form-control" value="<?= $id->piutang_daya_makara ?>" placeholder="Rp.">
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
                                                                                Piutang Proyek
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="piutang_proyek" class="form-control" value="<?= $id->piutang_proyek ?>" placeholder="Rp.">
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
                                                                                Piutang TV UI
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="piutang_tvui" class="form-control" value="<?= $id->piutang_tvui ?>" placeholder="Rp.">
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
                                                                                Piutang Solar Car
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="piutang_solar_car" class="form-control" value="<?= $id->piutang_solar_car ?>" placeholder="Rp.">
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
                                                                    <div class="d-flex px-0 py-1 mt-4">
                                                                        <div class="d-flex flex-column justify-content-center">
                                                                            <h6 class="mb-0 text-s bold">
                                                                                Perlengkapan Kantor
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
                                                                                Komputer
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="komputer" class="form-control" value="<?= $id->komputer ?>" placeholder="Rp.">
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
                                                                                Akum.Peny.-Komputer
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="akum_peny_komputer" class="form-control" value="<?= $id->akum_peny_komputer ?>" placeholder="Rp.">
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
                                                                                FAX
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="fax" class="form-control" value="<?= $id->fax ?>" placeholder="Rp.">
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
                                                                                Akum.Peny.-Fax
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="akum_peny_fax" class="form-control" value="<?= $id->akum_peny_fax ?>" placeholder="Rp.">
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
                                                                                Furniture
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="furniture" class="form-control" value="<?= $id->furniture ?>" placeholder="Rp.">
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
                                                                                Akum.Peny.-Furniture
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="akum_peny_furniture" class="form-control" value="<?= $id->akum_peny_furniture ?>" placeholder="Rp.">
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
                                                                                Notebook
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="notebook" class="form-control" value="<?= $id->notebook ?>" placeholder="Rp.">
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
                                                                                Akum.Peny.-Notebook
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="akum_peny_notebook" class="form-control" value="<?= $id->akum_peny_notebook ?>" placeholder="Rp.">
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
                                                                                Kamera Digital
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="kamera_digital" class="form-control" value="<?= $id->kamera_digital ?>" placeholder="Rp.">
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
                                                                                Akum.Peny.-Kamera Digital
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="akum_peny_kamera" class="form-control" value="<?= $id->akum_peny_kamera ?>" placeholder="Rp.">
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
                                                                                Printer
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="printer" class="form-control" value="<?= $id->printer ?>" placeholder="Rp.">
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
                                                                                Akum.Peny.-Printer
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="akum_peny_printer" class="form-control" value="<?= $id->akum_peny_printer ?>" placeholder="Rp.">
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
                                                                                Kamera Video
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="video_kamera" class="form-control" value="<?= $id->video_kamera ?>" placeholder="Rp.">
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
                                                                                Akum.Peny.-Kamera Video
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <input type="number" name="akum_peny_video" class="form-control" value="<?= $id->akum_peny_video ?>" placeholder="Rp.">
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
                                                                            <h6 class="mb-0 text-s">
                                                                                TOTAL AKTIVA
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->akum_peny_video ?>" placeholder="Rp."> -->
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </form>

                                                </table>
                                                <!-- <nav aria-label="Page navigation example">
                                                    <ul class="pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript:;" aria-label="Previous">
                                                                <i class="fa fa-angle-left"></i>
                                                                <span class="sr-only">Prev</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript:;" aria-label="Next">
                                                                <i class="fa fa-angle-right"></i>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav> -->
                                                <div class="col-md-0 mt-4">
                                                    <div class="col-md-4">
                                                        <ul class="list-group">
                                                            <div class="card-body px-1 pt-1 pb-0">
                                                                <center>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group col-4">
                                                                                <button type="submit" href="<?php echo site_url('neraca/') ?>" class="btn btn-success">Simpan</button>
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
                        </div>
                        <div class="col-md-6 mt-4">
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
                                                        <!-- <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">ID.</th> -->
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
                                                                        <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->hutang_pada_rtv ?>" placeholder="Rp."> -->
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
                                                                        <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->hutang_pada_rtv ?>" placeholder="Rp."> -->
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
                                                                        <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->hutang_pada_rtv ?>" placeholder="Rp."> -->
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
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- tambah aktiva -->

        <body class="g-sidenav-show  bg-gray-100">
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
                <!-- Navbar -->
                <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
                    <div class="container-fluid py-1 px-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Neraca</li>
                            </ol>
                            <h6 class="font-weight-bolder mb-0">Neraca</h6>
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
                                    <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
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
                                            <h5 class="mb-2 text-center text-uppercase text-dark text-l font-weight-bolder opacity-8">Tambah Aktiva</h5>
                                        </div>
                                        <form action="" method="post">
                                            <div class="card-body pt-4 p-3">
                                                <ul class="list-group">
                                                    <div class="card-body px-0 pt-0 pb-2">
                                                        <div class="table-responsive p-0">
                                                            <div class="col-md-6 mt-4 pb-0 px-3">
                                                                <div class="form-group col-5">
                                                                    <label for="example-date-input" class="form-control-label">Tanggal : </label>
                                                                    <input class="form-control" type="date" value="2021-11-23" id="example-date-input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                            <div class="col-md-0 mt-4">
                                                <div class="col-md-2">
                                                    <ul class="list-group">
                                                        <div class="card-body px-3 pt-1 pb-0">
                                                            <center>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group col-6">
                                                                            <button type="submit" href="#" class="btn btn-success">Simpan</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
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
                                        </form>
                                    </div>
                                </div>


                                <!-- BACKUP PENDAPATAN DAN BEBAN -->
                                <div class="card-body pt-4 p-3">
                                    <form action="" method="post">
                                        <ul class="list-group">
                                            <div class="card-body px-0 pt-0 pb-2">
                                                <div class="table-responsive p-0">
                                                    <table class="table align-items-center mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <h6 href="javascript:;" class="text-secondary font-weight-bold text-s" data-toggle="tooltip" data-original-title="pendapatan">
                                                                    Pendapatan
                                                                </h6>
                                                            <tr>
                                                                <?php
                                                                foreach ($id_pend as $id) { ?>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex px-0 py-1">
                                                                        <div class="d-flex flex-column justify-content-center">
                                                                            <h6 class="mb-0 text-sm">
                                                                                Pendapatan Proyek
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                                Rp. <?= $id->pendapatan_proyek ?>
                                                                            </div>
                                                                            <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->pendapatan_proyek ?>" placeholder="Rp."> -->
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
                                                                                Pendapatan Giro
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                                Rp. <?= $id->pendapatan_giro ?>
                                                                            </div>
                                                                            <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->pendapatan_giro ?>" placeholder="Rp."> -->
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
                                                                                Bonus
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                                Rp. <?= $id->bonus ?>
                                                                            </div>
                                                                            <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->bonus ?>" placeholder="Rp."> -->
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
                                                                                Pendapatan Lain-Lain
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                                Rp. <?= $id->pendapatan_lainlain ?>
                                                                            </div>
                                                                            <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->pendapatan_lainlain ?>" placeholder="Rp."> -->
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
                                                                                Laba Selisih Kurs
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                                Rp. <?= $id->laba_selisih_kurs ?>
                                                                            </div>
                                                                            <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->laba_selisih_kurs ?>" placeholder="Rp."> -->
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
                                                                            <h6 class="mb-0 text-s">
                                                                                TOTAL PENDAPATAN
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <div class="form-group col-8" method="post">
                                                                            <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                                Rp.
                                                                            </div>
                                                                            <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->laba_selisih_kurs ?>" placeholder="Rp."> -->
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                        </tr>

                                                        <!-- BEBAN -->
                                                        <tr>
                                                            <td>
                                                                <h6 href="javascript:;" class="text-secondary font-weight-bold text-s mt-5" data-toggle="tooltip" data-original-title="pendapatan">
                                                                    Beban
                                                                </h6>
                                                            </td>
                                                        <tr>
                                                            <?php
                                                            foreach ($id_beban as $id) { ?>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex px-0 py-1">
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <h6 class="mb-0 text-sm">
                                                                            Beban Proyek
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <div class="form-group col-8" method="post">
                                                                        <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                            Rp. <?= $id->beban_proyek ?>
                                                                        </div>
                                                                        <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->beban_proyek ?>" placeholder="Rp."> -->
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
                                                                            Beban Gaji
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <div class="form-group col-8" method="post">
                                                                        <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                            Rp. <?= $id->beban_gaji ?>
                                                                        </div>
                                                                        <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->beban_gaji ?>" placeholder="Rp."> -->
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
                                                                            Tunjangan Hari Raya
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <div class="form-group col-8" method="post">
                                                                        <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                            Rp. <?= $id->tunjangan_hari_raya ?>
                                                                        </div>
                                                                        <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->tunjangan_hari_raya ?>" placeholder="Rp."> -->
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
                                                                            Beban Operasional
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <div class="form-group col-8" method="post">
                                                                        <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                            Rp. <?= $id->beban_operasional ?>
                                                                        </div>
                                                                        <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->beban_operasional ?>" placeholder="Rp."> -->
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
                                                                            Beban Setoran UI
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <div class="form-group col-8" method="post">
                                                                        <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                            Rp. <?= $id->beban_setoran_ui ?>
                                                                        </div>
                                                                        <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->beban_setoran_ui ?>" placeholder="Rp."> -->
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
                                                                            Beban Bonus
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <div class="form-group col-8" method="post">
                                                                        <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                            Rp. <?= $id->beban_bonus ?>
                                                                        </div>
                                                                        <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->beban_bonus ?>" placeholder="Rp."> -->
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
                                                                            Beban Perlengkapan Kantor
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <div class="form-group col-8" method="post">
                                                                        <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                            Rp. <?= $id->beban_perlengkapan_kantor ?>
                                                                        </div>
                                                                        <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->beban_perlengkapan_kantor ?>" placeholder="Rp."> -->
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
                                                                            Beban Penyusutan
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <div class="form-group col-8" method="post">
                                                                        <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                            Rp. <?= $id->beban_penyusutan ?>
                                                                        </div>
                                                                        <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->beban_penyusutan ?>" placeholder="Rp."> -->
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
                                                                            Beban Pengelolaan Rek.
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <div class="form-group col-8" method="post">
                                                                        <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                            Rp. <?= $id->beban_pengelolaan_rek ?>
                                                                        </div>
                                                                        <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->beban_pengelolaan_rek ?>" placeholder="Rp."> -->
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
                                                                            Beban Buku Cek
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <div class="form-group col-8" method="post">
                                                                        <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                            Rp. <?= $id->beban_buku_cek ?>
                                                                        </div>
                                                                        <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->beban_buku_cek ?>" placeholder="Rp."> -->
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
                                                                            Beban Pajak
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <div class="form-group col-8" method="post">
                                                                        <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                            Rp. <?= $id->beban_pajak ?>
                                                                        </div>
                                                                        <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->beban_pajak ?>" placeholder="Rp."> -->
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
                                                                            Beban Lain-Lain
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <div class="form-group col-8" method="post">
                                                                        <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                            Rp. <?= $id->beban_lainlain ?>
                                                                        </div>
                                                                        <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->beban_lainlain ?>" placeholder="Rp."> -->
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
                                                                            Rugi Selisih Kurs
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <div class="form-group col-8" method="post">
                                                                        <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                            Rp. <?= $id->rugi_selisih_kurs ?>
                                                                        </div>
                                                                        <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->rugi_selisih_kurs ?>" placeholder="Rp."> -->
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
                                                                            Rugi Penjualan Aset
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <div class="form-group col-8" method="post">
                                                                        <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                            Rp. <?= $id->rugi_penjualan_aset ?>
                                                                        </div>
                                                                        <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->rugi_penjualan_aset ?>" placeholder="Rp."> -->
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
                                                                            Total Beban
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <div class="form-group col-8" method="post">
                                                                        <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                            Rp.
                                                                        </div>
                                                                        <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->rugi_selisih_kurs ?>" placeholder="Rp."> -->
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex px-0 py-1">
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <h6 class="mb-0 text-s">
                                                                            LABA BERSIH
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <div class="form-group col-8" method="post">
                                                                        <div class="text-dark text-sm font-weight-bolder opacity-8">
                                                                            Rp.
                                                                        </div>
                                                                        <!-- <input type="number" name="nilai" class="form-control" value="<?= $id->rugi_selisih_kurs ?>" placeholder="Rp."> -->
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </ul>
                                        <div class="col-md-0 mt-4">
                                            <div class="col-md-3">
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
                                                                        <button type="button" class="btn btn-danger">Batal</button>
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


                                <!-- LABA RUGI -->

                                <body class="g-sidenav-show  bg-gray-100">
                                    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
                                        <!-- Navbar -->
                                        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" style="background-image: url('../assets/img/background.png'); background-position-y: 50%;" id="navbarBlur" navbar-scroll="true">
                                            <div class="container-fluid py-1 px-3">
                                                <nav aria-label="breadcrumb">
                                                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                                                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="<?= 'labarugi' ?>">Laba Rugi</a></li>

                                                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Laba Rugi</li>
                                                    </ol>
                                                    <!-- <h6 class="font-weight-bolder text-white mb-0">Laba Rugi</h6> -->
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
                                                            <a href="<?= site_url('auth/logout') ?>" class="nav-link text-body font-weight-bold px-0">
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
                                            <!-- <div class="page-header min-height-250 border-radius-xl mt-4" style="background-image: url('../assets/img/background.png'); background-position-y: 50%;">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div> -->
                                            <!-- <div class="row"> -->
                                            <div class="col-md-12 mt-4">
                                                <div class="card">
                                                    <div class="card-header pb-0 px-3">
                                                        <div class="card-header pb-0 px-3 text-center">
                                                            <h5 class="mb-2 text-center text-dark text-l font-weight-bolder opacity-8">PENDAPATAN & BEBAN</h5>
                                                        </div>
                                                        <div class=" col-12 mb-5 mt-3">
                                                            <a type="button" href="<?php echo base_url() ?>transaksi/tambah_pendapatan" class="btn btn-primary btn-sm">
                                                                Tambah Pendapatan & Beban
                                                            </a>
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
                                                                $no = 1;
                                                                foreach ($id_pend as $id) { ?>
                                                                    <tr>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo $no++ ?></td>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo $id->tanggal_masuk ?></td>
                                                                        <td class=" text-center text-dark text-sm font-weight-bolder opacity-8">Rp. <?php echo $id->pendapatan_proyek ?></td>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8">Rp. <?php echo $id->pendapatan_giro ?></td>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8">Rp. <?php echo $id->bonus ?></td>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8">Rp. <?php echo $id->pendapatan_lainlain ?></td>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8">Rp. <?php echo $id->laba_selisih_kurs ?></td>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8">Rp. </td>
                                                                        <td class=" text-center" width="160px">
                                                                            <form action="<?= site_url('dashboard/') ?>" method="post">
                                                                                <a href="<?= site_url('transaksi/neraca/') ?>" class="btn btn-primary btn-xs">
                                                                                    <i class="fa fa-pencil"></i> Edit
                                                                                </a>
                                                                                <input type="hidden" name="id_pendapatan" value="<?= $id->id_pendapatan ?>">
                                                                                <button onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs">
                                                                                    <i class="fa fa-trash"> Hapus</i>
                                                                                </button>
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>

                                                        <!-- BEBAN -->
                                                        <div>
                                                            <h6 class="mr-5 text-dark text-l font-weight-bolder opacity-8">BEBAN</h6>
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
                                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">No.</th>
                                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Tanggal Masuk</th>
                                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Pendapatan Proyek</th>
                                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Pendapatan Giro</th>
                                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Bonus</th>
                                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Pendapatan Lain-Lain</th>
                                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Laba Selisih Kurs</th>
                                                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Total Pendapatan</th>
                                                            </tr>
                                                            <tbody>
                                                                <?php
                                                                $no = 1;
                                                                foreach ($id_pend as $id) { ?>
                                                                    <tr>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo $no++ ?></td>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo $id->tanggal_masuk ?></td>
                                                                        <td class=" text-center text-dark text-sm font-weight-bolder opacity-8">Rp. <?php echo $id->pendapatan_proyek ?></td>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8">Rp. <?php echo $id->pendapatan_giro ?></td>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8">Rp. <?php echo $id->bonus ?></td>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8">Rp. <?php echo $id->pendapatan_lainlain ?></td>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8">Rp. <?php echo $id->laba_selisih_kurs ?></td>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo $no++ ?></td>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8"> <?php echo $id->tanggal_masuk ?></td>
                                                                        <td class=" text-center text-dark text-sm font-weight-bolder opacity-8">Rp. <?php echo $id->pendapatan_proyek ?></td>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8">Rp. <?php echo $id->pendapatan_giro ?></td>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8">Rp. <?php echo $id->bonus ?></td>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8">Rp. <?php echo $id->pendapatan_lainlain ?></td>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8">Rp. <?php echo $id->laba_selisih_kurs ?></td>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8">Rp. </td>
                                                                        <td class="text-center text-dark text-sm font-weight-bolder opacity-8">Rp. </td>
                                                                        <td class=" text-center" width="160px">
                                                                            <form action="<?= site_url('dashboard/') ?>" method="post">
                                                                                <a href="<?= site_url('transaksi/neraca/') ?>" class="btn btn-primary btn-xs">
                                                                                    <i class="fa fa-pencil"></i> Edit
                                                                                </a>
                                                                                <input type="hidden" name="id_pendapatan" value="<?= $id->id_pendapatan ?>">
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