<?php
class Users{
	
	public $objDb;
	public $objSe;
	public $result;
	public $rows;
	public $useropc;


	public function __construct(){
		
		$this->objDb = new Database();
		$this->objSe = new Sessions();
	}

	public function login_in(){

		$sth = $this->objDb->prepare('SELECT * FROM users U inner join profiles P on U.idProfile = P.idProfile WHERE U.loginUsers = :login AND U.passUsers = :pass');

		$sth->bindParam(':login',$_POST["usuario"]);  
		$sth->bindParam(':pass',$_POST["password"]);  

		$sth->execute();

		$result = $sth->fetchAll();

		if($result){

			$profile = $result[0]['nameProfile'];

			switch ($profile) {
				case 'Standard':
					$this->objSe->init();
					$this->objSe->set('idUser', $result[0]['idUsers']);
					$this->objSe->set('loginUsers', $result[0]['loginUsers']);
					$this->objSe->set('nameProfile', $result[0]['nameProfile']);
					$this->objSe->set('idProfile', $result[0]['idProfile']);
					//echo 'Ha ingresado como usuario standar';
					header('Location: views/Youtu/index.php');
					//echo '<a href="log_out.php">Cerrar</a>';
					break;
				
				case 'admin':
					$this->objSe->init();
					$this->objSe->set('idUser', $result[0]['idUsers']);
					$this->objSe->set('loginUsers', $result[0]['loginUsers']);
					$this->objSe->set('nameProfile', $result[0]['nameProfile']);
					$this->objSe->set('idProfile', $result[0]['idProfile']);
					//echo 'Ha ingresado como usuario administrador';
					header('Location: views/Admin/index.php');
					//echo '<a href="log_out.php">Cerrar</a>';
					break;

				case 'empresa':
					$this->objSe->init();
					$this->objSe->set('idUser', $result[0]['idUsers']);
					$this->objSe->set('loginUsers', $result[0]['loginUsers']);
					$this->objSe->set('nameProfile', $result[0]['nameProfile']);
					$this->objSe->set('idProfile', $result[0]['idProfile']);
					//echo 'Ha ingresado como usuario administrador';
					header('Location: views/Empre/index.php');
					//echo '<a href="log_out.php">Cerrar</a>';
					break;

			}

			echo 'Datos si encontrados';
		}else{
			header('Location: index.php?error=1');
		}
	}
}

?>