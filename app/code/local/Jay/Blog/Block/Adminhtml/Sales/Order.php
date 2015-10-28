<?php
class Jay_Blog_Block_Adminhtml_Sales_Order extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'jay_blog_html';
        $this->_controller = 'adminhtml_index';
        $this->_headerText = Mage::helper('jay_blog')->__('Orders - Jay');
 
        parent::__construct();
        $this->_removeButton('add');
    }
}