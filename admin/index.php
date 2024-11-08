<?php 
session_start();
// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once 'controllers/DashboardController.php';
require_once 'controllers/DanhMucController.php';
require_once 'controllers/TinTucController.php';
require_once 'controllers/AdminLienHeController.php';
require_once 'controllers/NguoiDungConntroller.php';
require_once 'controllers/KhuyenMaiController.php';

// Require toàn bộ file Models
require_once 'models/DanhMuc.php';
require_once 'models/TinTuc.php';
require_once 'models/AdminLienHe.php';
require_once 'models/NguoiDung.php';
require_once 'models/KhuyenMai.php';

// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Dashboards
    '/'                     => (new DashboardController())->index(),
    // quản  lý danh mục sản phẩm
    'danh-mucs'             => (new DanhMucController())->index(),
    'form-them-danh-muc'    => (new DanhMucController())->create(),
    'them-danh-muc'         => (new DanhMucController())->store(),
    'form-sua-danh-muc'     => (new DanhMucController())->edit(),
    'sua-danh-muc'          => (new DanhMucController())->update(),
    'xoa-danh-muc'          => (new DanhMucController())->destroy(),
    // Quản lý tin tức
    'tin-tucs'              => (new TinTucController())->index(),
    'form-them-tin-tuc'     => (new TinTucController())->create(),
    'them-tin-tuc'          => (new TinTucController())->store(),
    'form-sua-tin-tuc'      => (new TinTucController())->edit(),
    'sua-tin-tuc'           => (new TinTucController())->update(),
    'xoa-tin-tuc'           => (new TinTucController())->destroy(),
    // Quản lý liên hệ
    'lien-he'               => (new AdminLienHeController())->index(),
    'form-sua-lien-he'      => (new AdminLienHeController())->edit(),
    'update-lien-he'        => (new AdminLienHeController())->update(),
    // Quản lý người dùng
    'nguoi-dungs'           =>(new NguoiDungController())->index(),
    'form-them-nguoi-dung'  =>(new NguoiDungController())->create(),
    'them-nguoi-dung'       =>(new NguoiDungController())->store(),
    'form-sua'              =>(new NguoiDungController())->edit(),
    'thay-doi-thong-tin'    =>(new NguoiDungController())->update(),
    'xoa-nguoi-dung'        =>(new NguoiDungController())->destroy(),
    // Quản lý Khuyến mãi
    'khuyen-mai'              => (new KhuyenMaiController())->index(),
    'form-them-khuyen-mai'     => (new KhuyenMaiController())->create(),
    'them-khuyen-mai'          => (new KhuyenMaiController())->store(),
    'form-sua-khuyen-mai'      => (new KhuyenMaiController())->edit(),
    'sua-khuyen-mai'          => (new KhuyenMaiController())->update(),
    'xoa-khuyen-mai'           => (new KhuyenMaiController())->destroy(),

};