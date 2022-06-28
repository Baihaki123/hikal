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
    <img src="<?php echo base_url('assets/img/poltek.png'); ?>" style="position: absolute; width: 100px; height:auto; margin-left:30px;">
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <span style="line-height: 1.2; font-size:14px;">Yayasan Pendidikan Harapan Bersama <br></span>
                <span style="line-height: 1.2; font-weight: bold; font-size:18px;">Politeknik Harapan Bersama <br>
                    PROGRAM STUDI D III TEKNIK KOMPUTER <br></span>
                <span style="line-height: 1.2; font-size:14px;">Kampus I: Jl. Mataram No.9 Tegal 52142 Telp. 0283-352000 Fax. 0283-353353 <br>
                    Website: www.poltektegal.ac.id &nbsp; Email: admkombaa@poltektegal.ac.id <br></span>
            </td>
        </tr>
    </table>
    <hr style="font-weight: bold; margin-bottom:0;">
    <hr style="margin-top:2px;">
    <br />
    <h3 style="margin-top: 20px;">
        <center>Rekap Data Hibrida Besar</center>
    </h3>
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
            if ($hibrida_besar) {
                foreach ($hibrida_besar as $h) { ?>
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
    <br>

    <table>

    </table>
    <h4 style="float:right; margin-right: 100px; margin-top: 40px; line-height: 1.6;">
        Tegal, <?php echo date("d-m-Y"); ?><br>
        &nbsp; &nbsp; Pimpinan<br>
        <br>
        <br>
        <br>
        (..........................)
    </h4>


</body>