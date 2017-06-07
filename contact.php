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
   <h1 class="text-center">Contactez-Moi</h1>
    
        <div class="container">
           <div class="row">
            <div class="col-md-6">
                <form method="post" action="post_contact.php" id="contactform">
                 <h2 class="text-center">Contact </h2>
                 
                     <div id="form-champ">
                     <input class="form-control" type="text" name="name" placeholder="Name" />
                     </div><br>
                     <div id="form-champ">
                    <input class="form-control" type="email" name="email" placeholder="Email" />
                     </div><br>
                 <div id="form-champ">
                    <textarea class="form-control" rows="10" name="message" placeholder="Message"></textarea>
                 </div>
                 <div class="form-group">
                     <button class="btn" type="submit" onclick="alert('message envoyé');" style="display:block; margin:auto;">Envoyer </button>
                  </div>
                </form>
            </div>
            <div class="col-md-6" style="text-align:center;">
                <h3>Adresse</h3>
                <p>  31 rue Jean Racine 56000 Vannes</p>
                 <a href="mailto:charlotte.david96@gmail.com">charlotte.david96@gmail.com</a><br>
                 <a href="https://fr.linkedin.com/in/charlotte-david" target="_blank">Suivez-Moi sur LinkedIn </a>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42998.04438230672!2d-2.783492939028029!3d47.6576571219994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101e84c37de291%3A0xb9f358307b233d13!2sVannes!5e0!3m2!1sfr!2sfr!4v1488722488654" width="600" height="368" frameborder="0" style="border:0" allowfullscreen></iframe>
            
             </div> 
         </div>
        </div>

    <footer class="container-fluid text-center bg-lightgray">
        <div class="copyrights" style="margin-top:25px; ">
             <span > <a href="https://fr.linkedin.com/in/charlotte-david" target="_blank" style="font-size:medium;">Suivez-Moi sur LinkedIn </a></span>
             <p>Charlotte David © 2017, All Rights Reserved</p>
        </div>
    </footer>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/messages_fr.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/effet.js"></script>

   </body>
</html>