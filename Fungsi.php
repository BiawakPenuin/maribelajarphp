<?php

class Fungsi
{
    public function __construct(public $nameclass, public $numb_a)
    {
      //kosong
    }
  /*
     jenis fungsi ada 4 secara umun
    1.variabel_mod
    2.Fungsi mengembalikan nilai
    3.Fungsi dengan para mexer tanpa mengembalikan diri
    4.fungsi dengan parameter mengembalikan nilai
    */
    public function greating(): void
{
   echo "salam, dari negara macan";
}
   public function getnameclass():string
   {
     return $this-> nameclass;
   }
}
    $obj = new Fungsi("class Fungsi" , 2);
    echo $obj -> greating();
    echo $obj -> getnameclass-> greeting;

  