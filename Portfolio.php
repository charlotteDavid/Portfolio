<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <?php include 'assets/css/css.php' ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">

</head>

<body>
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
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Portfolio</h2></div>
            <div class="row articles">
                <div class="col-md-4 col-sm-6 item">
                   <img class="img-responsive" src="assets/img/imagina.png">
                    <h3 class="text-center name">Stage à Imagina </h3>
                    <p class="description">Développement de la Sidebar pour le nouveau site de Imagina Connect.</p><br>
                 <p class="text-center"><a title="rapport-imagina" href="imaginaRapport.pdf" target="_blank"><i class="fa fa-download fa-1x"></i>Télécharger mon Rapport De Stage</a></p>
                   
                </div>
                <div class="col-md-4 col-sm-6 item">
                    <img class="img-responsive" src="assets/img/data.png" style="max-height: 136px;">
                    <h3 class="name">Stage à Data Story</h3>
                    <p class="description">Intégration de l'API Pixabay et du SDK adobe pour l'application Web Ds Studio</p><br>
                    <p class="text-center"><a title="rapport-data" href="RapportDeStageDataStudio.pdf" target="_blank"><i class="fa fa-download fa-1x"></i>Télécharger mon Rapport De Stage</a></p>
                    
                </div>
                <div class="col-md-4 col-sm-6 item">
                    <a href="#"><img class="img-responsive" src="assets/img/desk.jpg"></a>
                    <h3 class="name">PPE </h3>
                    <p class="text-center">A Venir </p>
                    
                </div>
            </div>
        </div>
    </div>
  
    <footer class="container-fluid text-center bg-lightgray">

        <div class="copyrights" style="margin-top:5px; ">
             <span > <a href="https://fr.linkedin.com/in/charlotte-david" target="_blank" style="font-size:medium;">Suivez-Moi sur LinkedIn </a></span>
            <p>Charlotte David © 2017, All Rights Reserved
       
             
           
        </div>
</footer>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/effet.js"></script>
</body>

</html>