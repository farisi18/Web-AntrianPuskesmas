<?php
$loket=$_POST['loket'];
$nomor=$_POST['nomor'];

$konek=mysqli_connect("localhost","root","","antrian");


$edit=mysqli_query($konek,"update tabelantrian set loket='$loket', panggil='sudah' where nomor='$nomor'");

?>

