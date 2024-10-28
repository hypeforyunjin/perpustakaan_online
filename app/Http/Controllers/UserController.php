<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengguna=User::get();
        return view('pengguna', ['data'=>$pengguna]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insert(Request $request)
    {
        $pengguna=User::insert($request);
        echo $pengguna;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('editPengguna',['data'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
