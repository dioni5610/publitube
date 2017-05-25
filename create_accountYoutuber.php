<?php

//Conectamos a la base de datos
require 'class/database.php';

$objData = new Database();

$sth = $objData->prepare('SELECT * FROM users WHERE loginUsers = :login');

$sth->bindParam(':login',$_POST['nombreUsuarioRegYou']);

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

	$sth = $objData->prepare('INSERT INTO youtubers VALUES (:idYou, :idProfile , :cadenaYou ,:nombreYou, :passwordYou, :nombreCanalYou, :categoriaYou, :subsYou, :correoYou, :telefonoYou, :statusYou)');


	$id="";
	$profile=2;
	$status='Disabled';
	$sth->bindParam(':idYou',$id);
	$sth->bindParam(':idProfile',$profile);
	$sth->bindParam(':cadenaYou',$string);
	$sth->bindParam(':nombreYou',$_POST['nombreUsuarioRegYou']);
	$sth->bindParam(':passwordYou',$_POST['passwordRegYou']);
	$sth->bindParam(':nombreCanalYou',$_POST['nombrecanalRegYou']);
	$sth->bindParam(':categoriaYou',$_POST['categoriaRegYou']);
	$sth->bindParam(':subsYou',$_POST['suscriptoresRegYou']);
	$sth->bindParam(':correoYou',$_POST['correoRegYou']);
	$sth->bindParam(':telefonoYou',$_POST['telefonoRegYou']);
	$sth->bindParam(':statusYou',$status);

	$sth->execute();


	$objDataDos = new Database();

	$state = $objDataDos->prepare('INSERT INTO users VALUES (:idUsers, :loginUsers , :passUsers ,:idProfile)');


	$id="";
	$profile=2;
	$state->bindParam(':idUsers',$id);
	$state->bindParam(':loginUsers',$_POST['nombreUsuarioRegYou']);
	$state->bindParam(':passUsers',$_POST['passwordRegYou']);
	$state->bindParam(':idProfile',$profile);
	
	$state->execute();

	header('location: index.php');
}

?>