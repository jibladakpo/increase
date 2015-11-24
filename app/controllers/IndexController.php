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
    
    
}

