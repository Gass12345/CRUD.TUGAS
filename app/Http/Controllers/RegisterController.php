<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'tittle' => 'Register'
        ]);
    }

    public function store(Request $request)
   {
   
        $validate = user::create([
            'namapenerima' => $request->namapenerima,
            'jenisbarang' => $request->jenisbarang,
            'nomorbarang' => $request->nomorbarang,
            'banyakbarang' => $request->banyakbarang
           
        ]);

        return redirect()->route('list')->with('success','Daftar Berhasil !');
   }
   
}
