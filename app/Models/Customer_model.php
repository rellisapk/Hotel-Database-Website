<?php

namespace App\Models;

use CodeIgniter\Model;

class Customer_model extends Model
{
    protected $table = 'customer';

    public function getCustomer($id_customer = false)
    {
        if ($id_customer === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_customer' => $id_customer]);
        }
    }

    public function saveCustomer($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateCustomer($data, $id_customer)
    {
        $query = $this->db->table($this->table)->update($data, array('id_customer' => $id_customer));
        return $query;
    }

    public function deleteCustomer($id_customer)
    {
        $query = $this->db->table($this->table)->delete(array('id_customer' => $id_customer));
        return $query;
    }
}
