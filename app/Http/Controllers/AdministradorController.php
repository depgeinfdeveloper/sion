<?php

namespace App\Http\Controllers;

use App\User;
use App\Nivel;
use App\Iglesia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdministradorController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function registroUsuario()
    {
        $iglesias = Iglesia::all();
        $niveles =  Nivel::all();

        return view('admin.registro-usuario', compact('iglesias', 'niveles'));
    }

    public function bandejaUsuario()
    {
        $usuarios = DB::table('users')
            ->join('iglesia', 'users.id_iglesia', '=', 'iglesia.id')
            ->join('nivel', 'users.id_nivel', '=', 'nivel.id')
            ->select('users.id', 'users.name', 'users.email', 'iglesia.nombre as iglesia_name', 'nivel.nombre as nivel_name')
            ->paginate(10);

        return view('admin.bandeja-usuario', compact('usuarios'));
    }

    public function registrarUsuario(Request $request)
    {

        $validacion = Validator::make(
            $request->all(),
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'nivel' => ['required', 'in:1,2,3', 'not_in:0'],
                'iglesia' => ['required', 'in:1,2,3', 'not_in:0'],
                'password' => ['required', 'string', 'min:8',],

            ]
        );

        if ($validacion->fails()) {
            return redirect('/admin/registro-usuario')
                ->withInput()
                ->withErrors($validacion);
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->id_nivel = $request->nivel;
        $user->id_iglesia = $request->iglesia;
        $user->save();

        return redirect('/admin/registro-usuario')->with('message', "Felicitaciones acabas de registrar al hermano  $request->name de manera correcta");
    }

    public function editarUsuario(User $user)
    {

        $iglesias = Iglesia::all();
        $niveles =  Nivel::all();
        return view('admin.editar-usuario', compact('iglesias', 'niveles', 'user'));
    }

    public function updateUsuarios(Request $request)
    {

        $validacion = Validator::make(
            $request->all(),
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255',],
                'nivel' => ['required', 'in:1,2,3', 'not_in:0'],
                'iglesia' => ['required', 'in:1,2,3', 'not_in:0'],
                'id' => ['required']
            ]
        );

        if ($validacion->fails()) {
            return redirect('/admin/' . $request->id . '/editar-usuario/')
                ->withInput()
                ->withErrors($validacion);
        }

        User::where('id', $request->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'id_nivel' => $request->nivel,
                'id_iglesia' => $request->iglesia
            ]);

        return redirect('/admin/bandeja-usuario')->with('message', "Felicitaciones acabas de editar los datos del hermano  $request->name de manera correcta");
    }

    public function eliminarUsuario($id)
    {

        return view('admin.bandeja-usuario');
    }
}