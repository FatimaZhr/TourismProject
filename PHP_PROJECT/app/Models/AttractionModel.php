<?php

namespace App\Models;

use CodeIgniter\Model;

class AttractionModel extends Model
{
    protected $table = 'attractions'; // Nom de la table
    protected $primaryKey = 'id'; // Clé primaire
    protected $allowedFields = [
        'nom', 
        'localisation',
        'horaires',
        'tarifs',
    ]; // Colonnes modifiables

    // Activez les timestamps si nécessaire
    protected $useTimestamps = false;
}
