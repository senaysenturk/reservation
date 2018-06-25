<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::latest() -> get();
        /*dd($reservations);*/
        return view('reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function delete(Reservation $reservation)
    {
        return view('reservations.delete' , compact('reservation'));
    }

    public function store(Request $request)
    {
        $request->validate([
           'adsoyad' => 'required',
            'telefon' => 'required',
            'tarih' => 'required'
        ]);

        Reservation::firstOrNew([
            'adsoyad' => request ('adsoyad'),
            'telefon' => request('telefon'),
            'tarih' => date("Y-m-d H:i:s", strtotime(request('tarih')))
        ]);
        return redirect() ->route('reservations.index')->withSuccess('Rezervasyon eklendi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'adsoyad' => 'required',
            'telefon' => 'required',
            'tarih' => 'required'
        ]);

        $reservation -> adsoyad = request('adsoyad');
        $reservation -> telefon = request('telefon');
        $reservation -> tarih = date("Y-m-d H:i:s", strtotime(request('tarih')));
        $reservation -> save();

        return redirect()-> route('reservations.index')->withSuccess('Rezervasyon güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation -> delete();
        return redirect() -> route('reservations.index')->withErrors('Rezervasyon silindi!');
    }
}
