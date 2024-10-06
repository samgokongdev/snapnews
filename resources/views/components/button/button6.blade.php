<button x-on:click="open = ! open" {{ $attributes->merge(['class' => 'p-1 border-hitam border-2 shadow-[2px_2px_0px_0px] shadow-hitam rounded-lg bg-merah text-white font-bold text-base hover:bg-red-700']) }}>
    {{ $slot }}
</button>
