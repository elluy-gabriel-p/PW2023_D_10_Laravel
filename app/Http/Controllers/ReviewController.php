<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.ulasanKamar', [
            'reviews' => Review::latest()->get()
        ]);
    }

    public function indexAdmin()
    {
        return view('admin.review', [
            'reviews' => Review::latest()->paginate(5)
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */

    public function create($id)
    {
        // Find the Kamar model by its ID
        $kamar = Kamar::findOrFail($id);

        return view('user.formUlasan', [
            'kamar' => $kamar
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'reviewerName' => 'required',
            'rating' => 'required',
            'comment' => 'required',
        ]);

        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['id_kamar'] = $request->id_kamar;

        Review::create($validatedData);

        return redirect('/kamar/' . $request->id_kamar)->with('success', 'Review telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        return view('user.formEditUlasan', [
            'review' => $review
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $validatedData = $request->validate([
            'reviewerName' => 'required',
            'rating' => 'required',
            'comment' => 'required',
        ]);

        $validatedData['id_kamar'] = $request->id_kamar;

        Review::where('id', $review->id)->update($validatedData);

        return redirect('/kamar/' . $request->id_kamar)->with('success', 'Review telah diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        Review::destroy($review->id);

        return back()->with('success', 'Review telah dihapus');
    }
}
