<?php
session_start();//on démarre la session

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO comment(pseudo,contenu) VALUES(?,?)');
$req->execute(array($_POST['pseudo'], $_POST['commentaire']));

header('Location: comment.php');





