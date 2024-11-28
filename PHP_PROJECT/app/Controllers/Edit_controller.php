<?php

namespace App\Controllers;

use App\Models\TouristeModel;
use App\Models\GuideModel;
use App\Models\EvenementModel;
use App\Models\ReservationsModel;

class Edit_controller extends BaseController
{
    public function view_Edit_touriste()
    {
        return view('login/edit_touriste');
    }

    public function view_Edit_guide()
    {
        return view('login/edit_guide');
    }

    public function view_Edit_event()
    {
        return view('login/edit_event');
    }

    public function view_Edit_reservation()
    {
        return view('login/edit_reservation');
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

    public function view_guide()
    {
        $guideId = $this->request->getGet('id');
        $model = new GuideModel();
        $guide = $model->find($guideId);
        return view('login/edit_guide', ['guide' => $guide]);
    }

    public function update_guide()
    {
        $guideModel = new \App\Models\GuideModel();
        $data = [
            'nom'       => $this->request->getPost('full_name'),
            'telephone' => $this->request->getPost('phone'),
            'adresse'   => $this->request->getPost('adress'),
            'ville'     => $this->request->getPost('city'),
            'pays'      => $this->request->getPost('pays'),
            'email'     => $this->request->getPost('your_email'),
        ];

        $id_guide = $this->request->getPost('id_guide');
        $guideModel->update($id_guide, $data);
        return redirect()->to(base_url('guide'));
    }


    public function view_event()
{
    $eventId = $this->request->getGet('id'); // Récupère l'ID de l'événement
    $eventModel = new \App\Models\EvenementModel();
    $guideModel = new \App\Models\GuideModel();

    // Récupérer les données de l'événement
    $event = $eventModel->find($eventId);

    // Récupérer tous les guides disponibles
    $guides = $guideModel->findAll();

    // Passer les données de l'événement et les guides à la vue
    return view('login/edit_event', [
        'event' => $event,
        'guides' => $guides
    ]);
}


public function update_event()
{
    $EvenementModel = new \App\Models\EvenementModel();

    $data = [
        'nom'        => $this->request->getPost('name'),
        'date'       => $this->request->getPost('Date'),
        'lieu'       => $this->request->getPost('lieu'),
        'description'=> $this->request->getPost('Description'),
        'organisateur' => $this->request->getPost('organisateur'), // Récupérer la clé étrangère
        'capacite'   => $this->request->getPost('Capacite'),
        'status'     => $this->request->getPost('Status'),
    ];

    $id = $this->request->getPost('id');
    $EvenementModel->update($id, $data);

    return redirect()->to(base_url('event'));
}


public function view_reservation($id)
{
    $reservationModel = new \App\Models\ReservationsModel();
    $touristeModel = new \App\Models\TouristeModel(); // Assuming you have a model for tourists

    // Fetch the reservation by its ID
    $reservation = $reservationModel->find($id);

    if (!$reservation) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Reservation not found.');
    }

    // Fetch all tourists
    $touristes = $touristeModel->findAll();

    // Pass the data to the view
    return view('login/edit_reservation', [
        'reservation' => $reservation,
        'touristes'   => $touristes
    ]);
}





public function update_reservation()
{
    $id = $this->request->getPost('id');
    if (!$id) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('ID de réservation manquant');
    }

    $ReservationsModel = new \App\Models\ReservationsModel();

    // Données récupérées depuis le formulaire
    $data = [
        'titre_reservation' => $this->request->getPost('name_rese'),
        'touriste_id'       => $this->request->getPost('touriste_id'),
        'date_reservation'  => $this->request->getPost('date_reservation'),
        'nombre_personnes'  => $this->request->getPost('nombre_personnes'),
        'prix_total'        => $this->request->getPost('prix_total'),
        'statut'            => $this->request->getPost('statut'),
        'attraction_id'     => $this->request->getPost('attraction_id'),
    ];

    // Mettez à jour les données dans la base de données
    $ReservationsModel->update($id, $data);

    // Redirigez après la mise à jour
    return redirect()->to(base_url('reservations'))->with('success', 'Réservation mise à jour avec succès');
}







}
