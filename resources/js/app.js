import './bootstrap';
import Alpine from 'alpinejs';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
Alpine.start()
window.Alpine = Alpine
gsap.registerPlugin(ScrollTrigger);
window.Swiper = Swiper
window.gsap = gsap;





