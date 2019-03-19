<?php
class simpleLogin {

	protected $username = 'username'; 
	protected $password = 'password';

	public function loginAttempt($username, $password) {
		if( strtolower($username) == strtolower($this->username) && $password == $this->password){
			$this->loginUser();
		}else{
			$this->loginError();
		}
	}

 	//do stuff to login the user
	protected function loginUser() {
		echo 'logged in';
	}

	//display error message
	protected function loginError() {
		echo 'Username and password incorrect';
	}

}

?>
