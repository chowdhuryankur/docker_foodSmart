<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct() 
	{
		session_start();
		helper('html');
	}

	// Home page content are not daynamic
	// need to call all recepi from database
	public function index($page = 'home')
	{
		if (!is_file(APPPATH.'/Views/pages/'.$page.'.php'))
		{
			//we don't have a page for that!
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}

		$db = \Config\Database::connect();
		if($page == 'recipes')
		{
			$builder = $db->table('recipes');
			$data['recipes'] = $builder->get();
		}

		$data['pageTitle'] = ucfirst("foodsmart inc - recipe | ".$page);
		$data['manu'] = $this->active_manu($page);
		
		if($this->checkLogin())
		{
			echo view('templates/usrHeader', $data);
		}
		else
		{
			echo view('templates/header', $data);
		}
    	echo view('pages/'.$page, $data);
    	echo view('templates/footer', $data);
	}
	
}
