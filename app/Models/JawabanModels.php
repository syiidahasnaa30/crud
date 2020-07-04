<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class JawabanModels
{
    public static function get_all()
    {
        $jawaban = DB::table('jawaban')->get();
        return  $jawaban;
    }
    public static function save($data)
    {
        $new_jawaban = DB::table('jawaban')->insert($data);
        return $new_jawaban;
    }
    public static function find_by_id_pertanyaan($id)
    {

        $data = DB::table('jawaban')->where('id_pertanyaan', $id)->get();
        return $data;
    }
}
