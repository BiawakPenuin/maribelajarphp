<?php
trait role {
abstract public function getRole():string;
}
class Babeh {
public $nama;
public $umur;
public $marga;
public static $index;
public $is_status;

public function __construct($nama,$umur,$is_status = "anak")
{
$this->nama = $nama;
$this->umur = $umur;
$this->marga = "tan";
self::$index = 1;
$this->is_status = $is_status;
}

public function getMarga(){
return $this->marga;
}

public function getName(){
return $this->nama;
}

public function getStatus(){
return $this->is_status;
}

public function getUmur(){
return $this->umur;
}

public function display()
{
echo "No " . self::$index++ . "<br>";
echo "Nama " . $this->getName() . "<br>";
echo "Marga " . $this->getMarga() . "<br>";
echo "Umur " . $this->getUmur() . "<br>";
if($this->is_status == "Bapak"){
echo "Status: " . $th
if($this->is_status == "Bapak"){
echo "Status: " . $this->getStatus() . "<br>";
$this->space() . "<br>";
}else{
echo "Status: " . $this->getStatus() . "<br>";
}
}
public function space()
{
echo "<hr>";
}
}

class Bocil extends Babeh {
use Role;

public $role;

public function __construct($nama, $umur, $is_status, $role = "Siswa")
{
parent::__construct($nama, $umur, $is_status );
$this->nama = $nama;
$this->umur = $umur;
$this->role = $role;
}

public function getAllDisplay()
{
$this->display() . "<br>";
echo "Jabatan: " . $this->getRole();
}

public function getRole(): string{
return $this->role;
}
}

$babeh = new Babeh("Asep", 37, "Bapak");



$bocil = new Bocil("Arief", 15, "Anak");
$bocil1 = new Bocil("Satrio", 17, "Anak");

echo $babeh->display();
// output
// No 1
// Nama Asep
// Marga tan
// Umur 37
// Status: Bapak

echo $bocil->getAllDisplay();
// output
// No 2
// Nama Arief
// Marga tan
// Umur 15
// Status: Anak
// Jabatan: Siswa