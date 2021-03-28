<?php
namespace App\Controllers;

class Dashboard extends BaseController {
    public function index(){
        $data = [];
        $data['title'] = 'Dashboard';
        return view ('dashboard', $data);
    }
}