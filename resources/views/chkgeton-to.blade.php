<x-layout.mobile>

    <header class="flex justify-around pt-4 items-center text-center text-3xl font-bold">
        <x-buttons.back-button ></x-buttons.back-button>
            {{ ($child_order +1).' / '.count($children) }}
            @if (($child_order +1) == count($children))
            <x-buttons.next-button>{{ url('chkgeton-to-last') }}</x-buttons.next-button>
            @else
            <x-buttons.next-button>{{ url('chkgeton-to/'.$children[0]['place_id'].'/'.($child_order +1)) }}</x-buttons.next-button>
            @endif
    </header></br>

    <div class="w-30 text-center">
        <x-buttons.geton-button getonoff="のる！">
            やあ！
        </x-buttons.geton-button>
    </div>

    <div class="absolute inset-x-0 bottom-0 h-36 text-center">
        <div class="text-3xl font-bold">{{ $children[$child_order]['child_name'] }}<span class="text-lg">さん</span></div>
    </div>
{{-- <script>
document.getElementById('nextbtn').addEventListener('click',()=>{   
    window.location.href = "{{ url('chkgeton-to/'.$children[0]['place_id'].'/'.($child_order +1)) }}";

});
</script>  --}}
</x-layout.mobile>