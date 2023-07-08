<?php

namespace Classes\Manager;

use Classes\Student\Student;
trait Store
{
  public function loger(string $message): void
  {
    $logerFile = fopen('loger.txt', 'a');
    fwrite($logerFile, date('Y:m:d, H-i-sa') . ' >> ' . $message . PHP_EOL);
    fclose($logerFile);
  }
}

class Manager
{
  
  use Store;

  private $students = [];

  public function addStd(Student $student): void
  {
    $this->students[$student->getID()] = $student;
    $this->loger('Add student: '. $student->name);
  }

  public function getStudentById(string $studentId): ?Student
  {
    return $this->students[$studentId] ?? null;
  }

  public function updateStudent(Student $student, string $name, string $email): void
  {
    $student->name = $name;
    $student->email = $email;
    $this->loger('Updated Student: ' . $student->name);
  }
  
  public function deleteStudent(Student $student): void
  {
    $studentId = $student->getID();
    unset($this->students[$studentId]);
    $this->loger('Deleted Student ' . $student->name);
  }
}
