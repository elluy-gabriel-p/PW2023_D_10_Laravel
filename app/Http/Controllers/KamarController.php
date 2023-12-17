<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Kamar; /* import model kamar */
use Faker\Core\Files;

class KamarController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get kamar
        $kamar = Kamar::latest()->paginate(5);
        //render view with posts
        return view('admin.kamar', compact('kamar'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('admin.addKamar');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //Validasi Formulir
        $this->validate($request, [
            'image' => 'required|mimes:png,jpg,jpeg,svg,webp',
            'jenis' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'fasilitas' => 'required',
            'status' => 'required'
        ]);

        $image = $request->file('image');
        $ruang_ekstensi = $image->getClientOriginalExtension();
        $ruang_nama = time() . '.' . $ruang_ekstensi;
        $image->move(public_path('images/kamar'), $ruang_nama);

        //Fungsi Simpan Data ke dalam Database
        Kamar::create([
            'image' => $ruang_nama,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'fasilitas' => $request->fasilitas,
            'status' => $request->status
        ]);
        try {
            return redirect()->route('kamar.index')->with('success', 'Data Berhasil Ditambahkan!');
        } catch (Exception $e) {
            return redirect()->route('kamar.index')->with('success', 'Data Berhasil Ditambahkan!');
        }
    }

    /**
     * edit
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        $kamar = Kamar::find($id);
        return view('admin.editkamar', compact('kamar'));
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
        $kamar = Kamar::find($id);
        //validate form
        $this->validate($request, [
            'jenis' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'fasilitas' => 'required',
            'status' => 'required'
        ]);
        $kamar->update([
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'fasilitas' => $request->fasilitas,
            'status' => $request->status
        ]);

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|mimes:png,jpg,jpeg,svg,webp'
            ]);
            $image = $request->file('image');
            $ruang_ekstensi = $image->getClientOriginalExtension();
            $ruang_nama = time() . '.' . $ruang_ekstensi;
            $image->move(public_path('images/kamar'), $ruang_nama);

            $ruang = Kamar::find($id);
            File::delete('images/kamar/' . $ruang->image);

            $kamar->update([
                'image' => $ruang_nama
            ]);
        }
        return redirect()->route('kamar.index')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * destroy
     *
     * @param int $id
     * @return void
     */

    public function destroy($id)
    {
        $kamar = Kamar::find($id);
        File::delete('images/kamar/' . $kamar->image);
        $kamar->delete();
        return redirect()->route('kamar.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
