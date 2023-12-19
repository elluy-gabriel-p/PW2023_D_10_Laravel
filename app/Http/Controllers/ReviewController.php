<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.ulasanKamar', [
            // ...

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
    public function create()
    {
        return view('user.formUlasan');
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

        Review::create($validatedData);

        return redirect('/review')->with('success', 'Review telah ditambahkan');
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

        Review::where('id', $review->id)->update($validatedData);

        return redirect('/review')->with('success', 'Review telah diedit');
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
