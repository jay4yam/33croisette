<nav class="fixed top-0 z-50 w-full flex justify-end p-4 md:p-6">
    <button
        type="button"
        class="menu-button"
        aria-label="Open menu"
        :aria-expanded="menuOpen.toString()"
        @click="menuOpen = !menuOpen; if (menuOpen) { $nextTick(() => loadMenu()) }"
        x-cloak
        :class="{ 'active': menuOpen }">
        <span class="menu-button-label">Menu</span>
        <svg viewBox="0 0 50 50" aria-hidden="true">
            <line class="line line1"
                  x1="10" y1="15" x2="40" y2="15"
                  :style="menuOpen ? 'transform: rotate(45deg);' : ''" />
            <line class="line line2"
                  x1="10" y1="25" x2="40" y2="25"
                  :style="menuOpen ? 'opacity: 0;' : ''" />
            <line class="line line3"
                  x1="10" y1="35" x2="40" y2="35"
                  :style="menuOpen ? 'transform: rotate(-45deg);' : ''" />
        </svg>
    </button>
</nav>

<!-- Menu Slide -->
<div
    class="menu-backdrop"
    x-cloak
    x-show="menuOpen"
    x-transition.opacity
    @click="menuOpen = false"
></div>

<div class="side-menu"
    x-cloak
    x-show="menuOpen"
    x-transition:enter="transition transform ease-out duration-300"
    x-transition:enter-start="translate-x-full opacity-0"
    x-transition:enter-end="translate-x-0 opacity-100 scale-100"
    x-transition:leave="transition transform ease-in duration-300"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="translate-x-full"
>
    <!-- bouton burger -->
    <button
        type="button"
        class="menu-button menu-button-inside active"
        aria-label="Close menu"
        @click="menuOpen = false"
        x-cloak>
        <span class="menu-button-label">Close</span>
        <svg viewBox="0 0 50 50" aria-hidden="true">
            <line class="line line1" x1="10" y1="15" x2="40" y2="15" style="transform: rotate(45deg);" />
            <line class="line line2" x1="10" y1="25" x2="40" y2="25" style="opacity: 0;" />
            <line class="line line3" x1="10" y1="35" x2="40" y2="35" style="transform: rotate(-45deg);" />
        </svg>
    </button>
    <!-- end bouton burger -->

    <div class="menu-kicker">33 Croisette Cannes</div>

    <ul id="menu_ul" class="font-cinzel">
        <li>
            <a href="{{ route('home') }}" class="hover:text-gold">Home</a>
        </li>
        <li>
            <a href="#apartments" class="hover:text-gold">Apartments</a>
        </li>
        <li>
            <a href="#penthouse" class="hover:text-gold">Penthouses</a>
        </li>
        <li>
            <a href="{{ route('digital.brochure') }}" class="hover:text-gold">Digital Brochure</a>
        </li>
    </ul>

    <div id="form_brochure" class="menu-panel">

        <h4 class="h4 text-xl font-bold font-cinzel">Get the Brochure</h4>

        <img class="img" src="{{ asset('/images/download-the-brochure.webp') }}" alt="download">

        <form id="downloadBrochureId" action="{{ route('download.brochure') }}" class="form_brochure_form" method="post">
            @csrf
            @method('post')

            <input type="hidden" name="source" value="download_brochure">
            <input type="hidden" name="ip_address" value="{{ request()->ip() }}">
            <input type="hidden" name="recaptcha_token" id="recaptcha-token-brochure">
            <input type="hidden" name="action" value="download_brochure">

            <div class="py-2">
                <input type="email" name="email" class="email w-full" placeholder="your email" required>
            </div>

            <button onclick="downloadBrochure(event, 'download_brochure')" type="submit" class="g-recaptcha menu-submit">Get the Brochure</button>

        </form>

    </div>

    <div id="socials" class="menu-socials">
        <h4 class="h4 text-xl font-bold font-cinzel">Follow Us</h4>
        <div id="social_icons" class="flex justify-between gap-4">
            <a href="https://www.instagram.com/33croisette/" class="hover:text-gold" target="_blank">
                <x-fab-instagram class="w-6"/>
            </a>
            <a href="https://fr.pinterest.com/33croisette/" class="hover:text-gold" target="_blank">
                <x-fab-pinterest class="w-6"/>
            </a>
            <a href="https://www.linkedin.com/company/michael-zingraf-immobilier" class="hover:text-gold" target="_blank">
                <x-fab-linkedin class="w-6"/>
            </a>
        </div>
    </div>
</div>
<!-- end Menu Slide -->
