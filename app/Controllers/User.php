<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Booking_model;
use App\Models\Room_model;

class User extends Controller
{
    public function index()
    {
        $model = new Room_model();
        $data['room'] = $model->getRoom();
        $data['title'] = 'Room Data';
        echo view('Room_view', $data);
    }
}