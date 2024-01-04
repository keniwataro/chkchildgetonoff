<x-layout.mobile>
    <div class="text-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-buttons.home-button id="/">ホーム</x-buttons.home-button>
        </div>
    </div>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center">
            <x-buttons.home-button class="mr-2">送迎場所</x-buttons.home-button>
            <x-buttons.changeedit-button>変更</x-buttons.changeedit-button>
        </div>
    </div>

    <div class="text-center">乗車10人/登録10人</div>


    <div class="flex">
        <div class="m-6 w-8 h-8 bg-red-500 rounded-full"></div>
        <div class="flex items-center">
            <p class="text-xl font-bold">にしだ　あかり</p>
        </div>
    </div>

    <script>
        document.getElementById('/').addEventListener('click',()=>{
            window.location.href = "{{ url('/') }}";
        })
    </script>
</x-layout.mobile>