<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    public static function get_all(){
        $users = DB::table('peminjamans')->get();
        return $users;
    }
    public static function insert(Request $request){
        $insert=DB::table('peminjamans')->insert([
            ['books_id' => $request->book_id, 'pengguna_id' => $request->pengguna_id],

        ]);
        return $insert;
    }
}
