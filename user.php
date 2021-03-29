<?php
/* Сделайте класс User, в котором будут следующие protected поля -
 * name (имя), age (возраст), public методы setName, getName, setAge, getAge.
 *
 * Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата),
 * а также методы public getSalary и setSalary.
 *
 * Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте
 * второй объект этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.
 *
 * Сделайте класс Student, который наследует от класса User
 * и вносит дополнительные private поля стипендия, курс, а также геттеры и сеттеры для них.
 *
 * Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи.
 * Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).*/


/*
 * Сделайте класс User, в котором будут следующие protected поля -
 * name (имя), age (возраст), public методы setName, getName, setAge, getAge.
 */
class User {
    protected $name, $age;

    public function setName($name){
        $this->name = $name;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
}

/*
 * Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата),
 * а также методы public getSalary и setSalary.
 */
class Worker extends User{
    private $salary;

    public function setSalary($salary){
        $this->salary = $salary;
    }
    public function getSalary(){
        return $this->salary;
    }
}

/*
 * Сделайте класс Student, который наследует от класса User
 * и вносит дополнительные private поля стипендия, курс, а также геттеры и сеттеры для них.
 */

class Student extends User{
    private $scholarship, $yearuniversity;

    public function setScholarship($scholarship){
        $this->scholarship = $scholarship;
    }
    public function getScholarship(){
        return $this->scholarship;
    }

    public function setYearuniversity($yearuniversity){
        $this->yearuniversity = $yearuniversity;
    }
    public function getYearuniversity(){
        return $this->yearuniversity;
    }
}

/*
 * Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи.
 * Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).
 */

class Driver extends Worker{
    private $drivingExperience, $category;

    public function setDrivingExperience($drivingExperience){
        $this->drivingExperience = $drivingExperience;
    }
    public function getDrivingExperience(){
        return $this->drivingExperience;
    }

    public function setCategory($category){
        $this->category = $category;
    }
    public function getCategory(){
        return $this->category;
    }
}