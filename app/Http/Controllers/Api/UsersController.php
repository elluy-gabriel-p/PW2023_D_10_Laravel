<?php

namespace App\Http\Controllers\Api;


use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Closure;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        if (count($users) > 0) {
            return response([
                'message' => 'Retrieve All Success',
                'data' => $users,
            ], 200);
        }

        return response([
            'message' => 'Empty',
            'data' => null,
        ], 400);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $users = User::find($id);

        if (!is_null($users)) {
            return response([
                'message' => 'User found, it is ' . $users->name,
                'data' => $users,
            ], 200);
        }

        return response([
            'message' => 'User not Found',
            'data' => null,
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = User::find($id);
        if (is_null($users)) {
            return response([
                'message' => 'User not Found',
                'data' => null,
            ], 404);
        }

        $updateData = $request->all();
        $validate = Validator::make($updateData, [
            'name' => 'required|max:60',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:8',
            'no_telp' => 'required|regex:/^08[0-9]{9,11}$/',
            'image' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'umur' => 'required|integer|min:17|max:100',
        ]);

        if ($validate->fails()) {
            return response(['message' => $validate->errors()], 400);
        }

        $users->name = $updateData['name'];
        $users->email = $updateData['email'];
        $users->password = bcrypt($updateData['password']);
        $users->no_telp = $updateData['no_telp'];
        $users->umur = $updateData['umur'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/images/profile'), $filename);
            $users->image = $filename;
        }

        if ($users->save()) {
            return response([
                'message' => 'Update User Success',
                'data' => $users,
            ], 200);
        }

        return response([
            'message' => 'Update User Failed',
            'data' => null,
        ], 400);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::find($id);

        $imagePath = public_path() . '/images/' . $users->image;

        if (is_null($users)) {
            return response([
                'message' => 'User not Found',
                'data' => null,
            ], 404);
        }

        if (file_exists($imagePath)) {
            // Delete the file
            unlink($imagePath);
        }

        if ($users->delete()) {
            return response([
                'message' => 'Delete User Success',
                'data' => $users,
            ], 200);
        }

        return response([
            'message' => 'Delete User Failed',
            'data' => null,
        ], 400);
    }
}
