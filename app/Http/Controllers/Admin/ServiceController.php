<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getServicesData()
    {
        $servicesData = Service::latest()->get();
        if ($servicesData->isEmpty()) {
            return response()->json(['message' => 'No services data found'], 404);
        }
        return response()->json($servicesData);
    }
}
