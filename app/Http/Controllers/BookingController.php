<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.booking', [
            // ...

            'bookings' => Booking::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.formBooking');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'guestName' => 'required',
            'guestPhone' => 'required',
            'guestEmail' => 'required',
            'roomType' => 'required',
            'people' => 'required',
            'checkInDate' => 'required',
            'checkOutDate' => 'required'
        ]);

        if ($validatedData['roomType'] === 'President Room') {
            $totalAmount = $validatedData['people'] * 1000000;
        } else if ($validatedData['roomType'] === 'Family Room') {
            $totalAmount = $validatedData['people'] * 750000;
        } else if ($validatedData['roomType'] === 'Single Room') {
            $totalAmount = $validatedData['people'] * 500000;
        } else {
            $totalAmount = $validatedData['people'] * 250000;
        }

        $validatedData['totalAmount'] = $totalAmount;

        Booking::create($validatedData);

        return redirect('/room')->with('success', 'Booking telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        return view('user.editBooking', [
            'booking' => $booking
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        $validatedData = $request->validate([
            'roomType' => 'required',
            'people' => 'required',
            'checkInDate' => 'required',
            'checkOutDate' => 'required'
        ]);

        if ($validatedData['roomType'] === 'President Room') {
            $totalAmount = $validatedData['people'] * 1000000;
        } else if ($validatedData['roomType'] === 'Family Room') {
            $totalAmount = $validatedData['people'] * 750000;
        } else if ($validatedData['roomType'] === 'Twin Room') {
            $totalAmount = $validatedData['people'] * 500000;
        } else {
            $totalAmount = $validatedData['people'] * 250000;
        }

        $validatedData['totalAmount'] = $totalAmount;

        Booking::where('id', $booking->id)->update($validatedData);

        return redirect('/booking')->with('success', 'Booking telah diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        Booking::destroy($booking->id);

        return redirect('/booking')->with('success', 'Booking telah dihapus');
    }
}
