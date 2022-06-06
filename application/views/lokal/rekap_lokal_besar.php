<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            font-family: Verdana;
            padding:
                10px 10px 10px 10px;
            text-align: center;
        }

        .table-data th {
            background-color: #B0E0E6;
        }

        h3 {
            font-family: Verdana;
        }
    </style>
    <h3>
        <center>Rekap Data Lokal Besar</center>
    </h3>
    <br />
    <table class="table-data">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis</th>
                <th scope="col">Berat</th>
                <th scope="col">Ukuran</th>
                <th scope="col">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            if ($lokal_besar) {
                foreach ($lokal_besar as $h) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $h->jenis; ?></td>
                        <td><?= $h->berat; ?></td>
                        <td><?= $h->ukuran; ?></td>
                        <td><?= $h->waktu; ?></td>
                    </tr>
                <?php  } ?>
            <?php } else { ?>
                <tr>
                    <td colspan="5">Tidak ada data</td>
                </tr>
            <?php } ?>
        </tbody>
        </tbody>
    </table>
</body>