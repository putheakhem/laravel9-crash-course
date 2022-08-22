<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('service', [
            'services' => $services
        ]);
    }

    public function create()
    {
    }
}
