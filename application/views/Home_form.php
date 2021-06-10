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
                <div class="col-md-12">
                    <div class="card">
                        <form action="<?= site_url('Home/process') ?>" method="post">
                            <div class="card-body">
                                <h4 class="card-title">Personal Info</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" name="id" value="<?= $row->karyawan_id ?>">
                                        <input class="form-control" type="text" name="karyawan_name" value="<?= $row->name ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-end control-label col-form-label">Gender</label>
                                    <div class="col-sm-9">
                                        <select name="gender" class="form-control custom-select" required>
                                            <option value="" selected="selected" disabled>SELECT</option>
                                            <option value="L" <?= $row->gender == 'L' ? 'selected' : '' ?>> Laki-Laki</option>
                                            <option value="P" <?= $row->gender == 'P' ? 'selected' : '' ?>> Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-end control-label col-form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="phone" value="<?= $row->phone ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-end control-label col-form-label">Position</label>
                                    <div class="col-sm-9">
                                        <select name="position" class="form-control custom-select" required>
                                            <option value="" selected="selected" disabled>SELECT</option>
                                            <option value="Manager" <?= $row->position == 'Manager' ? 'selected' : '' ?>>Manager </option>
                                            <option value="Supervisor" <?= $row->position == 'Supervisor' ? 'selected' : '' ?>>Supervisor</option>
                                            <option value="Marketing" <?= $row->position == 'Marketing' ? 'selected' : '' ?>>Marketing</option>
                                            <option value="Desain Grafis" <?= $row->position == 'Desain Grafis' ? 'selected' : '' ?>>Desain Grafis</option>
                                            <option value="Cashier" <?= $row->position == 'Cashier' ? 'selected' : '' ?>>Cashier</option>
                                            <option value="Office Girl" <?= $row->position == 'Office Girl' ? 'selected' : '' ?>>Office Girl</option>
                                            <option value="Security" <?= $row->position == 'Security' ? 'selected' : '' ?>>Security</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="address" required><?= $row->address ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-footer">
                                    <button type="submit" name="<?= $page ?>" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary float-right">Reset</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <footer class="footer text-center">
            </footer>

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