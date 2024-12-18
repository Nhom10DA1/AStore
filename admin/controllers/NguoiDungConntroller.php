<?php
class NguoiDungController
{
    public $modelNguoiDung;
    public function __construct()
    {
        $this->modelNguoiDung = new NguoiDung();
    }
    // hien thi danh sach nguoi dung
    public function index()
    {
        $nguoiDungs = $this->modelNguoiDung->getAll();
        // var_dump($nguoiDungs);

        require_once './views/nguoidung/list_nguoi_dung.php';
    }
    // hien form them moi
    public function create()
    {
        require_once './views/nguoidung/add_nguoi_dung.php';
    }
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $ten = $_POST['ten'];
            $email = $_POST['email'];
            $mat_khau = $_POST['mat_khau'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $dia_chi = $_POST['dia_chi'];
            $ngay_sinh = $_POST['ngay_sinh'];
            $gioi_tinh = $_POST['gioi_tinh'];
            $vai_tro = $_POST['vai_tro'];
            $trang_thai = $_POST['trang_thai'];

            // Đường dẫn thư mục uploads
            $uploadDir = './uploads/images/';
            // Tạo tên file mới để tránh trùng lặp
            $hinh_anh = $uploadDir . uniqid() . basename($_FILES["hinh_anh"]["name"]);

            $errors = [];
            if (empty($ten)) {
                $errors['ten'] = 'Vui lòng nhập tên của người dùng!';
            }
            if (empty($email)) {
                $errors['email'] = 'Vui lòng nhập email!';
            }
            if (empty($mat_khau)) {
                $errors['mat_khau'] = 'Vui lòng nhập mật khẩu';
            }
            if (empty($so_dien_thoai)) {
                $errors['so_dien_thoai'] = 'Vui lòng nhập mật khẩu';
            }
            if (empty($dia_chi)) {
                $errors['dia_chi'] = 'Vui lòng thêm địa chỉ';
            }
            if (empty($_FILES['hinh_anh']['name'])) {
                $errors['hinh_anh'] = 'Vui lòng chọn avatar của người dùng';
            }
            if (empty($ngay_sinh)) {
                $errors['ngay_sinh'] = 'Vui lòng chọn ngày sinh';
            }
            if (empty($gioi_tinh)) {
                $errors['gioi_tinh'] = 'Vui lòng chọn giới tính';
            }
            if (empty($vai_tro)) {
                $errors['vai_tro'] = 'Vui lòng chọn vai trò';
            }
            if (empty($trang_thai)) {
                $errors['trang_thai'] = 'Vui lòng chọn trạng thái';
            }

            if (empty($errors)) {
                // Kiểm tra và tạo thư mục nếu chưa tồn tại
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }

                // Di chuyển file từ thư mục tạm thời đến thư mục uploads
                if (move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $hinh_anh)) {
                    // Lưu thông tin file vào cơ sở dữ liệu
                    $this->modelNguoiDung->postData($ten,  $email, $mat_khau, $so_dien_thoai, $dia_chi, $hinh_anh, $ngay_sinh, $gioi_tinh, $trang_thai, $vai_tro);
                    unset($_SESSION['errors']);
                    header('Location:?act=nguoi-dungs');
                } else {
                    // Xử lý lỗi khi di chuyển file
                    $errors['hinh_anh'] = 'Có lỗi xảy ra khi upload file.';
                    $_SESSION['errors'] = $errors;
                    header('Location:?act=form-them-nguoi-dung');
                    exit();
                }
            } else {
                $_SESSION['errors'] = $errors;
                header('Location:?act=form-them-nguoi-dung');
                exit();
            }
        }
    }

    // hien form sua
    public function edit()
    {
        $id = $_GET['id'];
        $nguoiDung = $this->modelNguoiDung->getDetailData($id);

        require_once './views/nguoidung/edit_nguoi_dung.php';
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $ten = $_POST['ten'];
            $email = $_POST['email'];
            $mat_khau = $_POST['mat_khau'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $dia_chi = $_POST['dia_chi'];
            $ngay_sinh = $_POST['ngay_sinh'];
            $gioi_tinh = $_POST['gioi_tinh'];
            $vai_tro = $_POST['vai_tro'];
            $trang_thai = $_POST['trang_thai'];

            // Đường dẫn thư mục uploads
            $target_dir = "./uploads/images/";

            // Kiểm tra xem người dùng có upload ảnh mới hay không
            if ($_FILES['hinh_anh']['name'] != '') {
                // Nếu có ảnh mới, tạo tên file mới để tránh trùng lặp
                $hinh_anh = $target_dir . uniqid() . basename($_FILES["hinh_anh"]["name"]);

                // Di chuyển file từ thư mục tạm thời vào thư mục uploads
                if (move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $hinh_anh)) {
                    // Xóa ảnh cũ nếu có ảnh mới
                    $nguoiDungCuaId = $this->modelNguoiDung->getDetailData($id); // Lấy thông tin người dùng theo ID
                    $hinh_anh_cu = $nguoiDungCuaId['hinh_anh']; // Lấy đường dẫn ảnh cũ

                    // Kiểm tra xem ảnh cũ có tồn tại trong thư mục uploads không
                    if ($hinh_anh_cu && file_exists($hinh_anh_cu)) {
                        unlink($hinh_anh_cu); // Xóa ảnh cũ nếu tồn tại
                    }
                } else {
                    $errors['hinh_anh'] = 'Có lỗi xảy ra khi upload file.';
                }
            } else {
                // Nếu không có ảnh mới, giữ lại ảnh cũ (sử dụng thông tin từ database)
                $hinh_anh = $_POST['hinh_anh_cu']; // Lấy ảnh cũ từ hidden field
            }

            $errors = [];

            // Kiểm tra các trường bắt buộc
            if (empty($ten)) {
                $errors['ten'] = 'Vui lòng nhập tên của người dùng!';
            }
            if (empty($email)) {
                $errors['email'] = 'Vui lòng nhập email!';
            }
            if (empty($mat_khau)) {
                $errors['mat_khau'] = 'Vui lòng nhập mật khẩu';
            }
            if (empty($so_dien_thoai)) {
                $errors['so_dien_thoai'] = 'Vui lòng nhập số điện thoại';
            }
            if (empty($dia_chi)) {
                $errors['dia_chi'] = 'Vui lòng thêm địa chỉ';
            }
            if (empty($ngay_sinh)) {
                $errors['ngay_sinh'] = 'Vui lòng chọn ngày sinh';
            }
            if (empty($gioi_tinh)) {
                $errors['gioi_tinh'] = 'Vui lòng chọn giới tính';
            }
            if (empty($vai_tro)) {
                $errors['vai_tro'] = 'Vui lòng chọn vai trò';
            }
            if (empty($trang_thai)) {
                $errors['trang_thai'] = 'Vui lòng chọn trạng thái';
            }

            // Nếu không có lỗi, tiến hành cập nhật dữ liệu vào database
            if (empty($errors)) {
                // Gọi phương thức updateData để cập nhật thông tin người dùng
                $this->modelNguoiDung->updateData($id, $ten, $email, $mat_khau, $so_dien_thoai, $dia_chi, $hinh_anh, $ngay_sinh, $gioi_tinh, $vai_tro, $trang_thai);

                unset($_SESSION['errors']);
                header('Location:?act=nguoi-dungs');
            } else {
                $_SESSION['errors'] = $errors;
                header('Location:?act=form-them-nguoi-dung');
                exit();
            }
        }
    }


    // xu ly xoa
    public function destroy()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            // var_dump($id);
            $this->modelNguoiDung->deleteData($id);
            header('Location:?act=nguoi-dungs');
            exit();
        }
    }
}
