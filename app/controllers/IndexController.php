<?php

class IndexController extends ControllerBase
{

    public function indexAction(){
    	if(isset($this->session->auth)){
    	$this->jquery->getOnClick("a.btn","","#content",array("attr"=>"data-ajax"));
    	$this->jquery->compile($this->view);
    	}else{
    		$this->view->pick("main/frm_log");
    	
    	}
    }
    
    public function frm_logAction(){
    
    	$this->view->pick("main/frm_log");
    
    }
    
    private function _registerSession($user)
    {
    	$this->session->set(
    			'auth',
    			array(
    					'id'   => $user->id,
    					'mail' => $user->mail
    			)
    			);
    }
    
    /**
     * This action authenticate and logs a user into the application
     */
    public function ConnectAction()
    {
    	if ($this->request->isPost()) {
    
    		// Get the data from the user
    		$email    = $this->request->getPost('mail');
    		$password = $this->request->getPost('password');
    
    		// Find the user in the database
    		$user = User::findFirst(
    				array(
    						"mail = :email: AND password = :password:",
    						'bind' => array(
    								'email'    => $email,
    								'password' => $password
    						)
    				)
    				);
    		if ($user != false) {
    
    			$this->_registerSession($user);
    			$this->flash->success('Welcome ' . $user->identite);
    			// Forward to the 'index' controller if the user is valid
    			return $this->dispatcher->forward(
    					array(
    							'controller' => 'Index',
    							'action'     => 'index'
    					)
    					);
    		}
    
    		$this->flash->error('Wrong email/password');
    	}
    
    	// Forward to the login form again
    	return $this->dispatcher->forward(
    			array(
    					'controller' => 'Index',
    					'action'     => 'frm_log'
    			)
    			);
    }
    
    public function disconnectAction()
    {
    	// Destroy the whole session
    	$this->session->destroy();
    	
    	// Forward to the login form again
    	return $this->dispatcher->forward(
    			array(
    					'controller' => 'Index',
    					'action'     => 'frm_log'
    			)
    			);
    }
    
    public function asAdminAction(){
    	// Find the user in the database
    	$_SESSION["user"]=User::findFirst("role='admin'");
    	
    	
    		return $this->dispatcher->forward(
    				array(
    						'controller' => 'Index',
    						'action'     => 'index'
    				)
    				);

    	
    }
    
    
    public function asAuthorAction(){
    	// Find the user in the database
    	$_SESSION["user"]=User::findFirst("role='author'");
    	 
    	 
    	return $this->dispatcher->forward(
    			array(
    					'controller' => 'Index',
    					'action'     => 'index'
    			)
    			);
    
    	 
    }
    public function asUserAction(){
    	 $_SESSION["auth"]=User::findFirst("role='user'");
    	 return $this->dispatcher->forward(
    	 		array(
    	 				'controller' => 'Index',
    	 				'action'     => 'index'
    	 		)
    	 		);
    }
    
    
}

