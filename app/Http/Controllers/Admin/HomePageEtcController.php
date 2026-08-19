<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePageEtc;
use Illuminate\Http\Request;

class HomePageEtcController extends Controller
{
    public function homeVideo()
    {
        $homeVideo = HomePageEtc::select('video_des', 'video_url')->first();
        if (!$homeVideo) {
            return response()->json(['message' => 'No home video found'], 404);
        }
        return response()->json([
            'video_description' => $homeVideo->video_des,
            'video_url' => $homeVideo->video_url,
        ]);
    }

    public function homeTotal()
    {
        $totalData = HomePageEtc::select('total_student', 'total_course', 'total_review')->first();
        if (!$totalData) {
            return response()->json(['message' => 'No total data found'], 404);
        }
        return response()->json([
            'total_students' => $totalData->total_student,
            'total_courses' => $totalData->total_course,
            'total_reviews' => $totalData->total_review,
        ]);
    }
    public function homeTech()
    {
        $techData = HomePageEtc::select('tec_des')->first();
        if (!$techData) {
            return response()->json(['message' => 'No technology data found'], 404);
        }
        return response()->json(
            [
                'technology_description' => $techData->tec_des,
            ]
        );
    }

    public function homeTitle()
    {
        $titleData = HomePageEtc::select('home_title','home_subtitle')->first();
        if (!$titleData) {
            return response()->json(['message' => 'No title data found'], 404);
        }
        return response()->json(
            [
                'home_title' => $titleData->home_title,
                'home_subtitle' => $titleData->home_subtitle,
            ]
        );
    }
}
