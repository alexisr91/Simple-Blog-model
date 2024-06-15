<?php 

class User{

	private $db;

	public function __construct(){

		$this -> db = new Database;
	}


// insertion  des utilisateurs dans la bdd 

	public function register($data){
		// préparer la requête 

		$this -> db -> query("INSERT INTO users(username,email,password) VALUES(:username,:email,:password)");
		// bind 

		$this -> db -> bind(':username', $data['username']);
		$this -> db -> bind(':email', $data['email']);
		$this -> db -> bind(':password', $data['password']);
		// execution

		if($this -> db -> execute()){

			return true;
		}else{
			return false;
		}
	}

// vérification pseudo / password 

	public function login($username,$password){
		
		// requete préparée

		$this ->db -> query('SELECT * FROM users where username=:username');
		// bind 

		$this ->db ->bind(':username',$username);

		// execution 

		$row = $this -> db -> single();

		// Mdp crypté

		$hashed_password = $row -> password;

		if(password_verify($password,$hashed_password)){

			return $row;
		}else{

			return false;
		}
	}




// 
/** 
 *   Trouver l'utilisateur par le billet de son email 
 */

	public function findUserByEmail($email){
		
		// on prépare la requete

		$this -> db -> query("SELECT * FROM users WHERE  email = :email");

		// On relie les parametres de la requete avec les valeurs passées 

		$this -> db -> bind(':email', $email);

		// On va executer la requete
		// On stocke la ligne retournée
		$row = $this -> db ->single();

		// On compte le nombre de lignes pour cette email

		if($this-> db -> rowCount() > 0){
			return true;
		}else{
			return false;
		}
	}


/*Trouver l'utilisateur par le billet de son email */

	public function findUserByUsername($username){
		
		// on prépare la requete

		$this -> db -> query("SELECT * FROM users WHERE username = :username");

		// On relie les parametres de la requete avec les valeurs passées 

		$this -> db -> bind(':username', $username);

		// On va executer la requete
		// On stocke la ligne retournée
		$row = $this -> db ->single();

		// On compte le nombre de lignes pour cette email


		if($this-> db -> rowCount() > 0){ 

		// Donc si le nombre de ligne est supérieure à 0, ça met vrai sinon ça met faux
			return true;
		}else{
			return false;
		}
	}


	public function getUserById($id){
		$this ->db -> query('SELECT * FROM users WHERE id=:id');

		$this ->db -> bind(':id',$id);

		$row = $this -> db -> single();

		return $row;
	}
}

















