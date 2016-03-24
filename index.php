<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8"/>
		<script type ="text/javascript" src="./js/boostrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="./css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="./css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
		<title>Point Jardin</title>
		<meta name="description" content=""/>
	</head>
	
	<body>

    <?php
      include("header.php")
    ?>

    <div class="container">
      <div class="section">

        <div class="bandeau">
          <div class="bienvenue col-md-6">
            <h1><b>Bienvenue chez Point Jardin</b></h1>
            <p><b>Paul et Laurentine vous accueillent dans votre nouveau point de vente de matériaux pour l'aménagement du jardin.</b></p>
          </div>
          <div class="descriptif col-md-6">
            <ul>
              <div class="descr-img col-xs-2">
                <li><img src="./images/logo_descr1.png"></li>
                <li><img src="./images/logo_descr2.png"></li>
                <li><img src="./images/logo_descr3.png"></li>
                <li><img src="./images/logo_descr4.png"></li>
              </div>
              <div class="descr-text col-xs-10">
                <li>Achetez la quantité dont vous avez besoin</li>
                <li>En panne d'inspiration? Nous vous conseillons et dessinons votre jardin</li>
                <li>Embellissez votre jardin avec notre gamme de paillage variés</li>
                <li>Pas de véhicule adapté? Point jardin vous livre chez vous, petite ou grande quantité</li>
              </div>
            </ul>
          </div>
        </div>

      	<div class="row">
        	<div class="col-xs-6 col-md-3">
          	<a href="mineraux.php" class="thumbnail">
              <img src="./images/galets2.jpg" alt="Nos minéraux">
            	<div class="texte_section"><h2>NOS MINERAUX</h2></div>
          	</a>
          </div>
        	<div class="col-xs-6 col-md-3">
        		<a href="accessoires.php" class="thumbnail">
          	 <img src="./images/gazon.jpg" alt="Nos accessoires">
          		<div class="texte_section"><h2>NOS ACCESSOIRES</h2></div>
        		</a>
        	</div>
        	<div class="col-xs-6 col-md-3">
        		<a href="vegetaux.php" class="thumbnail">
          	 <img src="./images/ecorce1.jpg" alt="Nos végétaux">
          	 <div class="texte_section"><h2>NOS VEGETAUX</h2></div>
        		</a>
        	</div>
        	<div class="col-xs-6 col-md-3">
        		<a href="services.php" class="thumbnail">
          	 <img src="./images/logo_services.jpg" alt="Nos services">
          		<div class="texte_section"><h2>NOS SERVICES</h2></div>
        		</a>
        	</div>				
        </div>

      </div>
    </div>

    <?php
      include("footer.php")
    ?>

	</body>

</html>