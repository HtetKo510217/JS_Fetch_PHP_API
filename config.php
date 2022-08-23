<?php

   function query($sql) {
     $pdo = new PDO('mysql:host=127.0.0.1;dbname=ajax_with_php_api','root','');
     $res = $pdo->prepare($sql);
     $res->execute();
     $data = $res->fetchAll(PDO::FETCH_OBJ);
     return $data;
   }

   
 ?>
