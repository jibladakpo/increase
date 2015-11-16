<?php

use Ajax\bootstrap\html\html5\HtmlSelect;
class UsersController extends DefaultController{
	public function initialize(){
		parent::initialize();
		$this->model="User";
	}

	public function frmAction($id=NULL){
		$user=$this->getInstance($id);
		$select=new HtmlSelect("role","Rôle","Sélectionnez un rôle...");
		$select->fromArray(array("admin","user","author"));
		$select->setValue($user->getRole());
		$select->compile($this->jquery,$this->view);
		$this->view->setVars(array("user"=>$user,"siteUrl"=>$this->url->getBaseUri(),"baseHref"=>$this->dispatcher->getControllerName()));
		parent::frmAction($id);
	}
	
	protected function _deleteMessage($object){
		return "Confirmez-vous la suppression de l'utilisateur <b>".$object."</b> ?";
	}
}
