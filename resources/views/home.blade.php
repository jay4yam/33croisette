@extends('layouts.app', ['title' => "New Building Program in Cannes | 33 Croisette", 'robots' => 'index,follow'])

@section('content')

    <!--Main Content Area-->
    <main id="content">

        <!-- header - image - slogan -->
        <header class="hero-luxury relative h-svh md:h-[calc(100vh-40px)] overflow-hidden" x-data="{ videoOpen: false }" @keydown.escape.window="videoOpen = false">

            <div class="hero-media absolute inset-0 overflow-hidden">
                <iframe
                    class="video-cover"
                    src="https://player.vimeo.com/video/1175416957?h=5ef5b67012&background=1&autoplay=1&muted=1&loop=1&badge=0&autopause=0&player_id=0&app_id=58479"
                    frameborder="0"
                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    title="33 CROISETTE - CANNES">
                </iframe>
            </div>

            <!-- image bg -->
            <div class="hero-stills absolute inset-0">
                <img id="hero_nb" class="h-full w-full object-cover" src="{{ asset('images/banner-images/banner_nb.webp') }}" alt="New Build Program Cannes : 33 Croisette">
                <img id="hero_color" class="h-full w-full absolute top-0 left-0 object-cover" src="{{ asset('images/banner-images/banner_color.webp') }}" alt="New Build Program Cannes : 33 Croisette">
            </div>

            <!--Banner Content-->
            <div class="hero-shade absolute inset-0"></div>

            <div id="banner-content" class="hero-content absolute">

                <img class="hero-mark" src="{{ asset('images/logo-33-croisette.webp') }}" alt="33 Croisette">

                <div class="hero-kicker">Cannes Croisette</div>

                <h1 class="hero-title uppercase">
                    <span id="intro" class="block">The new luxury</span>
                    <span id="intro2" class="block">Real Estate program</span>
                    <span id="intro3" class="block">in cannes</span>
                </h1>
                <p id="intro4" class="hero-lede">18 apartments and 2 penthouses for sale<br>
                    A rare address in the heart of the Croisette.
                </p>
                <!-- cta -->
                <div class="hero-actions">
                    <a id="main_cta" href="#form" class="hero-cta">Request Information</a>
                    <button type="button" class="hero-video-trigger" @click="videoOpen = true">Watch the film</button>
                </div>


            </div><!--End of Row-->

            <div id="cire" class="hero-cire absolute">
                <img src="{{ asset('images/cire-logo.png') }}" alt="">
            </div>

            <div
                class="hero-video-modal"
                x-cloak
                x-show="videoOpen"
                x-transition.opacity
                role="dialog"
                aria-modal="true"
                aria-label="33 Croisette film"
            >
                <button type="button" class="hero-video-close" aria-label="Close video" @click="videoOpen = false">Close</button>
                <template x-if="videoOpen">
                    <iframe
                        src="https://player.vimeo.com/video/1175416957?h=5ef5b67012&autoplay=1&title=0&byline=0&portrait=0"
                        allow="autoplay; fullscreen; picture-in-picture"
                        allowfullscreen
                        title="33 CROISETTE - CANNES">
                    </iframe>
                </template>
            </div>

        </header>
        <!-- end header - image - slogan -->

        <!--Introduction-->
        <section id="about" class="about-luxury scrollto">

            <div class="about-inner container mx-auto">

                <div class="about-heading">
                    <span class="about-index">01</span>
                    <h2>Cannes Croisette</h2>
                    <p>A unique address on the<br> <span>French Riviera</span></p>
                </div>

                <div class="about-copy">
                    <!--Icon Block Description-->
                    <div>
                            <p class="about-lead">
                                <span>33 Croisette</span> embodies exceptional real estate on the Côte d'Azur, bringing noble materials, meticulous finishes and contemporary comfort to one of Cannes' most coveted addresses.
                            </p>

                            <p>
                                Cannes, the emblematic city of the French Riviera,
                                is a destination where legend meets glamour. La
                                Croisette, the famous palm-lined promenade, is
                                the beating heart of this city renowned for its
                                film festival and prestigious events. It’s here that
                                the world’s top fashion and gastronomy brands
                                rub shoulders, attracting visitors from all over the
                                world in search of elegance and sophistication.
                            </p>
                            <p>
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
        <section class="parralax parralax-luxury" style="background-image: url('{{ asset('images/bg-croisette-parralax.webp') }}')">
            <div class="parralax-content">
                <span>La Croisette</span>
                <p>Between Mediterranean light and Riviera legend.</p>
            </div>
        </section>
        <!-- end parralax -->

        <!-- slogan -->
        <section id="slogan" class="slogan-luxury">

            <div class="slogan-kicker">A rare collection</div>

            <div class="slogan-line relative">
                The most high-end
                <div class="rtl-mask mask1">
                    The most high-end
                </div>
            </div>

            <div class="slogan-line relative">
                real estate development
                <div class="rtl-mask mask2">
                    real estate development
                </div>
            </div>

            <div class="slogan-line relative">
                on the French Riviera
                <div class="rtl-mask mask3">
                    on the French Riviera
                </div>
            </div>

            <p class="slogan-note">18 apartments, 2 penthouses and luxury boutiques<br> at 33 Croisette.</p>

        </section>
        <!-- end slogan -->

        <!-- swiper home -->
        <section class="gallery-luxury">
            <div class="gallery-heading">
                <span>Exterior perspectives</span>
                <h2>A contemporary landmark on La Croisette</h2>
            </div>

            <!-- Slider main container -->
            <div class="swiper_exterior">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img src="{{ asset('images/swipers/cannes-croisette-2.webp') }}" alt="bd de la croisette">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/swipers/cannes-croisette-3.webp') }}" alt="bd de la croisette">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/swipers/cannes-croisette-4.webp') }}" alt="bd de la croisette">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/swipers/cannes-croisette-5.webp') }}" alt="bd de la croisette">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/swipers/cannes-croisette-6.webp') }}" alt="bd de la croisette">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/swipers/cannes-croisette-7.webp') }}" alt="bd de la croisette">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/swipers/cannes-croisette-8.webp') }}" alt="bd de la croisette">
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="gallery-controls">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>


            </div>
        </section>
        <!-- end swiper home -->

        <!-- why cannes -->
        <section class="why-cannes-luxury">

            <div class="why-cannes-inner">

                <blockquote class="why-cannes-quote">
                    <q>Cannes is like a window opening onto a sunny dream, where reality dissolves into beauty.</q>
                    <footer>Andre Gide, French writer</footer>
                </blockquote>

                <!--Content of the Right Side-->
                <div class="why-cannes-copy">

                    <div>
                        <span class="why-cannes-kicker">Why Cannes</span>
                        <h3>A landmark in <br>
                            <span>French art de vivre</span>
                        </h3>
                        <div class="why-cannes-text">
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
        <section class="video-luxury">
            <div class="video-heading">
                <p>The residence</p>
                <h2>A cinematic glimpse of<br><span class="text-gold">33 Croisette</span></h2>
            </div>

            <div class="video-frame">
                <iframe src="https://player.vimeo.com/video/1186930902?background=1&muted=1&autoplay=1&loop=1&badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                        frameborder="0"
                        allow="autoplay; fullscreen;"
                        title="33 Croisette">
                </iframe>
            </div>
            <script src="https://player.vimeo.com/api/player.js"></script>
        </section>
        <!-- end video -->

        <!-- terrace -->
        <section id="terrace" class="terrace-luxury">

            <!-- container -->
            <div class="terrace-stage">

                <!-- text -->
                <div class="terrace-copy">
                    <span class="text-intro terrace-kicker">The Terrace</span>
                    <p class="text-intro terrace-title">An exceptional Mediterranean outlook</p>
                    <p class="text-intro terrace-text">The prime location on La Croisette offers an exceptional seafront living environment, with the Mediterranean as a luminous backdrop.</p>
                </div>
                <!-- end text -->

                <img class="img_right terrace-image" loading="lazy" src="{{ asset('images/apartments/terrace-1.webp') }}" alt="Terrace with sea view">

            </div>
            <!-- container -->

        </section>
        <!-- tv -->

        <!-- living space -->
        <section id="living" class="living-luxury">
            <div class="living-intro">
                <span class="living-kicker">The Living Room</span>
                <h2>An abundance of space</h2>
                <p>Each apartment has open, airy living spaces that open onto breathtaking views. These panoramas, whether of the infinite blue of the Mediterranean or the red rocks of the Esterel, are framed by three-metre-high ceilings, floor-to-ceiling windows and vast private terraces.</p>
            </div>

            <div id="living_room" class="living-stage">
                <figure class="living-panel living-panel-main">
                    <img id="living_1" src="{{ asset('images/apartments/living-area-2.webp') }}" alt="Living area with sea view">
                </figure>
                <figure class="living-panel living-panel-reveal">
                    <img id="living_2" src="{{ asset('images/apartments/living-area-1.webp') }}" alt="Living area interior perspective">
                    <span class="living-panel-veil" aria-hidden="true"></span>
                    <figcaption class="living-panel-caption">
                        <span>Generous proportions</span>
                        <p>Expansive salons extend toward the Mediterranean, where full-height glazing frames the sea as part of the interior experience.</p>
                    </figcaption>
                </figure>
            </div>
        </section>
        <!-- end living space -->

        <!-- tv -->
        <section id="tvroom" class="tvroom-luxury">

            <!-- container -->
            <div class="tvroom-inner">

                <!-- text -->
                <div class="tvroom-copy">
                    <span class="text-intro tvroom-kicker">TV Room</span>
                    <h2 class="text-intro">A private haven of comfort</h2>
                    <p class="text-intro">Each apartment offers a cozy TV room, combining soft lighting, plush furnishings and discreet technology for an exceptional entertainment experience.</p>
                </div>
                <!-- end text -->

                <figure class="tvroom-media">
                    <img class="img_right" loading="lazy" src="{{ asset('images/apartments/tv-saloon-1.webp') }}" alt="Private TV room">
                </figure>

            </div>
            <!-- container -->

        </section>
        <!-- tv -->

        <!-- kitchen -->
        <section id="kitchen" class="kitchen-luxury">

            <!-- container -->
            <div class="kitchen-inner">

                <figure class="kitchen-media">
                    <img class="img_right" loading="lazy" src="{{ asset('images/apartments/kitchen-1.webp') }}" alt="Kitchen">
                </figure>

                <!-- text -->
                <div class="kitchen-copy">
                    <span class="text-intro kitchen-kicker">The Kitchen</span>
                    <h2 class="text-intro">A space for culinary inspiration</h2>
                    <p class="text-intro">Each kitchen is a refined, functional space with high-end finishes, perfectly suited to a Mediterranean seaside lifestyle.</p>
                </div>
                <!-- end text -->

            </div>
            <!-- end container -->

        </section>
        <!-- end kitchen -->

        <!-- master suite -->
        <section id="bedrooms" class="master-luxury">
            <div class="master-stage">
                <figure class="master-image master-image-main">
                    <img id="bedroom_1" src="{{ asset('images/apartments/bedroom-1.webp') }}" alt="Master bedroom facing the Mediterranean">
                </figure>

                <figure class="master-image master-image-reveal">
                    <img id="bedroom_2" src="{{ asset('images/apartments/bedroom-2.webp') }}" alt="Master suite opening toward the terrace">
                </figure>

                <div class="master-copy">
                    <span class="text-intro master-kicker">The Master Suite</span>
                    <h2 class="text-intro">Wake up to the blue of the Mediterranean</h2>
                    <p class="text-intro">A private retreat where the bedroom opens toward the terrace, framing morning light, sea views and the quiet privilege of life on La Croisette.</p>
                </div>
            </div>
        </section>
        <!-- end master suite -->

        <!-- rare address -->
        <section id="parralax_2" class="rare-address">
            <div id="parralax_text" class="rare-address-inner">
                <div class="rare-address-copy">
                    <span class="text-intro rare-address-kicker">A rare address</span>
                    <h3 class="text-intro">18 apartments,<br> 2 penthouses and luxury boutiques</h3>
                    <p class="text-intro">
                        33 Croisette offers a premium collection of exceptional apartments and sumptuous penthouses, with privileged views over the Bay of Cannes, the palm trees of La Croisette and the surrounding gardens.
                    </p>
                    <a class="text-intro rare-address-cta" href="#form">Request Information</a>
                </div>

                <figure class="rare-address-media">
                    <img src="{{ asset('images/apartments/balcony.webp') }}" alt="Private balcony overlooking Cannes">
                    <figcaption>Become the owner of a rare address in the heart of La Croisette</figcaption>
                </figure>
            </div>
        </section>
        <!-- end rare address -->

        <!-- flats Tables-->
        <section id="pricing" class="apartments-luxury scrollto">
            @php
                $propertiesByFloor = $properties->groupBy('floor')->sortKeysDesc();
                $floorGuides = [
                    8 => ['y' => 448, 'hitY' => 380, 'hitH' => 210],
                    7 => ['y' => 667, 'hitY' => 590, 'hitH' => 140],
                    6 => ['y' => 789, 'hitY' => 730, 'hitH' => 115],
                    5 => ['y' => 900, 'hitY' => 845, 'hitH' => 110],
                    4 => ['y' => 1011, 'hitY' => 955, 'hitH' => 111],
                    3 => ['y' => 1105, 'hitY' => 1060, 'hitH' => 80],
                    2 => ['y' => 1168, 'hitY' => 1140, 'hitH' => 60],
                ];
                $residenceZones = [
                    8 => [
                        ['x' => 268, 'y' => 380, 'w' => 728.5, 'h' => 210, 'labelX' => 632.25, 'labelY' => 456],
                        ['x' => 996.5, 'y' => 380, 'w' => 728.5, 'h' => 210, 'labelX' => 1360.75, 'labelY' => 456],
                    ],
                    7 => [
                        ['x' => 268, 'y' => 590, 'w' => 485.67, 'h' => 140, 'labelX' => 510.83, 'labelY' => 675],
                        ['x' => 753.67, 'y' => 590, 'w' => 485.67, 'h' => 140, 'labelX' => 996.5, 'labelY' => 675],
                        ['x' => 1239.33, 'y' => 590, 'w' => 485.67, 'h' => 140, 'labelX' => 1482.17, 'labelY' => 675],
                    ],
                    6 => [
                        ['x' => 268, 'y' => 730, 'w' => 485.67, 'h' => 115, 'labelX' => 510.83, 'labelY' => 797],
                        ['x' => 753.67, 'y' => 730, 'w' => 485.67, 'h' => 115, 'labelX' => 996.5, 'labelY' => 797],
                        ['x' => 1239.33, 'y' => 730, 'w' => 485.67, 'h' => 115, 'labelX' => 1482.17, 'labelY' => 797],
                    ],
                    5 => [
                        ['x' => 268, 'y' => 845, 'w' => 485.67, 'h' => 110, 'labelX' => 510.83, 'labelY' => 908],
                        ['x' => 753.67, 'y' => 845, 'w' => 485.67, 'h' => 110, 'labelX' => 996.5, 'labelY' => 908],
                        ['x' => 1239.33, 'y' => 845, 'w' => 485.67, 'h' => 110, 'labelX' => 1482.17, 'labelY' => 908],
                    ],
                    4 => [
                        ['x' => 268, 'y' => 955, 'w' => 485.67, 'h' => 111, 'labelX' => 510.83, 'labelY' => 1019],
                        ['x' => 753.67, 'y' => 955, 'w' => 485.67, 'h' => 111, 'labelX' => 996.5, 'labelY' => 1019],
                        ['x' => 1239.33, 'y' => 955, 'w' => 485.67, 'h' => 111, 'labelX' => 1482.17, 'labelY' => 1019],
                    ],
                    3 => [
                        ['x' => 268, 'y' => 1060, 'w' => 485.67, 'h' => 80, 'labelX' => 510.83, 'labelY' => 1113],
                        ['x' => 753.67, 'y' => 1060, 'w' => 485.67, 'h' => 80, 'labelX' => 996.5, 'labelY' => 1113],
                        ['x' => 1239.33, 'y' => 1060, 'w' => 485.67, 'h' => 80, 'labelX' => 1482.17, 'labelY' => 1113],
                    ],
                    2 => [
                        ['x' => 268, 'y' => 1140, 'w' => 485.67, 'h' => 60, 'labelX' => 510.83, 'labelY' => 1176],
                        ['x' => 753.67, 'y' => 1140, 'w' => 485.67, 'h' => 60, 'labelX' => 996.5, 'labelY' => 1176],
                        ['x' => 1239.33, 'y' => 1140, 'w' => 485.67, 'h' => 60, 'labelX' => 1482.17, 'labelY' => 1176],
                    ],
                ];
            @endphp

            <div class="apartments-inner">
                <div class="apartments-heading">
                    <div>
                        <span>Your Choice</span>
                        <h2>Select the apartment of your dreams</h2>
                    </div>
                    <p>33 Croisette offers a premium collection of eighteen exceptional apartments and two sumptuous penthouses, with privileged views over the Bay of Cannes, the palm trees of La Croisette and the surrounding gardens.</p>
                </div>

                <div id="apartments" class="apartments-showcase">
                    <figure class="apartments-elevation">
                        <img src="{{ asset('images/apartments/building-facade.jpg') }}" alt="33 Croisette facade with residences">
                        <svg class="apartments-elevation-map" viewBox="0 0 2000 1828" role="group" aria-label="Building elevation, residences from the second to the eighth floor">
                            <line class="apartments-floor-line" x1="215" y1="448" x2="215" y2="1168" />

                            @foreach($floorGuides as $floor => $guide)
                                <rect class="apartments-floor-veil" data-floor="{{ $floor }}" x="268" y="{{ $guide['hitY'] }}" width="1457" height="{{ $guide['hitH'] }}"></rect>
                            @endforeach

                            @foreach($floorGuides as $floor => $guide)
                                <g class="apartments-floor-guide" role="button" tabindex="0" data-floor="{{ $floor }}" aria-pressed="false" aria-label="{{ $floor }}th floor">
                                    <rect x="120" y="{{ $guide['hitY'] }}" width="130" height="{{ $guide['hitH'] }}"></rect>
                                    <circle cx="215" cy="{{ $guide['y'] }}" r="6"></circle>
                                    <text x="190" y="{{ $guide['y'] + 13 }}" text-anchor="end">{{ $floor }}</text>
                                </g>
                            @endforeach

                            @foreach($propertiesByFloor as $floor => $floorProperties)
                                @foreach($floorProperties->values() as $property)
                                    @php
                                        $zone = $residenceZones[$floor][$loop->index] ?? null;
                                        $propertyUrl = route('property.show', ['property' => $property, 'slug' => \Illuminate\Support\Str::slug($property->title)]);
                                    @endphp
                                    @if($zone)
                                        <g class="apartment-zone" role="button" tabindex="0" data-residence="{{ $property->id }}" data-floor="{{ $property->floor }}" data-title="{{ $property->title }}" data-rooms="{{ $property->rooms }}" data-bedrooms="{{ $property->bedrooms }}" data-area="{{ $property->area }}" data-url="{{ $propertyUrl }}" aria-pressed="false" aria-label="{{ $property->title }}, {{ config('floors.'.$property->floor) }} floor, {{ $property->area }} sqm">
                                            <rect class="apartment-zone-hit" x="{{ $zone['x'] }}" y="{{ $zone['y'] }}" width="{{ $zone['w'] }}" height="{{ $zone['h'] }}"></rect>
                                            <rect class="apartment-zone-fill" x="{{ $zone['x'] }}" y="{{ $zone['y'] }}" width="{{ $zone['w'] }}" height="{{ $zone['h'] }}"></rect>
                                            <rect class="apartment-zone-border" x="{{ $zone['x'] + 6 }}" y="{{ $zone['y'] + 6 }}" width="{{ $zone['w'] - 12 }}" height="{{ $zone['h'] - 12 }}"></rect>
                                            <rect class="apartment-zone-label-bg" x="{{ $zone['labelX'] - 42 }}" y="{{ $zone['labelY'] - 30 }}" width="84" height="44" rx="22"></rect>
                                            <text class="apartment-zone-label" x="{{ $zone['labelX'] }}" y="{{ $zone['labelY'] }}" text-anchor="middle">{{ $property->title }}</text>
                                        </g>
                                    @endif
                                @endforeach
                            @endforeach
                        </svg>
                        <figcaption>Architect's rendering, non-contractual. Residences from the second floor, duplex penthouses on the eighth.</figcaption>
                    </figure>

                    <aside class="apartments-selector" aria-label="Available residences">
                        <div class="apartments-active-panel" aria-live="polite">
                            <span>Twenty residences</span>
                            <h3>Choose a floor, then a residence</h3>
                            <p>Three apartments per floor from the second to the seventh, lettered A to C. Two duplex penthouses, 8A and 8B, on the eighth. Every residence faces the sea.</p>
                        </div>

                        <div class="apartments-selector-intro">
                            <span>Twenty residences</span>
                            <h3>Choose a floor, then a residence</h3>
                            <p>Three apartments per floor from the second to the seventh, lettered A to C. Two duplex penthouses, 8A and 8B, on the eighth.</p>
                        </div>

                        <div class="apartments-floor-list">
                            @foreach($propertiesByFloor as $floor => $floorProperties)
                                <div class="apartments-floor" data-floor="{{ $floor }}">
                                    <div class="apartments-floor-heading">
                                        <span>{{ config('floors.'.$floor) }} Floor</span>
                                        <em>{{ $floorProperties->count() }} residences</em>
                                    </div>
                                    <div class="apartments-residences">
                                        @foreach($floorProperties as $property)
                                            <a @if($property->floor == 8) id="penthouse" @endif class="apartment-residence" data-residence="{{ $property->id }}" data-floor="{{ $property->floor }}" data-title="{{ $property->title }}" data-rooms="{{ $property->rooms }}" data-bedrooms="{{ $property->bedrooms }}" data-area="{{ $property->area }}" href="{{ route('property.show', ['property' => $property, 'slug' => \Illuminate\Support\Str::slug($property->title)]) }}">
                                                <strong>{{ $property->title }}</strong>
                                                <span>{{ $property->rooms }} rooms</span>
                                                <span>{{ $property->bedrooms }} bedrooms</span>
                                                <span>{{ $property->area }} sqm</span>
                                                <em>Price on request</em>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <!--End of flats Tables-->



        <!--brands -->
        <section id="testimonials" class="testimonials-luxury scrollto">
            <div class="testimonials-inner">
                <div class="testimonials-heading">
                    <p>Signatures</p>
                    <h2>The trusted names behind<br><span class="text-gold">33 Croisette</span> </h2>
                </div>

                <div id="brands" class="testimonials-grid">
                    <blockquote class="testimonial-feature">
                        <img src="{{ asset('images/Logo_MZCIRE_33.png') }}" id="logo MZRE" alt="Michael Zingraf Real Estate">
                        <q>Michael Zingraf is proud to present this unique real estate project on the Croisette in Cannes, where luxury, elegance and innovation meet to offer an unrivalled investment and living opportunity in one of the world's most prestigious addresses.</q>
                        <footer>
                            <span>Sole Agent</span>
                            <strong>Michael Zingraf Real Estate</strong>
                            <p>Exclusive affiliate of Christie's International Real Estate for the Provence Alpes Côte d'Azur area</p>
                            <p>
                                7 rue Docteur Gerard Monod - 06400 Cannes<br>
                                <a href="tel:+33(0)4.93.39.77.77">+33(0)4.93.39.77.77</a>
                                <a href="mailto:33croisette@michaelzingraf.com">33croisette@michaelzingraf.com</a>
                            </p>
                        </footer>
                    </blockquote>

                    <div class="testimonial-partners">
                        <blockquote class="testimonial-card">
                            <img src="images/logo-viguier.png" alt="Viguier">
                            <q>The timeless elegance and modern luxury of this project on the Croisette in Cannes, where every detail has been designed to offer an exceptional living experience.</q>
                            <footer>VIGUIER Architect</footer>
                        </blockquote>

                        <blockquote class="testimonial-card">
                            <img src="images/logo-iret-development.png" alt="Iret">
                            <q>A prestigious location, luxury amenities and exceptional contemporary architecture to offer residents a unique and exclusive living environment.</q>
                            <footer>IRET Development</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>
        <!--End of brands -->

        <!--maps -->
        <section id="maps" class="maps-luxury scrollto">
            <div class="maps-inner">
                <div class="maps-heading">
                    <span>Find the 33 Croisette</span>
                    <h2>A few steps from the Majestic, the Carlton and the Martinez</h2>
                    <p>
                        An exceptional location in the heart of the famous boulevard de la Croisette, facing the Mediterranean Sea, with direct access to beaches, luxury boutiques and renowned restaurants.
                    </p>
                </div>

                <div class="maps-layout">
                    <ol class="maps-landmarks" aria-label="Nearby landmarks">
                        <li>
                            <button type="button" class="map-landmark-button is-active" data-lat="43.55057" data-lng="7.02235" data-zoom="17">
                                <span>33</span>
                                <strong>33 Croisette</strong>
                                <em>Residence</em>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="map-landmark-button" data-lat="43.55105" data-lng="7.01974" data-zoom="17">
                                <span>01</span>
                                <strong>Hotel Majestic</strong>
                                <em>Nearby</em>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="map-landmark-button" data-lat="43.54977" data-lng="7.02725" data-zoom="17">
                                <span>02</span>
                                <strong>Hotel Carlton</strong>
                                <em>Nearby</em>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="map-landmark-button" data-lat="43.54789" data-lng="7.03069" data-zoom="17">
                                <span>03</span>
                                <strong>Hotel Martinez</strong>
                                <em>Nearby</em>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="map-landmark-button" data-lat="43.55081" data-lng="7.01816" data-zoom="17">
                                <span>04</span>
                                <strong>Palais des Festivals</strong>
                                <em>8 min walk</em>
                            </button>
                        </li>
                    </ol>

                    <div class="maps-card">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </section>
        <!--End of maps-->

        <!-- main form -->
        <section id="form" class="form-luxury">
            <div class="form-luxury-bg">
                <img src="{{ asset('images/exterior/croisette-aerial.jpg') }}" alt="">
            </div>
            <div class="form-luxury-shade" aria-hidden="true"></div>

            <div id="contact" class="form-luxury-inner scrollto">
                <div class="form-luxury-copy">
                    <span>Request form</span>
                    <h2>Send us a message</h2>
                    <p>Plans, specifications, prices and brochure: tell us what you would like to receive.</p>

                    <div class="form-agent">
                        <span>Sole Agent</span>
                        <p>Michael Zingraf Real Estate, Christie's International Real Estate</p>
                        <p>Or call <a href="tel:+33(0)4.93.39.77.77">+33(0)4.93.39.77.77</a></p>
                    </div>

                    <div class="form-logos">
                        <img src="{{ asset('images/Logo_MZCIRE_33.png') }}" alt="logo michael zingraf real estate">
                        <img src="{{ asset('images/christies-logo-or.png') }}" alt="logo Christie's International Real Estate">
                    </div>
                </div>

                <div class="form-panel">
                    @include('partials._form_request', ['source' => 'form_home_page'])
                </div>
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
                    start: 'top top', // when the top of the trigger hits the top of the viewport
                    end: '+=900', // end after scrolling 900px beyond the start
                    scrub: 1.2, // smooth scrubbing
                    once:false,
                }
            });

            //slogan suite
            timelineSlogan.addLabel('start')
                .fromTo('#slogan .mask1', { x: 0, scaleX:1 },{ x:'100%', scaleX:0, duration:3, ease: "sine.out", })
                .fromTo('#slogan .mask2', { x: 0, scaleX:1 },{ x:'100%', scaleX:0, duration:3, ease: "sine.out", }, '-=1.2')
                .fromTo('#slogan .mask3', { x: 0, scaleX:1 },{ x:'100%', scaleX:0, duration:3, ease: "sine.out", }, '-=1.2');

            //terrace
            let terrace = gsap.timeline({
                scrollTrigger: {
                    normalize:true,
                    trigger: '#terrace',
                    pin: true, // pin the trigger element while active
                    start: 'top top', // when the top of the trigger hits the top of the viewport
                    end: '+=520', // end after scrolling 520px beyond the start
                    scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                    invalidateOnRefresh: true,
                }
            });

            //view mov.
            terrace.addLabel('start')
                .fromTo('#terrace .img_right', { scale:1.08 },{ scale:1, duration:3, ease: "none", })
                .fromTo('#terrace .text-intro', { y:44, opacity:0 },{ y:0, opacity:1, duration:2.2, ease: "sine.out", stagger:0.28, }, '-=1.4');


            let living = gsap.timeline({
                scrollTrigger: {
                    trigger: '#living_room',
                    pin: true, // pin the trigger element while active
                    start: 'top top', // when the top of the trigger hits the top of the viewport
                    end: '+=800', // end after scrolling 800px beyond the start
                    scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                    once:false,
                    invalidateOnRefresh: true,
                }
            });

            living.addLabel('start')
                .fromTo('#living_room #living_1', { scale:1.08, xPercent:0 }, { scale:1, xPercent:-6, duration:3, ease:"none" })
                .fromTo('#living_room .living-panel-reveal', { xPercent:100 }, { xPercent:0, duration:3, ease:"sine.out" }, 0)
                .fromTo('#living_room #living_2', { scale:1.06 }, { scale:1, duration:3, ease:"none" }, 0)
                .fromTo('#living_room .living-panel-veil', { opacity:0.18 }, { opacity:1, duration:2.4, ease:"sine.out" }, 0.35)
                .fromTo('#living_room .living-panel-caption', { y:34, opacity:0 }, { y:0, opacity:1, duration:1.6, ease:"sine.out" }, 1.05);


            //tv room
            let tvroom = gsap.timeline({
                scrollTrigger: {
                    trigger: '#tvroom',
                    start: 'top 70%',
                    end: 'bottom 45%',
                    scrub: 1,
                    once:false,
                    invalidateOnRefresh: true,
                }
            });

            //tv room mov.
            tvroom.addLabel('start')
                .fromTo('#tvroom .text-intro', { y:38, opacity:0 },{ y:0, opacity:1, duration:2, ease: "sine.out", stagger:0.18, })
                .fromTo('#tvroom .tvroom-media', { y:54, opacity:0 },{ y:0, opacity:1, duration:2.2, ease: "sine.out", }, 0.18)
                .fromTo('#tvroom .img_right', { scale:1.08 },{ scale:1, duration:3, ease: "none", }, 0.18);


            let bedrooms = gsap.timeline({
                scrollTrigger: {
                    trigger: '#bedrooms',
                    pin: true, // pin the trigger element while active
                    start: 'top top', // when the top of the trigger hits the top of the viewport
                    end: '+=800', // end after scrolling 800px beyond the start
                    scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                    once:false,
                    invalidateOnRefresh: true,
                }
            });

            bedrooms.addLabel('start')
                .fromTo('#bedrooms #bedroom_1', { scale:1.1, xPercent:0 }, { scale:1, xPercent:-4, duration:3.2, ease:"none" })
                .fromTo('#bedrooms .master-image-reveal', { xPercent:100 }, { xPercent:0, duration:3.2, ease:"sine.out" }, 0)
                .fromTo('#bedrooms #bedroom_2', { scale:1.08 }, { scale:1, duration:3.2, ease:"none" }, 0)
                .fromTo('#bedrooms .text-intro', { y:42, opacity:0 }, { y:0, opacity:1, duration:1.8, ease:"sine.out", stagger:0.22 }, 0.85);

            //kitchen
            let kitchen = gsap.timeline({
                scrollTrigger: {
                    trigger: '#kitchen',
                    start: 'top 72%',
                    end: 'bottom 45%',
                    scrub: 1,
                    once:false,
                    invalidateOnRefresh: true,
                }
            });

            //kitchen mov.
            kitchen.addLabel('start')
                .fromTo('#kitchen .kitchen-media', { y:54, opacity:0 },{ y:0, opacity:1, duration:2.2, ease: "sine.out", })
                .fromTo('#kitchen .img_right', { scale:1.08 },{ scale:1, duration:3, ease: "none", }, 0)
                .fromTo('#kitchen .text-intro', { y:38, opacity:0 },{ y:0, opacity:1, duration:2, ease: "sine.out", stagger:0.18, }, 0.2);

            let parralax_2 = gsap.timeline({
                scrollTrigger:{
                    trigger:'#parralax_2',
                    start: 'top 72%',
                    end: 'bottom 45%',
                    scrub: 1,
                    once:false,
                    invalidateOnRefresh: true,
                }
            });

            parralax_2.fromTo('#parralax_2 .text-intro', { y:42, opacity:0 }, { y:0, opacity:1, duration:2, ease:"sine.out", stagger:0.18 });
            parralax_2.fromTo('#parralax_2 .rare-address-media', { y:54, opacity:0 }, { y:0, opacity:1, duration:2.2, ease:"sine.out" }, 0.18);
            parralax_2.fromTo('#parralax_2 .rare-address-media img', { scale:1.08 }, { scale:1, duration:3, ease:"none" }, 0.18);


            let product = gsap.timeline({
                scrollTrigger:{
                    trigger:'#pricing',
                    start: 'top 72%',
                    end: 'bottom 45%',
                    scrub: 1,
                    once:false,
                    invalidateOnRefresh: true,
                }
            });

            product.fromTo('#pricing .apartments-heading > *', { y:42, opacity:0 }, { y:0, opacity:1, duration:2, ease:'sine.out', stagger:0.18 });
            product.fromTo('#pricing .apartments-elevation', { y:54, opacity:0 }, { y:0, opacity:1, duration:2.2, ease:'sine.out' }, 0.18);
            product.fromTo('#pricing .apartments-selector', { y:54, opacity:0 }, { y:0, opacity:1, duration:2.2, ease:'sine.out' }, 0.28);

            const apartmentsMap = document.querySelector('.apartments-elevation-map');
            const apartmentsSelector = document.querySelector('.apartments-selector');
            const activePanel = document.querySelector('.apartments-active-panel');
            const floorGuides = document.querySelectorAll('.apartments-floor-guide[data-floor]');
            const floorVeils = document.querySelectorAll('.apartments-floor-veil[data-floor]');
            const floorBlocks = document.querySelectorAll('.apartments-floor[data-floor]');
            const apartmentZones = document.querySelectorAll('.apartment-zone[data-residence]');
            const apartmentLinks = document.querySelectorAll('.apartment-residence[data-residence]');

            const renderDefaultPanel = () => {
                if (!activePanel) return;
                activePanel.innerHTML = `
                    <span>Twenty residences</span>
                    <h3>Choose a floor, then a residence</h3>
                    <p>Three apartments per floor from the second to the seventh, lettered A to C. Two duplex penthouses, 8A and 8B, on the eighth. Every residence faces the sea.</p>
                `;
            };

            const renderFloorPanel = (floor) => {
                if (!activePanel) return;
                const floorItems = [...apartmentLinks].filter((link) => link.dataset.floor === floor);
                activePanel.innerHTML = `
                    <span>${floor}th floor</span>
                    <h3>${floorItems.length} residences on this floor</h3>
                    <p>Choose one of the residences directly on the facade or from the list below.</p>
                `;
            };

            const renderResidencePanel = (source) => {
                if (!activePanel || !source) return;
                activePanel.innerHTML = `
                    <span>Residence</span>
                    <h3>${source.dataset.title}</h3>
                    <p>${source.dataset.bedrooms} bedrooms, ${source.dataset.rooms} rooms and ${source.dataset.area} sqm of living area. Ask for plans, specifications and price.</p>
                    <dl class="active-meta">
                        <div><dt>Rooms</dt><dd>${source.dataset.rooms}</dd></div>
                        <div><dt>Bedrooms</dt><dd>${source.dataset.bedrooms}</dd></div>
                        <div><dt>Area</dt><dd>${source.dataset.area} sqm</dd></div>
                    </dl>
                    <a class="active-link" href="${source.dataset.url || source.href}">Request plans and price</a>
                `;
            };

            let activeFloor = null;
            let activeResidence = null;
            let pinnedResidence = null;
            let selectedFloor = null;

            const setActiveFloor = (floor) => {
                selectedFloor = selectedFloor === floor ? null : floor;
                activeFloor = selectedFloor;
                activeResidence = null;
                pinnedResidence = null;
                apartmentsMap?.classList.toggle('has-active-floor', Boolean(activeFloor));
                apartmentsSelector?.classList.toggle('has-active-floor', Boolean(activeFloor));
                apartmentsSelector?.classList.toggle('has-active-state', Boolean(activeFloor));
                apartmentsSelector?.classList.toggle('has-list-open', Boolean(activeFloor));

                floorGuides.forEach((guide) => guide.classList.toggle('is-active', guide.dataset.floor === activeFloor));
                floorGuides.forEach((guide) => guide.setAttribute('aria-pressed', guide.dataset.floor === activeFloor ? 'true' : 'false'));
                floorVeils.forEach((veil) => veil.classList.toggle('is-muted', Boolean(activeFloor) && veil.dataset.floor !== activeFloor));
                floorBlocks.forEach((block) => block.classList.toggle('is-active-floor', block.dataset.floor === activeFloor));
                apartmentZones.forEach((zone) => {
                    zone.classList.remove('is-active');
                    zone.classList.toggle('is-on-floor', zone.dataset.floor === activeFloor);
                    zone.setAttribute('aria-pressed', 'false');
                });
                apartmentLinks.forEach((link) => link.classList.remove('is-active'));

                if (activeFloor) {
                    renderFloorPanel(activeFloor);
                } else {
                    apartmentsSelector?.classList.remove('has-active-state');
                    renderDefaultPanel();
                }
            };

            const setActiveResidence = (residenceId, pin = false) => {
                if (pin) {
                    pinnedResidence = residenceId;
                }

                activeResidence = residenceId;
                const activeSource = document.querySelector(`.apartment-residence[data-residence="${residenceId}"]`) || document.querySelector(`.apartment-zone[data-residence="${residenceId}"]`);
                const floor = activeSource?.dataset.floor || null;
                activeFloor = floor;
                selectedFloor = pin ? floor : selectedFloor;

                apartmentsMap?.classList.toggle('has-active-floor', Boolean(activeFloor));
                apartmentsSelector?.classList.add('has-active-state');
                apartmentsSelector?.classList.toggle('has-active-floor', Boolean(activeFloor));
                apartmentsSelector?.classList.toggle('has-list-open', Boolean(selectedFloor || pinnedResidence));
                floorGuides.forEach((guide) => guide.classList.toggle('is-active', guide.dataset.floor === activeFloor));
                floorGuides.forEach((guide) => guide.setAttribute('aria-pressed', guide.dataset.floor === activeFloor ? 'true' : 'false'));
                floorVeils.forEach((veil) => veil.classList.toggle('is-muted', Boolean(activeFloor) && veil.dataset.floor !== activeFloor));
                floorBlocks.forEach((block) => block.classList.toggle('is-active-floor', block.dataset.floor === activeFloor));
                apartmentZones.forEach((zone) => {
                    const isActive = zone.dataset.residence === residenceId;
                    zone.classList.toggle('is-active', isActive);
                    zone.classList.toggle('is-on-floor', zone.dataset.floor === activeFloor);
                    zone.setAttribute('aria-pressed', isActive ? 'true' : 'false');
                });
                apartmentLinks.forEach((link) => link.classList.toggle('is-active', link.dataset.residence === residenceId));
                renderResidencePanel(activeSource);
            };
            const clearActiveResidence = () => {
                if (pinnedResidence) {
                    setActiveResidence(pinnedResidence);
                    return;
                }

                if (activeResidence) {
                    activeResidence = null;
                    apartmentZones.forEach((zone) => {
                        zone.classList.remove('is-active');
                        zone.setAttribute('aria-pressed', 'false');
                    });
                    apartmentLinks.forEach((link) => link.classList.remove('is-active'));
                    if (selectedFloor) {
                        activeFloor = selectedFloor;
                        apartmentsMap?.classList.toggle('has-active-floor', true);
                        apartmentsSelector?.classList.toggle('has-active-floor', true);
                        apartmentsSelector?.classList.toggle('has-active-state', true);
                        apartmentsSelector?.classList.toggle('has-list-open', true);
                        floorGuides.forEach((guide) => guide.classList.toggle('is-active', guide.dataset.floor === activeFloor));
                        floorGuides.forEach((guide) => guide.setAttribute('aria-pressed', guide.dataset.floor === activeFloor ? 'true' : 'false'));
                        floorVeils.forEach((veil) => veil.classList.toggle('is-muted', veil.dataset.floor !== activeFloor));
                        floorBlocks.forEach((block) => block.classList.toggle('is-active-floor', block.dataset.floor === activeFloor));
                        apartmentZones.forEach((zone) => zone.classList.toggle('is-on-floor', zone.dataset.floor === activeFloor));
                        renderFloorPanel(selectedFloor);
                    } else {
                        activeFloor = null;
                        apartmentsMap?.classList.remove('has-active-floor');
                        apartmentsSelector?.classList.remove('has-active-floor');
                        apartmentsSelector?.classList.remove('has-active-state');
                        apartmentsSelector?.classList.remove('has-list-open');
                        floorGuides.forEach((guide) => {
                            guide.classList.remove('is-active');
                            guide.setAttribute('aria-pressed', 'false');
                        });
                        floorVeils.forEach((veil) => veil.classList.remove('is-muted'));
                        floorBlocks.forEach((block) => block.classList.remove('is-active-floor'));
                        apartmentZones.forEach((zone) => zone.classList.remove('is-on-floor'));
                        renderDefaultPanel();
                    }
                }
            };

            floorGuides.forEach((guide) => {
                const toggleFloor = () => setActiveFloor(guide.dataset.floor);
                guide.addEventListener('click', toggleFloor);
                guide.addEventListener('keydown', (event) => {
                    if (event.key === 'Enter' || event.key === ' ') {
                        event.preventDefault();
                        toggleFloor();
                    }
                });
            });

            apartmentZones.forEach((zone) => {
                zone.addEventListener('mouseenter', () => setActiveResidence(zone.dataset.residence));
                zone.addEventListener('focus', () => setActiveResidence(zone.dataset.residence));
                zone.addEventListener('mouseleave', clearActiveResidence);
                zone.addEventListener('blur', clearActiveResidence);
                zone.addEventListener('click', () => setActiveResidence(zone.dataset.residence, true));
                zone.addEventListener('keydown', (event) => {
                    if (event.key === 'Enter' || event.key === ' ') {
                        event.preventDefault();
                        setActiveResidence(zone.dataset.residence, true);
                    }
                });
            });

            apartmentLinks.forEach((link) => {
                link.addEventListener('mouseenter', () => setActiveResidence(link.dataset.residence));
                link.addEventListener('focus', () => setActiveResidence(link.dataset.residence));
                link.addEventListener('mouseleave', clearActiveResidence);
                link.addEventListener('blur', clearActiveResidence);
                link.addEventListener('click', () => {
                    pinnedResidence = link.dataset.residence;
                });
            });

            //swiper js
            const swiper = new Swiper('.swiper_exterior', {
                // Optional parameters
                direction: 'horizontal',
                loop: false,
                spaceBetween: 18,
                slidesPerView: 2.45,
                fadeEffect: {
                    crossFade: true
                },
                breakpoints: {
                    // when window width is >= 480px
                    375: {
                        slidesPerView: 1.08,
                        spaceBetween: 14
                    },
                    // when window width is >= 640px
                    640: {
                        slidesPerView: 2.45,
                        spaceBetween: 18
                    },
                    1180: {
                        slidesPerView: 3.15,
                        spaceBetween: 22
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

        L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
            subdomains: 'abcd',
            maxZoom: 19,
            attribution: '© OpenStreetMap contributors © CARTO'
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
            { coords: [43.55057, 7.02235], icon: customIcon33croisette, title: '33 Croisette' },
            { coords: [43.54977, 7.02725], icon: customIconCarlton, title: 'Hotel Carlton' },
            { coords: [43.54789, 7.03069], icon: customIconMartinez, title: 'Hotel Martinez' },
            { coords: [43.55105, 7.01974], icon: customIconMajestic, title: 'Hotel Majestic' },
            { coords: [43.55081, 7.01816], icon: customIconPalais, title: 'Palais des Festivals' },
        ];

        markers.forEach(({ coords, icon, title }) => {
            L.marker(coords, { icon }).addTo(maCarte).bindTooltip(title);
        });

        const landmarkButtons = document.querySelectorAll('.map-landmark-button');
        landmarkButtons.forEach((button) => {
            const focusLandmark = () => {
                landmarkButtons.forEach((item) => item.classList.remove('is-active'));
                button.classList.add('is-active');
                maCarte.flyTo([Number(button.dataset.lat), Number(button.dataset.lng)], Number(button.dataset.zoom || 17), {
                    duration: 0.8,
                });
            };

            button.addEventListener('mouseenter', focusLandmark);
            button.addEventListener('focus', focusLandmark);
            button.addEventListener('click', focusLandmark);
        });
    </script>
@endsection
