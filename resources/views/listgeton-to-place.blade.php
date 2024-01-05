<x-layout.mobile>
    {{-- <div class="text-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-buttons.home-button id="/">ホーム</x-buttons.home-button>
            
        </div>
    </div> --}}
    <header class="flex justify-around pt-4 items-center text-center text-3xl font-bold">
        @if ($place['id'] == 1)
            <x-buttons.back-button>{{  url('listallgeton-to') }}</x-buttons.back-button>
        @else
            <x-buttons.back-button>{{  url('listgeton-to-place/'.((int)$place['id']-1)) }}</x-buttons.back-button>
        @endif
       
            {{ $place['place_name'] }}
        @if ($place['id'] < $cnt_place)
            <x-buttons.next-button>{{  url('listgeton-to-place/'.((int)$place['id']+1)) }}</x-buttons.next-button>
        @else 
            <x-buttons.blank-button></x-buttons.blank-button>
        @endif
    </header></br>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center">
            <x-buttons.home-button id="chkgeton" class="mr-2">乗車確認</x-buttons.home-button>
            <x-buttons.changeedit-button>変更</x-buttons.changeedit-button>
        </div>
    </div>

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
        document.getElementById('chkgeton').addEventListener('click',()=>{
            window.location.href = "{{ url('chkgeton-to/'.$place['id'].'/0')}}";
        })
    </script>
</x-layout.mobile>