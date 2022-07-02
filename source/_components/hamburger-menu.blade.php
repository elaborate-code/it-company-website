@props(['page', 'lang' => $page->currentPathLang()])

<aside x-data="{ visible: false }" x-cloak x-show="visible" x-transition x-on:open-hamburger.window="visible = true"
    x-on:close-hamburger.window="visible = false" x-on:click.outside="visible = false"
    {{ $attributes->merge(['class' => 'fixed z-10 top-0 right-0 h-screen w-[69vw] p-4 flex flex-col gap-y-8 bg-white-smoke text-bloodmyst-isle']) }}>

    <div class="flex justify-between">
        <x-nav-langs :page="$page" lang="{{ $lang }}" class="flex justify-start" />

        <div x-data x-on:click="$dispatch('close-hamburger')" class="w-8 h-8">
            <x-icons.x />
        </div>
    </div>

    <div class="flex-1 flex flex-col gap-4">

        @foreach ($page->routes as $route)
            <a href="{{ $page->lang_route($route->url) }}"
                class="block px-4 py-2 border border-bloodmyst-isle rounded-md hover:bg-bloodmyst-isle hover:text-white">
                {{ $route->name }}
            </a>
        @endforeach

    </div>

</aside>
