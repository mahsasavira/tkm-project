<!DOCTYPE html>
<html lang="en">

<body class="offline-doc">
    <div class="page-header clear-filter">
        <div class="text-center w-100">
            <div class="col-md-12 mx-auto my-6">
                <div class="brand">
                    <img src="<?php echo base_url() ?>assets/img/kop.png">
                    <center>
                        <h4 class="card-title"><b>LAPORAN LABA RUGI</b></h4>
                        <p class="card-description"><b> Periode s.d.</b></p>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <table>
        <tbody>
            <?php function format($angka)
            {
                $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
                return $hasil_rupiah;
            } ?>

            <tr>
                <th style="font-size:12pt;" scope="col" class="text" align="left">PENDAPATAN</th>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Pendapatan Proyek </th>
                <td style="font-size:11pt;" colspan="6" align="center"><?php echo format($id_pend[0]->pendapatan_proyek); ?></td>
                <td style="font-size:11pt;" colspan="1" align="right"></td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Pendapatan Giro</th>
                <td style="font-size:11pt;" colspan="6" align="center"><?php echo format($id_pend[0]->pendapatan_giro); ?></td>
                <td style="font-size:11pt;" colspan="1" align="right"></td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Bonus</th>
                <td style="font-size:11pt;" colspan="6" align="center"><?php echo format($id_pend[0]->bonus); ?></td>
                <td style="font-size:11pt;" colspan="1" align="right"></td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Pendapatan Lain-Lain</th>
                <td style="font-size:11pt;" colspan="6" align="center"><?php echo $id_pend[0]->pendapatan_lainlain ?></td>
                <td style="font-size:11pt;" colspan="1" align="right"></td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Laba Selisih Kurs</th>
                <td style="font-size:11pt;" colspan="6" align="center"><?php echo $id_pend[0]->laba_selisih_kurs ?></td>
                <td style="font-size:11pt;" colspan="1" align="right"></td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">TOTAL PENDAPATAN</th>
                <td style="font-size:11pt;" colspan="" align="center"></td>
                <td style="font-size:11pt;" colspan="12" align="right">(nilai total)</td>
            </tr>

            <tr>
                <th style="font-size:12pt;" scope="col" class="text" align="left">BEBAN</th>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Beban Proyek</th>
                <td style="font-size:11pt;" colspan="" align="center"><?php echo $id_beban[0]->beban_proyek ?></td>
                <td style="font-size:11pt;" colspan="1" align="right"></td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Beban Gaji</th>
                <td style="font-size:11pt;" colspan="6" align="center"><?php echo $id_beban[0]->beban_gaji ?></td>
                <td style="font-size:11pt;" colspan="1" align="right"></td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Tunjangan Hari Raya</th>
                <td style="font-size:11pt;" colspan="6" align="center"><?php echo $id_beban[0]->tunjangan_hari_raya ?></td>
                <td style="font-size:11pt;" colspan="1" align="right"></td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Beban Operasional</th>
                <td style="font-size:11pt;" colspan="6" align="center"><?php echo $id_beban[0]->beban_operasional ?></td>
                <td style="font-size:11pt;" colspan="1" align="right"></td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Beban Setoran UI</th>
                <td style="font-size:11pt;" colspan="6" align="center"><?php echo $id_beban[0]->beban_setoran_ui ?></td>
                <td style="font-size:11pt;" colspan="1" align="right"></td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Beban Penyusutan</th>
                <td style="font-size:11pt;" colspan="6" align="center"><?php echo $id_beban[0]->beban_penyusutan ?></td>
                <td style="font-size:11pt;" colspan="1" align="right"></td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Beban Bonus</th>
                <td style="font-size:11pt;" colspan="6" align="center"><?php echo $id_beban[0]->beban_bonus ?></td>
                <td style="font-size:11pt;" colspan="1" align="right"></td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Beban Perlengkapan Kantor</th>
                <td style="font-size:11pt;" colspan="6" align="center"><?php echo $id_beban[0]->beban_perlengkapan_kantor ?></td>
                <td style="font-size:11pt;" colspan="1" align="right"></td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Beban Pengelolaan Rek.</th>
                <td style="font-size:11pt;" colspan="6" align="center"><?php echo $id_beban[0]->beban_perlengkapan_kantor ?></td>
                <td style="font-size:11pt;" colspan="1" align="right"></td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Beban Buku Cek</th>
                <td style="font-size:11pt;" colspan="6" align="center"><?php echo $id_beban[0]->beban_perlengkapan_kantor ?></td>
                <td style="font-size:11pt;" colspan="1" align="right"></td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Beban Pajak</th>
                <td style="font-size:11pt;" colspan="6" align="center"><?php echo $id_beban[0]->beban_perlengkapan_kantor ?></td>
                <td style="font-size:11pt;" colspan="1" align="right"></td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Beban Lain-Lain</th>
                <td style="font-size:11pt;" colspan="6" align="center"><?php echo $id_beban[0]->beban_perlengkapan_kantor ?></td>
                <td style="font-size:11pt;" colspan="1" align="right"></td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Rugi Penjualan Aset</th>
                <td style="font-size:11pt;" colspan="6" align="center"><?php echo $id_beban[0]->beban_perlengkapan_kantor ?></td>
                <td style="font-size:11pt;" colspan="1" align="right"></td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Rugi Selisih Kurs</th>
                <td style="font-size:11pt;" colspan="6" align="center"><?php echo $id_beban[0]->beban_perlengkapan_kantor ?></td>
                <td style="font-size:11pt;" colspan="1" align="right"></td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">TOTAL BEBAN</th>
                <td style="font-size:11pt;" colspan="1" align="center"></td>
                <td style="font-size:11pt;" colspan="12" align="right">(nilai BEBAN)</td>
            </tr>
        </tbody>
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
            <p style="font-size:9pt;" align="right">Desi N.</p><br>
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

    <!-- <p style="font-size:6pt;"><i>Dicetak dari halaman http://tirtakencanamulia.com/ pada <?= ('tanggal') ?> </i></p> -->
</body>

</html>