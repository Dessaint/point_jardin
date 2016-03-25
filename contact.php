<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8"/>
		<script type ="text/javascript" src="./js/boostrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="./css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="./css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
		<title>Contact</title>
		<meta name="description" content=""/>
	</head>
	
	<body>
		<div class="container">
      <div class="page-contact">
      <!--Lecture du header-->
      <?php
        include("header.php")
      ?>
      <div class="row">
        <!--Formulaire de contact-->
        <form class="formulaire col-md-6 col-xs-12">
          <h1>Formulaire de contact :</h1>
          <div class="form-group">
            <label for="Input_nom"></label>
            <input type="text" class="form-control" id="Input_nom" placeholder="Nom, prénom">
          </div>
          <div class="form-group">
            <label for="Input_email"></label>
            <input type="email" class="form-control" id="Input_email" placeholder="Email">
          </div>
          <fieldset class="form-group">
            <label for="Input_telephone"></label>
            <input type="text" class="form-control" id="Input_telephone" placeholder="Téléphone">
          </fieldset>
          <fieldset class="form-group">
            <label for="Input_sujet"></label>
            <input type="text" class="form-control" id="Input_sujet" placeholder="Sujet">
          </fieldset>
          <fieldset class="form-group">
            <label for="Input_texte"></label>
            <textarea class="form-control" id="Input_texte" rows="3" placeholder="Mon message"></textarea>
          </fieldset>
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>

        <!--Bloc avec la photo du magasin-->
          <div class="photo-contact col-md-6">
            <div class="hidden-xs">
              <img src="./images/magasin.jpg" alt="Notre magasin">
            </div>  
            <!--Bloc contact-->
            <div class="row contacts">
              <div class="contacts col-md-6 col-xs-12">
                <h1>CONTACT</h1>
                <p>54 route Nationale 12<br>28380 Saint-Rémy-sur-Avre<br>02.37.63.50.22<br>info@point-jardin.fr<br></p>
              </div>
              <div class="horaires col-md-6 col-xs-12">   
                <h1>HORAIRES</h1>
                <p>Du lundi au vendredi:<br>8h/12h - 13h30/18h<br>Le samedi:<br>9h/17h30 non stop<br>Le dimanche:<br>Ouverture exceptionnelle indiquée en page Accueil.<br></p>
              </div>
            </div>
          </div>
      </div>

      <div class="row">
        <!--Carte de localisation-->
        <div class="maps col-md-6 col-xs-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10522.678720445118!2d1.254987490034463!3d48.75000634931433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e1565832ddd291%3A0xd94d4e2b5c19042e!2sPoint+Jardin!5e0!3m2!1sfr!2sfr!4v1458818161418" width="400" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>

      <!--Lecture du footer-->
      <?php
        include("footer2.php")
      ?>
    </div>
		</div>

 <?php
      include("footer.php")
    ?>    

	</body>

</html>