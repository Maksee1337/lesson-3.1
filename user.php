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


class Builder {
    public static $count = 0;   // статическое свойство с кол-вом строителей
    protected $builders;        //

    public function add($name, $age){ // метод добавляем объект User в массив builders
       $this->builders[self::$count] = new User();
       $this->builders[self::$count]->setName($name);
       $this->builders[self::$count]->setAge($age);
       self::$count++;  // увеличиваем кол-во на 1
    }

    public function getBuilder($index){
        if(self::$count > 0 && $index < self::$count) { // по сути эта проверка не имеет смысла. надо учитывать чтоб в коде запрашиваем элемент существовал
            return $this->builders[$index]->getName().';'.$this->builders[$index]->getAge();
        }
    }


}
