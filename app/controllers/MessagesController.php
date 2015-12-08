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

		if(isset($this->session->auth)){
			
		$objects=call_user_func($this->model."::find");
		$this->view->setVars(array("objects"=>$objects,"siteUrl"=>$this->url->getBaseUri(),"baseHref"=>$this->dispatcher-> getControllerName(),"model"=>$this->model,"msg"=>$msg));
		$this->tag->linkTo("view","view");

		$this->jquery->getOnClick(".update, .add","","#content",array("attr"=>"data-ajax"));
		$this->jquery->getOnClick(".delete","","#message",array("attr"=>"data-ajax"));

		$this->jquery->getOnClick("tr", "messages/viewM","#content",array("attr"=>"data-ajax"));

		$this->jquery->compile($this->view);

		$this->view->pick("main/index");
		
		}else{
			 
			$this->view->pick("main/frm_log");
			 
		}

	}
	
	/**
	 * Retourne une instance de $model<br>
	 * si $id est nul, un nouvel objet est retourné<br>
	 * sinon l'objet retourné est celui chargé depuis la BDD à partir de l'id $id
	 * @param string $id
	 * @return multitype:$className
	 */
	public function getInstance($id=NULL){
		if(isset($id)){
			$object=call_user_func($this->model."::findfirst",$id);
		}else{
			$className=$this->model;
			$object=new $className();
		}
		return $object;
	}

	public function frmAction($id=NULL){
		if(isset($this->session->auth)){
			
		$idUser = $this->session->auth['id'];
		$user=User::findFirst($idUser);
		
		$projets = projet::find();
		$message=$this->getInstance($id);
		$this->view->setVars(array("message"=>$message,"projets"=>$projets,"user"=>$user,"siteUrl"=>$this->url->getBaseUri(),"baseHref"=>$this->dispatcher->getControllerName()));
		parent::frmAction($id);
		
		}else{
		
			$this->view->pick("main/frm_log");
		
		}
	}
	
	public function frmUpdateAction($id=NULL){
		if(isset($this->session->auth)){
				
			$idUser = $this->session->auth['id'];
			$user=User::findFirst($idUser);
	
			$projets = projet::find();
			$message=$this->getInstance($id);
			$this->view->setVars(array("message"=>$message,"projets"=>$projets,"user"=>$user,"siteUrl"=>$this->url->getBaseUri(),"baseHref"=>$this->dispatcher->getControllerName()));
			parent::frmUpdateAction($id);
	
		}else{
	
			$this->view->pick("main/frm_log");
	
		}
	}

	public function viewMAction($id=NULL){
		if(isset($this->session->auth)){
			
		$message=$this->getInstance($id);
		$this->view->setVars(array("message"=>$message,"siteUrl"=>$this->url->getBaseUri(),"baseHref"=>$this->dispatcher->getControllerName()));
		
		
		}else{
		
			$this->view->pick("main/frm_log");
		
		}

	}

	protected function _deleteMessage($object){
		return "Confirmez-vous la suppression du message <b>".$object."</b> ?";
	}

}