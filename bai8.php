<?php

class Person {
    /*Bài tập Tạo lớp Người:
Tạo một lớp Nguoi với các thuộc tính tên, tuổi và địa chỉ.
Tạo phương thức để hiển thị thông tin người.*/
    protected $name;
    protected $age;
    protected $address;

    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function displayInfo() {
        print "Name: {$this->name}\n";
        print "Age: {$this->age}\n";
        print "Address: {$this->address}\n";
    }
}

// Create a Person object
$person = new Person("Nguyen Lan", 21, "Nam Dinh");

// Display person's information
$person->displayInfo();

?>
