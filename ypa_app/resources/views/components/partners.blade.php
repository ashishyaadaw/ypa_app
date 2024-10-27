<section class="bg-gray-50 flex justify-center">
    <div class="mx-px max-w-[1340px]  px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3 lg:items-center lg:gap-16">
            <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
                <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-4xl">Have a look at
                    our&nbsp;<span class="text-red-600 font-dancing-script ">Partners</span></h2>
                <p class="mt-4 text-gray-700">YPA is growing with the effort of volunteers, members and our
                    partners.Thank you for being in support .</p>
            </div>
            <div class="-mx-6 lg:col-span-2 lg:mx-0 slider-container">
                <div class="splide" id="partner-carousel">
                    <div class="splide__arrows hidden">
                        <button class="splide__arrow splide__arrow--prev">

                        </button>
                        <button class="splide__arrow splide__arrow--next">

                        </button>
                    </div>
                    <div class="splide__track">
                        <ul class="splide__list partners-slide">


                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    async function fetchPartners() {
        await fetch('http://127.0.0.1:8000/api/partners/')
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


                    $('.partners-slide').append(`
                          <li class="splide__slide p-1" ${isChecked} data-splide-interval="1000">
                                <div class="h-56 w-56 p-10 bg-white" tabindex="-1"
                                    style="width: 100%; display: inline-block;"><a href="#"><img
                                            src="${element.href}" alt="${element.name}"
                                            class="h-auto w-fit"></a></div>
                            </li>`);
                })
            })
            .catch(error => {
                console.error('Error:', error);
                // Handle error (e.g., show an error message)
            });


        var slideCount_partner = 2;
        if ($(window).width() > 1500) {
            slideCount_partner = 5;
        } else if ($(window).width() > 1000 && $(window).width() <= 1500) {
            slideCount_partner = 4;
        } else if ($(window).width() > 700 && $(window).width() <= 1000) {
            slideCount_partner = 3;
        } else {
            slideCount_partner = 2;
        }

        var splide = new Splide('#partner-carousel', {
            type: 'loop',
            perPage: slideCount_partner,
            autoScroll: {
                speed: 1,
                autoStart: true,
            },
        });
        splide.mount(window.splide.Extensions);

    }
    fetchPartners();
    $(document).ready(function() {

    });
</script>
