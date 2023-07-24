<?php

$konek=mysqli_connect("localhost","root","","antrian");


mysqli_query($konek, "delete from tabelantrian")


?>

<?php
header("location: index.html");
?>