<?php
include ("Member.php");
include ("prodi.php");



$nim=$_GET['nim'];
$member = new Member ($nim);

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <title>Test PHP</title>
     <style type="text/css">
     body{
       background-color: #<?= $member->getWarna()?>;

     }
     </style>
   </head>
   <body>
     <h1>Hallo, <?= $member->getNama()?> </h1><br>
    <h1><?= $member->getprodi()->getJurusan()?>
   </body>
 </html>
