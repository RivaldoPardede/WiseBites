<?php

namespace App\Http\Controllers;

use App\Models\BookmarkMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index(Request $request) {
        if($request->has('search')) {
            $url = "https://api.spoonacular.com/food/menuItems/search?query=" . $request->search . "&number=4&apiKey=716b37cbec294367809b172ced28dcb2";
        } else {
            $url = "https://api.spoonacular.com/food/menuItems/search?query=a&number=10&apiKey=716b37cbec294367809b172ced28dcb2";
        }


        $response = Http::get($url);
        Log::info('API Request', [
            'url' => $url,
            'status' => $response->status(),
            'response' => $response->body()
        ]);

        if ($response->successful()) {
            $my_bookmark = BookmarkMenu::where(['user_id' => auth()->user()->id])
            ->get()
            ->pluck('menu_id')
            ->toArray();

            $response = $response->json();
            $items = [];

            foreach( $response['menuItems'] as $item) {
                $item['is_bookmark'] = in_array($item['id'], $my_bookmark);
                $items[] = $item;
              
            }

            return view('dashboard', [
                'items' => $items
            ]);
        } else {
            return response()->json([
                'error' => 'Unable to fetch menu item',
                'status' => $response->status()
            ], $response->status());
        }
    }
}

