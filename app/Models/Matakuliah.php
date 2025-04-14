<?php

namespace App\Models;

class Matakuliah
{
    protected static function getDummyData()
    {
        return json_decode(json_encode([
            ['id' => 1, 'title' => 'Daftar yang Diambil', 'content' => 'Berikut adalah daftar mata kuliah yang diambil mahasiswa semester ini.'],
            ['id' => 2, 'title' => 'Dosen yang Mengajar', 'content' => 'Berikut adalah daftar dosen yang mengampu mata kuliah tersebut.'],
        ]));
    }

    public static function all()
    {
        return self::getDummyData();
    }

    public static function find($id)
    {
        $matakuliah = self::getDummyData();
        foreach ($matakuliah as $item) {
            if ($item->id == $id) {
                return $item;
            }
        }
        return null;
    }
}
