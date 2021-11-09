<h4 class="mt-4">Tambah Jabatan</h4>
<hr>
<form method="POST" action="<?= BASE_PATH ?>/jabatan/insert">
    <div class="form-group row">
        <label for="nama" class="col-sm-3 col-form-label">Nama Jabatan</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
    </div>
    <button type="submit" class="btn btn-info mr-2">
        <i class="oi oi-task"></i> Simpan
    </button>
    <button class="btn btn-danger ml-2" type="reset">
        <i class="oi oi-circle-x"></i> Batal
    </button>
</form>