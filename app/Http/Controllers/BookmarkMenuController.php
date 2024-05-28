<?php

namespace App\Http\Controllers;

use App\Models\BookmarkMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class BookmarkMenuController extends Controller
{
    public function index() {
        $bookmark_menus = BookmarkMenu::where(['user_id' => auth()->user()->id])->get();
        $bookmark_menu = [];
        
        foreach($bookmark_menus as $menu) {
            $url = "https://api.spoonacular.com/recipes/" . $menu['menu_id'] ."/information?apiKey=5933b739e5ba4e71ba24ff38b69eb8b7";
            $response = Http::get($url);
            $response = $response->json();
            $bookmark_menu[] = $response;
        }
        
        return view('bookmark', [
            'title' => 'Bookmark',
            'bookmark_menus' => $bookmark_menu,
        ]);
    }
    
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'menu_id' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json(['message' => 'Gagal menambahkan ke bookmark'], 400);
        }

        $input =[
            'menu_id' => $request->input('menu_id'),
            'user_id' => auth()->user()->id,
        ];

        $bookmark_menu = BookmarkMenu::firstWhere($input);

        if($bookmark_menu)
        {
            $bookmark_menu->delete();

            return response()->json([
                'message' => 'Berhasil menghapus dari bookmark',
                'data' => $bookmark_menu
            ], 200);
        } else {
            $bookmark_menu = BookmarkMenu::create($input);
            return response()->json([
                'message' => 'Berhasil menambahkan ke bookmark',
                'data' => $bookmark_menu
            ], 201);

        }
    }
}
