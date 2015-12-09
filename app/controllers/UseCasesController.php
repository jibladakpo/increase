<?php

class UseCasesController extends DefaultController{
	public function initialize(){
		parent::initialize();
		$this->model="Usecase";
	}
	public function getInstance($id=NULL){
		if(isset($id)){
			$object=Usecase::findfirst("code='".$id."'");
		}else{
			$object=new Usecase();
		}
		return $object;
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
				
			$this->jquery->getOnClick("tr", "usecases/viewUC","#content",array("attr"=>"data-ajax"));
				
			$this->jquery->compile($this->view);
				
			$this->view->pick("main/index");
	
		}else{
	
			$this->view->pick("main/frm_log");
	
		}
	
	}
	
	public function viewUCAction($id=NULL){
		$usecase=$this->getInstance($id);
		
		$this->view->setVars(array("usecase"=>$usecase,"siteUrl"=>$this->url->getBaseUri(),"baseHref"=>$this->dispatcher->getControllerName()));
	
	
	}
	
	public function frmAction($id=NULL){
		if(isset($this->session->auth)){
			$usecase=$this->getInstance($id);
			$projet = projet::find();
			$user = user::find();
			$this->view->setVars(array("usecase"=>$usecase,"user"=>$user,"projet"=>$projet,"siteUrl"=>$this->url->getBaseUri(),"baseHref"=>$this->dispatcher->getControllerName()));
			parent::frmAction($id);
	
		}else{
	
			$this->view->pick("main/frm_log");
	
		}
	}
	
	protected function _deleteMessage($object){
		return "Confirmez-vous la suppression de la tâche <b>".$object."</b> ?";
	}
	
	public function frmUpdateAction($id=NULL){
		if(isset($this->session->auth)){
			$usecase=$this->getInstance($id);
			$projet = projet::find();
			$user = user::find();
			$this->view->setVars(array("usecase"=>$usecase,"user"=>$user,"projet"=>$projet,"siteUrl"=>$this->url->getBaseUri(),"baseHref"=>$this->dispatcher->getControllerName()));
			parent::frmUpdateAction($id);
	
		}else{
	
			$this->view->pick("main/frm_log");
	
		}
	}

}