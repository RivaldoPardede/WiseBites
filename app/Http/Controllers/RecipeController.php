<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RecipeController extends Controller
{
    protected static $apiKey = 'SDffcqAC9r8uiYRBKbXAZ8dAn7eBMWqi';

    public function getMenuItem($id)
    {
        $url = "https://api.apilayer.com/spoonacular/food/menuItems/{$id}";

        $response = Http::withHeaders([
            'Content-Type' => 'text/plain',
            'apikey' => self::$apiKey,
        ])->get($url);

        Log::info('API Request', [
            'url' => $url,
            'status' => $response->status(),
            'response' => $response->body()
        ]);

        if ($response->successful()) {
            return view('dashboard', [
                'response' => $response
            ]);
        } else {
            return response()->json([
                'error' => 'Unable to fetch menu item',
                'status' => $response->status()
            ], $response->status());
        }
    }
}
