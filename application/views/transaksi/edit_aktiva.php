edit data

<form action="<?php echo base_url('transaksi/edit_aktiva') ?>" method="POST">
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

    <div class="card-body p-3">
        <div class="table-responsive p-0">
            <div class="col-12 px-3">
                <div class="row">
                    <div class="form-group col-5">
                        <label>ID Aktiva</label>
                        <input type="number" name="id_aktiva" value="<?php echo $queryeditakt->id_aktiva ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group col-5">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal_masuk" value="<?php echo $queryeditakt->tanggal_masuk ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group col-5">
                        <label>Kas Kecil</label>
                        <input type="number" name="kas_kecil" value="<?php echo $queryeditakt->kas_kecil ?>" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Kas Pada Bank</label>
                        <input type="number" name="kas_pada_bank" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Piutang Operasional</label>
                        <input type="number" name="piutang_operasional" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Piutang Daya Makara</label>
                        <input type="number" name="piutang_daya_makara" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Piutang Proyek</label>
                        <input type="number" name="piutang_proyek" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Piutang TVUI</label>
                        <input type="number" name="piutang_tvui" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Piutang Solar Car</label>
                        <input type="number" name="piutang_solar_car" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Komputer</label>
                        <input type="number" name="komputer" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Akum.Peny.-Komputer</label>
                        <input type="number" name="akum_peny_komputer" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Fax</label>
                        <input type="number" name="fax" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Akum.Peny.-Fax</label>
                        <input type="number" name="akum_peny_fax" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>AC</label>
                        <input type="number" name="ac" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Akum.Peny.-AC</label>
                        <input type="number" name="akum_peny_ac" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Furniture</label>
                        <input type="number" name="furniture" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Akum.Peny.-Furniture</label>
                        <input type="number" name="akum_peny_furniture" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Notebook</label>
                        <input type="number" name="notebook" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Akum.Peny.-Notebook</label>
                        <input type="number" name="akum_peny_notebook" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Kamera Digital</label>
                        <input type="number" name="kamera_digital" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Akum.Peny.-Kamera Digital</label>
                        <input type="number" name="akum_peny_kamera" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Printer</label>
                        <input type="number" name="printer" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Akum.Peny.-Printer</label>
                        <input type="number" name="akum_peny_printer" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Kamera Video</label>
                        <input type="number" name="video_kamera" value="" class="form-control" required>
                    </div>
                    <div class="form-group col-5">
                        <label>Akum.Peny.-Kamera Video</label>
                        <input type="number" name="akum_peny_video" value="" class="form-control" required>
                    </div>
                </div>
            </div>
        </div>
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