
<?php
//include ('fileTwo.php');
//include ('fileOne.php');
//AUTO LOAD //

spl_autoload_register(function($class_name){
    include ("index.php");
});


//STATIC//
class Name
{
    public static $maxLettering = 10;
//METHOD//
    public static function maxLetters($name)
    {
        if (strlen($name) <= self::$maxLettering) {
            return true;
        }
    }
}
?>


<?php

spl_autoload_register(function($class_name){
    include "index.php";
});

// ONE ABSTRACT //
 abstract class Fruits
{
    public $kind;
    public $color;

    public function describingFruits()
    {
        return $this->kind . ' are ' . $this->color;
    }

 abstract public function haveSeeds();
}




class Apple extends Fruits{
    public function describingFruits()
    {
        return parent::describingFruits();
    }
   public function haveSeeds()
    {
       echo 'they do have seeds!';
    }
}

class Pear extends Fruits{
    public function describingFruits()
    {
        return parent::describingFruits();
    }
    public function haveSeeds()
    {
        echo 'they do have seeds!';
    }
}
class Bananas extends Fruits{
    public function describingFruits()
    {
        return parent::describingFruits();
    }
    public function haveSeeds()
    {
        echo 'they do not have seeds!';
    }
}

$Fruits = new Apple();
$Fruits->kind = 'Green Apples';
$Fruits->color = 'green & ';


echo $Fruits->describingFruits();
echo $Fruits->haveSeeds();


?>



<!-- PREVIOUS CODE -->




<!--<!-- INCLUDE FUNCTION-->
<?php
//include 'second.php';
//?>
<!---->
<?php
//
//class fruitSalad{
//    var $name;
//// FOUR ATTRIBUTES
//    public $fruit1;
//    public $fruit2;
//    public $fruit3;
//    public $ingredient1;
//
///* METHOD 1 */
//    private function cook($fruit1, $fruit2, $ingredient1)
//    {
//        echo "we're making an" . $fruit1 . $fruit2 . ' and ' . $ingredient1 . "salad!";
//    }
///* METHOD 2 */
//    private function making(){
//        echo "we're making a fruit salad!";
//    }
////    GET_ //
//    function get_name(){
//    return $this->name;
//}
////    SET_ //
//
//    function __construct($fruit3){
//        $this-> set_name("pineapples");
//    }
//}
//
//
///* EXTENDOR */
//
//class potatoes extends fruitSalad{
//    private function frenchFries(){
//    echo "We're making French Fries!";
//}
//}
///* NEW */
// new fruitSalad('apple','pear','marshmallow');


