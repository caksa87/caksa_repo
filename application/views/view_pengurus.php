<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Member list</title>
	<!-- Icons -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
	<!-- Argon CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/argon.css" rel="stylesheet">
	<!-- Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

	<style type="text/css">
		.tb {
			font-size: 16px !important;
		}

		.icon {
			width: 1rem;
			height: 1rem;
		}

		.icon-shape {
		    display: inline-flex;
		    padding: 12px;
		    text-align: center;
		    border-radius: 50%;
		    align-items: center;
		    justify-content: center;
		}

		.rounded-circle {
			border-radius: 50%;
		}

		.edit {
			background-color: #11cdef;
		}

		.del {
			background-color: #f5365c;
		}
	</style>
</head>
<body style="background-color: #ececec">
	<center>
		<!-- Title -->
		<div class="card card-stats" style="max-width: 1024px; width: 100%; padding-top: 20px; padding-bottom: 20px; background-color: #5e72e4; margin-bottom: 40px; border-top-left-radius: 0; border-top-right-radius: 0;">
			<h1 style="color: #fff; font-weight: bold;">Member List</h1>
		</div>
		<!-- End Title -->

		<!-- Form -->
		<div class="card card-stats" style="max-width: 1024px; width: 100%; padding-top: 20px; padding-left: 20px; padding-right: 20px; background-color: #f9f9f9; box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.12);">
			<?php echo form_open('pengurus/addpengurus'); ?>
				<h2 align="left" style="margin-bottom: 20px; color: #c1c1c1;">Add New Member</h2>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<h4 align="left">ID Number</h4>
							<input type="number" name="id" class="form-control form-control-alternative">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<h4 align="left">Name</h4>
							<input type="text" name="nama" class="form-control form-control-alternative">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<h4 align="left">Address</h4>
							<input type="text" name="alamat" class="form-control form-control-alternative">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<h4 align="left">Gender</h4>
							<div class="row" style="margin-top: 13px; margin-left: 0;">
								<div class="col-md-3" align="left" style="padding-left: 0;"><input type="radio" name="gender" value="Pria" style="width: 20px; height: 20px;">Gentleman</div>
								<div class="col-md-3"><input type="radio" name="gender" value="Wanita" style="width: 20px; height: 20px;">Lady</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<h4 align="left">Sallary</h4>
							<input type="number" name="gaji" class="form-control form-control-alternative">
						</div>
					</div>
				</div>

				<hr>
				
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12" align="left">
						<h4 align="left">Action</h4>
						<button type="submit" class="btn btn-success" style="font-weight: bold; background-color: #30c183;">Submit</button>
						<button type="reset" class="btn btn-default" style="font-weight: bold;">Clear</button>
					</div>
				</div>
			<?php echo form_close() ?>
		</div>
		<!-- End Form -->

		<!-- Table -->
		<div class="card card-stats" style="max-width: 1024px; width: 100%; background: #172b4d; box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.12); margin-top: 50px;">
			<div class="card bg-transparent shadow">
				<div class="card-header bg-transparent border-0">
					<div class="row align-items-center">
						<div class="col">
							<h2 class="mb-0" align="left" style="color: #c1c1c1;">Member List</h2>
						</div>
					</div>
				</div>
				<div class="table-responsive">
	              <!-- Projects table -->
	              <table class="table align-items-center table-flush table-dark">
	                <thead class="thead-dark">
	                  <tr>
	                    <th scope="col" class="tb">ID</th>
	                    <th scope="col" class="tb">Name</th>
	                    <th scope="col" class="tb">Address</th>
	                    <th scope="col" class="tb">Gender</th>
	                    <th scope="col" class="tb">Sallary</th>
	                    <th scope="col"></th>
	                  </tr>
	                </thead>
	                <tbody>
	                  <?php foreach ($data as $row) { ?>
							<tr>
								<td class="tb" style="font-weight: bolder;"><?php echo $row['id']; ?></td>
								<td class="tb"><?php echo $row['nama']; ?></td>
								<td class="tb"><?php echo $row['alamat']; ?></td>
								<td class="tb"><?php echo $row['gender']; ?></td>
								<td class="tb"><?php echo $row['gaji']; ?></td>
								<td>
									<?php echo anchor('pengurus/editpengurus/'.$row['id'],' ','class="icon icon-shape rounded-circle edit"'); ?>
									<?php echo anchor('pengurus/delete/'.$row['id'],' ','class="icon icon-shape rounded-circle del"'); ?>
								</td>
							</tr>
						<?php } ?>
	                </tbody>
	              </table>
	            </div>
			</div>
		</div>
		<!-- End Table -->
	</div>

	<!-- Footer -->
	<div class="card card-stats text-center" style="max-width: 1024px; width: 100%; border: none; background: transparent; margin-top: 150px; margin-bottom: 50px;">
		You have reached the bottom
	</div>
	<!-- End Footer -->
</center>

<!-- Core -->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<!-- Argon JS -->
<script src="<?php echo base_url(); ?>assets/js/argon.min.js" type="text/javascript"></script>
</body>
</html>