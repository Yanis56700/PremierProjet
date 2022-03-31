<?php 

session_start();

if (isset($POST['submit']))
{
    $email=$POST['login'];
    $pass =$_POST['mdp'];

    $db =new PDO('mysql:host=localhost;dbname=gsbv2','admin@localhost','password');
    $sql= "SELECT *FROM visiteur where  login =$login";
    $result =$db->prepare($sql);
    $result->execute($login);
    if ($result->rowCount() > 0) {
        $data = $result->fetch();

        if (password_verify($pass, $data['password'])) {
            echo "Connexion effectuée";
            
        }
    } 
    
}   

?>