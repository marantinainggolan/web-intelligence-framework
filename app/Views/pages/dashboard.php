<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Kecamatan Batu Aji </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('template/vendors/feather/feather.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('template/vendors/mdi/css/materialdesignicons.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('template/vendors/ti-icons/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('template/vendors/typicons/typicons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('template/vendors/simple-line-icons/css/simple-line-icons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('template/vendors/css/vendor.bundle.base.css'); ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url('template/vendors/datatables.net-bs4/dataTables.bootstrap4.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('template/js/select.dataTables.min.css'); ?>">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('template/css/vertical-layout-light/style.css'); ?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('template/images/favicon.png'); ?>">" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                </div>
                <div>
                    <a class="navbar-brand brand-logo" href="<?= base_url('/'); ?>">
                        <img src="<?= base_url('template/images/Kota_Batam.webp'); ?>" style="width: 30px;" alt="logo" />
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="<?= base_url('/'); ?>">
                        <img src="<?= base_url('template/images/Kota_Batam.webp'); ?>" style="width: 30px;" alt="logo" />
                    </a>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top">
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                        <h1 class="welcome-text">Dashboard<span class="text-black fw-bold"> Kecamatan Batu Aji</span></h1>
                    </li>
                </ul>

                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/dashboard'); ?>">
                            <i class="mdi mdi-grid-large menu-icon"></i>
                            <span class="menu-title">Home</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Data Kecamatan</li>
                    <li class="nav-item">
                        <a href="<?= base_url('/dashboard'); ?>" class="nav-link">
                            <i class="menu-icon mdi mdi-floor-plan"></i>
                            <span class="menu-title">Pegawai Kecamatan</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="home-tab">
                                <div class="tab-content tab-content-basic">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                                        <div class="row">
                                            <div class="col-lg-8 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded table-darkBGImg">
                                                            <div class="card-body">
                                                                <div class="col-sm-8">
                                                                    <h3 class="text-white upgrade-info mb-0">
                                                                        Tingkatkan kinerja kerja <span class="fw-bold">Kecamatan Batu Aji</span> untuk kemajuan Kota Batam
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="d-sm-flex justify-content-between align-items-start">
                                                                    <div>
                                                                        <h4 class="card-title card-title-dash">Daftar Karyawan Kecamatan Kota Batam</h4>
                                                                    </div>
                                                                    <div>
                                                                        <a href="<?= base_url('pages/new') ?>" class="btn btn-primary btn-lg text-white mb-0 me-0"><i class="mdi mdi-account-plus"></i>Tambah Karyawan</a>
                                                                    </div>
                                                                </div>
                                                                <div class="table-responsive  mt-1">

                                                                    <?php
                                                                    if (session()->getFlashdata('success')) : ?>
                                                                        <div class="alert alert-success alert-dismissible">
                                                                            <button type="button" class="btn-close" data-bs-dismiss="alert">&times;</button>
                                                                            <?php echo session()->getFlashdata('success') ?>
                                                                        </div>
                                                                    <?php elseif (session()->getFlashdata('failed')) : ?>
                                                                        <div class="alert alert-danger alert-dismissible">
                                                                            <button type="button" class="btn-close" data-bs-dismiss="alert">&times;</button>
                                                                            <?php echo session()->getFlashdata('failed') ?>
                                                                        </div>
                                                                    <?php endif; ?>

                                                                    <table class="table select-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Nama</th>
                                                                                <th>Jabatan</th>
                                                                                <th>Masa Jabatan</th>
                                                                                <th>Status</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <?php
                                                                            if ($works > 0) :
                                                                                foreach ($works as $work) : ?>
                                                                                    <tr>
                                                                                        <td><?= $work['nama'] ?></td>
                                                                                        <td><?= $work['jabatan'] ?></td>
                                                                                        <td><?= $work['masajabatan'] ?></td>
                                                                                        <td><?= $work['status'] ?></td>
                                                                                        <td class="d-flex">
                                                                                            <a href="<?= base_url('pages/edit/' . $work['id']) ?>" class="btn btn-sm btn-success" title="Edit">Edit</a>
                                                                                            <form class="display-none" method="post" action="<?= base_url('posts/' . $work['id']) ?>" id="postDeleteForm<?= $work['id'] ?>">
                                                                                                <input type="hidden" name="_method" value="DELETE" />
                                                                                                <a href="javascript:void(0)" onclick="deletePost('postDeleteForm<?= $work['id'] ?>')" class="btn btn-sm btn-danger" title="Delete">Delete</a>
                                                                                            </form>
                                                                                        </td>
                                                                                    </tr>
                                                                                <?php endforeach;
                                                                            else : ?>
                                                                                <tr rowspan="1">
                                                                                    <td colspan="4">
                                                                                        <h6 class="text-danger text-center">No post found</h6>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php endif ?>

                                                                            <!-- <tr>
                                                                                <td>
                                                                                    <h6>Brandon Washington</h6>
                                                                                </td>
                                                                                <td>
                                                                                    <h6>Company name 1</h6>
                                                                                </td>
                                                                                <td>
                                                                                    <h6>Company name 1</h6>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="badge badge-opacity-danger">Tidak Bekerja</div>
                                                                                </td>
                                                                            </tr>

                                                                            </tr> -->
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2022. All rights reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="<?= base_url('template/vendors/js/vendor.bundle.base.js'); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url('template/vendors/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?= base_url('template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js'); ?>"></script>
    <script src="<?= base_url('template/vendors/progressbar.js/progressbar.min.js'); ?>"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url('template/js/off-canvas.js'); ?>"></script>
    <script src="<?= base_url('template/js/hoverable-collapse.js'); ?>"></script>
    <script src="<?= base_url('template/js/template.js'); ?>"></script>
    <script src="<?= base_url('template/js/settings.js'); ?>"></script>
    <script src="<?= base_url('template/js/todolist.js'); ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?= base_url('template/js/jquery.cookie.js" type="text/javascript'); ?>"></script>
    <script src="<?= base_url('template/js/dashboard.js'); ?>"></script>
    <script src="<?= base_url('template/js/Chart.roundedBarCharts.js'); ?>"></script>
    <!-- End custom js for this page-->
</body>

</html>