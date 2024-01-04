<x-app-layout>

    <header>
        <div>送迎場所を編集</div>
        <div class="flex">
            <div>場所名</div>
            <input type="text">
            <x-buttons.register-button>登録</x-buttons.register-button>
        </div>
        {{-- ファイルの読み込み部分 --}}
        <div>ファイル読み込み</div>
        <div>
            <form action="#" method="post" enctype="multipart/form-data">
                <label for="fileInput">ファイルを添付:</label>
                <input type="file" id="fileInput" name="fileInput">
                <input type="submit" value="読み込む">
            </form>
        </div>
    </header>

    @foreach ($places as $place)
    <div class="ml-4">
        {{ $place['id'] }}<x-frame.editplace-frame>{{ $place['place_name'] }}</x-frame.editplace-frame>
    </div>
    @endforeach

</x-app-layout>