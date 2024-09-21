<html lang="es">
<head>
	<title>Confirmación</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/logo.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bg.css">
</head>
<body>


	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(images/logop.jpg);">
				<span class="contact100-form-title-1">
					   SU RESERVACIÓN:
				</span>
			</div>

						<form class="contact100-form validate-form" action="inicio.php">
<?PHP
error_reporting(E_ALL);
ini_set('display_errors','On');


$user ="";
$password="";
$host="localhost";
$port="5432";
$dbname="";
$strconn="host=$host port=$port dbname=$dbname user=$user password=$password";
$conn=pg_Connect($strconn);

if(!$conn)
  { echo "no se conecto a la base\n";
    exit;
  }
else

$reserva=$_GET['reserva'];   
$q_consultar="Select f_recoger,h_recoger,f_regreso,h_regreso,id_cliente, t_coche,id_lugar from reservas where id_reserva=$reserva;";
$r_consultar = pg_Exec($conn, $q_consultar);
$numrows = pg_numrows($r_consultar);
$row = pg_fetch_array($r_consultar, 0,PGSQL_NUM);
 $fr=$row[0];
$hr=$row[1];
$fre=$row[2];
$hre=$row[3];
$idc=$row[4];
$tc=$row[5];
$idl=$row[6];

$q1_consultar="Select n_cliente,a_cliente, cor_cliente, tel_cliente from cliente where id_cliente=$idc;";
$r1_consultar = pg_Exec($conn, $q1_consultar);
$numrows = pg_numrows($r1_consultar);
$row1 = pg_fetch_array($r1_consultar, 0,PGSQL_NUM);
$n=$row1[0];
$a=$row1[1];
$c=$row1[2];
$t=$row1[3];

$q2_consultar="Select t_descripcion,p_preciocoche from tipo_de_coche where t_coche=$tc";
$r2_consultar = pg_Exec($conn, $q2_consultar);
$numrows = pg_numrows($r2_consultar);
$row2 = pg_fetch_array($r2_consultar, 0,PGSQL_NUM);
$des=$row2[0];
$p=$row2[1];



$q3_consultar="Select n_lugar from lugar where id_lugar=$idl";
$r3_consultar = pg_Exec($conn, $q3_consultar);
$numrows = pg_numrows($r3_consultar);
$row3 = pg_fetch_array($r3_consultar, 0,PGSQL_NUM);
$l=$row3[0];





?>


                
                
                
				<div class="wrap-input100 validate-input" >
					
                    <label for="coche">
    <span class="label-input100">
  Número de reserva: <?PHP echo $reserva; ?></label></span>
 
				</div>   
                
            <table>
  <tr><td>Informacion de la reserva </td><tr>
   <tr><td>Ubicacion:<?PHP echo $l; ?></td><tr>
<tr><td>Dia de recogida:<?PHP echo $fr; ?></td><tr>
    <tr><td>Hora de recogida:<?PHP echo $hr; ?></td><tr>
    <tr><td>Dia de regreso: <?PHP echo $fre; ?></td><tr>
    <tr><td>Hora de regreso:<?PHP echo $hre; ?></td> <tr> 
    <tr><td>tipo de coche:  <?PHP echo $des ?></td> <tr>
  <tr><td>Precio de coche: <?PHP echo $p; ?> </td> <tr> 
   <tr><td>id cliente: <?PHP echo $idc; ?>  </td> <tr> 
  <tr><td>Nombre: <?PHP echo $n; ?> </td> <tr>
  <tr><td>Apellido:  <?PHP echo $a; ?></td> <tr>  
  <tr><td>email:  <?PHP echo $c; ?></td> <tr>
  <tr><td>tel: <?PHP echo $t; ?></td> <tr>  
</table>
</table>

                
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Inicio
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
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
