<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DepartementFormRequest;
use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('departement.index',['departement'=>Departement::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departement=new Departement();
        return view ('departement.forms',['departement'=>$departement]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartementFormRequest $request)
    {

       // dd($request->all());
        $departement=Departement::create($request->validated());

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departement $departement)
    {
        return view('departement.forms',['departement'=>$departement]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DepartementFormRequest $request,Departement $departement)
    {
        $departement->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
