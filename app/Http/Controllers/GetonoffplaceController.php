<?php

namespace App\Http\Controllers;

use App\Models\Childname;
use App\Models\Getonoffplace;
use Illuminate\Http\Request;

class GetonoffplaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $places = Getonoffplace::orderBy('id', 'asc')->get();


        return view('editplace',['places' => $places] );
    }

    public function index_place($place_id)
    {
        $place = Getonoffplace::find($place_id);
        $children = Childname::with('Getonoffplaces')->where('place_id',$place_id)->get();
        $cnt_place = Getonoffplace::count();

        return view('listgeton-to-place',['place' => $place, 'children' => $children, 'cnt_place' => $cnt_place] );
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
    public function show(Getonoffplace $getonoffplace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Getonoffplace $getonoffplace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Getonoffplace $getonoffplace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Getonoffplace $getonoffplace)
    {
        //
    }
}
