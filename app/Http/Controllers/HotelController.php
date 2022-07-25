<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reservations = Reservation::with('room', 'room.hotel') ->orderBy('arrival', 'asc') ->get();
        return view('dashboard.reservations')->with('reservations', $reservations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $hotelInfo = Hotel::with('rooms')->get()->find($hotel_id);
        return view('dashboard.reservationCreate', compact('hotelInfo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->request->add(['user_id' => 1]);
        Reservation::create($request->all());

        return redirect('dashboard/reservations')->with('success', 'Reservation created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
        $reservation = Reservation::with('room', 'room.hotel')->get()->find($reservation->id);
        $hotel_id = $reservation->room->hotel_id;
        $hotelInfo = Hotel::with('rooms')->get()->find($hotel_id);
      
        return view('dashboard.reservationSingle', compact('reservation', 'hotelInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
        $reservation = Reservation::with('room', 'room.hotel')->get()->find($reservation->id);
        $hotel_id = $reservation->room->hotel_id;
        $hotelInfo = Hotel::with('rooms')->get()->find($hotel_id);
      
        return view('dashboard.reservationEdit', compact('reservation', 'hotelInfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
        $reservation->user_id = 1;

        $reservation->save();
        return redirect('dashboard/reservations')->with('success', 'Successfully updated your reservation!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //
        $reservation = Reservation::find($reservation->id);
  $reservation->delete(); 

  return redirect('dashboard/reservations')->with('success', 'Successfully deleted your reservation!');
    }
}
