<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Employee_model;

class Employee extends Controller
{
    public function index()
    {
        $model = new Employee_model();
        $data['Employee'] = $model->getEmployee();
        $data['title'] = 'Employee Data';
        echo view('Admin/Employee/employee_view', $data);
    }

    public function add_new()
    {
        $data['title'] = 'Add New Employee';
        echo view('Admin/Employee/add_employee', $data);
    }

    public function save()
    {
        $model = new Employee_model();
        $data = array(
            'nama_pegawai'  => $this->request->getPost('nama_pegawai'),
            'tgl_lahir_pegawai' => $this->request->getPost('tgl_lahir_pegawai'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'email' => $this->request->getPost('email'),
            'jabatan' => $this->request->getPost('jabatan'),
            'gaji' => $this->request->getPost('gaji'),
        );
        $model->saveEmployee($data);
        return redirect()->to(base_url("Employee"));
    }

    public function edit($id_Employee)
    {
        $model = new Employee_model();
        $data['Employee'] = $model->getEmployee($id_Employee)->getRow();
        $data['title'] = 'Edit Employee';
        echo view('Admin/Employee/edit_employee', $data);
    }

    public function update()
    {
        $model = new Employee_model();
        $id_Employee = $this->request->getPost('id_pegawai');
        $data = array(
            'nama_pegawai'  => $this->request->getPost('nama_pegawai'),
            'tgl_lahir_pegawai' => $this->request->getPost('tgl_lahir_pegawai'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'email' => $this->request->getPost('email'),
            'jabatan' => $this->request->getPost('jabatan'),
            'gaji' => $this->request->getPost('gaji')
        );
        $model->updateEmployee($data, $id_Employee);
        return redirect()->to(base_url("employee"));
    }

    public function delete($id_Employee)
    {
        $model = new Employee_model();
        $data['Employee'] = $model->getEmployee($id_Employee)->getRow();
        $model->deleteEmployee($id_Employee);
        return redirect()->to(base_url("employee"));
    }
}
