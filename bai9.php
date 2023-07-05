<?php

class Product {
    /*Bài tập Tạo lớp Sản phẩm:
Tạo một lớp SanPham với các thuộc tính tên, giá và mô tả.
Tạo phương thức để hiển thị thông tin chi tiết của sản phẩm.*/
    protected $name;
    protected $price;
    protected $description;

    public function __construct($name, $price, $description) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function displayDetails() {
        print "Product Name: {$this->name}\n";
        print "Price: {$this->price}\n";
        print "Description: {$this->description}\n";
    }
}

// Create a Product object
$product = new Product("iphone", 5000, "High-end phone with many functions");

// Display product details
$product->displayDetails();

?>
