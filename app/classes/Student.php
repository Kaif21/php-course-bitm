<?php


namespace App\classes;
class Student
{
    public $students = [];

    public function __construct()
    {
        $this->students = [
          0 => [
              'id'      => 1,
              'name'    => 'Kaif',
              'email'   => 'kaif@gmail.com',
              'mobile'  => '0171246789',
              'image'   => 'assets/images/1.jpg'
          ],
          1 => [
              'id'      => 2,
              'name'    => 'Sirin',
              'email'   => 'sirin@gmail.com',
              'mobile'  => '018184561233',
              'image'   => 'assets/images/2.jpg'
          ],
          2 => [
              'id'      => 3,
              'name'    => 'Arafat',
              'email'   => 'arafat@gmail.com',
              'mobile'  => '01515963125',
              'image'   => 'assets/images/3.jpg'
          ],
        ];
    }

    public function getAllStudent()
    {
        return $this->students;
    }
}