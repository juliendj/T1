<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PersonelFormRequest;
use App\Models\Personel;
use Illuminate\Http\Request;

class PersonelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("personel.index",['personel'=>Personel::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personel=new Personel();
        return view('personel.forms',['personel'=> $personel]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonelFormRequest $request)
    {
       // dd($request->all());
        $personel=Personel::create($request->validated());
        //$equipe=Equipe::create($request->validated());
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
    public function edit(Personel $personel)
    {
        return view('personel.forms',
        [
            'personel'=>$personel,

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonelFormRequest $request,Personel $personel)
    {
        $personel->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
