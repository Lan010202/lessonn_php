<?php

class MangSoNguyen {
    /*b3.Bài tập Tạo lớp Mảng số nguyên:
Tạo một lớp MangSoNguyen với thuộc tính là một mảng các số nguyên.
Tạo các phương thức để tính tổng, trung bình, và phần tử lớn nhất của mảng.*/
    protected $numbers;

    public function __construct($numbers) {
        $this->numbers = $numbers;
    }

    public function calculateSum() {
        $sum = array_sum($this->numbers);
        print "Sum of the array: $sum\n";
    }

    public function calculateAverage() {
        $average = array_sum($this->numbers) / count($this->numbers);
        print "Average of the array: $average\n";
    }

    public function findMaxElement() {
        $max = max($this->numbers);
        print "Maximum element of the array: $max\n";
    }
}


$array = new MangSoNguyen([1, 3, 5, 2, 4]);

$array->calculateSum();

$array->calculateAverage();

$array->findMaxElement();

?>
