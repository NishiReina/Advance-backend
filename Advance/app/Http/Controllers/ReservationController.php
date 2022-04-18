<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $user = User::where('uid', $request->uid)->first();

        $data = [
            'shop_id' => $request->shop_id,
            'user_id' => $user->id,
            'date' => $request->date,
            'time' => $request->time,
            'num' => $request->num
        ];
        $newReserve = Reservation::create($data);

        return response()->json([
            'data' => $newReserve,
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
