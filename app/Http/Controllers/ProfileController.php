<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

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
            'image' => 'required',
        ]);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'umur' => $request->umur,
            'image' => $request->image,
            'status' => 'user'
        ]);
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
        $user->delete();
        return redirect()->route('profile.index')->with(['success' => 'Data
         Berhasil Dihapus!']);
    }
}
