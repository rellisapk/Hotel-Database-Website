<?php

namespace App\Models;

use CodeIgniter\Model;

class BookviewModel extends Model
{
    protected $table = 'booking';

    public function getBookview($id_Booking = false)
    {
        if ($id_Booking === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_reservasi' => $id_Booking]);
        }
    }
}
