<script>
    var chart;
    var total = 0;

    function tampil() {
        $.ajax({
            url: '<?php echo base_url('Welcome/grafik_hibrida') ?>',
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
                        // chart.series[1].setData(berat);
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
                        if (Number(berat[i] > 30)) {
                            chart.series[0].update({
                                color: "#228B22"
                            });
                        }
                        console.log(result[i].berat);
                        // chart.series[1].setData(berat);
                        chart.xAxis[0].setCategories(waktu);
                    }

                }
                setTimeout(tampil, 1000);
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

            series: [{
                    name: "Hibrida Besar"
                },
                {
                    name: "Hibrida Kecil",
                    color: '#228B22'
                }
            ]
        });
    });
</script>