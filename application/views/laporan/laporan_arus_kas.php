<script>
    function showLaporan() {
        var tgl_start = $('input[name="tgl1"]').val();
        var tgl_end = $('input[name="tgl2"]').val();
        var card_description = "Periode ";

        if (tgl_start != '' && tgl_end != '') {
            $('#url_cetak_laporan').attr('href', '<?= site_url('laporanutilitas/cetakpdf') ?>?tgl1=' + tgl_start + '&tgl2=' + tgl_end);
            card_description += (dateIndo(tgl_start) + " s.d. " + dateIndo(tgl_end));
        } else {
            if (tgl_start != '') {
                $('#url_cetak_laporan').attr('href', '<?= site_url('laporanutilitas/cetakpdf') ?>?tgl1=' + tgl_start);
                card_description += (dateIndo(tgl_start) + " s.d. <?= dateIndo(date('Y-m-d')) ?>");
            } else if (tgl_end != '') {
                $('#url_cetak_laporan').attr('href', '<?= site_url('laporanutilitas/cetakpdf') ?>?tgl2=' + tgl_end);
                card_description += (" s.d. " + dateIndo(tgl_end));
            }
        }

        $('#laporan_utilitas').html('');
        $.ajax({
            url: "<?= site_url('laporanutilitas/show_lp_table') ?>",
            type: "POST",
            data: {
                tgl1: tgl_start,
                tgl2: tgl_end
            },
            success: function(data) {
                $('#laporan_utilitas').append(data);
                $('.card-description').html('<b> ' + card_description + '</b>');
            }
        });
    }

    function dateIndo(date) {
        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        var dates = date.split('-');
        return parseInt(dates[2]) + ' ' + months[parseInt(dates[1]) - 1] + ' ' + dates[0];
    }
</script>