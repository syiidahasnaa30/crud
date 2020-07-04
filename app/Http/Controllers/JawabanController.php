<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModels;

class JawabanController extends Controller
{
   public function index($id)
   {
      $jawaban = JawabanModels::find_by_id_pertanyaan($id);
      return view('jawaban.index', compact('jawaban'));
   }
   public function store($id_pertanyaan, Request $request)
   {
      $data = $request->all();
      unset($data["_token"]);
      JawabanModels::save($data);
      return redirect('/jawaban/' . $id_pertanyaan);
   }
}
