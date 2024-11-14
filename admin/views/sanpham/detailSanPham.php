<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:29:52 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Chi tiết sản phẩm</title>
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
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">Chi tiết sản phẩm</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Danh sách sản phẩm</a></li>
                                        <li class="breadcrumb-item active">Chi tiết sản phẩm</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Default box -->
                    <div class="card card-solid">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="col-12">
                                        <img style="width: 100%; height: 700px" src="<?= BASE_URL . $SanPham['anh_san_pham'] ?>" class="product-image" alt="Product Image">
                                    </div>
                                    <div class="col-12 product-image-thumbs">
                                        <?php foreach ($listAnhSanPham as $key => $anhSP): ?>
                                            <div class="product-image-thumb <?= BASE_URL . $anhSP[$key] == 0 ? 'active' : '' ?>"><img src="<?= BASE_URL . $anhSP['link_hinh_anh'] ?>" alt="Product Image"></div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h3 class="my-3">Tên sản phẩm: <?= $SanPham['ten_san_pham'] ?></h3>
                                    <hr>
                                    <h4 class="mt-3">Giá tiền: <small><?= $SanPham['gia_nhap'] ?></small></h4>
                                    <h4 class="mt-3">Giá khuyến mãi: <small><?= $SanPham['gia_khuyen_mai'] ?></small></h4>
                                    <h4 class="mt-3">Số lượng: <small><?= $SanPham['so_luong'] ?></small></h4>
                                    <h4 class="mt-3">Lượt xem: <small><?= $SanPham['luot_xem'] ?></small></h4>
                                    <h4 class="mt-3">Ngày nhập: <small><?= $SanPham['ngay_nhap'] ?></small></h4>
                                    <h4 class="mt-3">Danh mục: <small><?= $SanPham['ten_danh_muc'] ?></small></h4>
                                    <h4 class="mt-3">Trạng thái: <small><?= $SanPham['trang_thai'] == 1 ? 'Còn Hàng' : 'Hết Hàng' ?></small></h4>
                                    <h4 class="mt-3">Mô tả: <small><?= $SanPham['mo_ta'] ?></small></h4>
                                </div>
                            </div>
                            <br>
                            <div class="col-12">
                                <h2>Bình luận</h2>
                                <div class="">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Người bình luận</th>
                                                <th>Nội dung</th>
                                                <th>Ngày bình luận</th>
                                                <th>Trạng thái</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php    foreach ($listSanPham as $index => $sanPham) : ?>
                                                <tr>
                                                    <td class="fw-medium"><?= $key + 1 ?></td>
                                                    <td><a target="_blank"
                                                            href="<?= $sanPham['tai_khoan_id'] ?> "><?= $sanPham['ho_ten'] ?></a>
                                                    </td>
                                                    <td><?= $sanPham['noi_dung'] ?></td>
                                                    <td><?= $sanPham['ngay_dang'] ?></td>
                                                    <td><?= $sanPham['trang_thai'] == 1 ? 'Hiển thị' : 'Ẩn' ?></td>

                                                    <td><?= (strlen($sanPham['mo_ta']) > 50) ? substr($sanPham['mo_ta'], 0, 50) . "..." : $sanPham['mo_ta']; ?> </td>
                                                    <td><?= $sanPham['ten_danh_muc'] ?></td>
                                                    <td>
                                                       
                                                    </td>
                                                </tr>

                                            <?php endforeach;  ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("search-options");
        const searchIcon = document.querySelector(".mdi-magnify.search-widget-icon");
        const closeIcon = document.getElementById("search-close-options");
        const rows = document.querySelectorAll("tbody tr");
        // Khi nhấn vào biểu tượng kính lúp để thực hiện tìm kiếm
        searchIcon.addEventListener("click", function() {
            const query = searchInput.value.toLowerCase().trim(); // Lấy giá trị nhập vào trong ô tìm kiếm
            if (query === "") {
                return; // Nếu ô tìm kiếm trống, không làm gì cả
            }
            rows.forEach(row => {
                const name = row.querySelector("td:nth-child(2)").innerText.toLowerCase(); // Lấy tên người dùng từ cột thứ 2
                const email = row.querySelector("td:nth-child(3)").innerText.toLowerCase(); // Lấy email người dùng từ cột thứ 3

                // Kiểm tra nếu tìm kiếm có chứa từ khóa trong tên hoặc email
                if (name.includes(query) || email.includes(query)) {
                    row.style.display = ""; // Hiển thị người dùng nếu tên hoặc email chứa từ khóa
                } else {
                    row.style.display = "none"; // Ẩn người dùng nếu không khớp với từ khóa
                }
            });
            // Hiển thị biểu tượng đóng khi có kết quả tìm kiếm
            closeIcon.classList.remove("d-none");
        });

        // Khi nhấn vào biểu tượng đóng
        closeIcon.addEventListener("click", function() {
            rows.forEach(row => {
                row.style.display = ""; // Hiển thị tất cả người dùng
            });

            // Ẩn biểu tượng đóng
            closeIcon.classList.add("d-none");

            // Xóa giá trị trong ô tìm kiếm
            searchInput.value = "";
        });
    });
</script>


<!-- Page specific script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

</html>
<script>
    $(document).ready(function() {
        $('.product-image-thumb').on('click', function() {
            var $image_element = $(this).find('img')
            $('.product-image').prop('src', $image_element.attr('src'))
            $('.product-image-thumb.active').removeClass('active')
            $(this).addClass('active')
        })
    })
</script>