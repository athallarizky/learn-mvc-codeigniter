<!DOCTYPE html>
<html>
    <head>
		<title>Kalkulator Simple</title>
	</head>
	
	<body>
		<a href="<?= site_url(); ?>">Home Page</a>
		<p>Kalkulator Simple</p>
		<form method="post" action="<?= site_url()."/ConCalc/hitung"?>">
			<input type="number" value="0" name="satu">
			<input type="number" value="0" name="dua">
			<select name="operator">
				<option disabled selected>Operasi</option>
				<!--Tampilkan semua <option> yang berisi data dari fungsi index() di controller Cons-->
				<?php foreach($operators as $operator): ?>
					<option value="<?= $operator ?>" name="<?= $operator ?>"><?= $operator ?></option>
				<?php endforeach; ?>
			</select>
			<input type="submit" value="hitung">
		</form>
	</body>
</html>