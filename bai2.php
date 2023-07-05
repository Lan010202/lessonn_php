<?php

class Diem2D {
    /*b2.Bài tập Tạo lớp Điểm 2D:
Tạo một lớp Diem2D với các thuộc tính x và y.
Tạo phương thức để tính khoảng cách từ điểm hiện tại tới một điểm khác.*/
    protected $x;
    protected $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function calculateDistance($otherPoint) {
        $distance = sqrt(pow(($this->x - $otherPoint->x), 2) + pow(($this->y - $otherPoint->y), 2));
        print "Distance from the current point to the other point: $distance\n";
    }
}

// Create an object of Diem2D
$currentPoint = new Diem2D(2, 3);

// Create another point
$otherPoint = new Diem2D(5, 7);

// Calculate the distance from the current point to the other point
$currentPoint->calculateDistance($otherPoint);

?>
