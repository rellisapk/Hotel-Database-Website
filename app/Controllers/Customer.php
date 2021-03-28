<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Customer_model;

class Customer extends Controller
{
    public function index()
    {
        $model = new Customer_model();
        $data['customer'] = $model->getCustomer();
        $data['title'] = 'Customer Data';
        echo view('Admin/Customer/customer_view', $data);
    }

    public function add_new()
    {
        $data['title'] = 'Add New Customer';
        echo view('Admin/Customer/add_customer', $data);
    }

    public function save()
    {
        $model = new Customer_model();
        $data = array(
            'nama_customer'  => $this->request->getPost('nama_customer'),
            'tgl_lahir_customer' => $this->request->getPost('tgl_lahir_customer'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'email' => $this->request->getPost('email'),
            'alamat' => $this->request->getPost('alamat'),
            'kota_asal' => $this->request->getPost('kota_asal'),
        );
        $model->saveCustomer($data);
        return redirect()->to(base_url("customer"));
    }

    public function edit($id_customer)
    {
        $model = new Customer_model();
        $data['customer'] = $model->getCustomer($id_customer)->getRow();
        $data['title'] = 'Edit Customer';
        echo view('Admin/Customer/edit_customer', $data);
    }

    public function update()
    {
        $model = new Customer_model();
        $id_customer = $this->request->getPost('id_customer');
        $data = array(
            'nama_customer'  => $this->request->getPost('nama_customer'),
            'tgl_lahir_customer' => $this->request->getPost('tgl_lahir_customer'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'email' => $this->request->getPost('email'),
            'alamat' => $this->request->getPost('alamat'),
            'kota_asal' => $this->request->getPost('kota_asal')
        );
        $model->updateCustomer($data, $id_customer);
        return redirect()->to(base_url("customer"));
    }

    public function delete($id_customer)
    {
        $model = new Customer_model();
        $data['customer'] = $model->getCustomer($id_customer)->getRow();
        $model->deleteCustomer($id_customer);
        return redirect()->to(base_url("customer"));
    }
}
