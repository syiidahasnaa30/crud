<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModels;

class PertanyaanController extends Controller
{
    public function create()
    {
        return view('pertanyaan.form');
    }
    public function index()
    {
        $pertanyaan = PertanyaanModels::get_all();
        return view('pertanyaan.index', compact('pertanyaan'));
    }
    public function store(Request $request)
    {
        $data = PertanyaanModels::save($request->all());
        return redirect('/pertanyaan');
    }
    public function edit($id){
        $pertanyaan=PertanyaanModels::find_by_id($id);
        return view('pertanyaan.edit', compact('pertanyaan'));
    }
}
