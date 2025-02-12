@extends('layouts.app')

@section('content')

    <!--Main Content Area-->
    <main id="content">

        <header id="banner" class="flex flex-col gap-12 clearfix" data-enllax-ratio=".5">

            <div id="header" class="nav-collapse">

                <div class="container mx-auto flex justify-center md:justify-between items-center gap-12 w-full">

                        <!--Logo-->
                        <div id="logo" class="flex gap-1 px-24">

                            <!-- logo before scroll -->
                            <div id="banner-logo" class="flex gap-2 justify-center">

                                <img class="w-1/4 md:w-1/2" src="{{ asset('images/logo-33-croisette.png') }}"  alt="Landing Page"/>

                                <img class="w-1/4 md:w-1/2" src="{{ asset('images/Logo_MZCIRE_33.png') }}" id="MZRE_logo" alt="Michael Zingraf Real Estate"/>

                            </div>
                            <!-- end logo before scroll -->

                            <!-- logo after scroll -->
                            <div id="navigation-logo" class="flex gap-2">

                                <img class="w-1/3" src="{{ asset('images/logo-33-croisette.png') }}" alt="Landing Page"/>

                                <img class="w-1/3" src="{{ asset('images/Logo_MZCIRE_33.png') }}" id="MZRE_logo_min" alt="Michael Zingraf Real Estate"/>

                            </div>
                            <!-- end logo after scroll -->

                        </div>
                        <!--End of Logo-->

                        <!--Main Navigation-->
                        <nav id="nav-main">
                            <ul>
                                <li>
                                    <a href="#banner">Home</a>
                                </li>
                                <li>
                                    <a href="#photos">Gallery</a>
                                </li>
                                <li>
                                    <a href="#pricing">Appartments</a>
                                </li>
                                <li>
                                    <a href="#contact">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <!--End of Main Navigation-->

                        <aside class="hidden md:block">

                            <!--Social Icons in Header-->
                            <ul class="social-icons">
                                <li>
                                    <a target="_blank" title="Facebook" href="https://www.linkedin.com/company/michael-zingraf-immobilier">
                                        <i class="fa fa-linkedin fa-1x"></i><span>Linkedin</span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" title="Instagram" href="https://www.instagram.com/33croisette/">
                                        <i class="fa fa-instagram fa-1x"></i><span>Instagram</span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" title="Pinterest" href="https://fr.pinterest.com/33croisette/">
                                        <i class="fa fa-pinterest fa-1x"></i><span>Pinterest</span>
                                    </a>
                                </li>
                            </ul>
                            <!--End of Social Icons in Header-->

                        </aside>

                    </div>

            </div><!--End of Header-->

            <!--Banner Content-->
            <div id="banner-content" class="container mx-auto absolute translate-y-20 md:translate-y-1/2 md:translate-x-72">

                <div class="w-full md:w-1/2 px-4">

                    <div class="section-heading">
                        <h1 id="intro" class="uppercase">The new luxury building program in cannes</h1>
                        <p class="text-gold text-lg">18 flats and 2 penthouses for sale<br>
                            A unique experience
                            in the heart of the famous Croisette in Cannes
                        </p>
                    </div>

                    <!--Call to Action-->
                    <a id="calltoaction" href="#form" class="button scrollto">Request Information</a>
                    <!--End Call to Action-->

                </div>

            </div><!--End of Row-->

            <div class="relative mx-auto h-screen w-48 bottom-0">
                <img class="w-40 absolute bottom-0" src="{{ asset('images/cire-logo.png') }}" alt="">
            </div>

        </header>

        <!--Introduction-->
        <section id="about" class="scrollto">

            <div class="container mx-auto p-6 md:p-28 flex flex-col md:flex-row gap-4">

                <div class="w-full md:w-1/3 ">
                    <div class="section-heading">
                        <h3>Cannes Croisette</h3>
                        <h2 class="section-title">A unique project on the <span class="text-gold">French Riviera</span></h2>
                    </div>

                </div>

                <div class="w-full md:w-2/3 wow fadeInLeft" data-wow-delay="0.1s">
                    <!--Icon Block Description-->
                    <div class="icon-block-description section-subtitle">
                            <p class="section-subtitle pb-1">
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

        <!--Gallery-->
        <section id="gallery" class="tab-wrapper py-4" x-data="{ activeTab:  0 }">

            <!-- selector de tabs -->
            <div id="photos" class="scrollto label-wrapper flex gap-4 justify-around">
                <label @click="activeTab = 0" class="w-1/2 py-2 text-center text-gold font-black uppercase cursor-pointer"
                       :class="{ 'active': activeTab === 0 }">Exteriors</label>
                <label @click="activeTab = 1" class="w-1/2 py-2 text-center text-gold font-black uppercase cursor-pointer"
                       :class="{ 'active': activeTab === 1 }">Interiors</label>
            </div>
            <!-- ./ selector de tabs -->

            <!-- TABS / PANEL ANGLAIS -->
            <div class="tab-panel p-4" :class="{ 'active-tab': activeTab === 0 }" x-show.transition.in.opacity.duration.600="activeTab === 0">

                <aside id="gallery-exteriors" class="container mx-auto flex flex-wrap text-center clearfix" data-featherlight-gallery data-featherlight-filter="a">

                    <a href="images/gallery-images/gallery-image-1.jpg" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn"
                       data-wow-delay="0.1s">
                        <img src="images/gallery-images/gallery-image-1.jpg" alt="Landing Page"/>
                    </a>
                    <a href="images/gallery-images/gallery-image-2.webp" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn"
                       data-wow-delay="0.3s">
                        <img src="images/gallery-images/gallery-image-2.webp" alt="Landing Page"/>
                    </a>
                    <a href="images/gallery-images/gallery-image-3.webp" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn"
                       data-wow-delay="0.5s">
                        <img src="images/gallery-images/gallery-image-3.webp" alt="Landing Page"/>
                    </a>
                    <a href="images/gallery-images/gallery-image-4.webp" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn"
                       data-wow-delay="1.1s">
                        <img src="images/gallery-images/gallery-image-4.webp" alt="Landing Page"/>
                    </a>
                    <a href="images/gallery-images/gallery-image-5.webp" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn"
                       data-wow-delay="0.9s">
                        <img src="images/gallery-images/gallery-image-5.webp" alt="Landing Page"/>
                    </a>
                    <a href="images/gallery-images/gallery-image-9.jpg" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn"
                       data-wow-delay="0.5s">
                        <img src="images/gallery-images/gallery-image-9.jpg" alt="Landing Page"/>
                    </a>
                    <a href="images/gallery-images/gallery-image-6-b.webp" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn"
                       data-wow-delay="0.7s">
                        <img src="images/gallery-images/gallery-image-6-b.webp" alt="Landing Page"/>
                    </a>
                    <a href="images/gallery-images/gallery-image-7.webp" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn"
                       data-wow-delay="0.1s">
                        <img src="images/gallery-images/gallery-image-7.webp" alt="Terrace"/>
                    </a>
                    <a href="images/gallery-images/gallery-image-6.webp" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn"
                       data-wow-delay="0.3s">
                        <img src="images/gallery-images/gallery-image-6.webp" alt="Landing Page"/>
                    </a>

                </aside>
                <!--End of Gallery-->
            </div>

            <!-- TABS / PANEL FRANCAIS -->
            <div class="tab-panel p-4" :class="{ 'active-tab': activeTab === 1 }" x-show.transition.in.opacity.duration.600="activeTab === 1">

                <aside id="gallery-interiors" class="container flex flex-wrap mx-auto text-center clearfix" data-featherlight-gallery data-featherlight-filter="a">

                    <a href="images/gallery-images/gallery-image-1-int.webp" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn"
                       data-wow-delay="0.1s">
                        <img src="images/gallery-images/gallery-image-1-int.webp" alt="Landing Page"/>
                    </a>
                    <a href="images/gallery-images/gallery-image-2-int.webp" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn"
                       data-wow-delay="0.3s">
                        <img src="images/gallery-images/gallery-image-2-int.webp" alt="Landing Page"/>
                    </a>
                    <a href="images/gallery-images/gallery-image-3-int.webp" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn"
                       data-wow-delay="0.5s">
                        <img src="images/gallery-images/gallery-image-3-int.webp" alt="Landing Page"/>
                    </a>
                    <a href="images/gallery-images/gallery-image-4-int.webp" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn"
                       data-wow-delay="1.1s">
                        <img src="images/gallery-images/gallery-image-4-int.webp" alt="Landing Page"/>
                    </a>
                    <a href="images/gallery-images/gallery-image-5-int.webp" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn"
                       data-wow-delay="0.9s">
                        <img src="images/gallery-images/gallery-image-5-int.webp" alt="Landing Page"/>
                    </a>
                    <a href="images/gallery-images/gallery-image-6-int.webp" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn"
                       data-wow-delay="0.7s">
                        <img src="images/gallery-images/gallery-image-6-int.webp" alt="Landing Page"/>
                    </a>
                    <a href="images/gallery-images/gallery-image-7-int.webp" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn"
                       data-wow-delay="0.1s">
                        <img src="images/gallery-images/gallery-image-7-int.webp" alt="Terrace"/>
                    </a>
                    <a href="images/gallery-images/gallery-image-8-int.webp" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn"
                       data-wow-delay="0.3s">
                        <img src="images/gallery-images/gallery-image-8-int.webp" alt="Landing Page"/>
                    </a>
                    <a href="images/gallery-images/gallery-image-9-int.webp" data-featherlight="image" class="w-full md:w-1/3 wow fadeIn"
                       data-wow-delay="0.5s">
                        <img src="images/gallery-images/gallery-image-9-int.webp" alt="Landing Page"/>
                    </a>

                </aside>
                <!--End of Gallery-->
            </div>

        </section>

        <!--Content Section-->
        <section id="services" class="scrollto clearfix p-6">

            <div class="container mx-auto flex flex-wrap gap-4 no-padding-bottom clearfix">

                <!--Content Left Side-->
                <div class="w-full md:w-1/4">

                    <blockquote class="testimonial text-right bigtest">
                        <q>Cannes is like a window opening onto a sunny dream, where reality dissolves into beauty.</q>
                        <footer>— André Gide - Famous French Writter</footer>
                    </blockquote>

                    <div class="group cursor-pointer relative flex flex-col items-center justify-center py-6">
                        <div class="invisible group-hover:visible transition-all ease-in-out delay-150 duration-200 absolute top-0 left-0 bg-white/80 w-full h-full"></div>
                        <img src="{{ asset('images/download-the-brochure.webp') }}" alt="download">
                        <div class="invisible group-hover:visible absolute -top-0 group-hover:top-20 transition-all ease-in-out delay-150 duration-200 text-center text-gold font-black">Download the presentation<br> of this new exceptional<br> real estate program</div>
                    </div>

                    <!-- form brochure -->
                    <form id="download_brochure" class="flex flex-col gap-2 py-6" action="{{ route('download.brochure') }}" method="post">
                        @csrf
                        @if(! session('brochure_success'))
                        <div>
                            <input type="email" required name="email" class="w-full rounded-md p-6 text-gold border-gold" placeholder="email@domain.ext">
                            @error('email')<p x-init="$el.closest('form').scrollIntoView()" class="text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <button type="submit"
                            data-sitekey="{{ config('google_recaptcha.site_key') }}"
                            data-callback='onSubmit'
                            data-action='request' class="text-gold border border-gold rounded-md p-4 hover:bg-gold hover:text-white">Get the Brochure</button>
                        @else
                            <p x-init="$el.closest('form').scrollIntoView()" class="text-center">
                                Thank you, you will receive an email to get the<br> 33 croisette program brochure.
                            </p>
                        @endif
                    </form>

                </div>
                <!--End Content Left Side-->

                <!--Content of the Right Side-->
                <div class="w-full md:w-1/3">
                    <div class="section-heading">
                        <h3>WHY CHOOSE CANNES ?</h3>
                        <h2 class="section-title">A landmark in <br>
                            <span class="text-gold">French art de vivre</span></h2>
                        <p class="section-subtitle text-justify">
                            La Croisette is one of the most prestigious avenues in the world,
                            offering an exceptional lifestyle with direct access to beaches,
                            luxury boutiques and gourmet restaurants.
                        </p>
                    </div>
                    <p class="py-2 text-justify">
                        Enjoy breathtaking views of the Mediterranean Sea,
                        the Lérins islands and the Estérel hills, with spectacular sunsets.
                        Living on the Croisette makes it easy to take part in
                        prestigious events such as the Cannes Film Festival, MIDEM and Cannes Lions.
                    </p>

                    <!-- Just replace the Video ID "UYJ5IjBRlW8" with the ID of your video on YouTube (Found within the URL) -->
                    <a href="#" data-videoid="UYJ5IjBRlW8" data-videosite="youtube" class="button video link-lightbox">
                        WATCH VIDEO <i class="fa fa-play" aria-hidden="true"></i>
                    </a>
                </div>
                <!--End Content Right Side-->

                <div class="w-full md:w-1/3">
                    <img src="images/dancer.jpg" alt="Dancer"/>
                </div>

            </div>


        </section>
        <!--End of Content Section-->

        <!--brands -->
        <section id="testimonials" class="scrollto text-center" data-enllax-ratio=".2">

            <div class="container mx-auto p-6 md:p-12">

                <div class="section-heading flex flex-col justify-center items-center mx-auto">
                    <h3>FEEDBACK</h3>
                    <h2 class="section-title text-left">What they say about <br><span class="text-gold">the project</span></h2>
                </div>

                <!--Brand Testimonial-->
                <div id="brands">

                    <!-- Testimonial MZRE -->
                    <blockquote class="mx-auto w-full md:w-1/2 flex flex-col justify-center">
                        <img class="w-1/4 py-2 mx-auto" src="{{ asset('images/Logo_MZCIRE_33.png') }}" id="logo MZRE" alt="Michael Zingraf Real Estate">
                        <q class="text-center">Michael Zingraf, is proud to present this unique real estate project on the Croisette in Cannes,
                            where luxury, elegance and innovation meet to offer an unrivalled investment
                            and living opportunity in one of the world's most prestigious addresses.</q>
                        <footer class="flex flex-col gap-2 text-gold font-black pt-3">
                            <div class="uppercase">Sole Agent</div>
                            <div>MICHAËL ZINGRAF REAL ESTATE</div>
                            <div>7 rue Docteur Gérard Monod - 06400 Cannes</div>
                            <div><a href="+33(0)4.93.39.77.77">+33(0)4.93.39.77.77</a></div>
                            <div><a href="33croisette@michaelzingraf.com">33croisette@michaelzingraf.com</a></div>
                        </footer>
                    </blockquote>
                    <!-- End of Testimonial MZRE -->

                    <div class="flex gap-6 justify-around py-6">
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

                </div>

            </div>

        </section>
        <!--End of brands -->

        <!--maps -->
        <section id="maps" class="scrollto clearfix">

            <div class="container mx-auto section-heading w-full md:w-1/3 p-6 pt-24">
                <h3>MAP</h3>
                <h2 class="section-title">Find the <br><span class="text-gold">33 Croisette</span></h2>
                <p class="section-subtitle">
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

            <div class="container mx-auto section-heading w-full md:w-1/3 p-6 pt-24">

                <div class="section-heading">
                    <h3>YOUR CHOICE</h3>
                    <h2 class="section-title">Select the flat of <br><span class="text-gold">your dreams</span></h2>
                </div>

            </div>

            <!-- list appart -->
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-4 p-6">
                @foreach($properties as $property)
                    @if($loop->index % 3 === 0)
                        <div class="col-span-1 md:col-span-3 p-0 text-xl text-gold font-black">
                            {{ config('floors.'.$property->floor) }} Floor
                        </div>
                    @endif
                    <a href="{{ route('property.show', ['property' => $property, 'slug' => \Illuminate\Support\Str::slug($property->title)]) }}">
                        <div class="group relative rounded-md cursor-pointer overflow-hidden">
                            <img class="object-cover w-full group-hover:scale-110 transition-all duration-200 delay-150 ease-in-out" src="{{ $property->picture->url }}" alt="{{ $property->title }}">
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
                    <h3>REQUEST FORM</h3>
                    <h2 class="section-title">Send us a <br><span class="text-gold">message</span></h2>
                    <p class="text-gray-400">if you would like more information about our new luxury real estate program</p>
                </div>

                <div class="w-1/3 mx-auto">
                    @include('partials._form_request')
                </div>

                <img class="relative mx-auto pt-12 w-32" src="{{ asset('images/Logo_MZCIRE_33.png') }}" alt="logo michael zingraf real estate">
                <img class="relative mx-auto w-44 pt-6" src="{{ asset('images/christies-logo-or.png') }}" alt="logo Christie's International Real Estate">
            </div>
        </section>
    </main>
    <!--End Main Content Area-->
@endsection

@section('dedicated_js')
    <script>
        let maCarte = L.map('map', {
            scrollWheelZoom: false,
        }).setView([43.55057365795593, 7.022358178214604], 17);

        L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© 33 Croisette - Cannes'
        }).addTo(maCarte);

        let marker = L.marker([43.55057365795593, 7.022358178214604]).addTo(maCarte);
    </script>
    <script type="module">
        //anim du titre
        anime({
            targets:'#intro',
            translateX:[-200,0],
            duration:2000,
            opacity:[0,1],
            easing: 'easeInOutExpo'
        });

        //anime du sous titre
        anime({
            targets:'#subintro',
            translateY:[200,0],
            duration:3000,
            opacity:[0,1],
            easing: 'easeInOutExpo'
        });

        //récupère le bloc avec toutes les images
        let images = document.querySelectorAll('#gallery a');

        $('#gallery').waypoint(function (){
            let animeImage = anime.timeline({
                duration:3000,
                delay: anime.stagger(200)
            });
            animeImage.add({
                targets:images,
                translateY:[200,0],
                opacity:[0,1],
            }, '+=400');
        },{
            offset:'1000'
        });

        let brands = document.querySelectorAll('#brands blockquote');
        $('#brands').waypoint(function (){
            let animeImage = anime.timeline({
                duration:3000,
                delay: anime.stagger(200)
            });
            animeImage.add({
                targets:brands,
                translateY:[-200,0],
                opacity:[0,1],
            }, '+=400');
        },{
            offset:'1440'
        });
    </script>
@endsection
