<div {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-8 py-2 mx-1 text-xl bg-red-200 text-white font-semibold rounded-full dark:text-gray-800 uppercase tracking-widest transition ease-in-out duration-150']) }}>
    {{ $slot }}
</div>