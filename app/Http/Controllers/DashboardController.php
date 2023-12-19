<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar; /* import model kamar */
use App\Models\User; /* import model user */

class DashboardController extends Controller
{
    public function index()
    {
        $kamarCount = Kamar::count();
        $userCount = User::count();
        return view('admin.dashboard', compact('kamarCount', 'userCount'));
    }
}
