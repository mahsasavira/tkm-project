<!DOCTYPE html>
<html lang="en">

<body class="offline-doc">
    <div class="page-header clear-filter">
        <div class="text-center w-100">
            <div class="col-md-12 mx-auto my-6">
                <div class="brand">
                    <img src="<?php echo base_url() ?>assets/img/kop.png">
                    <center>
                        <h4 class="card-title"><b>LAPORAN ARUS KAS</b></h4>
                        <!-- <p class="card-description"><b> Periode Bulan ... Tahun ...</b></p> -->
                    </center>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive p-0 border border-dark">
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