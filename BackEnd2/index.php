<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back End</title>
<?php
interface star {
    public function flag();
}
// interables
function get_iterable():iterable {
  return ["Daftar Film Dan Anime"];
}
$iterable = get_iterable();
foreach($iterable as $rate) {
  echo $rate;
}
class movie {
// Public Access modifiers 
  public $nama,
         $pengarang,
         $rating,
         $deskripsi;
// contruktor
  function __construct ($nama, $pengarang,$rating, $deskripsi) {
    $this->nama = $nama;
    $this->pengarang = $pengarang;
    $this ->rating =$rating;
    $this->deskripsi = $deskripsi;
  }
// destructor
  function __destruct() {
    echo "Nama : {$this->nama}
          _Pengarang : {$this->pengarang} 
          | Rating : {$this->rating}<br> 
          Deskripsi : {$this->deskripsi}.";
    echo "<br>";
   }
 }
// Inheritance
class Info extends movie implements star{
    public  function flag (){
        echo "<hr>Favorit Film Di Tahun 2012 - 2021<hr>";
    }
}
// Static Property
class Rilis {
    public static $film1 = "04 Mei 2012", 
                  $anime1 = "05 Oktober 2018 (On Going)";
}
// ini adalah Static Methods
class genre{
    public static function staticMethod (){
        echo "Film = Avangers <br>
              Anime = Tensei Slime";
        echo "<hr>";
    }
}
// ini adalah obyek
$film1 = new Info( "Avangers", "Joss Whedon", "9/10",
                   " pemimpin pasukan luar angkasa yang dikenal sebagai Chitauri. 
                   <br>Dalam pertukaran untuk mengambil Tesseract, 
                   sumber energi yang sangat kuat.");
$anime2 = new Info("Tensei Slime", "Fuse","8/10",
                   "Hidup sendiri di sebuah gua yang penuh dengan monster, 
                   dia kemudian bertemu dengan Veldora, 
                   <br>seekor naga badai yang terkurung selama 300
                    tahun karena telah menghancurkan sebuah kota menjadi abu.");
$anime2 -> flag();
genre::staticMethod();
echo "Avangers | Rilis : " . Rilis::$film1;
echo "<br> Tensei Slime | Rilis : " . Rilis::$anime1;
echo "<hr>";
echo "";
?>
</head>
<body>
</body>
</html>
