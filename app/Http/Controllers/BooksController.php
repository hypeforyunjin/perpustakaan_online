<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BooksController extends Controller
{
    public function index(){
        return view('TambahBuku');
    }
    public function list_buku(){
        return view('buku', ['data'=>Books::all()]);
    }
}
