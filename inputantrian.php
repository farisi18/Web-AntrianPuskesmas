<?php
$konek=mysqli_connect("localhost","root","","antrian");


$tampil=mysqli_query($konek,"select * from tabelantrian");
$hitung=mysqli_num_rows($tampil);


$nomorbaru=$hitung+1;
$tanggal=date('d M Y');
$waktu=date('H:i');
$huruf=$_GET['huruf'];



$input=mysqli_query($konek,"insert into tabelantrian (tanggal, waktu, nomor, huruf) values('$tanggal','$waktu','$nomorbaru','$huruf')");

?>

<script>
window.location='tampilcetak.php';
</script>