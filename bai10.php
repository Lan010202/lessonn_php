<?php

class Booking {
    /*Bài tập Tạo lớp Đặt phòng khách sạn:
Tạo một lớp DatPhong voi các thuộc tính tên, ngày đến và số đêm ở lại.
Tạo phương thức để tính tổng số tiền cần thanh toán dựa trên giá phòng.*/
    protected $name;
    protected $checkInDate;
    protected $numOfNights;
    protected $roomPrice;

    public function __construct($name, $checkInDate, $numOfNights, $roomPrice) {
        $this->name = $name;
        $this->checkInDate = $checkInDate;
        $this->numOfNights = $numOfNights;
        $this->roomPrice = $roomPrice;
    }

    public function calculateTotalPayment() {
        $totalPayment = $this->numOfNights * $this->roomPrice;
        return $totalPayment;
    }

    public function displayBookingDetails() {
        print "Guest Name: {$this->name}\n";
        print "Check-in Date: {$this->checkInDate}\n";
        print "Number of Nights: {$this->numOfNights}\n";
        print "Room Price: {$this->roomPrice}\n";
        print "Total Payment: {$this->calculateTotalPayment()}\n";
    }
}

// Create a Booking object
$booking = new Booking("Nguyen Lan", "2023-07-06", 5, 2000);

// Display booking details
$booking->displayBookingDetails();

?>
