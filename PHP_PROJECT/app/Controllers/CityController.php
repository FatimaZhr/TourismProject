<?php 
namespace App\Controllers;

class CityController extends BaseController
{
    public function show($cityName)
    {
        // Fetch city data dynamically based on $cityName
        $cityModel = new \App\Models\AttractionModel();
        $city = $cityModel->where('nom', $cityName)->first();

        if (!$city) {
            // Handle case where city is not found
            return redirect()->to('/')->with('error', 'City not found');
        }

        // Pass city data to the view
        return view('city', ['city' => $city]);
    }
    
    
}

?>