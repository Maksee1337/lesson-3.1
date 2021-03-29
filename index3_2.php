<?php
    include "user.php";

    /* Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте
     * второй объект этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.
     */

    $users[] = new Worker();
    $users[] = new Worker();

    $users[0]->setName("Иван");
    $users[0]->setAge(25);
    $users[0]->setSalary(1000);

    $users[1]->setName("Вася");
    $users[1]->setAge(26);
    $users[1]->setSalary(2000);

    echo 'Сумма зарплат: '. ($users[0]->getSalary()+ $users[1]->getSalary() );