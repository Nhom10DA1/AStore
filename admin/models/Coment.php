<?php
class Comment
{
    public $conn;

    // Constructor: Connect to the database
    public function __construct()
    {
        $this->conn = connectDB(); // Assumes you have a connectDB() function to establish the DB connection
    }

    // Method to get all comments for a product
    public function getCommentsByProductId($san_pham_id)
    {
        $sql = "SELECT * FROM binh_luans WHERE san_pham_id = :san_pham_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':san_pham_id', $san_pham_id, PDO::PARAM_INT); // Bind the correct variable
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
