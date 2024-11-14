<?php
class NguoiDung
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getAll()
    {
        try {
            $sql = 'SELECT * FROM nguoi_dungs';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Error:' . $e->getMessage();
        }
    }
    public function deleteData($id)
    {
        try {
            $sql = 'DELETE FROM nguoi_dungs WHERE id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Error:' . $e->getMessage();
        }
    }
    public function postData($ten,  $email, $mat_khau, $so_dien_thoai, $dia_chi, $hinh_anh, $ngay_sinh, $gioi_tinh, $trang_thai, $vai_tro)
    {
        try {
            $sql = 'INSERT INTO nguoi_dungs (ten,  email, mat_khau,so_dien_thoai, dia_chi, hinh_anh, ngay_sinh, gioi_tinh, trang_thai, vai_tro) 
                    VALUES (:ten,  :email, :mat_khau,:so_dien_thoai, :dia_chi, :hinh_anh, :ngay_sinh, :gioi_tinh, :trang_thai, :vai_tro);';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':ten', $ten);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':mat_khau', $mat_khau);
            $stmt->bindParam(':so_dien_thoai', $so_dien_thoai);
            $stmt->bindParam(':dia_chi', $dia_chi);
            $stmt->bindParam(':hinh_anh', $hinh_anh);
            $stmt->bindParam(':ngay_sinh', $ngay_sinh);
            $stmt->bindParam(':gioi_tinh', $gioi_tinh);
            $stmt->bindParam(':vai_tro', $vai_tro);
            $stmt->bindParam(':trang_thai', $trang_thai);

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Error:' . $e->getMessage();
        }
    }
    public function getDetailData($id)
    {
        try {
            $sql = 'SELECT * FROM nguoi_dungs WHERE id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo 'Error:' . $e->getMessage();
        }
    }
    public function __destruct()
    {
        $this->conn = null;
    }
    public function updateData($id, $ten, $email, $mat_khau, $so_dien_thoai, $dia_chi, $hinh_anh, $ngay_sinh, $gioi_tinh, $vai_tro, $trang_thai)
    {
        try {
            $sql = "UPDATE nguoi_dungs SET 
                ten = :ten, 
                email = :email, 
                mat_khau = :mat_khau, 
                so_dien_thoai = :so_dien_thoai, 
                dia_chi = :dia_chi, 
                hinh_anh = :hinh_anh, 
                ngay_sinh = :ngay_sinh, 
                gioi_tinh = :gioi_tinh, 
                vai_tro = :vai_tro, 
                trang_thai = :trang_thai 
            WHERE id = :id";
            $stmt = $this->conn->prepare($sql);

            // Hash the password
            $hashedPassword = password_hash($mat_khau, PASSWORD_DEFAULT);

            // Bind parameters
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':ten', $ten);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':mat_khau', $hashedPassword);
            $stmt->bindParam(':so_dien_thoai', $so_dien_thoai);
            $stmt->bindParam(':dia_chi', $dia_chi);
            $stmt->bindParam(':hinh_anh', $hinh_anh);
            $stmt->bindParam(':ngay_sinh', $ngay_sinh);
            $stmt->bindParam(':gioi_tinh', $gioi_tinh);
            $stmt->bindParam(':vai_tro', $vai_tro);
            $stmt->bindParam(':trang_thai', $trang_thai);

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            error_log('Error: ' . $e->getMessage());
            echo 'An error occurred. Please try again later.';
        }
    }
    public function checkLogin($email, $mat_khau)
    {
        try {
            $sql = 'SELECT * FROM nguoi_dungs WHERE email = :email';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['email' => $email]);
            $nguoiDung = $stmt->fetch();

            if ($nguoiDung && password_verify($mat_khau, $nguoiDung['mat_khau'])) {
                if ($nguoiDung['vai_tro'] == 1) {
                    if ($nguoiDung['trang_thai'] == 1) {
                        return true;
                    } else {
                        return "Tài khoản này đã ngưng hoạt động!";
                    }
                } else {
                    return "Bạn không phải admin!";
                }
            } else {
                return "Email hoặc mật khẩu không đúng!";
            }
        } catch (PDOException $e) {
            error_log('Error: ' . $e->getMessage());
            return 'An error occurred. Please try again later.';
        }
    }
}
