<?php


namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller
{
    public function index()
    {
        // Load the login view
        return view('login/login');
    }

//     public function submite()
// {
//     // Get form data
//     $email = $this->request->getPost('email');
//     $password = $this->request->getPost('password');

//     // Validate the data (optional but recommended)
//     if (empty($email) || empty($password)) {
//         return redirect()->back()->with('error', 'Email and password are required.');
//     }

//     // Check user credentials
//     $userModel = new UserModel();
//     $user = $userModel->where('email', $email)->first();

//     if ($user && password_verify($password, $user['password'])) {
//         // Store session data
//         session()->set('user_id', $user['touriste_id']);
//         session()->set('email', $user['email']);

//         // Redirect to the reservation page
//         return redirect()->to('/reservation');
//     } else {
//         // Invalid credentials
//         return redirect()->back()->with('error', 'Invalid email or password.');
//     }
// }


//     public function logout()
//     {
//         // Destroy session and redirect to login
//         session()->destroy();
//         return redirect()->to('/login');
//     }
}
