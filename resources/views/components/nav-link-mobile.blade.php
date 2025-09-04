<div>
    <a {{$attributes}}
        class="{{ $active ? 'bg-gray-900 text-amber-50' : 'text-gray-300 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">{{ $slot }}</a>
</div>