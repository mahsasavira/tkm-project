<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <img src="<?php echo base_url() ?>assets/img/kop.png">
    <center>
        <h6 class="card-title"><b>LAPORAN LABA RUGI</b></h6>
        <p class="card-description"><b> Periode <?= ($tgl_awal_cetak != '' ? ($tgl_awal_cetak) . ' ' : '') . 's.d. ' . ($tgl_akhir_cetak) ?></b></p><br><br>
    </center>

    <table class="table table-sm">
        <?php function format($angka)
        {
            $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
            return $hasil_rupiah;
        }
        ?>

        <tr>
            <th style="font-size:12pt;" class="text" align="left">PENDAPATAN</th>
            <th style="font-size:12pt; " class="text-white" align="left"><b>PENDAPATAN</b></th>
            <th style="font-size:12pt; " class="text-white" align="left"><b>PENDAPATAN</b></th>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Pendapatan Proyek </th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_pend[0]->pendapatan_proyek); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Pendapatan Giro</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_pend[0]->pendapatan_giro); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Bonus</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_pend[0]->bonus); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Pendapatan Lain-Lain</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_pend[0]->pendapatan_lainlain); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Laba Selisih Kurs</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_pend[0]->laba_selisih_kurs); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">TOTAL PENDAPATAN</th>
            <td style="font-size:9pt;" align="left"></td>
            <?php
            $totalpendapatan = $id_pend[0]->pendapatan_proyek + $id_pend[0]->pendapatan_giro + $id_pend[0]->bonus + $id_pend[0]->pendapatan_lainlain + $id_pend[0]->laba_selisih_kurs;
            ?>
            <td style="font-size:9pt;" align="left"><?php echo format($totalpendapatan) ?>< /td>
        </tr>

        <tr>
            <th style="font-size:12pt;" class="text" align="left">BEBAN</th>
            <th style="font-size:12pt; " class="text-white" align="left"><b>PENDAPATAN</b></th>
            <th style="font-size:12pt; " class="text-white" align="left"><b>PENDAPATAN</b></th>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Beban Proyek</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_beban[0]->beban_proyek); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Beban Gaji</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_beban[0]->beban_gaji); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Tunjangan Hari Raya</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_beban[0]->tunjangan_hari_raya); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Beban Operasional</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_beban[0]->beban_operasional); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Beban Setoran UI</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_beban[0]->beban_setoran_ui); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Beban Penyusutan</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_beban[0]->beban_penyusutan); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Beban Bonus</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_beban[0]->beban_bonus); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Beban Perlengkapan Kantor</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_beban[0]->beban_perlengkapan_kantor); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Beban Pengelolaan Rek.</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_beban[0]->beban_pengelolaan_rek); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Beban Buku Cek</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_beban[0]->beban_buku_cek); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Beban Pajak</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_beban[0]->beban_pajak); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Beban Lain-Lain</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_beban[0]->beban_lainlain); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Rugi Penjualan Aset</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_beban[0]->rugi_penjualan_aset); ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">Rugi Selisih Kurs</th>
            <td style="font-size:9pt;" align="left"><?php echo format($id_beban[0]->rugi_selisih_kurs) ?></td>
            <td style="font-size:9pt;" align="left"></td>
        </tr>
        <tr>
            <th style="font-size:9pt;" align="left">TOTAL BEBAN</th>
            <td style="font-size:9pt;" align="left"></td>
            <?php
            $totalbeban = $id_beban[0]->beban_proyek + $id_beban[0]->beban_gaji + $id_beban[0]->tunjangan_hari_raya + $id_beban[0]->beban_operasional + $id_beban[0]->beban_setoran_ui +
                $id_beban[0]->beban_penyusutan + $id_beban[0]->beban_bonus + $id_beban[0]->beban_perlengkapan_kantor + $id_beban[0]->beban_pengelolaan_rek + $id_beban[0]->beban_buku_cek +
                $id_beban[0]->beban_pajak + $id_beban[0]->beban_lainlain + $id_beban[0]->rugi_penjualan_aset + $id_beban[0]->rugi_selisih_kurs;
            ?>
            <td style="font-size:9pt;" align="left"><?php echo format($totalbeban); ?></td>
        </tr>
        <tr>
            <th style="font-size:11pt;" align="left"><b>LABA BERSIH</b></th>
            <td style="font-size:11pt;" align="left"></td>
            <?php
            $lababersih = $totalpendapatan - $totalbeban;
            ?>
            <td style="font-size:11pt;" align="left"><?php echo format($lababersih); ?></td>
        </tr>
        <!-- <tr>
                <th style="font-size:11pt;" align="left">MODAL AWAL</th>
                <td style="font-size:11pt;" align="left"></td>
                <?php
                $modal = $id_arus

                ?>
                <td style="font-size:11pt;" colspan="12" align="left"><?php echo format(699305923 + $lababersih); ?></td>
            </tr> -->
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
            <p style="font-size:9pt;" align="right">Desianti Nur Aini.</p><br>
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

</html>