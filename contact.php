<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8"/>
		<script type ="text/javascript" src="./js/boostrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="./css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="./css/style.css">
		<title>Point Jardin</title>
		<meta name="description" content=""/>
	</head>
	
	<body>
		<div class="container">

      <?php
        include("header.php")
      ?>

      <form class="col-md-6 col-xs-12">
        <div class="form-group">
          <label for="exampleInputName2"></label>
          <input type="text" class="form-control" id="exampleInputName2" placeholder="Nom, prénom">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail2"></label>
          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
        </div>
        <fieldset class="form-group">
          <label for="formGroupExampleInput2"></label>
          <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Téléphone">
        </fieldset>
        <fieldset class="form-group">
          <label for="formGroupExampleInput2"></label>
          <input type="text" class="form-control" id="formGroupExampleInput4" placeholder="Sujet">
        </fieldset>
        <fieldset class="form-group">
          <label for="exampleTextarea"></label>
          <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Mon message"></textarea>
        </fieldset>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>

      <div class="col-md-6 col-xs-12">
        <img src="./images/magasin.jpg" alt="Notre magasin">
        <h1>CONTACT</h1>
        <p>54 route Nationale 12<br>28380 Saint-Rémy-sur-Avre<br>02.37.63.50.22<br>info@point-jardin.fr<br></p>
        <h1>HORAIRES</h1>
        <p>Du lundi au vendredi:<br>8h/12h - 13h30/18h<br>Le samedi:<br>9h/17h30 non stop<br>Le dimanche:<br>Ouverture exceptionnelle indiquée en page Accueil.<br></p>
      </div>

      <div class="col-md-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10522.678720445118!2d1.254987490034463!3d48.75000634931433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e1565832ddd291%3A0xd94d4e2b5c19042e!2sPoint+Jardin!5e0!3m2!1sfr!2sfr!4v1458818161418" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>


     <?php
        include("footer.php")
      ?>

		</div>
	</body>

</html>