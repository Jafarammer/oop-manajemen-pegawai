<?php
    $jabatan = $data['jabatan'];
    $data = $data['pegawai'][0];
?>

<h4 class="mt-4">Edit Pegawai</h4>
<hr>
<form method="POST" action="<?= BASE_PATH ?>/pegawai/update" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['id_pegawai'] ?>">

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Foto</label>
        <div class="col-sm-4">
            <div class="custome-file">
                <label for="foto" class="custome-file-label">Ubah File</label>
                <input type="file" class="custome-file-input" id="foto" name="foto" />
            </div>
            <img src="<?= BASE_PATH ?>/public/images/<?= $data['foto'] ?>" alt="image" class="img-thumbnail mt-3" width="150">
        </div>
    </div>

    <div class="form-group row">
        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama_pegawai'] ?>" />
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-4">
            <?php
                if ($data['jenis_kelamin'] == 'Pria') {
                    $L = "checked";
                    $P = "";
                } else {
                    $L = "";
                    $P = "checked";
                }
            ?>
            <div class="custome-control custome-radio custome-inline">
                <input type="radio" class="custome-control-input" id="jkl" name="jk" value="Pria" <?= $L ?>>
                <label for="jkl" class="custome-control-label">Laki-Laki</label>
            </div>
            <div class="custome-control custome-radio custome-inline">
                <input type="radio" class="custome-control-input" id="jkp" name="jk" value="Wanita" <?= $P ?>>
                <label for="jkp" class="custome-control-label">Wanita</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-4">
            <input type="date" class="form-control" id="tanggal" name="tgl_lahir" value="<?= $data['tgl_lahir'] ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
        <div class="col-sm-4">
            <select name="jabatan" id="jabatan" class="custome-select form-control">
                <option value="">--Pilih Jabatan</option>
                <?php
                    foreach($jabatan as $j) {
                        echo "<option value='$j[id_jabatan]'";
                        if($j['id_jabatan'] == $data['id_jabatan']) echo "selected";
                        echo ">$j[nama_jabatan]</option>";
                    }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
        <div class="col-sm-8">
            <textarea name="keterangan" rows="5" id="keterangan" class="form-control">
                <?= $data['keterangan'] ?>
            </textarea>
        </div>
    </div>
    
    <button class="btn btn-info mr-2" type="submit">
        <i class="oi oi-task"></i> Simpan
    </button>
    <button class="btn btn-danger ml-2" type="reset">
        <i class="oi oi-circle-x"></i> Batal
    </button>
</form>