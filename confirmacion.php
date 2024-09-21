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
					¡GRACIAS POR SU PREFERENCIA!.
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
   


$n =$_GET['nombre'];
$a= $_GET['apellido'];
$c=$_GET['email'];
$t= $_GET['tel'];
$n1="$n";
$a1="$a";
$c1="$c";
$t1="$t";

SESSION_START();
$ubic=$_SESSION['ubicacion'];
$nub=$_SESSION['nub'];
$ida=$_SESSION['ida'];
$hora=$_SESSION['hora'];
$regreso=$_SESSION['regreso'];
$ho=$_SESSION['ho'];
$coche=$_SESSION['coche'];
$desc1=$_SESSION['desc'];
$p=$_SESSION['p1'];
$_SESSION['nombre']="$n1";
$_SESSION['apellido']="$a1";
$_SESSION['correo']="$c1";
$_SESSION['telefono']="$t1";
 
$q_insertar="INSERT INTO cliente(n_cliente, a_cliente, cor_cliente, tel_cliente)
               VALUES('$n1', '$a1', '$c1', $t1 );";
 $r_insertar = pg_Exec($conn, $q_insertar);

$q_consultar="Select id_cliente from cliente where a_cliente='$a1' and n_cliente='$n1'  and cor_cliente='$c1' and tel_cliente=$t1;";
 $r_consultar = pg_Exec($conn, $q_consultar);
$numrows = pg_numrows($r_consultar);
 $row = pg_fetch_array($r_consultar, 0,PGSQL_NUM);
 $id=$row[0];

$q1_insertar="INSERT INTO reservas(f_recoger, h_recoger, f_regreso, h_regreso,id_cliente,t_coche,id_lugar)
               VALUES('$ida', '$hora', '$regreso', '$ho','$id','$coche','$ubic');";
 $r1_insertar = pg_Exec($conn, $q1_insertar);

$q1_consultar="Select id_reserva from reservas where f_recoger='$ida' and h_recoger='$hora' and f_regreso='$regreso' and h_regreso='$ho' and id_cliente='$id' and t_coche='$coche' and id_lugar='$ubic' ;";
 $r1_consultar = pg_Exec($conn, $q1_consultar);
$numrows = pg_numrows($r1_consultar);
 $row = pg_fetch_array($r1_consultar, 0,PGSQL_NUM);
 $idr=$row[0];


?>
<table>
  <tr><td>Informacion de la reserva </td><tr>
   <tr><td>Ubicacion:<?PHP echo $nub=$_SESSION['nub'];?></td><tr>
<tr><td>Dia de recogida:<?PHP echo $ida=$_SESSION['ida'];?></td><tr>
    <tr><td>Hora de recogida:<?PHP echo $hora=$_SESSION['hora']; ?></td><tr>
    <tr><td>Dia de regreso: <?PHP echo $regreso=$_SESSION['regreso'];?></td><tr>
    <tr><td>Hora de regreso: <?PHP echo $ho=$_SESSION['ho']; ?></td> <tr> 
    <tr><td>tipo de coche:  <?PHP echo $desc1=$_SESSION['desc'] ?></td> <tr>
  <tr><td>Precio de coche:  <?PHP echo $p?></td> <tr> 
   <tr><td>id cliente:  <?PHP echo $id?></td> <tr> 
  <tr><td>Nombre:  <?PHP echo $n1?></td> <tr>
  <tr><td>Apellido:  <?PHP echo $a1?></td> <tr>  
  <tr><td>email:  <?PHP echo $c1?></td> <tr>
  <tr><td>tel:  <?PHP echo $t1?></td> <tr>  

</table>
</table>

                
                
                
				<div class="wrap-input100 validate-input" >
					
                    <label for="coche">
    <span class="label-input100">
  Número de reserva: </label></span>
  
    <!---aqui va el php del numero generado de reserva--------------> <?PHP echo $idr?>
				</div>   
                
            
                
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
