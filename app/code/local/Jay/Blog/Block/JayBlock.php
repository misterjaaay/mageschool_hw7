<?php
class Jay_Blog_Block_JayBlock extends Mage_Core_Block_Template {
	public function getwelcome() {
		return 'This is ' . $this->getLayout ()->getBlock ( 'head' )->getTitle ();
	}
	public function getProducts($idname, $id1, $id2, $id3) {
		$collection = Mage::getModel ( 'catalog/product' )->getCollection ()->addAttributeToSelect ( 'entity_id', 'name', 'description', 'price' )->addAttributeToFilter ( $idname, array (
				array (
						'eq' => $id1 
				),
				array (
						'eq' => $id2 
				),
				array (
						'eq' => $id3 
				) 
		) );
		return $collection;
	}
// 	public function getPosts() {
// 		$blogpost = Mage::getModel ( 'jay_blog/myposts' )
// 			->getCollection ()
// 			->addAttributeToSelect ('myblogpost_id')
// 			->addAttributeToFilter ( ' myblogpost_id', array ('gteq' => 1) )
// 		->load ();
// 		return $blogpost;
// 	}
}

