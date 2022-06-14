<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

       $data['title'] = ucfirst('KWETA'); // Capitalize the first letter

        return view('templates/header', $data)
            . view('Views/home_page')
            . view('templates/footer');
    }
}