<section class="content-header">
    <h1>
        Data Telor Lokal Kecil
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Telor Lokal</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Data Rekap</h3><br><br>

                    <?php echo form_open('Lokal/cari_pdf_kecil'); ?>
                    <div class="pull-right">
                        <div class="form-group row">
                            <label class="col-sm-1 control-label no-padding-right">Tanggal</label>
                            <div class="col-md-2" style="width: 120px;">
                                <select class="select2 form-control" name="tanggal">
                                    <option value="">Semua</option>
                                    <?php
                                    foreach ($option_tanggal as $dataTanggal) {
                                        echo '<option value="' . $dataTanggal->tanggal . '">' . $dataTanggal->tanggal . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <label class="col-sm-1 control-label no-padding-right" style="padding-right:1px ;">Bulan</label>
                            <div class="col-md-2" style="width: 110px; padding-left:5px;">
                                <select class="select2 form-control" name="bulan">
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
                                <select class="select2 form-control" name="tahun">
                                    <option value="">Semua</option>
                                    <?php
                                    foreach ($option_tahun as $dataTahun) {
                                        echo '<option value="' . $dataTahun->tahun . '">' . $dataTahun->tahun . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-success" style="margin-right: 10px;">
                                    <i class="fa fa-search"></i> Search
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close() ?>

                    <?php echo form_open('Lokal/cetak_pdf_kecil'); ?>
                    <input type="hidden" value="<?= $tanggal; ?>" name="tanggal">
                    <input type="hidden" value="<?= $bulan; ?>" name="bulan">
                    <input type="hidden" value="<?= $tahun; ?>" name="tahun">
                    <button type="submit" class="btn btn-primary" style="margin-right: 10px;">
                        <i class="fa fa-print"></i> Print
                    </button>
                    <?php echo form_close() ?>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
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
                                foreach ($lokal_kecil as $h) { ?>
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
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
</section>
<!-- /.content -->