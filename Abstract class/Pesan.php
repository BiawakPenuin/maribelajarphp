<?php
trait apakabar{
    public function apakabar(){
        echo static :: class . 'apakabar';
    }
}
trait selamatpagi{
    public function apakabar(){
        echo static :: class . 'selamat pagi';
    }
}
class Pesan {
use apakabar , selamatpagi {
    apakabar :: apakabar insteadof selamatpagi;
    selamatpagi :: apakabar as apakabardaritraitselamatpagi;

}
}
//inisialisasi Class Objek
$pesan = new Pesan();
echo $pesan -> apakabardaritraitselamatpagi() . "<br>";


