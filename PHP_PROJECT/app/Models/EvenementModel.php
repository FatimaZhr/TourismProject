<?php

namespace App\Models;

use CodeIgniter\Model;

class EvenementModel extends Model
{
    protected $table      = 'evenements'; // Table name
    protected $primaryKey = 'id'; // Primary key field

    // Allowed fields for mass assignment
    protected $allowedFields = [
        'nom',
        'date',
        'lieu',
        'organisateur',
        'capacite',
        'status',
        'attraction_id',
    ];

    // Validation rules for input data
    protected $validationRules = [
        'nom'          => 'required|max_length[30]',
        'date'         => 'required|valid_date',
        'lieu'         => 'required|max_length[30]',
        'organisateur' => 'required|max_length[30]',
        'capacite'     => 'required|integer',
        'status'       => 'required|in_list[upcoming,ongoing,completed]',
        'attraction_id'=> 'permit_empty|integer',
    ];

    // Validation messages for custom error messages
    protected $validationMessages = [
        'nom'          => [
            'required'    => 'Le nom de l\'événement est requis.',
            'max_length'  => 'Le nom ne peut pas dépasser 30 caractères.',
        ],
        'date'         => [
            'required'    => 'La date de l\'événement est requise.',
            'valid_date'  => 'Veuillez entrer une date valide.',
        ],
        'lieu'         => [
            'required'    => 'Le lieu de l\'événement est requis.',
            'max_length'  => 'Le lieu ne peut pas dépasser 30 caractères.',
        ],
        'organisateur' => [
            'required'    => 'L\'organisateur de l\'événement est requis.',
            'max_length'  => 'L\'organisateur ne peut pas dépasser 30 caractères.',
        ],
        'capacite'     => [
            'required'    => 'La capacité de l\'événement est requise.',
            'integer'     => 'La capacité doit être un nombre entier.',
        ],
        'status'       => [
            'required'    => 'Le statut de l\'événement est requis.',
            'in_list'     => 'Le statut doit être l\'un de : upcoming, ongoing, or completed.',
        ],
        'attraction_id'=> [
            'permit_empty'=> 'L\'ID de l\'attraction est optionnel.',
            'integer'     => 'L\'ID de l\'attraction doit être un entier.',
        ],
    ];

    // Optionally, you can enable soft deletes and timestamps
    protected $useTimestamps = true; // If your table has created_at and updated_at columns
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at'; // If soft deletes are enabled

    public function getEvenements()
    {
        return $this->findAll();
    }

    public function getLast24hCount()
    {
     
    }


    public function delete($id = null, bool $purge = false)
{
    // Suppression basée sur l'ID fourni
    if ($id !== null) {
        return $this->db->table('evenements')->delete(['id' => $id]);
    }

    return false; // Pas d'ID fourni, rien à supprimer
}    



}
