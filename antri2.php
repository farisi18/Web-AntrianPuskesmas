<?php
error_reporting(0);

$konek=mysqli_connect("localhost","root","","antrian");

$tampil=mysqli_query($konek,"select * from tabelantrian where panggil='sudah' and loket='2' order by idantrian desc");
$data=mysqli_fetch_array($tampil);

?>


<?php 
if(strlen($data['nomor'])==1)
{
print"$data[huruf] 0$data[nomor]"; 
}
else
{
print"$data[huruf]$data[nomor]"; 
}
?>