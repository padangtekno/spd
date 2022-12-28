<table class="table table-bordered table-sm">
    <thead>
        <tr class="text-center">
            <th scope="col" width="30px">No</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama</th>
            <th scope="col">Tempat Meninggal</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Penyebab</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($databulanan as $key => $k) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $k['nik'] ?></td>
                <td><?= $k['nama'] ?></td>
                <td><?= $k['tempat_kematian'] ?></td>
                <td><?= $k['tgl_kematian'] ?></td>
                <td><?= $k['penyebab'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>