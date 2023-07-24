<?php
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Display Antrian</title>


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body style="padding:20px; font-family: 'Merriweather', serif;
      overflow:hidden">

	<?php
	date_default_timezone_set('Asia/Jakarta');

	$tanggal = date('d M Y');
	$hari = date('D');



	?>



	<div class="columns">
		<div class="column is-one-second"><img src="gambar/homeatas.png" style="width:75%"></div>
		<div class="column" style="font-size:35px; text-align:right"><?php print "$tanggal, $hari,"; ?> <span id="waktu"></span></div>
	</div>


	<script>
		var waktus = document.getElementById('waktu');


		setInterval(function() {
			date = new Date();
			var detik = date.getSeconds();
			var menit = date.getMinutes();
			var jam = date.getHours();

			waktus.innerHTML = jam + ":" + menit + ":" + detik;

		}, 1000);
	</script>


	<div class="columns">

		<div class="column is-one-third card" style="padding:20px; background-image:url('gambar/home.jpg'); background-size:cover; color:white">

			<br></br>
			<center>
				<span style="font-size:45px">
					<?php print "Nomor Antrian"; ?>
				</span>

				<br />



				<script>
					$(document).ready(function() {
						setInterval(function() {
							$("#sekarang").load('sekarang.php')
						}, 10000);
					});
				</script>



				<script>
					$(document).ready(function() {
						setInterval(function() {
							$("#antriloket1").load('antri1.php')
						}, 1000);
					});
				</script>


				<script>
					$(document).ready(function() {
						setInterval(function() {
							$("#antriloket2").load('antri2.php')
						}, 1000);
					});
				</script>


				<!-- <script>
					$(document).ready(function() {
						setInterval(function() {
							$("#antriloket3").load('antriloket3.php')
						}, 1000);
					});
				</script> -->


				<div id="sekarang"></div>

			</center>

		</div>
		<div class="column card" style="margin-left:10px;  background-color:LightGray; color:white">

			<iframe width="100%" height="420px" src="video/1.mp4" title="Video Player" frameborder="0" allow="accelerometer; autoplay ; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		</div>
	</div>

	<br />



	<div class="columns">
		<div class="column is-one-two card" style=" background-image:url('gambar/home2.jpg'); color:white">
			<center><span style="font-size:24px;">Pendaftaran 1</span><br />

				<span style="font-size: 45px" id="antriloket1">

				</span>

			</center>
		</div>


		<div class="column card" style="margin-left:10px;   background-image:url('gambar/home2.jpg'); color:white">
			<center><span style="font-size:24px">Pendaftaran 2</span><br />

				<span style="font-size: 45px" id="antriloket2">

				</span>

			</center>
		</div>


		<!-- <div class="column card" style="margin-left:10px;  background-image:url('gambar/home2.png'); color:white">
    <center><span style="font-size:24px">3 3</span><br />
  
   <span style="font-size: 45px" id="antriloket3">
 
  </span>
  
  </center>
  </div> -->

	</div>


	<div style="width:100%">
		<marquee>Puskesmas Rowokele Kabupaten Kebumen</marquee>
	</div>


</body>

</html>