<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
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
            // 'bookings' => Booking::where latest()->get()
            'bookings' => Booking::where('user_id', auth()->user()->id)->latest()->get(),
            'kamar' => Kamar::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        // Find the Kamar model by its ID
        $kamar = Kamar::findOrFail($id);

        return view('user.formBooking', [
            'kamar' => $kamar
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'people' => 'required',
            'checkInDate' => 'required',
            'checkOutDate' => 'required'
        ]);

        $totalAmount = $request->harga * $validatedData['people'];

        $bookingData = [
            'people' => $validatedData['people'],
            'checkInDate' => $validatedData['checkInDate'],
            'checkOutDate' => $validatedData['checkOutDate'],
            'guestName' => $request->guestName,
            'guestPhone' => $request->guestPhone,
            'guestEmail' => $request->guestEmail,
            'user_id' => $request->user_id,
            'id_kamar' => $request->id_kamar,
            'totalAmount' => $totalAmount,
        ];

        Booking::create($bookingData);

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
            'booking' => $booking,
            'kamar' => Kamar::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        $validatedData = $request->validate([
            'people' => 'required',
            'checkInDate' => 'required',
            'checkOutDate' => 'required'
        ]);

        $totalAmount = $request->harga * $validatedData['people'];

        $bookingData = [
            'people' => $validatedData['people'],
            'checkInDate' => $validatedData['checkInDate'],
            'checkOutDate' => $validatedData['checkOutDate'],
            'totalAmount' => $totalAmount,
        ];

        Booking::where('id', $booking->id)->update($bookingData);

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
