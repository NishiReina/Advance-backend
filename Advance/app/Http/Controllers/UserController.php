<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request){
        
        $newUser =  User::create($request->all());
        
        return response()->json([
            'data' => $newUser
        ], 201);
    }
}
