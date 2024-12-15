<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'touriste'; // Nom de la table
    protected $primaryKey = 'touriste_id'; // Clé primaire
    protected $allowedFields = [
        'nom', 'prenom', 'email', 'sexe', 'telephone',
        'ville', 'pays', 'nationalite', 'preferences', 'password'
    ];
     
}

