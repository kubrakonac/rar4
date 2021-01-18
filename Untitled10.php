<?php

  function asallariYazdir($sayilar)
  {                                 // Gonderilen dizideki asal sayilari yazdiran fonksiyon
    echo "Dizideki Asal Sayilar : \n";
    $sayac = 0;                     // Bolunebilen sayisini tutan sayac
    for($i = 0; $i < count($sayilar); $i++) // Gelen dizi boyut kadar donecek for dongusu.
    {
     if($sayilar[$i] > 1)     // Sayi asal olmak ici 1 den b�y�k olmal�d�r.
     {
       for($j = 1; $j<= $sayilar[$i]; $j++) // 1 den o sayiya kadar olanki t�m say�lar� d�n�yoruz.
       {
         $kalan = $sayilar[$i] % $j;    // Sayiyi 1 den itibaren kendisine kadarki t�m say�lara b�l�yoruz.
         if($kalan == 0)                // Eger kalans�z b�l�n�rse sayac 1 artar.
           $sayac++;
       }
     }

     if($sayac == 2)        // Sayac 2 olursa kendisine ve 1 e bolunmus demektir ve asaldir.
       echo $sayilar[$i]." ";

     $sayac = 0;      // Sayaci isimiz bittigi icin yeniden 0 a getiriyoruz.
    }
  }

$sayilar = array();   // sayilar dizisi baslatiliyor.
for($i = 0; $i < 100; $i++) // 1 ile 100 arasindaki t�m sayilar kontrol edilecek.
  $sayilar[$i] = $i;    // Sayilar diziye aktariliyor.

asallariYazdir($sayilar); // Asallari yazdiran fonksiyon.


?>