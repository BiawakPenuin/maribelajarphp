<?php

include "produk.php";

class buku extends produk{
public function judul() {}
public function sayhello($name):void
{
    echo "hello nama saya $name";
}
}
// inisialisasi objek
 $obj = new buku();
 echo $obj -> sayhello(name: "Atun");