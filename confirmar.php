<!-- <?php   
   include('db.php')
   ?> -->

<!DOCTYPE HTML>

<html lang="es">
	<head>
		<title>ECOSMARTHOMES.AR</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->


		<!--Twitter Cards-->
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@marx_chc" />
		<meta name="twitter:creator" content="@marx_chc" />
		<meta property="og:url" content="http://esh.comodoro.online/EcoSmartHomes/" />
		<meta property="og:title" content="ECOSMARTHOMES.AR" />
		<meta property="og:description" content="Somos medioambiente, somos tecnologia, somos hogar. Y vos tambien podes serlo." />
		<meta property="og:image" content="http://esh.comodoro.online/EcoSmartHomes/images/logoFondo.jpg" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108797321-4"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-108797321-4');
		</script>

		<style>

/* 	.menu{
		width:100%;
		text-align: center;
		background-color:#fff;
		padding:20px;
		margin:0px;
		border-bottom: solid 1px gray;
		position: fixed;
		z-index: 0;
	} */

	.fit{
		z-index:-1;
	}
/* 	li{
		decoration: none;
		display: inline;
		padding: 20px;
		
		margin: 0 auto;
		
	} */

	.header{
		margin:0px;
		padding:0px;
	}
/* 
	a{
		text-decoration:none;
	}
	 */

	 .menu{
		 list-style:none;
		 color:white;
	 }

	 .menuUl{
		 padding:0px;
	 }

	 .enlaceMenu{
		 color: white;
		 text-decoration:none;
		 font-size: 16px;
	 }

	</style>


	</head>
	<body id="top">

		<!-- Header -->
			<header id="header" style="padding-top:20px; padding-bottom:20px;">
				<div class="inner">
					<a href="index.php" class="image avatar"><img src="images/avatar.png" alt="" /></a>
					<h1><strong>ECOSMARTHOMES.AR</strong></h1><br />
					<h2>Somos medioambiente, somos tecnologia, somos hogar</h2>
					<h3>y vos tambien podes serlo.</h3>
					<div class="menuNav">
					<ul class="menuUl">
		<!-- 			<li><a href="">Inicio</a></li> -->
					<li class="menu"><a class="enlaceMenu" href="index.php">Inicio</a></li>
					<li class="menu"><a class="enlaceMenu" href="QuienesSomos.php">Quienes Somos</a></li>
					<li class="menu"><a class="enlaceMenu" href="Conferencia.php">Eventos</a></li>
					</ul>
					</div>
				</div>
			</header>

		<!-- Main -->
			<div id="main">

				
				<!-- Three -->
				<a href="index.php" name="contacto" style="visibility:hidden"; ">Inicio</a>
					 <section id="three">
					 
						<h2>Conferencia: LA DOMOTICA, usos y aplicaciones cotidianas</h2>
						<p>Confirma tu asistencia!</p>
						<div class="row">
							<div class="8u 12u$(small)">
								<form action="guardarConfirmacion.php" method="POST" enctype="multipart/form-data">
									<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)"><input type="text" name="name" id="name" placeholder="Nombre" required/></div>
										<div class="6u$ 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Email" required /></div>
										<div class="6u$ 12u$(xsmall)"><input type="text" name="city" id="city" placeholder="Telefono" required/></div>
										<ul class="actions">
										<li><input type="submit" name="guardar" value="Enviar mensaje" /></li>
										</ul>
									</div>
								</form>

							</div>
						</div>
					</section>

					

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>ecosmarhomes.ar@gmail.com</li><li><a>2974015550</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>