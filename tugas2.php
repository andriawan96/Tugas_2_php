<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tugas 2</title>
  </head>
  <body>
    <h2>Tugas 2 PHP</h2>
      <p>Untuk mengerjakan 1 unit rumah dibutuhkan waktu 36 hari dengan 12 tenaga
        kerja. Berapa waktu akan dihabiskan bila menggunakan 24 orang tenaga kerja ?
      </p>
    <h2>Jawabannya :</h2>
      <p>
        36 hari = 12 pekerja<br>
        X hari = 24 Pekerja<br>
        X = ...?<br>
        <?php
            $waktu = 36;
            $tenaga = 12;
            $tenagaplus = 24;

            //perkalian waktu dan $tenaga
            $perkalian = $waktu * $tenaga;
            //hasil perkalian di bagi dengan penambahan $tenaga
            $pembagian = $perkalian / $tenagaplus;
         echo "Maka Nilai X = $pembagian";
         ?>
      </p>
  </body>
</html>
