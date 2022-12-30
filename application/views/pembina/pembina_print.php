<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Print Data Siswa</title>
    </head>
    <center>
        <br>
        <h2>Data Pembina Ekstrakurikuler</h2>
        <br>

        <body>
            <table border="1" style="width: 80%">
                <tr>
                    <th>No.</th>
                    <th>Jenis Eskul</th>
                    <th>Nama</th>
                    <th>Nip</th>
                    <th>Jenis Kelamin</th>
                    <th>No Hp</th>
                </tr>
                <?php $no = 1;
                foreach ($row->result() as $siswa => $data) { ?>
                    <tr>
                        <td><?= $no++ ?>.</td>
                        <td><?= $data->nama_ekskul ?></td>
                        <td><?= $data->nama_pembina ?></td>
                        <td><?= $data->nip ?></td>
                        <td><?= $data->jenis_kelamin ?></td>
                        <td><?= $data->no_hp ?></td>
                    </tr>
                <?php } ?>
            </table>
        </body>
    </center>
</html>

<script type="text/javascript">
    window.print();
</script>