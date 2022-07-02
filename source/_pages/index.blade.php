@extends('_layouts.main')

@section('header')
    <header>

        <x-nav :page="$page" class="absolute top-0 w-full text-white" />

        <section name="hero section" class="h-[90vh] max-h-[800px] hero-bg sm:hero-bg-alt">

            {{-- center xy --}}
            <div class="container h-full mx-auto flex flex-col justify-center text-white">

                <div class="py-8 px-4 flex flex-col gap-y-2 sm:gap-y-4 sm:px-8 md:px-20 xl:px-48">

                    <h1 class="text-4xl font-yeseva-one text-center md:text-5xl lg:6xl xl:text-7xl" lang="en"
                        translate="no">
                        The ultimate <span class="text-bloodmyst-isle animate-pulse"> digitalisation </span> services
                        For the ultimate productivity
                    </h1>

                    <div class="w-32 h-1 mx-auto bg-frozen-blue-100 rounded-full"></div>

                    <p class="text-lg text-center sm:text-xl md:text-2xl md:px-20 lg:px-36">
                        {{ $page->__('Achieve more by adopting automated workflows and networking information between the various segments of your company') }}
                    </p>

                    <a href="#cta"
                        class="block w-fit mx-auto py-3 px-6 bg-white-smoke text-bloodmyst-isle-700 hover:bg-firecracker-salmon hover:shadow-inner  hover:text-nero text-lg font-bold rounded-sm">
                        {{ $page->__('Request a service') }}
                    </a>
                </div>

            </div>
        </section>
    </header>
@endsection

@section('body')
    <main>

        {{-- <section name="Clients and partners" class="bg-gray-100 h-24"> our partners/clients </section> --}}

        <section name="Who are we" class="sticky top-0 -z-10 p-8 bg-white-smoke md:p-12">

            <h2 class="mb-4 text-bloodmyst-isle text-4xl font-bold font-yeseva-one text-center md:mb-6">
                {{ $page->__('Who are we') }}
            </h2>

            <p class="w-full sm:w-96 mx-auto text-center">
                {{ $page->__('We are a team of passionate IT people, we mainly craft on-demand web APPs (CMS, ERP, CRM, IOT, E-Commerce ...) and websites. We also offer infrastructure upgrade services like setting up Windows/Linux server with its tools and optimize networks physically and logically.') }}
            </p>
        </section>

        <section name="Our services" class="bg-white">

            <div class="container mx-auto py-10 px-4 md:py-16 md:px-6">


                <h2 class="mb-12 text-nero text-4xl font-bold font-yeseva-one text-center">
                    {{ $page->__('Our services') }}
                </h2>

                @foreach ($page->services as $service)
                    <x-cards.service service-title="{{ $page->__($service->title) }}"
                        service-desc="{{ $page->__($service->desc) }}" service-img="{{ $service->img }}"
                        service-img-alt="{{ $service->imgAlt }}" />
                @endforeach
            </div>
        </section>

        <section name="CTA" id="cta" class="bg-bloodmyst-isle-900 py-10 px-4">
            <h2 class="mb-4 text-bloodmyst-isle text-4xl font-bold font-merriweather text-center">
                {{ $page->__('Are you interested in our services ?') }}
            </h2>

            <p class="mb-2 text-white text-center">
                {{ $page->__('Let us know your E-mail and phone number and we will reach out to you shortly') }}
            </p>

            {{-- https://formsubmit.co/ajax-documentation --}}
            <form action="https://formsubmit.co/ee12d2b34596e814d47702339907bd3e" method="POST">

                <input type="hidden" name="_subject" value="Elaborate Code contact message">
                <input type="hidden" name="_template" value="table">

                <input type="hidden" name="_captcha" value="false">
                <input type="text" name="_honey" style="display:none">
                <input type="hidden" name="_next" value="{{ $page->getUrl() }}">
                {{-- <input type="hidden" name="_autoresponse" value="your custom message"> --}}

                <div class="flex flex-col justify-center items-center md:flex-row gap-4 text-lg font-merriweather">
                    <input type="email" name="email" placeholder="E-mail" required
                        class="w-72 h-14 px-4 outline-none border-none rounded-sm">

                    <input type="tel" name="phone" placeholder="{{ $page->__('Phone number') }}"
                        class="w-56 h-14 px-4 outline-none border-none rounded-sm">

                    <button
                        class="h-14 w-40 bg-bloodmyst-isle-100 text-bloodmyst-isle-900 font-bold text-center rounded-sm shadow-sm hover:bg-firecracker-salmon hover:shadow-white-smoke">
                        {{ $page->__('Send') }}
                    </button>
                </div>
            </form>

            <a class="block mt-4 cursor-pointer text-firecracker-salmon-100 text-sm text-center underline"
                href="{{ $page->lang_route('/contact') }}">
                {{ $page->__('Or send us a detailed message') }}
            </a>
        </section>

        <section name="Featured project" class="py-8 bg-white">

            <h2 class="mb-6 px-4 md:px-6 text-nero text-4xl font-bold font-yeseva-one text-center">
                {{ $page->__('Our Featured applications') }}
            </h2>

            <div class="flex flex-wrap justify-center gap-6 container mx-auto lg:gap-12">

                @foreach ($page->projects as $project)
                    <x-cards.project project-name="{{ $project->name }}"
                        project-desc="{{ $page->__($project->desc) }}" project-img="{{ $project->img }}"
                        project-href="{{ $project->href }}" class="project-card-frozen-blue-theme" />
                @endforeach
            </div>

        </section>

    </main>
@endsection
