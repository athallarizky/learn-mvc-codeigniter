<!DOCTYPE html>
<html>
    <head>
		<title>Music Festival</title>
	</head>
	
	<body>
		<a href="<?= site_url() ?>">Home Page</a>
		<h1>Music Festival List</h1>
		<ul>
			<!--Tampilkan semua data festival dari fungsi index() di controller ConFest-->
			<?php 
				foreach ($fests as $fest): 
			?>
			<!--Tampilkan pakai <li> dan <a> untuk link line up-->
			<li> <?= $fest["name"]?> | <a href="confest/lineup/<?= $fest["id"] ?>"> Line Up</a></li>
			<!--<li> berisi name festival, dan url pakai id festival-->
			
			<?php endforeach; ?>
		</ul>
	</body>
</html>