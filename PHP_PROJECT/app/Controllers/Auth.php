<?php
namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;
    protected $session;

    public function __construct()
    {
        $this->userModel = new UserModel();  // Initialize the UserModel
        $this->session = \Config\Services::session();  // Initialize session service
    }

    // Display the login form
    public function index()
    {
        return view('login/login');  // Load the login form view
    }

    // Handle login functionality
    public function login()
    {
        // Get form data from the POST request
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Fetch the user record from the database by email
        $user = $this->userModel->where('email', $email)->first();

        // Debugging: Check the user data retrieved
        log_message('debug', 'Fetched user: ' . print_r($user, true));

        // Check if the user exists and if the password matches the hash stored in the database
        if ($user && password_verify($password, $user['password'])) {
            // If valid, set session data
            $this->session->set('user_id', $user['touriste_id']);
            $this->session->set('user_name', $user['nom']);

            // Redirect to a protected page like the dashboard
            return redirect()->to('/dashboard');
        } else {
            // Invalid credentials, set an error message
            $this->session->setFlashdata('error', 'Invalid email or password');
            return redirect()->to('auth');  // Redirect back to the login page
        }
    }

    // Handle logout functionality
    public function logout()
    {
        $this->session->destroy();  // Destroy the session to log out
        return redirect()->to('auth');  // Redirect to the login page
    }
}
