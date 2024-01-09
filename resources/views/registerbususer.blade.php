<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div id="upddiv" class="text-center hidden">
            <div class="text-3xl text-red-600 font-semibold">変更が確定しておりません!
            </div>
            <x-buttons.edit-button class="mr-6">　更新　</x-buttons.edit-button>
            <x-buttons.edit-button id="cancleBtn">更新キャンセル</x-buttons.edit-button>
        </div>

        <div class="inline-flex">
            <div class="bg-red-100 px-2 py-2 mx-1 ">
                <div>行き <span id="numTo">{{ count($children) }}</span>人/ {{ count($children) }}人</div>
                <div>帰り <span id="numFrom">{{ count($children) }}</span>人/ {{ count($children) }}人</div>
            </div>
        </div>
        <table>
            <tr>
                <th>
                    <x-frame.head-frame>バス利用有無</x-frame.head-frame>
                </th>
                <th>
                    <x-frame.head-frame>なまえ</x-frame.head-frame>
                </th>
                <th>
                    <x-frame.head-frame>誕生日</x-frame.head-frame>
                </th>
                <th>
                    <x-frame.head-frame>送迎場所</x-frame.head-frame>
                </th>
                {{-- <th>
                    <x-frame.head-frame>バス名</x-frame.head-frame>
                </th> --}}
            </tr>
            @foreach ($children as $child)
                <tr>
                    <td class="text-center">
                        {{-- <x-buttons.status-button cldid="{{ $child['id'] }}">行き/帰り</x-buttons.status-button> --}}
                        <button id="{{ 'changeButton'.$child['id'] }}" onclick="cngBtn({{ $child['id'] }})" class="w-24 bg-blue-500 text-white py-2 px-4 rounded-md">
                            行き/帰り
                        </button>
                    </td>
                    <td>
                        <x-frame.name-frame>{{ $child['child_name'] }}</x-frame.name-frame>
                    </td>
                    <td>
                        <x-frame.etc-frame>{{ \Carbon\Carbon::parse($child['birthday'])->format('Y/m/d') }}</x-frame.etc-frame>
                    </td>
                    <td>
                        <x-frame.etc-frame>{{ $child->getonoffplaces['place_name'] }}</x-frame.etc-frame>
                    </td>
                    {{-- <td>
                        <x-frame.etc-frame>バス1</x-frame.etc-frame>
                    </td> --}}
                </tr>
            @endforeach
        </table>
    </div>

    <script>

        // 配列にIDを格納する処理
        const childrenIds = [];
        @foreach ($children as $child)
            childrenIds.push({{ $child['id'] }});
        @endforeach

        // 更新キャンセルボタン
        document.getElementById('cancleBtn').addEventListener('click',()=>{
            window.location.href = "{{ url('/registerbususer') }}";
        })

        // バス利用確認ボタン
        function cngBtn(id) {
            // 変更ボタンのID取得
            const cngid  = document.getElementById("changeButton"+id);
            const nowtxt = cngid.innerText;     // 現在の文字を取得
            let   cngtxt = "";                  // 変更文字用
            let   bfCls  = "";                  // 前のクラス
            let   afCls  = "";                  // 追加するクラス

            // スウィッチ文
            switch (nowtxt) {
                case '行き/帰り':
                    cngtxt = 'なし';
                    bfCls  = "bg-blue-500";
                    afCls  = "bg-red-500";
                    break;
                case 'なし':
                    cngtxt = '行きのみ';
                    bfCls  = "bg-red-500";
                    afCls  = "bg-green-500";
                    break;
                case '行きのみ':
                    cngtxt = '帰りのみ';
                    bfCls  = "bg-green-500";
                    afCls  = "bg-yellow-500";
                    break;
                case '帰りのみ':
                    cngtxt = '行き/帰り';
                    bfCls  = "bg-yellow-500";
                    afCls  = "bg-blue-500";
                    break;
            }

            // テキストを変換
            cngid.innerText = cngtxt;
            // クラスを追加して削除
            cngid.classList.remove(bfCls);
            cngid.classList.add(afCls);
            // 変更確定divを表示
            document.getElementById("upddiv").classList.remove("hidden");

            // 行き帰りの人数確認関数
            cntNum();
        }

        // 行き帰りの人数確認関数
        function cntNum(){

            // 行きかえりカウント用変数
            let nTo   = 0;
            let nFrom = 0;

            // 行きかえりカウント
            for (let i = 0; i < childrenIds.length; i++) {
                let chk = document.getElementById("changeButton"+childrenIds[i]).innerText;
                if (chk == "行き/帰り" || chk == "行きのみ" ) {
                    nTo++;
                }
                if (chk == "行き/帰り" || chk == "帰りのみ" ) {
                    nFrom++;
                }
            }

            // 行きかえりカウントを代入
            document.getElementById("numTo").innerText   = nTo;
            document.getElementById("numFrom").innerText = nFrom;
        }

    </script>
    
</x-app-layout>