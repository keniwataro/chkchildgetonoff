<?php

namespace App\Http\Controllers;

use App\Models\Checkuser;
use Illuminate\Http\Request;
use App\Models\Childname;
use App\Models\Getonoffplace;


class CheckuserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $children = Childname::with('Getonoffplaces')->get();
        return view('registerbususer',['children' => $children] );
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
    public function show(Checkuser $checkuser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Checkuser $checkuser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Checkuser $checkuser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Checkuser $checkuser)
    {
        //
    }
}
