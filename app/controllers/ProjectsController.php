<?php

class ProjectsController extends DefaultController{
	public function initialize(){
		parent::initialize();
		$this->model="Projet";
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
		 
		$this->jquery->getOnClick("tr", "projects/viewP","#content",array("attr"=>"data-ajax"));
		 
		$this->jquery->compile($this->view);
		 
		$this->view->pick("main/index");
		
		}else{
		
			$this->view->pick("main/frm_log");
		
		}
		
	}
	public function frmAction($id=NULL){
		if(isset($this->session->auth)){
			
		$project=$this->getInstance($id);
		$this->view->setVars(array("project"=>$project,"siteUrl"=>$this->url->getBaseUri(),"baseHref"=>$this->dispatcher->getControllerName()));
		parent::frmAction($id);
		
		}else{
		
			$this->view->pick("main/frm_log");
		
		}
	}
	
	public function frmUpdateAction($id=NULL){
		if(isset($this->session->auth)){
				
			$project=$this->getInstance($id);
			$this->view->setVars(array("project"=>$project,"siteUrl"=>$this->url->getBaseUri(),"baseHref"=>$this->dispatcher->getControllerName()));
			parent::frmUpdateAction($id);
	
		}else{
	
			$this->view->pick("main/frm_log");
	
		}
	}
	protected function _deleteMessage($object){
		return "Confirmez-vous la suppression du projet <b>".$object."</b> ?";
	}
	public function viewPAction($id=NULL){
		$project=$this->getInstance($id);
		$devs= array();
		$taches= array();
		
		$usecases= $project->getUsecases();
		foreach ($usecases as $usecase){
			$devs[$usecase->getIdDev()]=$usecase->getUser();
		}
		foreach ($usecases as $usecase){
			$taches[$usecase->getCode()]=$usecase->getNom();
		}
		$tache= tache::find();
		$message= message::find();
		$this->view->setVars(array("project"=>$project,"devs"=>$devs,"message"=>$message,"tache"=>$tache,"usecases"=>$usecases,"user"=>$user,"siteUrl"=>$this->url->getBaseUri(),"baseHref"=>$this->dispatcher->getControllerName()));
		
		
	}
}

