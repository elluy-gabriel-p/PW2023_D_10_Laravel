<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Booking;
use Faker\Core\Files;

class UserController extends Controller
{
    public function index()
    {
        $user = User::latest()->paginate(5);
        return view('admin.user', compact('user'));
    }

    public function create()
    {
        return view('user.register');
    }


    /**
     * edit
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.editUser', compact('user'));
    }

    /**
     * update
     *
     * @param mixed $request
     * @param int $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'password' => 'required',
            'umur' => 'required',
            'status' => 'required',
        ]);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'password' => $request->password,
            'umur' => $request->umur,
            'status' => $request->status,

        ]);

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|mimes:png,jpg,jpeg,svg,webp'
            ]);
            $image = $request->file('image');
            $profile_ekstensi = $image->getClientOriginalExtension();
            $profile_nama = time() . '.' . $profile_ekstensi;
            $image->move(public_path('public/images'), $profile_nama);

            $profile = User::find($id);
            File::delete('public/images/' . $profile->image);

            $user->update([
                'image' => $profile_nama
            ]);
        }

        return redirect()->route('user.index')->with(['success' => 'Data
        Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param int $id
     * @return void
     */

    public function destroy($id)
    {
        $user = User::find($id);
        File::delete('public/images/' . $user->image);
        $user->delete();
        return redirect()->route('user.index')->with(['success' => 'Data
         Berhasil Dihapus!']);
    }
}
