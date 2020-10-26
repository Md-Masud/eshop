<?php
namespace App\Controllers;
class controller
{
	public function view($view = 'index')
	{
     require_once __DIR__."/../../".$view.'.php';
	}
}
?>