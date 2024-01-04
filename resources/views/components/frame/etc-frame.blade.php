<div {{ $attributes->merge(['type' => 'submit', 'class' => 'w-44 justify-center inline-flex items-center px-2 py-2 mx-1 text-base bg-red-200 text-white font-semibold rounded-full dark:text-gray-800 uppercase tracking-widest transition ease-in-out duration-150']) }}>
    {{ $slot }}
</div>