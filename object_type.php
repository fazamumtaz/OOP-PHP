<?php
// Property merupakan data variabel yang ada pada class dan dapat digunakan pada method
class Book{
    public $judul = "Judul", 
        $penulis = "Penulis", 
        $halaman = 0, 
        $harga = 0;
    
    public function __construct($judul, $penulis, $halaman, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->halaman = $halaman;
        $this->harga = $harga;
    }
    
    public function cetakInfo(){
        return "$this->judul, $this->penulis";
    }
}

class CetakInfoProduk {
    public function cetak( $book ){
        $str = "{$book->judul} | {$book->penulis}, {$book->halaman} halaman. Rp{$book->harga}";
    }
}

$book1 = new Book("Atomic Habits", "James Clear");

// echo "Buku: " . $book1->cetakInfo();

// Method merupakan behavior dari object tersebut. Method merupakan function