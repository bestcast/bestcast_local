<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;
use DB;

class QualityController extends Controller
{
    public function videoquality(Request $request){
        //dd($request->all());
        $video_url = $request['dataValue'];
        $movie_id = $request['movie_id'];
        $movie_url = DB::table('movies')->where('id', $movie_id)->value($video_url);
        return ['movie_url' => $movie_url];
    }
}
