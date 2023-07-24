<html>

<head>
</head>

<body>
    <?php
    $konek = mysqli_connect("localhost", "root", "", "antrian");


    $tampil = mysqli_query($konek, "select * from tabelantrian order by idantrian desc");
    $data = mysqli_fetch_array($tampil);

    date_default_timezone_set("Asia/jakarta");
    ?>

<!-- <script type="text/javascript">
        window.onload = function() { waktu(); }
       
        function waktu() {
            var e = document.getElementById('waktu'),
            d = new Date(), h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());
       
            e.innerHTML = h +':'+ m +':'+ s;
       
            setTimeout('waktu()', 1000);
        }
       
        function set(e) {
            e = e < 10 ? '0'+ e : e;
            return e;
        }
    </script> -->

    <hr>

    <table style="width:100%" width="100%" border="0">
        <tr>
            <td align="center" style="width:50%">
                <?php print "$data[tanggal]"; ?>
            </td>

            <td align="center">
                <?php print "$data[waktu]"; ?>
            </td>
        </tr>


        <tr>
            <td colspan="2" align="center" style="font-size:36px; padding:30px">
                Nomor Antrian : <br>
                <span style="font-size:80px">
                    <?php
                    if (strlen($data['nomor']) == 1) {
                        print "$data[huruf] 0$data[nomor]";
                    } else {
                        print "$data[huruf]$data[nomor]";
                    }
                    ?>
                </span>
            </td>
        </tr>


        <tr>
            <td align="center" colspan="2">
                &copy; Puskesmas Rowokele
            </td>
        </tr>
    </table>

    <hr>

    <script type="text/javascript">
        window.print();


        window.onfocus = function() {
            window.close();
        }

        window.onmousemove = function() {
            window.close();
        }
    </script>

</body>

</html>