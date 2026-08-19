<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    public function getFooterData(){
        $footerData = Footer::first(); // Assuming you have a Footer model and you want to fetch the first record
        if(!$footerData){
            return response()->json(['message' => 'Footer data not found'], 404);
        }
        
        return response()->json($footerData);
    }
}
