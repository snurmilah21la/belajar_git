<?php?>

<!DOCTYPE html>
<html>
<head>
	<title>Pemilihan Senbud dan UPD</title>
</head>
<body>
<form method="post">
<table align="center" border="1" cellspacing="1" cellpadding="3">
	
	<tr>
		<th>NIS</th>
		<th>:</th>
		<th><input type="text" name="nis"></th>
	</tr>
	<tr>
		<th>Nama</th>
		<th>:</th>
		<th><input type="text" name="nama"></th>
	</tr>
	<tr>
		<th>Rombel</th>
		<th>:</th>
		<td><select name="rombel">
			<option></option>
			<option value="BDP X-1">BDP X-1</option>
			<option value="BDP X-2">BDP X-2</option>
			<option value="HTL X-1">HTL X-1</option>
			<option value="MMD X-1">MMD X-</option>
			<option value="MMD X-2">MMD X-2</option>
			<option value="OTKP X-1">OTKP X-1</option>
			<option value="OTKP X-2">OTKP X-2</option>
			<option value="RPL X-1">RPL X-1</option>
			<option value="RPL X-2">RPL X-2</option>
			<option value="RPL X-3">RPL X-3</option>
			<option value="RPL X-4">RPL X-4</option>
			<option value="TBG X-1">TBG X-1</option>
			<option value="TKJ X-1">TKJ X-1</option>
			<option value="TKJ X-2">TKJ X-2</option>
			<option value="TKJ X-3">TKJ X-3</option>
			<option value="TKJ X-4">TKJ X-4</option>
			<option value="BDP XI-1">BDP XI-1</option>
			<option value="BDP XI-2">BDP XI-2</option>
			<option value="HTL XI-1">HTL XI-1</option>
			<option value="MMD XI-1">MMD XI-1</option>
			<option value="MMD XI-2">MMD XI-2</option>
			<option value="OTKP XI-1">OTKP XI-1</option>
			<option value="OTKP XI-2">OTKP XI-2</option>
			<option value="RPL XI-1">RPL XI-1</option>
			<option value="RPL XI-2">RPL XI-2</option>
			<option value="RPL XI-3">RPL XI-3</option>
			<option value="RPL XI-4">RPL XI-4</option>
			<option value="TBG XI-1">TBG XI-1</option>
			<option value="TKJ XI-1">TKJ XI-1</option>
			<option value="TKJ XI-2">TKJ XI-2</option>
			<option value="TKJ XI-3">TKJ XI-3</option>
			<option value="TKJ XI-4">TKJ XI-4</option>
			</select></td>
	</tr>
	<tr>
		<th>Rayon</th>
		<th>:</th>
			<td><select name="rayon">
				<option></option>
				<option value="Ciawi 1">Ciawi 1</option>
				<option value="Ciawi 2">Ciawi 2</option>
				<option value="Ciawi 3">Ciawi 3</option>
				<option value="Ciawi 4">Ciawi 4</option>
				<option value="Ciawi 5">Ciawi 5</option>
				<option value="Cibedug 1">Cibedug 1</option>
				<option value="Cibedug 2">Cibedug 2</option>
				<option value="Cibedug 3">Cibedug 3</option>
				<option value="Cicurug 1">Cicurug 1</option>
				<option value="Cicurug 2">Cicurug 2</option>
				<option value="Cicurug 3">Cicurug 3</option>
				<option value="Cicurug 4">Cicurug 4</option>
				<option value="Cicurug 5">Cicurug 5</option>
				<option value="Cicurug 6">Cicurug 6</option>
				<option value="Cicurug 7">Cicurug 7</option>
				<option value="Cisarua 1">Cisarua 1</option>
				<option value="Cisarua 2">Cisarua 2</option>
				<option value="Cisarua 3">Cisarua 3</option>
				<option value="Cisarua 4">Cisarua 4</option>
				<option value="Cisarua 5">Cisarua 5</option>
				<option value="Cisarua 6">Cisarua 6</option>
				<option value="Sukasari 1">Sukasari 1</option>
				<option value="Sukasari 2">Sukasari 2</option>
				<option value="Tajur 1">Tajur 1</option>
				<option value="Tajur 2">Tajur 2</option>
				<option value="Tajur 3">Tajur 3</option>
				<option value="Tajur 4">Tajur 4</option>
				<option value="Tajur 5">Tajur 5</option>
				<option value="Wikrama 1">Wikrama 1</option>
				<option value="Wikrama 2">Wikrama 2</option>
				<option value="Wikrama 3">Wikrama 3</option>
				<option value="Wikrama 4">Wikrama 4</option>
			</select></td>
	</tr>
	<tr>
		<th>Seni Budaya</th>
		<th>:</th>
			<td><select name="senbud" required="">
				<option></option>
				<option>Angklung-Senin</option>
				<option>Angklung-Rabu</option>
				<option>Angklung-Kamis</option>
				<option>Degung-Selasa</option>
				<option>Musik Modern-Kamis</option>
				<option>Perkusi-Senin</option>
				<option>Perkusi-Selasa</option>
				<option>Perkusi-Kamis</option>
				<option>Seni Rupa-Rabu</option>
				<option>Seni Rupa-Kamis</option>
				<option>Seni Suara-Senin</option>
				<option>Seni Suara-Selasa</option>
				<option>Seni Tari-Rabu</option>
				<option>Seni Tari-Kamis</option>
				<option>Teater-Senin</option>
				<option>Teater-Selasa</option>
				<option>Teater-Kamis</option>
			</select></td>
	</tr>
	<tr>
		<th>UPD</th>
		<th>:</th>
			<td><select name="upd" required="">
				<option></option>
				<option>BTQ</option>
				<option>Karate</option>
				<option>KIR</option>
				<option>Paskibra</option>
				<option>Taekwondo</option>
			</select></td>
	</tr>
	<tr>
		<th>UPD Produkti</th>
		<th>:</th>
			<td><select name="updprod" required="">
				<option></option>
				<option>Kelas X</option>
				<option></option>
			</select></td>
	</tr>

</table>
</form>
</body>
</html>
