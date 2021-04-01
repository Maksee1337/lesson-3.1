<?php

include "user.php";

    $builders[] = new Builder();
    $builders[] = new Builder();
    $builders[] = new Builder();

    $builders[0]->set('Ivan', 25);
    $builders[1]->set('David', 22);
    $builders[2]->set('Svetlana', 29);


    for($i = 0 ; $i < Builder::$count ; $i++){
        echo $builders[$i]->get()."\n";
    }
    echo 'Кол-во строителей: '. Builder::$count;
//var_dump($builders);
