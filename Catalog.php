<?php
class Catalog {

	private $productList = null;
	public $products = array();
	public $storage = array();


	public function __construct( $products, $storage ) {
		$this->products = $products;
		$this->storage = $storage;
	}

  public function mergeFunc() {
		$storage = [];
		foreach($this->storage as $item){
			$storage[$item['product_id']] = $item;
		}
		$merge = [];
		foreach($this->products as $product){
			if (!empty($storage[$product['id']])){
				$merge[] = array_merge($product, $storage[$product['id']]);
			} else{
				$merge[] = array_merge(
					[
						'count' => 0,
						'price' => null,
						'currency' => '.p'
					],
					$product
				);
			} 
	}
	return $merge;
}

public function universalFilter($products, $filters){
	foreach($products as $index => $product){
		$flag = true;
		foreach($filters as $key => $value){
			if (isset($product[$key]) && $product[$key] != $value){
				$flag = false;
				break;
			}
}
	if ($flag){
		unset($products[$index]);
	}
}
return array_values($products); // для избежания дырок, чтобы порядок эл-тов был корректный
}

}