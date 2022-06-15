<?php
include 'koneksi2.php';


$sql= "CREATE TABLE tb_covid2(
id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
negara VARCHAR(50) NOT NULL,
jumlah_kasus INT(255) NOT NULL,
kasus_baru INT(255) NOT NULL,
total_kematian INT(255) NOT NULL,
kematian_baru INT(255) NOT NULL,
total_kesembuhan INT(255) NOT NULL,
kesembuhan_baru INT(255) NOT NULL
)";

if(mysqli_query($koneksi, $sql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($koneksi);
}

mysqli_close($koneksi); 
?>