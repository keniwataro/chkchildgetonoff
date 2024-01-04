<x-layout.mobile>

    <header class="flex justify-start pt-4 pl-4">
        <x-buttons.back-button ></x-buttons.back-button>
    </header></br></br></br>

    <div class="h-36 text-center">
        <div class="text-3xl font-bold">みんなおりたよ！</div>
    </div>

        <div class="flex justify-center">
            <div class="btn font-bold text-3xl text-white">
                    一覧にもどる
            </div>
        </div>

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
</x-layout.mobile>