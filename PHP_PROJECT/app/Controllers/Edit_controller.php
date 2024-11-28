<?php


namespace App\Controllers;

use App\Models\TouristeModel;

class Edit_controller extends BaseController
{
    public function view_Edit_touriste()
    {
        return view('login\edit_touriste');
    }


    public function view_touriste()
    {
        $touristeId = $this->request->getGet('id'); // Récupère l'ID depuis l'URL

        if (!$touristeId) {
            return redirect()->to('/')->with('error', 'Aucun ID fourni');
        }

        $model = new TouristeModel();
        $touriste = $model->find($touristeId); // Cherche les données du touriste

        if (!$touriste) {
            return redirect()->to('/')->with('error', 'Touriste non trouvé');
        }

        return view('login/edit_touriste', ['touriste' => $touriste]);
    }


    public function update_touriste()
    {
        $model = new TouristeModel();
        $touristeId = $this->request->getPost('touriste_id');

        $data = [
            'nom' => $this->request->getPost('first_name'),
            'prenom' => $this->request->getPost('last_name'),
            'telephone' => $this->request->getPost('phone'),
            'sexe' => $this->request->getPost('gender'),
            'ville' => $this->request->getPost('city'),
            'pays' => $this->request->getPost('pays'),
            'email' => $this->request->getPost('your_email'),
        ];

        $model->update($touristeId, $data);

        return redirect()->to('/')->with('success', 'Touriste mis à jour avec succès');
    }
}


