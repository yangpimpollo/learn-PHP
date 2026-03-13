<?php
    require 'Fruit.php';

    $apple = new Fruit(name: 'Apple', color: 'Red', type: FruitType::ACIDIC);
    $banana = new Fruit('Banana', 'Yellow');

    //echo $apple->get_details() ;
    //echo $apple->getName() ;
    //echo $apple->getColor() ;
    //echo $apple->name ;
    //echo $apple->color ;

    echo $apple;
    //echo $banana;
?>

