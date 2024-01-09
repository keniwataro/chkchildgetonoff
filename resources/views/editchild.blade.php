<x-app-layout>
    @if(count($errors) > 0)
        @foreach ($errors->all() as $error)
            <div class="text-red-500 bg-yellow-200 text-2xl">
                {{ $error }}
            </div>
        @endforeach
    @endif

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <header>
            <h2 class="text-2xl font-bold">園児を登録</h2>
            <form action="{{ url('editchild') }}" method="post" class="flex">
                @csrf
                <table>
                    <tr>
                        <td><x-frame.head-frame>なまえ</x-frame.head-frame></td>
                        <td><x-frame.head-frame>誕生日</x-frame.head-frame></td>
                        <td><x-frame.head-frame>送迎場所</x-frame.head-frame></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="child_name"></td>
                        <td class="text-center"><input type="date" name="adddate"></td>
                        <td class="text-center">
                            <select name="addplace" >
                                <option value="">選択してください</option>
                                @foreach ($places as $place)
                                    <option value="{{ $place->id }}">{{ $place->place_name }}</option>
                                @endforeach
                            </select>
                        </td>
                        {{-- <td><x-frame.name-frame>テスト太郎</x-frame.name-frame></td>
                        <td><x-frame.etc-frame>00000000</x-frame.etc-frame></td>
                        <td><x-frame.etc-frame>a地点</x-frame.etc-frame></td> --}}
                    </tr>
                </table>
                <div class="flex items-center ml-6">
                    <x-buttons.register-button>登録</x-buttons.register-button>
                </div>
            </form>
            
            {{-- ファイルの読み込み部分 --}}
            {{-- <div>ファイル読み込み</div>
            <div>
                <form action="#" method="post" enctype="multipart/form-data">
                    <label for="fileInput">ファイルを添付:</label>
                    <input type="file" id="fileInput" name="fileInput"> 
                    <input type="submit" value="読み込む">
                    <x-buttons.register-button>登録</x-buttons.register-button>
                </form>
            </div> --}}
        </header>

        <h2 class="text-2xl font-bold">園児一覧</h2>
        <form action="#" method="post">
            <table>
                <tr>
                    <th></th>
                    <td><x-frame.head-frame>なまえ</x-frame.head-frame></td>
                    <td><x-frame.head-frame>誕生日</x-frame.head-frame></td>
                    <td><x-frame.head-frame>送迎場所</x-frame.head-frame></td>
                    <th></th>
                    <th></th>
                </tr>

                @foreach ($children as $child)
                <tr >
                    <th><input type="checkbox"/></th>
                    <td id="name{{ $child['id'] }}"><x-frame.name-frame >{{ $child['child_name'] }}</x-frame.name-frame></td>
                    <td id="edtname{{ $child['id'] }}" class="hidden"><input type="text" value="{{ $child['child_name'] }}"></td>
                    <td><x-frame.etc-frame >{{ \Carbon\Carbon::parse($child['birthday'])->isoFormat('Y年M月D日') }}</x-frame.etc-frame></td>
                    <td><x-frame.etc-frame >{{ $child->getonoffplaces['place_name'] }}</x-frame.etc-frame></td>
                    <th style="width: 70px"><x-buttons.edit-button id="editbtn">編集</x-buttons.edit-button></th>
                    <form action="{{ url('editchild/'.$child['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <th><x-buttons.edit-button>削除</x-buttons.edit-button></th>
                    </form>
                </tr>
                @endforeach


                <style>
                    td{
                        width: 200px;
                        height: 50px;
                    }
                </style>

            </table>
        </form>
    </div>
</x-app-layout>