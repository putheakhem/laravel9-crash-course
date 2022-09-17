<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __invoke()
    {
        $services = Service::all();

        return view('service', [
            'services' => $services,
        ]);
    }

    public function index()
    {
        $services = Service::all();

        return view('services.index', [
            'services' => $services,
        ]);
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(ServiceRequest $request)
    {
        if ($request->validated()) {
            Service::create($request->all());
            return redirect()->route('backend.services');
        } else {
            return redirect()->route('services.create');
        }

    }

    public function edit($id) {
        $services = Service::find($id);
        return view('services.edit', [
            'services' => $services
        ]);
    }

    public function update(ServiceRequest $request, $id) {
        if($request->validated()) {
            $service = Service::find($id);
            $service->update($request->all());
            return redirect()->route('backend.services');
        } else {
            return redirect()->route('services.edit', $id);
        }
    }

    public function destroy($id) {
        $service = Service::find($id);
        $service->delete();

        return redirect()->route('backend.services');
    }
 }
