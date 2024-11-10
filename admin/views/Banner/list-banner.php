<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>Quản lý Banner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- CSS -->
    <?php require_once "views/layouts/libs_css.php"; ?>
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- HEADER -->
        <?php
        require_once "views/layouts/header.php";
        require_once "views/layouts/siderbar.php";
        ?>

        <div class="vertical-overlay"></div>

        <!-- Start right Content here -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                        <h4 class="mb-sm-0">Quản lý Banner</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Banner</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Danh sách Banner</h4>
                                    <a href="?act=form-them-banner" class="btn btn-soft-success material-shadow-none">
                                        <i class="ri-add-circle-line align-middle me-1"></i> Thêm Banner
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-nowrap align-middle mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Banner</th>
                                                    <th scope="col">Trạng thái</th>
                                                    <th scope="col">Hành động</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($banners as $index => $banner) : ?>
                                                    <tr>
                                                        <td class="fw-medium"><?= $banner['id'] ?></td>
                                                        <td>
                                                        <img src="<?= $banner['ten_banner'] ?>" alt="Banner Image" style="width: 100px; height: auto;">

                                                        </td>
                                                        <td>
                                                            <?php if ($banner['trang_thai'] == 1) : ?>
                                                                <span class="badge bg-success">Hiển thị</span>
                                                            <?php else : ?>
                                                                <span class="badge bg-danger">Không hiển thị</span>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <div class="hstack gap-3 flex-wrap">
                                                                <a href="?act=form-sua-banner&id=<?= $banner['id'] ?>" class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                                                                <form action="?act=xoa-banner" method="post" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?')">
                                                                    <input type="hidden" name="id" value="<?= $banner['id'] ?>">
                                                                    <button type="submit" class="link-danger fs-15" style="border: none; background: none;">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    <!-- Back to top button -->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- Theme Customizer -->
    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <?php require_once "views/layouts/libs_js.php"; ?>
</body>
</html>