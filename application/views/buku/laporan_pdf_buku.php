<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <style type='text/css'>
        .table-data{
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td{
            border: 1px solid black;
            font-size: 11pt;
            padding: 10px 10px 10px 10px;
        }
        </style>
        
        <img src="assets/img/logo/logoperpus.jpeg"; style="height: 60px; width:90px";>
        <h3><center>Laporan Data Buku Perpustakaan Online</center></h3>
        <br/>
        <table class="table-data">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Terbit</th>
                    <th>Tahun Terbit</th>
                    <th>ISBN</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $warnagenap="#CCCCCC";
                $warnaganjil="#FFFFFF";
                $no = 1;
                foreach($buku as $b){
                    if ($no % 2 ==0)
                    {
                        $warna=$warnagenap;
                    }
                    else
                    {
                        $warna=$warnaganjil;
                    }
                    echo "<tr bgcolor='$warna'>";
                    ?>
                    <td><?=$no++; ?></td>
                        <td><?= $b['judul_buku']; ?></td>
                        <td><?= $b['pengarang']; ?></td>
                        <td><?= $b['penerbit']; ?></td>
                        <td><?= $b['tahun_terbit']; ?></td>
                        <td><?= $b['isbn']; ?></td>
                        <td><?= $b['stok']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
            <?php
            $tglcetak=date('Y-m-d');
            echo "<br>";
            echo "<div align='right'> Tanggal Cetak : $tglcetak</div>";
            ?>
        </table>
    </body>
    </html>
