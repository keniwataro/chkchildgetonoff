<?php

namespace App\Http\Controllers;

use App\Models\Childname;
use App\Models\Getonoffplace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GetonoffplaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // 送迎場所テーブルからIDの昇順で取得して送迎場所編集画面を表示
    public function index()
    {
        $places = Getonoffplace::orderBy('id', 'asc')->get();

        return view('editplace',['places' => $places] );
    }

    // 送迎場所テーブルと園児テーブルから情報を取得して地点の乗車園児一覧画面を表示
    public function index_place($place_id)
    {
        $place      = Getonoffplace::find($place_id);
        $children   = Childname::with('Getonoffplaces')->where('place_id',$place_id)->get();
        $cnt_place  = Getonoffplace::count();

        return view('listgeton-to-place',['place' => $place, 'children' => $children, 'cnt_place' => $cnt_place] );
    }
    

    // 送迎場所の数を取得して、全員乗った後の画面を表示
    public function nomore_place($place_id)
    {
        $cnt_place = Getonoffplace::count();

        return view('chkgeton-to-last',['place_id' => $place_id,'cnt_place' => $cnt_place]);

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
            'addplace'=> 'required |max:30'
        ]);

        //バリデーションエラー
        if($validator->fails()) {
            return redirect('editplace')
                ->withInput()
                ->withErrors($validator);
        }

        //Eloqunetモデル
        $place             = new Getonoffplace;
        $place->place_name = $request->addplace;
        $place->save();
        return redirect('editplace')->with('message','登録しました');

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
        $getonoffplace->delete();
        return redirect('editplace');
    }
}
