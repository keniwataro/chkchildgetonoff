<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-2 py-1 bg-red-400 text-white font-semibold rounded hover:bg-red-500']) }}>
    {{ $slot }}
</button>