<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\User;
use App\Mail\MailSend;

class RegisterController extends Controller
{
    public function register()
    {
        return view("user.register");
    }
    public function actionRegister(Request $request)
    {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('/images/profile'), $filename);

        $str = Str::random(100);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'password' => $request->password,
            'image' => $filename,
            'umur' => $request->umur,
            'status' => 'user',
            'verify_key' => $str
        ]);

        $details = [
            'name' => $request->name,
            'website' => 'Imperial Hotel',
            'datetime' => date('Y-m-d His'),
            'url' => request()->getHttpHost() . '/register/verify/' . $str
        ];
        // ...

        Mail::to($request->email)->send(new MailSend($details));

        Session::flash('message', 'Link verifikasi telah dikirim ke email anda. Silahkan cek email anda untuk mengaktifkan akun.');
        return redirect('register');
    }
    public function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')->where('verify_key', $verify_key)->exists();
        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)->update(['active' => 1, 'email_verified_at' => date('Y-m-d H:i:s'),]);
            return "Verifikasi berhasil. Akun anda sudah aktif.";
        } else {
            return "Keys tidak valid.";
        }
    }
}
