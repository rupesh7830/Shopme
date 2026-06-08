import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';


const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {

    if (window.scrollY > 20) {
        navbar.classList.remove('border-transparent');
        navbar.classList.add('border-gray-200', 'shadow-sm');
    } else {
        navbar.classList.remove('border-gray-200', 'shadow-sm');
        navbar.classList.add('border-transparent');
    }

});


// Counter Animation
document.addEventListener('DOMContentLoaded', () => {

    const counters = document.querySelectorAll('.counter');

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                const counter = entry.target;
                const target = +counter.dataset.target;
                const suffix = counter.dataset.suffix || '';

                let count = 0;

                const updateCounter = () => {

                    const increment = target / 100;

                    if (count < target) {

                        count += increment;

                        counter.innerText =
                            Math.ceil(count) + suffix;

                        requestAnimationFrame(updateCounter);

                    } else {

                        counter.innerText =
                            target + suffix;

                    }

                };

                updateCounter();

                observer.unobserve(counter);

            }

        });

    }, {
        threshold: 0.5
    });

    counters.forEach(counter => {
        observer.observe(counter);
    });

});

// testimonials carousel

// Testimonials Carousel
document.addEventListener('DOMContentLoaded', () => {

    const testimonialSwiper = document.querySelector('.testimonialSwiper');

    if (testimonialSwiper) {

        console.log('Swiper Init');

        new Swiper('.testimonialSwiper', {

            modules: [
                Navigation,
                Pagination,
                Autoplay
            ],

            loop: true,

            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            navigation: {
                nextEl: '.testimonial-next',
                prevEl: '.testimonial-prev',
            },

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            spaceBetween: 24,

            breakpoints: {

                0: {
                    slidesPerView: 1,
                },

                768: {
                    slidesPerView: 2,
                },

                1024: {
                    slidesPerView: 3,
                },

            }

        });

    }

});

// Product Filtering
const buttons = document.querySelectorAll('.filter-btn');
const products = document.querySelectorAll('.product-card');

buttons.forEach(button => {

    button.addEventListener('click', () => {

        const category = button.dataset.category;

        // Active Button
        buttons.forEach(btn => {
            btn.classList.remove('bg-black','text-white');
            btn.classList.add('border','border-gray-200');
        });

        button.classList.add('bg-black','text-white');

        products.forEach(product => {

            const match =
                category === 'all' ||
                product.dataset.category === category;

            if(match){

                product.style.display = 'block';

                setTimeout(() => {
                    product.classList.remove('hide');
                    product.classList.add('show');
                }, 50);

            }else{

                product.classList.remove('show');
                product.classList.add('hide');

                setTimeout(() => {
                    product.style.display = 'none';
                }, 400);

            }

        });

    });

});

