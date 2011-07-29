<?php
Class IndexController extends  Zend_Controller_Action 
{	
	public function indexAction() {
		
		$this->view->toto = '123';
		// ou $this->view->assign('toto','123');
		
	}
	
	
	public function affichAction () {
		
		$this->view->essai ='yuyuiyiuyui';
		
	}
}