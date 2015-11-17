<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
	/**
	 * This action authenticate and logs a user into the application
	 */
	public function connect()
	{
		if ($this->request->isPost()) {
	
			// Get the data from the user
			$email    = $this->request->getPost('email');
			$password = $this->request->getPost('password');
	
			// Find the user in the database
			$user = Users::findFirst(
					array(
							"(email = :email: OR username = :email:) AND password = :password:",
							'bind' => array(
									'email'    => $email,
									'password' => $password
							)
					)
					);
	
			if ($user != false) {
	
				$this->_registerSession($user);
	
				$this->flash->success('Welcome ' . $user->name);
	
				// Forward to the 'invoices' controller if the user is valid
				return $this->dispatcher->forward(
						array(
								'controller' => 'invoices',
								'action'     => 'index'
						)
						);
			}
	
			$this->flash->error('Wrong email/password');
		}
	
		// Forward to the login form again
		return $this->dispatcher->forward(
				array(
						'controller' => 'session',
						'action'     => 'index'
				)
				);
	}
	
}
