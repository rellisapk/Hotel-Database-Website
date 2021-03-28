<?php

namespace App\Models;

use CodeIgniter\Model;

class Room_model extends Model
{
    protected $table = 'kamar';

    public function getRoom($id_kamar = false)
    {
        if ($id_kamar === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_kamar' => $id_kamar]);
        }
    }

    public function saveRoom($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateRoom($data, $id_kamar)
    {
        $query = $this->db->table($this->table)->update($data, array('id_kamar' => $id_kamar));
        return $query;
    }

    public function deleteRoom($id_kamar)
    {
        $query = $this->db->table($this->table)->delete(array('id_kamar' => $id_kamar));
        return $query;
    }
}
