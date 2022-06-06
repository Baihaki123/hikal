<style>
    .welcome-area {
        overflow: hidden;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: url("<?= base_url('assets/img/bg.png') ?>");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        height: 105vh;
        width: 100%;
        margin-left: 2px;
        margin-bottom: 0px;
        margin-right: 2px;
    }
</style>
<section class="content-header">
    <h1>
        Realtime
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Realtime</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="welcome-area box row" id="welcome">
            <div class="col-lg-8">
                <div class="box">
                    <div class="box-body">
                        <h3 align="center">Realtime Telor Bebek</h3><br>
                        <div class="responsive">
                            <table table class="table table-bordered table-striped">
                                <thead>
                                    <tr style="background-color: #B0E0E6;">
                                        <th>Jenis</th>
                                        <th>Berat</th>
                                        <th>Ukuran</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody id="tbl_data">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
</section>
<script src="<?php echo base_url('assets/Template/dist/js/jquery-3.3.1.min.js'); ?>"></script>

<script>
    $(document).ready(function() {
        tampil();

        function tampil() {
            $.ajax({
                url: '<?php echo base_url('Realtime/ambilData') ?>',
                dataType: 'json',
                type: 'GET',
                success: function(result) {
                    var i;
                    var html = "";

                    for (i = 0; i < result.length; i++) {
                        html += '<tr>' +
                            '<td>' + result[i].jenis + '</td>' +
                            '<td>' + result[i].berat + '</td>' +
                            '<td>' + result[i].ukuran + '</td>' +
                            '<td>' + result[i].waktu + '</td>' +
                            '</tr>';

                        $("#tbl_data").html(html);
                    }

                    setTimeout(tampil, 1000);
                }
            });
        }
    });

    // document.addEventListener('DOMContentLoaded', function() {
    //     tampil();
    // });
</script>