<?php

namespace App\Controllers;

class Getinvolved extends BaseController
{
    public function index()
    {

        $data['title'] = ucfirst('Get involved'); // Capitalize the first letter

        return view('templates/header', $data)
            . view('Views/get_involved')
            . view('templates/footer');
    }
}
