<?php

namespace App\Models;

use CodeIgniter\Model;

class TouristeModel extends Model
{
    protected $table = 'touriste'; // Nom de la table
    protected $primaryKey = 'touriste_id'; // Clé primaire
    protected $allowedFields = [
        'nom', 
        'prenom' ,
        'email', 
        'sex',
        'telephone' ,
        'ville',
        'pays',
        'adresse',
        'nationalite',
        'preferences',
    ]; // Colonnes modifiables

    // Activez les timestamps si nécessaire
    protected $useTimestamps = false;

    public function countAll()
    {
        return $this->countAllResults();
    }

    // Method to get tourist guides added in the last 24 hours
    public function getTouristesLast24h()
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->where('created_at >=', date('Y-m-d H:i:s', strtotime('-24 hours')));
        return $builder->countAllResults();
    }

    public function getTouristes()
    {
        return $this->findAll();
    }


    public function getNewMembersCountLast24h()
    {

    }

    public function delete($id = null, bool $purge = false)
{
    // Suppression basée sur l'ID fourni
    if ($id !== null) {
        return $this->db->table('touriste')->delete(['touriste_id' => $id]);
    }

    return false; // Pas d'ID fourni, rien à supprimer
}
















}
