<!DOCTYPE html>
<html>
    <head>
		<title>Music Festival</title>
	</head>
	
	<body>
		<a href="<?= site_url() ?>">Home Page</a><br>
		<a href="<?= site_url() . "/confest"?>">Back</a>
		<h1><?php echo $festname ?> | Line up</h1>
		<ul>
			<?php foreach($lineups as $lineup): ?>
			<!--Tampilkan semua list line up dj dari fungsi lineup() di controller ConFest festival (pakai <li>)-->
			<li><?= $lineup ?></li>
			<?php endforeach; ?>
		</ul>
	</body>
</html>