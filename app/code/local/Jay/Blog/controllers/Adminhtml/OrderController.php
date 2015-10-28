<?php
class Jay_Blog_Adminhtml_OrderController extends Mage_Core_Controller_Front_Action {
	/**
	 * Index action
	 */
	public function indexAction() {
		echo 'Adminhtml controller oralcem';
		$this->_title ( $this->__ ( 'Sales' ) )->_title ( $this->__ ( 'Orders Inchoo' ) );
		$this->loadLayout ();
		$this->_setActiveMenu ( 'sales/sales' );
		$this->_addContent ( $this->getLayout ()->createBlock ( 'jay_blog/adminhtml_sales_order' ) );
		$this->renderLayout ();
	}
	public function gridAction() {
		$this->loadLayout ();
		$this->getResponse ()->setBody ( $this->getLayout ()->createBlock ( 'jay_blog/adminhtml_sales_order_grid' )->toHtml () );
	}
}