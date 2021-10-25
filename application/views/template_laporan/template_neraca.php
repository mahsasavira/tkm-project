<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <img src="<?php echo base_url() ?>assets/img/kop.png">
    <center>
        <h6 class="card-title"><b>LAPORAN NERACA</b></h6>
        <p class="card-description"><b> Periode <?= ($tgl_awal_cetak != '' ? ($tgl_awal_cetak) . ' ' : '') . 's.d. ' . ($tgl_akhir_cetak) ?></b></p><br><br>
    </center>

    <table class="table table-sm">
        <?php function format($angka)
        {
            $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
            return $hasil_rupiah;
        } ?>
        <tr>
            <th style="font-size:12pt;" class="text" align="left"><b>AKTIVA</b></th>
            <th style="font-size:12pt; " class="text-white" align="left"><b>Aktivitas Operasional</b></th>
            <th style="font-size:12pt; " class="text-white" align="left"><b>Aktivitas Operasional</b></th>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Kas Kecil </th>
            <td style="font-size:9pt;" align="left"></td>
            <td style="font-size:9pt;" align="left"><?php echo format($id_akt[0]->kas_kecil) ?></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left"> Kas Pada Bank</th>
            <td style="font-size:9pt;" align="left"></td>
            <td style="font-size:9pt;" align="left"><?php echo format($id_akt[0]->kas_pada_bank) ?></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Piutang Operasional</th>
            <td style="font-size:9pt;" align="left"></td>
            <td style="font-size:9pt;" align="left"><?php echo format($id_akt[0]->piutang_operasional) ?></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Piutang Daya Makara</th>
            <td style="font-size:9pt;" align="left"></td>
            <td style="font-size:9pt;" align="left"><?php echo format($id_akt[0]->piutang_daya_makara) ?></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Piutang Proyek</th>
            <td style="font-size:9pt;" align="left"></td>
            <td style="font-size:9pt;" align="left"><?php echo format($id_akt[0]->piutang_proyek) ?></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Piutang TVUI</th>
            <td style="font-size:9pt;" align="left"></td>
            <td style="font-size:9pt;" align="left"><?php echo format($id_akt[0]->piutang_tvui) ?></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left"> Piutang Solar Car</th>
            <td style="font-size:9pt;" align="left"></td>
            <td style="font-size:9pt;" align="left"><?php echo format($id_akt[0]->piutang_solar_car) ?></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left"><b>PERLENGKAPAN KANTOR</b></th>
            <th style="font-size:9pt; " class="text-white" align="left"><b>PERLENGKAPAN KANTOR</b></th>
            <th style="font-size:9pt; " class="text-white" align="left"><b>PERLENGKAPAN KANTOR</b></th>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Komputer</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_akt[0]->komputer) ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Akum.Peny.-Komputer</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_akt[0]->akum_peny_komputer) ?></td>
            <?php
            $akum_kom = $id_akt[0]->komputer - $id_akt[0]->akum_peny_komputer;
            ?>
            <td style="font-size:9pt;" align="left"><?php echo format($akum_kom) ?></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">FAX</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_akt[0]->fax) ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Akum.Peny.-FAX</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_akt[0]->akum_peny_fax) ?></td>
            <?php
            $akum_fax = $id_akt[0]->fax - $id_akt[0]->akum_peny_fax;
            ?>
            <td style="font-size:9pt;" align="left"><?php echo format($akum_fax) ?></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">AC</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_akt[0]->ac) ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Akum.Peny.-AC</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_akt[0]->akum_peny_ac) ?></td>
            <?php
            $akum_ac = $id_akt[0]->ac - $id_akt[0]->akum_peny_ac;
            ?>
            <td style="font-size:9pt;" align="left"><?php echo format($akum_ac) ?></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Furniture</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_akt[0]->furniture) ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Notebook</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_akt[0]->akum_peny_furniture) ?></td>
            <?php
            $akum_fur = $id_akt[0]->furniture - $id_akt[0]->akum_peny_furniture;
            ?>
            <td style="font-size:9pt;" align="left"><?php echo format($akum_fur) ?></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Kamera Digital</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_akt[0]->kamera_digital) ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Printer</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_akt[0]->akum_peny_kamera) ?></td>
            <?php
            $akum_print = $id_akt[0]->printer - $id_akt[0]->akum_peny_printer;
            ?>
            <td style="font-size:9pt;" align="left"><?php echo format($akum_print) ?></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Kamera Video</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_akt[0]->video_kamera) ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Akum.Peny.-Kamera Video</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_akt[0]->akum_peny_video) ?></td>
            <?php
            $akum_vid = $id_akt[0]->video_kamera - $id_akt[0]->akum_peny_video;
            ?>
            <td style="font-size:9pt;" align="left"><?php echo format($akum_vid) ?></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left"><b>TOTAL AKTIVA</b></th>
            <th style="font-size:9pt; " class="text-white" align="left"><b>TOTAL AKTIVA</b></th>
            <?php
            $totalakt = $id_akt[0]->kas_kecil + $id_akt[0]->kas_pada_bank + $id_akt[0]->jaminan_bank + $id_akt[0]->piutang_operasional + $id_akt[0]->piutang_daya_makara + $id_akt[0]->piutang_proyek + $id_akt[0]->piutang_tvui +
                $id_akt[0]->piutang_solar_car + ($id_akt[0]->komputer - $id_akt[0]->akum_peny_komputer) + ($id_akt[0]->fax - $id_akt[0]->akum_peny_fax) + ($id_akt[0]->ac - $id_akt[0]->akum_peny_ac) +
                ($id_akt[0]->furniture - $id_akt[0]->akum_peny_furniture) + ($id_akt[0]->notebook - $id_akt[0]->akum_peny_notebook) + ($id_akt[0]->printer - $id_akt[0]->akum_peny_printer) +
                ($id_akt[0]->kamera_digital - $id_akt[0]->akum_peny_kamera) + ($id_akt[0]->video_kamera - $id_akt[0]->akum_peny_video);
            ?>
            <td style="font-size:9pt;" align="left"><b><?php echo format($totalakt) ?></b></td>
        </tr>
        <tr>
            <th style="font-size:12pt;" align="left"><b>PASIVA</b></th>
            <th style="font-size:9pt; " class="text-white" align="left"><b>PASIVA</b></th>
            <th style="font-size:9pt; " class="text-white" align="left"><b>PASIVA</b></th>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Kewajiban</th>
            <th style="font-size:9pt; " class="text-white" align="left"><b>Kewajiban</b></th>
            <th style="font-size:9pt; " class="text-white" align="left"><b>Kewajiban</b></th>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Hutang Operasional</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_pas[0]->hutang_operasional); ?></td>
            <td style="font-size:9pt;" align="left"></td>

        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Hutang Gaji</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_pas[0]->hutang_gaji); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Hutang Proyek </th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_pas[0]->hutang_proyek); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Hutang pada rtv</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_pas[0]->hutang_pada_rtv); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left"><b>Total Kewajiban</b></th>
            <td style="font-size:9pt;" align="left"></td>
            <?php
            $totalkewajiban = $id_pas[0]->hutang_operasional + $id_pas[0]->hutang_gaji + $id_pas[0]->hutang_proyek + $id_pas[0]->hutang_pada_rtv;
            ?>
            <td style="font-size:9pt;" align="left"><b><?php echo format($totalkewajiban); ?></b></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left"><b>TOTAL PASIVA</b></th>
            <td style="font-size:9pt;" align="left"></td>
            <?php
            $totalpas = $totalkewajiban;
            ?>
            <td style="font-size:9pt;" align="left"><b><?php echo format($totalpas); ?></b></td>
        </tr>
    </table>
    </div>
    <br><br>
    <div class="px-6 py-6">
        <div class="position-relative mt-12">
            <p style="font-size:9pt;" align="right">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;Dikeluarkan Oleh,</p>
            <p style="font-size:9pt;" align="right">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;Staf Administrasi.</p><br><br><br>
            <p style="font-size:9pt;" align="right">Desianti Nuraini.</p><br>
            <!-- <div class="position-absolute bottom-0 end-0 mb-8" align="right">Dikeluarkan Oleh,</div>
            <div class="position-absolute bottom-0 end-0 mb-8" align="right">Staf Administrasi</div> -->
            <!-- <div class="position-absolute bottom-0 end-0 mb-3" align="right">(Nama Staff)</div> -->
            <!-- <br>
            <br>

            <div class="position-absolute right-7 bottom-0 end-0 mb-9" align="right">Tanggal cetak</div> -->
        </div>
    </div>
    <br>
    <br>
    <p style="font-size:7pt;">*Dokumen ini dihasilkan oleh sistem dan dapat digunakan secara sah tanpa tanda tangan</p>
    <p style="font-size:7pt;">*Apabila terdapat perbedaan informasi pada dokumen ini dengan informasi pada sistem, <br>
        &ensp;maka data yang dianggap valid adalah informasi dari sistem</p><br>

    <p style="font-size:6pt;"><i>Dicetak pada <?php $currentDateTime = date('Y-m-d H:i:s');
                                                echo $currentDateTime;
                                                ?> </i></p>
</body>
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

</html>