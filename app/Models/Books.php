<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Books extends Model
{
    use  HasFactory;
    public static function get_all(){
        $users = DB::table('books')->get();
        return $users;
    }
    public static function insert(Request $request){
        $insert=DB::table('books')->insert([
            ['nama' => $request->nama, 'email' => $request->nama],
        ]);
        return $insert;
    }
}