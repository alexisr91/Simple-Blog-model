<?php 


class Pages extends Controller {
	public function __construct(){

	}

	public function index(){

		if(isLoggedIn()){
			redirect('posts');
		}

		
		$data = ['title' => 'Bienvenue sur mon mini Blog'];

		$this->view('pages/index',$data);
	}


	public function contact(){

		$data = ['title' => 'Contactez nous'];
		$this -> view('pages/contact',$data);
	}
}

