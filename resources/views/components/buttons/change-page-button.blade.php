<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-36 py-2 mx-1 text-3xl bg-red-400 text-white font-semibold rounded hover:bg-red-500 dark:text-gray-800 uppercase tracking-widest dark:hover:bg-white transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>