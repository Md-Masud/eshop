<?php
//require_once 'vendor/autoload.php';
namespace App\Controllers\Frontend;
use App\Controllers\controller;
class HomeController extends controller
{
	public function getIndex()
	{
		 $this->view('home');
	}

}
?>