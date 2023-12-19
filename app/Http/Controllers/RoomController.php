<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Kamar; /* import model kamar */
use Faker\Core\Files;

class RoomController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get kamar
        $room = Kamar::all();
        //render view with posts
        return view('user.room', compact('room'));
    }
}
