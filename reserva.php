<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fechas</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/lupa.png"/>
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
			<div class="contept100-form-title" style="background-image: url(images/uno.jpg);">
				<span class="contact100-form-title-1">
					Reservar
				</span>

				<span class="contact100-form-title-2">
					Elegir las fechas
				</span>
			</div>

			<form class="contact100-form validate-form" action="carro.php">
                <?PHP

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

?>
Ubicacion en donde recogera y regresara el coche
				<div class="wrap-input100 validate-input" data-validate="Ubicacion necesaria">
					<span class="label-input100">Ubicacion:</span>
					<select name="ubicacion">
   <option value="0"></option> 
   <option value="1">Aeropuerto de los Angeles</option> 
   <option value="2">Aeropuerto de San Francisco</option> 
   <option value="3">Aeropuerto de Chicago</option>
   
</select>
					<span class="focus-input100"></span>
				</div>
                
    
				<div class="wrap-input100 validate-input" data-validate="Fecha necesaria">
					<span class="label-input100">Fecha de recogida:</span>
					<input type="date" id="ida" name="ida"
       value="2021-07-22"
       min="2021-11-25" max="2022-12-31">
					<span class="focus-input100"></span>
				</div>
                
           
      <div class="wrap-input100 validate-input" data-validate="hora necesaria">
					<span class="label-input100">Hora de recogida del auto:</span>
					<select name="ho">
                        <option value="100"></option> 
                       <option value="00:00">12:00 am</option> 
                       <option value="1:00">01:00 am</option>
                        <option value="2:00">02:00 am</option>
                        <option value="3:00">03:00 am</option>
                        <option value="4:00">04:00 am</option>
                        <option value="5:00">05:00 am</option>
                        <option value="6:00">06:00 am</option>
                        <option value="7:00">07:00 am</option>
                        <option value="8:00">08:00 am</option>
                        <option value="9:00">09:00 am</option>
                        <option value="10:00">10:00 am</option>
                        <option value="11:00">11:00 am</option>
                        <option value="12:00">12:00 pm</option>
                        <option value="13:00">01:00 pm</option>
                        <option value="14:00">02:00 pm</option>
                        <option value="15:00">03:00 pm</option>
                        <option value="16:00">04:00 pm</option>
                        <option value="17:00">05:00 pm</option>
                        <option value="18:00">06:00 pm</option>
                        <option value="19:00">07:00 pm</option>
                        <option value="20:00">08:00 pm</option>
                        <option value="21:00">09:00 pm</option>
                        <option value="22:00">10:00 pm</option>
                        <option value="23:00">11:00 pm</option>

                    </select>
					<span class="focus-input100"></span>
				</div>          
                              

				<div class="wrap-input100 validate-input" data-validate="Fecha necesaria">
					<span class="label-input100">Fecha de regreso:</span>
					<input type="date" id="regresoa" name="regresoa"
       value="2021-07-22"
       min="2021-11-25" max="2022-12-31">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate="hora necesaria">
					<span class="label-input100">Hora de regreso del auto:</span>
					<select name="hora">
                        <option value="100"></option> 
                       <option value="00:00">12:00 am</option> 
                       <option value="1:00">01:00 am</option>
                        <option value="2:00">02:00 am</option>
                        <option value="3:00">03:00 am</option>
                        <option value="4:00">04:00 am</option>
                        <option value="5:00">05:00 am</option>
                        <option value="6:00">06:00 am</option>
                        <option value="7:00">07:00 am</option>
                        <option value="8:00">08:00 am</option>
                        <option value="9:00">09:00 am</option>
                        <option value="10:00">10:00 am</option>
                        <option value="11:00">11:00 am</option>
                        <option value="12:00">12:00 pm</option>
                        <option value="13:00">01:00 pm</option>
                        <option value="14:00">02:00 pm</option>
                        <option value="15:00">03:00 pm</option>
                        <option value="16:00">04:00 pm</option>
                        <option value="17:00">05:00 pm</option>
                        <option value="18:00">06:00 pm</option>
                        <option value="19:00">07:00 pm</option>
                        <option value="20:00">08:00 pm</option>
                        <option value="21:00">09:00 pm</option>
                        <option value="22:00">10:00 pm</option>
                        <option value="23:00">11:00 pm</option>

                    </select>
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
