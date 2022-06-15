<?php
include('koneksi2.php');
$produk = mysqli_query($koneksi, "select * from tb_covid2");
while($row = mysqli_fetch_array($produk)){
    $nama_negara[] = $row['negara'];
    $jumlah_kasus[] = $row['jumlah_kasus'];
    $kasus_baru[] = $row['kasus_baru'];
    $total_kematian[] = $row['total_kematian'];
    $kematian_baru[] = $row['kematian_baru'];
    $total_kesembuhan[] = $row['total_kesembuhan'];
    $kesembuhan_baru[] = $row['kesembuhan_baru'];
}
?>

<!DOCTYPE html>
<head>
      <title>Membuat Grafik Menggunakan Chart JS</title>
      <script type="text/javascript" src="Chart.js"></script>
</head>
<body>
    <div style="width: 800px; height:800px">
    <h2 style="font-family: sans-serif;">Total Kasus</h2>
    <canvas id="myChart"></canvas><br><br>

    <h2 style="font-family: sans-serif;">Kasus Baru</h2>
    <canvas id="myChart2"></canvas><br><br>

    <h2 style="font-family: sans-serif;">Total Kematian</h2>
    <canvas id="myChart3"></canvas><br><br>

    <h2 style="font-family: sans-serif;">Kematian Baru</h2>
    <canvas id="myChart4"></canvas><br><br>

    <h2 style="font-family: sans-serif;">Total Kesembuhan</h2>
    <canvas id="myChart5"></canvas><br><br>

    <h2 style="font-family: sans-serif;">Kesembuhan Baru</h2>
    <canvas id="myChart6"></canvas><br><br>
    </div>
    
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart (ctx, {
            type: 'doughnut',
            data: {
            //membuat label
                labels: <?php echo json_encode($nama_negara);?>,
                datasets: [{
                    //grafik untuk total kasus
                    label: 'Total Kasus',
                    data:<?php echo json_encode($jumlah_kasus); ?>,
                    backgroundColor: [
                        "rgba(15, 10, 222, 0.4)", 
                        "rgba(20, 205, 200, 0.4)", 
                        "rgba(147, 250, 165, 0.4)", 
                        "rgba(108, 122, 137, 0.4)", 
                        "rgba(150, 54, 148, 0.4)", 
                        "rgba(249, 105, 14, 0.4)", 
                        "rgba(219, 10, 91, 0.4)", 
                        "rgba(165, 55, 253, 0.4)", 
                        "rgba(175, 65, 84, 0.4)", 
                        "rgba(240, 255, 0, 0.4)"
                    ],
                    borderColor: [
                        "rgba(15, 10, 222, 1)", 
                        "rgba(20, 205, 200, 1)", 
                        "rgba(147, 250, 165, 1)", 
                        "rgba(108, 122, 137, 1)", 
                        "rgba(150, 54, 148, 1)", 
                        "rgba(249, 105, 14, 1)", 
                        "rgba(219, 10, 91, 1)", 
                        "rgba(165, 55, 253, 1)", 
                        "rgba(175, 65, 84, 1)", 
                        "rgba(240, 255, 0, 1)"
                    ],
                }],
            },
            options: {
                scales: {
                }
            }
        });

        var ctx = document.getElementById("myChart2").getContext('2d');
        var myChart = new Chart (ctx, {
            type: 'doughnut',
            data: {
            //membuat label
                labels: <?php echo json_encode($nama_negara);?>,
                datasets: [{
                    //grafik untuk Kasus Baru
                    label: 'Kasus Baru',
                    data:<?php echo json_encode($kasus_baru); ?>,
                    backgroundColor: [
                        "rgba(15, 10, 222, 0.4)", 
                        "rgba(20, 205, 200, 0.4)", 
                        "rgba(147, 250, 165, 0.4)", 
                        "rgba(108, 122, 137, 0.4)", 
                        "rgba(150, 54, 148, 0.4)", 
                        "rgba(249, 105, 14, 0.4)", 
                        "rgba(219, 10, 91, 0.4)", 
                        "rgba(165, 55, 253, 0.4)", 
                        "rgba(175, 65, 84, 0.4)", 
                        "rgba(240, 255, 0, 0.4)"
                    ],
                    borderColor: [
                        "rgba(15, 10, 222, 1)", 
                        "rgba(20, 205, 200, 1)", 
                        "rgba(147, 250, 165, 1)", 
                        "rgba(108, 122, 137, 1)", 
                        "rgba(150, 54, 148, 1)", 
                        "rgba(249, 105, 14, 1)", 
                        "rgba(219, 10, 91, 1)", 
                        "rgba(165, 55, 253, 1)", 
                        "rgba(175, 65, 84, 1)", 
                        "rgba(240, 255, 0, 1)"
                    ],
                }],
            },
            options: {
                scales: {
                }
            }
        });

        var ctx = document.getElementById("myChart3").getContext('2d');
        var myChart = new Chart (ctx, {
            type: 'doughnut',
            data: {
            //membuat label
                labels: <?php echo json_encode($nama_negara);?>,
                datasets: [{
                    //grafik untuk total kematian
                    label: 'Total Kematian',
                    data:<?php echo json_encode($jumlah_kasus); ?>,
                    backgroundColor: [
                        "rgba(15, 10, 222, 0.4)", 
                        "rgba(20, 205, 200, 0.4)", 
                        "rgba(147, 250, 165, 0.4)", 
                        "rgba(108, 122, 137, 0.4)", 
                        "rgba(150, 54, 148, 0.4)", 
                        "rgba(249, 105, 14, 0.4)", 
                        "rgba(219, 10, 91, 0.4)", 
                        "rgba(165, 55, 253, 0.4)", 
                        "rgba(175, 65, 84, 0.4)", 
                        "rgba(240, 255, 0, 0.4)"
                    ],
                    borderColor: [
                        "rgba(15, 10, 222, 1)", 
                        "rgba(20, 205, 200, 1)", 
                        "rgba(147, 250, 165, 1)", 
                        "rgba(108, 122, 137, 1)", 
                        "rgba(150, 54, 148, 1)", 
                        "rgba(249, 105, 14, 1)", 
                        "rgba(219, 10, 91, 1)", 
                        "rgba(165, 55, 253, 1)", 
                        "rgba(175, 65, 84, 1)", 
                        "rgba(240, 255, 0, 1)"
                    ],
                }],
            },
            options: {
                scales: {
                }
            }
        });

        var ctx = document.getElementById("myChart4").getContext('2d');
        var myChart = new Chart (ctx, {
            type: 'doughnut',
            data: {
            //membuat label
                labels: <?php echo json_encode($nama_negara);?>,
                datasets: [{
                    //grafik untuk kematian baru
                    label: 'Kematian Baru',
                    data:<?php echo json_encode($kematian_baru); ?>,
                    backgroundColor: [
                        "rgba(15, 10, 222, 0.4)", 
                        "rgba(20, 205, 200, 0.4)", 
                        "rgba(147, 250, 165, 0.4)", 
                        "rgba(108, 122, 137, 0.4)", 
                        "rgba(150, 54, 148, 0.4)", 
                        "rgba(249, 105, 14, 0.4)", 
                        "rgba(219, 10, 91, 0.4)", 
                        "rgba(165, 55, 253, 0.4)", 
                        "rgba(175, 65, 84, 0.4)", 
                        "rgba(240, 255, 0, 0.4)"
                    ],
                    borderColor: [
                        "rgba(15, 10, 222, 1)", 
                        "rgba(20, 205, 200, 1)", 
                        "rgba(147, 250, 165, 1)", 
                        "rgba(108, 122, 137, 1)", 
                        "rgba(150, 54, 148, 1)", 
                        "rgba(249, 105, 14, 1)", 
                        "rgba(219, 10, 91, 1)", 
                        "rgba(165, 55, 253, 1)", 
                        "rgba(175, 65, 84, 1)", 
                        "rgba(240, 255, 0, 1)"
                    ],
                }],
            },
            options: {
                scales: {
                }
            }
        });

        var ctx = document.getElementById("myChart5").getContext('2d');
        var myChart = new Chart (ctx, {
            type: 'doughnut',
            data: {
            //membuat label
                labels: <?php echo json_encode($nama_negara);?>,
                datasets: [{
                    //grafik untuk total kesembuhan
                    label: 'Total Kesembuhan',
                    data:<?php echo json_encode($total_kesembuhan); ?>,
                    backgroundColor: [
                        "rgba(15, 10, 222, 0.4)", 
                        "rgba(20, 205, 200, 0.4)", 
                        "rgba(147, 250, 165, 0.4)", 
                        "rgba(108, 122, 137, 0.4)", 
                        "rgba(150, 54, 148, 0.4)", 
                        "rgba(249, 105, 14, 0.4)", 
                        "rgba(219, 10, 91, 0.4)", 
                        "rgba(165, 55, 253, 0.4)", 
                        "rgba(175, 65, 84, 0.4)", 
                        "rgba(240, 255, 0, 0.4)"
                    ],
                    borderColor: [
                        "rgba(15, 10, 222, 1)", 
                        "rgba(20, 205, 200, 1)", 
                        "rgba(147, 250, 165, 1)", 
                        "rgba(108, 122, 137, 1)", 
                        "rgba(150, 54, 148, 1)", 
                        "rgba(249, 105, 14, 1)", 
                        "rgba(219, 10, 91, 1)", 
                        "rgba(165, 55, 253, 1)", 
                        "rgba(175, 65, 84, 1)", 
                        "rgba(240, 255, 0, 1)"
                    ],
                }],
            },
            options: {
                scales: {
                }
            }
        });

        var ctx = document.getElementById("myChart6").getContext('2d');
        var myChart = new Chart (ctx, {
            type: 'doughnut',
            data: {
            //membuat label
                labels: <?php echo json_encode($nama_negara);?>,
                datasets: [{
                    //grafik untuk kesembuhan baru
                    label: 'Kesembuhan Baru',
                    data:<?php echo json_encode($kesembuhan_baru); ?>,
                    backgroundColor: [
                        "rgba(15, 10, 222, 0.4)", 
                        "rgba(20, 205, 200, 0.4)", 
                        "rgba(147, 250, 165, 0.4)", 
                        "rgba(108, 122, 137, 0.4)", 
                        "rgba(150, 54, 148, 0.4)", 
                        "rgba(249, 105, 14, 0.4)", 
                        "rgba(219, 10, 91, 0.4)", 
                        "rgba(165, 55, 253, 0.4)", 
                        "rgba(175, 65, 84, 0.4)", 
                        "rgba(240, 255, 0, 0.4)"
                    ],
                    borderColor: [
                        "rgba(15, 10, 222, 1)", 
                        "rgba(20, 205, 200, 1)", 
                        "rgba(147, 250, 165, 1)", 
                        "rgba(108, 122, 137, 1)", 
                        "rgba(150, 54, 148, 1)", 
                        "rgba(249, 105, 14, 1)", 
                        "rgba(219, 10, 91, 1)", 
                        "rgba(165, 55, 253, 1)", 
                        "rgba(175, 65, 84, 1)", 
                        "rgba(240, 255, 0, 1)"
                    ],
                }],
            },
            options: {
                scales: {
                }
            }
        });
    </script>
</body>
</html>