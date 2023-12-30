<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 px-2 py-1 bg-yellow-400 text-white font-semibold rounded hover:bg-yellow-500 dark:text-gray-800 uppercase tracking-widest dark:hover:bg-white   dark:active:bg-gray-300    transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>