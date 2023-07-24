<?php
error_reporting(0);

$konek = mysqli_connect("localhost", "root", "", "antrian");

$tampil = mysqli_query($konek, "select * from tabelantrian where panggil='' and huruf='A' order by idantrian asc");
$data = mysqli_fetch_array($tampil);
$nomor = $data['nomor'];
$huruf = $data['huruf'];
?>

<?php print "$huruf$nomor"; ?>
 