<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Ambil Nomor</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">

</head>

<body style="padding:20px; font-family: 'Merriweather', serif; background-image:url('gambar/bg.jpg'); background-size:cover">

  <?php
  date_default_timezone_set('Asia/Jakarta');

  $tanggal = date('d M Y');
  $hari = date('D');

  ?>

  <div class="columns">
    <div class="column is-one-second"><img src="gambar/bangga.png" style="width:25%" /></div>
    <div class="column" style="font-size:35px; text-align:right"><?php print "$tanggal, $hari,"; ?> <span id="waktu"></span></div>
  </div>
  <!-- <img src="gambar/pkm.png" style="width: 15%; float:right" -->

  <div class="columns">


    <div class="column">
    </div>

    <div class="column is-one-fourth">
      <div class="card">
        <div class="card-image" style="height:250px">
          <figure class="image is-4by3">
            <img src="gambar/dr1.jpg" style="height:250px">
          </figure>
        </div>

        <div class="card-content">
          <center>
            <span style="font-size:36px">
              <h1>PENDAFTARAN 1</h1>
            </span>
          </center>

        </div>

        <footer class="card-footer">
          <p class="card-footer-item">
            <a class="button is-primary is-rounded is-fullwidth" href="inputantrian.php?huruf=A" target="_blank">CETAK NOMOR ANTRIAN</a>
          </p>

        </footer>


      </div>
    </div>




    <div class="column" style="margin-left:10px">

      <div class="card">
        <div class="card-image" style="height:250px">
          <figure class="image is-4by3">
            <img src="gambar/dr2.jpg" style="height:250px">
          </figure>
        </div>

        <div class="card-content">
          <center>
            <span style="font-size:36px">
              <h1>PENDAFTARAN 2</h1>
            </span>
          </center>


        </div>


        <footer class="card-footer">
          <p class="card-footer-item">
            <a class="button is-primary is-rounded is-fullwidth" href="inputantrian.php?huruf=B" target="_blank">CETAK NOMOR ANTRIAN</a>
          </p>

        </footer>

      </div>

    </div>






    <div class="column">
    </div>





  </div>

  <br />
  <div class="columns">
    <div class="column is-full">
      <center>&copy; Puskesmas Rowokele 2022</center>
    </div>
  </div>


</body>

</html>