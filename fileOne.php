<?php
include 'index.php';
include 'fileTwo.php';


class One extends Two {
    final public function functionOne(){
        return 'This is function One';
    }
}

//this function is just for the purpose of this project-
//Final allows for no other function to override this function,
//this is the final function for the entire project


?>