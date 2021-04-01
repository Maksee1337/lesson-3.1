<?php

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
    protected $salary;

    public function setSalary($salary){
        $this->salary = $salary;
    }
    public function getSalary(){
        return $this->salary;
    }
}


class Builder extends Worker{
    public static $count = 0;   // статическое свойство с кол-вом строителей

    public function set($name, $age){ // переопределяем функцию из родительского класса
        $this->name = $name;
        $this->age = $age;
        self::$count++;  // увеличиваем кол-во на 1
    }

    public function get(){
        return $this->name.' '.$this->age; // выводим строителя
    }

}



























