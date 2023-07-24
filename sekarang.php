  <?php
    $konek = mysqli_connect("localhost", "root", "", "antrian");

    $tampil = mysqli_query($konek, "select * from tabelantrian where panggil='sudah' order by idantrian desc");
    $data = mysqli_fetch_array($tampil);

    ?>


  <span style="font-size:99px" id="sekarang">
      <?php
        if ($data['animasi'] == '') {


            if (strlen($data['nomor']) == 1) {
                print "<b class='animate__animated animate__flash animate__infinite'>$data[huruf] 0$data[nomor]</b>";
            } else {
                print "<b class='animate__animated animate__flash animate__infinite'>$data[huruf]$data[nomor]</b>";
            }
        } else {

            if (strlen($data['nomor']) == 1) {
                print "<b>$data[huruf] 0$data[nomor]</b>";
            } else {
                print "<b>$data[huruf]$data[nomor]</b>";
            }
        }
        ?>
  </span>

  <br /><br />
  <span style="font-size:45px">
      <?php print "Pendaftaran $data[loket]"; ?>
  </span>

  <?php
    $edit2 = mysqli_query($konek, "update tabelantrian set animasi='sudah' where nomor='$data[nomor]'");
    ?>