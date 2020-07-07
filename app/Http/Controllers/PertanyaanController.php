<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModels;
//model eloquent
use App\Models\JawabanModels;
use  App\pertanyaan;
use Illuminate\Support\Facades\Redirect;

class PertanyaanController extends Controller
{
    public function create()
    {
        return view('pertanyaan.form');
    }
    public function index()
    {
        //$pertanyaan = PertanyaanModels::get_all();
        ///dd($pertanyaan);
        $pertanyaan = pertanyaan::all();
        //dd($pertanyaan);
        return view('pertanyaan.index', compact('pertanyaan'));
    }
    public function store(Request $request)
    {
        //PertanyaanModels::save($request->all());
        /*$pertanyaan = new pertanyaan;
        $pertanyaan->judul = $request["judul"];
        $pertanyaan->isi = $request->isi;
        $pertanyaan->save();*/
        $pertanyaan = pertanyaan::create(
            [
                'judul' => $request->judul,
                'isi' => $request->isi
            ]
        );
        return redirect('/pertanyaan');
    }
    public function show($id)
    {
        $pertanyaan = PertanyaanModels::find_by_id($id);
        $jawabans = JawabanModels::find_by_id_pertanyaan($id);
        return view('pertanyaan.detail', compact('pertanyaan'), compact('jawabans'));
    }
    public function edit($id)
    {
        // $pertanyaan = PertanyaanModels::find_by_id($id);
        $pertanyaan = pertanyaan::find($id);
        return view('pertanyaan.edit', compact('pertanyaan'));
    }
    public function update($id, Request $request)
    {
        // $data = $request->all();
        //unset($data["_method"]);
        //unset($data["_token"]);
        // $pertanyaan = PertanyaanModels::editing($data);
        $pertanyaan = pertanyaan::find($id);
        $pertanyaan->judul = $request->judul;
        $pertanyaan->isi = $request->isi;
        $pertanyaan->save();
        return redirect('/pertanyaan');
    }
    public function destroy($id)
    {
        PertanyaanModels::destroy($id);
        return redirect('/pertanyaan');
    }
}
