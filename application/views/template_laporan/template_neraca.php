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
                <td colspan="1" align="right"><?php echo format($id_akt[0]->piutang_operasional) ?></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Piutang Proyek</th>
                <td colspan="1" align="center"></td>
                <td colspan="1" align="right"><?php echo format($id_akt[0]->piutang_operasional) ?></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Piutang TVUI</th>
                <td colspan="1" align="center"></td>
                <td colspan="1" align="right"><?php echo format($id_akt[0]->piutang_operasional) ?>)</td>
            </tr>
            <tr>
                <th colspan="1" align="left"> Piutang Solar Car</th>
                <td colspan="1" align="center">asd</td>
                <td colspan="1" align="right"><?php echo format($id_akt[0]->piutang_operasional) ?></td>
            </tr>
            <tr>
                <th colspan="1" align="left">PERLENGKAPAN KANTOR</th>
            </tr>
            <tr>
                <th colspan="1" align="left">Komputer</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->piutang_operasional) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Akum.Peny.-Komputer</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->piutang_operasional) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">FAX</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->piutang_operasional) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Akum.Peny.-FAX</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->piutang_operasional) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">AC</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->piutang_operasional) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Akum.Peny.-AC</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->piutang_operasional) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Furniture</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->piutang_operasional) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Notebook</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->piutang_operasional) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Kamera Digital</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->piutang_operasional) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Printer</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->piutang_operasional) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Kamera Video</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->piutang_operasional) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Akum.Peny.-Kamera Video</th>
                <td colspan="1" align="center"><?php echo format($id_akt[0]->piutang_operasional) ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">TOTAL AKTIVA</th>
                <td colspan="1" align="center"></td>
                <td colspan="1" align="right">(nilai TOTAL)</td>
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
                <td colspan="1" align="center"><?php echo format($id_pas[0]->hutang_operasional); ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Hutang Proyek </th>
                <td colspan="1" align="center"><?php echo format($id_pas[0]->hutang_operasional); ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Hutang pada rtv</th>
                <td colspan="1" align="center"><?php echo format($id_pas[0]->hutang_operasional); ?></td>
                <td colspan="1" align="right"></td>
            </tr>
            <tr>
                <th colspan="1" align="left">Total Kewajiban </th>
                <td colspan="1" align="center"></td>
                <td colspan="1" align="right"><?php echo format($id_pas[0]->hutang_operasional); ?></td>
            </tr>
            <tr>
                <th colspan="1" align="left">TOTAL MODAL</th>
                <td colspan="1" align="center"></td>
                <td colspan="1" align="right"><?php echo format($id_pas[0]->hutang_operasional); ?></td>
            </tr>
            <tr>
                <th colspan="1" align="left">TOTAL PASIVA</th>
                <td colspan="1" align="center"></td>
                <td colspan="1" align="right"><?php echo format($id_pas[0]->hutang_operasional); ?></td>
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