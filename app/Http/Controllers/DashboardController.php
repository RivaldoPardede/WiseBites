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
            $url = "https://api.spoonacular.com/recipes/complexSearch?query=" . $request->search . "&number=4&apiKey=716b37cbec294367809b172ced28dcb2";
        } else if($request->has('search_ingredients')) {
            $ingredients = str_replace(' ', ',', $request->search_ingredients);
            $url = "https://api.spoonacular.com/recipes/findByIngredients?ingredients=" . $ingredients . "&number=4&apiKey=716b37cbec294367809b172ced28dcb2";
        } else {
            $url = "https://api.spoonacular.com/recipes/complexSearch?number=8&apiKey=716b37cbec294367809b172ced28dcb2";
        }

        $response_menu = Http::get($url);

        Log::info('API Request', [
            'url' => $url,
            'status' => $response_menu->status(),
            'response_menu' => $response_menu->body()
        ]);

        if ($response_menu->successful()) {
            $my_bookmark = BookmarkMenu::where(['user_id' => auth()->user()->id])
            ->get()
            ->pluck('menu_id')
            ->toArray();

            $response_menu = $response_menu->json();
            $items = [];
            $response = !$request->has('search_ingredients') ? $response_menu['results'] : $response_menu;

            foreach( $response as $item) {
                $item['is_bookmark'] = in_array($item['id'], $my_bookmark);
                $items[] = $item;
            }

            return view('dashboard', [
                'items' => $items,
            ]);
        } else {
            return response()->json([
                'error' => 'Unable to fetch menu item',
                'status' => $response_menu->status()
            ], $response_menu->status());
        }
    }
}
