<?php
    class Produk{
        public $judul,
                $penulis,
                $penerbit,
                $harga;

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getLabel(){
            return "$this->penulis, $this->penerbit";
            }   
        }

        
        $produk1 = new Produk("AtomicHabits", "James Clear", "Gramedia", 90000);
        $produk2 = new Produk("One Piece", "Eiichiro Oda", "Elex Media", 40000);
        $produk3 = new Produk("Dragon Ball");

        echo "Pengembangan Diri : " . $produk1->getLabel();
        echo "<br>";
        echo "Komik : " . $produk2->getLabel();
        echo "<br>";
        var_dump($produk3);
?>