<html>
	<head>
		<title>TOKO MAKANAN</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="script.js"></script>
	</head>

	<body>
		<div class="header"><strong><font>TOKO MAKANAN KRISNA</font></strong></div><br><hr>
		<div class="header2"><strong><font>MAKANAN</font></strong></div>
		<table align="center" cellpadding="20" cellspacing="20">
			<tr class="menu">
				<td><img src="ng.JPG" width="150" height="100"></td>
				<td><img src="ma.JPG" width="150" height="100"></td>
				<td><img src="b.JPG" width="150" height="100"></td>
				<td><img src="k.JPG" width="150" height="100"></td>
			</tr>
			<tr class="menu">
				<td>Nasi Goreng <br> Rp. 12.0000</td>
				<td>Mie Ayam <br> Rp. 10.0000</td>
				<td>Bakso <br> Rp. 15.0000</td>
				<td>Kwetiau <br> Rp. 14.0000</td>
			</tr>
		</table><br><hr>

		<div class="header2"><strong><font>MINUMAN</font></strong></div>
		<div >
			<table align="center" cellpadding="20" cellspacing="20">
				<tr class="menu">
					<td><img src="et.JPEG" width="150" height="100"></td>
					<td><img src="th.JPEG" width="150" height="100"></td>
					<td><img src="ej.JPG" width="150" height="100"></td>
					<td><img src="est.JPG" width="150" height="100"></td>
				</tr>
				<tr class="menu">
					<td>Es Teh <br> Rp. 3.0000</td>
					<td>Teh Hangat <br> Rp. 2.0000</td>
					<td>Es Jeruk <br> Rp. 5.0000</td>
					<td>Es Teler <br> Rp. 8.0000</td>
				</tr>
			</table>
		</div><br><hr>
		
		<div class="pesan">
			<h1>PESAN DISINI</h1>
			<form name="form1" method="post" action="proses.php" onSubmit="validasi()">
				<table width="30%" border="0" align="center">
					<tr>
						<td>Nama</td>
						<td><input name="nama" type="text" id="nama"></td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td><input name="alamat" type="text" id="alamat"></td>
					</tr>

					<tr>
						<td>Pilihan Menu : </td>
					</tr>

					<tr>
						<td></td>
						<td>Makanan</td>
						<td>
							<select name="makanan" id="makanan">
								<option>Nasi Goreng</option>
								<option>Mie Ayam</option>
								<option>Bakso</option>
								<option>Kwetiau</option>
							</select>
						</td>
					</tr>

					<tr>
						<td></td>
						<td>Minuman</td>
						<td>
							<select name="minuman" id="minuman">
								<option>Es Teh</option>
								<option>Teh Hangat</option>
								<option>Es Jeruk</option>
								<option>Es Teler</option>
							</select>
						</td>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal"></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>