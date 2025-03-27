<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\InfoprodFormRequest;
use App\Models\Departement;
use App\Models\Infoprod;
use Illuminate\Http\Request;

class InfoprodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          return view('infoprod.index',['infoprod'=>Infoprod::all()]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $infoprod=new Infoprod();
        return view('infoprod.forms',['infoprod'=>$infoprod,
    'departement'=>Departement::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InfoprodFormRequest $request)
    {//dd($request->validated());
        $infoprod=Infoprod::create($request->validated());
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
    public function edit(Infoprod $infoprod)
    {
        return view('infoprod.forms',['infoprod'=>$infoprod,
    'departement'=>Departement::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Infoprod $infoprod,InfoprodFormRequest $request)
    {
        $infoprod->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
