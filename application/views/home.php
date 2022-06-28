<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa fa-balance-scale"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Hibrida Besar</span>
                    <span class="info-box-number"><?= $hibrida_besar; ?></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="info-box bg-green">
                <span class="info-box-icon"><i class="fa fa-balance-scale"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Hibrida Kecil</span>
                    <span class="info-box-number"><?= $hibrida_kecil; ?></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="fa fa-balance-scale"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Lokal Besar</span>
                    <span class="info-box-number"><?= $lokal_besar; ?></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-balance-scale"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Lokal Kecil</span>
                    <span class="info-box-number"><?= $lokal_kecil; ?></span>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
        <div class="col-lg-6 col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <i class="fa fa-bar-chart"></i>
                    <h3 class="box-title">Grafik <small>Data Telor Hibrida</small></h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body shine">
                    <div id="hibrida" style="width:100%; height:350px;"></div>
                </div>
            </div>
        </div>

        <div class="lokal col-lg-6 col-xs-12">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <i class="fa fa-bar-chart"></i>
                    <h3 class="box-title">Grafik <small>Data Telor Lokal</small></h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body shine">
                    <div id="lokal" style="width:100%; height:350px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="<?php echo base_url('assets/Template/dist/js/highcharts.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/Template/dist/js/exporting.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/Template/dist/js/highcharts-3d.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/Template/dist/js/export-data.js'); ?>"></script>

<script>
    var chart;
    var chart2;


    var total = 0;
    var total2 = 0;

    function tampil() {
        $.ajax({
            url: '<?php echo base_url('Welcome/grafik_hibrida') ?>',
            dataType: 'json',
            success: function(result) {
                if (result.length > total) {
                    total = result.length;
                    var i;
                    var berat = [];
                    var waktu = [];

                    for (i = 0; i < result.length; i++) {
                        berat[i] = Number(result[i].berat);
                        waktu[i] = result[i].waktu;
                        chart.series[0].setData(berat);
                        chart.xAxis[0].setCategories(waktu);
                    }

                } else if (result.length <= total) {
                    var i;
                    var berat = [];
                    var waktu = [];
                    for (i = 0; i < result.length; i++) {
                        berat[i] = Number(result[i].berat);
                        waktu[i] = result[i].waktu;
                        chart.series[0].setData(berat);
                        chart.xAxis[0].setCategories(waktu);
                    }

                }
                setTimeout(tampil, 1000);
            }
        });
    }

    function tampil_lokal() {
        $.ajax({
            url: '<?php echo base_url('Welcome/grafik_lokal') ?>',
            dataType: 'json',
            success: function(result) {
                if (result.length > total2) {
                    total = result.length;
                    var i;
                    var berat = [];
                    var waktu = [];

                    for (i = 0; i < result.length; i++) {
                        berat[i] = Number(result[i].berat);
                        waktu[i] = result[i].waktu;
                        chart2.series[0].setData(berat);
                        chart2.xAxis[0].setCategories(waktu);
                    }

                } else if (result.length <= total2) {
                    var i;
                    var berat = [];
                    var waktu = [];
                    for (i = 0; i < result.length; i++) {
                        berat[i] = Number(result[i].berat);
                        waktu[i] = result[i].waktu;
                        chart2.series[0].setData(berat);
                        chart2.xAxis[0].setCategories(waktu);
                    }

                }
                setTimeout(tampil_lokal, 1000);
            }
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        chart = Highcharts.chart('hibrida', {
            chart: {
                type: 'column',
                events: {
                    load: tampil
                }
            },
            title: {
                text: 'Grafik Telor Hibrida'
            },

            yAxis: {
                title: {
                    text: 'Jumlah'
                }
            },

            xAxis: {

            },
            plotOptions: {
                column: {
                    borderRadius: 5
                }
            },

            series: [{
                name: "Telor Hibrida",
                dataLabels: {
                    enabled: true,
                    format: '{point.y}',
                    style: {
                        fontSize: '10px',
                        fontFamily: 'Macondo'
                    }
                }

            }]
        });

        chart2 = Highcharts.chart('lokal', {
            chart: {
                type: 'column',
                events: {
                    load: tampil_lokal
                }
            },
            title: {
                text: 'Grafik Telor Lokal'
            },

            yAxis: {
                title: {
                    text: 'Jumlah'
                }
            },

            xAxis: {

            },
            plotOptions: {
                column: {
                    borderRadius: 5
                }
            },

            series: [{
                name: 'Telor Lokal',
                color: '#FF8C00',
                dataLabels: {
                    enabled: true,
                    format: '{point.y}',
                    style: {
                        fontSize: '10px',
                        fontFamily: 'Macondo'
                    }
                }
            }]
        });
    });
</script>