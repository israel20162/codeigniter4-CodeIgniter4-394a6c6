<?php

namespace App\Controllers;

class Homepage extends BaseController
{
    public function index()
    {

        $data['title'] = ucfirst('Kweta'); // Capitalize the first letter

        return view('templates/header', $data)
            . view('Views/home_page')
            . view('templates/footer');
    }
}
