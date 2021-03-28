<?php

namespace App\Models;

use CodeIgniter\Model;

class Employee_model extends Model
{
    protected $table = 'pegawai';

    public function getEmployee($id_employee = false)
    {
        if ($id_employee === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_pegawai' => $id_employee]);
        }
    }

    public function saveEmployee($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateEmployee($data, $id_employee)
    {
        $query = $this->db->table($this->table)->update($data, array('id_pegawai' => $id_employee));
        return $query;
    }

    public function deleteEmployee($id_employee)
    {
        $query = $this->db->table($this->table)->delete(array('id_pegawai' => $id_employee));
        return $query;
    }
}
