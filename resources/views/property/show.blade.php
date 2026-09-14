@extends('layouts.app', ['title' => $property->title, 'robots' => 'index,follow'])

@section('content')
    <main class="property-page">
        <section class="property-hero" aria-label="{{ $property->title }}">
            <div class="property-hero-swiper swiper">
                <div class="swiper-wrapper">
                    @foreach($property->pictures as $picture)
                        <div class="swiper-slide">
                            <img src="{{ $picture->url }}" alt="{{ $picture->title ?: $property->title }}">
                        </div>
                    @endforeach
                </div>
                <div class="property-hero-controls" aria-label="Gallery controls">
                    <button class="property-swiper-prev" type="button" aria-label="Previous image"></button>
                    <button class="property-swiper-next" type="button" aria-label="Next image"></button>
                </div>
            </div>

            <div class="property-brand">
                <a href="{{ route('home') }}" aria-label="Back to 33 Croisette homepage">
                    <img loading="lazy" src="{{ asset('images/Logo_MZCIRE_33.png') }}" alt="Michaël Zingraf Real Estate">
                    <img loading="lazy" src="{{ asset('images/logo-33-croisette.png') }}" alt="33 Croisette">
                </a>
            </div>

            <div class="property-hero-content">
                <p class="property-kicker">33 Croisette Cannes</p>
                <h1>{{ $property->title }}</h1>
                <div class="property-hero-actions">
                    <a href="#property-enquire" class="property-btn property-btn-primary">Request information</a>
                    @if($property->floorPlan)
                        <button class="property-btn property-btn-secondary" type="button" x-on:click="isModalOpen = true">View floor plan</button>
                    @endif
                </div>
            </div>

            <aside class="property-spec-card" aria-label="Apartment key details">
                <div>
                    <span>Floor</span>
                    <strong>{{ config('floors.'.$property->floor) ?? $property->floor }}</strong>
                </div>
                <div>
                    <span>Rooms</span>
                    <strong>{{ $property->rooms }}</strong>
                </div>
                <div>
                    <span>Bedrooms</span>
                    <strong>{{ $property->bedrooms }}</strong>
                </div>
                <div>
                    <span>Area</span>
                    <strong>{{ $property->area }} <small>sqm</small></strong>
                </div>
                <div>
                    <span>Price</span>
                    <strong>On request</strong>
                </div>
            </aside>
        </section>

        <section class="property-intro" id="residence">
            <div class="property-intro-inner">
                <div class="property-copy">
                    <p class="property-kicker">Private residence</p>
                    <h2>An exceptional apartment on La Croisette</h2>
                    <div class="property-description">
                        {!! $property->description !!}
                    </div>
                </div>

                <figure class="property-image-card">
                    <img loading="lazy" src="{{ asset('images/property/cannes-front.webp') }}" alt="Cannes seafront">
                    <figcaption>Facing the most iconic address on the Riviera.</figcaption>
                </figure>
            </div>
        </section>

        <section class="property-enquire" id="property-enquire">
            <div class="property-enquire-inner">
                <div class="property-enquire-copy">
                    <p class="property-kicker">Enquire</p>
                    <h2>Arrange a private presentation</h2>
                    <p>Receive the complete residence file, availability details and a personal introduction to this apartment.</p>
                    @if($property->floorPlan)
                        <button class="property-plan-link" type="button" x-on:click="isModalOpen = true">
                            <img src="{{ asset('images/floor-plan.png') }}" alt="">
                            <span>View the floor plan</span>
                        </button>
                    @endif
                </div>

                <div class="property-form-panel">
                    @include('partials._form_request', ['source' => $property->title])
                </div>
            </div>
        </section>

        <section class="property-cannes">
            <div class="property-cannes-copy">
                <p class="property-kicker">Cannes lifestyle</p>
                <h2>The most emblematic city on the French Riviera</h2>
                <p>
                    Cannes cultivates a refined art of living, from private beaches and gastronomic restaurants
                    to the light of the bay, the Lerins islands and the international rhythm of La Croisette.
                </p>
            </div>
            <figure class="property-cannes-media">
                <img loading="lazy" src="{{ asset('images/property/port-cannes.webp') }}" alt="Cannes harbour">
            </figure>
        </section>

        <section class="property-quote">
            <figure>
                <img loading="lazy" src="{{ asset('images/property/sunshine.webp') }}" alt="Sunset over Cannes">
            </figure>
            <blockquote>
                <q>The light here is stronger than elsewhere, and it seems to seep into our souls and warm them.</q>
                <cite>Albert Camus</cite>
            </blockquote>
        </section>

        <section class="property-interiors" aria-label="Interior perspectives">
            <div class="property-section-heading">
                <p class="property-kicker">Interior perspectives</p>
                <h2>A refined Mediterranean atmosphere</h2>
            </div>

            <div class="property-interiors-carousel interiors-carousel">
                <div class="swiper-wrapper">
                    @for($i = 1; $i <= 17; $i++)
                        <div class="swiper-slide">
                            <img loading="lazy" src="{{ asset('images/property/interiors/app-'.$i.'.webp') }}" alt="33 Croisette interior perspective {{ $i }}">
                        </div>
                    @endfor
                </div>
            </div>
        </section>

        <section class="property-agent">
            <div class="property-agent-inner">
                <div class="property-agent-copy">
                    <p class="property-kicker">Sole Agent</p>
                    <h2>Michaël Zingraf Real Estate</h2>
                    <p>Christie's International Real Estate exclusive affiliate for Provence-Alpes-Côte d'Azur.</p>
                    <address>
                        7 rue Docteur Gérard Monod<br>
                        06400 Cannes<br>
                        <a href="tel:+33493397777">+33 4 93 39 77 77</a><br>
                        <a href="mailto:33croisette@michaelzingraf.com">33croisette@michaelzingraf.com</a>
                    </address>
                </div>
                <figure class="property-agent-media">
                    <img loading="lazy" src="{{ asset('images/bureau_vente.jpg') }}" alt="Michaël Zingraf Real Estate Cannes office">
                    <figcaption>
                        <img loading="lazy" src="{{ asset('images/Logo_MZCIRE_33.png') }}" alt="Michaël Zingraf Real Estate">
                        <img loading="lazy" src="{{ asset('images/christies-logo-or.png') }}" alt="Christie's International Real Estate">
                    </figcaption>
                </figure>
            </div>
        </section>

        <div class="overlay property-plan-overlay" x-show="isModalOpen" x-cloak></div>
        <div class="modal property-plan-modal" role="dialog" aria-modal="true" aria-label="Floor plan" tabindex="-1" x-show="isModalOpen" x-on:click.away="isModalOpen = false" x-cloak x-transition>
            <div class="model-inner property-plan-inner">
                <div class="modal-header property-plan-header">
                    <h3>Floor plan</h3>
                    <button aria-label="Close floor plan" type="button" x-on:click="isModalOpen=false">Close</button>
                </div>
                @if($property->floorPlan)
                    <img src="{{ asset('storage/plan/'. $property->floorPlan->name) }}" alt="{{ $property->title }} floor plan">
                @endif
            </div>
        </div>
    </main>
@endsection

@section('dedicated_js')
<script type="module">
    window.onload = function() {
        new Swiper('.property-hero-swiper', {
            autoplay: {
                delay: 5200,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true,
            },
            speed: 1200,
            loop: true,
            navigation: {
                nextEl: '.property-swiper-next',
                prevEl: '.property-swiper-prev',
            },
            keyboard: {
                enabled: true,
            },
        });

        new Swiper('.property-interiors-carousel', {
            breakpoints: {
                320: {
                    slidesPerView: 1.08,
                    spaceBetween: 14,
                },
                768: {
                    slidesPerView: 2.35,
                    spaceBetween: 18,
                },
                1180: {
                    slidesPerView: 3.35,
                    spaceBetween: 22,
                },
            },
            autoplay: {
                delay: 3000,
            },
            speed: 900,
            loop: true,
            keyboard: {
                enabled: true,
            },
        });
    }
</script>
@endsection
