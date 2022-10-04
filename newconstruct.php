<?php

class newconstruct{
    //deklarasi data variabel
     public $name, $level;

     public function __construct()
     {
        $this-> name = "newconstruct";
        $this-> level = "easy";
     }
}

 $obj = new newconstruct();
 echo $obj->name. "<br>";
 echo $obj->level. "<br";