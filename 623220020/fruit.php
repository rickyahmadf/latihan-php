<?php
class fruit{
    //properties
    public $name;
    public $color;



    // Methods
    function set_name($name){
        $this->name =$name;
    }
    function get_name(){
        return $this->name;
    }
}

$apple = new fruit ();
$banana = new fruit () ;
$apple->set_name ('Apple');
$banana->set_name ('Banana');
echo $apple->get_name();
echo "<br>";


?>