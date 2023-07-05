<?php

class rectangle {
    /*b1. Bài tập Tạo lớp Hình chữ nhật:
Tạo một lớp HìnhChuNhat với các thuộc tính chiều dài và chiều rộng.
Tạo các phương thức để tính diện tích và chu vi của hình chữ nhật.*/
    protected $length;
    protected $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function theArea() {
        $acreage = $this->length * $this->width;
        print "Rectangular area: $acreage\n";
    }

    public function perimeterCalculation() {
        $perimeter = 2 * ($this->length + $this->width);
        print "Perimeter of a rectangle: $perimeter\n";
    }
}

// Tạo một đối tượng HìnhChuNhat
$rectangle = new rectangle(5, 7);

// Tính diện tích
$rectangle->theArea();

// Tính chu vi
$rectangle->perimeterCalculation();

?>
