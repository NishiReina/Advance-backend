<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Nice;
use App\Models\Shop;
use Illuminate\Http\Request;

class NiceController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Shop $shop, Request $request)
    {
        $nice = New Nice();
        $nice->shop_id = $request->shop_id;
        $user = User::where('uid', $request->uid)->first();
        $nice->user_id = $user->id;
        $nice->save();
        return response()->json([
            'data' => $nice
        ], 201);
    }

    public function show(Nice $nice)
    {
        //
    }


    public function update(Request $request, Nice $nice)
    {
        //
    }

    public function destroy(Request $request)
    {

        $user = User::where('uid', $request->uid)->first();
        $nice = Nice::where('shop_id', $request->shop_id)->where('user_id', $user->id)->first();
        $item = $nice->delete();

        if ($item) {
            return response()->json([
              'data' => $nice,
              'message' => 'Deleted successfully',
            ], 200);
        } else {
            return response()->json([
              'data' => $nice,
              'message' => 'Not found',
            ], 404);
        }
    }

    public function getStatus($shop_id, Request $request){

        $user = User::where('uid', $request->uid)->first();
        $status = Nice::where('shop_id', $shop_id)->where('user_id', $user->id)->first();

        if ($status == null) {
            return response()->json([
              'data' => false,
            ], 200);
        } else {
            return response()->json([
              'data' => true,
            ], 200);
        }
    }
}
