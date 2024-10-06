<button {{ $attributes->merge(['class' => 'px-2 py-2 border-hitam border-2 shadow-[2px_2px_0px_0px] shadow-hitam rounded-full bg-kuning text-hitam font-bold text-xs hover:bg-yellow-500']) }}>
    {{ $slot }}
</button>
