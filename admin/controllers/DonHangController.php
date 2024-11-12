<?php
    class DonHangController
    {
        // hiển thị danh sách
        // Ket noi den model
        public $modelDonHang;
        // public $modelDanhMuc;
        public function __construct()
        {

            $this->modelDonHang = new DonHang();
            // $this->modelDanhMuc = new DanhMuc();
        }
        public function index(){
            // lay ra du lieu danh muc
            $donHangs = $this->modelDonHang->getAll();
            // var_dump($DonHang);

            // Dua du lieu ra view
            require_once './views/donhang/list_don_hang.php';
        }
        public function edit(){

        }
        public function update(){}
    }
?>