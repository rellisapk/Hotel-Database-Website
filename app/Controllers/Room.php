<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Room_model;

class Room extends Controller
{
    public function index()
    {
        $model = new Room_model();
        $data['room'] = $model->getRoom();
        $data['title'] = 'Room Data';
        echo view('Admin/Room/room_view', $data);
    }

    public function add_new()
    {
        $data['title'] = 'Add New Room';
        echo view('Admin/Room/add_room', $data);
    }

    public function save()
    {
        $model = new Room_model();
        $data = array(
            'tipe_kamar'  => $this->request->getPost('tipe_kamar'),
            'tipe_ranjang' => $this->request->getPost('tipe_ranjang'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'photo' => $this->request->getPost('photo'),
            'harga' => $this->request->getPost('harga'),
        );
        $model->saveRoom($data);
        return redirect()->to(base_url("room"));
    }

    public function edit($id_kamar)
    {
        $model = new Room_model();
        $data['room'] = $model->getRoom($id_kamar)->getRow();
        $data['title'] = 'Edit Room';
        echo view('Admin/Room/edit_room', $data);
    }

    public function update()
    {
        $model = new Room_model();
        $id_kamar = $this->request->getPost('id_kamar');
        if ($this->request->getPost('photo') != NULL) {
            $data = array(
                'tipe_kamar'  => $this->request->getPost('tipe_kamar'),
                'tipe_ranjang' => $this->request->getPost('tipe_ranjang'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'photo' => $this->request->getPost('photo'),
                'harga' => $this->request->getPost('harga'),
            );
        } else {
            $data = array(
                'tipe_kamar'  => $this->request->getPost('tipe_kamar'),
                'tipe_ranjang' => $this->request->getPost('tipe_ranjang'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'harga' => $this->request->getPost('harga'),
            );
        }
        $model->updateRoom($data, $id_kamar);
        return redirect()->to(base_url("room"));
    }
    public function detail($id_kamar)
    {
        $model = new Room_model();
        $data['room'] = $model->getRoom($id_kamar)->getRow();
        $data['title'] = $data['room']->id_kamar;
        echo view('Admin/Room/room_detail', $data);
    }

    public function delete($id_kamar)
    {
        $model = new Room_model();
        $data['room'] = $model->getRoom($id_kamar)->getRow();
        $model->deleteRoom($id_kamar);
        return redirect()->to(base_url("room"));
    }
}
