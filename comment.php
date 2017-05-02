
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortfolioFin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/Contact-FormModal-Contact-Form-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/MUSA_timeline.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.html">Charlotte David&lt;Bts Sio_Slam/&gt;</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="APropos.html">A Propos</a></li>
                    <li role="presentation"><a href="Portfolio.html">Portfolio </a></li>
                    <li role="presentation"><a href="Competences.html">Compétences </a></li>
                    <li role="presentation"><a href="veille.html">Veille technologique</a></li>
                    <li role="presentation"><a href="#contact">Contact </a></li>
                </ul>
            </div>
        </div>
    </nav>

<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// Récupération des commentaires
$req = $bdd->prepare('SELECT * FROM comment');
$req->execute();
while ($donnees = $req->fetch())
{
$pseudo =  $donnees['pseudo'];
$comment = $donnees['contenu'];
//echo '<div class="col-sm-5">';
echo '<div class="panel panel-default">';
echo'<div class="panel-heading">'.$pseudo.'</div>';
echo'<div class="panel-body">'.$comment.'</div>';
echo '</div>';
//echo '</div>';

} 
$req->closeCursor();
?>
<div class="well">
    <h4>Laissez un commentaire</h4>
    <form method="post" action="post_comment.php" class="clearfix">
        <div class="col-md-6 form-group">
            <label class="sr-only" for="pseudo">pseudo</label>
            <input type="text" class="form-control" name="pseudo" placeholder="Pseudo">
        </div>
 
        <div class="col-md-12 form-group">
            <label class="sr-only" for="commentaire">Commentaire</label>
            <textarea class="form-control" name="commentaire" placeholder="Commentaire"></textarea>
        </div>
 
        <div class="col-md-12 form-group text-right">
            <button type="submit" class="btn btn-primary">envoyer</button>
        </div>
    </form>
</div>
    <header></header>
    <div></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js"></script>
    <script src="assets/js/effet.js"></script>
</body>

</html>