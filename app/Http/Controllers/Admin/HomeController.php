<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Departement;
use App\Models\Equipe;
use App\Models\Infoprod;
use App\Models\Information;
use App\Models\Personel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $departement=Departement::with('infoprods')->get();
        $personel=Personel::orderBy('created_at','desc');
        $equipe=Equipe::orderBy('created_at','desc');
        $information=Information::orderBy('created_at','desc');
        $infoprod=Infoprod::with('departement')->get();
        //$comments = Post::find()->comments;
        //$posts = Post::with('comments')->get();
        /* $info = Departement::find('id')->infoprod; // Replace '1' with the actual ID you want to retrieve
$info = Departement::find(1)->infoprods()
->where('id', 'equal','de'); */
        
 //dd($departement); 
        return view('home.accueille',
    [
        'departement'=>$departement,
        'personel'=>$personel,
        'equipe'=>$equipe,
        'information'=>$information,
        'infoprod'=>$infoprod


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
