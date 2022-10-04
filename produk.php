<?php
// 1. kelas abstract dengan keyword abstract
abstract class produk{
    // 2. bisa memiliki atribut
    public $harga = 4000;
    // 3. dapat memiliki function dengan body code tanpa keyword  abstract
      public function getharga() {
        return $this -> harga; 
     }
     abstract public function sayhello($name):void;
// 4. dapat melakukan signature / tanda tangan
     public static $judul = "belajar abstract class";
}
 // 5. abstract dapat memiliki variabel static
 
  // tidak bisa diinisialisasi objek

 


  ?>