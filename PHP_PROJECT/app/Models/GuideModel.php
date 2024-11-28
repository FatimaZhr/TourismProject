<?php
namespace App\Models;

use CodeIgniter\Model;

class GuideModel extends Model
{
    protected $table = 'GuideTouristique';  
    protected $primaryKey = 'id_guide';
    protected $allowedFields = ['nom', 'email', 'telephone', 'ville', 'specialite', 'experience'];



    public function getGuides()
    {
        return $this->findAll();
    }


    public function delete($id = null, bool $purge = false)
    {
       if ($id !== null) {
            return $this->db->table('GuideTouristique')->delete(['id_guide' => $id]);
        }
    
        return false; 
     
    }
















}
?>