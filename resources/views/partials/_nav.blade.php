<nav class="fixed top-0 z-50 w-full flex justify-end p-4">
    <svg
        class="menu-button"
        viewBox="0 0 50 50"
        @click="menuOpen = !menuOpen; loadMenu()"
        x-cloak
        :class="{ 'active': menuOpen }">
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
</nav>

<!-- Menu Slide -->
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
    <svg
        class="menu-button"
        viewBox="0 0 50 50"
        @click="menuOpen = !menuOpen"
        x-cloak
        :class="{ 'active': menuOpen }">
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
    <!-- end bouton burger -->

    <ul id="menu_ul" class="font-cinzel">
        <li>
            <a href="{{ route('home') }}" class="hover:text-gold">Home</a>
        </li>
        <li>Penthouse</li>
        <li>
            <a href="{{ route('digital.brochure') }}" class="hover:text-gold">Digital Brochure</a>
        </li>
    </ul>

    <div id="form_brochure" class="border-t border-t-gold pb-6">
        <h4 class="h4 text-xl text-gray-600 font-bold font-cinzel">Get the Brochure</h4>
        <img class="img" src="{{ asset('/images/download-the-brochure.webp') }}" alt="download">
        <form class="form_brochure_form" action="{{ route('download.brochure') }}" method="post">
            @csrf
            @method('post')
            <input type="hidden" name="source" value="download_brochure">
            <input type="hidden" name="ip_address" value="{{ request()->ip() }}">
            <div class="py-2">
                <input type="email" name="email" class="email w-full border-gray-200 p-1" placeholder="your email">
            </div>
            <button type="submit"
                    data-sitekey="6Lct5sIqAAAAAOAAG_IubdmbZPxD_XNV4LIPuBLK"
                    data-callback="onSubmitBrochure"
                    data-action="request"
                    class="g-recaptcha w-full bg-gold text-white p-1 rounded-md hover:bg-white hover:ring-gold hover:ring-2 hover:text-gold uppercase">Get the Brochure</button>
        </form>
    </div>

    <div id="socials" class="border-t border-t-gold">
        <h4 class="h4 text-xl text-gray-600 font-bold font-cinzel">Follow Us</h4>
        <div id="social_icons" class="flex justify-between gap-4 text-gray-600">
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

