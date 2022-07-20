<?php 
$fp = fopen("tokomakanan.txt", "r");
?>

<html>
<head>
    <title>TOKO MAKANAN</title>
    <style type="text/css">
        table{
            border-color: black;
            background-color: white;
            box-shadow: 8px 8px 8px rgba(0,0,0,0.8);
        }
        h1{
            border-style: dashed;
            border-color: white;
            color: white;
        }
        a{
            color: white;
        }
    </style>
</head>
<body bgcolor="blueviolet">
    <h1 align="center">REKAB DAFTAR PESANAN</h1>
    <div align="center"><strong><a href="tampilan.php">::INGIN PESAN KEMBALI::</a></strong></div>
    <hr>
    <table border="1" width="80%" style="margin: 0 auto;" >
        <thead>
            <tr>
                <td>Tanggal</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Makanan</td>
                <td>Minuman</td>
            </tr>
        </thead>
        <tbody>
            <?php while ($isi = fgets($fp)): ?>
                <?php $data = explode('|', $isi) ?>
                <tr>
                    <td><?php echo $data[0] ?></td>
                    <td><?php echo $data[1] ?></td>
                    <td><?php echo $data[2] ?></td>
                    <td><?php echo $data[3] ?></td>
                    <td><?php echo $data[4] ?></td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>

</body>
</html>