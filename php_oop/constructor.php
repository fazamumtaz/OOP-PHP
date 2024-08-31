<?php
// Property merupakan data variabel yang ada pada class dan dapat digunakan pada method
class Book{
    public $judul = "Judul", 
        $penulis = "Penulis", 
        $halaman = 0, 
        $harga = 0;
    
    public function __construct($judul, $penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    
    public function cetakInfo(){
        return "$this->judul, $this->penulis";
    }
}

$book1 = new Book("Atomic Habits", "James Clear");

echo "Buku: " . $book1->cetakInfo();

// Method merupakan behavior dari object tersebut. Method merupakan function