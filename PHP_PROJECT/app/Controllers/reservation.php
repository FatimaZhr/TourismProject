<?php

namespace App\Controllers;

use App\Models\ReservationModel;
use App\Models\AttractionModel;
use App\Models\EvenementModel;
use App\Models\GuideModel;

class Reservation extends BaseController
{
    public function index(): string
    {
        // Load the models
        $cityModel = new AttractionModel();
        $eventModel = new EvenementModel();
        $guideModel = new GuideModel();
        
        // Get data from the database
        $cities = $cityModel->findAll();  // Fetch all cities
        $events = $eventModel->findAll(); // Fetch all events
        $guides = $guideModel->findAll(); // Fetch all guides
       return view('home/reservation', compact('cities', 'events', 'guides'));
    }

    

    public function create()
    {
        // Retrieve form data
        $touriste_id = 1; // Assuming a logged-in user, replace with actual touriste_id
        $attraction_id = $this->request->getPost('attraction_id');
        $event_id = $this->request->getPost('event_id'); // Optional if events are needed
        $guide_id = $this->request->getPost('guide_id'); // Optional if guides are needed
        $date_reservation = $this->request->getPost('date_reservation');
        $nombre_personnes = $this->request->getPost('nombre_personnes');

        // Prepare data for insertion
        $data = [
            'touriste_id' => $touriste_id,
            'attraction_id' => $attraction_id,
            'date_reservation' => $date_reservation,
            'nombre_personnes' => $nombre_personnes,
        ];

        // Insert into the database
        $reservationModel = new ReservationModel();
        $reservationModel->insert($data);

        // Redirect or show confirmation
       
    return redirect()->to('/reservation')->with('message', 'Réservation créée avec succès !');
}

}




 