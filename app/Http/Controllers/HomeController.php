<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        // solo quiero saber si funciona
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function mostrar()
    {
        $user = User::all();

        return view('usuario.index', compact('user'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return back()->with('info', 'Usuario eliminado');
    }



    public function edit($id)
    {
        $usuario = User::findOrFail($id);

        return view('usuario.edit', compact('usuario'));
    }



    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);

        $usuario->rol = $request->rol;

        $usuario->save();

        return redirect('usuario')->with('info', 'Usuario actualizado correctamente');
    }


}
