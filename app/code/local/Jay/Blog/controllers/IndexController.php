<?php
class Jay_Blog_IndexController extends Mage_Core_Controller_Front_Action {
	/**
	 * Index action
	 */
	public function indexAction() {
		$this->loadLayout ();
		$this->renderLayout ();
	}
	
	public function viewAction() {
// 		var_dump ( Mage::app ()->getRequest ()->getParams () );
		$post = Mage::app ()->getRequest ()->getPost ();
// 		print_r($post);
		Mage::getModel('jay_blog/myposts')
			->load()->setTitle($post['title'])
			->load()->setPostCategory($post['category'])
			->load()->setPostContent($post['content'])
		->save();
		$this->_redirectReferer();
	}
}