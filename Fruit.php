<?php
    class Fruit {
        function __construct(
            protected string $name,
            protected string $color // protected para evitar que se modifique externamente
            ) {}               
        

        public function getName(): string { return $this->name; }
        public function getColor(): string { return $this->color; }


        public function get_details() {
            echo "Name: " . $this->name . ". Color: " . $this->color .".<br>";
        }

        public function __get($name){
            if(property_exists($this, $name)) {
                return $this->$name;
            }
            return null;
        }
    }

?>