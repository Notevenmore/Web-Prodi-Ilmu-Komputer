@props(['routes', 'label'])
<li>
    <div class="group flex flex-col items-center text-sm xl:text-base">
        <a href="{{ route($routes) }}" class="group-hover:text-gray-700 text-black font-medium">{!! $label !!}</a>
        <div class="@if(Request::routeIs($routes)) w-full @else w-0 group-hover:w-3/4 duration-300 @endif rounded-xl bg-red-600 h-1"></div>
    </div>
</li>