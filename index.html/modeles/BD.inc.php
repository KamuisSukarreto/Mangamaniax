<?php

function connexionPDO()

{
    $login='root';
    $mdp = '';
    $bd = 'news_manga_anime';
    $serveur = 'localhost';

    try {
        $conn = new PDO("mysql:host=$serveur;dbname=$bd;port=3306",$login,$mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
       print"Erreur de connexion PDO ";
        die();
    }
}
?>

