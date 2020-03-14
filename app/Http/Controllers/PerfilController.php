<?php

namespace App\Http\Controllers;
use App\Perfil;
use App\User;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function __construct()
    {
        
        $this->middleware('auth');
    }

    
    public function index(){
        return view('perfil');
    }

    public function store(Request $request)
    {
        $request= User::all();
        $ruta_archivo = request()->file('avatar')->store('public');
        $request->auth()->user()->update(['avatar' => basename($ruta_archivo)]);
            
        return redirect()->route('perfil')->with(['status'=> "Se agrego la avatar Correctamente"]);
    }
}
