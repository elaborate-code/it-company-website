@props(['project'])

<div class="w-[360px] h-[480px] py-8 px-1">
    <div
        class="relative flex flex-col justify-center items-center w-[300px] h-[400px] mx-auto p-2 bg-frozen-blue-100 border-frozen-blue-900 border-2 rounded-3xl">

        <h3
            class="absolute -top-5 -left-5 w-32 p-2 bg-inherit border-frozen-blue-900 text-frozen-blue-900 border-2 rounded-3xl text-2xl font-merriweather text-center">
            {{ $project->name }}
        </h3>

        <a href="https://eazyip.github.io/" target="__blank"
            class="block w-full mx-auto p-2 md:mx-auto hover:rotate-2 transition ease-in-out delay-75 duration-150">
            <img data-src="{{ $project->img }}" alt="Eazy IP Web app showcase mockup" srcset=""
                class="lazyload object-fill">
        </a>

        <p
            class="absolute -bottom-12 left-6 w-[300px] p-4 bg-frozen-blue-900 text-frozen-blue-100 rounded-3xl hover:text-white">
            {{ $project->desc }}
        </p>
    </div>
</div>
