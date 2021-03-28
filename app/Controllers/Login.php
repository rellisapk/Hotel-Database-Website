<?php 
namespace App\Controllers;
use App\Models\AdminModel;

class Login extends BaseController
{
	public function index()
	{
        $data=[];
        helper(['form']);
        if($this->request->getMethod()== 'post'){
            $rules = [
                'email' => 'required|min_length[5]|max_length[50]|valid_email',
                'password' => 'required|min_length[5]|max_length[50]|validateUser[email,password]',
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'Email or Password Wrong'
                ]
            ];
            if (!$this->validate($rules, $errors)){
                $data['validation']= $this->validator;
            }
            else {
                $model = new AdminModel();

                $user = $model->where('email', $this->request->getVar('email'))
                 ->first();

                $this->setUserSession($user);
                return redirect()->to('dashboard');
            }
        }
        $data['title'] = 'Log In';
        return view('login', $data);
	}
    private function setUserSession($user){
        $data = [
            'email'=>$user['email'],
            'isLoggedIn'=>true,
        ];
        session()->set($data);
        return true;
    }
    public function register()
    {
        $data=[];
        helper(['form']);
        if($this->request->getMethod()== 'post'){
            $rules = [
                'name' => 'required|min_length[5]|max_length[50]',
                'email' => 'required|min_length[5]|max_length[100]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[5]|max_length[255]',
                'password_confirm' => 'matches[password]',
            ];

            if (!$this->validate($rules)){
                $data['validation'] = $this->validator;
            }
            else {
                $model = new AdminModel();

                $newData = [
                    'name' => $this->request->getVar('name'),
                    'email'=> $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Successful Registration');
                return redirect()->to('login');
            }
        }
        $data['title'] = 'Sign Up';
        return view('register', $data);
    }
    
    public function logout(){
        session()->destroy();
        return redirect()->to('login');
    }

}