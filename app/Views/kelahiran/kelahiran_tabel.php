<table class="table table-bordered table-sm">
    <thead>
        <tr class="text-center">
            <th scope="col" width="30px">No</th>
            <th scope="col">Nama Bayi</th>
            <th scope="col">Tempat Tanggal Lahir</th>
            <th scope="col">Jam</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Nama Ayah</th>
            <th scope="col">Nama Ibu</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $no = 1;
        foreach ($databulanan as $w => $value) { ?>
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $value['nama'] ?></td>
                <td><?= $value['tempat_lahir'] ?>, <?= $value['tgl_lahir'] ?></td>
                <td><?= $value['jam_lahir'] ?></td>
                <td><?= $value['jk'] == 'L' ? 'Laki-Laki' : 'Perempuan' ?></td>
                <td><?= $value['nama_ayah'] ?></td>
                <td><?= $value['nama_ibu'] ?></td>
            </tr>
        <?php }
        ?>
    </tbody>
</table>