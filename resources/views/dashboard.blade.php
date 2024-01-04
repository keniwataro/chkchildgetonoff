<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    {{-- <div class="py-2">
        <div class=" sm:hidden  max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-center p-6 text-gray-900 dark:text-gray-100">
                    バス利用確認
                </div>
            </div>
        </div>
    </div> --}}

    <div class="hidden sm:block py-2 mt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" text-center p-2 text-gray-900 dark:text-gray-100">
                    <x-buttons.change-page-button>バス利用確認</x-buttons.change-page-button>
                </div>
            </div>
        </div>
    </div>

    <div class="py-2 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pt-16 sm:pt-0 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-center text-xl">
                    乗降車確認
                </div>
                <div class=" text-center p-2 text-gray-900 dark:text-gray-100">
                    <x-buttons.change-page-button class="mt-8 sm:mt-2">行き</x-buttons.change-page-button>
                    <x-buttons.change-page-button class="mt-20 sm:mt-2 mb-16 sm:mb-0">帰り</x-buttons.change-page-button>
                </div>
            </div>
        </div>
    </div>

    <div class="py-2 hidden sm:block">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-center text-xl">
                    登録
                </div>
                <div class=" text-center p-2 text-gray-900 dark:text-gray-100">
                    <x-buttons.change-page-button>園児</x-buttons.change-page-button>
                    <x-buttons.change-page-button>送迎場所</x-buttons.change-page-button>
                </div>
            </div>
        </div>
    </div>





    {{-- <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-center p-6 text-gray-900 dark:text-gray-100">
                    帰り
                </div>
            </div>
        </div>
    </div> --}}

</x-app-layout>
