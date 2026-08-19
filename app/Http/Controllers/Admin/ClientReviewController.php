<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClientReview;
use Illuminate\Http\Request;

class ClientReviewController extends Controller
{
    public function allReviews(){
        $reviews = ClientReview::all();
        return response()->json($reviews);
    }
}
