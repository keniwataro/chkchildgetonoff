<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <div class="text-3xl text-red-600 font-semibold">変更が確定しておりません!
            </div>
            <x-buttons.edit-button class="mr-6">　更新　</x-buttons.edit-button>
            <x-buttons.edit-button>更新キャンセル</x-buttons.edit-button>
        </div>

        <div class="inline-flex">
            <div class="bg-red-100 px-2 py-2 mx-1 ">
                <div>行き 7人/10人</div>
                <div>帰り 6人/10人</div>
            </div>
        </div>
        <table>
            <tr>
                <th>
                    <x-frame.head-frame>バス利用有無</x-frame.head-frame>
                </th>
                <th>
                    <x-frame.head-frame>なまえ</x-frame.head-frame>
                </th>
                <th>
                    <x-frame.head-frame>誕生日</x-frame.head-frame>
                </th>
                <th>
                    <x-frame.head-frame>送迎場所</x-frame.head-frame>
                </th>
                <th>
                    <x-frame.head-frame>バス名</x-frame.head-frame>
                </th>
            </tr>
            <tr>
                <td class="flex items-center ml-6">
                    <x-buttons.status-button>行き/帰り</x-buttons.status-button>
                </td>
                <td>
                    <x-frame.name-frame>にしだ　あかり</x-frame.name-frame>
                </td>
                <td>
                    <x-frame.etc-frame>2023/12/30</x-frame.etc-frame>
                </td>
                <td>
                    <x-frame.etc-frame>A地点</x-frame.etc-frame>
                </td>
                <td>
                    <x-frame.etc-frame>バス1</x-frame.etc-frame>
                </td>
            </tr>
        </table>
    </div>
</x-app-layout>