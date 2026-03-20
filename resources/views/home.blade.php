@extends('layouts.app', ['title' => "New Building Program in Cannes | 33 Croisette", 'robots' => 'index,follow'])

@section('content')

    <!--Main Content Area-->
    <main id="content">

        <!-- header - image - slogan -->
        <header class="relative h-svh md:h-[calc(100vh-40px)] overflow-hidden flex items-center justify-center flex-col gap-12">

            <div class="absolute inset-0 z-30 overflow-hidden">
                <iframe
                    class="video-cover"
                    src="https://player.vimeo.com/video/1175416957?h=5ef5b67012&loop=1&badge=0&autopause=0&player_id=0&app_id=58479"
                    frameborder="0"
                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    title="33 CROISETTE - CANNES">
                </iframe>
            </div>

            <!-- image bg -->
            <div class="relative h-svh">
                <img id="hero_nb" class="h-full md:h-auto w-full object-cover" src="{{ asset('images/banner-images/banner_nb.webp') }}" alt="New Build Program Cannes : 33 Croisette">
                <img id="hero_color" class="h-full w-full md:h-auto absolute top-0 left-0 object-cover" src="{{ asset('images/banner-images/banner_color.webp') }}" alt="New Build Program Cannes : 33 Croisette">
            </div>

            <!--Banner Content-->
            <div id="banner-content" class="absolute w-full md:w-1/2 px-4 text-gray-600 translate-y-1/5 md:translate-y-1/2">

                <h1 class="text-4xl md:text-5xl uppercase font-black">
                    <span id="intro" class="block">The new luxury</span>
                    <span id="intro2" class="block">Real Estate program</span>
                    <span id="intro3" class="block">in cannes</span>
                </h1>
                <p id="intro4" class="text-gold font-bold py-6 font-gotham">18 apartments and 2 penthouses for sale<br>
                    A unique experience
                    in the heart of the famous Croisette in Cannes
                </p>
                <!-- cta -->
                <a id="main_cta" href="#form" class="hover:bg-white hover:ring-2 hover:ring-gold hover:text-gold bg-gold rounded-md text-white mt-4 p-4 uppercase font-bold">Request Information</a>


            </div><!--End of Row-->

            <div id="cire" class="absolute mx-auto h-screen w-48 bottom-4">
                <img class="w-40 absolute bottom-0" src="{{ asset('images/cire-logo.png') }}" alt="">
            </div>

        </header>
        <!-- end header - image - slogan -->

        <!--Introduction-->
        <section id="about" class="scrollto">

            <div class="container mx-auto p-6 md:p-28 flex flex-col md:flex-row gap-4">

                <div class="w-full md:w-1/3">
                    <h2 class="text-base md:text-xl text-gray-600 pb-4 font-gotham font-bold">Cannes Croisette</h2>
                    <span class="text-2xl md:text-4xl text-gray-600 font-bold font-cinzel">A unique project on the<br> <span class="text-gold">French Riviera</span></span>
                </div>

                <div class="w-full md:w-2/3">
                    <!--Icon Block Description-->
                    <div class="text-justify text-gray-400 font-gotham">
                            <p class="">
                                the <span class="text-gold"><strong>33 Croisette</strong></span> will be the epitome of exceptional real estate on the Côte d'Azur.
                                Top-of-the-range services will be offered thanks to the use of noble materials
                                and sublime finishes in the construction and fitting-out.
                            </p>

                            <p class="text-justify pb-1">
                                Cannes, the emblematic city of the French Riviera,
                                is a destination where legend meets glamour. La
                                Croisette, the famous palm-lined promenade, is
                                the beating heart of this city renowned for its
                                film festival and prestigious events. It’s here that
                                the world’s top fashion and gastronomy brands
                                rub shoulders, attracting visitors from all over the
                                world in search of elegance and sophistication.
                            </p>
                            <p class="text-justify pb-1">
                                In the heart of this enchanting setting, on one of
                                the world’s most prestigious boulevards, stands
                                an exceptional real estate project: 33 Croisette.
                                A true symbol of luxury and refinement, this new
                                residence redefines the art of living in Cannes.
                            </p>
                        </div>
                </div>

            </div>

        </section>
        <!--End of Introduction-->

        <!-- parralax -->
        <section class="parralax" style="background-image: url('{{ asset('images/bg-croisette-parralax.webp') }}')">
        </section>
        <!-- end parralax -->

        <!-- slogan -->
        <section id="slogan" class="container py-20 mx-auto px-6 text-gray-600 text-4xl md:text-6xl font-bold font-cinzel">

            <div class="relative py-2">
                The most high-end
                <div class="rtl-mask mask1 bg-white flex absolute top-0 left-0 text-white origin-top py-2">
                    The most high-end
                </div>
            </div>

            <div class="relative">
                real estate development
                <div class="rtl-mask mask2 bg-white flex absolute top-0 left-0 text-white origin-top py-2">
                    real estate development
                </div>
            </div>

            <div class="relative">
                on the French Riviera
                <div class="rtl-mask mask3 bg-white flex absolute top-0 left-0 text-white origin-top">
                    on the French Riviera
                </div>
            </div>

        </section>
        <!-- end slogan -->

        <!-- swiper home -->
        <section class="relative my-4 px-2 h-1/2 md:h-fit">
            <!-- Slider main container -->
            <div class="swiper_exterior">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img class="w-full" src="{{ asset('images/swipers/cannes-croisette-2.webp') }}" alt="bd de la croisette">
                    </div>
                    <div class="swiper-slide">
                        <img class="w-full" src="{{ asset('images/swipers/cannes-croisette-3.webp') }}" alt="bd de la croisette">
                    </div>
                    <div class="swiper-slide">
                        <img class="w-full" src="{{ asset('images/swipers/cannes-croisette-4.webp') }}" alt="bd de la croisette">
                    </div>
                    <div class="swiper-slide">
                        <img class="w-full" src="{{ asset('images/swipers/cannes-croisette-5.webp') }}" alt="bd de la croisette">
                    </div>
                    <div class="swiper-slide">
                        <img class="w-full" src="{{ asset('images/swipers/cannes-croisette-6.webp') }}" alt="bd de la croisette">
                    </div>
                    <div class="swiper-slide">
                        <img class="w-full" src="{{ asset('images/swipers/cannes-croisette-7.webp') }}" alt="bd de la croisette">
                    </div>
                    <div class="swiper-slide">
                        <img class="w-full" src="{{ asset('images/swipers/cannes-croisette-8.webp') }}" alt="bd de la croisette">
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="flex gap-4 m-4">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>


            </div>
        </section>
        <!-- end swiper home -->

        <!-- why cannes -->
        <section class="container mx-auto py-24">

            <div class="flex flex-col md:flex-row justify-center items-center gap-12 px-6">

                <blockquote class="w-full md:w-1/2 text-right text-gray-600">
                    <q class="font-retro text-6xl">Cannes is like a window opening onto a sunny dream, where reality dissolves into beauty.</q>
                    <footer class="font-gotham text-xs">— André Gide - Famous French Writter</footer>
                </blockquote>

                <!--Content of the Right Side-->
                <div class="w-full md:w-1/2">

                    <div>
                        <h2 class="text-xl text-gray-600 pb-4 font-gotham font-bold">Why Choosing Cannes ?</h2>
                        <h3 class="text-4xl text-gray-600 font-bold font-cinzel">A landmark in <br>
                            <span class="text-gold">French art de vivre</span>
                        </h3>
                        <div class="text-justify text-gray-400 font-gotham pt-6">
                            <p>
                                La Croisette is one of the most prestigious avenues in the world,
                                offering an exceptional lifestyle with direct access to beaches,
                                luxury boutiques and gourmet restaurants.
                            </p>
                            <p>
                                Enjoy breathtaking views of the Mediterranean Sea,
                                the Lérins islands and the Estérel hills, with spectacular sunsets.
                                Living on the Croisette makes it easy to take part in
                                prestigious events such as the Cannes Film Festival, MIDEM and Cannes Lions.
                            </p>
                        </div>
                    </div>

                </div>
                <!--End Content Right Side-->
            </div>
        </section>
        <!-- end why cannes -->

        <!-- video -->
        <section class="h-auto md:h-[calc(100svh-40px)]">
            <div style="padding:60% 0 0 0;position:relative;">
                <iframe src="https://player.vimeo.com/video/1078590332?background=1&muted=1&autoplay=1&badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                        frameborder="0"
                        allow="autoplay; fullscreen;"
                        style="position:absolute;top:0;left:0;width:100%;height:100%;" title="33 Croisette">
                </iframe>
            </div>
            <script src="https://player.vimeo.com/api/player.js"></script>
        </section>
        <!-- end video -->

        <!-- terrace -->
        <section id="terrace" class="w-full h-[400px] md:h-[calc(100dvh-40px)]">

            <!-- container -->
            <div  class="h-fit md:h-full w-full flex mx-auto items-center justify-center">

                <!-- text -->
                <div class="absolute z-20 text-right px-6 md:px-0 pb-2 w-full md:w-1/2 text-gray-600 font-bold">
                    <span class="text-intro font-gotham">The Terrace</span>
                    <p class="text-intro text-2xl md:text-4xl font-cinzel">Offers an exceptional view</p>
                    <p class="text-intro font-gotham">The prime location of La Croisette providing an exceptional seafront<br> living environnement with the Mediterranean as a backdrop.</p>
                </div>
                <!-- end text -->

                <img class="img_right md:h-full w-full" loading="lazy" src="{{ asset('images/apartments/terrace-1.webp') }}" alt="tv room">

            </div>
            <!-- container -->

        </section>
        <!-- tv -->

        <!-- living space -->
        <section class="py-6 h-fit">
            <div id="text_left" class="pl-6 py-12 w-full md:w-1/2 text-left">
                <span class="font-gotham text-gray-400">The living room</span>
                <p class="text-2xl md:text-4xl text-gray-600 font-bold font-cinzel">An abundance of space</p>
                <p class="font-gotham text-gray-400">Each apartment has open, airy living spaces that open onto breathtaking views. These panoramas - whether of the infinite blue of the Mediterranean or the red rocks of the Esterel - are framed by three-metre-high ceilings, floor-to-ceiling windows and vast private terraces.</p>
            </div>

            <div id="living_room" class="flex">
                <img id="living_1" class="object-cover w-full" src="{{ asset('images/apartments/living-area-2.webp') }}" alt="living area 1">
                <img id="living_2" class="object-cover w-full" src="{{ asset('images/apartments/living-area-1.webp') }}" alt="living area 2">
            </div>
        </section>
        <!-- end living space -->

        <!-- tv -->
        <section id="tvroom" class="w-full h-[400px] md:h-[calc(100dvh-40px)]">

            <!-- container -->
            <div  class="h-full w-full flex mx-auto items-center justify-center">

                <!-- text -->
                <div class="absolute z-20 text-right px-6 md:px-0 pb-2 w-full md:w-1/2 text-white font-bold">
                    <span class="text-intro font-gotham">Tv Room</span>
                    <p class="text-intro text-2xl md:text-4xl font-cinzel">A haven of comfort</p>
                    <p class="text-intro font-gotham">Each apartment offers a cozy TV room, combining soft lighting, plush furnishings,<br> and advanced technology for an exceptional entertainment experience.</p>
                </div>
                <!-- end text -->

                <img class="img_right md:h-full w-full" loading="lazy" src="{{ asset('images/apartments/tv-saloon-1.webp') }}" alt="tv room">

            </div>
            <!-- container -->

        </section>
        <!-- tv -->

        <!-- bedrooms -->
        <section class="py-6">
            <div id="text_left" class="pl-6 py-12 w-full md:w-1/2 text-left">
                <span class="font-gotham text-gray-400">The Bedrooms</span>
                <p class="text-4xl text-gray-600 font-bold font-cinzel">Perfect isolation and comfort</p>
                <p class="font-gotham text-gray-400">The bedrooms offer perfect insulation and comfort, as well as magnificent views thanks to floor-to-ceiling windows. They go effortlessly from a Mediterranean getaway to a peaceful sleeping space. a peaceful sleeping space.</p>
            </div>

            <div id="bedrooms" class="w-full flex overflow-hidden">
                <img id="bedroom_1" class="object-cover w-full" src="{{ asset('images/apartments/bedroom-1.webp') }}" alt="bedroom 1">
                <img id="bedroom_2" class="object-cover w-full" src="{{ asset('images/apartments/bedroom-2.webp') }}" alt="bedroom 2">
            </div>
        </section>
        <!-- end bedrooms -->

        <!-- kitchen -->
        <section id="kitchen" class="w-full h-[400px] md:h-[calc(100dvh-40px)]">

            <!-- container -->
            <div class="h-full w-full flex mx-auto items-center justify-center">

                <!-- text -->
                <div class="absolute z-20 px-6 md:px-0 pb-2 w-full md:w-1/2 text-left text-white font-bold">
                    <span class="text-intro font-gotham">The Kitchen</span>
                    <p class="text-intro text-2xl md:text-4xl font-cinzel">A space for culinary inspiration</p>
                    <p class="text-intro font-gotham">Each kitchen is a refined, functional space with high-end finishes,<br> perfectly suited to a Mediterranean seaside lifestyle.</p>
                </div>
                <!-- end text -->

                <img class="img_right md:h-full w-full" loading="lazy" src="{{ asset('images/apartments/kitchen-1.webp') }}" alt="Kitchen">

            </div>
            <!-- end container -->

        </section>
        <!-- end kitchen -->

        <!-- text -->
        <section class="container mx-auto py-16">
            <div class="w-full md:w-1/2 mx-auto px-6">
                <h3 class="text-2xl md:text-4xl text-gray-600 font-cinzel font-bold">18 apartments, 2 penthouses<br>
                    <span class="text-gold">and luxury boutiques</span>
                </h3>
                <div class="text-justify text-gray-400 font-gotham pt-6">
                    <p>
                        33 Croisette offers a premium package with its two sumptuous
                        penthouses and eighteen exceptional apartments offering
                        breathtaking views over the Bay of Cannes, the lush palm trees of
                        the Croisette and the surrounding gardens.
                        Luxury boutiques on the ground floor enhance this unique living experience.
                    </p>
                </div>
            </div>
        </section>
        <!-- end text -->

        <!-- parralax -->
        <section id="parralax_2" class="py-24 flex flex-col items-center justify-center" style="background-image: url('{{ asset('images/apartments/balcony.webp') }}')">
            <div id="parralax_text" class="container mx-auto text-center text-white">
                <h4 class="text-3xl font-cinzel w-full uppercase text-white">Become the owner of a rare address in the heart of the Croisette</h4>
                <p>33 Croisette offers you exceptional flats with top-of-the-range amenities and privileged views, on one of the world's most prestigious avenues.</p>
                <p>call us on +33(0)4.93.39.7777</p>
            </div>
        </section>
        <!-- end parralax -->

        <!--brands -->
        <section id="testimonials" class="scrollto text-center">

            <div class="container mx-auto p-6 md:p-12">

                <div class="flex flex-col justify-center items-center mx-auto font-bold">
                    <h2 class="text-xl text-gray-400 font-gotham">feedback</h2>
                    <h3 class="text-4xl text-gray-600 font-cinzel">What they say about <br><span class="text-gold">the project</span></h3>
                </div>

                <!--Brand Testimonial-->
                <div id="brands" class="py-6">

                    <img class="w-32 py-2 mx-auto" src="{{ asset('images/Logo_MZCIRE_33.png') }}" id="logo MZRE" alt="Michael Zingraf Real Estate">

                    <!-- Testimonial MZRE -->
                    <blockquote class="mx-auto w-full md:w-2/3 flex flex-col justify-center">

                        <q class="font-gotham text-gray-400 text-center">Michael Zingraf, is proud to present this unique real estate project on the Croisette in Cannes,
                            where luxury, elegance and innovation meet to offer an unrivalled investment
                            and living opportunity in one of the world's most prestigious addresses.</q>

                        <footer class="flex flex-col gap-2 text-gold pt-3">
                            <div class="font-retro text-3xl">Sole Agent</div>
                            <div>Michaël Zingraf Real Estate</div>
                            <div class="text-gray-400 font-gotham">
                                <p>Exclusive affiliate of Christie's International Real Estate for the Provence Alpes Côte d'Azur area</p>
                                <p>7 rue Docteur Gérard Monod - 06400 Cannes
                                    - <a href="tel:+33(0)4.93.39.77.77">+33(0)4.93.39.77.77</a>
                                    - <a href="mailto:33croisette@michaelzingraf.com">33croisette@michaelzingraf.com</a>
                                </p>
                            </div>
                        </footer>

                    </blockquote>
                    <!-- End of Testimonial MZRE -->

                    <!-- Viguier & Iret -->
                    <div class="flex flex-col md:flex-row gap-6 justify-around py-6 text-gray-400 font-gotham">
                        <!-- Testimonial Viguier -->
                        <blockquote class="flex flex-col justify-between w-full md:w-1/3">
                            <img class="w-1/4 py-4 mx-auto" src="images/logo-viguier.png" alt="Viguier"/>
                            <q class="text-justify">The timeless elegance and modern luxury of this project on the Croisette in Cannes,
                                where every detail has been designed to offer an exceptional living experience,
                                harmoniously blending the natural beauty of the Mediterranean with exceptional architectural design.</q>
                            <footer class="text-gold font-black">VIGUIER Architect</footer>
                        </blockquote>
                        <!-- End of Testimonial Viguier -->

                        <!-- Testimonial Iret -->
                        <blockquote class="flex flex-col justify-between w-full md:w-1/3">
                            <img class="w-1/4 py-2 mx-auto" src="images/logo-iret-development.png" alt="Iret"/>
                            <q class="text-justify">Our property development on the Croisette in Cannes represents the ultimate in lifestyle,
                                combining a prestigious location, luxury amenities and exceptional contemporary
                                architecture to offer our residents a unique and exclusive living environment.</q>
                            <footer class="text-gold font-black">IRET Development</footer>
                        </blockquote>
                        <!-- End of Testimonial Iret -->
                    </div>
                    <!-- end Viguier & Iret -->
                </div>

            </div>

        </section>
        <!--End of brands -->

        <!--maps -->
        <section id="maps" class="scrollto clearfix">

            <div class="container mx-auto section-heading w-full md:w-1/3 p-6 pt-24 font-bold">
                <h4 class="text-xl text-gray-400 font-gotham pb-0">Map</h4>
                <h5 class="text-4xl text-gray-600 font-cinzel">Find the <span class="text-gold">33 Croisette</span></h5>
                <p class="font-gotham text-gray-400 text-justify">
                    Le 33 Croisette, an exceptional location in the heart of the famous boulevard de la Croisette,
                    facing the Mediterranean Sea. Discover a prestigious address offering direct access to fine sandy beaches,
                    luxury boutiques and renowned restaurants.
                </p>
            </div>

            <div id="map" class="w-full h-[500px]"></div>

        </section>
        <!--End of maps-->

        <!-- flats Tables-->
        <section id="pricing" class="secondary-color scrollto clearfix">

            <!-- title -->
            <div class="container mx-auto section-heading w-full md:w-1/3 p-6 pt-24">

                <div class="font-bold">
                    <h4 class="text-xl text-gray-400 font-gotham pb-0">Your Choice</h4>
                    <h5 class="text-4xl text-gray-600 font-cinzel">Select the flat of <span class="text-gold">your dreams</span></h5>
                </div>

            </div>
            <!-- end title -->

            <!-- list appart -->
            <div id="apartments" class="container mx-auto grid grid-cols-1 md:grid-cols-6 gap-4 p-6">
                @foreach($properties as $property)
                    @if($loop->index % 3 === 0)
                        <div class="col-span-1 md:col-span-6 p-0 font-cinzel text-xl text-gold font-black">
                            {{ config('floors.'.$property->floor) }} Floor
                        </div>
                    @endif
                    <a @if($property->floor == 8) id="penthouse" @endif class="p-0 @if($property->floor == 8) col-span-1 md:col-span-3 @else col-span-1 md:col-span-2 @endif" href="{{ route('property.show', ['property' => $property, 'slug' => \Illuminate\Support\Str::slug($property->title)]) }}">
                        <div class="h-full group relative rounded-md cursor-pointer overflow-hidden">
                            <img class="object-cover w-full h-full group-hover:scale-110 transition-all duration-200 delay-150 ease-in-out" src="{{ $property->picture->url }}" alt="{{ $property->title }}">
                            <div class="invisible -bottom-12 flex flex-col group-hover:bottom-0 group-hover:visible transition-all duration-200 delay-150 ease-in-out absolute w-full bg-white/90 text-gold p-4">
                                <p>{{ $property->title }}</p>
                                <div class="flex justify-between">
                                    <p class="text-xs"> rooms : <b>{{ $property->rooms }}</b> | bedrooms : <b>{{ $property->bedrooms }}</b> | area : <b>{{ $property->area }} .sqm</b></p>
                                    <p class="font-black text-xs">Price On Request</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

        </section>
        <!--End of flats Tables-->

        <!-- main form -->
        <section id="form">

            <div id="contact" class="scrollto p-6 md:p-12">

                <div class="relative container mx-auto section-heading w-full md:w-1/3">
                    <h4 class="text-xl text-gray-400 font-gotham pb-0">Request form</h4>
                    <h5 class="text-4xl text-gray-600 font-cinzel">Send us a <span class="text-gold">message</span></h5>
                    <p class="text-gray-400">if you would like more information about our new luxury real estate program</p>
                </div>

                <div class="w-full md:w-1/3 mx-auto">
                    @include('partials._form_request', ['source' => 'form_home_page'])
                </div>

                <img class="relative mx-auto pt-12 w-32" src="{{ asset('images/Logo_MZCIRE_33.png') }}" alt="logo michael zingraf real estate">
                <img class="relative mx-auto w-44 pt-6" src="{{ asset('images/christies-logo-or.png') }}" alt="logo Christie's International Real Estate">
            </div>
        </section>
    </main>
    <!--End Main Content Area-->
@endsection

@section('dedicated_js')
    <script type="module">
        document.addEventListener('DOMContentLoaded', function(){
            //set la timeline de gsap
            const tl = gsap.timeline();

            //animation of all items in header
            tl.fromTo("#hero_nb", {translateY:100, opacity: 0 }, { translateY:0, opacity: 1, duration: 3 })
                .fromTo('#logo33', { translateY:-40, opacity:0},{ translateY:0, opacity:1, duration:0.5})
                .fromTo('#logoMZ', { translateY:-40, opacity:0},{ translateY:0, opacity:1, duration:0.5}, "-=0.2")
                .fromTo('#intro', { x:100, opacity:0}, {x:0, opacity:1, duration:1})
                .fromTo('#intro2', { x:-100, opacity:0}, {x:0, opacity:1, duration:1}, '-=0.5')
                .fromTo('#intro3', { x:100, opacity:0}, {x:0, opacity:1, duration:1}, '-=0.5')
                .fromTo('#intro4', { y:100, opacity:0}, {y:0, opacity:1, duration:1})
                .fromTo('#hero_nb', { opacity:1 }, {opacity:0, duration:0.3} )
                .fromTo('#hero_color', { opacity:0}, {opacity:1, duration:0.2}, '-=0.3')
                .fromTo('#main_cta', { scale:1.2, y:-30, opacity:0}, { scale:1, y:0, opacity:1, duration:0.2})
                .fromTo('#cire', { y:100, opacity:0 }, { y:0, opacity:1, duration:1});

            //slogan
            let timelineSlogan = gsap.timeline({
                scrollTrigger: {
                    trigger: '#slogan',
                    pin: true, // pin the trigger element while active
                    start: 'top center', // when the top of the trigger hits the top of the viewport
                    end: '+=0', // end after scrolling 800px beyond the start
                    scrub: 5, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                    once:false,
                    snap: {
                        snapTo: 'labels', // snap to the closest label in the timeline
                        duration: { min: 2, max: 3 }, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
                        delay: 5, // wait 0.2 seconds from the last scroll event before doing the snapping
                        ease: 'power1.inOut' // the ease of the snap animation ("power3" by default)
                    }
                }
            });

            //slogan suite
            timelineSlogan.addLabel('start')
                .fromTo('#slogan .mask1', { x: 0, scaleX:1 },{ x:'100%', scaleX:0, duration:3, ease: "sine.out", })
                .fromTo('#slogan .mask2', { x: 0, scaleX:1 },{ x:'100%', scaleX:0, duration:3, ease: "sine.out", })
                .fromTo('#slogan .mask3', { x: 0, scaleX:1 },{ x:'100%', scaleX:0, duration:3, ease: "sine.out", });

            //terrace
            let terrace = gsap.timeline({
                scrollTrigger: {
                    normalize:true,
                    trigger: '#terrace',
                    pin: true, // pin the trigger element while active
                    start: 'top center', // when the top of the trigger hits the top of the viewport
                    end: '+=200', // end after scrolling 400px beyond the start
                    scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                    once:true,
                    toggleActions: 'play none none none',
                    snap: {
                        snapTo: 'labels', // snap to the closest label in the timeline
                        duration: { min: 1, max: 5 }, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
                        delay: 0.2, // wait 0.2 seconds from the last scroll event before doing the snapping
                        ease: 'power1.inOut' // the ease of the snap animation ("power3" by default)
                    }
                }
            });

            //view mov.
            terrace.addLabel('start')
                .fromTo('#terrace .img_left', { y:-400, opacity:0 },{ y:0, opacity:1, duration:3, ease: "sine.out", })
                .fromTo('#terrace .img_right', { x:-400, opacity:0 },{ x:0, opacity:1, duration:3, ease: "sine.out", })
                .fromTo('#terrace .text-intro', { translateX:-800, opacity:0 },{ translateX:0, opacity:1, duration:3, ease: "sine.out", stagger:2, }, '+=1');


            let living = gsap.timeline({
                scrollTrigger: {
                    trigger: '#living_room',
                    pin: true, // pin the trigger element while active
                    start: 'top top', // when the top of the trigger hits the top of the viewport
                    end: '+=800', // end after scrolling 800px beyond the start
                    scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                    once:false,
                    snap: {
                        snapTo: 'labels', // snap to the closest label in the timeline
                        duration: { min: 1, max: 5 }, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
                        delay: 0.2, // wait 0.2 seconds from the last scroll event before doing the snapping
                        ease: 'power1.inOut' // the ease of the snap animation ("power3" by default)
                    }
                }
            });

            living.addLabel('start')
                .fromTo('#living_room #living_2', {x:0}, {x:'-100%'});


            //tv room
            let tvroom = gsap.timeline({
                scrollTrigger: {
                    trigger: '#tvroom',
                    pin: true, // pin the trigger element while active
                    start: 'top center', // when the top of the trigger hits the top of the viewport
                    end: '+=100', // end after scrolling 800px beyond the start
                    scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                    once:true,
                    snap: {
                        snapTo: 'labels', // snap to the closest label in the timeline
                        duration: { min: 1, max: 5 }, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
                        delay: 0.2, // wait 0.2 seconds from the last scroll event before doing the snapping
                        ease: 'power1.inOut' // the ease of the snap animation ("power3" by default)
                    }
                }
            });

            //tv room mov.
            tvroom.addLabel('start')
                .fromTo('#tvroom .img_left', { y:-400, opacity:0 },{ y:0, opacity:1, duration:3, ease: "sine.out", })
                .fromTo('#tvroom .img_right', { x:-400, opacity:0 },{ x:0, opacity:1, duration:3, ease: "sine.out", })
                .fromTo('#tvroom .text-intro', { translateX:-800, opacity:0 },{ translateX:0, opacity:1, duration:3, ease: "sine.out", stagger:2, }, '+=1');


            let bedrooms = gsap.timeline({
                scrollTrigger: {
                    trigger: '#bedrooms',
                    pin: true, // pin the trigger element while active
                    start: 'top top', // when the top of the trigger hits the top of the viewport
                    end: '+=800', // end after scrolling 800px beyond the start
                    scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                    once:false,
                    snap: {
                        snapTo: 'labels', // snap to the closest label in the timeline
                        duration: { min: 1, max: 5 }, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
                        delay: 0.2, // wait 0.2 seconds from the last scroll event before doing the snapping
                        ease: 'power1.inOut' // the ease of the snap animation ("power3" by default)
                    }
                }
            });

            bedrooms.addLabel('start')
                .fromTo('#bedrooms #bedroom_2', {x:0}, {x:'-100%'});

            //kitchen
            let kitchen = gsap.timeline({
                scrollTrigger: {
                    trigger: '#kitchen',
                    pin: true, // pin the trigger element while active
                    start: 'top center', // when the top of the trigger hits the top of the viewport
                    end: '+=200', // end after scrolling 400px beyond the start
                    scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                    once:true,
                    snap: {
                        snapTo: 'labels', // snap to the closest label in the timeline
                        duration: { min: 1, max: 5 }, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
                        delay: 0.2, // wait 0.2 seconds from the last scroll event before doing the snapping
                        ease: 'power1.inOut' // the ease of the snap animation ("power3" by default)
                    }
                }
            });

            //kitchen mov.
            kitchen.addLabel('start')
                .fromTo('#kitchen .img_left', { y:400, opacity:0 },{ y:0, opacity:1, duration:3, ease: "sine.out", })
                .fromTo('#kitchen .img_right', { x:400, opacity:0 },{ x:0, opacity:1, duration:3, ease: "sine.out", })
                .fromTo('#kitchen .text-intro', { translateX:800, opacity:0 },{ translateX:0, opacity:1, duration:3, ease: "sine.out", stagger:2, }, '+=1');

            let parralax_2 = gsap.timeline({
                scrollTrigger:{
                    trigger:'#parralax_2',
                    pin:true,
                    start: 'top top', // when the top of the trigger hits the top of the viewport
                    end: '+=1200', // end after scrolling 400px beyond the start
                    scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                    once:false,
                    snap: {
                        snapTo: 'labels', // snap to the closest label in the timeline
                        duration: { min: 1, max: 5 }, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
                        delay: 0.2, // wait 0.2 seconds from the last scroll event before doing the snapping
                        ease: 'power1.inOut' // the ease of the snap animation ("power3" by default)
                    }
                }
            });

            parralax_2.fromTo('#parralax_text h4', {translateY:800, opacity:0}, {translateY:0, opacity:1});
            parralax_2.fromTo('#parralax_text p', {translateY:800, opacity:0}, {translateY:0, opacity:1});


            let product = gsap.timeline({
                scrollTrigger:{
                trigger:'#products',
                    pin:true,
                    start: 'top top', // when the top of the trigger hits the top of the viewport
                    end: '+=200', // end after scrolling 400px beyond the start
                    scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                    once:false,
                    snap: {
                    snapTo: 'labels', // snap to the closest label in the timeline
                        duration: { min: 1, max: 5 }, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
                    delay: 0.2, // wait 0.2 seconds from the last scroll event before doing the snapping
                        ease: 'power1.inOut' // the ease of the snap animation ("power3" by default)
                }
            }
            });

            product.fromTo('#products a', {y:100, opacity:0, ease:'power3.inOut'}, {y:0, opacity:1, stagger: 3});

            //swiper js
            const swiper = new Swiper('.swiper_exterior', {
                // Optional parameters
                direction: 'horizontal',
                loop: false,
                spaceBetween: 10,
                slidesPerView:3,
                fadeEffect: {
                    crossFade: true
                },
                breakpoints: {
                    // when window width is >= 480px
                    375: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    },
                    // when window width is >= 640px
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 10
                    }
                },
                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                // And if we need scrollbar
                scrollbar: {
                    el: '.swiper-scrollbar',
                    draggable: true,
                    hide: false
                },
            });
        });
    </script>
    <script>
        let maCarte = L.map('map', {
            scrollWheelZoom: false,
        }).setView([43.55057365795593, 7.022358178214604], 17);

        L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© 33 Croisette - Cannes'
        }).addTo(maCarte);

        const customIconMajestic = L.icon({
            iconUrl: '/images/logo-majestic-cannes.png', // chemin vers le logo
            iconSize: [64, 64],              // taille du logo (px)
            iconAnchor: [16, 32],            // point d’ancrage (bas-centre)
            shadowUrl: true,
        });

        const customIconPalais = L.icon({
            iconUrl: '/images/logo-palais-cannes.png', // chemin vers le logo
            iconSize: [64, 64],              // taille du logo (px)
            iconAnchor: [16, 32],            // point d’ancrage (bas-centre)
            shadowUrl: true,
        });

        const customIcon33croisette = L.icon({
            iconUrl: '/images/logo-mini-33.png', // chemin vers le logo
            iconSize: [64, 64],             // taille du logo (px)
            iconAnchor: [16, 32],            // point d’ancrage (bas-centre)
            shadowUrl: true,
        });

        const customIconCarlton = L.icon({
            iconUrl: '/images/logo-carlton-cannes.png', // chemin vers le logo
            iconSize: [64, 64],            // taille du logo (px)
            iconAnchor: [16, 32],            // point d’ancrage (bas-centre)
            shadowUrl: true,
        });

        const customIconMartinez = L.icon({
            iconUrl: '/images/logo-martinez-cannes.png', // chemin vers le logo
            iconSize: [64, 64],            // taille du logo (px)
            iconAnchor: [16, 32],            // point d’ancrage (bas-centre)
            shadowUrl: true,
        });

        const markers = [
            { coords: [43.55057, 7.02235], icon: customIcon33croisette },
            { coords: [43.54977, 7.02725], icon: customIconCarlton },
            { coords: [43.54789, 7.03069], icon: customIconMartinez },
            { coords: [43.55105, 7.01974], icon: customIconMajestic },
            { coords: [43.55081, 7.01816], icon: customIconPalais },
        ];

        markers.forEach(({ coords, icon }) => {
            L.marker(coords, { icon }).addTo(maCarte);
        });
    </script>
@endsection
