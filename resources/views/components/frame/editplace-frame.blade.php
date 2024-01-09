<div class="inline-block w-11/12">
    <div class="w-full flex justify-between p-4 items-center bg-gray-200 text-black rounded-lg border-2 border-white">
        <div>{{ $slot }}</div>
        <div class="flex">
            <div class="mr-1">
                <form action="{{ url('editplace') }}" method="GET">
                    @csrf
                    <x-buttons.edit-button>編集</x-buttons.edit-button>
                </form>
            </div>

            <div>
                <form action="{{ url('editplace/'.$edtid) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-buttons.edit-button>削除</x-buttons.edit-button>
                </form>
            </div>
        </div>
    </div>
</div>