<h4 class="mt-4">Tambah Pegawai</h4>
<hr>
<form method="POST" action="<?= BASE_PATH ?>/pegawai/insert" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Foto</label>
        <div class="col-sm-4">
            <div class="custome-file">
                <label for="foto" class="custome-file-label">Pilih File</label>
                <input type="file" class="custome-file-input" id="foto" name="foto"/>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="nama" name="nama"/>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-4">
            <div class="custome-control custome-radio custome-control-inline">
                <input type="radio" class="custome-control-input" id="jkl" name="jk" value="Pria"/>
                <label for="jk" class="custome-control-label">Laki-Laki</label>
            </div>
            <div class="custome-control custome-radio custome-control-inline">
                <input type="radio" class="custome-control-input" id="jkp" name="jk" value="Wanita"/>
                <label for="jk" class="custome-control-label">Wanita</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="tanggal" class="col-sm-3 col-form-label"></label>
        <div class="col-sm-4">
            <input type="date" id="tanggal" class="form-control" name="tgl_lahir">
        </div>
    </div>

    <div class="form-group row">
        <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
        <div class="col-sm-4">
            <select name="jabatan" id="jabatan" class="custome-select form-control">
                <option value="">--Pilih Jabatan</option>
                <?php
                    foreach($data as $j) {
                        echo "<option value='$j[id_jabatan]'>$j[nama_jabatan]</option>";
                    }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
        <div class="col-sm-8">
            <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control"></textarea>
        </div>
    </div>

    <button class="btn btn-info mr-2 mt-2" type="submit">
        <i class="oi oi-task"></i> Simpan
    </button>
    <button class="btn btn-danger mr-2 mt-2" type="reset">
        <i class="oi oi-circle-x"></i> Batal
    </button>

</form>