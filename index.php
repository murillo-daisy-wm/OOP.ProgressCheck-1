
<!-- INCLUDE FUNCTION-->
<?php
include 'second.php';
?>

<?php

class fruitSalad{
    var $name;
// FOUR ATTRIBUTES
    public $fruit1;
    public $fruit2;
    public $fruit3;
    public $ingredient1;

/* METHOD 1 */
    private function cook($fruit1, $fruit2, $ingredient1)
    {
        echo "we're making an" . $fruit1 . $fruit2 . ' and ' . $ingredient1 . "salad!";
    }
/* METHOD 2 */
    private function making(){
        echo "we're making a fruit salad!";
    }
//    GET_ //
    function get_name(){
    return $this->name;
}
//    SET_ //

    function __construct($fruit3){
        $this-> set_name("pineapples");
    }
}


/* EXTENDOR */

class potatoes extends fruitSalad{
    private function frenchFries(){
    echo "We're making French Fries!";
}
}
/* NEW */
 new fruitSalad('apple','pear','marshmallow');

?>
