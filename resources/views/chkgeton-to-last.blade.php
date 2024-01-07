<x-layout.mobile>

    <header class="flex justify-start pt-4 pl-4">
        {{-- <x-buttons.back-button ></x-buttons.back-button> --}}
    </header></br></br></br>

    <div class="h-36 text-center">
        <div class="text-3xl font-bold">みんなのったよ！</div>
    </div>

    <button id="nextplace" class="mx-auto btn mb-4 font-bold text-3xl text-white">
            乗車園児一覧
    </button>
    {{-- 必要だったら復活 --}}
    {{-- <button class="mx-auto btn font-bold text-3xl text-white">
        一覧表示
    </button> --}}


    <style>
        .btn {
        z-index: 1;
        cursor: pointer;
        width: 240px;
        height: 100px;
        background: #ce89c8;
        border-radius: 16px;
        box-shadow: 0 10px 0 rgba(206, 137, 200, 0.2);
        transition: all 100ms;
        display: flex;
        justify-content: center;
        align-items: center;
        }
    </style>

<script>
    @if ($place_id == $cnt_place)
        document.getElementById('nextplace').addEventListener('click',()=>{
            window.location.href = "{{ url('/listallgetoff-to') }}";
        })

    @else
        document.getElementById('nextplace').addEventListener('click',()=>{
            window.location.href = "{{ url('listgeton-to-place/'.($place_id+1)) }}";
        })

    @endif

</script>
</x-layout.mobile>