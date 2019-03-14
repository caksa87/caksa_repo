<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Perkalian</title>
</head>
<body>
	<?php echo form_open('hitung/perkalian'); ?>
	<?php echo form_input('angka1', $angka1); ?> X 
	<?php echo form_input('angka2', $angka2); ?>
	<br>
	<?php echo form_submit('submit','Hitung'); ?>
	<?php echo form_close(); ?>
	<br>
	<h3>Hasil : <?php echo $hasil; ?></h3>
	<br>
	<?php echo anchor('hitung','Kembali') ?>
</body>
</html>