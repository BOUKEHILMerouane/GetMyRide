<!doctype html>
<html lang="es">
<head>
	<title>Eleccion</title>
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
			<div class="contact100-form-title" style="background-image: url(images/uno.jpg);">
				<span class="contact100-form-title-1">
					ELIJA UNA OPCIÓN
				</span>
			</div>

						<form class="contact100-form validate-form" action="formulario.php">

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
    
    	
  $ubicacion =$_GET['ubicacion'];
  $ida =$_GET['ida'];
  $hora = $_GET['ho'];
  $regreso =$_GET['regresoa'];
  $ho =$_GET['hora']; 
   
  

 $nubic="Select n_lugar from lugar where id_lugar=$ubicacion;";
 $cons = pg_Exec($conn, $nubic);
 $p1="Select p_preciocoche from tipo_de_coche where t_coche=1;";
 $cons1 = pg_Exec($conn, $p1);
 $p2="Select p_preciocoche from tipo_de_coche where t_coche=2;";
 $cons2 = pg_Exec($conn, $p2);
$p3="Select p_preciocoche from tipo_de_coche where t_coche=3;";
 $cons3 = pg_Exec($conn, $p3);

if(!$cons){
      echo "Error al consultar<br>\n";
      echo "<input type=\"button\" name=\"b_regresar\" value=\"Regresar\" onClick=\"window.location='inicio.php'\">\n";
      exit;
    }
  $numrows = pg_numrows($cons);
  $row = pg_fetch_array($cons, 0,PGSQL_NUM);
  $nub=$row[0];
  $numrows1 = pg_numrows($cons1);
  $row1 = pg_fetch_array($cons1, 0,PGSQL_NUM);
  $pp1=$row1[0]; 
  $numrows3 = pg_numrows($cons2);
  $row2 = pg_fetch_array($cons2, 0,PGSQL_NUM);
  $pp2=$row2[0];
 $numrows3 = pg_numrows($cons3);
  $row3 = pg_fetch_array($cons3, 0,PGSQL_NUM);
  $pp3=$row3[0];

  $ubicacion1 ="$ubicacion";
  $ida1 ="$ida";
  $hora1 = "$hora";
  $regreso1 ="$regreso";
  $ho1 ="$ho"; 
  $nub1="$nub";


    SESSION_START();
$_SESSION['ubicacion']="$ubicacion1";
$_SESSION['nub']="$nub1";
$_SESSION['ida']="$ida1";
$_SESSION['hora']="$hora1";
$_SESSION['regreso']="$regreso1";
$_SESSION['ho']="$ho1";

  ?>
<table>
  <tr><td>Informacion de la reserva </td><tr>
   <tr><td>Ubicacion:<?PHP echo $nub ?></td><tr>
   <tr><td>Dia de recogida:<?PHP echo $ida?></td><tr>
    <tr><td>Hora de recogida:<?PHP echo $hora ?></td><tr>
    <tr><td>Dia de regreso:<?PHP echo $regreso?></td><tr>
    <tr><td>Hora de regreso:<?PHP echo $ho?></td> <tr> 
</table>

                
                
				<div class="wrap-input100 validate-input" >
					<input type="radio" id="1" name="coche" value="1"
         checked>
                    <label for="coche">
    <span class="label-input100">
  Pickup Mediana</label></span>
<img src="images/carro10.png">
   <table>
  <tr>
    <td colspan="3">Chevrolet Hilux o similar</td>
    <td>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $ <?PHP echo $pp1 ?></td> 
  </tr>
  <tr>
    <td><img src="images/puerta.png"    width="30" height="30"></td>
    <td>4 puertas</td>
    <td><img src="images/asientos.png"    width="25" height="25"></td>
    <td>5 asientos</td>
  </tr>
    <tr>
    <td><img src="images/manual.jpg"    width="30" height="30"></td>
    <td>Automatico</td>
    <td><img src="images/ac.png"    width="25" height="25"></td>
    <td>A/C</td>
    </tr>   
</table>
                    
    
				</div>   
                
                
                
                <div class="wrap-input100 validate-input" >
					<input type="radio" id="2" name="coche" value="2"
         checked>
                    <label for="coche">
    <span class="label-input100">
  SUV intermedia</label></span>
<img src="images/carro2.png">
    <table>
  <tr>
    <td colspan="3"> Toyota Rav4 o similar</td>
    <td>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; $ <?PHP echo $pp2 ?></td> 
  </tr>
  <tr>
    <td><img src="images/puerta.png"    width="30" height="30"></td>
    <td>4 puertas</td>
    <td><img src="images/asientos.png"    width="25" height="25"></td>
    <td>5 asientos</td>
  </tr>
    <tr>
    <td><img src="images/manual.jpg"    width="30" height="30"></td>
    <td>Automatico</td>
    <td><img src="images/ac.png"    width="25" height="25"></td>
    <td>A/C</td>
    </tr> </table>           
				</div>   
                
                
                
                
                <div class="wrap-input100 validate-input" >
					<input type="radio" id="3" name="coche" value="3"
         checked>
                    <label for="coche">
    <span class="label-input100">
   SUV Completa</label></span>
<img src="images/carro3.png">               
<table>
  <tr>
    <td colspan="3"> Chevrolet suburban o similiar  </td>
    <td>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; $ <?PHP echo $pp3 ?></td> 
  </tr>
  <tr>
    <td><img src="images/puerta.png"    width="30" height="30"></td>
    <td>4 puertas</td>
    <td><img src="images/asientos.png"    width="25" height="25"></td>
    <td>8 asientos</td>
  </tr>
    <tr>
    <td><img src="images/manual.jpg"    width="30" height="30"></td>
    <td>Automatico</td>
    <td><img src="images/ac.png"    width="25" height="25"></td>
    <td>A/C</td>
    </tr> </table>  
				</div>   
                
                
                
                
                
                
  
                
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Pagar ahora
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
