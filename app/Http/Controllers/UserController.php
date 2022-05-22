<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use stdClass;


class UserController extends Controller
{

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->input(key:'nome');
        $user->email = $request->input(key:'email');
        $user->password = $request->input(key:'password');
        $user->save();
        return redirect('dashboard');
    }

    public function create(Request $request)
    {
        return view('cadastrar');
    }

    public function edite(Request $request)
    {
        $user = User::find($request->id);
        $usuario =[
            'id'=>$user->id,
            'nome' =>$user->name,
            'email' => $user->email,
            'password' => $user->password
        ];

        return view('editar', $usuario);

    }

    public function update(Request $request)
    {
            $user = User::findOrfail($request->id);
            $user->name = $request->input(key:'nome');
            $user->email = $request->input(key:'email');
            $user->password = $request->input(key:'password');
            $user->save();
            return redirect('dashboard');

    }
    public function delete($id)
    {
            $user = User::findOrfail($id);
            $user->delete();
            return redirect('dashboard');

    }
}
