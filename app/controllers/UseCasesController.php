<?php
class UseCasesController extends DefaultController{
	public function initialize(){
		parent::initialize();
		$this->model="Usecase";
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
				
			$this->jquery->getOnClick("tr", "usecases/viewP","#content",array("attr"=>"data-ajax"));
				
			$this->jquery->compile($this->view);
				
			$this->view->pick("main/index");
	
		}else{
	
			$this->view->pick("main/frm_log");
	
		}
	
	}
	
	public function viewUCAction($id=NULL){
		$usecase=$this->getInstance($id);
		
		$this->view->setVars(array("usecase"=>$usecase,"siteUrl"=>$this->url->getBaseUri(),"baseHref"=>$this->dispatcher->getControllerName()));
		parent::viewPAction($id);
	
	}
}