<?php
//require_once 'vendor/autoload.php';
namespace App\Controllers\Frontend;
use App\Controllers\controller;
class ProductDetails extends controller
{
	public function getIndex()
	{
		 $this->view('product-details');
	}

}
?>