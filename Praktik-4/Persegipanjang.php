<?php
 class PersegiPanjang{
     public $panjang;
     public $lebar;


     public function keliling(){
         $keliling = 2*($this->panjang + $this->lebar);
         return "Hasil Keliling : ".$keliling;
     }
     public function luas(){
        $luas = $this->panjang*$this->lebar;
        return "Hasil Luas : ".$luas;
     }

     public function Panjangpersegi($panjang){
         return $this->panjang =$panjang;
     }

     public function Lebarpersegi($lebar){
        return $this->lebar =$lebar;
    }
 }

$luasPersegi = new PersegiPanjang();
echo "<h3>Hitung Keliling dan Luas Persegi Panjang</h3>";
echo "Panjang : ".$luasPersegi->Panjangpersegi(30);
echo "<br/>";
echo "Lebar : ".$luasPersegi->Lebarpersegi(12);
echo "<br/>";
echo $luasPersegi->keliling();
echo "<br/>";
echo $luasPersegi->luas();

?>