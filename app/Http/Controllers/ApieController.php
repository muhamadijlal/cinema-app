<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class ApieController extends Controller
{
    public function index(){

        $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJhNjNkN2IxYjMxNjE5M2YxZmQ2NTFiN2Q5OTI2ZGQ5MCIsInN1YiI6IjYyZTBhMGNhNTViYzM1MDI3ZTdjNzhlMiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.xGr4ZDTqsYvH7gjHHDu0ve2xGUKGEb7KGrwbP9Wcc_c';

        // movie/now_playing = [
            $response = Http::withHeaders([
                'Authorization' =>  "Bearer ".$token,
            ])->get('https://api.themoviedb.org/3/movie/now_playing');
                    
            $responseBody = json_decode($response->body());            
            $nowPlaying = $responseBody->results;     
        // ]

        // /movie/popular =  [
            $response = Http::withHeaders([
                'Authorization' =>  "Bearer ".$token,
            ])->get('https://api.themoviedb.org/3/movie/popular');
                    
            $responseBody = json_decode($response->body());
            $popular = $responseBody->results;
        // ]

        // /movie/top_rated = [
            $response = Http::withHeaders([
                'Authorization' =>  "Bearer ".$token,
            ])->get('https://api.themoviedb.org/3/movie/top_rated');
                    
            $responseBody = json_decode($response->body());
            $topRated = $responseBody->results;
        // ]

        // /movie/upcoming [
            $response = Http::withHeaders([
                'Authorization' =>  "Bearer ".$token,
            ])->get('https://api.themoviedb.org/3/movie/upcoming');
                    
            $responseBody = json_decode($response->body());
            $upComing = $responseBody->results;
        // ]

        return view('layouts.menu.dashboard', compact('nowPlaying','popular','topRated','upComing'));
    }

    public function show($id){        

        $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJhNjNkN2IxYjMxNjE5M2YxZmQ2NTFiN2Q5OTI2ZGQ5MCIsInN1YiI6IjYyZTBhMGNhNTViYzM1MDI3ZTdjNzhlMiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.xGr4ZDTqsYvH7gjHHDu0ve2xGUKGEb7KGrwbP9Wcc_c';

        // /movie/{movie_id} = [
            $response = Http::withHeaders([
                'Authorization' =>  "Bearer ".$token,
            ])->get('https://api.themoviedb.org/3/movie/'.$id);
                    
            $detail = json_decode($response->body());            
            // dd($detail);
        // ]

        return view('layouts.menu.detail', compact('detail'));
    }
}
