<?php


//Conectamos a la base de datos
require 'class/database.php';

$objData = new Database();

$sth = $objData->prepare('SELECT * FROM users WHERE loginUsers = :login');

$sth->bindParam(':login',$_POST['nombreEmpre']);

$sth->execute();

$result = $sth->fetchAll();

if($result){
	echo "El usuario ya existe, por favor digite uno nuevo";
}else{

	//Generamos un código de activación 

	$string ="";
	$posible ="1234567890abcdefghijklmnopqrstuvwxyz_";
	$i=0;
	while($i<10){
		$char = substr($posible, mt_rand(0,strlen($posible)-1),1);
		$string .= $char;
		$i++;
	}

	//Insertamos los datos del usuario a dar de alta

	$sth = $objData->prepare('INSERT INTO youtubers VALUES (:idEmpre, :nombreEmpre , :emaiEmpre ,:apellidoContactEmpre, :nombreContactEmpre, :contrasenaEmpre, :telefonoEmpre, :rfcEmpre, :fechaRegistEmpre, :idProfile, :cadenaEmpre, :statusEmpre)');


	$id="";
	$profile=3;
	$status='Disabled';
	$sth->bindParam(':idEmpre',$id);
	$sth->bindParam(':nombreEmpre',$_POST['nombreEmpre']);
	$sth->bindParam(':emaiEmpre',$_POST['email']);
	$sth->bindParam(':apellidoContactEmpre',$_POST['apellido']);
	$sth->bindParam(':nombreContactEmpre',$_POST['nombreContacto']);
	$sth->bindParam(':contrasenaEmpre',$_POST['contrasena']);
	$sth->bindParam(':telefonoEmpre',$_POST['telefono']);
	$sth->bindParam(':rfcEmpre',$_POST['rfc']);
	$sth->bindParam(':idProfile',$profile);
	$sth->bindParam(':cadenaEmpre',$string);
	$sth->bindParam(':statusEmpre',$status);

	$sth->execute();


	$objDataDos = new Database();

	$state = $objDataDos->prepare('INSERT INTO users VALUES (:idUsers, :loginUsers , :passUsers ,:idProfile)');


	$id="";
	$profile=3;
	$state->bindParam(':idUsers',$id);
	$state->bindParam(':loginUsers',$_POST['nombreEmpre']);
	$state->bindParam(':passUsers',$_POST['contrasena']);
	$state->bindParam(':idProfile',$profile);

	$state->execute();

	header('location: index.php');
}

?>