<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex justify-center box-border
    items-center w-11/12 sm:w-72 mt-2 px-2 py-2 mx-4 text-3xl bg-red-400 text-white font-semibold rounded hover:bg-red-500 dark:text-gray-800 uppercase tracking-widest dark:hover:bg-white transition ease-in-out duration-150']) }}>
{{ $slot }}
</button>