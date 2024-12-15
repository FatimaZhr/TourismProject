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
        // Check if the user is logged in via session
        $session = session();
        if (!$session->has('touriste_id')) {
            // Redirect to Sign-Up page if the user is not logged in
            return redirect()->to('/sign')->with('error', 'Veuillez créer un compte pour continuer.');
        }
    
        // Retrieve form data
        $touriste_id = $session->get('touriste_id'); // Get the logged-in user's ID
        $attraction_id = $this->request->getPost('attraction_id');
        $event_id = $this->request->getPost('event_id');
        $guide_id = $this->request->getPost('guide_id');
        $date_reservation = $this->request->getPost('date_reservation');
        $nombre_personnes = $this->request->getPost('nombre_personnes');
    
        // Check if the required fields are set
        if (empty($attraction_id) || empty($event_id) || empty($guide_id)) {
            return redirect()->back()->with('error', 'Veuillez sélectionner une attraction, un événement et un guide.');
        }
    
        // Prepare data for insertion
        $data = [
            'touriste_id' => $touriste_id,
            'attraction_id' => $attraction_id,
            'event_id' => $event_id,
            'guide_id' => $guide_id,
            'date_reservation' => $date_reservation,
            'nombre_personnes' => $nombre_personnes,
        ];
    
        // Insert into the database
        $reservationModel = new ReservationModel();
        $isInserted = $reservationModel->insert($data);
    
        if ($isInserted) {
            // Get the reservation ID
            $reservationID = $reservationModel->getInsertID();
    
            // Pass data to the confirmation view
            return view('home/confirmation', [
                'userName' => $session->get('nom') . ' ' . $session->get('prenom'), // User's name from session
                'destination' => $attraction_id, // Replace with actual dynamic data
                'departureDate' => $date_reservation,
                'reservationNumber' => $reservationID,
                'nombrePersonnes' => $nombre_personnes,
            ]);
        } else {
            // Redirect back with an error message
            return redirect()->back()->with('error', 'Échec de la réservation. Veuillez réessayer.');
        }
    }
    
 function checkUserExists($email)
{
    $db = \Config\Database::connect();
    $builder = $db->table('touriste');
    $query = $builder->getWhere(['email' => $email]);
    return $query->getRow();
}
}
