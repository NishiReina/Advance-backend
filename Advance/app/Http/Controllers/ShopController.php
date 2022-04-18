<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use App\Models\Nice;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $items = Shop::all();
        return response()->json([
            'data' => $items
        ], 200);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Shop $shop)
    {
        return response()->json([
            'data' => $shop
        ], 200);
    }


    public function update(Request $request, Shop $shop)
    {
        //
    }

    public function destroy(Shop $shop)
    {
        //
    }

    public function likeShop(Request $request){

        $user = User::where('uid', $request->id)->first();
        $likes = Nice::where('user_id', $user->id)->get();
        // return $likes;

        $shops = [];
        foreach ($likes as $like){
            // return $like->id;
            $shop = Shop::where('id', $like->shop_id)->first();
            array_push($shops, $shop);
        }

        return response()->json([
            'data' => $shops
        ], 200);

    }
}
