<?PHP

class DMR
{
    public function __construct ( private $harga = 5000, private $diskon1 = 5, private $diskon2 = 10  )
{
    $this -> harga = $harga;
    $this -> diskon1 = $diskon1;
    $this -> diskon2 = $diskon2;
}
  public function pesan()
  {
    return "Tidak ada harga diskon";
  }
   public function perkalian($Jumlahjam){

    if($Jumlahjam <-9){
        return $Jumlahjam *$this -> harga;
   }
     else if  ($Jumlahjam >= 10 && $Jumlahjam <= 15){
    return $Jumlahjam *$this -> harga* $this -> diskon1/1000; 
     }
     else if ($Jumlahjam >= 16 && $Jumlahjam <= 24){
     return $Jumlahjam *$this -> harga -$Jumlahjam * $this ->harga* $this -> diskon2/100;
     }
     else{
        return $this->pesan();
     }
    }
}

 $rental = new DMR();
 ECHO " HARGA: " . $rental -> perkalian(Jumlahjam: 15);