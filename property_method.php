<?php
// Property merupakan data variabel yang ada pada class dan dapat digunakan pada method
class Book{
    public $judul = "Judul", 
        $penulis = "Penulis", 
        $halaman = 0, 
        $harga = 0;
    
    public function cetakInfo(){
        return "$this->judul, $this->penulis";
    }
}

$book1 = new Book();
$book1->judul = "Atomic Habits";
$book1->penulis = "Idk the author";
$book1->halaman = 444;
$book1->harga = 200000;

$book2 = new Book();
$book2->judul = "The art of not giving a shit";
$book2->penulis = "Idk";
$book2->halaman = 432;
$book2->harga = 234000;

echo $book1->cetakInfo();
echo "\n";
echo $book2->cetakInfo();
// Method merupakan behavior dari object tersebut. Method merupakan function