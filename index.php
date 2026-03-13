<?php
    require_once __DIR__ . '/vendor/autoload.php';
    use App\Fruit;
    use App\FruitType;

    $apple = new Fruit(name: 'Apple', color: 'Red', type: FruitType::ACIDIC);
    $banana = new Fruit('Banana', 'Yellow', FruitType::SWEET);

    //echo $apple->get_details() ;
    //echo $apple->getName() ;
    //echo $apple->getColor() ;
    //echo $apple->name ;
    //echo $apple->color ;

    echo $apple;
    echo $banana; 
    echo "\n   ssssssssss \n  ssssssss";
    echo "Línea 1" . PHP_EOL . "Línea 2";

    //echo $banana;
?>

