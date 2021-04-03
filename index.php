<?php

include "user.php";

    $builders = new Builder();
    $builders->add('Ivan', 25);
    $builders->add('David', 22);
    $builders->add('Svetlana', 31);



    for($i = 0 ; $i < Builder::$count ; $i++){
        echo $builders->getBuilder($i)."\n";
    }

    echo 'Кол-во строителей: '. Builder::$count;
