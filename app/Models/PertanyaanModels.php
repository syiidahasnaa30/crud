<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;


class PertanyaanModels
{
    public static function get_all()
    {
        $pertanyaan = DB::table('pertanyaan')->get();
        return  $pertanyaan;
    }
    public static function save($data)
    {
        //membuang _token
        unset($data["_token"]);
        unset($data["submit"]);
        $new_pertanyaan = DB::table('pertanyaan')->insert($data);
        return $new_pertanyaan;
    }
}