<?php

namespace App\Http\Controllers;

use App\Models\spp;
use Illuminate\Http\Request;

class sppController extends Controller
{
    public function index() {
        $spp = spp::all();
        return view('spp.index',compact(['spp']));
    }

    public function create() {
        return view('spp.create');
    }
    public function input (Request $request) {
        //dd($request->except(["_token", "submit"]));
        
        spp::create($request->except(["_token", "submit"]));
        return redirect('/spp');
    }
    public function edit($id)
    {
        $spp = spp::find($id);
        
        return view('spp.edit', compact(['spp']));
    }
    public function update($id, Request $request)
    {
        $spp = spp::find($id);
        $spp->update($request->except(["_token", "submit"]));
        return redirect('/spp');
    }
    public function destroy($id)
    {
        $spp = spp::find($id);
        $spp->delete();
        return redirect('/spp');

    }
    public function createForm() {
        $kelasJurusanOptions = ['X ORACLE', 'XI ORACLE', 'X AXIOO'];
    
        return view('spp.create', compact('kelasJurusanOptions'));
    }
    
    public function tampil(){
        return view('spp.index');
    }
    
}
