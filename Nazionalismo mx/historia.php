<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<style type="text/css">
		body{
			background-color: black;
			text-align: center;
			font-size: 30px;
			color: white;
		}

		.manifiesto{
			text-align: center;
		    font-size: 50px;
		}
		.MNM{
			text-align: center;
			font-size: 75px;
		}
		.Historia{
			font-size: 40px;
		}
		.nosotros{
			font-size: 40px;
		}

		.navegacion{
			width: 60%;
			margin: 30px auto;
			background: orange;
		}
		.navegacion ul{
			list-style: none;
		}
		.menu > li {
			position: relative;
			display: inline-block;
		}
		.menu >li >a {
			display: block;
			padding-left: 20px;
			padding-right: 20px;
			padding-top: 15px;
			padding-bottom: 15px;
			color: ghostwhite;
			font-family: 'monospace';
			text-decoration: none;
		}
		.menu li:hover{
			visibility: visible;
		}
		.submenu li a{
			display: block;
			padding: 15px;
			color: #fff;
			font-family: monospace;
			text-decoration: none;
		}
		.submenu{
			position: absolute;
			background: #333333;
			width: 130px;
			visibility: hidden;
			opacity: 0;
			transition: opacity 1.5x;
		}
		.menu li:hover .submenu{
			visibility: visible;
			opacity: 1;
		}
	</style>


	<header>
		<nav class="navegacion">
			<ul class="menu">
				<li><a href="Inicio.php"> inicio </a></li>
				<li><a href="Historia.php"> Nosotros </a></li>
				<li><a href="#"> . </a>
				    <ul class="submenu">
				    	<li><a href="Legos.php">Legos</a></li>
				    	<li><a href="MegaConstrux.php">Mega Construx</a></li>
				    </ul>
				</li>
				<li><a href="Unirme.php">Unirme</a></li>
			</ul>	
		</nav>
	</header>

	<label class="MNM">Movimiento Nazionalista Mexicano (M.N.M)</label><br><br>

	<label class="Historia">Nuestra Historia:</label><br><br>
	<label>El Movimiento Nazionalista Mexicano (M.N.M), es una nueva ideologia de derecha que toma elementos de ideologias como la extrema derecha, el nacional socialismo, el nacionalismo. Nuestra inspiracion son los grupos nacionalistas de los años 30's y 40's, como la Accion Revolucionaria Mexicanista (A.R.M.).</label><br><br>

	<label class="nosotros">Quienes Somos:</label><br>
	<label>No Somos NAZIS, somos jovenes que queremos un cambio en el pais, ya que los partidos politicos actuales han demostrado ser ineficientes y desinteresados en hacer un cambio real, han demostrado no querer combatir a la corrupcion ni a la delincuencia y estar coludidos con ellos hasta en las esferas mas altas del gobierno.</label><br>
	<label>Nosotros rechazamos en lo absoluto ideologias como el comunismo, el marxismo, el socialismo, o similares, ya que estas han demostrado ser ineficientes y poco utiles. Tambien nos oponemos a las ideologias Woke y al falso progresismo como la comunidad LGBT, ya que estas ideologias van en contra de nuestra ideologia.</label>



</body>
</html>