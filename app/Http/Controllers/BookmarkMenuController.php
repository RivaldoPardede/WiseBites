<?php

namespace App\Http\Controllers;

use App\Models\BookmarkMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookmarkMenuController extends Controller
{
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
