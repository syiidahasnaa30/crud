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
    public static function find_by_id($id)
    {
        $data = DB::table('pertanyaan')->where('id', $id)->first();
        return $data;
    }
    public static function editing($data)
    {
        $new_pertanyaan = DB::table('pertanyaan')->where('id', $data["id"])->update($data);
        return $new_pertanyaan;
    }
}
