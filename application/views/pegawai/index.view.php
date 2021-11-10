<h4 class="mt-4">Data Pegawai</h4>
<hr>
<a href="<?= BASE_PATH ?>/pegawai/add" class="btn btn-success">
    <i class="oi oi-plus"></i> Tambah
</a>
<div class="table-responsive mt-3">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Jabatan</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = 0;
                foreach($data as $r) {
                $no++;
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><img src="<?= BASE_PATH ?>/public/images/<?= $r['foto'] ?>" alt="image" width="100"></td>
                <td><?= $r['nama_pegawai'] ?></td>
                <td><?= $r['jenis_kelamin'] ?></td>
                <td><?= $r['tgl_lahir'] ?></td>
                <td><?= $r['nama_jabatan'] ?></td>
                <td><?= $r['keterangan'] ?></td>
                <td>
                  <a href="<?= BASE_PATH ?>/pegawai/edit/<?= $r['id_pegawai'] ?>" class="btn btn-sm mr-2" data-toggle="tooltip" data-placement="top" title="Edit Pegawai">
                    <i class="oi oi-pencil text-info"></i>
                  </a>  
                  <a href="<?= BASE_PATH ?>/pegawai/delete/<?= $r['id_pegawai'] ?>/<?= $r['foto']?>" class="btn btn-sm ml-2" data-toggle="tooltip" data-placement="top" title="Hapus Pegawai">
                    <i class="oi oi-trash text-danger"></i>
                  </a>  
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>