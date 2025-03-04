<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use App\Models\Rol;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Crea un array para mandar companies y rols a la vista
        $companies = Company::all();
        $rols = Rol::all();

        return view('user.create', compact('companies', 'rols'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->surname1 = $request->surname1;
        $user->surname2 = $request->surname2;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        $user->companies()->attach($request->company_id, ['rol_id' => $request->rol_id]);
        return redirect()->route('user.index');
    }

    //Método para añadir una empresa a un usuario
    public function addCompanyToUser($user_id, $company_id){
        $user = User::find($user_id);
        $user->companies()->attach($company_id);
        return redirect()->route('user.show', $user_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('user.edit', ['user' => User::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->surname1 = $request->surname1;
        $user->surname2 = $request->surname2;
        $user->tlf = $request->tlf;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()->route('user.index');
    }
}
