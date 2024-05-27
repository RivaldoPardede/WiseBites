<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RecipeController extends Controller
{
    public function index(Request $request, $id) {
        $url = "https://api.spoonacular.com/recipes/" . $id . "/information?apiKey=716b37cbec294367809b172ced28dcb2";
        
        $response = Http::get($url);

        if($response->successful()) {
            $response = $response->json();

            return view('detailrecipe', [
                'title' => 'Detail Recipe',
                'recipe' => $response,
            ]);
        }
        dd($response);
    }
}
