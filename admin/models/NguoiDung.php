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
    public function updateData($id, $ten,  $email, $mat_khau, $so_dien_thoai, $dia_chi, $hinh_anh, $ngay_sinh, $gioi_tinh, $trang_thai, $vai_tro)
    {
        try {
            $sql = 'UPDATE duAn1.nguoi_dungs SET  ten = :ten,email = :email, mat_khau = :mat__khau, so_dien_thoai = :so_dien_thoai, dia_chi = :dia_chi, hinh_anh = :hinh_anh, ngay_sinh = :ngay_sinh, gioi_tinh = :gioi_tinh, trang_thai = :trang_thai, vai_tro = :vai_tro WHERE id =:id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
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
}
