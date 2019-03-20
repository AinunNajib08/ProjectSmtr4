<html>
<head>
	<title>Cara Membuat Heading dengan Helper HTML Codeigniter | MalasNgoding.com</title>
</head>
<body>
    <h1>HEADING</h1>
	<?php 
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",1);
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",2);
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",3);
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",4);
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",5);
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",6);
    ?>
    <br>
    <h2>VIEW</h2>
    <h3><?php echo $judul; ?></h3>
	<h4><?php echo $tutorial; ?></h4>
</body>
</html>