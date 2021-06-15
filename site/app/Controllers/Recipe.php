<?php

namespace App\Controllers;
use App\Models\RecipeModel;

class Recipe extends BaseController
{
	public function __construct() 
	{
		session_start();
		helper(['form', 'url', 'html']);
	}
	
	// this is recipe page
	public function creatRecipe()
	{
		if($this->checkLogin())
		{
			$page = 'creatRecipe';

			$data['manu'] = $this->active_manu($page);
			$data['pageTitle'] = ucfirst("foodsmart inc - recipe | Creat Recipe");

            $db = \Config\Database::connect();
            $data['usrRecipes'] = $db->query("SELECT * FROM recipes WHERE userId = '$_SESSION[userId]'");

			echo view('templates/usrHeader', $data);
			echo view('pages/'.$page, $data);
			echo view('templates/footer', $data);
		}
		else
		{
			return $this->response->redirect(site_url('user/signout'));
		}
	}

	// this is user recipe save function
	// Fpr now Recipe is directly published
	// images upload was not added yet
	public function saveRecipe()
	{
		if($this->checkLogin())
		{
			$input = $this->validate([
				'racipeTitle' => 'required',
				'details' => 'required'
			]);

			$RecipeModel = new RecipeModel();

			if (!$input) 
			{
				$page = 'creatRecipe';

				$data['validation'] = $this->validator;
				$data['manu'] = $this->active_manu($page);
				$data['pageTitle'] = ucfirst("foodsmart inc - recipe | Creat Recipe");

				echo view('templates/usrHeader', $data);
				echo view('pages/'.$page, $data);
				echo view('templates/footer', $data);
			} 
			else 
			{
				if($RecipeModel->save([
					'userId' => $_SESSION['userId'],
					'recipeTitle' => $this->request->getVar('racipeTitle'),
					'recipeText' => $this->request->getVar('details'),
					'postDate' => date('Y-m-d H:m:i'),
					'status' => 'published'
				]))
				{
					return $this->response->redirect(site_url('recipe/index/'.$RecipeModel->insertID()));	
				}   		
			}
		}
		else
		{
			return $this->response->redirect(site_url('user/signout'));
		}
	}

	// individual recipe page and user can set ration 
	public function index()
	{
		$db = \Config\Database::connect();
		$uri = current_url(true);
		$recpid = $uri->getSegment(4);
		$data['rating'] = 0;

		$data['recipes'] = $db->query("SELECT * FROM recipes WHERE id = '$recpid'")->getRow();
		$ratingData = $db->query("SELECT COUNT(id) AS totalRating, SUM(star) AS totalStar FROM rating WHERE recipeId = '$recpid'")->getRow();
		
		if($ratingData->totalStar > 0)
		{
			$data['rating'] = $ratingData->totalStar / $ratingData->totalRating;
		}

		$page = 'detailsReceipe';

		$data['manu'] = $this->active_manu($page);
		$data['pageTitle'] = ucfirst("foodsmart inc - recipe | Recipe");
		if($this->checkLogin())
		{
			echo view('templates/usrHeader', $data);
		}
		else{
			echo view('templates/header', $data);
		}
		echo view('pages/'.$page, $data);
		echo view('templates/footer', $data);
	}

	// have to do
	//secend time ration for same user and racipe will update previous data
	public function setRating()
	{
		$db = \Config\Database::connect();
		$builder = $db->table('rating');
		$uri = current_url(true);
		$recpid = $uri->getSegment(4);
		$usrid = $uri->getSegment(5);
		$rate = $uri->getSegment(6);

		$oldRating = $db->query("SELECT * FROM rating WHERE userId  = '$usrid' AND recipeId = '$recpid'");

		if($oldRating->getNumRows() < 1)
		{
			$data = [
				'userId' => $usrid,
				'recipeId' => $recpid,
				'star' => $rate,
				'rateDate' => date('Y-m-d H:m:s')
			];

			$builder->insert($data);
		}
	}
}
