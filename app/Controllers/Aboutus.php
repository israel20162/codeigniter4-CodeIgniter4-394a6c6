<?php

namespace App\Controllers;

class Aboutus extends BaseController
{
    public function index()
    {

       $data['title'] = ucfirst('About us'); // Capitalize the first letter

        return view('templates/header', $data)
            . view('Views/about_us')
            . view('templates/footer');
    }
}