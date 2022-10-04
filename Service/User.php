<?php

class User{          

public $gorengan = [
    'Bala-Bala' , 'Tahu Isi' , 'Risoles'
];


public function GetGorengan(){
    foreach($this-> gorengan as $item){
        echo $item;
}
}


$user = new User();

echo $user->GetGorengan();
