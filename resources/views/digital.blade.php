@extends('layouts.app', ['title' => "Digital Brochure | 33 Croisette", 'robots' => 'index,follow'])

@section('content')

    <main id="content">

        <!-- header - image - slogan -->
        <header class="relative h-20 overflow-hidden flex items-center justify-center flex-col gap-12">

            <a href="{{ route('home') }}" class="absolute top-0 md:top-0 w-full z-30">
                <div class="flex gap-4 items-center justify-center">
                    <img id="logo33" class="w-16" src="{{ asset('images/logo-33-croisette.webp') }}" alt="logo 33 croisette">
                    <img id="logoMZ" class="w-16" src="{{ asset('images/logo-MZRE.webp') }}" alt="logo 33">
                </div>
            </a>

        </header>
        <!-- end header - image - slogan -->

        <section class="h-[calc(100vh-10rem)]">
            <iframe src="https://player.flipsnack.com?hash=OTdBRkY2NkQ3NUUreG1md25qcGQxag=="
                    width="100%"
                    height="100%"
                    seamless="seamless"
                    scrolling="no"
                    frameBorder="0"
                    allowFullScreen allow="autoplay; clipboard-read; clipboard-write"></iframe>
        </section>

    </main>
@endsection
