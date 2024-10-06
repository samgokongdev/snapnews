<button {{ $attributes->merge([
        'class' => 'p-2 text-hitam font-bold text-xs hover:bg-white hover:border-2 hover:border-hitam rounded-md']) }}>
    {{ $slot }}
</button>
