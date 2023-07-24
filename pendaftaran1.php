<?php
session_start();

error_reporting(0);

$_SESSION['loket'] = 1;
$_SESSION['huruf'] = 'A';
$_SESSION['jenis'] = 'PENDAFTARAN';
$_SESSION['halaman'] = 'pendaftaran1.php';

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Petugas 1</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

  <style>
    * {
      padding: 0px;
      margin: 0px;
    }
  </style>

</head>

<body style="padding:20px; font-family: 'Merriweather', serif; background-image:url('gambar/bg.jpg'); background-size:cover">


  <?php
  $konek = mysqli_connect("localhost", "root", "", "antrian");

  $tampil = mysqli_query($konek, "select * from tabelantrian where panggil='' and huruf='$_SESSION[huruf]' order by idantrian asc");
  $data = mysqli_fetch_array($tampil);
  $nomor = $data['nomor'];
  $huruf = $data['huruf'];
  $jumlah = strlen($nomor);

  ?>



  <div class="columns">
    <div class="column is-one-second"><img src="gambar/pkm.png" style="width:15%" /></div>
    <div class="column" style="font-size:35px; text-align:right"><?php print "$_SESSION[jenis] - $_SESSION[loket]"; ?></div>
  </div>


  <br />
  <div class="columns">
    <div class="column "></div>
    <div class="column is-one-third" style="margin-left:10px">

      <div class="card">
        <br />

        <span style="font-size:36px">
          <center>NOMOR ANTRIAN</center>
        </span>

        <div class="card-content" style=" font-size:80px; height:200px">
          <center>

            <span><?php
                  if (strlen($data['nomor']) == 1) {
                    print "$data[huruf] 0$data[nomor]";
                  } else {
                    print "$data[huruf]$data[nomor]";
                  }
                  ?></span>

          </center>
        </div>

        <footer class="card-footer">
          <p class="card-footer-item">

            <button class="button is-success is-rounded" id='playaudio' onclick='playAudio()'>PANGGIL</button>

          </p>
        </footer>

      </div>
    </div>

    <div class="column " style="margin-left:10px"></div>

  </div>

  <button class="button is-primary" onclick="return konfirmasi()"><a style="font-size: medium;" href="deletedb.php?">HAPUS DATA</a></button>

  <script type="text/javascript" language="JavaScript">
    function konfirmasi() {
      tanya = confirm("Apakah Anda Yakin Akan Menghapus Data Antrian Hari ini ?");
      if (tanya == true) return true;
      else return false;
    }
  </script>

  <br /><br />
  <div class="columns">
    <div class="column is-full">
      <center>&copy; Puskesmas Rowokele 2022</center>
    </div>
  </div>



</body>

</html>




<?php
include "bunyi.php";
?>