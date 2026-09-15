<!DOCTYPE html>
<html>
<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <!--Page Title-->
    <title>{{ $title ?? 'New Luxury Building Program in Cannes | 33 Croisette' }}</title>

    <!--Meta Keywords and Description-->
    <meta name="keywords" content="">
    <meta name="description" content="Buy a luxury flat in Cannes with the new building program 33Croisette, sold in exclusivity by Michaël Zingraf Real Estate">

    <!--Meta robots and Description-->
    <meta name="robots" content="{{ $robots }}">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" title="Favicon"/>

    <!-- Main CSS Files -->
    @vite('resources/css/app.css')

    <!-- css for maps -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin=""/>
    <!--Google Webfonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KQNR7868');</script>
    <!-- End Google Tag Manager -->
</head>
<body x-data="{'isModalOpen': false, 'menuOpen': false}" x-on:keydown.escape="isModalOpen=false">

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQNR7868"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->


<div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
    <div class="top-border wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
    <div class="bottom-border wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
    <div class="left-border wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
</div>

<div id="wrapper">
    @include('partials._nav')
    @yield('content')
</div>

<!--Footer-->
<footer id="landing-footer" class="footer-luxury">
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'RealEstateAgent',
            'name' => 'Michaël Zingraf Real Estate',
            'url' => 'https://www.michaelzingraf.com',
            'telephone' => '+33 4 93 39 77 77',
            'email' => '33croisette@michaelzingraf.com',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => '7 rue Docteur Gérard Monod',
                'postalCode' => '06400',
                'addressLocality' => 'Cannes',
                'addressCountry' => 'FR',
            ],
            'sameAs' => [
                'https://www.instagram.com/33croisette/',
                'https://fr.pinterest.com/33croisette/',
                'https://www.linkedin.com/company/michael-zingraf-immobilier',
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    <div class="footer-inner">
        <div class="footer-grid">
            <div>
                <img class="footer-logo-small" alt="33 Croisette" loading="lazy" src="{{ asset('images/logo-33-croisette.png') }}">
                <p class="footer-title">33 Croisette</p>
                <p class="footer-muted">33 boulevard de la Croisette<br>06400 Cannes</p>
            </div>

            <div>
                <img class="footer-logo-small" alt="Michaël Zingraf Christie's International Real Estate" loading="lazy" src="{{ asset('images/Logo_MZCIRE_33.png') }}">
                <p class="footer-kicker">Sole Agent</p>
                <p class="footer-title">Michaël Zingraf Real Estate</p>
                <p class="footer-subtitle">Christie's International Real Estate</p>
                <p class="footer-muted">Exclusive affiliate for Provence-Alpes-Côte d'Azur</p>
                <p class="footer-muted footer-address">7 rue Docteur Gérard Monod<br>06400 Cannes</p>
                <p><a href="tel:+33493397777">+33 4 93 39 77 77</a></p>
                <p><a href="mailto:33croisette@michaelzingraf.com">33croisette@michaelzingraf.com</a></p>
            </div>

            <div class="footer-links-grid">
                <nav aria-label="Footer">
                    <p class="footer-kicker">Site</p>
                    <ul>
                        <li><a href="/#intro">Residence</a></li>
                        <li><a href="/#apartments">Apartments</a></li>
                        <li><a href="/#maps">Location</a></li>
                    </ul>
                </nav>

                <div>
                    <p class="footer-kicker">Follow</p>
                    <ul>
                        <li><a href="https://www.instagram.com/33croisette/" target="_blank" rel="noopener noreferrer">Instagram</a></li>
                        <li><a href="https://fr.pinterest.com/33croisette/" target="_blank" rel="noopener noreferrer">Pinterest</a></li>
                        <li><a href="https://www.linkedin.com/company/michael-zingraf-immobilier" target="_blank" rel="noopener noreferrer">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© {{ now()->year }} Michaël Zingraf Real Estate. Non-contractual visuals.</p>
            <p>
                <a href="/legal-notice/">Legal notice</a>
                <a href="/privacy-policy/">Privacy policy</a>
            </p>
        </div>
    </div>
</footer>
<!--End of Footer-->

<!-- Include JavaScript resources -->
@vite('resources/js/app.js')
@if(config('google_recaptcha.site_key'))
<script src="https://www.google.com/recaptcha/enterprise.js?render={{ config('google_recaptcha.site_key') }}"></script>
@endif
<script>
    const recaptchaSiteKey = @json(config('google_recaptcha.site_key'));

    function submitWithRecaptcha(e, action) {
        e.preventDefault();

        const form = e.currentTarget.closest('form');
        const tokenInput = form.querySelector('input[name="recaptcha_token"]');
        const actionInput = form.querySelector('input[name="action"]');

        if (! form.reportValidity()) {
            return;
        }

        if (! tokenInput || ! actionInput) {
            form.submit();
            return;
        }

        if (! recaptchaSiteKey || typeof grecaptcha === 'undefined') {
            form.submit();
            return;
        }

        grecaptcha.enterprise.ready(async () => {
            const token = await grecaptcha.enterprise.execute(recaptchaSiteKey, {
                action: action,
            });

            tokenInput.value = token;
            actionInput.value = action;

            form.submit();
        });
    }

    function sendRequest(e, action) {
        submitWithRecaptcha(e, action);
    }

    function downloadBrochure(e, action) {
        submitWithRecaptcha(e, action);
    }
</script>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>
<script type="module">
    window.loadMenu = function() {

        //anim le menu ul li du layer menu
        let Tl = gsap.timeline();

        Tl.from('#menu_ul li', {opacity: 0, duration: 1, x: 50, stagger: 0.2})
        Tl.fromTo('#form_brochure', {x:50, opacity:0}, {x:0, opacity:1}, '-=0.5');
        Tl.fromTo('#form_brochure .h4', {x:50, opacity:0}, {x:0, opacity:1}, '-=0.5');
        Tl.fromTo('#form_brochure .img', {y:50, opacity:0}, {y:0, opacity:1});
        Tl.fromTo('#form_brochure .form_brochure_form .email', {y:50, opacity:0}, {y:0, opacity:1});
        Tl.fromTo('#form_brochure .form_brochure_form button', {y:50, opacity:0}, {y:0, opacity:1});
        Tl.fromTo('#socials', {x:50, opacity:0}, {x:0, opacity:1}, '-=0.5');
        Tl.fromTo('#socials .h4', {x:50, opacity:0}, {x:0, opacity:1}, '-=0.5');
        Tl.fromTo('#socials #social_icons', {y:50, opacity:0}, {y:0, opacity:1, stagger: 3});
    }
</script>

@yield('dedicated_js')
</body>
</html>
