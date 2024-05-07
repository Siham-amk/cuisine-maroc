<?php

namespace App\Http\Controllers;

use App\Models\Cuisinier;
use Illuminate\Http\Request;

class CuisinierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('profil.index',["Cuisiniers"=>Cuisinier::all()]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function search()
    {
        //
        $ville = request()->input('ville');
        $Specialite = request()->input('Specialite');

        $cuisiniers = Cuisinier::where('ville','like',"%$ville%")
        ->orWhere('Specialite','like',"%$Specialite%")
        ->paginate(6);

        return view('profil.search',["Cuisiniers"=>$cuisiniers]);



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
