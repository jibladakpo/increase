<?php
class MessagesController extends DefaultController{
	public function initialize(){
		parent::initialize();
		$this->model="Message";
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


		$objects=call_user_func($this->model."::find");
		$this->view->setVars(array("objects"=>$objects,"siteUrl"=>$this->url->getBaseUri(),"baseHref"=>$this->dispatcher-> getControllerName(),"model"=>$this->model,"msg"=>$msg));
		$this->tag->linkTo("view","view");

		$this->jquery->getOnClick(".update, .add","","#content",array("attr"=>"data-ajax"));
		$this->jquery->getOnClick(".delete","","#message",array("attr"=>"data-ajax"));

		$this->jquery->getOnClick("tr", "messages/viewM","#content",array("attr"=>"data-ajax"));

		$this->jquery->compile($this->view);

		$this->view->pick("main/index");

	}

	public function frmAction($id=NULL){
		$message=$this->getInstance($id);

		$this->view->setVars(array("message"=>$message,"siteUrl"=>$this->url->getBaseUri(),"baseHref"=>$this->dispatcher->getControllerName()));
		parent::frmAction($id);
	}

	public function viewMAction($id=NULL){
		$message=$this->getInstance($id);

		$this->view->setVars(array("message"=>$message,"siteUrl"=>$this->url->getBaseUri(),"baseHref"=>$this->dispatcher->getControllerName()));
		parent::viewMAction($id);

	}

	protected function _deleteMessage($object){
		return "Confirmez-vous la suppression du message <b>".$object."</b> ?";
	}

}