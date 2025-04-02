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
		.discord{
			font-size: 40px;
			display: flex; 
            align-items: center; 
            margin-bottom: 50px;
		}.discord img{
			margin-right: 20px;
			margin-left: 20px;
			max-width: 250px;
			transition: transform 0.3s ease, box-shadow 0.3s ease;
		}.discord img:hover {  
            transform: scale(1.1); /* Aumentar tamaño al 110% */  
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); /* Sombra */  
        }
		.manifiesto{
			text-align: center;
		    font-size: 50px;
		}
		.MNM{
			text-align: center;
			font-size: 75px;
		}
		.discord{
			width: 150px;
			color: white;
		}
		.discord .Descripcion{
			color: white;
			text-decoration: none;
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


	<header class="hola">
		<nav class="navegacion">
			<ul class="menu">
				<li><a href="Inicio.php"> inicio </a></li>
				<li><a href="Historia.php"> Nosotros </a></li>
				<li><a href="#">  </a>
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


	<div class="discord">
		<a href="https://discord.gg/SGCzeead" target="_blank">
		  <img src="multimedia/discord logo.png" alt="Descripcion"> 
		  <div class="Descripcion">Unirme al Discord</div>
	    </a>
    </div>


</body>
</html>