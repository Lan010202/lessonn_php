<?php

class Car {/*Bài tập Tạo lớp Xe hơi:
    Tạo một lớp XeHoi với các thuộc tính là hãng xe, màu sắc và năm sản xuất.
    Tạo phương thức để hiển thị thông tin đầy đủ của xe.*/
    protected $brand;
    protected $color;
    protected $year;

    public function __construct($brand, $color, $year) {
        $this->brand = $brand;
        $this->color = $color;
        $this->year = $year;
    }

    public function displayCarInfo() {
        $carInfo = "Brand: " . $this->brand . "\n";
        $carInfo .= "Color: " . $this->color . "\n";
        $carInfo .= "Year: " . $this->year . "\n";

        print $carInfo;
    }
}

// Create a Car object
$car = new Car("Honda", "Blue", 2023);

// Display car information
$car->displayCarInfo();

?>
