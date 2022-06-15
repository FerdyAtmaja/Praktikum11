<?php
include 'koneksi2.php';

if (!$koneksi) {
	die("Connection failed : ".mysql_connect_error());
}

$sql = "INSERT INTO tb_covid2 (id, negara, jumlah_kasus, kasus_baru, total_kematian, kematian_baru, total_kesembuhan, kesembuhan_baru) VALUES
(1, 'India', 43185049, 3714, 524708, 7, 4263365, 2513),
(2, 'Korsel', 18168708, 5022, 24279, 21, 17865591, 28085),
(3, 'Turkey', 15072747, 0, 24279, 21, 17865591, 0),
(4, 'Vietnam', 10726045, 806, 43081, 1, 9513981, 9026),
(5, 'Japan', 8945784, 16130, 30752, 17, 8711289, 24361),
(6, 'Iran', 7232790, 59, 141332, 1, 7056206, 713),
(7, 'Indonesia', 6057142, 342, 156622, 7, 5897022, 270),
(8, 'Malaysia', 4516319, 1330, 35690, 2, 4458999, 1881),
(9, 'Thailand', 4468955, 2162, 30201, 27, 4409248, 4879),
(10, 'Israel', 4154566, 2580, 10864, 0, 4124933, 0)
";

if (mysqli_query($koneksi, $sql)) {
	echo "Insert Data Behasil";
}
else {
	echo "Error: ". $sql. "<br>" . mysqli_error($koneksi); 
}
mysqli_close($koneksi); 
?>