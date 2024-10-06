<button {{ $attributes->merge(['class' => 'px-4 py-2 border-hitam border-4 shadow-[3px_3px_0px_0px] shadow-hitam rounded-full bg-merah text-white font-bold text-base hover:bg-red-700']) }}>
    {{ $slot }}
</button>
