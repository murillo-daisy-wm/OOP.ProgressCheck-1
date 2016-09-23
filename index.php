<!DOCTYPE html>
    <html>


<head>


</head>


<?php
include ('styleSheet.css');
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

<body>
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
        return $this->kind . '<h3> are </h3>' . $this->color;
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
        echo '<h3> Apples do have seeds! </h3>' . '<br/>';
    }
}

class Pear extends Fruits{
    public function describingFruits()
    {
        return parent::describingFruits();
    }
    public function haveSeeds()
    {
        echo ' <h3> Pears do have seeds! </h3>' . '<br/>';
    }
}
class Bananas extends Fruits{
    public function describingFruits()
    {
        return parent::describingFruits();
    }
    public function haveSeeds()
    {
        echo ' <h3> Bananas do not have seeds! </h3>'. "<br/>";
    }
}
?>


<br/><br/>

<center>

<?php

$Fruits = new Apple;
$Fruits->kind = '<h3>Green Apples</h3>';
$Fruits->color = '<h3> green ! </h3>';

$Pear = new Pear();
$Pear ->kind = '<h3> Asian Pears </h3>';
$Pear ->color = '<h3> brown ! </h3>';

$Bananas = new Bananas();
$Bananas->kind =' <h3> Saba Bananas </h3>';
$Bananas->color = '<h3> yellow ! </h3>';

echo $Fruits -> describingFruits();
echo $Fruits -> haveSeeds();

echo $Pear -> describingFruits();
echo $Pear->haveSeeds();

echo $Bananas -> describingFruits();
echo $Bananas ->haveSeeds();

//haven't echoed the seeds part

//FROM OTHER PAGES
//echo $Two = new Two();
//echo $One = new One();


?>
</body>
    </center>

</html>


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


