<?php
class DonHang
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
    //         $sql = 'SELECT  don_hangs.*, danh_mucs.ten_danh_muc
    //         FROM don_hangs
    //         INNER JOIN danh_mucs ON  don_hangs.danh_muc_id = danh_mucs.id
    //         ';
    //         $stmt = $this->conn->prepare($sql);
    //         $stmt->execute();
    //         return  $stmt->fetchAll();
    //     } catch (PDOException $e) {
    //         echo "Kết Nối Thất bại" . $e->getMessage();            }
    // }

   public function getAll()
{
    try {
        // SQL query với JOIN để lấy tên tài khoản từ bảng nguoi_dungs, mã khuyến mãi từ bảng khuyen_mais, tên phương thức thanh toán và tên trạng thái từ bảng trang_thai_don_hangs
        $sql = 'SELECT don_hangs.*, nguoi_dungs.ten, khuyen_mais.ma_khuyen_mai, phuong_thuc_thanh_toans.ten_phuong_thuc, trang_thai_don_hang.ten_trang_thai 
                FROM don_hangs 
                INNER JOIN nguoi_dungs ON don_hangs.nguoi_dung_id = nguoi_dungs.id
                LEFT JOIN khuyen_mais ON don_hangs.khuyen_mai_id = khuyen_mais.id
                LEFT JOIN phuong_thuc_thanh_toans ON don_hangs.phuong_thuc_thanh_toan = phuong_thuc_thanh_toans.id
                LEFT JOIN trang_thai_don_hang ON don_hangs.trang_thai_id = trang_thai_don_hang.id';
        
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        echo "Kết Nối Thất bại: " . $e->getMessage();
    }
}


   
    public function __destruct()
    {
        $this->conn = null;
    }
}