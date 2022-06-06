<script>
    var chart;
    var total = 0;

    function tampil() {
        $.ajax({
            url: '<?php echo base_url('Welcome/grafik_lokal') ?>',
            dataType: 'json',
            success: function(result) {
                console.log(result);
                if (result.length > total) {
                    total = result.length;
                    var i;
                    var berat = [];
                    var waktu = [];

                    for (i = 0; i < result.length; i++) {
                        berat[i] = Number(result[i].berat);
                        waktu[i] = result[i].waktu;
                        chart.series[0].setData(berat);
                        chart.series[1].setData(berat);
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
                        chart.series[1].setData(berat);
                        chart.xAxis[0].setCategories(waktu);
                    }

                }
                setTimeout(tampil_lokal, 1000);
            }
        });
    }

    document.addEventListener('DOMContentLoaded', function() {

        chart = Highcharts.chart('lokal', {
            chart: {
                type: 'column',
                events: {
                    load: tampil_lokal
                }
            },
            title: {
                text: 'Grafik Jumlah Telor Lokal'
            },

            yAxis: {
                title: {
                    text: 'Jumlah'
                }
            },

            xAxis: {

            },

            series: [{
                    name: "Lokal Besar"
                },
                {
                    name: "Lokal Kecil"
                }
            ]
        });
    });
</script>