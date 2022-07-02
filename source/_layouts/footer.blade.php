<footer class="bg-nero text-white-smoke" translate="no">

    <div class="py-4 px-2 bg-frozen-blue-900">

        <div class="flex flex-col gap-4 container mx-auto">

            <div class="flex flex-wrap justify-center items-center gap-4">
                <a href="mailto:{{ $page->main_email }}" class="flex items-center h-12">
                    {{ $page->main_email }}
                </a>
                <a href="tel:{{ $page->main_phone }}" class="flex items-center h-12">
                    {{ $page->main_phone }}
                </a>
            </div>

            <div class="basis-full flex flex-wrap justify-center items-center gap-4 md:gap-8">
                @if ($page->socials->linkedin)
                    <a aria-label="Our Linkedin page" href="{{ $page->socials->linkedin }}" target="__blank">
                        <x-icons.linkedin class="h-12 aspect-square" />
                    </a>
                @endif
                @if ($page->socials->twitter)
                    <a aria-label="Our Twitter page" href="{{ $page->socials->twitter }}" target="__blank">
                        <x-icons.twitter class="h-12 aspect-square" />
                    </a>
                @endif
                @if ($page->socials->github)
                    <a aria-label="Our Github page" href="{{ $page->socials->github }}" target="__blank">
                        <x-icons.github class="h-12 aspect-square" />
                    </a>
                @endif
                @if ($page->socials->instagram)
                    <a aria-label="Our Instagram page" href="{{ $page->socials->instagram }}" target="__blank">
                        <x-icons.instagram class="h-12 aspect-square" />
                    </a>
                @endif
                @if ($page->socials->youtube)
                    <a aria-label="Our Youtube page" href="{{ $page->socials->youtube }}" target="__blank">
                        <x-icons.youtube class="h-12 aspect-square" />
                    </a>
                @endif
                @if ($page->socials->facebook)
                    <a aria-label="Our Facebook page" href="{{ $page->socials->facebook }}" target="__blank">
                        <x-icons.facebook class="h-12 aspect-square" />
                    </a>
                @endif
            </div>

            <div class="w-full text-xs">
                <p class="text-center underline" lang="en">
                    Free assets attributions:
                </p>
                <ul class="flex justify-around flex-wrap gap-2 p-2 list-disc">
                    <li>
                        <a target="__blank" href='https://www.freepik.com/photos/cloud-backup'
                            class="block w-32 min-h-[48px] md:w-40">
                            Cloud backup photo created by rawpixel.com - www.freepik.com</a>
                    </li>
                    <li>
                        <a target="__blank" href='https://www.freepik.com/photos/plexus'
                            class="block w-32 min-h-[48px] md:w-40">
                            Plexus photo created by kjpargeter - www.freepik.com</a>
                    </li>
                    <li>
                        <a target="__blank" href='https://www.freepik.com/photos/it-people'
                            class="block w-32 min-h-[48px] md:w-40">
                            It people photo created by ArthurHidden - www.freepik.com</a>
                    </li>
                    <li>
                        <a target="__blank" href='https://www.freepik.com/photos/man-work'
                            class="block w-32 min-h-[48px] md:w-40">
                            Man work photo created by ArthurHidden - www.freepik.com</a>
                    </li>
                    <li>
                        <a target="__blank" href='https://www.freepik.com/photos/network-engineer'
                            class="block w-32 min-h-[48px] md:w-40">
                            Network engineer photo created by senivpetro - www.freepik.com</a>
                    </li>
                    <li>
                        <a target="__blank" href='https://www.freepik.com/psd/laptop-mobile'
                            class="block w-32 min-h-[48px] md:w-40">
                            Laptop mobile psd created by riandra - www.freepik.com</a>
                    </li>
                    <li>
                        <a target="__blank" href='https://www.freepik.com/psd/website-mockup'
                            class="block w-32 min-h-[48px] md:w-40">
                            Website mockup psd created by aleksandr_samochernyi - www.freepik.com</a>
                    </li>
                    <li>
                        <a target="__blank" href='https://www.freepik.com/psd/browser-mockup'
                            class="block w-32 min-h-[48px] md:w-40">
                            Browser mockup psd created by designwarrior - www.freepik.com</a>
                    </li>
                    <li>
                        <a href='https://www.freepik.com/photos/man-calling' class="block w-32 min-h-[48px] md:w-40">
                            Mancalling photo created by rawpixel.com - www.freepik.com</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="flex justify-between container mx-auto px-6 py-2 md:px-4">
        <div class="flex items-center text-white-smoke text-center">
            <p>
                Copyright &copy; {{ date('Y') }}
            </p>
        </div>

        <x-nav-langs :page="$page" class="basis-1/2 justify-end " />

    </div>

</footer>
