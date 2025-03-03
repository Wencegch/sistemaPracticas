<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\User;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $companies = Company::all();
        return view('company.index', compact('companies'));
    }

    /**
     * Método para mostrar las empresas de un usuario
    */
    public function indexFiltrado($user_id){
        $user = User::find($user_id);
        $companies = $user->companies;
    return view('company.indexFiltrado', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $company = new Company();
        $company->name = $request->name;
        $company->cif = $request->cif;
        $company->address = $request->address;
        $company->tlf = $request->tlf;
        $company->contact_email = $request->contact_email;
        $company->save();
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $company = Company::find($id);
        return view('company.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('company.edit', ['company' => Company::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $company = Company::find($id);
        $company->name = $request->name;
        $company->cif = $request->cif;
        $company->address = $request->address;
        $company->tlf = $request->tlf;
        $company->contact_email = $request->contact_email;
        $company->save();
        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Company::destroy($id);
        return redirect()->route('company.index');
    }
}
