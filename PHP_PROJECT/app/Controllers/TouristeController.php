<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TouristeModel;
use App\Models\UserModel;
class TouristeController extends Controller
{
    public function index()
    {
        return view('login/login');
    }

    

    public function store()
    {
        $touristeModel = new TouristeModel();

        // Récupérer les données du formulaire
        $data = [
            'nom'         => $this->request->getPost('nom'),
            'prenom'      => $this->request->getPost('prenom'),
            'email'       => $this->request->getPost('email'),
            'sexe'        => $this->request->getPost('sexe'),
            'telephone'   => $this->request->getPost('telephone'),
            'ville'       => $this->request->getPost('ville'),
            'pays'        => $this->request->getPost('pays'),
            'nationalite' => $this->request->getPost('nationalite'),
            'preferences' => $this->request->getPost('preferences'),
            'password'    => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Hash sécurisé
        ];

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);


        // Vérifier si l'utilisateur existe déjà
        $userExists = $touristeModel->where('email', $data['email'])->first();
        if ($userExists) {
            // Si l'utilisateur existe déjà
            return redirect()->back()->with('error', 'Cet email est déjà utilisé.');
        }

        // Insérer les données dans la base
        $touristeModel->insert($data);

        // Récupérer l'ID de l'utilisateur nouvellement inscrit
        $touriste_id = $touristeModel->getInsertID();

        // Démarrer une session et enregistrer l'ID de l'utilisateur
        session()->set('touriste_id', $touriste_id); // Stocker l'ID dans la session

        // Rediriger l'utilisateur vers la page de réservation
        return redirect()->to('/reservation')->with('success', 'Inscription réussie. Bienvenue!');
    }

    // public function submit()
    // {
    //     // Retrieve email and password from the form
    //     $email = $this->request->getPost('email');
    //     $password = $this->request->getPost('password');

    //     // Check if the user exists in the database
    //     $userModel = new UserModel();
    //     $user = $userModel->where('email', $email)->first();

    //     if ($user && password_verify($password, $user['password'])) {
    //         // Successful login, set session data and redirect to reservation page
    //         session()->set('user_id', $user['touriste_id']);
    //         return redirect()->to('/reservation');
    //     } else {
    //         // Invalid credentials, show an error message
    //         return redirect()->back()->with('error', 'Invalid email or password.');
    //     }
    // }
}
