<li class="{{$active === true ? 'bg-kuning shadow-neo1' : ''}}
    cursor-pointer flex items-center font-bold text-base text-hitam px-4 py-4 w-full rounded-full border-2 border-transparent
    hover:border-2 hover:border-hitam hover:shadow-[2px_2px_0px_0px] hover:shadow-hitam
    ">
    {{$slot}}
    <span class="ms-2">{{$listTittle}}</span>
</li>