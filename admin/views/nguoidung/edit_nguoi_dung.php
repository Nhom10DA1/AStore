<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:29:52 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Sửa bài viết | AStore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- CSS -->
    <?php
    require_once "views/layouts/libs_css.php";
    ?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- HEADER -->
        <?php
        require_once "views/layouts/header.php";

        require_once "views/layouts/siderbar.php";
        ?>

        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">Quản lý người dùng</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Cập nhật thông tin người dùng</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col">
                            <div class="h-100">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Cập nhật thông tin người dùng</h4>
                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <form action="?act=thay-doi-thong-tin&id=<?= $nguoiDung['id'] ?>" method="POST">
                                                <input type="hidden" name="id" value="<?= $nguoiDung['id'] ?>">
                                                <div class="mb-3">
                                                    <label for="employeeName" class="form-label">Tên(Họ và tên)</label>
                                                    <input type="text" class="form-control" name="ten" value="<?=$nguoiDung['ten']?>">
                                                    <span class="text-danger">
                                                        <?= !empty($_SESSION['errors']['ten']) ? $_SESSION['errors']['ten'] : ''  ?>
                                                    </span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="employeeName" class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email" value="<?=$nguoiDung['email']?>">
                                                    <span class="text-danger">
                                                        <?= !empty($_SESSION['errors']['email']) ? $_SESSION['errors']['email'] : ''  ?>
                                                    </span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="employeeName" class="form-label">Mật khẩu</label>
                                                    <input type="password" class="form-control" name="mat_khau"value="<?=$nguoiDung['mat_khau']?>">
                                                    <span class="text-danger">
                                                        <?= !empty($_SESSION['errors']['mat_khau']) ? $_SESSION['errors']['mat_khau'] : ''  ?>
                                                    </span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="employeeName" class="form-label">Số điện thoại</label>
                                                    <input type="number" class="form-control" name="so_dien_thoai"value="<?=$nguoiDung['so_dien_thoai']?>">
                                                    <span class="text-danger">
                                                        <?= !empty($_SESSION['errors']['so_dien_thoai']) ? $_SESSION['errors']['so_dien_thoai'] : ''  ?>
                                                    </span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="employeeName" class="form-label">Địa chỉ</label>
                                                    <input type="text" class="form-control" name="dia_chi" value="<?=$nguoiDung['dia_chi']?>">
                                                    <span class="text-danger">
                                                        <?= !empty($_SESSION['errors']['dia_chi']) ? $_SESSION['errors']['dia_chi'] : ''  ?>
                                                    </span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="employeeName" class="form-label">Avatar</label>
                                                    <input class="form-control" type="file" id="formFileDisabled" name="hinh_anh" value="<?=$nguoiDung['hinh_anh']?>">
                                                    <span class="text-danger">
                                                        <?= !empty($_SESSION['errors']['hinh_anh']) ? $_SESSION['errors']['hinh_anh'] : ''  ?>
                                                    </span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="employeeName" class="form-label">Ngày sinh</label>
                                                    <input type="date" class="form-control" name="ngay_sinh" value="<?=$nguoiDung['ngay_sinh']?>">
                                                    <span class="text-danger">
                                                        <?= !empty($_SESSION['errors']['ngay_sinh']) ? $_SESSION['errors']['ngay_sinh'] : ''  ?>
                                                    </span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="VertimeassageInput" class="form-label">Giới tính</label>
                                                    <select class="form-select" name="gioi_tinh">
                                                        <option selected disabled>-Chọn giới tính-</option>
                                                        <option value="1" <?= $nguoiDung['gioi_tinh'] == 1 ? 'selected':''?>>Nam</option>
                                                        <option value="1" <?= $nguoiDung['gioi_tinh'] == 2 ? 'selected':''?>>Nữ</option>
                                                    </select>
                                                    <span class="text-danger">
                                                        <?= !empty($_SESSION['errors']['gioi_tinh']) ? $_SESSION['errors']['gioi_tinh'] : ''  ?>
                                                    </span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="VertimeassageInput" class="form-label">Vai trò</label>
                                                    <select class="form-select" name="vai_tro">
                                                        <option selected disabled>-Chọn vai trò-</option>
                                                        <option value="1" <?= $nguoiDung['vai_tro'] == 1 ? 'selected':''?>>Admin</option>
                                                        <option value="1" <?= $nguoiDung['vai_tro'] == 2 ? 'selected':''?>>Người dùng</option>
                                                    </select>
                                                    <span class="text-danger">
                                                        <?= !empty($_SESSION['errors']['vai_tro']) ? $_SESSION['errors']['vai_tro'] : ''  ?>
                                                    </span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="VertimeassageInput" class="form-label">Trạng thái</label>
                                                    <select class="form-select" name="trang_thai">
                                                        <option selected disabled>-Chọn trạng thái-</option>
                                                        <option value="1" <?= $nguoiDung['trang_thai'] == 1 ? 'selected':''?>>Hoạt động</option>
                                                        <option value="1" <?= $nguoiDung['trang_thai'] == 2  ? 'selected':''?>>Ngưng hoạt động</option>
                                                    </select>
                                                    <span class="text-danger">
                                                        <?= !empty($_SESSION['errors']['trang_thai']) ? $_SESSION['errors']['trang_thai'] : ''  ?>
                                                    </span>
                                                </div>
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Velzon.
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
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <?php
    require_once "views/layouts/libs_js.php";
    ?>

</body>

</html>