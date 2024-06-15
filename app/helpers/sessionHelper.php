
<?php 

function isLoggedIn(){ // vérifie si c'est connecté
				if(isset($_SESSION['user_id'])){

					return true;
					
				}else{

				return false;
				}
				redirect('users/login');
			}