
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <?php include 'assets/css/css.php' ?>
</head>

<body style='background-image: url("assets/img/board.jpg");'>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.php">Charlotte David&lt;Bts Sio_Slam/&gt;</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="APropos.php">A Propos</a></li>
                    <li role="presentation"><a href="Portfolio.php">Portfolio </a></li>
                    <li role="presentation"><a href="Competences.php">Connaissances </a></li>
                    <li role="presentation"><a href="veille.php">Veille technologique</a></li>
                    <li role="presentation"><a href="contact.php">Contact </a></li>
                    <li role="presentation"><a href="comment.php">C'est à vous </a></li>
                </ul>
            </div>
        </div>
    </nav>
    
  
    <div class="container"><br>
            <div class="row" style="padding-bottom:45px;">
                   <p class="typeEcriture"></p>
                <div class="col-md-12"></div>
            </div>
        </div>
        <div class="container">
            <div class="row row-custom">
                <div class="col-md-12" style="width:400px;height:100px;">
    <?php
// Connexion à la base de données
try
{
     $bdd = new PDO('mysql:host=charlottxzdavid.mysql.db;dbname=charlottxzdavid;','charlottxzdavid','tJ3wMb63');
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
$date = $donnees['date'];
$mail =  $donnees['email'];
$comment = $donnees['contenu'];
//echo '<div class="col-sm-5">';
echo '<div class="panel panel-default">';
echo'<div class="panel-heading"> '.$pseudo.' '.$date.'</div>';
echo'<div class="panel-body" id="message_comment">'.$comment.'</div>';
echo '</div>';
//echo '</div>';

} 
$req->closeCursor();
?>
                    
                                    
                </div>
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1" style="padding:0; position :fixed;">
                    <div class="well">
                        <h3 class="text-danger">Laissez un commentaire</h3>
                        <form method="post" action="post_comment.php" class="clearfix">
                            <div class="form-group">
                                <label class="control-label">Pseudo </label>
                                <input class="form-control" type="text" name="pseudo">
                            </div>
                            <div class="form-group">
                                <label class="control-label">E-mail </label>
                                <input class="form-control" type="text" name="email">
                            </div>
                
                            <div class="form-group">
                                <label class="control-label">Commentaire </label>
                                <textarea class="form-control" rows="12" name="commentaire"></textarea>
                            </div>
                          
                      
                            <button class="btn btn-primary" type="submit">Envoyer </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/typeit.min.js"></script>
    <script src="assets/js/effet.js"></script>
   


</body>

</html>