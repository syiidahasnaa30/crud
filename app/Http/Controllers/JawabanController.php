<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModels;
class JawabanController extends Controller
{
   public function index($id){
   $jawaban = JawabanModels::find_by_id_pertanyaan($id);
   return view('jawaban.index', compact('jawaban'));
   }
   public function create($id){
      return view('jawaban.form', ["id_pertanyaan" => $id]);
   }
   public function store(Request $request){
      $id=$request["id_pertanyaan"];
      $data = JawabanModels::save($request->all());
      return redirect('/jawaban/1');
   }
}
