<!DOCTYPE html>
<html lang="es">
<head>
	<title>Formulario</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/contacto.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link href="etarjeta.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>


	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(images/uno.jpg);">
				<span class="contact100-form-title-1">
					Su información
				</span>

				<span class="contact100-form-title-2">
					
				</span>
			</div>

			<form class="contact100-form validate-form" action="confirmacion.php">


<?PHP

$user ="";
$password="";
$host="localhost";
$port="5432";
$dbname="";
$strconn="host=$host port=$port dbname=$dbname user=$user password=$password";
$conn=pg_Connect($strconn);


$coche =$_GET['coche'];
$coche1="$coche";

 $nubic="Select t_descripcion,p_preciocoche from tipo_de_coche where t_coche=$coche;";
 $cons = pg_Exec($conn, $nubic);
 $numrows = pg_numrows($cons);
  $row = pg_fetch_array($cons, 0,PGSQL_NUM);
	$desc=$row[0];  
	$p=$row[1];
  $desc1="$desc";
  $p1="$p";

SESSION_START();
$nub=$_SESSION['nub'];
$ida=$_SESSION['ida'];
$hora=$_SESSION['hora'];
$regreso=$_SESSION['regreso'];
$ho=$_SESSION['ho'];
$_SESSION['coche']="$coche1";
$_SESSION['desc']="$desc1";
$_SESSION['p1']="$p1";

?>
<table>
  <tr><td>Informacion de la reserva </td><tr>
   <tr><td>Ubicacion:<?PHP echo $nub=$_SESSION['nub'];?></td><tr>
<tr><td>Dia de recogida:<?PHP echo $ida=$_SESSION['ida'];?></td><tr>
    <tr><td>Hora de recogida:<?PHP echo $hora=$_SESSION['hora']; ?></td><tr>
    <tr><td>Dia de regreso: <?PHP echo $regreso=$_SESSION['regreso'];?></td><tr>
    <tr><td>Hora de regreso: <?PHP echo $ho=$_SESSION['ho']; ?></td> <tr> 
    <tr><td>tipo de coche:  <?PHP echo $desc?></td> <tr> 
    <tr><td>Precio de coche:  <?PHP echo $p?></td> <tr>  
</table>
</table>




 
				<div class="wrap-input100 validate-input" data-validate="Nombre necesario">
					<span class="label-input100">Nombre/s:</span>
					<input type="text" size="15" maxlength="30" value="" name="nombre">
					<span class="focus-input100"></span>
				</div>
                
    
				<div class="wrap-input100 validate-input" data-validate="Apellidos necesario">
					<span class="label-input100">Apellidos:</span>
					<input type="text" size="30" maxlength="30" value="" name="apellido">
					<span class="focus-input100"></span>
				</div>
                
                
                <div class="wrap-input100 validate-input" data-validate="Correo necesario">
					<span class="label-input100">Correo:</span>

<input type="email" id="email" name="email" size="30" required>
           
     <span class="focus-input100"></span>
				</div>
                
                
                
                <div class="wrap-input100 validate-input" data-validate="Telefono necesario">
					<span class="label-input100">Telefono:</span>
					<input type="tel" name="tel">
					<span class="focus-input100"></span>
				</div>
                
             <div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Aceptar
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>



	<div id="dropDownSelect1"></div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/map-custom.js"></script>
	<script src="js/main.js"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>
