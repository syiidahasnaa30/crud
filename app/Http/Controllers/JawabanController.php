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
   public function edit($id)
   {
      $jawaban = JawabanModels::find_by_id($id);
      return view('jawaban.edit', compact('jawaban'));
   }
   public function update($id, Request $request)
   {
      $data = $request->all();
      $id_pertanyaan = $request->id_pertanyaan;
      unset($data["_method"]);
      unset($data["_token"]);
      $jawaban = JawabanModels::editing($data);
      return redirect('/jawaban/' . $id_pertanyaan);
   }
   public function destroy($id)
   {
      $jawaban = JawabanModels::find_by_id($id);
      $id_pertanyaan = $jawaban->id_pertanyaan;
      unset($jawaban);
      JawabanModels::destroy($id);
      return redirect('/jawaban/' . $id_pertanyaan);
   }
}
