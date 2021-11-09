<h4 class="mt-3">Data Jabatan</h4>
<hr>
<a href="<?= BASE_PATH ?>/jabatan/add" class="btn btn-success">
    <i class="oi oi-plus"></i> Tambah
</a>

<div class="table-responsive mt-3">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Jabatan</th>
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
                <td><?= $r['nama_jabatan'] ?></td>
                <td>
                    <a href="<?= BASE_PATH ?>/jabatan/edit/<?= $r['id_jabatan'] ?>" class="btn btn-sm mr-2" data-toggle="tooltip" data-placement="top" title="Edit Jabatan">
                        <i class="oi oi-pencil text-info"></i>
                    </a>
                    <a href="<?= BASE_PATH ?>/jabatan/delete/<?= $r['id_jabatan'] ?>" class="btn btn-sm ml-2" data-toggle="tooltip" data-placement="top" title="Hapus Jabatan">
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