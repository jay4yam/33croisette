import './bootstrap';
import Alpine from 'alpinejs'
Alpine.start()
window.Alpine = Alpine
import './jquery.1.8.3.min.js';
import './featherlight.min.js';
import './featherlight.gallery.min.js';
import './jquery.enllax.min.js';
import './jquery.scrollUp.min.js';
import './jquery.easing.min.js';
import './jquery.stickyNavbar.min.js';
import './jquery.waypoints.min.js';
import './lightbox.min.js';
import './site.js';

import anime from 'animejs/lib/anime.es.js';
window.anime = anime;

import {Autoplay, Navigation} from 'swiper/modules';
import Swiper from 'swiper';
Swiper.use([Autoplay, Navigation]);
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
window.Swiper = Swiper





