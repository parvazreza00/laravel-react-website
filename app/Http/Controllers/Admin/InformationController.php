<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function getInformationData(){
        $informationData = Information::first(); // Assuming you have an Information model and you want to fetch the first record
        if(!$informationData){
            return response()->json(['message' => 'Information data not found'], 404);
        }
        return response()->json($informationData);
    }
}
