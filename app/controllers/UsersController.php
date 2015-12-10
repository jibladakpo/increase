<?php

use Ajax\bootstrap\html\html5\HtmlSelect;
class UsersController extends DefaultController{
	public function initialize(){
		parent::initialize();
		$this->model="User";
	}
	public function indexAction($message = NULL){
    	$msg="";
    	if(isset($message)){
    		if(is_string($message)){
    			$message=new DisplayedMessage($message);
    		}
    		$message->setTimerInterval($this->messageTimerInterval);
    		$msg=$this->_showDisplayedMessage($message);
    	}
    	
    	if(isset($this->session->auth)){
    	$objects=call_user_func($this->model."::find");
    	$this->view->setVars(array("objects"=>$objects,"siteUrl"=>$this->url->getBaseUri(),"baseHref"=>$this->dispatcher-> getControllerName(),"model"=>$this->model,"msg"=>$msg));
    	$this->tag->linkTo("view","view");
    	
    	$this->jquery->getOnClick(".update, .add","","#content",array("attr"=>"data-ajax"));
    	$this->jquery->getOnClick(".delete","","#message",array("attr"=>"data-ajax"));
    	
    	$this->jquery->getOnClick("tr", "users/Account","#content",array("attr"=>"data-ajax"));
    	
    	$this->jquery->compile($this->view);
    	
    	$this->view->pick("main/index");
    	
    	}else{
    			
    		$this->view->pick("main/frm_log");
    	
    	}

	}

	public function frmAction($id=NULL){
		if(isset($this->session->auth)){
		$user=$this->getInstance($id);
		$select=new HtmlSelect("role","Rôle","Sélectionnez un rôle...");
		$select->fromArray(array("admin","user","author"));
		$select->setValue($user->getRole());
		$select->compile($this->jquery,$this->view);
		$this->view->setVars(array("user"=>$user,"siteUrl"=>$this->url->getBaseUri(),"baseHref"=>$this->dispatcher->getControllerName()));
		parent::frmAction($id);
		
		}else{
			
			$this->view->pick("main/frm_log");
			 
		}
	}
	
	public function frmUpdateAction($id=NULL){
		if(isset($this->session->auth)){
			$user=$this->getInstance($id);
			$select=new HtmlSelect("role","Rôle","Sélectionnez un rôle...");
			$select->fromArray(array("admin","user","author"));
			$select->setValue($user->getRole());
			$select->compile($this->jquery,$this->view);
			$this->view->setVars(array("user"=>$user,"siteUrl"=>$this->url->getBaseUri(),"baseHref"=>$this->dispatcher->getControllerName()));
			parent::frmUpdateAction($id);
	
		}else{
				
			$this->view->pick("main/frm_log");
	
		}
	}
	
	protected function _deleteMessage($object){
		return "Confirmez-vous la suppression de l'utilisateur <b>".$object."</b> ?";
	}
	public function userAction($id){
		$id = $this->session->auth['id'];
		$user=User::findFirst($id);
		echo($user->getIdentite());
	}
	

	public function AccountAction($id=NULL){
		if(isset($this->session->auth)){
			$id = $this->session->auth['id'];
			$user=$this->getInstance($id);
			$this->view->setVars(array("user"=>$user,"siteUrl"=>$this->url->getBaseUri(),"baseHref"=>$this->dispatcher->getControllerName()));
			
	
		}else{
	
			$this->view->pick("main/frm_log");
	
		}
	
	}
}

