<section class="content-header">
    <h1>
        Data Telor Hibrida Besar
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Telor Hibrida</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">

                <div class="box-header with-border">
                    <h3 class="box-title">Data Rekap</h3><br><br>

                    <!-- <form action="" type="post"> -->
                    <?php echo form_open('Hibrida/cari_pdf_besar'); ?>
                    <div class="pull-right">
                        <div class="form-group row">
                            <label class="col-sm-1 control-label no-padding-right">Tanggal</label>
                            <div class="col-md-2" style="width: 120px;">
                                <select class="select2 form-control" name="tanggal" id="tanggal">
                                    <option value="">Semua</option>
                                    <?php
                                    foreach ($option_tanggal as $dataTanggal) {
                                        if ($dataTanggal->tanggal == $tanggal) {
                                            echo "<option value='$dataTanggal->tanggal' selected>$dataTanggal->tanggal</option>";
                                        } else {
                                            echo "<option value='$dataTanggal->tanggal'>$dataTanggal->tanggal</option>";
                                        }
                                        // echo '<option value="' . $dataTanggal->tanggal . '">' . $dataTanggal->tanggal . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <label class="col-sm-1 control-label no-padding-right" style="padding-right:1px ;">Bulan</label>
                            <div class="col-md-2" style="width: 110px; padding-left:5px;">
                                <select class="select2 form-control" name="bulan" id="bulan">
                                    <option value="">Semua</option>
                                    <?php
                                    foreach ($option_bulan as $dataBulan) {
                                        echo '<option value="' . $dataBulan->bulan . '">' . $dataBulan->bulan . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <label class="col-sm-1 control-label no-padding-right">Tahun</label>
                            <div class="col-md-3" style="width: 110px; padding-left:5px;">
                                <select class="select2 form-control" name="tahun" id="tahun">
                                    <option value="">Semua</option>
                                    <?php
                                    foreach ($option_tahun as $dataTahun) {
                                        echo '<option value="' . $dataTahun->tahun . '">' . $dataTahun->tahun . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success" style="margin-right: 10px;">
                                <i class="fa fa-search"></i> Search
                            </button>
                            <!-- <button type="button" class="btn btn-success" style="margin-right: 10px;" onclick="formSubmit()">
                                    <i class="fa fa-search"></i> Search -->
                        </div>
                    </div>
                    <?php echo form_close() ?>
                    <!-- </form> -->

                    <?php echo form_open('Hibrida/cetak_pdf_besar'); ?>
                    <input type="hidden" value="<?= $tanggal; ?>" name="tanggal">
                    <input type="hidden" value="<?= $bulan; ?>" name="bulan">
                    <input type="hidden" value="<?= $tahun; ?>" name="tahun">
                    <button type="submit" class="btn btn-primary" style="margin-right: 10px;">
                        <i class="fa fa-print"></i> Print
                    </button>
                    <?php echo form_close() ?>
                </div>

                <div class="box-body">
                    <div class="table-responsive" id="test">
                        <table table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr style="background-color: #B0E0E6;">
                                    <th>No</th>
                                    <th>Jenis</th>
                                    <th>Berat</th>
                                    <th>Ukuran</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($hibrida_besar as $h) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $h->jenis; ?></td>
                                        <td><?= $h->berat; ?></td>
                                        <td><?= $h->ukuran; ?></td>
                                        <td><?= $h->waktu; ?></td>
                                    </tr>
                                <?php  } ?>

                            </tbody>

                        </table>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
</section>

<!-- <script>
    function generatePDF() {
        var doc = new jsPDF(); //create jsPDF object
        doc.fromHTML(document.getElementById("test"), // page element which you want to print as PDF
            15,
            15, {
                'width': 170 //set width
            },
            function(a) {
                orientation: 'p';
                unit: 'cm';
                format: 'a4';
                putOnlyUsedFonts: true;
                doc.save("HTML2PDF.pdf"); // save file name as HTML2PDF.pdf
            });
    }
</script> -->

<script>
    function generatePDF() {
        var doc = new jsPDF(); //create jsPDF object
        doc.fromHTML(document.getElementById("test"), // page element which you want to print as PDF
            30,
            15, {
                'width': 370 //set width
            },
            function(a) {
                orientation: 'l';
                unit: 'cm';
                format: 'a4';
                putOnlyUsedFonts: true;
                doc.save("HTML2PDF.pdf"); // save file name as HTML2PDF.pdf
            });
    }
</script>
<!-- <script type="text/javascript">
    window.print();
</script> -->
<!-- <script>
    function formSubmit() {
        var tanggal = document.getElementById("tanggal").value;
        var bulan = document.getElementById("bulan").value;
        var tahun = document.getElementById("tahun").value;
        var data = 'tanggal=' + tanggal + '&bulan=' + bulan + '&tahun=' + tahun;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Hibrida/cari_pdf_besar') ?>",
            data: data,
            success: function(data) {
                $('#test').html(data);
            },
            error: function(data) {
                alert('gagal');
            }
        });
        return true;
    }
</script> -->
<!-- <script>
    function formCetak() {
        var tanggal = document.getElementById("tanggal").value;
        var bulan = document.getElementById("bulan").value;
        var tahun = document.getElementById("tahun").value;
        var data = 'tanggal=' + tanggal + '&bulan=' + bulan + '&tahun=' + tahun;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Hibrida/cetak_pdf_besar') ?>",
            data: data,
            success: function(data) {
                $('#test').html(data);
            },
            error: function(data) {
                alert('gagal');
            }
        });
        return true;
    }
</script> -->
<!-- /.content -->