<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="Comparatif.css" />
	<title>Comparatif</title>
</head>

<body>
<header>
	<h1>Comparatif</h1>
	<nav class="nav">
		<a href="accueil.html">Accueil</a>
		<a href="">Mon véhicule</a>
		<a href="">Comparatif</a>
	</nav>
</header>

<div class="comparaison">

<div class="premierchoix">
<form method="post" action="cible.php">
<label for="car-select">Choisis un modèle:</label>
<select class="choix" name="cars" id="car-select">
    <option value="">--Choisis un véhicule--</option>
    <option value="mavoiture">Ma Voiture</option>
    <option value="clio">Clio</option>
    <option value="sandero">Sandero</option>
    <option value="megane">Megane</option>
    <option value="A3">A3</option>
    <option value="classeA">Classe A</option>
</select>

</form>
</div>

<div class="secondchoix">
<form method="post" action="cible.php">
<label for="car-select">Choisis un modèle:</label>
<select class="choix" name="cars" id="car-select">
    <option value="">--Choisis un véhicule--</option>
    <option value="mavoiture">Ma Voiture</option>
    <a href="https://www.renault.fr/vehicules-particuliers/clio.html"><option value="clio">Clio</option></a>
    <option value="sandero">Sandero</option>
    <option value="megane">Megane</option>
    <option value="A3">A3</option>
    <option value="classeA">Classe A</option>
</select>
</div>



</form>
</div>
