<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Faker\Core\Files;

class ProfileController extends Controller
{

    public function index()
    {
        $user = User::latest()->paginate(5);
        return view('user.profile', compact('user'));
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
        return view('user.editProfile', compact('user'));
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
            'umur' => 'required',
            'image' => 'mimes:png,jpg,jpeg,svg,webp',
            'status' => 'required'
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'umur' => $request->umur,
            'status' => 'user'
        ]);

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|mimes:png,jpg,jpeg,svg,webp'
            ]);
            $image = $request->file('image');
            $profile_ekstensi = $image->getClientOriginalExtension();
            $profile_nama = time() . '.' . $profile_ekstensi;
            $image->move(public_path('/images/profile'), $profile_nama);

            $profile = User::find($id);
            File::delete('images/profile/' . $profile->image);

            $user->update([
                'image' => $profile_nama
            ]);
        }
        return redirect()->route('profile.index')->with(['success' => 'Data
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
        File::delete('images/profile/' . $user->image);
        $user->delete();
        return redirect()->route('actionLogout')->with(['success' => 'Data
         Berhasil Dihapus!']);
    }
}
