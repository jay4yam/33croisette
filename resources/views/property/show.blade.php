@extends('layouts.app')

@section('content')
    <section class="relative">
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                @foreach($property->pictures as $picture)
                    <div class="swiper-slide">
                        <img src="{{ $picture->url }}" alt="{{ $picture->title }}">
                    </div>
                @endforeach
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
        <!-- end main carousel-->

        <!-- logo mzre et 33 -->
        <div class="absolute left-0 right-0 top-4 z-50">
            <a href="{{ route('home') }}" class="mx-auto flex justify-center gap-2">
                <img loading="lazy" class="w-1/12" src="{{ asset('images/Logo_MZCIRE_33.png') }}" alt="michael zingraf real estate">
                <img loading="lazy" class="w-1/12" src="{{ asset('images/logo-33-croisette.png') }}" alt="michael zingraf real estate">
            </a>
        </div>
        <!-- logo mzre et 33 -->
    </section>

    <!-- info produit -->
    <section>

        <div class="grid grid-cols-2 md:grid-cols-5 justify-around w-full p-12 gap-4">

            <div class="flex flex-col gap-4 text-2xl text-center text-gold">
                <p class="italic">floor</p>
                <p class="text-2xl font-black">{{ $property->floor }}</p>
            </div>

            <div class="flex flex-col gap-4 text-2xl text-center text-gold">
                <p class="italic">rooms</p>
                <p class="text-2xl font-black">{{ $property->rooms }}</p>
            </div>

            <div class="flex flex-col gap-4 text-2xl text-center text-gold">
                <p class="italic">bedrooms</p>
                <p class="text-2xl font-black">{{ $property->bedrooms }}</p>
            </div>

            <div class="flex flex-col gap-4 text-2xl text-center text-gold">
                <p class="italic">area</p>
                <p class="text-2xl font-black">{{ $property->area }} <span class="text-xl">.sqm</span></p>
            </div>

            <div class="col-span-2 md:col-span-1 p-0 flex flex-col gap-4 text-2xl text-center text-gold">
                <p class="italic">price</p>
                <p class="text-2xl font-black">Price On Request *</p>
            </div>

        </div>

    </section>
    <!-- end info produit -->

    <!--container text-->
    <section class="container mx-auto flex flex-col md:flex-row gap-2 md:gap-4">

        <div class="w-full md:w-3/4 p-6 md:p-2">
            <h1 class="text-3xl text-gold">{{ $property->title }}</h1>
            <div class="text-justify text-gray-500">
                {!! $property->description !!}
            </div>

            <div class="group relative cursor-pointer">
                <img class="invisible absolute top-0 left-32 w-12 border-4 border-white group-hover:top-36 group-hover:visible transition-all ease-in-out delay-300 duration-300" loading="lazy" src="{{ asset('images/logo-33-croisette.png') }}" alt="logo 33 croisette">
                <img loading="lazy" class="py-6 w-full" src="{{ asset('images/property/cannes-front.webp') }}" alt="cannes">
            </div>
        </div>

        <div class="w-full md:w-1/4 p-6 md:p-2">
            <form action="{{ route('send.request') }}" method="post" class="w-full bg-white flex flex-col items-center gap-6 p-6 rounded-xl drop-shadow-xl">
                @csrf
                <div class="text-gray-400 w-full">
                    <label for="name"></label>
                    <input class="w-full p-4 focus:ring-4 ring-gold rounded-md" value="{{ old('name') }}" type="text" name="name" required maxlength="255" placeholder="Your name *">
                    @error('name')
                    <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="text-gray-400 w-full">
                    <label for="email"></label>
                    <input class="w-full p-4 focus:ring-4 ring-gold rounded-md" value="{{ old('name') }}" type="email" name="email" required maxlength="255" placeholder="Your Email *">
                    @error('email')
                    <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="text-gray-400 w-full">
                    <label for="phone"></label>
                    <input class="w-full p-4 focus:ring-4 ring-gold rounded-md" type="text" name="phone" required maxlength="255" placeholder="Your Phone *">
                    @error('phone')
                    <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="text-gray-400 w-full">
                    <label for="user_message"></label>
                    <textarea class="w-full p-4 focus:ring-4 ring-gold rounded-md h-32" name="user_message">Hello, I'm interested in the apartment with reference {{ $property->reference }} in your new “33 Croisette” program in Cannes. Please send me details of this apartment.</textarea>
                    @error('user_message')
                    <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="bg-gold text-white p-4 rounded-md w-full hover:bg-white hover:ring-gold hover:ring-4 hover:text-gold uppercase">Send your request</button>

                <p class="text-gray-300 text-xs text-justify">By submitting this information request form,
                    you consent to the collection and use of your personal
                    data in accordance with our privacy policy.
                    Your information will only be used to process your
                    request and to improve our services. We are committed
                    to protecting your privacy and will not share your data
                    with third parties without your explicit consent.</p>
            </form>
            <img loading="lazy" class="pt-6" src="{{ asset('images/property/chaise-bleue.webp') }}" alt="blue chair in cannes">
        </div>

    </section>
    <!-- end container text-->

    <!-- cannes infos -->
    <section class="bg-gray-100 mx-auto">

        <!-- container -->
        <div class="container flex flex-col md:flex-row gap-8 items-center justify-end py-6 md:py-0 ">

            <div class="flex flex-col gap-2 font-retro text-7xl">
                <span class="text-right">Cannes</span>
                <span class="font-eurostile text-lg">The most emblematic city on the French Riviera</span>
            </div>

            <div class="w-full md:w-1/5 text-gray-500 text-justify p-6">
                Cannes is a city that cultivates a refined art of living.
                Gastronomic restaurants abound, and local chefs draw their inspiration from the richness of the Mediterranean
                terroir to create tasty dishes based on fresh, local produce.
                Superb relaxation areas, such as the many private beaches and
                the newly refurbished Palm Beach complex, complete the Cannes lifestyle experience.
                The bay of Cannes, bordered by the Lérins islands and the Estérel massif,
                is the ideal setting for unforgettable sea escapades. Cannes also boasts a diverse cultural offering.
                In addition to the Cannes Film Festival, the city hosts a multitude of international
                events throughout the year, making Cannes a dynamic city and a leading economic hub on the world stage.
            </div>

            <img loading="lazy" src="{{ asset('images/property/port-cannes.webp') }}" alt="cannes harbour">

        </div>

    </section>
    <!-- end cannes infos -->

    <!-- albert camus -->
    <section class="py-6">

        <div class="container mx-auto flex flex-col md:flex-row items-center justify-center gap-12 w-full">

            <img class="w-full md:w-1/3" loading="lazy" src="{{ asset('images/property/sunshine.webp') }}" alt="sunset in cannes">

            <div class="flex flex-col w-full md:w-1/2 p-6">
                <span class="font-retro text-5xl">"The light here is stronger than elsewhere, <br>
                    and it seems to seep into our souls and warm them."
                </span>
                <span class="text-right">Albert Camus</span>
            </div>

        </div>

    </section>
    <!-- end albert camus -->

    <!-- carousel interiors -->
    <section class="py-6">
        <div class="interiors-carousel">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <div class="swiper-slide"><img class="w-full" loading="lazy" src="{{ asset('images/property/interiors/app-1.webp') }}" alt="{{ $picture->title }}"></div>
                <div class="swiper-slide"><img class="w-full" loading="lazy" src="{{ asset('images/property/interiors/app-2.webp') }}" alt="{{ $picture->title }}"></div>
                <div class="swiper-slide"><img class="w-full" loading="lazy" src="{{ asset('images/property/interiors/app-3.webp') }}" alt="{{ $picture->title }}"></div>
                <div class="swiper-slide"><img class="w-full" loading="lazy" src="{{ asset('images/property/interiors/app-4.webp') }}" alt="{{ $picture->title }}"></div>
                <div class="swiper-slide"><img class="w-full" loading="lazy" src="{{ asset('images/property/interiors/app-5.webp') }}" alt="{{ $picture->title }}"></div>
                <div class="swiper-slide"><img class="w-full" loading="lazy" src="{{ asset('images/property/interiors/app-6.webp') }}" alt="{{ $picture->title }}"></div>
                <div class="swiper-slide"><img class="w-full" loading="lazy" src="{{ asset('images/property/interiors/app-7.webp') }}" alt="{{ $picture->title }}"></div>
                <div class="swiper-slide"><img class="w-full" loading="lazy" src="{{ asset('images/property/interiors/app-8.webp') }}" alt="{{ $picture->title }}"></div>
                <div class="swiper-slide"><img class="w-full" loading="lazy" src="{{ asset('images/property/interiors/app-9.webp') }}" alt="{{ $picture->title }}"></div>
                <div class="swiper-slide"><img class="w-full" loading="lazy" src="{{ asset('images/property/interiors/app-10.webp') }}" alt="{{ $picture->title }}"></div>
                <div class="swiper-slide"><img class="w-full" loading="lazy" src="{{ asset('images/property/interiors/app-11.webp') }}" alt="{{ $picture->title }}"></div>
                <div class="swiper-slide"><img class="w-full" loading="lazy" src="{{ asset('images/property/interiors/app-12.webp') }}" alt="{{ $picture->title }}"></div>
                <div class="swiper-slide"><img class="w-full" loading="lazy" src="{{ asset('images/property/interiors/app-13.webp') }}" alt="{{ $picture->title }}"></div>
                <div class="swiper-slide"><img class="w-full" loading="lazy" src="{{ asset('images/property/interiors/app-14.webp') }}" alt="{{ $picture->title }}"></div>
                <div class="swiper-slide"><img class="w-full" loading="lazy" src="{{ asset('images/property/interiors/app-15.webp') }}" alt="{{ $picture->title }}"></div>
                <div class="swiper-slide"><img class="w-full" loading="lazy" src="{{ asset('images/property/interiors/app-16.webp') }}" alt="{{ $picture->title }}"></div>
                <div class="swiper-slide"><img class="w-full" loading="lazy" src="{{ asset('images/property/interiors/app-17.webp') }}" alt="{{ $picture->title }}"></div>

            </div>
        </div>
    </section>
    <!-- carousel interiors -->

    <section class="py-6">

        <div class="w-1/2 flex justify-center flex-col mx-auto">
            <h1 class="text-gold text-3xl text-center">Sole Agent</h1>
            <img class="w-32 mx-auto" src="{{ asset('images/Logo_MZCIRE_33.png') }}" alt="logo Michaël Zingraf Real Estate">
        </div>

        <div class="mx-auto flex flex-col md:flex-row items-center justify-center w-full gap-8 my-6 bg-gray-100">
            <img src="{{ asset('images/bureau_vente.jpg') }}" alt="bureau de vente">

            <div class="w-full md:w-1/3 flex flex-col text-gray-500 gap-3 text-center md:text-left">
                <span class="text-gold text-xl font-black">Michaël Zingraf Real Estate</span>
                <span>7 rue Docteur Gérard Monod</span>
                <span>06400 - Cannes</span>
                <a href="tel:+33(0)4.93.39.77.77">+33(0)4.93.39.77.77</a>
                <a href="mailto:33croisette@michaelzingraf.com">33croisette@michaelzingraf.com</a>
            </div>

        </div>

        <img class="mx-auto w-48" src="{{ asset('images/christies-logo-or.png') }}" alt="Christie's International Real Estate">

    </section>

@endsection

@section('dedicated_js')
<script type="module">
    window.onload = function() {
        const swiper = new Swiper('.swiper', {
            autoplay:{
                delay:5000,
            },
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        const interior = new Swiper('.interiors-carousel', {
            breakpoints:{
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                768: {
                    slidesPerView: 5,
                    spaceBetween: 10
                }
            },
            autoplay:{
                delay:3000,
            },
            slidesPerView:5,
            spaceBetween:10,
            direction: 'horizontal',
            loop: true,
            keyboard:{
                enabled:true,
            }
        });
    }
</script>
@endsection
