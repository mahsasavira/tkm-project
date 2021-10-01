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
                        <p class="card-description"><b> Periode Bulan ... Tahun ...</b></p>
                    </center>
                </div>
            </div>
        </div>
    </div>

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
                <td style="font-size:11pt;" colspan="12" align="right">(ambil dari laba bersih)</td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Penyusutan Bangunan</th>
                <td style="font-size:11pt;" colspan="12" align="right">(ambil )</td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Penyusutan Kendaraan</th>
                <td style="font-size:11pt;" colspan="12" align="right">(ambil )</td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Penurunan Piutang</th>
                <td style="font-size:11pt;" colspan="12" align="right">(ambil )</td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Penurunan Persediaan</th>
                <td style="font-size:11pt;" colspan="12" align="right">(ambil )</td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Kenaikan Hutang Dagang</th>
                <td style="font-size:11pt;" colspan="12" align="right">(ambil )</td>
            </tr>
            <tr>
                <th style="font-size:11pt;" colspan="1" align="left">Arus Kas Aktivitas Operasional</th>
                <td style="font-size:11pt;" colspan="12" align="right">(ambil )</td>
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