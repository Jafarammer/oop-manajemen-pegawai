<?php
    $data = $data[0];
?>

<h4 class="mt-4">Edit Jabatan</h4>
<hr>
<form method="POST" action="<?= BASE_PATH ?>/jabatan/update">
    <input type="hidden" name="id" value="<?= $data['id_jabatan'] ?>">

    <div class="form-group row">
        <label for="nama" class="col-sm-3 col-form-label">Nama Jabatan</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="nama" id="nama" value="<?= $data['nama_jabatan'] ?>">
        </div>
    </div>

    <button type="submit" class="btn btn-info mr-2">
        <i class="oi oi-task"></i> Simpan
    </button>
    <button type="reset" class="btn btn-danger ml-2">
        <i class="oi oi-circle-x"></i> Batal
    </button>
</form>