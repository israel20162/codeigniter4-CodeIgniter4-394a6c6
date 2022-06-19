<?php

namespace App\Controllers;

class ContactUs extends BaseController
{
    public function index()
    {

        $data['title'] = ucfirst('Contact Us'); // Capitalize the first letter

        return view('templates/header', $data)
            . view('Views/get_involved')
            . view('templates/footer');
    }
}
