<!DOCTYPE html>
<html>
    <head>
		<title>Hasil</title>
	</head>
	
	<body>
		<a href="<?= site_url() ?>">Home Page</a>
		<h1>Hasil Operasi</h1>
		<p><?= "Hasil dari <b>" . $angka1 . $operator . $angka2 ."</b> adalah: " . $result ?></p>
		<a href="<?= site_url() . "/ConCalc/" ?>">Hitung lagi</a>
	</body>
</html>