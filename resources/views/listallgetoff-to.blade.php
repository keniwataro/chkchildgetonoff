<x-layout.mobile>

    <header class="text-center text-3xl font-bold">
    </header></br>

    <div class="text-center mt-5">
        <x-buttons.chkgetoff-button id="chkgetoff-to">降車確認</x-buttons.chkgetoff-button>
    </div>

    {{-- <div class="text-center text-xl font-bold my-4
    ">
        総人数：１０人
    </div> --}}
    <div class="text-center">総人数：{{ count($children) }}人</div>
    @foreach ($children as $item)
    <div class="flex">
        <div class="m-6 w-8 h-8 bg-red-500 rounded-full"></div>
        <div class="flex items-center">
            <p class="text-xl font-bold">{{$item['child_name']}}</p>
        </div>
    </div>        
    @endforeach


    <div class="flex">
            <div class="m-6 w-8 h-8 bg-red-500 rounded-full"></div>
        <div class="flex items-center" >
            <p class="text-xl font-bold">にしだ　あかり</p>
        </div>
    </div>

    <script>
        document.getElementById('chkgetoff-to').addEventListener('click',()=>{
            window.location.href = "{{ url('chkgetoff-to/0') }}";
        })
    </script>


</x-layout.mobile>