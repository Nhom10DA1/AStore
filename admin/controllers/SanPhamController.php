<?php
    class SanPhamcController
    {
        // hiển thị danh sách
        // Ket noi den model
        public $modelSanPham;
        // public $modelDanhMuc;
        public function __construct()
        {

            $this->modelSanPham = new SanPham();
            // $this->modelDanhMuc = new DanhMuc();
        }
        public function index(){
            // lay ra du lieu danh muc
            $SanPham = $this->modelSanPham->getAllSanPham();
            // var_dump($SanPham);

            // Dua du lieu ra view
            require_once './views/sanpham/list_san_pham.php';
        }

    //    hiển thị form thêm
        public function create(){
            // $SanPham = $this->modelSanPham->getAll();
            // $SanPham = $this->modelSanPham->getAllSanPham();
            require_once './views/sanpham/create_san_pham.php';
        }

        // hàm sử lý thêm vào CSDl
       public function store(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                # lay ra du lieu
                $ten_san_pham = $_POST['ten_san_pham'];
                $hinh_anh = $_POST['hinh_anh'];
                $gia_ban = $_POST['gia_ban'];
                $so_luong = $_POST['so_luong'];
                $mo_ta = $_POST['mo_ta'];
                $trang_thai = $_POST['trang_thai'];
                // var_dump($ten_danh_sach);
                // validate
                $errors = [];
                if (empty($ten_san_pham)) {
                    $errors ['ten_san_pham'] = 'Nhap ten san pham';
                }
                if (empty($hinh_anh)) {
                    $errors ['hinh_anh'] = 'Nhap hinh_anh';
                }
                if (empty($gia_ban)) {
                    $errors ['gia_ban'] = 'Nhap gia_ban';
                }
                if (empty($mo_ta)) {
                    $errors ['mo_ta'] = 'Nhap mo_ta';
                }
                if (empty($so_luong)) {
                    $errors ['so_luong'] = 'Nhap ten so_luong';
                }
                if (empty($trang_thai)) {
                    $errors  ['trang_thai'] = 'Nhap trang thai';
                }
                // them du lieu
                if (empty($errors)) {
                    # neu k co loi thi them du lieu
                    // Them vao CSDL
                    $this->modelSanPham->postData($ten_san_pham,$hinh_anh,$gia_ban,$so_luong,$mo_ta,$trang_thai);
                    unset($_SESSION['errors']);
                    header('Location: ?act=san_phams');
                    exit();
                }else{
                    $_SESSION['errors'] = $errors;
                    header('Location: ?act=form-them-san-pham');
                }
            }
        }


        public function edit() {
            // Lấy id từ GET
            $id = $_GET['san_pham_id'];
        
            // Lấy thông tin chi tiết sản phẩm
            $SanPham = $this->modelSanPham->getDetaiData($id);
        
            // Kiểm tra nếu không tìm thấy sản phẩm
            if (!$SanPham) {
                header('Location: ?act=san_phams');
                exit();
            }
        
            // Đưa dữ liệu vào form
            require_once './views/sanpham/edit_san_pham.php';
        }
        
        public function update() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
                // Lấy dữ liệu từ form
                $id = $_POST['id'];
                $ten_san_pham = trim($_POST['ten_san_pham']);
                // $hinh_anh = trim($_POST['hinh_anh']);
                $hinh_anh = $_FILES['hinh_anh'];
                $gia_ban = $_POST['gia_ban'];
                $so_luong = $_POST['so_luong'];
                $mo_ta = trim($_POST['mo_ta']);
                $trang_thai = $_POST['trang_thai'];
        
                // Validate dữ liệu
                $errors = [];
                if (empty($ten_san_pham)) {
                    $errors['ten_san_pham'] = 'Nhập tên sản phẩm';
                }
            //     if (empty($hinh_anh)) {
            //         $errors['hinh_anh'] = 'Nhập hình ảnh';
            //     }

            //     if (empty($gia_ban) || !is_numeric($gia_ban)) {
            //         $errors['gia_ban'] = 'Nhập giá bán hợp lệ';
            //     }
            //     if (empty($mo_ta)) {
            //         $errors['mo_ta'] = 'Nhập mô tả';
            //     }
            //     if (empty($so_luong) || !is_numeric($so_luong)) {
            //         $errors['so_luong'] = 'Nhập số lượng hợp lệ';
            //     }
            //     if (empty($trang_thai)) {
            //         $errors['trang_thai'] = 'Nhập trạng thái';
            //     }
        
            //     // Nếu không có lỗi thì cập nhật dữ liệu
            //     if (empty($errors)) {
            //         $this->modelSanPham->updateData($id, $ten_san_pham, $hinh_anh, $gia_ban,$so_luong,$mo_ta, $trang_thai);
            //         unset($_SESSION['errors']);
            //         header('Location: ?act=san_phams');
            //         exit();
            //     } else {
            //         $_SESSION['errors'] = $errors;
            //         header('Location: ?act=form-sua-san-pham');
            //         exit();
            //     }
            // }
             // Xử lý ảnh
        // if (!empty($hinh_anh['name'])) {
        //     $targetDir = "uploads/"; // Đường dẫn thư mục lưu ảnh
        //     $fileName = basename($hinh_anh['name']); // Lấy tên file
        //     $targetFilePath = $targetDir . $fileName;

        //     // Kiểm tra loại file (chỉ cho phép ảnh)
        //     $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        //     $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

        //     if (!in_array(strtolower($fileType), $allowedTypes)) {
        //         $errors['hinh_anh'] = 'Chỉ cho phép tải lên các file ảnh (JPG, JPEG, PNG, GIF)';
        //     }

        //     // Kiểm tra kích thước file (ví dụ, giới hạn 2MB)
        //     if ($hinh_anh['size'] > 1 * 1024 * 1024 * 1024) {
        //         $errors['hinh_anh'] = 'Kích thước file phải nhỏ hơn 1GB';
        //     }

        //     // Nếu không có lỗi, upload file
        //     if (empty($errors)) {
        //         if (!move_uploaded_file($hinh_anh['tmp_name'], $targetFilePath)) {
        //             $errors['hinh_anh'] = 'Đã có lỗi khi tải ảnh lên';
        //         }
        //     }
        // } else {
        //     // Nếu không upload ảnh mới, dùng ảnh cũ
        //     $fileName = $_POST['hinh_anh_old'];  // Lấy tên ảnh cũ (nếu có)
        // }
        if (isset($_FILES['hinh_anh']) && $_FILES['hinh_anh']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['hinh_anh']['tmp_name']; // Đường dẫn tạm thời của tệp
            $fileName = $_FILES['hinh_anh']['name']; // Tên tệp
            $fileSize = $_FILES['hinh_anh']['size']; // Kích thước tệp
            $fileType = $_FILES['hinh_anh']['type']; // Loại tệp
    
            // Lấy phần mở rộng của tệp
            $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    
            // Các định dạng ảnh cho phép
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    
            // Kiểm tra nếu tệp có đúng định dạng
            if (!in_array($fileExtension, $allowedExtensions)) {
                $errors['hinh_anh'] = 'Chỉ hỗ trợ tải lên các tệp hình ảnh (JPG, JPEG, PNG, GIF)';
            }
    
               // Kiểm tra kích thước file (ví dụ, giới hạn 2MB)
            if ($hinh_anh['size'] > 1 * 1024 * 1024 * 1024) {
                $errors['hinh_anh'] = 'Kích thước file phải nhỏ hơn 1GB';
            }
    
            // Nếu không có lỗi, tiến hành lưu ảnh vào thư mục uploads
            if (empty($errors)) {
                $uploadDir = 'uploads/'; // Thư mục lưu ảnh (cần tạo thư mục uploads nếu chưa có)
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true); // Tạo thư mục nếu chưa có
                }
    
                $newFileName = time() . '_' . $fileName; // Đặt tên mới cho tệp (có thể bao gồm thời gian để tránh trùng lặp)
                $uploadPath = $uploadDir . $newFileName; // Đường dẫn đầy đủ đến tệp ảnh
    
                // Di chuyển tệp từ thư mục tạm thời vào thư mục đích
                if (move_uploaded_file($fileTmpPath, $uploadPath)) {
                    // Tệp ảnh đã được tải lên thành công
                    echo "Tệp ảnh đã được tải lên thành công!";
                    // Lưu thông tin ảnh vào cơ sở dữ liệu hoặc xử lý tiếp theo (nếu cần)
                } else {
                    $errors['hinh_anh'] = 'Không thể tải ảnh lên. Vui lòng thử lại!';
                }
            }
        } else {
            $errors['hinh_anh'] = 'Vui lòng chọn một tệp ảnh để tải lên.';
        }

        // Nếu không có lỗi, cập nhật dữ liệu vào CSDL
        if (empty($errors)) {
            $this->modelSanPham->updateData($id, $ten_san_pham, $fileName, $gia_ban, $so_luong, $mo_ta, $trang_thai);
            unset($_SESSION['errors']);
            header('Location: ?act=san_phams');
            exit();
        } else {
            $_SESSION['errors'] = $errors;
            header('Location: ?act=form-sua-san-pham');
            exit();
        }
    }
        }
        
        // hàm xóa dữ liệu tring CSDL
        public function destroy(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $id = $_POST['san_pham_id'];
                // var_dump($id);
                // xoa danh muc
                $this->modelSanPham->deleteData($id);
                header('Location: ?act=san_phams');
                exit();
            }
        }
    }
?>