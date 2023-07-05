<?php

class Student {
    /*b5.Bài tập Tạo lớp Danh sách sinh viên:
    Tạo một lớp SinhVien với các thuộc tính mã số, họ và tên.
    Tạo lớp DanhSachSinhVien với các phương thức thêm sinh viên mới và hiển thị danh sách sinh viên.*/
    protected $ID;
    protected $Surname;
    protected $name;

    public function __construct($ID, $Surname, $name) {
        $this->ID = $ID;
        $this->Surname = $Surname;
        $this->name = $name;
    }

    public function getID() {
        return $this->ID;
    }

    public function getSurname() {
        return $this->Surname;
    }

    public function getName() {
        return $this->name;
    }
}

class StudentList {
    protected $students = [];

    public function addStudent(Student $student) {
        $this->students[] = $student;
    }

    public function displayStudentList() {
        foreach ($this->students as $student) {
            print "ID: " . $student->getID() . ", First and last name: " . $student->getSurname() . " " . $student->getName() . "\n";
        }
    }
}

// Create a StudentList object
$studentList = new StudentList();

// Add new students to the list
$student1 = new Student('SV001', 'Nguyen', 'Lan');
$studentList->addStudent($student1);

$student2 = new Student('SV002', 'Nguyen', 'Dung');
$studentList->addStudent($student2);

// Display the list of students
$studentList->displayStudentList();

?>
