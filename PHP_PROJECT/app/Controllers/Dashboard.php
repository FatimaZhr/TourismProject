<?php
namespace App\Controllers;
use App\Models\GuideModel;
use App\Models\ReservationModel;
use App\Models\TouristeModel;
use App\Models\EvenementModel;
class Dashboard extends BaseController
{
    protected $guideModel;
    protected $touristeModel;
    protected $reservationModel;
    protected $eventModel;
    public function __construct()
    {
        $this->guideModel = new GuideModel();
        $this->touristeModel = new TouristeModel();
        $this->reservationModel = new ReservationModel();
        $this->eventModel = new EvenementModel();
    }
    public function index()
    {
        // Get the current date
        $date = date('Y-m-d');
        // Calculate totals
        $totalGuides = $this->guideModel->countAll();
        $totalTouristes = $this->touristeModel->countAll();
        $totalReservations = $this->reservationModel->countAll();
        $totalEvents = $this->eventModel->countAll();
        // Pass data to the view
        $data = [
            'currentDate' => $date,
            'totalGuides' => $totalGuides,
            'totalReservations' => $totalReservations,
            'totalTouristes' => $totalTouristes,
            'totalEvents' => $totalEvents,
        ];
        return view('dashboard/dashboard', $data); // Ensure the view path is correct
    }
}