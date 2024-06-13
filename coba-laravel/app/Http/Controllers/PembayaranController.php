<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\spp;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index2 ()
{
    
    $pembayaran = Pembayaran::all();
    return view('siswa.index2', compact('pembayaran'));
    }
    public function create2() {
        $sppOptions = Spp::pluck('NISN', 'NISN');
        return view('siswa.create2', compact('sppOptions'));
    }
    public function input2(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'NISN' => 'required',
            'ID_STAF_ATAU_GURU' => 'required|numeric',
            'TANGGAL_PEMBAYARAN' => 'required|date',
            'NOMINAL' => 'required|numeric',
        ]);

        // Save the data to the database
        $pembayaran = Pembayaran::create($validatedData);

        // Redirect or do something else after successful submission
        return redirect('/pembayaran')->with('success', 'Pembayaran berhasil disimpan');
    }
    public function edit2($id)
    {
        $pembayaran = Pembayaran::find($id);
        
        return view('siswa.edit2', compact(['pembayaran']));
    }
    public function update($id, Request $request)
    {
        $pembayaran = Pembayaran::find($id);
        $pembayaran->update($request->except(["_token", "submit"]));
        return redirect('/pembayaran');
    }
    public function destroy($id)
    {
        $pembayaran = Pembayaran::find($id);
        $pembayaran->delete();
        return redirect('/pembayaran');

    }

    public function search(Request $request)
{
    $query = Pembayaran::query();

        // Filter berdasarkan TANGGAL_PEMBAYARAN
        if ($request->has('TANGGAL_PEMBAYARAN') && $request->TANGGAL_PEMBAYARAN != null) {
            $query->where('TANGGAL_PEMBAYARAN', $request->TANGGAL_PEMBAYARAN);
        }

        // Pencarian berdasarkan NISN, ID_STAF_ATAU_GURU, dan TANGGAL_PEMBAYARAN
        if ($request->has('search') && $request->search != null) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('NISN', 'LIKE', '%' . $search . '%')
                  ->orWhere('ID_STAF_ATAU_GURU', 'LIKE', '%' . $search . '%')
                  ->orWhere('TANGGAL_PEMBAYARAN', 'LIKE', '%' . $search . '%');
            });
        }

        if ($request->has('sort') && in_array($request->sort, ['asc', 'desc'])) {
            $query->orderBy('TANGGAL_PEMBAYARAN', $request->sort);
        } else {
            // Default sorting jika tidak ada parameter sort
            $query->orderBy('TANGGAL_PEMBAYARAN', 'asc');
        }

        // Mendapatkan hasil query
        $pembayaran = $query->get();

        return view('siswa.index2', compact('pembayaran'));
    }
}

