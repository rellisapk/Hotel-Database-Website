<?php

namespace App\Models;

use CodeIgniter\Model;

class Booking_model extends Model
{
    protected $table = 'reservation';

    public function getBooking($id_Booking = false)
    {
        if ($id_Booking === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_reservasi' => $id_Booking]);
        }
    }

    public function saveBooking($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateBooking($data, $id_Booking)
    {
        $query = $this->db->table($this->table)->update($data, array('id_reservasi' => $id_Booking));
        return $query;
    }

    public function deleteBooking($id_Booking)
    {
        $query = $this->db->table($this->table)->delete(array('id_reservasi' => $id_Booking));
        return $query;
    }

    public function invoice($data, $id_Booking)
    {
    if($id_Booking == false){
        return $this->db->table('reservasi')
        ->select()
        ->join('customer', 'customer.id_customer = reservasi.id_customer')
        ->join('kamar', 'kamar.id_kamar = reservasi.id_kamar')
        ->get()
        ->getResult();
    }else{
        return $this->db->table('reservasi')
        ->join('customer', 'customer.id_customer = reservasi.id_customer')
        ->join('kamar', 'kamar.id_kamar = reservasi.id_kamar')
        ->getWhere(['reservasi.id_reservasi' => $id]);
    }
}
}