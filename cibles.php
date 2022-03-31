<?php 
$FE=$_POST["FE"];
$NH=$_POST["NH"];
$FK=$_POST["Fk"];
$RP=$_POST["RP"];
$N=$_POST["N"];
$R=$_POST["R"];
echo "bonjour $FE";

$db =new PDO('mysql:host=localhost;dbname=gsbv2','root',"");
$sql= "INSERT INTO FicheFrais (idVisiteur, mois, nbJustificatifs, montantValide, dateModif,idEtat) 
VALUES (:P1,:P2,:P3,:P4,:P5,:P6)";
$st= $db->prepare($sql);
$st->bindParam(":P1",$FE);
$st->bindParam(":P2",$NH);
$st->bindParam(":P3",$FK);
$st->bindParam(":P4",$RP);
$st->bindParam(":P5",$N);
$st->bindParam(":P6",$RP);
$st->execute();
$ligne = $st->fetchAll();

?>