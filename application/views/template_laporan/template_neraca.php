<!DOCTYPE html>
<html lang="en">

<body class="offline-doc">
    <div class="page-header clear-filter">
        <div class="text-center w-100">
            <div class="col-md-12 mx-auto my-6">
                <div class="brand">
                    <img src="<?php echo base_url() ?>assets/img/kop.png">
                    <center>
                        <h4 class="card-title"><b>LAPORAN NERACA</b></h4>
                        <p class="card-description"><b> Periode <?= ($tgl_awal_cetak != '' ? ($tgl_awal_cetak) . ' ' : '') . 's.d. ' . ($tgl_akhir_cetak) ?></b></p><br><br>
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
                <th scope="col" class="text" align="left">AKTIVA</th>
            </tr>
            <tr>
                <th colspan="1" align="left">Kas Kecil </th>
                <td colspan="" align="center"></td>
                <td colspan="1" align="right"><?php echo format($id_akt[0]->kas_kecil) ?></td>
            </tr>
            <tr>
                <th colspan="1" align="left"> Kas Pada Bank</th>
                <td colspan="1" align="center"></td>
                <td colspan="1" align="right"><?php echo format($id_akt[0]->kas_pada_bank) ?></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Piutang Operasional</th>
                <td colspan="1" align="center"></td>
                <td colspan="1" align="right"><?php echo format($id_akt[0]->piutang_operasional) ?></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Piutang Daya Makara</th>
                <td colspan="1" align="center"></td>
                <td colspan="1" align="right"><?php echo format($id_akt[0]->piutang_daya_makara) ?></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Piutang Proyek</th>
                <td colspan="1" align="center"></td>
                <td colspan="1" align="right"><?php echo format($id_akt[0]->piutang_proyek) ?></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Piutang TVUI</th>
                <td colspan="1" align="center"></td>
                <td colspan="1" align="right"><?php echo format($id_akt[0]->piutang_tvui) ?>)</td>
            </tr>
            <tr>
                <th colspan="1" align="left"> Piutang Solar Car</th>
                <td colspan="1" align="center"></td>
                <td colspan="1" align="right"><?php echo format($id_akt[0]->piutang_solar_car) ?></td>
            </tr>
            <tr>
                <th colspan="1" align="left">PERLENGKAPAN KANTOR</th>
            </tr>
            <tr>
                <th colspan="1" align="left">Komputer</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->komputer) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Akum.Peny.-Komputer</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->akum_peny_komputer) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">FAX</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->fax) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Akum.Peny.-FAX</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->akum_peny_fax) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">AC</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->ac) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Akum.Peny.-AC</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->akum_peny_ac) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Furniture</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->furniture) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Notebook</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->akum_peny_furniture) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Kamera Digital</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->kamera_digital) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Printer</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->akum_peny_kamera) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Kamera Video</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->video_kamera) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Akum.Peny.-Kamera Video</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->akum_peny_video) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">TOTAL AKTIVA</th>
                <td colspan="1" align="center"></td>
                <?php
                $totalakt = $id_akt[0]->kas_kecil + $id_akt[0]->kas_pada_bank + $id_akt[0]->piutang_operasional + $id_akt[0]->piutang_daya_makara + $id_akt[0]->piutang_proyek + $id_akt[0]->piutang_tvui +
                    $id_akt[0]->piutang_solar_car + ($id_akt[0]->komputer - $id_akt[0]->akum_peny_komputer) + ($id_akt[0]->fax - $id_akt[0]->akum_peny_fax) + ($id_akt[0]->ac - $id_akt[0]->akum_peny_ac) +
                    ($id_akt[0]->furniture - $id_akt[0]->akum_peny_furniture) + ($id_akt[0]->notebook - $id_akt[0]->akum_peny_notebook) + ($id_akt[0]->printer - $id_akt[0]->akum_peny_printer) +
                    ($id_akt[0]->kamera_digital - $id_akt[0]->akum_peny_kamera) + ($id_akt[0]->video_kamera - $id_akt[0]->akum_peny_video);
                ?>
                <td colspan="1" align="right"><?php echo format($totalakt) ?></td>
            </tr>
            <tr>
                <th colspan="1" align="left">PASIVA</th>
            </tr>
            <tr>
                <th colspan="1" align="left">Kewajiban</th>
            </tr>
            <tr>
                <th colspan="1" align="left">Hutang Operasional</th>
                <td colspan="1" align="center"><?php echo format($id_pas[0]->hutang_operasional); ?></td>
                <td colspan="1" align="right"></td>

            </tr>
            <tr>
                <th colspan="1" align="left">Hutang Gaji</th>
                <td colspan="1" align="center"><?php echo format($id_pas[0]->hutang_gaji); ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Hutang Proyek </th>
                <td colspan="1" align="center"><?php echo format($id_pas[0]->hutang_proyek); ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Hutang pada rtv</th>
                <td colspan="1" align="center"><?php echo format($id_pas[0]->hutang_pada_rtv); ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Total Kewajiban </th>
                <td colspan="1" align="center"></td>
                <?php
                $totalkewajiban = $id_pas[0]->hutang_operasional + $id_pas[0]->hutang_gaji + $id_pas[0]->hutang_proyek + $id_pas[0]->hutang_pada_rtv;
                ?>
                <td colspan="1" align="right"><?php echo format($totalkewajiban); ?></td>
            </tr>
            <!-- <tr>
                <th style="font-size:11pt;" colspan="1" align="left">MODAL</th>
                <td style="font-size:11pt;" colspan="1" align="center"></td>
                <?php
                $totalbeban = $id_beban[0]->beban_proyek + $id_beban[0]->beban_gaji + $id_beban[0]->tunjangan_hari_raya + $id_beban[0]->beban_operasional + $id_beban[0]->beban_setoran_ui +
                    $id_beban[0]->beban_penyusutan + $id_beban[0]->beban_bonus + $id_beban[0]->beban_perlengkapan_kantor + $id_beban[0]->beban_pengelolaan_rek + $id_beban[0]->beban_buku_cek +
                    $id_beban[0]->beban_pajak + $id_beban[0]->beban_lainlain + $id_beban[0]->rugi_penjualan_aset + $id_beban[0]->rugi_selisih_kurs;
                $totalpendapatan = $id_pend[0]->pendapatan_proyek + $id_pend[0]->pendapatan_giro + $id_pend[0]->bonus + $id_pend[0]->pendapatan_lainlain + $id_pend[0]->laba_selisih_kurs;
                $lababersih = $totalpendapatan - $totalbeban;
                ?>
                <td style="font-size:11pt;" colspan="12" align="right"><?php echo format(699305923 + $lababersih); ?></td>
            </tr> -->
            <!-- <tr>
                <th style="font-size:11pt;" colspan="1" align="left">TOTAL MODAL</th>
                <td style="font-size:11pt;" colspan="1" align="center"></td>
                <td style="font-size:11pt;" colspan="12" align="right"><?php echo format(699305923 + $lababersih); ?></td>
            </tr> -->
            <tr>
                <th colspan="1" align="left">TOTAL PASIVA</th>
                <td colspan="1" align="center"></td>
                <?php
                $totalpas = $totalakt + $totalkewajiban + $lababersih;
                ?>
                <td colspan="1" align="right"><?php echo format($totalpas); ?></td>
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