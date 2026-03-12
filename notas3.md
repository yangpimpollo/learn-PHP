# NOTAS DE APRENDIZAJE 3 PHP (●'◡'●)🦁

Introduccion a las clases yu objetos en php

 ## video 07 (clases y objetos)

 ```php
 <?php
    class Fruit {
        public $name;
        public $color;
        
        function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }
        function get_details() {
            echo "Name: " . $this->name . ". Color: " . $this->color .".<br>";
        }
    }

    $apple = new Fruit('Apple', 'Red');
    $apple->get_details(); 
    $banana = new Fruit('Banana', 'Yellow');
    $banana->get_details();

    var_dump($apple instanceof Fruit);       // comprobar si un objeto pertenece a una clase 
?>
 ```
> Name: Apple. Color: Red.                      
  Name: Banana. Color: Yellow.                       
  bool(true)

```php
<?php
    class Course {                             // se crea la clase  "no es necesario crear las variables primero"
        public function __construct(
            public string $title,
            public string $subtitle,
            public string $description,
            public array $tags = []
        ) {
        }
    }

    $course = new Course(                      // se crea un objeto de la clase Course
        title: 'Curso de PHP',
        subtitle: 'Aprender PHP desde cero',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.',
        tags: ['php', 'programación', 'backend']
    );
?>

<!DOCTYPE html>
<html>
    <head></head>        // usar la variable dentro de html
    <body>       
        <h1>Bienvenido al <?php echo $course->title; ?></h1>
        <h1>Queremos <?= $course->subtitle ?></h1>       // se pude de las 2 maneras
    </body>
</html>
```
> Bienvenido al Curso de PHP                        
  Queremos Aprender PHP desde cero


 ## video 08 (organización de clases )
