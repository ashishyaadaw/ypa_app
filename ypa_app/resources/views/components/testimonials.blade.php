<section class="bg-gray-300 p-4 mt-4 animated-div">
    <h2 class="text-center  text-4xl pt-5 font-bold tracking-tight text-gray-900 sm:text-5xl">Meet to our<span
            class="text-red-600 font-dancing-script "> Testimonials</span></h2>
    <div class="mx-auto max-w-screen-xl sm:px-6 lg:px-8 lg:py-16">
        <section id="testimonial-carousel" class="splide" aria-label="Beautiful Images">
            <div class="splide__arrows hidden">
                <button class="splide__arrow splide__arrow--prev">

                </button>
                <button class="splide__arrow splide__arrow--next">

                </button>
            </div>
            <div class="splide__track">
                <ul class="splide__list testimonials-slides">


                </ul>
            </div>
        </section>

    </div>
</section>
<script></script>

<script>
    async function fetchTestimonials() {
        await fetch('http://127.0.0.1:8000/api/testimonials/')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                var isChecked = '';
                data.data.forEach(element => {
                    if (element.status == 'TRUE') {
                        isChecked = '';
                    } else {
                        isChecked = 'hidden';
                    }


                    $('.testimonials-slides').append(`
                            <li class="splide__slide p-1" ${isChecked}>
                        <div class="flip-container bg-white px-6 py-8 rounded-lg shadow-lg text-center h-[325px] w-[300px]">
                            <div class="flipper rounded-md w-full bg-white  h-full">
                                <div class="front w-full h-full">
                                    <div class="bg-white px-6 py-8 rounded-lg h-full shadow-lg text-center">
                                        <div class="mb-3">
                                            <img class="w-auto mx-auto h-[149px] rounded-full" load="lazy" src="${element.href}" alt="No Text"/>
                                                
                                         </div>
                                        <h2 class="text-xl font-bona-nova-sc-bold text-gray-700">${element.name}</h2><span
                                            class="text-blue-500 font-rajdhani-regular font-bold uppercase block mb-5">${element.title}</span>
                                       
                                    </div>
                                </div>
                                <div class="back text-center">
                                    <div class=" row text-center text-sm p-3">
                                        <div class="text-5xl p-2 text-left text-red-600">❛❛</div>
                                        <p class="font-playwrite-de-grund">${element.contents}</p>
                                        <div class="text-5xl p-2 text-right text-red-600">❜❜</div>
                                    </div>
                                    <h2 class="text-xl font-bona-nova-sc-bold text-gray-700">-${element.name}</h2>
                                   
                                </div>
                            </div>
                        </div>
                    </li>`);
                })
            })
            .catch(error => {
                console.error('Error:', error);
                // Handle error (e.g., show an error message)
            });



        var slideCount = 4;
        if ($(window).width() > 1500) {
            slideCount = 4;
        } else if ($(window).width() > 1000 && $(window).width() <= 1500) {
            slideCount = 3;
        } else if ($(window).width() > 700 && $(window).width() <= 1000) {
            slideCount = 2;
        } else {
            slideCount = 1;
        }

        var splide = new Splide('#testimonial-carousel', {
            type: 'loop',
            perPage: slideCount,
            autoScroll: {
                speed: 0.5,
                autoStart: true,
            },
        });
        splide.mount(window.splide.Extensions);
    }
    fetchTestimonials();
    $(document).ready(function() {


    });
</script>
