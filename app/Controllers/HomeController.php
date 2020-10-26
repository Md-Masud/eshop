<?php
//require_once 'vendor/autoload.php';
namespace App\Controllers;
class HomeController extends controller
{
	public function getIndex()
	{
		 $this->view('home');
	}

}
?>