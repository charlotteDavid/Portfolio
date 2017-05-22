<?php


try
{
    $bdd = new PDO('mysql:host=charlottxzdavid.mysql.db;dbname=charlottxzdavid;','charlottxzdavid','tJ3wMb63');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO comment(pseudo,contenu,email,date) VALUES(?,?,?,NOW())');
$req->execute(array($_POST['pseudo'], $_POST['commentaire'],$_POST['email']));


 $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  $headers .= 'FROM:' . htmlspecialchars($_POST['email']);
  $to = 'charlotte.david96@gmail.com'; // Insérer votre adresse email ICI
  $subject = 'Message envoyé par ' . htmlspecialchars($_POST['pseudo']) .' - <i>' . htmlspecialchars($_POST['email']) .'</i>';
  $message_content = '
  <table>
  <tr>
  <td><b>Emetteur du message:</b></td>
  </tr>
  <tr>
  <td>'. $subject . '</td>
  </tr>
  <tr>
  <td><b>Contenu du message:</b></td>
  </tr>
  <tr>
  <td>'. htmlspecialchars($_POST['contenu']) .'</td>
  </tr>
  </table>
  ';
mail($to, $subject, $message_content, $headers);
header('Location: comment.php');





