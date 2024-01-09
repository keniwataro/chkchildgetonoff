<?php

namespace App\Http\Controllers;

use App\Models\Childname;
use Illuminate\Http\Request;
use App\Models\Getonoffplace;
use Illuminate\Support\Facades\Validator;


class ChildnameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // childnameテーブルの情報を取得して園児登録画面を表示
    public function index()
    {
        $places     = Getonoffplace::get();
        $children   = Childname::with('Getonoffplaces')->get();
        return view('editchild',['children' => $children , 'places' => $places] );
    }

    // childnameテーブルの情報を取得して乗車園児一覧画面を表示
    public function index_mobile()
    {
        $children = Childname::with('Getonoffplaces')->get();
        return view('listallgeton-to',['children' => $children] );
    }

    // childnameテーブルの情報を取得して降車園児一覧画面を表示
    public function index_mobile2()
    {
        $children = Childname::with('Getonoffplaces')->get();
        return view('listallgetoff-to',['children' => $children] );
    }

    // childnameテーブルの情報を取得して降車園児確認画面を表示
    public function index_mobile3($child_order)
    {
        $children = Childname::get();
        return view('chkgetoff-to',['children' => $children,'child_order' => $child_order] );

    }

    // 指定された送迎場所の情報とその場所の園児の情報を取得して乗車確認画面を表示
    public function index_check($place_id,$child_order)
    {
        $place      = Getonoffplace::find($place_id);
        $children   = Childname::with('Getonoffplaces')->where('place_id',$place_id)->get();
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
        //バリデーション
        $validator = Validator::make($request->all(),[
            'child_name'   => ['required', 'string', 'max:255','unique:'.Childname::class],
            'adddate'   => 'required',
            'addplace'  => 'required'
        ]);

        //バリデーションエラー
        if($validator->fails()) {
            return redirect('editchild')
                ->withInput()
                ->withErrors($validator);
        }

        //Eloqunetモデル
        $child             = new Childname;
        $child->child_name = $request->child_name;
        $child->birthday   = $request->adddate;
        $child->place_id   = $request->addplace;
        $child->save();
        return redirect('editchild')->with('message','登録しました');
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
        $childname->delete();
        return redirect('editchild');
    }
}
