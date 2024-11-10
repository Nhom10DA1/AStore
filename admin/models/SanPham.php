<?php
class SanPham
{
    public $conn;

    // ket noi CSDL
    public function __construct()
    {
        $this->conn = connectDB();
    }

  //  Danh sach san pham
    // public function getAllKhoaNgoai(){
    //     try {
    //         $sql = 'SELECT  san_phams.*, danh_mucs.ten_danh_muc
    //         FROM san_phams
    //         INNER JOIN danh_mucs ON  san_phams.danh_muc_id = danh_mucs.id
    //         ';
    //         $stmt = $this->conn->prepare($sql);
    //         $stmt->execute();
    //         return  $stmt->fetchAll();
    //     } catch (PDOException $e) {
    //         echo "Kết Nối Thất bại" . $e->getMessage();            }
    // }

    public function getAllSanPham()
    {
        try {
            //code...
            $sql = 'SELECT * FROM  san_phams';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return  $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Kết Nối Thất bại" . $e->getMessage();
        }
    }

    // // // Them du lieu moi vao CSDL
    public function postData($ten_san_pham, $hinh_anh, $gia_ban, $so_luong, $mo_ta, $trang_thai)
    {
        try {


            //code...
            $sql = 'INSERT INTO san_phams (ten_san_pham,hinh_anh,gia_ban,so_luong,mo_ta,trang_thai)
                        VALUES                (:ten_san_pham,:hinh_anh, :gia_ban, :so_luong, :mo_ta, :trang_thai)';
            $stmt = $this->conn->prepare($sql);
            // Gan gtri vao cac tham so
            $stmt->bindParam(':ten_san_pham', $ten_san_pham);
            $stmt->bindParam(':hinh_anh', $hinh_anh);
            $stmt->bindParam(':gia_ban', $gia_ban);
            $stmt->bindParam(':so_luong', $so_luong);
            $stmt->bindParam(':mo_ta', $mo_ta);
            $stmt->bindParam(':trang_thai', $trang_thai);
            $stmt->execute();
            return  true;
        } catch (PDOException $e) {
            echo "Thất bại" . $e->getMessage();
        }
    }
    //   Lay thong tin chi tiet
    public function getDetaiData($id)
    {
        try {
            $sql = 'SELECT * FROM san_phams WHERE id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC); // Chỉ định kiểu trả về là mảng kết hợp

            if ($result) {
                return $result; // Trả về dữ liệu
            } else {
                return null; // Nếu không tìm thấy sản phẩm
            }
        } catch (PDOException $e) {
            echo "Thất bại: " . $e->getMessage();
            return null; // Trả về null nếu có lỗi
        }
    }


    // Cap nhat du lieu moi vao CSDL
    public function updateData($id, $ten_san_pham, $hinh_anh, $gia_ban, $so_luong, $mo_ta, $trang_thai)
    {
        try {
            $sql = 'UPDATE `san_phams` SET ten_san_pham = :ten_san_pham, hinh_anh = :hinh_anh, gia_ban = :gia_ban, so_luong = :so_luong, mo_ta = :mo_ta, trang_thai = :trang_thai WHERE id = :id';
            $stmt = $this->conn->prepare($sql);
            // Gán giá trị vào tham số
            $stmt->bindValue(':ten_san_pham', $ten_san_pham, PDO::PARAM_STR);
            $stmt->bindValue(':hinh_anh', $hinh_anh, PDO::PARAM_STR); // Đường dẫn ảnh
            $stmt->bindValue(':gia_ban', $gia_ban, PDO::PARAM_INT);
            $stmt->bindValue(':so_luong', $so_luong, PDO::PARAM_INT);
            $stmt->bindValue(':mo_ta', $mo_ta, PDO::PARAM_STR);
            $stmt->bindValue(':trang_thai', $trang_thai, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);


            // Thực thi câu lệnh
            $stmt->execute();

            return true; // Trả về true nếu thành công
        } catch (PDOException $e) {
            // Ghi lỗi vào file log hoặc thông báo cho người dùng
            error_log($e->getMessage());  // Ghi lỗi vào log file
            return false; // Trả về false nếu có lỗi
        }
    }
    // Delete Danh muc
    public function deleteData($id)
    {
        try {
            //code...
            $sql = 'DELETE  FROM san_phams WHERE id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return  true;
        } catch (PDOException $e) {
            echo "Kết nối thất bại" . $e->getMessage();
        }
    }

    // Huy ket noi CSDL
    public function __destruct()
    {
        $this->conn = null;
    }
}


