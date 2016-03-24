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

  <div class="section">
  	<div class="row">
    		<div class="col-xs-6 col-md-3">
      		<a href="mineraux.php" class="thumbnail">
        	<img src="./images/galets2.jpg" alt="Nos minéraux">
        		<div class="texte_section"><h2>NOS MINERAUX</h2></div></a>
      		</a>
      	</div>
      	<div class="col-xs-6 col-md-3">
      		<a href="accessoires.php" class="thumbnail">
        	<img src="./images/gazon.jpg" alt="Nos accessoires">
        		<div class="texte_section"><h2>NOS ACCESSOIRES</h2></div></a>
      		</a>
      	</div>
      	<div class="col-xs-6 col-md-3">
      		<a href="vegetaux.php" class="thumbnail">
        	<img src="./images/ecorce1.jpg" alt="Nos végétaux">
        		<div class="texte_section"><h2>NOS VEGETAUX</h2></div></a>
      		</a>
      	</div>
      	<div class="col-xs-6 col-md-3">
      		<a href="services.php" class="thumbnail">
        	<img src="./images/logo_services.jpg" alt="Nos services">
        		<div class="texte_section"><h2>NOS SERVICES</h2></div></a>
      		</a>
      	</div>				
    </div>
  </div>

     <?php
        include("footer.php")
      ?>


		</div>
	</body>

</html>