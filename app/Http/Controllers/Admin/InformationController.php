<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\InformationFormRequest;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          return view('information.index',['information'=>Information::all()]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $information=new Information();
        return view('information.forms',['information'=>$information]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InformationFormRequest $request)
    {//dd($request->validated());
        $information=Information::create($request->validated());
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
    public function edit(Information $information)
    {
        return view('information.forms',['information'=>$information]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Information $information,InformationFormRequest $request)
    {
        $information->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
