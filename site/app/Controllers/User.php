<?php

namespace App\Controllers;
use App\Models\UserModel;

class User extends BaseController
{
	public function __construct() 
	{
		session_start();
		helper(['form', 'url', 'html']);
	}

	public function signin()
	{
		$page = 'signin';
        $data['msg']
        ;
		if (!is_file(APPPATH.'/Views/pages/'.$page.'.php'))
		{
			//we don't have a page for that!
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}

        $uri = current_url(true);
        if($uri->getSegment(4) == 'wrong')
        {
            $data['msg'] = "Wrong username or password";
        }

		$data['manu'] = $this->active_manu($page);
		$data['pageTitle'] = ucfirst("foodsmart inc - recipe | Sign-in");

		echo view('templates/header', $data);
    	echo view('pages/'.$page, $data);
    	echo view('templates/footer', $data);
	}

	// new user registration is done
	public function signActive()
	{
		$input = $this->validate([
			'username' => 'required|min_length[5]|max_length[15]',
			'password' => 'required|min_length[6]|max_length[35]'
        ]);

		if (!$input) 
		{
			$page = 'signin';

            $data['validation'] = $this->validator;
			$data['manu'] = $this->active_manu($page);
			$data['pageTitle'] = ucfirst("foodsmart inc - recipe | Signup");

			echo view('templates/header', $data);
			echo view('pages/'.$page, $data);
			echo view('templates/footer', $data);
        } 
		else 
		{
			$db = \Config\Database::connect();
			$usrName = $this->request->getVar('username');
			$userData = $db->query("SELECT * FROM users WHERE usrName = '$usrName'");
            
			if($userData->getNumRows() > 0)
			{
				$userData = $userData->getRow();
				$reqPass = $this->request->getVar('password');
				$dbPass = $userData->usrPass;

				if(password_verify($reqPass, $dbPass))
				{
					$_SESSION['userId'] = $userData->id;
					$_SESSION['fulName'] =  $userData->fulName;
					$_SESSION['usrName'] = $userData->usrName;

					return $this->response->redirect(site_url('recipe/creatRecipe'));	
				}
			}
			return $this->response->redirect(site_url('user/signin/wrong'));
		}
	}

	// this is user registration page
	public function signup()
	{
		$page = 'signup';

		if (!is_file(APPPATH.'/Views/pages/'.$page.'.php'))
		{
			//we don't have a page for that!
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}

		$data['manu'] = $this->active_manu($page);
		$data['pageTitle'] = ucfirst("foodsmart inc - recipe | Signup");

		echo view('templates/header', $data);
    	echo view('pages/'.$page, $data);
    	echo view('templates/footer', $data);
	}

	// this is user registration function
	// emale verification is not done
	public function registered()
	{
		$input = $this->validate([
            'fulName' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'dob' => 'required|valid_date',
			'usrName' => 'required|min_length[5]|max_length[15]|is_unique[users.usrName]',
			'password' => 'required|min_length[6]|max_length[35]',
			're_password' => 'required|matches[password]|matches[password]'
        ]);

		$UserModel = new UserModel();

		if (!$input) 
		{
			$page = 'signup';

            $data['validation'] = $this->validator;
			$data['manu'] = $this->active_manu($page);
			$data['pageTitle'] = ucfirst("foodsmart inc - recipe | Signup");

			echo view('templates/header', $data);
			echo view('pages/'.$page, $data);
			echo view('templates/footer', $data);

        }
		else
		{
            if($UserModel->save([
                'fulName' => $this->request->getVar('fulName'),
                'email' => $this->request->getVar('email'),
                'dob' => $this->request->getVar('dob'),
				'usrName' => $this->request->getVar('usrName'),
				'usrPass' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
				'regDate' => date('Y-m-d H:m:i'),
				'userStatus' => 'active'
            ]))
			{
				$_SESSION['userId'] = $UserModel->insertID();
				$_SESSION['fulName'] =  $this->request->getVar('fulName');
				$_SESSION['usrName'] = $this->request->getVar('usrName');
			}   
			
			return $this->response->redirect(site_url('recipe/creatRecipe'));			
		}    
	}

	public function signout()
	{
		session_destroy();
		return $this->response->redirect(site_url('user/signin'));	
	}

}
