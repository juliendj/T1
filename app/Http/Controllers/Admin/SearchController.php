<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SearchFormRequest;
use App\Models\Departement;
use App\Models\Equipe;
use App\Models\Personel;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SearchFormRequest $request)
    {
        /* $query = Personel::query()->orderBy("created_at","desc");
        if($equipe= $request->validated('equipe')){
            $query=  $query->where('equipe_id','=',$equipe);
          } */
         $equip=Equipe::all();
          $departements=Departement::with('personels');
          
          if($request->validated('equipe')){
            $test=$request->validated('equipe');
           
            $departement=  $departements->where('personels.equipe_id',$request->validated('equipe'))->get();
         // dd($personel);
        }
          else{
            $test='null';
            $departement=$departements->get();

          }
          
        /*   if($departement= $request->validated('departement')){
            $query=  $query->where('departement_id','=',$departement);
          } */

         // dd($request->validated());
          return view('home.home_search',
          [
              'departement'=>$departement,
              //'personel'=>$personel,
              //'equipe'=>$equipe,
              'equip'=>$equip,
              'test'=>$test
              
              //'equipe'=>$equipe,
              
      
      
          ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
