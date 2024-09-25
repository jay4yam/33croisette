@extends('layouts.app')

@section('content')
    <header id="banner" class="flex flex-col gap-12 clearfix" data-enllax-ratio=".5">
        <div id="header" class="nav-collapse">
            <div class="container mx-auto">
                <div class="flex justify-between items-center gpa-12 w-full">

                    <!--Logo-->
                    <div id="logo" class="px-24">

                        <!--Logo that is shown on the banner-->
                        <img src="{{ asset('images/logo-33-croisette.png') }}" id="banner-logo" alt="Landing Page"/>
                        <!--End of Banner Logo-->

                        <!--The Logo that is shown on the sticky Navigation Bar-->
                        <img class="w-1/3" src="{{ asset('images/logo-33-croisette.png') }}" id="navigation-logo" alt="Landing Page"/>
                        <!--End of Navigation Logo-->

                    </div>
                    <!--End of Logo-->

                    <!--Main Navigation-->
                    <nav id="nav-main">
                        <ul>
                            <li>
                                <a href="#banner">Home</a>
                            </li>
                            <li>
                                <a href="#about">About</a>
                            </li>
                            <li>
                                <a href="#gallery">Gallery</a>
                            </li>
                            <li>
                                <a href="#services">Services</a>
                            </li>
                            <li>
                                <a href="#testimonials">Testimonials</a>
                            </li>
                            <li>
                                <a href="#clients">Clients</a>
                            </li>
                            <li>
                                <a href="#pricing">Pricing</a>
                            </li>
                        </ul>
                    </nav>
                    <!--End of Main Navigation-->

                    <aside>

                        <!--Social Icons in Header-->
                        <ul class="social-icons">
                            <li>
                                <a target="_blank" title="Facebook" href="https://www.facebook.com/username">
                                    <i class="fa fa-facebook fa-1x"></i><span>Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" title="Instagram" href="http://www.instagram.com/username">
                                    <i class="fa fa-instagram fa-1x"></i><span>Instagram</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" title="Pinterest" href="http://www.behance.net">
                                    <i class="fa fa-pinterest fa-1x"></i><span>Behance</span>
                                </a>
                            </li>
                        </ul>
                        <!--End of Social Icons in Header-->

                    </aside>

                </div>
            </div>
        </div><!--End of Header-->

        <!--Banner Content-->
        <div id="banner-content" class="container mx-auto absolute translate-y-1/2 translate-x-72">

            <div class="w-1/2 px-4">

                <div class="section-heading">
                    <h1 id="intro" class="uppercase">The new luxury building program in cannes</h1>
                    <h2 id="subintro">18 flats and 2 penthouses for sale for a unique experience
                        in the heart of the famous Croisette in Cannes
                    </h2>
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

    <!--Main Content Area-->
    <main id="content">

        <!--Introduction-->
        <section id="about" class="scrollto">

            <div class="container mx-auto p-28 flex gap-4">

                <div class="w-1/3">
                    <div class="section-heading">
                        <h3>Cannes Croisette</h3>
                        <h2 class="section-title">A unique project on the <span class="text-gold">French Riviera</span></h2>
                        <p class="section-subtitle">
                            the <span class="text-gold"><strong>33 Croisette</strong></span> will be the epitome of exceptional real estate on the Côte d'Azur.
                            Top-of-the-range services will be offered thanks to the use of noble materials
                            and sublime finishes in the construction and fitting-out.
                        </p>
                    </div>

                </div>

                <div class="w-2/3">

                    <!--Icon Block-->
                    <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.1s">
                        <!--Icon-->
                        <div class="icon">
                            <i class="fa fa-html5 fa-2x"></i>
                        </div>
                        <!--Icon Block Description-->
                        <div class="icon-block-description">
                            <h4>HTML5 &amp; CSS3</h4>
                            <p>Has ne tritani atomorum conclusionemque, in dolorum volumus cotidieque eum. At vis choro
                                neglegentur iudico</p>
                        </div>
                    </div>
                    <!--End of Icon Block-->

                    <!--Icon Block-->
                    <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.3s">
                        <!--Icon-->
                        <div class="icon">
                            <i class="fa fa-bolt fa-2x"></i>
                        </div>
                        <!--Icon Block Description-->
                        <div class="icon-block-description">
                            <h4>Easy to Use</h4>
                            <p>Cu vero ipsum vim, doctus facilisi sea in. Eam ex falli honestatis repudiandae, sit
                                detracto mediocrem disputationi</p>
                        </div>
                    </div>
                    <!--End of Icon Block-->

                    <!--Icon Block-->
                    <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.5s">
                        <!--Icon-->
                        <div class="icon">
                            <i class="fa fa-tablet fa-2x"></i>
                        </div>
                        <!--Icon Block Description-->
                        <div class="icon-block-description">
                            <h4>Fully Responsive</h4>
                            <p>Id porro tritani recusabo usu, eum intellegam consequuntur et. Fugit debet ea sit, an pro
                                nemore vivendum</p>
                        </div>
                    </div>
                    <!--End of Icon Block-->

                    <!--Icon Block-->
                    <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.5s">
                        <!--Icon-->
                        <div class="icon">
                            <i class="fa fa-rocket fa-2x"></i>
                        </div>
                        <!--Icon Block Description-->
                        <div class="icon-block-description">
                            <h4>Parallax Effect</h4>
                            <p>Id porro tritani recusabo usu, eum intellegam consequuntur et. Fugit debet ea sit, an pro
                                nemore vivendum</p>
                        </div>
                    </div>
                    <!--End of Icon Block-->

                </div>

            </div>

        </section>
        <!--End of Introduction-->

        <!--Gallery-->
        <aside id="gallery" class="container mx-auto text-center clearfix" data-featherlight-gallery data-featherlight-filter="a">

            <a href="images/gallery-images/gallery-image-1.jpg" data-featherlight="image" class="col-3 wow fadeIn"
               data-wow-delay="0.1s"><img src="images/gallery-images/gallery-image-1.jpg" alt="Landing Page"/></a>
            <a href="images/gallery-images/gallery-image-2.jpg" data-featherlight="image" class="col-3 wow fadeIn"
               data-wow-delay="0.3s"><img src="images/gallery-images/gallery-image-2.jpg" alt="Landing Page"/></a>
            <a href="images/gallery-images/gallery-image-3.jpg" data-featherlight="image" class="col-3 wow fadeIn"
               data-wow-delay="0.5s"><img src="images/gallery-images/gallery-image-3.jpg" alt="Landing Page"/></a>
            <a href="images/gallery-images/gallery-image-4.jpg" data-featherlight="image" class="col-3 wow fadeIn"
               data-wow-delay="1.1s"><img src="images/gallery-images/gallery-image-4.jpg" alt="Landing Page"/></a>
            <a href="images/gallery-images/gallery-image-5.jpg" data-featherlight="image" class="col-3 wow fadeIn"
               data-wow-delay="0.9s"><img src="images/gallery-images/gallery-image-5.jpg" alt="Landing Page"/></a>
            <a href="images/gallery-images/gallery-image-6.jpg" data-featherlight="image" class="col-3 wow fadeIn"
               data-wow-delay="0.7s"><img src="images/gallery-images/gallery-image-6.jpg" alt="Landing Page"/></a>

        </aside>
        <!--End of Gallery-->

        <!--Content Section-->
        <div id="services" class="scrollto clearfix">

            <div class="row no-padding-bottom clearfix">


                <!--Content Left Side-->
                <div class="col-3">
                    <!--User Testimonial-->
                    <blockquote class="testimonial text-right bigtest">
                        <q>Cannes is like a window opening onto a sunny dream, where reality dissolves into beauty.</q>
                        <footer>— André Gide - Famous French Writter</footer>
                    </blockquote>
                    <!-- End of Testimonial-->

                </div>
                <!--End Content Left Side-->

                <!--Content of the Right Side-->
                <div class="col-3">
                    <div class="section-heading">
                        <h3>WHY CHOOSE CANNES ?</h3>
                        <h2 class="section-title">A landmark in French art de vivre</h2>
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

                <div class="col-3">
                    <img src="images/dancer.jpg" alt="Dancer"/>
                </div>

            </div>


        </div>
        <!--End of Content Section-->

        <!--brands -->
        <aside id="testimonials" class="scrollto text-center" data-enllax-ratio=".2">

            <div class="container mx-auto p-12">

                <div class="section-heading">
                    <h3>FEEDBACK</h3>
                    <h2 class="section-title">What the project creators say</h2>
                </div>

                <!--Brand Testimonial-->
                <div id="brands" class="flex gap-8">

                    <!-- Testimonial Viguier -->
                    <blockquote class="flex flex-col justify-between w-1/3">
                        <img class="w-1/2 py-4 mx-auto" src="images/logo-viguier.png" alt="Viguier"/>
                        <q class="text-justify">The timeless elegance and modern luxury of this project on the Croisette in Cannes,
                            where every detail has been designed to offer an exceptional living experience,
                            harmoniously blending the natural beauty of the Mediterranean with exceptional architectural design.</q>
                        <footer class="text-gold font-black">VIGUIER Architect</footer>
                    </blockquote>
                    <!-- End of Testimonial Viguier -->

                    <!-- Testimonial Iret -->
                    <blockquote class="flex flex-col justify-between w-1/3">
                        <img class="w-1/2 py-2 mx-auto" src="images/logo-iret-development.png" alt="Iret"/>
                        <q class="text-justify">Our property development on the Croisette in Cannes represents the ultimate in lifestyle,
                            combining a prestigious location, luxury amenities and exceptional contemporary
                            architecture to offer our residents a unique and exclusive living environment.</q>
                        <footer class="text-gold font-black">IRET Development</footer>
                    </blockquote>
                    <!-- End of Testimonial Iret -->

                    <!-- Testimonial MZRE -->
                    <blockquote class="flex flex-col justify-between w-1/3">
                        <img class="w-1/2 py-2 mx-auto" src="images/logo-michael-zingraf.png" alt="Michaël Zingraf Real Estate"/>
                        <q class="text-justify">Michael Zingraf, is proud to present this unique real estate project on the Croisette in Cannes,
                            where luxury, elegance and innovation meet to offer an unrivalled investment
                            and living opportunity in one of the world's most prestigious addresses.</q>
                        <footer class="text-gold font-black">MICHAËL ZINGRAF</footer>
                    </blockquote>
                    <!-- End of Testimonial MZRE -->
                </div>

            </div>

        </aside>
        <!--End of Testimonials-->

        <!--maps -->
        <section id="maps" class="scrollto clearfix">

            <div class="container mx-auto section-heading w-1/3 pt-24">
                <h3>MAP</h3>
                <h2 class="section-title">Find the 33 Croisette</h2>
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
            <div class="container mx-auto section-heading w-1/3 pt-24">

                <div class="section-heading">
                    <h3>YOUR CHOICE</h3>
                    <h2 class="section-title">Select the flat of your dreams</h2>
                </div>

            </div>
        </section>
        <!--End of flats Tables-->

        <!-- main form -->
        <section id="form">

            <div id="mainform" class="p-12">
                <div class="container mx-auto section-heading w-1/3">
                    <h3>REQUEST FORM</h3>
                    <h2 class="section-title">Send us a message</h2>
                    <p class="text-gray-400">if you would like more information about our new luxury property programme </p>
                </div>
                <form action="{{ route('send.request') }}" method="post" class="mx-auto w-1/3 flex flex-col items-center gap-2 bg-white p-12 rounded-xl drop-shadow-lg">
                    @csrf
                    <div class="text-gray-400 w-full">
                        <label for="name">Your name *</label>
                        <input class="w-full p-4 focus:ring-4 ring-gold @error('name') ring-red-500 text-red-500 @enderror rounded-md" value="{{ old('name') }}" type="text" id="name" name="name" required maxlength="255" placeholder="John Doe">
                        @error('name')
                            <span class="text-red">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="text-gray-400 w-full">
                        <label for="email">Your Email *</label>
                        <input class="w-full p-4 focus:ring-4 ring-gold @error('name') ring-red-500 text-red-500 @enderror rounded-md" value="{{ old('name') }}" type="email" id="email" name="email" required maxlength="255" placeholder="John@Doe.com">
                        @error('email')
                        <span class="text-red">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="text-gray-400 w-full">
                        <label for="phone">Your Phone *</label>
                        <input class="w-full p-4 focus:ring-4 ring-gold rounded-md" type="tel" id="phone" name="phone" required maxlength="255" placeholder="+33(0)6.12.34.56.78">
                        @error('name')
                        <span class="text-red">{{ $errors('phone') }}</span>
                        @enderror
                    </div>

                    <div class="text-gray-400 w-full">
                        <label for="user_message">Your Message *</label>
                        <textarea class="w-full p-4 focus:ring-4 ring-gold rounded-md h-32" id="user_message" name="user_message">Hello,
I'm interested in your new 33 Croisette development in Cannes. Please send me details of the flats available for sale.
                        </textarea>
                        @error('name')
                        <span class="text-red">{{ $errors('phone') }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="bg-gold text-white p-4 rounded-md w-1/2 hover:bg-white hover:ring-gold hover:ring-4 hover:text-gold uppercase">Send your request</button>

                    <p class="text-gray-400 text-xs">By submitting this information request form,
                        you consent to the collection and use of your personal
                        data in accordance with our privacy policy.
                        Your information will only be used to process your
                        request and to improve our services. We are committed
                        to protecting your privacy and will not share your data
                        with third parties without your explicit consent.</p>
                </form>
                <img class="mx-auto pt-12 w-32" src="{{ asset('images/MZCIRE.jpg') }}" alt="logo michael zingraf real estate">
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
