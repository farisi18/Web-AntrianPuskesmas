<?php

$jumlah = strlen($nomor);

if ($jumlah == 1) {
	$nomora = $nomor;
	$nomorb = $nomor;
} else if ($jumlah == 2) {
	$nomora = substr($nomor, 0, 1);
	$nomorb = substr($nomor, 1, 1);
}


?>



<div id="audioplay">






	<?php
	if ($huruf == 'A') {
		print "<audio id='audio22' src='audio/A.mp3' type='audio/mpeg' preload='auto' ></audio>";
	} else {
		print "<audio id='audio22' src='audio/B.mp3' type='audio/mpeg' preload='auto' ></audio>";
	}

	if ($nomor == 10) {
		print "<audio id='audio2' src='audio/10.mp3' type='audio/mpeg' preload='auto' ></audio>";
	} else if ($nomor == 11) {
		print "<audio id='audio2' src='audio/11.mp3' type='audio/mpeg' preload='auto' ></audio>";
	} else if ($jumlah == 1) {
		print "<audio id='audio2' src='audio/0.mp3' type='audio/mpeg' preload='auto' ></audio>";
		print "<audio id='audio3' src='audio/$nomora.mp3' type='audio/mpeg' preload='auto' ></audio>";
	} else if ($jumlah == 2 and $nomor < 20) {
		print "<audio id='audio2' src='audio/$nomorb.mp3' type='audio/mpeg' preload='auto' ></audio>";
		print "<audio id='audio3' src='audio/belas.mp3' type='audio/mpeg' preload='auto' ></audio>";
	} else if ($jumlah == 2 and $nomor > 19) {
		print "<audio id='audio2' src='audio/$nomora.mp3' type='audio/mpeg' preload='auto' ></audio>";
		print "<audio id='audio3' src='audio/puluh.mp3' type='audio/mpeg' preload='auto' ></audio>";
		print "<audio id='audio4' src='audio/$nomorb.mp3' type='audio/mpeg' preload='auto' ></audio>";
	}
	?>

	<audio id='audio1' src="audio/nomorantrian.mp3" type="audio/mpeg" preload="auto"></audio>
	<audio id='audio0' src="audio/bell.mp3" type="audio/mpeg" preload="auto"></audio>
	<audio id='audio5' src="audio/dipendaftaran.mp3" type="audio/mpeg" preload="auto"></audio>


	<audio id='audio6' src="audio/<?php print "$_SESSION[loket].mp3"; ?>" type="audio/mpeg" preload="auto"></audio>


</div>

<script>
	function playAudio() {

		var audio22 = document.getElementById('audio22');
		var audio0 = document.getElementById('audio0');
		var audio1 = document.getElementById('audio1');
		var audio2 = document.getElementById('audio2');
		var audio3 = document.getElementById('audio3');
		var audio4 = document.getElementById('audio4');
		var audio5 = document.getElementById('audio5');
		var audio6 = document.getElementById('audio6');



		audio0.play();

		setTimeout(function() {
			audio1.play();
		}, 6000);
		setTimeout(function() {
			audio22.play();
		}, 7000);
		setTimeout(function() {
			audio2.play();
		}, 8000);
		setTimeout(function() {
			audio3.play();
		}, 9000);
		setTimeout(function() {
			audio4.play();
		}, 10000);
		setTimeout(function() {
			audio5.play();
		}, 11000);
		setTimeout(function() {
			audio6.play();
		}, 12000);




		$.ajax({
			url: 'editpanggil.php',
			type: 'POST',
			data: {
				loket: <?php print "$_SESSION[loket]"; ?>,
				nomor: <?php print "$nomor"; ?>
			},

		})


		setTimeout(function() {
			window.location = '<?php print "$_SESSION[halaman]"; ?>'
		}, 14000);


	}
</script>