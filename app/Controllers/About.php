<?php
namespace App\Controllers;

class About extends BaseController {
    public function index(){
        $data = [];
        $data['title'] = 'About';
        return view ('about', $data);
    }
    public function dev(){
        $data = [];
        $data['title'] = 'dev';
        return view ('dev', $data);
    }
}