<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EquipeFormRequest;
use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("equipe.index",['equipe'=>Equipe::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipe=new Equipe();
        return view('equipe.forms',['equipe'=> $equipe]);
    }

    /**we
     * Store a newly created resource in storage.
     */
    public function store(EquipeFormRequest $request)
    {
       // dd('equipe');
        $equipe=Equipe::create($request->validated());
        return redirect()->route('equipe.equipe.index')->with('success','votre equipe a bien été ajouté');


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
    public function edit(Equipe $equipe)
    {
        return view('equipe.forms',
        [
            'equipe'=>$equipe,

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EquipeFormRequest $request,Equipe $equipe)
    {
        $equipe->update($request->validated());
        return redirect()->route('equipe.equipe.index')->with('success','votre equipe a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
