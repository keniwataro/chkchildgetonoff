<x-layout.mobile>
    <div class="text-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-buttons.home-button id="/">ホーム</x-buttons.home-button>
        </div>
    </div>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center">
            
            <x-buttons.home-button id="place" class="mr-2">送迎場所</x-buttons.home-button>
            <x-buttons.changeedit-button>変更</x-buttons.changeedit-button>
        </div>
    </div>



    {{-- <div class="text-center">乗車10人/登録10人</div> --}}
    <div class="text-center">総人数：{{ count($children) }}人</div>
    @foreach ($children as $item)
    <div class="flex">
        <div class="m-6 w-8 h-8 bg-red-500 rounded-full"></div>
        <div class="flex items-center">
            <p class="text-xl font-bold">{{$item['child_name']}}</p>
        </div>
    </div>        
    @endforeach


    <script>
        document.getElementById('/').addEventListener('click',()=>{
            window.location.href = "{{ url('/') }}";
        })

        document.getElementById('place').addEventListener('click',()=>{
            window.location.href = "{{ url('listgeton-to-place/1') }}";
        })
    </script>
</x-layout.mobile>