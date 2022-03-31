<?php
$mois=$POST['mois'];


$db =new PDO('mysql:host=localhost;dbname=gsbv2','root',);
$sql= "SELECT *FROM  where   mois =$mois";
$result =$db->prepare($sql);
$result->execute($mois);
?>