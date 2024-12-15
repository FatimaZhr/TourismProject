<?php
namespace App\Controllers;
use App\Models\TouristeModel;
class Edit_controller extends BaseController
{
    public function index()
    {
        return view('login\edit_touriste');
    }
    public function editForm($id)
{
    $model = new \App\Models\TouristeModel();
    $touriste = $model->find($id);
    if (!$touriste) {
        return redirect()->to('/error')->with('error', 'Touriste non trouvé.');
    }
    
    return view('login/edit_touriste', ['touriste' => $touriste]);
}
    public function updateTouriste()
    {
        $model = new TouristeModel();
        
        $id = $this->request->getPost('touriste_id');
        
        // Validation des données (vous pouvez ajuster les règles selon vos besoins)
        $validation = $this->validate([
            'first_name' => 'required|min_length[2]',
            'last_name'  => 'required|min_length[2]',
            'email'      => 'required|valid_email',
            'phone'      => 'required|numeric',
            'city'       => 'required',
            'pays'       => 'required'
        ]);
        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        // Préparer les données pour la mise à jour
        $data = [
    'nom' => $this->request->getPost('first_name'),
    'prenom' => $this->request->getPost('last_name'),
    'email' => $this->request->getPost('email'),
    'telephone' => $this->request->getPost('phone'),
    'ville' => $this->request->getPost('city'),
    'pays' => $this->request->getPost('pays'),
    'sexe' => $this->request->getPost('gender'),
    'updated_at' => date('Y-m-d H:i:s')  // Correct format for DATETIME or TIMESTAMP
];
       // Mise à jour dans la base de données
       $model->update($id, $data);
       return redirect()->to('/touristes')->with('success', 'Touriste mis à jour avec succès.');
   }
}