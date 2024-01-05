<?php

namespace App\Http\Controllers;

use App\Models\Childname;
use Illuminate\Http\Request;
use App\Models\Getonoffplace;


class ChildnameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $children = Childname::with('Getonoffplaces')->get();
        return view('editchild',['children' => $children] );
    }

    public function index_mobile()
    {
        $children = Childname::with('Getonoffplaces')->get();
        return view('listallgeton-to',['children' => $children] );
    }

    public function index_check($place_id,$child_order)
    {
        $place = Getonoffplace::find($place_id);
        $children = Childname::with('Getonoffplaces')->where('place_id',$place_id)->get();
        return view('chkgeton-to',['children' => $children,'place' => $place,'child_order' => $child_order] );
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
    public function show(Childname $childname)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Childname $childname)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Childname $childname)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Childname $childname)
    {
        //
    }
}
