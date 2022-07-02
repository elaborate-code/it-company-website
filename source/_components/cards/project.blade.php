@props(['projectName', 'projectImg', 'projectDesc', 'projectHref'])

<div {{ $attributes->merge(['class' => 'group w-80 h-96 m-4 py-8 px-1 project-card']) }}>
    <div
        class="relative w-72 h-80 mx-auto pt-10 pb-28 px-2 bg-frozen-blue-100 text-frozen-blue-100 shadow-lg rounded-3xl hover:shadow-xl">

        <h3 class="absolute -top-5 -left-3 p-2 bg-gradient-radial rounded-r-3xl rounded-l-sm text-2xl font-merriweather text-center"
            translate="no">
            {{ $projectName }}
        </h3>

        <a href="{{ $projectHref }}" target="__blank"
            class="block w-full mx-auto p-2 md:mx-auto group-hover:rotate-2 transition ease-in-out delay-75 duration-150">
            <img data-src="{{ $projectImg }}" alt="Eazy IP Web app showcase mockup" srcset=""
                class="lazyload object-fill">
        </a>

        <p class="absolute -bottom-10 left-6 w-72 h-36 p-4 bg-inherit shadow-lg rounded-3xl group-hover:shadow-xl">
            {{ $projectDesc }}
        </p>
    </div>
</div>
