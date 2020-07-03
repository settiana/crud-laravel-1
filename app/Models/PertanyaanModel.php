<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PertanyaanModel
{
    public static function get_all()
    {
        $pertanyaans = DB::table('pertanyaan')->get();

        return $pertanyaans;
    }

    public static function get($pertanyaan_id)
    {
        $pertanyaan = DB::table('pertanyaan')
                    ->where('id', $pertanyaan_id)
                    ->first();

        return $pertanyaan;
    }

    public static function save($data)
    {
        $new_pertanyaan = DB::table('pertanyaan')->insert($data);

        return $new_pertanyaan;
    }
}
