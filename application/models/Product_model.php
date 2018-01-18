<?php
/**
* 
*/
include('../config/database.php');
class Product_model extends database
{
	function getAllProduct(){
		$sql ="SELECT * FROM `cx_product`";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
?>