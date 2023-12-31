<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <header>
            <h2 class="text-2xl font-bold">園児を登録</h2>
            <form action="#" method="post" class="flex">
                <table>
                    <tr>
                        <th><x-frame.head-frame>なまえ</x-frame.head-frame></th>
                        <th><x-frame.head-frame>誕生日</x-frame.head-frame></th>
                        <th><x-frame.head-frame>送迎場所</x-frame.head-frame></th>
                    </tr>
                    <tr>
                        <td><x-frame.name-frame>テスト太郎</x-frame.name-frame></td>
                        <td><x-frame.etc-frame>00000000</x-frame.etc-frame></td>
                        <td><x-frame.etc-frame>a地点</x-frame.etc-frame></td>
                    </tr>
                </table>
                <div class="flex items-center ml-6">
                    <x-buttons.register-button>登録</x-buttons.register-button>
                </div>
            </form>
            
            {{-- ファイルの読み込み部分 --}}
            <div>ファイル読み込み</div>
            <div>
                <form action="#" method="post" enctype="multipart/form-data">
                    <label for="fileInput">ファイルを添付:</label>
                    <input type="file" id="fileInput" name="fileInput"> 
                    <input type="submit" value="読み込む">
                    <x-buttons.register-button>登録</x-buttons.register-button>
                </form>
            </div>
        </header>

        <h2 class="text-2xl font-bold">園児一覧</h2>
        <form action="#" method="post">
            <table>
                <tr>
                    <th></th>
                    <th><x-frame.head-frame>なまえ</x-frame.head-frame></th>
                    <th><x-frame.head-frame>誕生日</x-frame.head-frame></th>
                    <th><x-frame.head-frame>送迎場所</x-frame.head-frame></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td><x-frame.name-frame>にしだ　あかり</x-frame.name-frame></td>
                    <td><x-frame.etc-frame>2023/12/30</x-frame.etc-frame></td>
                    <td><x-frame.etc-frame>A地点</x-frame.etc-frame></td>
                    <td><x-buttons.edit-button>編集</x-buttons.edit-button></td>
                    <td><x-buttons.edit-button>削除</x-buttons.edit-button></td>
                </tr>
            </table>
        </form>
    </div>
</x-app-layout>