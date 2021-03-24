<?php

include "person.php";

    $user[] = new person(); // создаем массив с объектами
    $user[] = new person();
    $user[] = new person();

    // заполняем объекты данными
    $user[0]->set("Ivan", "Ivanov", "12.12.2012", "Las Venturas");
    $user[1]->set("Vadim", "Vadimov", "01.01.1900", "San Fierro");
    $user[2]->set("Trevor", "Philips", "05.03.1968", "San Andreas");

    foreach ($user as $value){ // вывод каждого объекта
        echo $value->get()."\n";
    }

    // вывод объекта в другом формате
    echo "\n".$user[0]->get("%lastname% %firstname%. %city%, %dob%");