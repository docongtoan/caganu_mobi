<?php
/**
* 
*/
include('../models/Product_model.php');
class Product_controller
{
	function index()
	{
		$m_product = new Product_model();
		$product = $m_product->getAllProduct();
	}
}
?>