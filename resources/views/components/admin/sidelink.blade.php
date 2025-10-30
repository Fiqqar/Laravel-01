@props(['active' => false])

<div>
    <a {{ $attributes }}
        class="{{ $active ? 'bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-white' : 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }} flex items-center p-2 text-base font-medium rounded-lg group transition">
        {{ $slot }}
    </a>
</div>