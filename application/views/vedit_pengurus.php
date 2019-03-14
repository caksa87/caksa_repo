<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit data</title>
	<!-- Icons -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
	<!-- Argon CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/argon.css" rel="stylesheet">
	<!-- Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

  	<style type="text/css">
  		.sucs {
  			font-weight: bold;
  			background-color: #30c183;
  		}
  	</style>
</head>
<body style="background-color: #ececec">
	<center>
		<!-- Title -->
		<div class="card card-stats" style="max-width: 425px; width: 100%; padding-top: 20px; padding-bottom: 20px; background-color: #5e72e4; margin-bottom: 40px; border-top-left-radius: 0; border-top-right-radius: 0;">
			<h1 style="color: #fff; font-weight: bold;">Edit Data</h1>
		</div>
		<!-- End Title -->

		<!-- Form -->
		<div class="card card-stats" style="max-width: 425px; width: 100%; padding-top: 20px; padding-left: 20px; padding-right: 20px; background-color: #f9f9f9; box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.12);">
				<h2 align="left" style="margin-bottom: 0; color: #c1c1c1;">Edit Member Data</h2>
			<?php echo form_open('pengurus/edit_submit'); ?>
			<?php foreach($data->result_array() as $row)
				{ ?>
				<div class="row">
					<div class="col-md-12" style="margin-top: 10px; margin-bottom: 10px;">
						<div class="form-group">
							<h3 align="left" style="font-weight: bold;">ID Number : <?php echo $row['id']; ?></h3>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<h4 align="left">Name</h4>
							<input type="text" name="nama" value="<?php echo $row['nama']; ?>" class="form-control form-control-alternative">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<h4 align="left">Address</h4>
							<input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" class="form-control form-control-alternative">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<h4 align="left">Gender</h4>
							<div class="row" style="margin-top: 13px; margin-left: 0;">
								<div class="col-md-3" align="left" style="padding-left: 0;"><input type="radio" name="gender" value="Pria" <?php if (!(strcmp($row['gender'], "Pria"))) {echo "CHECKED";} ?> style="width: 20px; height: 20px;">Gentleman</div>
								<div class="col-md-3"><input type="radio" name="gender" value="Wanita" <?php if (!(strcmp($row['gender'], "Wanita"))) {echo "CHECKED";} ?> style="width: 20px; height: 20px;">Lady</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<h4 align="left">Sallary</h4>
							<input type="number" name="gaji" value="<?php echo $row['gaji']; ?>" class="form-control form-control-alternative">
						</div>
					</div>
				</div>

				<hr>
				
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12" align="left">
						<h4 align="left">Action</h4>
						<?php echo form_submit('submit', 'Ubah','class="btn btn-success sucs"'); ?>
						<button type="submit" class="btn btn-success" style="font-weight: bold; background-color: #30c183;">Submit</button>
						<button type="button" class="btn btn-primary" style="font-weight: bold;" onclick="self.history.back()">Cancel</button>
					</div>
				</div>
				<?php } ?>
			<?php echo form_close() ?>
		</div>
		<!-- End Form -->














		<br><br><br><br><br><br><br><br><br>
	<h2><?php echo $isi; ?></h2>
	<div class="container">
	<?php echo form_open('pengurus/edit_submit','class="form-horizontal"'); ?>
		<?php foreach($data->result_array() as $row)
			{ ?>
				<div class="form-group">
					<label class="control-label col-sm-2">ID</label>
					<div class="col-sm-10"><input class="form-control" type="number" name="id" value="<?php echo $row['id']; ?>" readonly="yes">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Nama</label>
					<div class="col-sm-10"><?php echo form_input('nama', $row['nama'],'class="form-control"'); ?>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Alamat</label>
					<div class="col-sm-10"><?php echo form_input('alamat', $row['alamat'],'class="form-control"') ?>
				</div>
				</div>
				<div class="form-group">
						<label class="control-label col-sm-2">Gender</label>
					<div class="col-sm-5"><input type="radio" name="gender" value="Pria" <?php if (!(strcmp($row['gender'], "Pria"))) {echo "CHECKED";
					} ?>>Pria</div>
					<div class="col-sm-5"><input type="radio" name="gender" value="Wanita" <?php if (!(strcmp($row['gender'], "Wanita"))) {echo "CHECKED";
					} ?>>Wanita</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Gaji</label>
					<div class="col-sm-10"><?php echo form_input('gaji', $row['gaji'],'class="form-control"') ?>
					</div>
				</div>
					<?php echo form_submit('submit', 'Ubah','class="btn btn-primary"'); ?> <input class="btn btn-danger" type="button" value="Batal" onclick="self.history.back()">
			<?php } ?>
	</table>
	<?php echo form_close(); ?>
	</div>

<!-- Core -->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<!-- Argon JS -->
<script src="<?php echo base_url(); ?>assets/js/argon.min.js" type="text/javascript"></script>
</html>