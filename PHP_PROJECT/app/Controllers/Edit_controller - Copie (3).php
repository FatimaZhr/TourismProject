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
        $touristeId = $this->request->getGet('id');
        $model = new TouristeModel();
        $touriste = $model->find($touristeId);
        return view('login/edit_touriste', ['touriste' => $touriste]);
    }


    public function update_touriste()
    {
        $touristeModel = new \App\Models\TouristeModel();
         $data = [
            'nom'       => $this->request->getPost('first_name'),
            'prenom'    => $this->request->getPost('last_name'),
            'telephone' => $this->request->getPost('phone'),
            'sexe'      => $this->request->getPost('gender'),
            'ville'     => $this->request->getPost('city'),
            'pays'      => $this->request->getPost('pays'),
            'email'     => $this->request->getPost('your_email'),
        ];

        $touriste_id = $this->request->getPost('touriste_id');
        $touristeModel->update($touriste_id, $data);
        return redirect()->to(base_url('touriste'));
    }


}


