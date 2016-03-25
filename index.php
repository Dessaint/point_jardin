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
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

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
      	
        <div class="Actualites">
          <div class="row">
            <div class="Actu-titre col-md-12">
              <h1>ACTUALITES !</h1>
            </div>
          </div>
          <div class="row">
            <div class="Actu-logo col-md-2">
              <img src="./images/l_etiquette-bon-plan.png" alt="Bon plan">
            </div>
            <div class="Actu-texte col-md-10">
              <p>Le printemps est de retour, venez découvrir notre gamme de gazon directement à votre magasin !</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8">
          	<div class="col-xs-12 col-md-6">
            	<a href="mineraux.php" class="thumbnail">
                <img src="./images/galets2.jpg" alt="Nos minéraux">
              	<div class="texte_section"><h2>NOS MINERAUX</h2></div>
            	</a>
            </div>
          	<div class="col-xs-12 col-md-6">
          		<a href="accessoires.php" class="thumbnail">
            	 <img src="./images/gazon.jpg" alt="Nos accessoires">
            		<div class="texte_section"><h2>NOS ACCESSOIRES</h2></div>
          		</a>
          	</div>
          	<div class="col-xs-12 col-md-6">
          		<a href="vegetaux.php" class="thumbnail">
            	 <img src="./images/ecorce1.jpg" alt="Nos végétaux">
            	 <div class="texte_section"><h2>NOS VEGETAUX</h2></div>
          		</a>
          	</div>
          	<div class="col-xs-12 col-md-6">
          		<a href="services.php" class="thumbnail">
            	 <img src="./images/logo_services.jpg" alt="Nos services">
            		<div class="texte_section"><h2>NOS SERVICES</h2></div>
          		</a>
          	</div>
          </div>
          <div class="col-md-4">
            <div class="fb-page col-md-6 hidden-xs" data-href="https://www.facebook.com/point-jardin" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
              <div class="fb-xfbml-parse-ignore">
                <blockquote cite="https://www.facebook.com/point-jardin">
                  <a href="https://www.facebook.com/point-jardin">Point Jardin</a>
                </blockquote>
              </div>
            </div>
          </div>			
        </div>

      </div>
    </div>

    <?php
      include("footer.php")
    ?>

	</body>

</html>