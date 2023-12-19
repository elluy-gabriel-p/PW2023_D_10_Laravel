<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::get('adminLogin', [LoginController::class, 'adminLogin'])->name('adminLogin');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionRegister'])->name('actionRegister');
Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');

//Logout
Route::get('logout', [LoginController::class, 'actionLogout'])->name('actionLogout')->middleware('auth');
Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::resource('/user', UserController::class);

Route::resource('/profile', ProfileController::class);

Route::resource('/booking', BookingController::class);

Route::resource('/review', ReviewController::class);
Route::get('/admin/review', [ReviewController::class, 'indexAdmin'])->name('indexAdmin')->middleware('auth');

Route::resource('/kamar', KamarController::class);

Route::resource('/room', RoomController::class);


// Route::get('/', function () {
//     return view('user/home');
// });

Route::get('/navbarUser', function () {
    return view('user/navbar');
});

Route::get('/navbarAdmin', function () {
    return view('admin/navbar');
});

// Route::get('/loginUser', function () {
//     return view('user/login');
// });

// Route::get('/registerUser', function () {
//     return view('user/register');
// });

Route::get('/about', function () {
    return view('user/about');
});

Route::get('/profile', function () {
    return view('user/profile');
})->middleware('auth');

// Route::get('/editProfile', function () {
//     return view('user/editProfile');
// });

Route::get('/ulasanKamar', function () {
    return view('user/ulasanKamar');
});

Route::get('/buatUlasan', function () {
    return view('user/formUlasan');
});

Route::get('/ubahUlasan', function () {
    return view('user/formEditUlasan');
});

// Route::get('/room', function () {
//     return view('user/room', [
//         'rooms' => [
//             [
//                 'id' => 1,
//                 'featured_photo' => asset('img/room1.png'),
//                 'price' => '1.000.000',
//                 "total_beds" => 2,
//                 "deskripsi" => "Welcome to the Presidential Room, Where Luxury Meets Elegance. Our Most Exclusive Accommodation Offers Impeccable Comfort and Unparalleled Opulence. Experience the Epitome of Grandeur and Unwind in Style in the Presidential Room.",
//                 "tipe" => "President Room",
//                 "status" => "terisi"
//             ],

//             [
//                 'id' => 2,
//                 'featured_photo' => asset('img/room2.jpg'),
//                 'price' => '750.000',
//                 "total_beds" => 3,
//                 "deskripsi" =>
//                 "Experience Quality Time Together in Our Spacious Family Room. Designed with Your Comfort and Convenience in Mind, Our Family Room Provides a Cozy Retreat for You and Your Loved Ones. Create Cherished Memories with Your Family in Our Welcoming Accommodation.",
//                 "tipe" => "Family Room",
//                 "status" => "tersedia"
//             ],

//             [
//                 'id' => 3,
//                 'featured_photo' => asset('img/room3.jpg'),
//                 'price' => '250.000',
//                 "total_beds" => 1,
//                 "deskripsi" =>
//                 "Discover Tranquil Simplicity in Our Single Room. Perfect for Solo Travelers, Our Single Room Offers a Cozy Sanctuary for Rest and Relaxation. Experience Comfort and Privacy in Your Personal Haven.",
//                 "tipe" => "Single Room",
//                 "status" => "terisi"
//             ],

//             [
//                 'id' => 4,
//                 'featured_photo' => asset('img/room4.jpg'),
//                 'price' => '500.000',
//                 "total_beds" => 2,
//                 "deskripsi" =>
//                 "Double the Comfort, Twice the Enjoyment. Our Twin Room is Ideal for Travelers Seeking Individual Space and Comfort. With Two Cozy Beds and Thoughtful Amenities, This Room Offers the Perfect Balance of Togetherness and Personal Relaxation.",
//                 "tipe" => "Twin Room",
//                 "status" => "tersedia"
//             ],
//         ],
//     ]);
// });

// Route::get('/booking', function () {
//     return view('user/booking', [
//         'bookings' => [
//             [
//                 'bookingID' => '12345',
//                 'checkInDate' => 'Januari 25, 2024',
//                 'checkOutDate' => 'Januari 26, 2024',
//                 'roomType' => 'President Room',
//                 'guestName' => 'John Doe',
//                 'guestEmail' => 'john@gmail.com',
//                 'guestPhone' => '03249342938',
//                 'people' => '2',
//                 'totalAmount' => '2.500.000',
//             ],
//             [
//                 'bookingID' => '67890',
//                 'checkInDate' => 'Februari 17, 2024',
//                 'checkOutDate' => 'Februari 20, 2024',
//                 'roomType' => 'Family Room',
//                 'guestName' => 'Alice Smith',
//                 'guestEmail' => 'alice@yahoo.com',
//                 'guestPhone' => '0437932847',
//                 'people' => '3',
//                 'totalAmount' => '3.500.000',
//             ],
//             [
//                 'bookingID' => '13579',
//                 'checkInDate' => 'Maret 10, 2024',
//                 'checkOutDate' => 'Maret 14, 2024',
//                 'roomType' => 'Twin Room',
//                 'guestName' => 'Bob Johnson',
//                 'guestEmail' => 'bob@outlook.com',
//                 'guestPhone' => '083623474234',
//                 'people' => '2',
//                 'totalAmount' => '1.000.00',
//             ],
//         ],
//     ]);
// });


Route::get('/buatBooking', function () {
    return view('user/formBooking');
});

Route::get('/ubahBooking', function () {
    return view('user/editBooking');
});


Route::get('/loginAdmin', function () {
    return view('admin/login');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

// Route::get('/user', function () {
//     return view('admin/user', [
//         'userProfiles' => [
//             [
//                 'name' => 'Elluy Gabriel Panambe',
//                 'status' => 'Deactivate',
//                 'email' => 'elluygabrielpanambe@gmail.com',
//                 'phone' => '08571703304',
//                 'age' => 20,
//                 'password' => 'prabowo24',
//             ],
//             [
//                 'name' => 'Kevin Edgard Halim',
//                 'status' => 'Activate',
//                 'email' => 'kevin@yahoo.com',
//                 'phone' => '1234567890',
//                 'age' => 30,
//                 'password' => 'password2',
//             ],
//             [
//                 'name' => 'Dimas Bagus',
//                 'status' => 'Deactivate',
//                 'email' => 'dimas@outlook.com',
//                 'phone' => '9876543210',
//                 'age' => 25,
//                 'password' => 'password3',
//             ],
//             [
//                 'name' => 'Charisma Dewa Putra',
//                 'status' => 'Activate',
//                 'email' => 'dewa@aol.com',
//                 'phone' => '5555555555',
//                 'age' => 22,
//                 'password' => 'password4',
//             ],
//         ],
//     ]);
// });
// Route::get('/editUser', function () {
//     return view('admin/editUser');
// });

// Route::get('/editKamar', function () {
//     return view('admin/editKamar');
// });

// Route::get('/addKamar', function () {
//     return view('admin/addKamar');
// });

// Route::get('/kamar', function () {
//     return view('admin/kamar', [
//         'rooms' => [
//             [
//                 'id' => 1,
//                 'featured_photo' => asset('img/room1.png'),
//                 'price' => '1.000.000',
//                 "total_beds" => 2,
//                 "deskripsi" => "Welcome to the Presidential Room, Where Luxury Meets Elegance. Our Most Exclusive Accommodation Offers Impeccable Comfort and Unparalleled Opulence. Experience the Epitome of Grandeur and Unwind in Style in the Presidential Room.",
//                 "tipe" => "President Room",
//                 "status" => "terisi"
//             ],

//             [
//                 'id' => 2,
//                 'featured_photo' => asset('img/room2.jpg'),
//                 'price' => '750.000',
//                 "total_beds" => 1,
//                 "deskripsi" =>
//                 "Experience Quality Time Together in Our Spacious Family Room. Designed with Your Comfort and Convenience in Mind, Our Family Room Provides a Cozy Retreat for You and Your Loved Ones. Create Cherished Memories with Your Family in Our Welcoming Accommodation.",
//                 "tipe" => "Family Room",
//                 "status" => "tersedia"
//             ],

//             [
//                 'id' => 3,
//                 'featured_photo' => asset('img/room3.jpg'),
//                 'price' => '250.000',
//                 "total_beds" => 2,
//                 "deskripsi" =>
//                 "Discover Tranquil Simplicity in Our Single Room. Perfect for Solo Travelers, Our Single Room Offers a Cozy Sanctuary for Rest and Relaxation. Experience Comfort and Privacy in Your Personal Haven.",
//                 "tipe" => "Single Room",
//                 "status" => "terisi"
//             ],

//             [
//                 'id' => 4,
//                 'featured_photo' => asset('img/room4.jpg'),
//                 'price' => '500.000',
//                 "total_beds" => 1,
//                 "deskripsi" =>
//                 "Double the Comfort, Twice the Enjoyment. Our Twin Room is Ideal for Travelers Seeking Individual Space and Comfort. With Two Cozy Beds and Thoughtful Amenities, This Room Offers the Perfect Balance of Togetherness and Personal Relaxation.",
//                 "tipe" => "Twin Room",
//                 "status" => "tersedia"
//             ],
//         ],
//     ]);
// });

// Route::get('user', [UserController::class, 'index']);
// Route::post('user', [UserController::class, 'store']);
// Route::get('user/{id}', [UserController::class, 'edit']);
// Route::put('user/{id}', [UserController::class, 'update']);
// Route::delete('user/{id}', [UserController::class, 'destroy']);

// Route::get('kamar', [KamarController::class, 'index']);
// Route::post('kamar', [KamarController::class, 'store']);
// Route::get('kamar/{id}', [KamarController::class, 'edit']);
// Route::put('kamar/{id}', [KamarController::class, 'update']);
// Route::delete('kamar/{id}', [KamarController::class, 'destroy']);

// Route::get('booking', [BookingController::class, 'index']);
// Route::post('booking', [BookingController::class, 'store']);
// Route::get('booking/{id}', [BookingController::class, 'edit']);
// Route::put('booking/{id}', [BookingController::class, 'update']);
// Route::delete('booking/{id}', [BookingController::class, 'destroy']);

// Route::get('login', [AuthController::class, 'login'])->name('login');
// Route::post('login', [AuthController::class, 'login']);

// Route::get('logout', [AuthController::class, 'logout']);

// Route::get('register', [AuthController::class, 'register'])->name('register');
// Route::post('register', [AuthController::class, 'register']);
