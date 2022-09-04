<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('service', [
            'services' => $services
        ]);
    }

    public function list() {
        $services = Service::all();
        return view('services.index', [
            'services' => $services
        ]);
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request) {
        Service::create($request->all());
        return redirect()->route('backend.services');
    }
}
