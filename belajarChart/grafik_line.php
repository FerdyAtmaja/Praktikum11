<?php
include('koneksi2.php');
$kasus = mysqli_query($koneksi, "SELECT * FROM tb_covid2");
while($row = mysqli_fetch_array($kasus)){
    $negara[] = $row['negara'];
    $jumlah_kasus[] = $row['jumlah_kasus'];
    $kasus_baru[] = $row['kasus_baru'];
    $jumlah_kematian[] = $row['total_kematian'];
    $kematian_baru[] = $row['kematian_baru'];
    $jumlah_sembuh[] = $row['total_kesembuhan'];
    $kesembuhan_baru[] = $row['kesembuhan_baru'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Line Chart</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<div style="width: 800px;height: 800px">
		<canvas id="myChart"></canvas>
	</div>

	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: <?php echo json_encode($negara); ?>,
				datasets: [{
					label: 'Total Kasus',
					data: <?php echo json_encode($jumlah_kasus); ?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255,99,132,1)',
					borderWidth: 1
				},
				{
					label: 'Kasus Baru',
					data: <?php echo json_encode($kasus_baru); ?>,
					backgroundColor: 'rgba(62, 166, 250, 0.2)',
					borderColor: 'rgba(62, 166, 250,1)',
					borderWidth: 1
				},
				{
					label: 'Total Kematian',
					data: <?php echo json_encode($jumlah_kematian); ?>,
					backgroundColor: 'rgba(247, 222, 32, 0.2)',
					borderColor: 'rgba(247, 222, 32,1)',
					borderWidth: 1
				},
				{
					label: 'Kematian Baru',
					data: <?php echo json_encode($kematian_baru); ?>,
					backgroundColor: 'rgba(255, 159, 56, 0.2)',
					borderColor: 'rgba(255, 159, 56,1)',
					borderWidth: 1
				},
				{
					label: 'Total Kesembuhan',
					data: <?php echo json_encode($jumlah_sembuh); ?>,
					backgroundColor: 'rgba(86, 245, 128, 0.2)',
					borderColor: 'rgba(86, 245, 128,1)',
					borderWidth: 1
				},
				{
					label: 'Kesembuhan Baru',
					data: <?php echo json_encode($kesembuhan_baru); ?>,
					backgroundColor: 'rgba(139, 71, 255, 0.2)',
					borderColor: 'rgba(139, 71, 255,1)',
					borderWidth: 1
				},
				]
			},

			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>