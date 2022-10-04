<?php
icnlude 'pengisian.php';

class mobil implements pengisian{



    public function __construct(public $type = "pertalite")
    {
        
    }
    public function getType($type)
    {
    return $this->$type = $type;
    }

}

$kendaraan = new mobil();
echo $kendaraan ->getType(type: "solar")