<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar; /* import model kamar */
use App\Models\User; /* import model user */
use App\Models\Booking; /* import model booking */
use App\Models\Review; /* import model review */

class DashboardController extends Controller
{
    public function index()
    {
        $kamarCount = Kamar::count();
        $userCount = User::count();
        $bookingCount = Booking::count();
        $reviewCount = Review::count();
        return view('admin.dashboard', compact('kamarCount', 'userCount', 'bookingCount', 'reviewCount'));
    }
}
