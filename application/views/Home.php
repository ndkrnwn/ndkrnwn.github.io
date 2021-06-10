<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
	<meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
	<meta name="robots" content="noindex,nofollow">
	<title>Data Karyawan</title>
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/assets/assets/images/favicon.png">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/assets/extra-libs/multicheck/multicheck.css">
	<link href="<?= base_url() ?>/assets/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
	<link href="<?= base_url() ?>/assets/dist/css/style.min.css" rel="stylesheet">
</head>

<body>
	<div class="page-wrapper">
		<div class="page-breadcrumb">
			<div class="row">
				<div class="col-12 d-flex no-block align-items-center">
					<h4 class="page-title">Data Karyawan</h4>
					<div class="ms-auto text-end">
						<nav aria-label="breadcrumb">
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="card-header">
								<a href="<?= site_url('Home/add') ?>" class="btn btn-primary float-right">
									<i class="fa fa-user-plus"></i> <b>Create</b>
								</a>
							</div>
							<div class="table-responsive">
								<table id="example2" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th width="50px">#</th>
											<th width="150px">Name</th>
											<th>Gender</th>
											<th>Phone</th>
											<th>Address</th>
											<th>Position</th>
											<th width="200px">Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1;
										foreach ($row->result() as $key => $data) { ?>
											<tr>
												<td><?= $no++ ?> </td>
												<td><?= $data->name ?> </td>
												<td><?= $data->gender == 'L' ? "Laki Laki" : "Perempuan" ?> </td>
												<td><?= $data->phone ?> </td>
												<td><?= $data->address ?> </td>
												<td><?= $data->position ?> </td>
												<td class="text-center" width="150px">
													<a href="<?= site_url('Home/edit/' . $data->karyawan_id) ?>" class="btn btn-primary btn-xs">
														<i class=" fa fa-edit"></i><b>Update</b>
													</a>
													<a href="<?= site_url('Home/del/' . $data->karyawan_id) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin?')">
														<i class="fa fa-trash"></i><b>Delete</b>
													</a>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?= base_url() ?>/assets/assets/libs/jquery/dist/jquery.min.js"></script>
	<script src="<?= base_url() ?>/assets/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>/assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
	<script src="<?= base_url() ?>/assets/assets/extra-libs/sparkline/sparkline.js"></script>
	<script src="<?= base_url() ?>/assets/dist/js/waves.js"></script>
	<script src="<?= base_url() ?>/assets/dist/js/sidebarmenu.js"></script>
	<script src="<?= base_url() ?>/assets/dist/js/custom.min.js"></script>
	<script src="<?= base_url() ?>/assets/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
	<script src="<?= base_url() ?>/assets/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
	<script src="<?= base_url() ?>/assets/assets/extra-libs/DataTables/datatables.min.js"></script>
	<script>
		$('#zero_config').DataTable();
	</script>

</body>

</html>