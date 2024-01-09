<button id="{{ 'changeButton'.$cldid }}" class="bg-blue-500 text-white py-2 px-4 rounded-md">
    行き/帰り
</button>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
    // ボタンとテキストの要素を取得
    const changeButton = document.getElementById("{{ 'changeButton'.$cldid }}");

    // 現在のシンボルを格納する変数
    let currentSymbol = '行き/帰り';

    // ボタンがクリックされたときの処理
    changeButton.addEventListener('click', function () {
        // シンボルを変更
        switch (currentSymbol) {
            case '行き/帰り':
                currentSymbol = 'なし';
                break;
            case 'なし':
                currentSymbol = '行きのみ';
                break;
            case '行きのみ':
                currentSymbol = '帰りのみ';
                break;
                case '帰りのみ':
                currentSymbol = '行き/帰り';
                break;
            default:
                break;
        }

        // ボタンのテキストを変更
        changeButton.innerText = currentSymbol;

    });
});

    </script>